<?php 
namespace Symfony\Component\EventDispatcher
{
interface EventSubscriberInterface
{
public static function getSubscribedEvents();
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
abstract class SessionListener implements EventSubscriberInterface
{
public function onKernelRequest(GetResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
$request = $event->getRequest();
$session = $this->getSession();
if (null === $session || $request->hasSession()) {
return;
}
$request->setSession($session);
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::REQUEST => array('onKernelRequest', 128),
);
}
abstract protected function getSession();
}
}
namespace Symfony\Bundle\FrameworkBundle\EventListener
{
use Symfony\Component\HttpKernel\EventListener\SessionListener as BaseSessionListener;
use Symfony\Component\DependencyInjection\ContainerInterface;
class SessionListener extends BaseSessionListener
{
private $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
protected function getSession()
{
if (!$this->container->has('session')) {
return;
}
return $this->container->get('session');
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
interface SessionStorageInterface
{
public function start();
public function isStarted();
public function getId();
public function setId($id);
public function getName();
public function setName($name);
public function regenerate($destroy = false, $lifetime = null);
public function save();
public function clear();
public function getBag($name);
public function registerBag(SessionBagInterface $bag);
public function getMetadataBag();
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\SessionHandlerProxy;
class NativeSessionStorage implements SessionStorageInterface
{
protected $bags;
protected $started = false;
protected $closed = false;
protected $saveHandler;
protected $metadataBag;
public function __construct(array $options = array(), $handler = null, MetadataBag $metaBag = null)
{
session_cache_limiter(''); ini_set('session.use_cookies', 1);
session_register_shutdown();
$this->setMetadataBag($metaBag);
$this->setOptions($options);
$this->setSaveHandler($handler);
}
public function getSaveHandler()
{
return $this->saveHandler;
}
public function start()
{
if ($this->started) {
return true;
}
if (\PHP_SESSION_ACTIVE === session_status()) {
throw new \RuntimeException('Failed to start the session: already started by PHP.');
}
if (ini_get('session.use_cookies') && headers_sent($file, $line)) {
throw new \RuntimeException(sprintf('Failed to start the session because headers have already been sent by "%s" at line %d.', $file, $line));
}
if (!session_start()) {
throw new \RuntimeException('Failed to start the session');
}
$this->loadSession();
return true;
}
public function getId()
{
return $this->saveHandler->getId();
}
public function setId($id)
{
$this->saveHandler->setId($id);
}
public function getName()
{
return $this->saveHandler->getName();
}
public function setName($name)
{
$this->saveHandler->setName($name);
}
public function regenerate($destroy = false, $lifetime = null)
{
if (\PHP_SESSION_ACTIVE !== session_status()) {
return false;
}
if (null !== $lifetime) {
ini_set('session.cookie_lifetime', $lifetime);
}
if ($destroy) {
$this->metadataBag->stampNew();
}
$isRegenerated = session_regenerate_id($destroy);
$this->loadSession();
return $isRegenerated;
}
public function save()
{
session_write_close();
$this->closed = true;
$this->started = false;
}
public function clear()
{
foreach ($this->bags as $bag) {
$bag->clear();
}
$_SESSION = array();
$this->loadSession();
}
public function registerBag(SessionBagInterface $bag)
{
if ($this->started) {
throw new \LogicException('Cannot register a bag when the session is already started.');
}
$this->bags[$bag->getName()] = $bag;
}
public function getBag($name)
{
if (!isset($this->bags[$name])) {
throw new \InvalidArgumentException(sprintf('The SessionBagInterface %s is not registered.', $name));
}
if ($this->saveHandler->isActive() && !$this->started) {
$this->loadSession();
} elseif (!$this->started) {
$this->start();
}
return $this->bags[$name];
}
public function setMetadataBag(MetadataBag $metaBag = null)
{
if (null === $metaBag) {
$metaBag = new MetadataBag();
}
$this->metadataBag = $metaBag;
}
public function getMetadataBag()
{
return $this->metadataBag;
}
public function isStarted()
{
return $this->started;
}
public function setOptions(array $options)
{
$validOptions = array_flip(array('cache_limiter','cookie_domain','cookie_httponly','cookie_lifetime','cookie_path','cookie_secure','entropy_file','entropy_length','gc_divisor','gc_maxlifetime','gc_probability','hash_bits_per_character','hash_function','name','referer_check','serialize_handler','use_cookies','use_only_cookies','use_trans_sid','upload_progress.enabled','upload_progress.cleanup','upload_progress.prefix','upload_progress.name','upload_progress.freq','upload_progress.min-freq','url_rewriter.tags',
));
foreach ($options as $key => $value) {
if (isset($validOptions[$key])) {
ini_set('session.'.$key, $value);
}
}
}
public function setSaveHandler($saveHandler = null)
{
if (!$saveHandler instanceof AbstractProxy &&
!$saveHandler instanceof NativeSessionHandler &&
!$saveHandler instanceof \SessionHandlerInterface &&
null !== $saveHandler) {
throw new \InvalidArgumentException('Must be instance of AbstractProxy or NativeSessionHandler; implement \SessionHandlerInterface; or be null.');
}
if (!$saveHandler instanceof AbstractProxy && $saveHandler instanceof \SessionHandlerInterface) {
$saveHandler = new SessionHandlerProxy($saveHandler);
} elseif (!$saveHandler instanceof AbstractProxy) {
$saveHandler = new SessionHandlerProxy(new \SessionHandler());
}
$this->saveHandler = $saveHandler;
if ($this->saveHandler instanceof \SessionHandlerInterface) {
session_set_save_handler($this->saveHandler, false);
}
}
protected function loadSession(array &$session = null)
{
if (null === $session) {
$session = &$_SESSION;
}
$bags = array_merge($this->bags, array($this->metadataBag));
foreach ($bags as $bag) {
$key = $bag->getStorageKey();
$session[$key] = isset($session[$key]) ? $session[$key] : array();
$bag->initialize($session[$key]);
}
$this->started = true;
$this->closed = false;
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeSessionHandler;
class PhpBridgeSessionStorage extends NativeSessionStorage
{
public function __construct($handler = null, MetadataBag $metaBag = null)
{
$this->setMetadataBag($metaBag);
$this->setSaveHandler($handler);
}
public function start()
{
if ($this->started) {
return true;
}
$this->loadSession();
return true;
}
public function clear()
{
foreach ($this->bags as $bag) {
$bag->clear();
}
$this->loadSession();
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Handler
{
class NativeSessionHandler extends \SessionHandler
{
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Handler
{
class NativeFileSessionHandler extends NativeSessionHandler
{
public function __construct($savePath = null)
{
if (null === $savePath) {
$savePath = ini_get('session.save_path');
}
$baseDir = $savePath;
if ($count = substr_count($savePath,';')) {
if ($count > 2) {
throw new \InvalidArgumentException(sprintf('Invalid argument $savePath \'%s\'', $savePath));
}
$baseDir = ltrim(strrchr($savePath,';'),';');
}
if ($baseDir && !is_dir($baseDir) && !@mkdir($baseDir, 0777, true) && !is_dir($baseDir)) {
throw new \RuntimeException(sprintf('Session Storage was not able to create directory "%s"', $baseDir));
}
ini_set('session.save_path', $savePath);
ini_set('session.save_handler','files');
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy
{
abstract class AbstractProxy
{
protected $wrapper = false;
protected $saveHandlerName;
public function getSaveHandlerName()
{
return $this->saveHandlerName;
}
public function isSessionHandlerInterface()
{
return $this instanceof \SessionHandlerInterface;
}
public function isWrapper()
{
return $this->wrapper;
}
public function isActive()
{
return \PHP_SESSION_ACTIVE === session_status();
}
public function getId()
{
return session_id();
}
public function setId($id)
{
if ($this->isActive()) {
throw new \LogicException('Cannot change the ID of an active session');
}
session_id($id);
}
public function getName()
{
return session_name();
}
public function setName($name)
{
if ($this->isActive()) {
throw new \LogicException('Cannot change the name of an active session');
}
session_name($name);
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy
{
class SessionHandlerProxy extends AbstractProxy implements \SessionHandlerInterface
{
protected $handler;
public function __construct(\SessionHandlerInterface $handler)
{
$this->handler = $handler;
$this->wrapper = ($handler instanceof \SessionHandler);
$this->saveHandlerName = $this->wrapper ? ini_get('session.save_handler') :'user';
}
public function open($savePath, $sessionName)
{
return (bool) $this->handler->open($savePath, $sessionName);
}
public function close()
{
return (bool) $this->handler->close();
}
public function read($sessionId)
{
return (string) $this->handler->read($sessionId);
}
public function write($sessionId, $data)
{
return (bool) $this->handler->write($sessionId, $data);
}
public function destroy($sessionId)
{
return (bool) $this->handler->destroy($sessionId);
}
public function gc($maxlifetime)
{
return (bool) $this->handler->gc($maxlifetime);
}
}
}
namespace Symfony\Component\HttpFoundation\Session
{
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;
interface SessionInterface
{
public function start();
public function getId();
public function setId($id);
public function getName();
public function setName($name);
public function invalidate($lifetime = null);
public function migrate($destroy = false, $lifetime = null);
public function save();
public function has($name);
public function get($name, $default = null);
public function set($name, $value);
public function all();
public function replace(array $attributes);
public function remove($name);
public function clear();
public function isStarted();
public function registerBag(SessionBagInterface $bag);
public function getBag($name);
public function getMetadataBag();
}
}
namespace Symfony\Component\HttpFoundation\Session
{
use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
class Session implements SessionInterface, \IteratorAggregate, \Countable
{
protected $storage;
private $flashName;
private $attributeName;
public function __construct(SessionStorageInterface $storage = null, AttributeBagInterface $attributes = null, FlashBagInterface $flashes = null)
{
$this->storage = $storage ?: new NativeSessionStorage();
$attributes = $attributes ?: new AttributeBag();
$this->attributeName = $attributes->getName();
$this->registerBag($attributes);
$flashes = $flashes ?: new FlashBag();
$this->flashName = $flashes->getName();
$this->registerBag($flashes);
}
public function start()
{
return $this->storage->start();
}
public function has($name)
{
return $this->storage->getBag($this->attributeName)->has($name);
}
public function get($name, $default = null)
{
return $this->storage->getBag($this->attributeName)->get($name, $default);
}
public function set($name, $value)
{
$this->storage->getBag($this->attributeName)->set($name, $value);
}
public function all()
{
return $this->storage->getBag($this->attributeName)->all();
}
public function replace(array $attributes)
{
$this->storage->getBag($this->attributeName)->replace($attributes);
}
public function remove($name)
{
return $this->storage->getBag($this->attributeName)->remove($name);
}
public function clear()
{
$this->storage->getBag($this->attributeName)->clear();
}
public function isStarted()
{
return $this->storage->isStarted();
}
public function getIterator()
{
return new \ArrayIterator($this->storage->getBag($this->attributeName)->all());
}
public function count()
{
return count($this->storage->getBag($this->attributeName)->all());
}
public function invalidate($lifetime = null)
{
$this->storage->clear();
return $this->migrate(true, $lifetime);
}
public function migrate($destroy = false, $lifetime = null)
{
return $this->storage->regenerate($destroy, $lifetime);
}
public function save()
{
$this->storage->save();
}
public function getId()
{
return $this->storage->getId();
}
public function setId($id)
{
$this->storage->setId($id);
}
public function getName()
{
return $this->storage->getName();
}
public function setName($name)
{
$this->storage->setName($name);
}
public function getMetadataBag()
{
return $this->storage->getMetadataBag();
}
public function registerBag(SessionBagInterface $bag)
{
$this->storage->registerBag($bag);
}
public function getBag($name)
{
return $this->storage->getBag($name);
}
public function getFlashBag()
{
return $this->getBag($this->flashName);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class GlobalVariables
{
protected $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function getUser()
{
if (!$this->container->has('security.token_storage')) {
return;
}
$tokenStorage = $this->container->get('security.token_storage');
if (!$token = $tokenStorage->getToken()) {
return;
}
$user = $token->getUser();
if (!is_object($user)) {
return;
}
return $user;
}
public function getRequest()
{
if ($this->container->has('request_stack')) {
return $this->container->get('request_stack')->getCurrentRequest();
}
}
public function getSession()
{
if ($request = $this->getRequest()) {
return $request->getSession();
}
}
public function getEnvironment()
{
return $this->container->getParameter('kernel.environment');
}
public function getDebug()
{
return (bool) $this->container->getParameter('kernel.debug');
}
}
}
namespace Symfony\Component\Templating
{
interface TemplateReferenceInterface
{
public function all();
public function set($name, $value);
public function get($name);
public function getPath();
public function getLogicalName();
public function __toString();
}
}
namespace Symfony\Component\Templating
{
class TemplateReference implements TemplateReferenceInterface
{
protected $parameters;
public function __construct($name = null, $engine = null)
{
$this->parameters = array('name'=> $name,'engine'=> $engine,
);
}
public function __toString()
{
return $this->getLogicalName();
}
public function set($name, $value)
{
if (array_key_exists($name, $this->parameters)) {
$this->parameters[$name] = $value;
} else {
throw new \InvalidArgumentException(sprintf('The template does not support the "%s" parameter.', $name));
}
return $this;
}
public function get($name)
{
if (array_key_exists($name, $this->parameters)) {
return $this->parameters[$name];
}
throw new \InvalidArgumentException(sprintf('The template does not support the "%s" parameter.', $name));
}
public function all()
{
return $this->parameters;
}
public function getPath()
{
return $this->parameters['name'];
}
public function getLogicalName()
{
return $this->parameters['name'];
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\Templating\TemplateReference as BaseTemplateReference;
class TemplateReference extends BaseTemplateReference
{
public function __construct($bundle = null, $controller = null, $name = null, $format = null, $engine = null)
{
$this->parameters = array('bundle'=> $bundle,'controller'=> $controller,'name'=> $name,'format'=> $format,'engine'=> $engine,
);
}
public function getPath()
{
$controller = str_replace('\\','/', $this->get('controller'));
$path = (empty($controller) ?'': $controller.'/').$this->get('name').'.'.$this->get('format').'.'.$this->get('engine');
return empty($this->parameters['bundle']) ?'views/'.$path :'@'.$this->get('bundle').'/Resources/views/'.$path;
}
public function getLogicalName()
{
return sprintf('%s:%s:%s.%s.%s', $this->parameters['bundle'], $this->parameters['controller'], $this->parameters['name'], $this->parameters['format'], $this->parameters['engine']);
}
}
}
namespace Symfony\Component\Templating
{
interface TemplateNameParserInterface
{
public function parse($name);
}
}
namespace Symfony\Component\Templating
{
class TemplateNameParser implements TemplateNameParserInterface
{
public function parse($name)
{
if ($name instanceof TemplateReferenceInterface) {
return $name;
}
$engine = null;
if (false !== $pos = strrpos($name,'.')) {
$engine = substr($name, $pos + 1);
}
return new TemplateReference($name, $engine);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\Templating\TemplateReferenceInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Templating\TemplateNameParser as BaseTemplateNameParser;
class TemplateNameParser extends BaseTemplateNameParser
{
protected $kernel;
protected $cache = array();
public function __construct(KernelInterface $kernel)
{
$this->kernel = $kernel;
}
public function parse($name)
{
if ($name instanceof TemplateReferenceInterface) {
return $name;
} elseif (isset($this->cache[$name])) {
return $this->cache[$name];
}
$name = str_replace(':/',':', preg_replace('#/{2,}#','/', str_replace('\\','/', $name)));
if (false !== strpos($name,'..')) {
throw new \RuntimeException(sprintf('Template name "%s" contains invalid characters.', $name));
}
if ($this->isAbsolutePath($name) || !preg_match('/^(?:([^:]*):([^:]*):)?(.+)\.([^\.]+)\.([^\.]+)$/', $name, $matches) || 0 === strpos($name,'@')) {
return parent::parse($name);
}
$template = new TemplateReference($matches[1], $matches[2], $matches[3], $matches[4], $matches[5]);
if ($template->get('bundle')) {
try {
$this->kernel->getBundle($template->get('bundle'));
} catch (\Exception $e) {
throw new \InvalidArgumentException(sprintf('Template name "%s" is not valid.', $name), 0, $e);
}
}
return $this->cache[$name] = $template;
}
private function isAbsolutePath($file)
{
$isAbsolute = (bool) preg_match('#^(?:/|[a-zA-Z]:)#', $file);
if ($isAbsolute) {
@trigger_error('Absolute template path support is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);
}
return $isAbsolute;
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Exception\FileLocatorFileNotFoundException;
interface FileLocatorInterface
{
public function locate($name, $currentPath = null, $first = true);
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating\Loader
{
use Symfony\Component\Config\FileLocatorInterface;
use Symfony\Component\Templating\TemplateReferenceInterface;
class TemplateLocator implements FileLocatorInterface
{
protected $locator;
protected $cache;
private $cacheHits = array();
public function __construct(FileLocatorInterface $locator, $cacheDir = null)
{
if (null !== $cacheDir && file_exists($cache = $cacheDir.'/templates.php')) {
$this->cache = require $cache;
}
$this->locator = $locator;
}
protected function getCacheKey($template)
{
return $template->getLogicalName();
}
public function locate($template, $currentPath = null, $first = true)
{
if (!$template instanceof TemplateReferenceInterface) {
throw new \InvalidArgumentException('The template must be an instance of TemplateReferenceInterface.');
}
$key = $this->getCacheKey($template);
if (isset($this->cacheHits[$key])) {
return $this->cacheHits[$key];
}
if (isset($this->cache[$key])) {
return $this->cacheHits[$key] = realpath($this->cache[$key]) ?: $this->cache[$key];
}
try {
return $this->cacheHits[$key] = $this->locator->locate($template->getPath(), $currentPath);
} catch (\InvalidArgumentException $e) {
throw new \InvalidArgumentException(sprintf('Unable to find template "%s" : "%s".', $template, $e->getMessage()), 0, $e);
}
}
}
}
namespace Psr\Log
{
interface LoggerAwareInterface
{
public function setLogger(LoggerInterface $logger);
}
}
namespace Psr\Cache
{
interface CacheItemPoolInterface
{
public function getItem($key);
public function getItems(array $keys = array());
public function hasItem($key);
public function clear();
public function deleteItem($key);
public function deleteItems(array $keys);
public function save(CacheItemInterface $item);
public function saveDeferred(CacheItemInterface $item);
public function commit();
}
}
namespace Symfony\Component\Cache\Adapter
{
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\CacheItem;
interface AdapterInterface extends CacheItemPoolInterface
{
public function getItem($key);
public function getItems(array $keys = array());
}
}
namespace Psr\Log
{
trait LoggerAwareTrait
{
protected $logger;
public function setLogger(LoggerInterface $logger)
{
$this->logger = $logger;
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Psr\Cache\CacheItemInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
abstract class AbstractAdapter implements AdapterInterface, LoggerAwareInterface
{
use LoggerAwareTrait;
private static $apcuSupported;
private static $phpFilesSupported;
private $namespace;
private $deferred = array();
private $createCacheItem;
private $mergeByLifetime;
protected $maxIdLength;
protected function __construct($namespace ='', $defaultLifetime = 0)
{
$this->namespace =''=== $namespace ?'': $this->getId($namespace).':';
if (null !== $this->maxIdLength && strlen($namespace) > $this->maxIdLength - 24) {
throw new InvalidArgumentException(sprintf('Namespace must be %d chars max, %d given ("%s")', $this->maxIdLength - 24, strlen($namespace), $namespace));
}
$this->createCacheItem = \Closure::bind(
function ($key, $value, $isHit) use ($defaultLifetime) {
$item = new CacheItem();
$item->key = $key;
$item->value = $value;
$item->isHit = $isHit;
$item->defaultLifetime = $defaultLifetime;
return $item;
},
null,
CacheItem::class
);
$this->mergeByLifetime = \Closure::bind(
function ($deferred, $namespace, &$expiredIds) {
$byLifetime = array();
$now = time();
$expiredIds = array();
foreach ($deferred as $key => $item) {
if (null === $item->expiry) {
$byLifetime[0 < $item->defaultLifetime ? $item->defaultLifetime : 0][$namespace.$key] = $item->value;
} elseif ($item->expiry > $now) {
$byLifetime[$item->expiry - $now][$namespace.$key] = $item->value;
} else {
$expiredIds[] = $namespace.$key;
}
}
return $byLifetime;
},
null,
CacheItem::class
);
}
public static function createSystemCache($namespace, $defaultLifetime, $version, $directory, LoggerInterface $logger = null)
{
if (null === self::$apcuSupported) {
self::$apcuSupported = ApcuAdapter::isSupported();
}
if (!self::$apcuSupported && null === self::$phpFilesSupported) {
self::$phpFilesSupported = PhpFilesAdapter::isSupported();
}
if (self::$phpFilesSupported) {
$opcache = new PhpFilesAdapter($namespace, $defaultLifetime, $directory);
if (null !== $logger) {
$opcache->setLogger($logger);
}
return $opcache;
}
$fs = new FilesystemAdapter($namespace, $defaultLifetime, $directory);
if (null !== $logger) {
$fs->setLogger($logger);
}
if (!self::$apcuSupported) {
return $fs;
}
$apcu = new ApcuAdapter($namespace, (int) $defaultLifetime / 5, $version);
if (null !== $logger) {
$apcu->setLogger($logger);
}
return new ChainAdapter(array($apcu, $fs));
}
abstract protected function doFetch(array $ids);
abstract protected function doHave($id);
abstract protected function doClear($namespace);
abstract protected function doDelete(array $ids);
abstract protected function doSave(array $values, $lifetime);
public function getItem($key)
{
if ($this->deferred) {
$this->commit();
}
$id = $this->getId($key);
$f = $this->createCacheItem;
$isHit = false;
$value = null;
try {
foreach ($this->doFetch(array($id)) as $value) {
$isHit = true;
}
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to fetch key "{key}"', array('key'=> $key,'exception'=> $e));
}
return $f($key, $value, $isHit);
}
public function getItems(array $keys = array())
{
if ($this->deferred) {
$this->commit();
}
$ids = array();
foreach ($keys as $key) {
$ids[] = $this->getId($key);
}
try {
$items = $this->doFetch($ids);
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to fetch requested items', array('keys'=> $keys,'exception'=> $e));
$items = array();
}
$ids = array_combine($ids, $keys);
return $this->generateItems($items, $ids);
}
public function hasItem($key)
{
$id = $this->getId($key);
if (isset($this->deferred[$key])) {
$this->commit();
}
try {
return $this->doHave($id);
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to check if key "{key}" is cached', array('key'=> $key,'exception'=> $e));
return false;
}
}
public function clear()
{
$this->deferred = array();
try {
return $this->doClear($this->namespace);
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to clear the cache', array('exception'=> $e));
return false;
}
}
public function deleteItem($key)
{
return $this->deleteItems(array($key));
}
public function deleteItems(array $keys)
{
$ids = array();
foreach ($keys as $key) {
$ids[$key] = $this->getId($key);
unset($this->deferred[$key]);
}
try {
if ($this->doDelete($ids)) {
return true;
}
} catch (\Exception $e) {
}
$ok = true;
foreach ($ids as $key => $id) {
try {
$e = null;
if ($this->doDelete(array($id))) {
continue;
}
} catch (\Exception $e) {
}
CacheItem::log($this->logger,'Failed to delete key "{key}"', array('key'=> $key,'exception'=> $e));
$ok = false;
}
return $ok;
}
public function save(CacheItemInterface $item)
{
if (!$item instanceof CacheItem) {
return false;
}
$this->deferred[$item->getKey()] = $item;
return $this->commit();
}
public function saveDeferred(CacheItemInterface $item)
{
if (!$item instanceof CacheItem) {
return false;
}
$this->deferred[$item->getKey()] = $item;
return true;
}
public function commit()
{
$ok = true;
$byLifetime = $this->mergeByLifetime;
$byLifetime = $byLifetime($this->deferred, $this->namespace, $expiredIds);
$retry = $this->deferred = array();
if ($expiredIds) {
$this->doDelete($expiredIds);
}
foreach ($byLifetime as $lifetime => $values) {
try {
$e = $this->doSave($values, $lifetime);
} catch (\Exception $e) {
}
if (true === $e || array() === $e) {
continue;
}
if (is_array($e) || 1 === count($values)) {
foreach (is_array($e) ? $e : array_keys($values) as $id) {
$ok = false;
$v = $values[$id];
$type = is_object($v) ? get_class($v) : gettype($v);
CacheItem::log($this->logger,'Failed to save key "{key}" ({type})', array('key'=> substr($id, strlen($this->namespace)),'type'=> $type,'exception'=> $e instanceof \Exception ? $e : null));
}
} else {
foreach ($values as $id => $v) {
$retry[$lifetime][] = $id;
}
}
}
foreach ($retry as $lifetime => $ids) {
foreach ($ids as $id) {
try {
$v = $byLifetime[$lifetime][$id];
$e = $this->doSave(array($id => $v), $lifetime);
} catch (\Exception $e) {
}
if (true === $e || array() === $e) {
continue;
}
$ok = false;
$type = is_object($v) ? get_class($v) : gettype($v);
CacheItem::log($this->logger,'Failed to save key "{key}" ({type})', array('key'=> substr($id, strlen($this->namespace)),'type'=> $type,'exception'=> $e instanceof \Exception ? $e : null));
}
}
return $ok;
}
public function __destruct()
{
if ($this->deferred) {
$this->commit();
}
}
protected static function unserialize($value)
{
if ('b:0;'=== $value) {
return false;
}
$unserializeCallbackHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
try {
if (false !== $value = unserialize($value)) {
return $value;
}
throw new \DomainException('Failed to unserialize cached value');
} catch (\Error $e) {
throw new \ErrorException($e->getMessage(), $e->getCode(), E_ERROR, $e->getFile(), $e->getLine());
} finally {
ini_set('unserialize_callback_func', $unserializeCallbackHandler);
}
}
private function getId($key)
{
CacheItem::validateKey($key);
if (null === $this->maxIdLength) {
return $this->namespace.$key;
}
if (strlen($id = $this->namespace.$key) > $this->maxIdLength) {
$id = $this->namespace.substr_replace(base64_encode(hash('sha256', $key, true)),':', -22);
}
return $id;
}
private function generateItems($items, &$keys)
{
$f = $this->createCacheItem;
try {
foreach ($items as $id => $value) {
$key = $keys[$id];
unset($keys[$id]);
yield $key => $f($key, $value, true);
}
} catch (\Exception $e) {
CacheItem::log($this->logger,'Failed to fetch requested items', array('keys'=> array_values($keys),'exception'=> $e));
}
foreach ($keys as $key) {
yield $key => $f($key, null, false);
}
}
public static function handleUnserializeCallback($class)
{
throw new \DomainException('Class not found: '.$class);
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\CacheException;
class ApcuAdapter extends AbstractAdapter
{
public static function isSupported()
{
return function_exists('apcu_fetch') && ini_get('apc.enabled') && !('cli'=== PHP_SAPI && !ini_get('apc.enable_cli'));
}
public function __construct($namespace ='', $defaultLifetime = 0, $version = null)
{
if (!static::isSupported()) {
throw new CacheException('APCu is not enabled');
}
if ('cli'=== PHP_SAPI) {
ini_set('apc.use_request_time', 0);
}
parent::__construct($namespace, $defaultLifetime);
if (null !== $version) {
CacheItem::validateKey($version);
if (!apcu_exists($version.'@'.$namespace)) {
$this->doClear($namespace);
apcu_add($version.'@'.$namespace, null);
}
}
}
protected function doFetch(array $ids)
{
try {
return apcu_fetch($ids);
} catch (\Error $e) {
throw new \ErrorException($e->getMessage(), $e->getCode(), E_ERROR, $e->getFile(), $e->getLine());
}
}
protected function doHave($id)
{
return apcu_exists($id);
}
protected function doClear($namespace)
{
return isset($namespace[0]) && class_exists('APCuIterator', false)
? apcu_delete(new \APCuIterator(sprintf('/^%s/', preg_quote($namespace,'/')), APC_ITER_KEY))
: apcu_clear_cache();
}
protected function doDelete(array $ids)
{
foreach ($ids as $id) {
apcu_delete($id);
}
return true;
}
protected function doSave(array $values, $lifetime)
{
try {
return array_keys(apcu_store($values, null, $lifetime));
} catch (\Error $e) {
} catch (\Exception $e) {
}
if (1 === count($values)) {
apcu_delete(key($values));
}
throw $e;
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Symfony\Component\Cache\Exception\InvalidArgumentException;
trait FilesystemAdapterTrait
{
private $directory;
private $tmp;
private function init($namespace, $directory)
{
if (!isset($directory[0])) {
$directory = sys_get_temp_dir().'/symfony-cache';
}
if (isset($namespace[0])) {
if (preg_match('#[^-+_.A-Za-z0-9]#', $namespace, $match)) {
throw new InvalidArgumentException(sprintf('Namespace contains "%s" but only characters in [-+_.A-Za-z0-9] are allowed.', $match[0]));
}
$directory .='/'.$namespace;
}
if (!file_exists($dir = $directory.'/.')) {
@mkdir($directory, 0777, true);
}
if (false === $dir = realpath($dir) ?: (file_exists($dir) ? $dir : false)) {
throw new InvalidArgumentException(sprintf('Cache directory does not exist (%s)', $directory));
}
$dir .= DIRECTORY_SEPARATOR;
if ('\\'=== DIRECTORY_SEPARATOR && strlen($dir) > 234) {
throw new InvalidArgumentException(sprintf('Cache directory too long (%s)', $directory));
}
$this->directory = $dir;
}
protected function doClear($namespace)
{
$ok = true;
foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->directory, \FilesystemIterator::SKIP_DOTS)) as $file) {
$ok = ($file->isDir() || @unlink($file) || !file_exists($file)) && $ok;
}
return $ok;
}
protected function doDelete(array $ids)
{
$ok = true;
foreach ($ids as $id) {
$file = $this->getFile($id);
$ok = (!file_exists($file) || @unlink($file) || !file_exists($file)) && $ok;
}
return $ok;
}
private function write($file, $data, $expiresAt = null)
{
set_error_handler(__CLASS__.'::throwError');
try {
if (null === $this->tmp) {
$this->tmp = $this->directory.uniqid('', true);
}
file_put_contents($this->tmp, $data);
if (null !== $expiresAt) {
touch($this->tmp, $expiresAt);
}
return rename($this->tmp, $file);
} finally {
restore_error_handler();
}
}
private function getFile($id, $mkdir = false)
{
$hash = str_replace('/','-', base64_encode(hash('sha256', static::class.$id, true)));
$dir = $this->directory.strtoupper($hash[0].DIRECTORY_SEPARATOR.$hash[1].DIRECTORY_SEPARATOR);
if ($mkdir && !file_exists($dir)) {
@mkdir($dir, 0777, true);
}
return $dir.substr($hash, 2, 20);
}
public static function throwError($type, $message, $file, $line)
{
throw new \ErrorException($message, 0, $type, $file, $line);
}
public function __destruct()
{
parent::__destruct();
if (null !== $this->tmp && file_exists($this->tmp)) {
unlink($this->tmp);
}
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Symfony\Component\Cache\Exception\CacheException;
class FilesystemAdapter extends AbstractAdapter
{
use FilesystemAdapterTrait;
public function __construct($namespace ='', $defaultLifetime = 0, $directory = null)
{
parent::__construct('', $defaultLifetime);
$this->init($namespace, $directory);
}
protected function doFetch(array $ids)
{
$values = array();
$now = time();
foreach ($ids as $id) {
$file = $this->getFile($id);
if (!file_exists($file) || !$h = @fopen($file,'rb')) {
continue;
}
if ($now >= (int) $expiresAt = fgets($h)) {
fclose($h);
if (isset($expiresAt[0])) {
@unlink($file);
}
} else {
$i = rawurldecode(rtrim(fgets($h)));
$value = stream_get_contents($h);
fclose($h);
if ($i === $id) {
$values[$id] = parent::unserialize($value);
}
}
}
return $values;
}
protected function doHave($id)
{
$file = $this->getFile($id);
return file_exists($file) && (@filemtime($file) > time() || $this->doFetch(array($id)));
}
protected function doSave(array $values, $lifetime)
{
$ok = true;
$expiresAt = time() + ($lifetime ?: 31557600);
foreach ($values as $id => $value) {
$ok = $this->write($this->getFile($id, true), $expiresAt."\n".rawurlencode($id)."\n".serialize($value), $expiresAt) && $ok;
}
if (!$ok && !is_writable($this->directory)) {
throw new CacheException(sprintf('Cache directory is not writable (%s)', $this->directory));
}
return $ok;
}
}
}
namespace Psr\Cache
{
interface CacheItemInterface
{
public function getKey();
public function get();
public function isHit();
public function set($value);
public function expiresAt($expiration);
public function expiresAfter($time);
}
}
namespace Symfony\Component\Cache
{
use Psr\Cache\CacheItemInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
final class CacheItem implements CacheItemInterface
{
protected $key;
protected $value;
protected $isHit;
protected $expiry;
protected $defaultLifetime;
protected $tags = array();
protected $innerItem;
protected $poolHash;
public function getKey()
{
return $this->key;
}
public function get()
{
return $this->value;
}
public function isHit()
{
return $this->isHit;
}
public function set($value)
{
$this->value = $value;
return $this;
}
public function expiresAt($expiration)
{
if (null === $expiration) {
$this->expiry = $this->defaultLifetime > 0 ? time() + $this->defaultLifetime : null;
} elseif ($expiration instanceof \DateTimeInterface) {
$this->expiry = (int) $expiration->format('U');
} else {
throw new InvalidArgumentException(sprintf('Expiration date must implement DateTimeInterface or be null, "%s" given', is_object($expiration) ? get_class($expiration) : gettype($expiration)));
}
return $this;
}
public function expiresAfter($time)
{
if (null === $time) {
$this->expiry = $this->defaultLifetime > 0 ? time() + $this->defaultLifetime : null;
} elseif ($time instanceof \DateInterval) {
$this->expiry = (int) \DateTime::createFromFormat('U', time())->add($time)->format('U');
} elseif (is_int($time)) {
$this->expiry = $time + time();
} else {
throw new InvalidArgumentException(sprintf('Expiration date must be an integer, a DateInterval or null, "%s" given', is_object($time) ? get_class($time) : gettype($time)));
}
return $this;
}
public function tag($tags)
{
if (!is_array($tags)) {
$tags = array($tags);
}
foreach ($tags as $tag) {
if (!is_string($tag)) {
throw new InvalidArgumentException(sprintf('Cache tag must be string, "%s" given', is_object($tag) ? get_class($tag) : gettype($tag)));
}
if (isset($this->tags[$tag])) {
continue;
}
if (!isset($tag[0])) {
throw new InvalidArgumentException('Cache tag length must be greater than zero');
}
if (false !== strpbrk($tag,'{}()/\@:')) {
throw new InvalidArgumentException(sprintf('Cache tag "%s" contains reserved characters {}()/\@:', $tag));
}
$this->tags[$tag] = $tag;
}
return $this;
}
public static function validateKey($key)
{
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given', is_object($key) ? get_class($key) : gettype($key)));
}
if (!isset($key[0])) {
throw new InvalidArgumentException('Cache key length must be greater than zero');
}
if (false !== strpbrk($key,'{}()/\@:')) {
throw new InvalidArgumentException(sprintf('Cache key "%s" contains reserved characters {}()/\@:', $key));
}
}
public static function log(LoggerInterface $logger = null, $message, $context = array())
{
if ($logger) {
$logger->warning($message, $context);
} else {
$replace = array();
foreach ($context as $k => $v) {
if (is_scalar($v)) {
$replace['{'.$k.'}'] = $v;
}
}
@trigger_error(strtr($message, $replace), E_USER_WARNING);
}
}
}
}
namespace Symfony\Component\Routing
{
interface RequestContextAwareInterface
{
public function setContext(RequestContext $context);
public function getContext();
}
}
namespace Symfony\Component\Routing\Generator
{
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\RequestContextAwareInterface;
interface UrlGeneratorInterface extends RequestContextAwareInterface
{
const ABSOLUTE_URL = 0;
const ABSOLUTE_PATH = 1;
const RELATIVE_PATH = 2;
const NETWORK_PATH = 3;
public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH);
}
}
namespace Symfony\Component\Routing\Generator
{
interface ConfigurableRequirementsInterface
{
public function setStrictRequirements($enabled);
public function isStrictRequirements();
}
}
namespace Symfony\Component\Routing\Generator
{
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Psr\Log\LoggerInterface;
class UrlGenerator implements UrlGeneratorInterface, ConfigurableRequirementsInterface
{
protected $routes;
protected $context;
protected $strictRequirements = true;
protected $logger;
protected $decodedChars = array('%2F'=>'/','%40'=>'@','%3A'=>':','%3B'=>';','%2C'=>',','%3D'=>'=','%2B'=>'+','%21'=>'!','%2A'=>'*','%7C'=>'|',
);
public function __construct(RouteCollection $routes, RequestContext $context, LoggerInterface $logger = null)
{
$this->routes = $routes;
$this->context = $context;
$this->logger = $logger;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
public function setStrictRequirements($enabled)
{
$this->strictRequirements = null === $enabled ? null : (bool) $enabled;
}
public function isStrictRequirements()
{
return $this->strictRequirements;
}
public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
{
if (null === $route = $this->routes->get($name)) {
throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
}
$compiledRoute = $route->compile();
return $this->doGenerate($compiledRoute->getVariables(), $route->getDefaults(), $route->getRequirements(), $compiledRoute->getTokens(), $parameters, $name, $referenceType, $compiledRoute->getHostTokens(), $route->getSchemes());
}
protected function doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, array $requiredSchemes = array())
{
$variables = array_flip($variables);
$mergedParams = array_replace($defaults, $this->context->getParameters(), $parameters);
if ($diff = array_diff_key($variables, $mergedParams)) {
throw new MissingMandatoryParametersException(sprintf('Some mandatory parameters are missing ("%s") to generate a URL for route "%s".', implode('", "', array_keys($diff)), $name));
}
$url ='';
$optional = true;
$message ='Parameter "{parameter}" for route "{route}" must match "{expected}" ("{given}" given) to generate a corresponding URL.';
foreach ($tokens as $token) {
if ('variable'=== $token[0]) {
if (!$optional || !array_key_exists($token[3], $defaults) || null !== $mergedParams[$token[3]] && (string) $mergedParams[$token[3]] !== (string) $defaults[$token[3]]) {
if (null !== $this->strictRequirements && !preg_match('#^'.$token[2].'$#'.(empty($token[4]) ?'':'u'), $mergedParams[$token[3]])) {
if ($this->strictRequirements) {
throw new InvalidParameterException(strtr($message, array('{parameter}'=> $token[3],'{route}'=> $name,'{expected}'=> $token[2],'{given}'=> $mergedParams[$token[3]])));
}
if ($this->logger) {
$this->logger->error($message, array('parameter'=> $token[3],'route'=> $name,'expected'=> $token[2],'given'=> $mergedParams[$token[3]]));
}
return;
}
$url = $token[1].$mergedParams[$token[3]].$url;
$optional = false;
}
} else {
$url = $token[1].$url;
$optional = false;
}
}
if (''=== $url) {
$url ='/';
}
$url = strtr(rawurlencode($url), $this->decodedChars);
$url = strtr($url, array('/../'=>'/%2E%2E/','/./'=>'/%2E/'));
if ('/..'=== substr($url, -3)) {
$url = substr($url, 0, -2).'%2E%2E';
} elseif ('/.'=== substr($url, -2)) {
$url = substr($url, 0, -1).'%2E';
}
$schemeAuthority ='';
if ($host = $this->context->getHost()) {
$scheme = $this->context->getScheme();
if ($requiredSchemes) {
if (!in_array($scheme, $requiredSchemes, true)) {
$referenceType = self::ABSOLUTE_URL;
$scheme = current($requiredSchemes);
}
}
if ($hostTokens) {
$routeHost ='';
foreach ($hostTokens as $token) {
if ('variable'=== $token[0]) {
if (null !== $this->strictRequirements && !preg_match('#^'.$token[2].'$#i'.(empty($token[4]) ?'':'u'), $mergedParams[$token[3]])) {
if ($this->strictRequirements) {
throw new InvalidParameterException(strtr($message, array('{parameter}'=> $token[3],'{route}'=> $name,'{expected}'=> $token[2],'{given}'=> $mergedParams[$token[3]])));
}
if ($this->logger) {
$this->logger->error($message, array('parameter'=> $token[3],'route'=> $name,'expected'=> $token[2],'given'=> $mergedParams[$token[3]]));
}
return;
}
$routeHost = $token[1].$mergedParams[$token[3]].$routeHost;
} else {
$routeHost = $token[1].$routeHost;
}
}
if ($routeHost !== $host) {
$host = $routeHost;
if (self::ABSOLUTE_URL !== $referenceType) {
$referenceType = self::NETWORK_PATH;
}
}
}
if (self::ABSOLUTE_URL === $referenceType || self::NETWORK_PATH === $referenceType) {
$port ='';
if ('http'=== $scheme && 80 != $this->context->getHttpPort()) {
$port =':'.$this->context->getHttpPort();
} elseif ('https'=== $scheme && 443 != $this->context->getHttpsPort()) {
$port =':'.$this->context->getHttpsPort();
}
$schemeAuthority = self::NETWORK_PATH === $referenceType ?'//': "$scheme://";
$schemeAuthority .= $host.$port;
}
}
if (self::RELATIVE_PATH === $referenceType) {
$url = self::getRelativePath($this->context->getPathInfo(), $url);
} else {
$url = $schemeAuthority.$this->context->getBaseUrl().$url;
}
$extra = array_udiff_assoc(array_diff_key($parameters, $variables), $defaults, function ($a, $b) {
return $a == $b ? 0 : 1;
});
$fragment ='';
if (isset($defaults['_fragment'])) {
$fragment = $defaults['_fragment'];
}
if (isset($extra['_fragment'])) {
$fragment = $extra['_fragment'];
unset($extra['_fragment']);
}
if ($extra && $query = http_build_query($extra,'','&', PHP_QUERY_RFC3986)) {
$url .='?'.strtr($query, array('%2F'=>'/'));
}
if (''!== $fragment) {
$url .='#'.strtr(rawurlencode($fragment), array('%2F'=>'/','%3F'=>'?'));
}
return $url;
}
public static function getRelativePath($basePath, $targetPath)
{
if ($basePath === $targetPath) {
return'';
}
$sourceDirs = explode('/', isset($basePath[0]) &&'/'=== $basePath[0] ? substr($basePath, 1) : $basePath);
$targetDirs = explode('/', isset($targetPath[0]) &&'/'=== $targetPath[0] ? substr($targetPath, 1) : $targetPath);
array_pop($sourceDirs);
$targetFile = array_pop($targetDirs);
foreach ($sourceDirs as $i => $dir) {
if (isset($targetDirs[$i]) && $dir === $targetDirs[$i]) {
unset($sourceDirs[$i], $targetDirs[$i]);
} else {
break;
}
}
$targetDirs[] = $targetFile;
$path = str_repeat('../', count($sourceDirs)).implode('/', $targetDirs);
return''=== $path ||'/'=== $path[0]
|| false !== ($colonPos = strpos($path,':')) && ($colonPos < ($slashPos = strpos($path,'/')) || false === $slashPos)
? "./$path" : $path;
}
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\HttpFoundation\Request;
class RequestContext
{
private $baseUrl;
private $pathInfo;
private $method;
private $host;
private $scheme;
private $httpPort;
private $httpsPort;
private $queryString;
private $parameters = array();
public function __construct($baseUrl ='', $method ='GET', $host ='localhost', $scheme ='http', $httpPort = 80, $httpsPort = 443, $path ='/', $queryString ='')
{
$this->setBaseUrl($baseUrl);
$this->setMethod($method);
$this->setHost($host);
$this->setScheme($scheme);
$this->setHttpPort($httpPort);
$this->setHttpsPort($httpsPort);
$this->setPathInfo($path);
$this->setQueryString($queryString);
}
public function fromRequest(Request $request)
{
$this->setBaseUrl($request->getBaseUrl());
$this->setPathInfo($request->getPathInfo());
$this->setMethod($request->getMethod());
$this->setHost($request->getHost());
$this->setScheme($request->getScheme());
$this->setHttpPort($request->isSecure() ? $this->httpPort : $request->getPort());
$this->setHttpsPort($request->isSecure() ? $request->getPort() : $this->httpsPort);
$this->setQueryString($request->server->get('QUERY_STRING',''));
return $this;
}
public function getBaseUrl()
{
return $this->baseUrl;
}
public function setBaseUrl($baseUrl)
{
$this->baseUrl = $baseUrl;
return $this;
}
public function getPathInfo()
{
return $this->pathInfo;
}
public function setPathInfo($pathInfo)
{
$this->pathInfo = $pathInfo;
return $this;
}
public function getMethod()
{
return $this->method;
}
public function setMethod($method)
{
$this->method = strtoupper($method);
return $this;
}
public function getHost()
{
return $this->host;
}
public function setHost($host)
{
$this->host = strtolower($host);
return $this;
}
public function getScheme()
{
return $this->scheme;
}
public function setScheme($scheme)
{
$this->scheme = strtolower($scheme);
return $this;
}
public function getHttpPort()
{
return $this->httpPort;
}
public function setHttpPort($httpPort)
{
$this->httpPort = (int) $httpPort;
return $this;
}
public function getHttpsPort()
{
return $this->httpsPort;
}
public function setHttpsPort($httpsPort)
{
$this->httpsPort = (int) $httpsPort;
return $this;
}
public function getQueryString()
{
return $this->queryString;
}
public function setQueryString($queryString)
{
$this->queryString = (string) $queryString;
return $this;
}
public function getParameters()
{
return $this->parameters;
}
public function setParameters(array $parameters)
{
$this->parameters = $parameters;
return $this;
}
public function getParameter($name)
{
return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
}
public function hasParameter($name)
{
return array_key_exists($name, $this->parameters);
}
public function setParameter($name, $parameter)
{
$this->parameters[$name] = $parameter;
return $this;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
interface UrlMatcherInterface extends RequestContextAwareInterface
{
public function match($pathinfo);
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
interface RouterInterface extends UrlMatcherInterface, UrlGeneratorInterface
{
public function getRouteCollection();
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
interface RequestMatcherInterface
{
public function matchRequest(Request $request);
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Config\ConfigCacheInterface;
use Symfony\Component\Config\ConfigCacheFactoryInterface;
use Symfony\Component\Config\ConfigCacheFactory;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Generator\ConfigurableRequirementsInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Generator\Dumper\GeneratorDumperInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\Matcher\Dumper\MatcherDumperInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
class Router implements RouterInterface, RequestMatcherInterface
{
protected $matcher;
protected $generator;
protected $context;
protected $loader;
protected $collection;
protected $resource;
protected $options = array();
protected $logger;
private $configCacheFactory;
private $expressionLanguageProviders = array();
public function __construct(LoaderInterface $loader, $resource, array $options = array(), RequestContext $context = null, LoggerInterface $logger = null)
{
$this->loader = $loader;
$this->resource = $resource;
$this->logger = $logger;
$this->context = $context ?: new RequestContext();
$this->setOptions($options);
}
public function setOptions(array $options)
{
$this->options = array('cache_dir'=> null,'debug'=> false,'generator_class'=>'Symfony\\Component\\Routing\\Generator\\UrlGenerator','generator_base_class'=>'Symfony\\Component\\Routing\\Generator\\UrlGenerator','generator_dumper_class'=>'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper','generator_cache_class'=>'ProjectUrlGenerator','matcher_class'=>'Symfony\\Component\\Routing\\Matcher\\UrlMatcher','matcher_base_class'=>'Symfony\\Component\\Routing\\Matcher\\UrlMatcher','matcher_dumper_class'=>'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper','matcher_cache_class'=>'ProjectUrlMatcher','resource_type'=> null,'strict_requirements'=> true,
);
$invalid = array();
foreach ($options as $key => $value) {
if (array_key_exists($key, $this->options)) {
$this->options[$key] = $value;
} else {
$invalid[] = $key;
}
}
if ($invalid) {
throw new \InvalidArgumentException(sprintf('The Router does not support the following options: "%s".', implode('", "', $invalid)));
}
}
public function setOption($key, $value)
{
if (!array_key_exists($key, $this->options)) {
throw new \InvalidArgumentException(sprintf('The Router does not support the "%s" option.', $key));
}
$this->options[$key] = $value;
}
public function getOption($key)
{
if (!array_key_exists($key, $this->options)) {
throw new \InvalidArgumentException(sprintf('The Router does not support the "%s" option.', $key));
}
return $this->options[$key];
}
public function getRouteCollection()
{
if (null === $this->collection) {
$this->collection = $this->loader->load($this->resource, $this->options['resource_type']);
}
return $this->collection;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
if (null !== $this->matcher) {
$this->getMatcher()->setContext($context);
}
if (null !== $this->generator) {
$this->getGenerator()->setContext($context);
}
}
public function getContext()
{
return $this->context;
}
public function setConfigCacheFactory(ConfigCacheFactoryInterface $configCacheFactory)
{
$this->configCacheFactory = $configCacheFactory;
}
public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
{
return $this->getGenerator()->generate($name, $parameters, $referenceType);
}
public function match($pathinfo)
{
return $this->getMatcher()->match($pathinfo);
}
public function matchRequest(Request $request)
{
$matcher = $this->getMatcher();
if (!$matcher instanceof RequestMatcherInterface) {
return $matcher->match($request->getPathInfo());
}
return $matcher->matchRequest($request);
}
public function getMatcher()
{
if (null !== $this->matcher) {
return $this->matcher;
}
if (null === $this->options['cache_dir'] || null === $this->options['matcher_cache_class']) {
$this->matcher = new $this->options['matcher_class']($this->getRouteCollection(), $this->context);
if (method_exists($this->matcher,'addExpressionLanguageProvider')) {
foreach ($this->expressionLanguageProviders as $provider) {
$this->matcher->addExpressionLanguageProvider($provider);
}
}
return $this->matcher;
}
$cache = $this->getConfigCacheFactory()->cache($this->options['cache_dir'].'/'.$this->options['matcher_cache_class'].'.php',
function (ConfigCacheInterface $cache) {
$dumper = $this->getMatcherDumperInstance();
if (method_exists($dumper,'addExpressionLanguageProvider')) {
foreach ($this->expressionLanguageProviders as $provider) {
$dumper->addExpressionLanguageProvider($provider);
}
}
$options = array('class'=> $this->options['matcher_cache_class'],'base_class'=> $this->options['matcher_base_class'],
);
$cache->write($dumper->dump($options), $this->getRouteCollection()->getResources());
}
);
require_once $cache->getPath();
return $this->matcher = new $this->options['matcher_cache_class']($this->context);
}
public function getGenerator()
{
if (null !== $this->generator) {
return $this->generator;
}
if (null === $this->options['cache_dir'] || null === $this->options['generator_cache_class']) {
$this->generator = new $this->options['generator_class']($this->getRouteCollection(), $this->context, $this->logger);
} else {
$cache = $this->getConfigCacheFactory()->cache($this->options['cache_dir'].'/'.$this->options['generator_cache_class'].'.php',
function (ConfigCacheInterface $cache) {
$dumper = $this->getGeneratorDumperInstance();
$options = array('class'=> $this->options['generator_cache_class'],'base_class'=> $this->options['generator_base_class'],
);
$cache->write($dumper->dump($options), $this->getRouteCollection()->getResources());
}
);
require_once $cache->getPath();
$this->generator = new $this->options['generator_cache_class']($this->context, $this->logger);
}
if ($this->generator instanceof ConfigurableRequirementsInterface) {
$this->generator->setStrictRequirements($this->options['strict_requirements']);
}
return $this->generator;
}
public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface $provider)
{
$this->expressionLanguageProviders[] = $provider;
}
protected function getGeneratorDumperInstance()
{
return new $this->options['generator_dumper_class']($this->getRouteCollection());
}
protected function getMatcherDumperInstance()
{
return new $this->options['matcher_dumper_class']($this->getRouteCollection());
}
private function getConfigCacheFactory()
{
if (null === $this->configCacheFactory) {
$this->configCacheFactory = new ConfigCacheFactory($this->options['debug']);
}
return $this->configCacheFactory;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
interface RedirectableUrlMatcherInterface
{
public function redirect($path, $route, $scheme = null);
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
class UrlMatcher implements UrlMatcherInterface, RequestMatcherInterface
{
const REQUIREMENT_MATCH = 0;
const REQUIREMENT_MISMATCH = 1;
const ROUTE_MATCH = 2;
protected $context;
protected $allow = array();
protected $routes;
protected $request;
protected $expressionLanguage;
protected $expressionLanguageProviders = array();
public function __construct(RouteCollection $routes, RequestContext $context)
{
$this->routes = $routes;
$this->context = $context;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
public function match($pathinfo)
{
$this->allow = array();
if ($ret = $this->matchCollection(rawurldecode($pathinfo), $this->routes)) {
return $ret;
}
throw 0 < count($this->allow)
? new MethodNotAllowedException(array_unique($this->allow))
: new ResourceNotFoundException(sprintf('No routes found for "%s".', $pathinfo));
}
public function matchRequest(Request $request)
{
$this->request = $request;
$ret = $this->match($request->getPathInfo());
$this->request = null;
return $ret;
}
public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface $provider)
{
$this->expressionLanguageProviders[] = $provider;
}
protected function matchCollection($pathinfo, RouteCollection $routes)
{
foreach ($routes as $name => $route) {
$compiledRoute = $route->compile();
if (''!== $compiledRoute->getStaticPrefix() && 0 !== strpos($pathinfo, $compiledRoute->getStaticPrefix())) {
continue;
}
if (!preg_match($compiledRoute->getRegex(), $pathinfo, $matches)) {
continue;
}
$hostMatches = array();
if ($compiledRoute->getHostRegex() && !preg_match($compiledRoute->getHostRegex(), $this->context->getHost(), $hostMatches)) {
continue;
}
if ($requiredMethods = $route->getMethods()) {
if ('HEAD'=== $method = $this->context->getMethod()) {
$method ='GET';
}
if (!in_array($method, $requiredMethods)) {
$this->allow = array_merge($this->allow, $requiredMethods);
continue;
}
}
$status = $this->handleRouteRequirements($pathinfo, $name, $route);
if (self::ROUTE_MATCH === $status[0]) {
return $status[1];
}
if (self::REQUIREMENT_MISMATCH === $status[0]) {
continue;
}
return $this->getAttributes($route, $name, array_replace($matches, $hostMatches));
}
}
protected function getAttributes(Route $route, $name, array $attributes)
{
$attributes['_route'] = $name;
return $this->mergeDefaults($attributes, $route->getDefaults());
}
protected function handleRouteRequirements($pathinfo, $name, Route $route)
{
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), array('context'=> $this->context,'request'=> $this->request))) {
return array(self::REQUIREMENT_MISMATCH, null);
}
$scheme = $this->context->getScheme();
$status = $route->getSchemes() && !$route->hasScheme($scheme) ? self::REQUIREMENT_MISMATCH : self::REQUIREMENT_MATCH;
return array($status, null);
}
protected function mergeDefaults($params, $defaults)
{
foreach ($params as $key => $value) {
if (!is_int($key)) {
$defaults[$key] = $value;
}
}
return $defaults;
}
protected function getExpressionLanguage()
{
if (null === $this->expressionLanguage) {
if (!class_exists('Symfony\Component\ExpressionLanguage\ExpressionLanguage')) {
throw new \RuntimeException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
}
$this->expressionLanguage = new ExpressionLanguage(null, $this->expressionLanguageProviders);
}
return $this->expressionLanguage;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Route;
abstract class RedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
{
public function match($pathinfo)
{
try {
$parameters = parent::match($pathinfo);
} catch (ResourceNotFoundException $e) {
if ('/'=== substr($pathinfo, -1) || !in_array($this->context->getMethod(), array('HEAD','GET'))) {
throw $e;
}
try {
parent::match($pathinfo.'/');
return $this->redirect($pathinfo.'/', null);
} catch (ResourceNotFoundException $e2) {
throw $e;
}
}
return $parameters;
}
protected function handleRouteRequirements($pathinfo, $name, Route $route)
{
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), array('context'=> $this->context,'request'=> $this->request))) {
return array(self::REQUIREMENT_MISMATCH, null);
}
$scheme = $this->context->getScheme();
$schemes = $route->getSchemes();
if ($schemes && !$route->hasScheme($scheme)) {
return array(self::ROUTE_MATCH, $this->redirect($pathinfo, $name, current($schemes)));
}
return array(self::REQUIREMENT_MATCH, null);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Routing
{
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher as BaseMatcher;
class RedirectableUrlMatcher extends BaseMatcher
{
public function redirect($path, $route, $scheme = null)
{
return array('_controller'=>'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction','path'=> $path,'permanent'=> true,'scheme'=> $scheme,'httpPort'=> $this->context->getHttpPort(),'httpsPort'=> $this->context->getHttpsPort(),'_route'=> $route,
);
}
}
}
namespace Symfony\Component\HttpKernel\CacheWarmer
{
interface WarmableInterface
{
public function warmUp($cacheDir);
}
}
namespace Symfony\Bundle\FrameworkBundle\Routing
{
use Symfony\Component\Routing\Router as BaseRouter;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
class Router extends BaseRouter implements WarmableInterface
{
private $container;
public function __construct(ContainerInterface $container, $resource, array $options = array(), RequestContext $context = null)
{
$this->container = $container;
$this->resource = $resource;
$this->context = $context ?: new RequestContext();
$this->setOptions($options);
}
public function getRouteCollection()
{
if (null === $this->collection) {
$this->collection = $this->container->get('routing.loader')->load($this->resource, $this->options['resource_type']);
$this->resolveParameters($this->collection);
}
return $this->collection;
}
public function warmUp($cacheDir)
{
$currentDir = $this->getOption('cache_dir');
$this->setOption('cache_dir', $cacheDir);
$this->getMatcher();
$this->getGenerator();
$this->setOption('cache_dir', $currentDir);
}
private function resolveParameters(RouteCollection $collection)
{
foreach ($collection as $route) {
foreach ($route->getDefaults() as $name => $value) {
$route->setDefault($name, $this->resolve($value));
}
foreach ($route->getRequirements() as $name => $value) {
$route->setRequirement($name, $this->resolve($value));
}
$route->setPath($this->resolve($route->getPath()));
$route->setHost($this->resolve($route->getHost()));
$schemes = array();
foreach ($route->getSchemes() as $scheme) {
$schemes = array_merge($schemes, explode('|', $this->resolve($scheme)));
}
$route->setSchemes($schemes);
$methods = array();
foreach ($route->getMethods() as $method) {
$methods = array_merge($methods, explode('|', $this->resolve($method)));
}
$route->setMethods($methods);
$route->setCondition($this->resolve($route->getCondition()));
}
}
private function resolve($value)
{
if (is_array($value)) {
foreach ($value as $key => $val) {
$value[$key] = $this->resolve($val);
}
return $value;
}
if (!is_string($value)) {
return $value;
}
$container = $this->container;
$escapedValue = preg_replace_callback('/%%|%([^%\s]++)%/', function ($match) use ($container, $value) {
if (!isset($match[1])) {
return'%%';
}
if (preg_match('/^env\(\w+\)$/', $match[1])) {
throw new RuntimeException(sprintf('Using "%%%s%%" is not allowed in routing configuration.', $match[1]));
}
$resolved = $container->getParameter($match[1]);
if (is_string($resolved) || is_numeric($resolved)) {
return (string) $resolved;
}
throw new RuntimeException(sprintf('The container parameter "%s", used in the route configuration value "%s", '.'must be a string or numeric, but it is of type %s.',
$match[1],
$value,
gettype($resolved)
)
);
}, $value);
return str_replace('%%','%', $escapedValue);
}
}
}
namespace Symfony\Component\Cache\Adapter
{
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\InvalidArgumentException;
class PhpArrayAdapter implements AdapterInterface
{
private $file;
private $values;
private $createCacheItem;
private $fallbackPool;
public function __construct($file, AdapterInterface $fallbackPool)
{
$this->file = $file;
$this->fallbackPool = $fallbackPool;
$this->createCacheItem = \Closure::bind(
function ($key, $value, $isHit) {
$item = new CacheItem();
$item->key = $key;
$item->value = $value;
$item->isHit = $isHit;
return $item;
},
null,
CacheItem::class
);
}
public static function create($file, CacheItemPoolInterface $fallbackPool)
{
if ((PHP_VERSION_ID >= 70000 && ini_get('opcache.enable')) || defined('HHVM_VERSION')) {
if (!$fallbackPool instanceof AdapterInterface) {
$fallbackPool = new ProxyAdapter($fallbackPool);
}
return new static($file, $fallbackPool);
}
return $fallbackPool;
}
public function warmUp(array $values)
{
if (file_exists($this->file)) {
if (!is_file($this->file)) {
throw new InvalidArgumentException(sprintf('Cache path exists and is not a file: %s.', $this->file));
}
if (!is_writable($this->file)) {
throw new InvalidArgumentException(sprintf('Cache file is not writable: %s.', $this->file));
}
} else {
$directory = dirname($this->file);
if (!is_dir($directory) && !@mkdir($directory, 0777, true)) {
throw new InvalidArgumentException(sprintf('Cache directory does not exist and cannot be created: %s.', $directory));
}
if (!is_writable($directory)) {
throw new InvalidArgumentException(sprintf('Cache directory is not writable: %s.', $directory));
}
}
$dump =<<<'EOF'
<?php

// This file has been auto-generated by the Symfony Cache Component.

return array(


EOF
;
foreach ($values as $key => $value) {
CacheItem::validateKey(is_int($key) ? (string) $key : $key);
if (null === $value || is_object($value)) {
try {
$value = serialize($value);
} catch (\Exception $e) {
throw new InvalidArgumentException(sprintf('Cache key "%s" has non-serializable %s value.', $key, get_class($value)), 0, $e);
}
} elseif (is_array($value)) {
try {
$serialized = serialize($value);
$unserialized = unserialize($serialized);
} catch (\Exception $e) {
throw new InvalidArgumentException(sprintf('Cache key "%s" has non-serializable array value.', $key), 0, $e);
}
if ($unserialized !== $value || (false !== strpos($serialized,';R:') && preg_match('/;R:[1-9]/', $serialized))) {
$value = $serialized;
}
} elseif (is_string($value)) {
if ('N;'=== $value || (isset($value[2]) &&':'=== $value[1])) {
$value = serialize($value);
}
} elseif (!is_scalar($value)) {
throw new InvalidArgumentException(sprintf('Cache key "%s" has non-serializable %s value.', $key, gettype($value)));
}
$dump .= var_export($key, true).' => '.var_export($value, true).",\n";
}
$dump .="\n);\n";
$dump = str_replace("' . \"\\0\" . '","\0", $dump);
$tmpFile = uniqid($this->file, true);
file_put_contents($tmpFile, $dump);
@chmod($tmpFile, 0666 & ~umask());
unset($serialized, $unserialized, $value, $dump);
@rename($tmpFile, $this->file);
$this->values = (include $this->file) ?: array();
}
public function getItem($key)
{
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
if (null === $this->values) {
$this->initialize();
}
if (!isset($this->values[$key])) {
return $this->fallbackPool->getItem($key);
}
$value = $this->values[$key];
$isHit = true;
if ('N;'=== $value) {
$value = null;
} elseif (is_string($value) && isset($value[2]) &&':'=== $value[1]) {
try {
$e = null;
$value = unserialize($value);
} catch (\Error $e) {
} catch (\Exception $e) {
}
if (null !== $e) {
$value = null;
$isHit = false;
}
}
$f = $this->createCacheItem;
return $f($key, $value, $isHit);
}
public function getItems(array $keys = array())
{
foreach ($keys as $key) {
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
}
if (null === $this->values) {
$this->initialize();
}
return $this->generateItems($keys);
}
public function hasItem($key)
{
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
if (null === $this->values) {
$this->initialize();
}
return isset($this->values[$key]) || $this->fallbackPool->hasItem($key);
}
public function clear()
{
$this->values = array();
$cleared = @unlink($this->file) || !file_exists($this->file);
return $this->fallbackPool->clear() && $cleared;
}
public function deleteItem($key)
{
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
if (null === $this->values) {
$this->initialize();
}
return !isset($this->values[$key]) && $this->fallbackPool->deleteItem($key);
}
public function deleteItems(array $keys)
{
$deleted = true;
$fallbackKeys = array();
foreach ($keys as $key) {
if (!is_string($key)) {
throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given.', is_object($key) ? get_class($key) : gettype($key)));
}
if (isset($this->values[$key])) {
$deleted = false;
} else {
$fallbackKeys[] = $key;
}
}
if (null === $this->values) {
$this->initialize();
}
if ($fallbackKeys) {
$deleted = $this->fallbackPool->deleteItems($fallbackKeys) && $deleted;
}
return $deleted;
}
public function save(CacheItemInterface $item)
{
if (null === $this->values) {
$this->initialize();
}
return !isset($this->values[$item->getKey()]) && $this->fallbackPool->save($item);
}
public function saveDeferred(CacheItemInterface $item)
{
if (null === $this->values) {
$this->initialize();
}
return !isset($this->values[$item->getKey()]) && $this->fallbackPool->saveDeferred($item);
}
public function commit()
{
return $this->fallbackPool->commit();
}
private function initialize()
{
$this->values = file_exists($this->file) ? (include $this->file ?: array()) : array();
}
private function generateItems(array $keys)
{
$f = $this->createCacheItem;
$fallbackKeys = array();
foreach ($keys as $key) {
if (isset($this->values[$key])) {
$value = $this->values[$key];
if ('N;'=== $value) {
yield $key => $f($key, null, true);
} elseif (is_string($value) && isset($value[2]) &&':'=== $value[1]) {
try {
yield $key => $f($key, unserialize($value), true);
} catch (\Error $e) {
yield $key => $f($key, null, false);
} catch (\Exception $e) {
yield $key => $f($key, null, false);
}
} else {
yield $key => $f($key, $value, true);
}
} else {
$fallbackKeys[] = $key;
}
}
if ($fallbackKeys) {
foreach ($this->fallbackPool->getItems($fallbackKeys) as $key => $item) {
yield $key => $item;
}
}
}
public static function throwOnRequiredClass($class)
{
$e = new \ReflectionException("Class $class does not exist");
$trace = $e->getTrace();
$autoloadFrame = array('function'=>'spl_autoload_call','args'=> array($class),
);
$i = 1 + array_search($autoloadFrame, $trace, true);
if (isset($trace[$i]['function']) && !isset($trace[$i]['class'])) {
switch ($trace[$i]['function']) {
case'get_class_methods':
case'get_class_vars':
case'get_parent_class':
case'is_a':
case'is_subclass_of':
case'class_exists':
case'class_implements':
case'class_parents':
case'trait_exists':
case'defined':
case'interface_exists':
case'method_exists':
case'property_exists':
case'is_callable':
return;
}
}
throw $e;
}
}
}
namespace Doctrine\Common\Cache
{
interface MultiPutCache
{
function saveMultiple(array $keysAndValues, $lifetime = 0);
}
}
namespace Doctrine\Common\Cache
{
interface MultiGetCache
{
function fetchMultiple(array $keys);
}
}
namespace Doctrine\Common\Cache
{
interface ClearableCache
{
public function deleteAll();
}
}
namespace Doctrine\Common\Cache
{
interface FlushableCache
{
public function flushAll();
}
}
namespace Doctrine\Common\Cache
{
interface Cache
{
const STATS_HITS ='hits';
const STATS_MISSES ='misses';
const STATS_UPTIME ='uptime';
const STATS_MEMORY_USAGE ='memory_usage';
const STATS_MEMORY_AVAILABLE ='memory_available';
const STATS_MEMORY_AVAILIABLE ='memory_available';
public function fetch($id);
public function contains($id);
public function save($id, $data, $lifeTime = 0);
public function delete($id);
public function getStats();
}
}
namespace Doctrine\Common\Cache
{
abstract class CacheProvider implements Cache, FlushableCache, ClearableCache, MultiGetCache, MultiPutCache
{
const DOCTRINE_NAMESPACE_CACHEKEY ='DoctrineNamespaceCacheKey[%s]';
private $namespace ='';
private $namespaceVersion;
public function setNamespace($namespace)
{
$this->namespace = (string) $namespace;
$this->namespaceVersion = null;
}
public function getNamespace()
{
return $this->namespace;
}
public function fetch($id)
{
return $this->doFetch($this->getNamespacedId($id));
}
public function fetchMultiple(array $keys)
{
if (empty($keys)) {
return array();
}
$namespacedKeys = array_combine($keys, array_map(array($this,'getNamespacedId'), $keys));
$items = $this->doFetchMultiple($namespacedKeys);
$foundItems = array();
foreach ($namespacedKeys as $requestedKey => $namespacedKey) {
if (isset($items[$namespacedKey]) || array_key_exists($namespacedKey, $items)) {
$foundItems[$requestedKey] = $items[$namespacedKey];
}
}
return $foundItems;
}
public function saveMultiple(array $keysAndValues, $lifetime = 0)
{
$namespacedKeysAndValues = array();
foreach ($keysAndValues as $key => $value) {
$namespacedKeysAndValues[$this->getNamespacedId($key)] = $value;
}
return $this->doSaveMultiple($namespacedKeysAndValues, $lifetime);
}
public function contains($id)
{
return $this->doContains($this->getNamespacedId($id));
}
public function save($id, $data, $lifeTime = 0)
{
return $this->doSave($this->getNamespacedId($id), $data, $lifeTime);
}
public function delete($id)
{
return $this->doDelete($this->getNamespacedId($id));
}
public function getStats()
{
return $this->doGetStats();
}
public function flushAll()
{
return $this->doFlush();
}
public function deleteAll()
{
$namespaceCacheKey = $this->getNamespaceCacheKey();
$namespaceVersion = $this->getNamespaceVersion() + 1;
if ($this->doSave($namespaceCacheKey, $namespaceVersion)) {
$this->namespaceVersion = $namespaceVersion;
return true;
}
return false;
}
private function getNamespacedId($id)
{
$namespaceVersion = $this->getNamespaceVersion();
return sprintf('%s[%s][%s]', $this->namespace, $id, $namespaceVersion);
}
private function getNamespaceCacheKey()
{
return sprintf(self::DOCTRINE_NAMESPACE_CACHEKEY, $this->namespace);
}
private function getNamespaceVersion()
{
if (null !== $this->namespaceVersion) {
return $this->namespaceVersion;
}
$namespaceCacheKey = $this->getNamespaceCacheKey();
$this->namespaceVersion = $this->doFetch($namespaceCacheKey) ?: 1;
return $this->namespaceVersion;
}
protected function doFetchMultiple(array $keys)
{
$returnValues = array();
foreach ($keys as $key) {
if (false !== ($item = $this->doFetch($key)) || $this->doContains($key)) {
$returnValues[$key] = $item;
}
}
return $returnValues;
}
abstract protected function doFetch($id);
abstract protected function doContains($id);
protected function doSaveMultiple(array $keysAndValues, $lifetime = 0)
{
$success = true;
foreach ($keysAndValues as $key => $value) {
if (!$this->doSave($key, $value, $lifetime)) {
$success = false;
}
}
return $success;
}
abstract protected function doSave($id, $data, $lifeTime = 0);
abstract protected function doDelete($id);
abstract protected function doFlush();
abstract protected function doGetStats();
}
}
namespace Symfony\Component\Cache
{
use Doctrine\Common\Cache\CacheProvider;
use Psr\Cache\CacheItemPoolInterface;
class DoctrineProvider extends CacheProvider
{
private $pool;
public function __construct(CacheItemPoolInterface $pool)
{
$this->pool = $pool;
}
protected function doFetch($id)
{
$item = $this->pool->getItem(rawurlencode($id));
return $item->isHit() ? $item->get() : false;
}
protected function doContains($id)
{
return $this->pool->hasItem(rawurlencode($id));
}
protected function doSave($id, $data, $lifeTime = 0)
{
$item = $this->pool->getItem(rawurlencode($id));
if (0 < $lifeTime) {
$item->expiresAfter($lifeTime);
}
return $this->pool->save($item->set($data));
}
protected function doDelete($id)
{
return $this->pool->deleteItem(rawurlencode($id));
}
protected function doFlush()
{
$this->pool->clear();
}
protected function doGetStats()
{
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Resource\ResourceInterface;
interface ConfigCacheInterface
{
public function getPath();
public function isFresh();
public function write($content, array $metadata = null);
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Resource\ResourceInterface;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Filesystem\Filesystem;
class ResourceCheckerConfigCache implements ConfigCacheInterface
{
private $file;
private $resourceCheckers;
public function __construct($file, array $resourceCheckers = array())
{
$this->file = $file;
$this->resourceCheckers = $resourceCheckers;
}
public function getPath()
{
return $this->file;
}
public function isFresh()
{
if (!is_file($this->file)) {
return false;
}
if (!$this->resourceCheckers) {
return true; }
$metadata = $this->getMetaFile();
if (!is_file($metadata)) {
return false;
}
$e = null;
$meta = false;
$time = filemtime($this->file);
$signalingException = new \UnexpectedValueException();
$prevUnserializeHandler = ini_set('unserialize_callback_func','');
$prevErrorHandler = set_error_handler(function ($type, $msg, $file, $line, $context) use (&$prevErrorHandler, $signalingException) {
if (E_WARNING === $type &&'Class __PHP_Incomplete_Class has no unserializer'=== $msg) {
throw $signalingException;
}
return $prevErrorHandler ? $prevErrorHandler($type, $msg, $file, $line, $context) : false;
});
try {
$meta = unserialize(file_get_contents($metadata));
} catch (\Error $e) {
} catch (\Exception $e) {
}
restore_error_handler();
ini_set('unserialize_callback_func', $prevUnserializeHandler);
if (null !== $e && $e !== $signalingException) {
throw $e;
}
if (false === $meta) {
return false;
}
foreach ($meta as $resource) {
foreach ($this->resourceCheckers as $checker) {
if (!$checker->supports($resource)) {
continue; }
if ($checker->isFresh($resource, $time)) {
break; }
return false; }
}
return true;
}
public function write($content, array $metadata = null)
{
$mode = 0666;
$umask = umask();
$filesystem = new Filesystem();
$filesystem->dumpFile($this->file, $content, null);
try {
$filesystem->chmod($this->file, $mode, $umask);
} catch (IOException $e) {
}
if (null !== $metadata) {
$filesystem->dumpFile($this->getMetaFile(), serialize($metadata), null);
try {
$filesystem->chmod($this->getMetaFile(), $mode, $umask);
} catch (IOException $e) {
}
}
}
private function getMetaFile()
{
return $this->file.'.meta';
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Resource\SelfCheckingResourceChecker;
class ConfigCache extends ResourceCheckerConfigCache
{
private $debug;
public function __construct($file, $debug)
{
$this->debug = (bool) $debug;
$checkers = array();
if (true === $this->debug) {
$checkers = array(new SelfCheckingResourceChecker());
}
parent::__construct($file, $checkers);
}
public function isFresh()
{
if (!$this->debug && is_file($this->getPath())) {
return true;
}
return parent::isFresh();
}
}
}
namespace Symfony\Component\Config
{
use Symfony\Component\Config\Exception\FileLocatorFileNotFoundException;
class FileLocator implements FileLocatorInterface
{
protected $paths;
public function __construct($paths = array())
{
$this->paths = (array) $paths;
}
public function locate($name, $currentPath = null, $first = true)
{
if (''== $name) {
throw new \InvalidArgumentException('An empty file name is not valid to be located.');
}
if ($this->isAbsolutePath($name)) {
if (!file_exists($name)) {
throw new FileLocatorFileNotFoundException(sprintf('The file "%s" does not exist.', $name));
}
return $name;
}
$paths = $this->paths;
if (null !== $currentPath) {
array_unshift($paths, $currentPath);
}
$paths = array_unique($paths);
$filepaths = array();
foreach ($paths as $path) {
if (@file_exists($file = $path.DIRECTORY_SEPARATOR.$name)) {
if (true === $first) {
return $file;
}
$filepaths[] = $file;
}
}
if (!$filepaths) {
throw new FileLocatorFileNotFoundException(sprintf('The file "%s" does not exist (in: %s).', $name, implode(', ', $paths)));
}
return $filepaths;
}
private function isAbsolutePath($file)
{
if ($file[0] ==='/'|| $file[0] ==='\\'|| (strlen($file) > 3 && ctype_alpha($file[0])
&& $file[1] ===':'&& ($file[2] ==='\\'|| $file[2] ==='/')
)
|| null !== parse_url($file, PHP_URL_SCHEME)
) {
return true;
}
return false;
}
}
}
namespace Symfony\Component\Debug
{
use Psr\Log\LogLevel;
use Psr\Log\LoggerInterface;
use Symfony\Component\Debug\Exception\ContextErrorException;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use Symfony\Component\Debug\Exception\OutOfMemoryException;
use Symfony\Component\Debug\Exception\SilencedErrorContext;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedFunctionFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedMethodFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\ClassNotFoundFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\FatalErrorHandlerInterface;
class ErrorHandler
{
private $levels = array(
E_DEPRECATED =>'Deprecated',
E_USER_DEPRECATED =>'User Deprecated',
E_NOTICE =>'Notice',
E_USER_NOTICE =>'User Notice',
E_STRICT =>'Runtime Notice',
E_WARNING =>'Warning',
E_USER_WARNING =>'User Warning',
E_COMPILE_WARNING =>'Compile Warning',
E_CORE_WARNING =>'Core Warning',
E_USER_ERROR =>'User Error',
E_RECOVERABLE_ERROR =>'Catchable Fatal Error',
E_COMPILE_ERROR =>'Compile Error',
E_PARSE =>'Parse Error',
E_ERROR =>'Error',
E_CORE_ERROR =>'Core Error',
);
private $loggers = array(
E_DEPRECATED => array(null, LogLevel::INFO),
E_USER_DEPRECATED => array(null, LogLevel::INFO),
E_NOTICE => array(null, LogLevel::WARNING),
E_USER_NOTICE => array(null, LogLevel::WARNING),
E_STRICT => array(null, LogLevel::WARNING),
E_WARNING => array(null, LogLevel::WARNING),
E_USER_WARNING => array(null, LogLevel::WARNING),
E_COMPILE_WARNING => array(null, LogLevel::WARNING),
E_CORE_WARNING => array(null, LogLevel::WARNING),
E_USER_ERROR => array(null, LogLevel::CRITICAL),
E_RECOVERABLE_ERROR => array(null, LogLevel::CRITICAL),
E_COMPILE_ERROR => array(null, LogLevel::CRITICAL),
E_PARSE => array(null, LogLevel::CRITICAL),
E_ERROR => array(null, LogLevel::CRITICAL),
E_CORE_ERROR => array(null, LogLevel::CRITICAL),
);
private $thrownErrors = 0x1FFF; private $scopedErrors = 0x1FFF; private $tracedErrors = 0x77FB; private $screamedErrors = 0x55; private $loggedErrors = 0;
private $traceReflector;
private $isRecursive = 0;
private $isRoot = false;
private $exceptionHandler;
private $bootstrappingLogger;
private static $reservedMemory;
private static $stackedErrors = array();
private static $stackedErrorLevels = array();
private static $toStringException = null;
public static function register(self $handler = null, $replace = true)
{
if (null === self::$reservedMemory) {
self::$reservedMemory = str_repeat('x', 10240);
register_shutdown_function(__CLASS__.'::handleFatalError');
}
if ($handlerIsNew = null === $handler) {
$handler = new static();
}
if (null === $prev = set_error_handler(array($handler,'handleError'))) {
restore_error_handler();
set_error_handler(array($handler,'handleError'), $handler->thrownErrors | $handler->loggedErrors);
$handler->isRoot = true;
}
if ($handlerIsNew && is_array($prev) && $prev[0] instanceof self) {
$handler = $prev[0];
$replace = false;
}
if ($replace || !$prev) {
$handler->setExceptionHandler(set_exception_handler(array($handler,'handleException')));
} else {
restore_error_handler();
}
$handler->throwAt(E_ALL & $handler->thrownErrors, true);
return $handler;
}
public function __construct(BufferingLogger $bootstrappingLogger = null)
{
if ($bootstrappingLogger) {
$this->bootstrappingLogger = $bootstrappingLogger;
$this->setDefaultLogger($bootstrappingLogger);
}
$this->traceReflector = new \ReflectionProperty('Exception','trace');
$this->traceReflector->setAccessible(true);
}
public function setDefaultLogger(LoggerInterface $logger, $levels = E_ALL, $replace = false)
{
$loggers = array();
if (is_array($levels)) {
foreach ($levels as $type => $logLevel) {
if (empty($this->loggers[$type][0]) || $replace || $this->loggers[$type][0] === $this->bootstrappingLogger) {
$loggers[$type] = array($logger, $logLevel);
}
}
} else {
if (null === $levels) {
$levels = E_ALL;
}
foreach ($this->loggers as $type => $log) {
if (($type & $levels) && (empty($log[0]) || $replace || $log[0] === $this->bootstrappingLogger)) {
$log[0] = $logger;
$loggers[$type] = $log;
}
}
}
$this->setLoggers($loggers);
}
public function setLoggers(array $loggers)
{
$prevLogged = $this->loggedErrors;
$prev = $this->loggers;
$flush = array();
foreach ($loggers as $type => $log) {
if (!isset($prev[$type])) {
throw new \InvalidArgumentException('Unknown error type: '.$type);
}
if (!is_array($log)) {
$log = array($log);
} elseif (!array_key_exists(0, $log)) {
throw new \InvalidArgumentException('No logger provided');
}
if (null === $log[0]) {
$this->loggedErrors &= ~$type;
} elseif ($log[0] instanceof LoggerInterface) {
$this->loggedErrors |= $type;
} else {
throw new \InvalidArgumentException('Invalid logger provided');
}
$this->loggers[$type] = $log + $prev[$type];
if ($this->bootstrappingLogger && $prev[$type][0] === $this->bootstrappingLogger) {
$flush[$type] = $type;
}
}
$this->reRegister($prevLogged | $this->thrownErrors);
if ($flush) {
foreach ($this->bootstrappingLogger->cleanLogs() as $log) {
$type = $log[2]['exception'] instanceof \ErrorException ? $log[2]['exception']->getSeverity() : E_ERROR;
if (!isset($flush[$type])) {
$this->bootstrappingLogger->log($log[0], $log[1], $log[2]);
} elseif ($this->loggers[$type][0]) {
$this->loggers[$type][0]->log($this->loggers[$type][1], $log[1], $log[2]);
}
}
}
return $prev;
}
public function setExceptionHandler(callable $handler = null)
{
$prev = $this->exceptionHandler;
$this->exceptionHandler = $handler;
return $prev;
}
public function throwAt($levels, $replace = false)
{
$prev = $this->thrownErrors;
$this->thrownErrors = ($levels | E_RECOVERABLE_ERROR | E_USER_ERROR) & ~E_USER_DEPRECATED & ~E_DEPRECATED;
if (!$replace) {
$this->thrownErrors |= $prev;
}
$this->reRegister($prev | $this->loggedErrors);
return $prev;
}
public function scopeAt($levels, $replace = false)
{
$prev = $this->scopedErrors;
$this->scopedErrors = (int) $levels;
if (!$replace) {
$this->scopedErrors |= $prev;
}
return $prev;
}
public function traceAt($levels, $replace = false)
{
$prev = $this->tracedErrors;
$this->tracedErrors = (int) $levels;
if (!$replace) {
$this->tracedErrors |= $prev;
}
return $prev;
}
public function screamAt($levels, $replace = false)
{
$prev = $this->screamedErrors;
$this->screamedErrors = (int) $levels;
if (!$replace) {
$this->screamedErrors |= $prev;
}
return $prev;
}
private function reRegister($prev)
{
if ($prev !== $this->thrownErrors | $this->loggedErrors) {
$handler = set_error_handler('var_dump');
$handler = is_array($handler) ? $handler[0] : null;
restore_error_handler();
if ($handler === $this) {
restore_error_handler();
if ($this->isRoot) {
set_error_handler(array($this,'handleError'), $this->thrownErrors | $this->loggedErrors);
} else {
set_error_handler(array($this,'handleError'));
}
}
}
}
public function handleError($type, $message, $file, $line)
{
$level = error_reporting() | E_RECOVERABLE_ERROR | E_USER_ERROR | E_DEPRECATED | E_USER_DEPRECATED;
$log = $this->loggedErrors & $type;
$throw = $this->thrownErrors & $type & $level;
$type &= $level | $this->screamedErrors;
if (!$type || (!$log && !$throw)) {
return $type && $log;
}
$scope = $this->scopedErrors & $type;
if (4 < $numArgs = func_num_args()) {
$context = $scope ? (func_get_arg(4) ?: array()) : array();
$backtrace = 5 < $numArgs ? func_get_arg(5) : null; } else {
$context = array();
$backtrace = null;
}
if (isset($context['GLOBALS']) && $scope) {
$e = $context; unset($e['GLOBALS'], $context); $context = $e;
}
if (null !== $backtrace && $type & E_ERROR) {
$this->handleFatalError(compact('type','message','file','line','backtrace'));
return true;
}
$logMessage = $this->levels[$type].': '.$message;
if (null !== self::$toStringException) {
$errorAsException = self::$toStringException;
self::$toStringException = null;
} elseif (!$throw && !($type & $level)) {
$errorAsException = new SilencedErrorContext($type, $file, $line);
} else {
if ($scope) {
$errorAsException = new ContextErrorException($logMessage, 0, $type, $file, $line, $context);
} else {
$errorAsException = new \ErrorException($logMessage, 0, $type, $file, $line);
}
if ($throw || $this->tracedErrors & $type) {
$backtrace = $backtrace ?: $errorAsException->getTrace();
$lightTrace = $backtrace;
for ($i = 0; isset($backtrace[$i]); ++$i) {
if (isset($backtrace[$i]['file'], $backtrace[$i]['line']) && $backtrace[$i]['line'] === $line && $backtrace[$i]['file'] === $file) {
$lightTrace = array_slice($lightTrace, 1 + $i);
break;
}
}
if (!($throw || $this->scopedErrors & $type)) {
for ($i = 0; isset($lightTrace[$i]); ++$i) {
unset($lightTrace[$i]['args']);
}
}
$this->traceReflector->setValue($errorAsException, $lightTrace);
} else {
$this->traceReflector->setValue($errorAsException, array());
}
}
if ($throw) {
if (E_USER_ERROR & $type) {
for ($i = 1; isset($backtrace[$i]); ++$i) {
if (isset($backtrace[$i]['function'], $backtrace[$i]['type'], $backtrace[$i - 1]['function'])
&&'__toString'=== $backtrace[$i]['function']
&&'->'=== $backtrace[$i]['type']
&& !isset($backtrace[$i - 1]['class'])
&& ('trigger_error'=== $backtrace[$i - 1]['function'] ||'user_error'=== $backtrace[$i - 1]['function'])
) {
foreach ($context as $e) {
if (($e instanceof \Exception || $e instanceof \Throwable) && $e->__toString() === $message) {
if (1 === $i) {
$errorAsException = $e;
break;
}
self::$toStringException = $e;
return true;
}
}
if (1 < $i) {
$this->handleException($errorAsException);
return false;
}
}
}
}
throw $errorAsException;
}
if ($this->isRecursive) {
$log = 0;
} elseif (self::$stackedErrorLevels) {
self::$stackedErrors[] = array(
$this->loggers[$type][0],
($type & $level) ? $this->loggers[$type][1] : LogLevel::DEBUG,
$logMessage,
array('exception'=> $errorAsException),
);
} else {
try {
$this->isRecursive = true;
$level = ($type & $level) ? $this->loggers[$type][1] : LogLevel::DEBUG;
$this->loggers[$type][0]->log($level, $logMessage, array('exception'=> $errorAsException));
} finally {
$this->isRecursive = false;
}
}
return $type && $log;
}
public function handleException($exception, array $error = null)
{
if (!$exception instanceof \Exception) {
$exception = new FatalThrowableError($exception);
}
$type = $exception instanceof FatalErrorException ? $exception->getSeverity() : E_ERROR;
if (($this->loggedErrors & $type) || $exception instanceof FatalThrowableError) {
if ($exception instanceof FatalErrorException) {
if ($exception instanceof FatalThrowableError) {
$error = array('type'=> $type,'message'=> $message = $exception->getMessage(),'file'=> $exception->getFile(),'line'=> $exception->getLine(),
);
} else {
$message ='Fatal '.$exception->getMessage();
}
} elseif ($exception instanceof \ErrorException) {
$message ='Uncaught '.$exception->getMessage();
if ($exception instanceof ContextErrorException) {
$e['context'] = $exception->getContext();
}
} else {
$message ='Uncaught Exception: '.$exception->getMessage();
}
}
if ($this->loggedErrors & $type) {
try {
$this->loggers[$type][0]->log($this->loggers[$type][1], $message, array('exception'=> $exception));
} catch (\Exception $handlerException) {
} catch (\Throwable $handlerException) {
}
}
if ($exception instanceof FatalErrorException && !$exception instanceof OutOfMemoryException && $error) {
foreach ($this->getFatalErrorHandlers() as $handler) {
if ($e = $handler->handleError($error, $exception)) {
$exception = $e;
break;
}
}
}
if (empty($this->exceptionHandler)) {
throw $exception; }
try {
call_user_func($this->exceptionHandler, $exception);
} catch (\Exception $handlerException) {
} catch (\Throwable $handlerException) {
}
if (isset($handlerException)) {
$this->exceptionHandler = null;
$this->handleException($handlerException);
}
}
public static function handleFatalError(array $error = null)
{
if (null === self::$reservedMemory) {
return;
}
self::$reservedMemory = null;
$handler = set_error_handler('var_dump');
$handler = is_array($handler) ? $handler[0] : null;
restore_error_handler();
if (!$handler instanceof self) {
return;
}
if (null === $error) {
$error = error_get_last();
}
try {
while (self::$stackedErrorLevels) {
static::unstackErrors();
}
} catch (\Exception $exception) {
} catch (\Throwable $exception) {
}
if ($error && $error['type'] &= E_PARSE | E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR) {
$handler->throwAt(0, true);
$trace = isset($error['backtrace']) ? $error['backtrace'] : null;
if (0 === strpos($error['message'],'Allowed memory') || 0 === strpos($error['message'],'Out of memory')) {
$exception = new OutOfMemoryException($handler->levels[$error['type']].': '.$error['message'], 0, $error['type'], $error['file'], $error['line'], 2, false, $trace);
} else {
$exception = new FatalErrorException($handler->levels[$error['type']].': '.$error['message'], 0, $error['type'], $error['file'], $error['line'], 2, true, $trace);
}
} elseif (!isset($exception)) {
return;
}
try {
$handler->handleException($exception, $error);
} catch (FatalErrorException $e) {
}
}
public static function stackErrors()
{
self::$stackedErrorLevels[] = error_reporting(error_reporting() | E_PARSE | E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR);
}
public static function unstackErrors()
{
$level = array_pop(self::$stackedErrorLevels);
if (null !== $level) {
$errorReportingLevel = error_reporting($level);
if ($errorReportingLevel !== ($level | E_PARSE | E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR)) {
error_reporting($errorReportingLevel);
}
}
if (empty(self::$stackedErrorLevels)) {
$errors = self::$stackedErrors;
self::$stackedErrors = array();
foreach ($errors as $error) {
$error[0]->log($error[1], $error[2], $error[3]);
}
}
}
protected function getFatalErrorHandlers()
{
return array(
new UndefinedFunctionFatalErrorHandler(),
new UndefinedMethodFatalErrorHandler(),
new ClassNotFoundFatalErrorHandler(),
);
}
}
}
namespace Symfony\Component\DependencyInjection
{
interface ContainerAwareInterface
{
public function setContainer(ContainerInterface $container = null);
}
}
namespace Symfony\Component\DependencyInjection
{
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
interface ContainerInterface
{
const EXCEPTION_ON_INVALID_REFERENCE = 1;
const NULL_ON_INVALID_REFERENCE = 2;
const IGNORE_ON_INVALID_REFERENCE = 3;
public function set($id, $service);
public function get($id, $invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE);
public function has($id);
public function initialized($id);
public function getParameter($name);
public function hasParameter($name);
public function setParameter($name, $value);
}
}
namespace Symfony\Component\DependencyInjection
{
interface ResettableContainerInterface extends ContainerInterface
{
public function reset();
}
}
namespace Symfony\Component\DependencyInjection
{
use Symfony\Component\DependencyInjection\Exception\EnvNotFoundException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class Container implements ResettableContainerInterface
{
protected $parameterBag;
protected $services = array();
protected $methodMap = array();
protected $privates = array();
protected $aliases = array();
protected $loading = array();
private $underscoreMap = array('_'=>'','.'=>'_','\\'=>'_');
private $envCache = array();
public function __construct(ParameterBagInterface $parameterBag = null)
{
$this->parameterBag = $parameterBag ?: new EnvPlaceholderParameterBag();
}
public function compile()
{
$this->parameterBag->resolve();
$this->parameterBag = new FrozenParameterBag($this->parameterBag->all());
}
public function isFrozen()
{
return $this->parameterBag instanceof FrozenParameterBag;
}
public function getParameterBag()
{
return $this->parameterBag;
}
public function getParameter($name)
{
return $this->parameterBag->get($name);
}
public function hasParameter($name)
{
return $this->parameterBag->has($name);
}
public function setParameter($name, $value)
{
$this->parameterBag->set($name, $value);
}
public function set($id, $service)
{
$id = strtolower($id);
if ('service_container'=== $id) {
throw new InvalidArgumentException('You cannot set service "service_container".');
}
if (isset($this->aliases[$id])) {
unset($this->aliases[$id]);
}
$this->services[$id] = $service;
if (null === $service) {
unset($this->services[$id]);
}
if (isset($this->privates[$id])) {
if (null === $service) {
@trigger_error(sprintf('Unsetting the "%s" private service is deprecated since Symfony 3.2 and won\'t be supported anymore in Symfony 4.0.', $id), E_USER_DEPRECATED);
unset($this->privates[$id]);
} else {
@trigger_error(sprintf('Setting the "%s" private service is deprecated since Symfony 3.2 and won\'t be supported anymore in Symfony 4.0. A new public service will be created instead.', $id), E_USER_DEPRECATED);
}
}
}
public function has($id)
{
for ($i = 2;;) {
if ('service_container'=== $id
|| isset($this->aliases[$id])
|| isset($this->services[$id])
) {
return true;
}
if (isset($this->privates[$id])) {
@trigger_error(sprintf('Checking for the existence of the "%s" private service is deprecated since Symfony 3.2 and won\'t be supported anymore in Symfony 4.0.', $id), E_USER_DEPRECATED);
}
if (isset($this->methodMap[$id])) {
return true;
}
if (--$i && $id !== $lcId = strtolower($id)) {
$id = $lcId;
continue;
}
if (!$this->methodMap && !$this instanceof ContainerBuilder && __CLASS__ !== static::class && method_exists($this,'get'.strtr($id, $this->underscoreMap).'Service')) {
@trigger_error('Generating a dumped container without populating the method map is deprecated since 3.2 and will be unsupported in 4.0. Update your dumper to generate the method map.', E_USER_DEPRECATED);
return true;
}
return false;
}
}
public function get($id, $invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE)
{
for ($i = 2;;) {
if ('service_container'=== $id) {
return $this;
}
if (isset($this->aliases[$id])) {
$id = $this->aliases[$id];
}
if (isset($this->services[$id])) {
return $this->services[$id];
}
if (isset($this->loading[$id])) {
throw new ServiceCircularReferenceException($id, array_keys($this->loading));
}
if (isset($this->methodMap[$id])) {
$method = $this->methodMap[$id];
} elseif (--$i && $id !== $lcId = strtolower($id)) {
$id = $lcId;
continue;
} elseif (!$this->methodMap && !$this instanceof ContainerBuilder && __CLASS__ !== static::class && method_exists($this, $method ='get'.strtr($id, $this->underscoreMap).'Service')) {
@trigger_error('Generating a dumped container without populating the method map is deprecated since 3.2 and will be unsupported in 4.0. Update your dumper to generate the method map.', E_USER_DEPRECATED);
} else {
if (self::EXCEPTION_ON_INVALID_REFERENCE === $invalidBehavior) {
if (!$id) {
throw new ServiceNotFoundException($id);
}
$alternatives = array();
foreach ($this->getServiceIds() as $knownId) {
$lev = levenshtein($id, $knownId);
if ($lev <= strlen($id) / 3 || false !== strpos($knownId, $id)) {
$alternatives[] = $knownId;
}
}
throw new ServiceNotFoundException($id, null, null, $alternatives);
}
return;
}
if (isset($this->privates[$id])) {
@trigger_error(sprintf('Requesting the "%s" private service is deprecated since Symfony 3.2 and won\'t be supported anymore in Symfony 4.0.', $id), E_USER_DEPRECATED);
}
$this->loading[$id] = true;
try {
$service = $this->$method();
} catch (\Exception $e) {
unset($this->services[$id]);
throw $e;
} finally {
unset($this->loading[$id]);
}
return $service;
}
}
public function initialized($id)
{
$id = strtolower($id);
if ('service_container'=== $id) {
return false;
}
if (isset($this->aliases[$id])) {
$id = $this->aliases[$id];
}
return isset($this->services[$id]);
}
public function reset()
{
$this->services = array();
}
public function getServiceIds()
{
$ids = array();
if (!$this->methodMap && !$this instanceof ContainerBuilder && __CLASS__ !== static::class) {
@trigger_error('Generating a dumped container without populating the method map is deprecated since 3.2 and will be unsupported in 4.0. Update your dumper to generate the method map.', E_USER_DEPRECATED);
foreach (get_class_methods($this) as $method) {
if (preg_match('/^get(.+)Service$/', $method, $match)) {
$ids[] = self::underscore($match[1]);
}
}
}
$ids[] ='service_container';
return array_unique(array_merge($ids, array_keys($this->methodMap), array_keys($this->services)));
}
public static function camelize($id)
{
return strtr(ucwords(strtr($id, array('_'=>' ','.'=>'_ ','\\'=>'_ '))), array(' '=>''));
}
public static function underscore($id)
{
return strtolower(preg_replace(array('/([A-Z]+)([A-Z][a-z])/','/([a-z\d])([A-Z])/'), array('\\1_\\2','\\1_\\2'), str_replace('_','.', $id)));
}
protected function getEnv($name)
{
if (isset($this->envCache[$name]) || array_key_exists($name, $this->envCache)) {
return $this->envCache[$name];
}
if (isset($_ENV[$name])) {
return $this->envCache[$name] = $_ENV[$name];
}
if (false !== $env = getenv($name)) {
return $this->envCache[$name] = $env;
}
if (!$this->hasParameter("env($name)")) {
throw new EnvNotFoundException($name);
}
return $this->envCache[$name] = $this->getParameter("env($name)");
}
private function __clone()
{
}
}
}
namespace Symfony\Component\EventDispatcher
{
class Event
{
private $propagationStopped = false;
public function isPropagationStopped()
{
return $this->propagationStopped;
}
public function stopPropagation()
{
$this->propagationStopped = true;
}
}
}
namespace Symfony\Component\EventDispatcher
{
interface EventDispatcherInterface
{
public function dispatch($eventName, Event $event = null);
public function addListener($eventName, $listener, $priority = 0);
public function addSubscriber(EventSubscriberInterface $subscriber);
public function removeListener($eventName, $listener);
public function removeSubscriber(EventSubscriberInterface $subscriber);
public function getListeners($eventName = null);
public function getListenerPriority($eventName, $listener);
public function hasListeners($eventName = null);
}
}
namespace Symfony\Component\EventDispatcher
{
class EventDispatcher implements EventDispatcherInterface
{
private $listeners = array();
private $sorted = array();
public function dispatch($eventName, Event $event = null)
{
if (null === $event) {
$event = new Event();
}
if ($listeners = $this->getListeners($eventName)) {
$this->doDispatch($listeners, $eventName, $event);
}
return $event;
}
public function getListeners($eventName = null)
{
if (null !== $eventName) {
if (!isset($this->listeners[$eventName])) {
return array();
}
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
return $this->sorted[$eventName];
}
foreach ($this->listeners as $eventName => $eventListeners) {
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
}
return array_filter($this->sorted);
}
public function getListenerPriority($eventName, $listener)
{
if (!isset($this->listeners[$eventName])) {
return;
}
foreach ($this->listeners[$eventName] as $priority => $listeners) {
if (false !== in_array($listener, $listeners, true)) {
return $priority;
}
}
}
public function hasListeners($eventName = null)
{
return (bool) $this->getListeners($eventName);
}
public function addListener($eventName, $listener, $priority = 0)
{
$this->listeners[$eventName][$priority][] = $listener;
unset($this->sorted[$eventName]);
}
public function removeListener($eventName, $listener)
{
if (!isset($this->listeners[$eventName])) {
return;
}
foreach ($this->listeners[$eventName] as $priority => $listeners) {
if (false !== ($key = array_search($listener, $listeners, true))) {
unset($this->listeners[$eventName][$priority][$key], $this->sorted[$eventName]);
}
}
}
public function addSubscriber(EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (is_string($params)) {
$this->addListener($eventName, array($subscriber, $params));
} elseif (is_string($params[0])) {
$this->addListener($eventName, array($subscriber, $params[0]), isset($params[1]) ? $params[1] : 0);
} else {
foreach ($params as $listener) {
$this->addListener($eventName, array($subscriber, $listener[0]), isset($listener[1]) ? $listener[1] : 0);
}
}
}
}
public function removeSubscriber(EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (is_array($params) && is_array($params[0])) {
foreach ($params as $listener) {
$this->removeListener($eventName, array($subscriber, $listener[0]));
}
} else {
$this->removeListener($eventName, array($subscriber, is_string($params) ? $params : $params[0]));
}
}
}
protected function doDispatch($listeners, $eventName, Event $event)
{
foreach ($listeners as $listener) {
if ($event->isPropagationStopped()) {
break;
}
call_user_func($listener, $event, $eventName, $this);
}
}
private function sortListeners($eventName)
{
krsort($this->listeners[$eventName]);
$this->sorted[$eventName] = call_user_func_array('array_merge', $this->listeners[$eventName]);
}
}
}
namespace Symfony\Component\EventDispatcher
{
use Symfony\Component\DependencyInjection\ContainerInterface;
class ContainerAwareEventDispatcher extends EventDispatcher
{
private $container;
private $listenerIds = array();
private $listeners = array();
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function addListenerService($eventName, $callback, $priority = 0)
{
if (!is_array($callback) || 2 !== count($callback)) {
throw new \InvalidArgumentException('Expected an array("service", "method") argument');
}
$this->listenerIds[$eventName][] = array($callback[0], $callback[1], $priority);
}
public function removeListener($eventName, $listener)
{
$this->lazyLoad($eventName);
if (isset($this->listenerIds[$eventName])) {
foreach ($this->listenerIds[$eventName] as $i => list($serviceId, $method, $priority)) {
$key = $serviceId.'.'.$method;
if (isset($this->listeners[$eventName][$key]) && $listener === array($this->listeners[$eventName][$key], $method)) {
unset($this->listeners[$eventName][$key]);
if (empty($this->listeners[$eventName])) {
unset($this->listeners[$eventName]);
}
unset($this->listenerIds[$eventName][$i]);
if (empty($this->listenerIds[$eventName])) {
unset($this->listenerIds[$eventName]);
}
}
}
}
parent::removeListener($eventName, $listener);
}
public function hasListeners($eventName = null)
{
if (null === $eventName) {
return (bool) count($this->listenerIds) || (bool) count($this->listeners);
}
if (isset($this->listenerIds[$eventName])) {
return true;
}
return parent::hasListeners($eventName);
}
public function getListeners($eventName = null)
{
if (null === $eventName) {
foreach ($this->listenerIds as $serviceEventName => $args) {
$this->lazyLoad($serviceEventName);
}
} else {
$this->lazyLoad($eventName);
}
return parent::getListeners($eventName);
}
public function getListenerPriority($eventName, $listener)
{
$this->lazyLoad($eventName);
return parent::getListenerPriority($eventName, $listener);
}
public function addSubscriberService($serviceId, $class)
{
foreach ($class::getSubscribedEvents() as $eventName => $params) {
if (is_string($params)) {
$this->listenerIds[$eventName][] = array($serviceId, $params, 0);
} elseif (is_string($params[0])) {
$this->listenerIds[$eventName][] = array($serviceId, $params[0], isset($params[1]) ? $params[1] : 0);
} else {
foreach ($params as $listener) {
$this->listenerIds[$eventName][] = array($serviceId, $listener[0], isset($listener[1]) ? $listener[1] : 0);
}
}
}
}
public function getContainer()
{
return $this->container;
}
protected function lazyLoad($eventName)
{
if (isset($this->listenerIds[$eventName])) {
foreach ($this->listenerIds[$eventName] as list($serviceId, $method, $priority)) {
$listener = $this->container->get($serviceId);
$key = $serviceId.'.'.$method;
if (!isset($this->listeners[$eventName][$key])) {
$this->addListener($eventName, array($listener, $method), $priority);
} elseif ($listener !== $this->listeners[$eventName][$key]) {
parent::removeListener($eventName, array($this->listeners[$eventName][$key], $method));
$this->addListener($eventName, array($listener, $method), $priority);
}
$this->listeners[$eventName][$key] = $listener;
}
}
}
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class ResponseListener implements EventSubscriberInterface
{
private $charset;
public function __construct($charset)
{
$this->charset = $charset;
}
public function onKernelResponse(FilterResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
$response = $event->getResponse();
if (null === $response->getCharset()) {
$response->setCharset($this->charset);
}
$response->prepare($event->getRequest());
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::RESPONSE =>'onKernelResponse',
);
}
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
class RouterListener implements EventSubscriberInterface
{
private $matcher;
private $context;
private $logger;
private $requestStack;
public function __construct($matcher, RequestStack $requestStack, RequestContext $context = null, LoggerInterface $logger = null)
{
if (!$matcher instanceof UrlMatcherInterface && !$matcher instanceof RequestMatcherInterface) {
throw new \InvalidArgumentException('Matcher must either implement UrlMatcherInterface or RequestMatcherInterface.');
}
if (null === $context && !$matcher instanceof RequestContextAwareInterface) {
throw new \InvalidArgumentException('You must either pass a RequestContext or the matcher must implement RequestContextAwareInterface.');
}
$this->matcher = $matcher;
$this->context = $context ?: $matcher->getContext();
$this->requestStack = $requestStack;
$this->logger = $logger;
}
private function setCurrentRequest(Request $request = null)
{
if (null !== $request) {
$this->context->fromRequest($request);
}
}
public function onKernelFinishRequest(FinishRequestEvent $event)
{
$this->setCurrentRequest($this->requestStack->getParentRequest());
}
public function onKernelRequest(GetResponseEvent $event)
{
$request = $event->getRequest();
$this->setCurrentRequest($request);
if ($request->attributes->has('_controller')) {
return;
}
try {
if ($this->matcher instanceof RequestMatcherInterface) {
$parameters = $this->matcher->matchRequest($request);
} else {
$parameters = $this->matcher->match($request->getPathInfo());
}
if (null !== $this->logger) {
$this->logger->info('Matched route "{route}".', array('route'=> isset($parameters['_route']) ? $parameters['_route'] :'n/a','route_parameters'=> $parameters,'request_uri'=> $request->getUri(),'method'=> $request->getMethod(),
));
}
$request->attributes->add($parameters);
unset($parameters['_route'], $parameters['_controller']);
$request->attributes->set('_route_params', $parameters);
} catch (ResourceNotFoundException $e) {
$message = sprintf('No route found for "%s %s"', $request->getMethod(), $request->getPathInfo());
if ($referer = $request->headers->get('referer')) {
$message .= sprintf(' (from "%s")', $referer);
}
throw new NotFoundHttpException($message, $e);
} catch (MethodNotAllowedException $e) {
$message = sprintf('No route found for "%s %s": Method Not Allowed (Allow: %s)', $request->getMethod(), $request->getPathInfo(), implode(', ', $e->getAllowedMethods()));
throw new MethodNotAllowedHttpException($e->getAllowedMethods(), $message, $e);
}
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::REQUEST => array(array('onKernelRequest', 32)),
KernelEvents::FINISH_REQUEST => array(array('onKernelFinishRequest', 0)),
);
}
}
}
namespace Symfony\Component\HttpKernel\Bundle
{
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
interface BundleInterface extends ContainerAwareInterface
{
public function boot();
public function shutdown();
public function build(ContainerBuilder $container);
public function getContainerExtension();
public function getParent();
public function getName();
public function getNamespace();
public function getPath();
}
}
namespace Symfony\Component\DependencyInjection
{
trait ContainerAwareTrait
{
protected $container;
public function setContainer(ContainerInterface $container = null)
{
$this->container = $container;
}
}
}
namespace Symfony\Component\HttpKernel\Bundle
{
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Console\Application;
use Symfony\Component\Finder\Finder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
abstract class Bundle implements BundleInterface
{
use ContainerAwareTrait;
protected $name;
protected $extension;
protected $path;
private $namespace;
public function boot()
{
}
public function shutdown()
{
}
public function build(ContainerBuilder $container)
{
}
public function getContainerExtension()
{
if (null === $this->extension) {
$extension = $this->createContainerExtension();
if (null !== $extension) {
if (!$extension instanceof ExtensionInterface) {
throw new \LogicException(sprintf('Extension %s must implement Symfony\Component\DependencyInjection\Extension\ExtensionInterface.', get_class($extension)));
}
$basename = preg_replace('/Bundle$/','', $this->getName());
$expectedAlias = Container::underscore($basename);
if ($expectedAlias != $extension->getAlias()) {
throw new \LogicException(sprintf('Users will expect the alias of the default extension of a bundle to be the underscored version of the bundle name ("%s"). You can override "Bundle::getContainerExtension()" if you want to use "%s" or another alias.',
$expectedAlias, $extension->getAlias()
));
}
$this->extension = $extension;
} else {
$this->extension = false;
}
}
if ($this->extension) {
return $this->extension;
}
}
public function getNamespace()
{
if (null === $this->namespace) {
$this->parseClassName();
}
return $this->namespace;
}
public function getPath()
{
if (null === $this->path) {
$reflected = new \ReflectionObject($this);
$this->path = dirname($reflected->getFileName());
}
return $this->path;
}
public function getParent()
{
}
final public function getName()
{
if (null === $this->name) {
$this->parseClassName();
}
return $this->name;
}
public function registerCommands(Application $application)
{
if (!is_dir($dir = $this->getPath().'/Command')) {
return;
}
if (!class_exists('Symfony\Component\Finder\Finder')) {
throw new \RuntimeException('You need the symfony/finder component to register bundle commands.');
}
$finder = new Finder();
$finder->files()->name('*Command.php')->in($dir);
$prefix = $this->getNamespace().'\\Command';
foreach ($finder as $file) {
$ns = $prefix;
if ($relativePath = $file->getRelativePath()) {
$ns .='\\'.str_replace('/','\\', $relativePath);
}
$class = $ns.'\\'.$file->getBasename('.php');
if ($this->container) {
$alias ='console.command.'.strtolower(str_replace('\\','_', $class));
if ($this->container->has($alias)) {
continue;
}
}
$r = new \ReflectionClass($class);
if ($r->isSubclassOf('Symfony\\Component\\Console\\Command\\Command') && !$r->isAbstract() && !$r->getConstructor()->getNumberOfRequiredParameters()) {
$application->add($r->newInstance());
}
}
}
protected function getContainerExtensionClass()
{
$basename = preg_replace('/Bundle$/','', $this->getName());
return $this->getNamespace().'\\DependencyInjection\\'.$basename.'Extension';
}
protected function createContainerExtension()
{
if (class_exists($class = $this->getContainerExtensionClass())) {
return new $class();
}
}
private function parseClassName()
{
$pos = strrpos(static::class,'\\');
$this->namespace = false === $pos ?'': substr(static::class, 0, $pos);
if (null === $this->name) {
$this->name = false === $pos ? static::class : substr(static::class, $pos + 1);
}
}
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
interface ArgumentResolverInterface
{
public function getArguments(Request $request, $controller);
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
interface ControllerResolverInterface
{
public function getController(Request $request);
public function getArguments(Request $request, $controller);
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
class ControllerResolver implements ArgumentResolverInterface, ControllerResolverInterface
{
private $logger;
private $supportsVariadic;
private $supportsScalarTypes;
public function __construct(LoggerInterface $logger = null)
{
$this->logger = $logger;
$this->supportsVariadic = method_exists('ReflectionParameter','isVariadic');
$this->supportsScalarTypes = method_exists('ReflectionParameter','getType');
}
public function getController(Request $request)
{
if (!$controller = $request->attributes->get('_controller')) {
if (null !== $this->logger) {
$this->logger->warning('Unable to look for the controller as the "_controller" parameter is missing.');
}
return false;
}
if (is_array($controller)) {
return $controller;
}
if (is_object($controller)) {
if (method_exists($controller,'__invoke')) {
return $controller;
}
throw new \InvalidArgumentException(sprintf('Controller "%s" for URI "%s" is not callable.', get_class($controller), $request->getPathInfo()));
}
if (false === strpos($controller,':')) {
if (method_exists($controller,'__invoke')) {
return $this->instantiateController($controller);
} elseif (function_exists($controller)) {
return $controller;
}
}
$callable = $this->createController($controller);
if (!is_callable($callable)) {
throw new \InvalidArgumentException(sprintf('The controller for URI "%s" is not callable. %s', $request->getPathInfo(), $this->getControllerError($callable)));
}
return $callable;
}
public function getArguments(Request $request, $controller)
{
@trigger_error(sprintf('%s is deprecated as of 3.1 and will be removed in 4.0. Implement the %s and inject it in the HttpKernel instead.', __METHOD__, ArgumentResolverInterface::class), E_USER_DEPRECATED);
if (is_array($controller)) {
$r = new \ReflectionMethod($controller[0], $controller[1]);
} elseif (is_object($controller) && !$controller instanceof \Closure) {
$r = new \ReflectionObject($controller);
$r = $r->getMethod('__invoke');
} else {
$r = new \ReflectionFunction($controller);
}
return $this->doGetArguments($request, $controller, $r->getParameters());
}
protected function doGetArguments(Request $request, $controller, array $parameters)
{
@trigger_error(sprintf('%s is deprecated as of 3.1 and will be removed in 4.0. Implement the %s and inject it in the HttpKernel instead.', __METHOD__, ArgumentResolverInterface::class), E_USER_DEPRECATED);
$attributes = $request->attributes->all();
$arguments = array();
foreach ($parameters as $param) {
if (array_key_exists($param->name, $attributes)) {
if ($this->supportsVariadic && $param->isVariadic() && is_array($attributes[$param->name])) {
$arguments = array_merge($arguments, array_values($attributes[$param->name]));
} else {
$arguments[] = $attributes[$param->name];
}
} elseif ($param->getClass() && $param->getClass()->isInstance($request)) {
$arguments[] = $request;
} elseif ($param->isDefaultValueAvailable()) {
$arguments[] = $param->getDefaultValue();
} elseif ($this->supportsScalarTypes && $param->hasType() && $param->allowsNull()) {
$arguments[] = null;
} else {
if (is_array($controller)) {
$repr = sprintf('%s::%s()', get_class($controller[0]), $controller[1]);
} elseif (is_object($controller)) {
$repr = get_class($controller);
} else {
$repr = $controller;
}
throw new \RuntimeException(sprintf('Controller "%s" requires that you provide a value for the "$%s" argument (because there is no default value or because there is a non optional argument after this one).', $repr, $param->name));
}
}
return $arguments;
}
protected function createController($controller)
{
if (false === strpos($controller,'::')) {
throw new \InvalidArgumentException(sprintf('Unable to find controller "%s".', $controller));
}
list($class, $method) = explode('::', $controller, 2);
if (!class_exists($class)) {
throw new \InvalidArgumentException(sprintf('Class "%s" does not exist.', $class));
}
return array($this->instantiateController($class), $method);
}
protected function instantiateController($class)
{
return new $class();
}
private function getControllerError($callable)
{
if (is_string($callable)) {
if (false !== strpos($callable,'::')) {
$callable = explode('::', $callable);
}
if (class_exists($callable) && !method_exists($callable,'__invoke')) {
return sprintf('Class "%s" does not have a method "__invoke".', $callable);
}
if (!function_exists($callable)) {
return sprintf('Function "%s" does not exist.', $callable);
}
}
if (!is_array($callable)) {
return sprintf('Invalid type for controller given, expected string or array, got "%s".', gettype($callable));
}
if (2 !== count($callable)) {
return sprintf('Invalid format for controller, expected array(controller, method) or controller::method.');
}
list($controller, $method) = $callable;
if (is_string($controller) && !class_exists($controller)) {
return sprintf('Class "%s" does not exist.', $controller);
}
$className = is_object($controller) ? get_class($controller) : $controller;
if (method_exists($controller, $method)) {
return sprintf('Method "%s" on class "%s" should be public and non-abstract.', $method, $className);
}
$collection = get_class_methods($controller);
$alternatives = array();
foreach ($collection as $item) {
$lev = levenshtein($method, $item);
if ($lev <= strlen($method) / 3 || false !== strpos($item, $method)) {
$alternatives[] = $item;
}
}
asort($alternatives);
$message = sprintf('Expected method "%s" on class "%s"', $method, $className);
if (count($alternatives) > 0) {
$message .= sprintf(', did you mean "%s"?', implode('", "', $alternatives));
} else {
$message .= sprintf('. Available methods: "%s".', implode('", "', $collection));
}
return $message;
}
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactoryInterface;
final class ArgumentResolver implements ArgumentResolverInterface
{
private $argumentMetadataFactory;
private $argumentValueResolvers;
public function __construct(ArgumentMetadataFactoryInterface $argumentMetadataFactory = null, array $argumentValueResolvers = array())
{
$this->argumentMetadataFactory = $argumentMetadataFactory ?: new ArgumentMetadataFactory();
$this->argumentValueResolvers = $argumentValueResolvers ?: self::getDefaultArgumentValueResolvers();
}
public function getArguments(Request $request, $controller)
{
$arguments = array();
foreach ($this->argumentMetadataFactory->createArgumentMetadata($controller) as $metadata) {
foreach ($this->argumentValueResolvers as $resolver) {
if (!$resolver->supports($request, $metadata)) {
continue;
}
$resolved = $resolver->resolve($request, $metadata);
if (!$resolved instanceof \Generator) {
throw new \InvalidArgumentException(sprintf('%s::resolve() must yield at least one value.', get_class($resolver)));
}
foreach ($resolved as $append) {
$arguments[] = $append;
}
continue 2;
}
$representative = $controller;
if (is_array($representative)) {
$representative = sprintf('%s::%s()', get_class($representative[0]), $representative[1]);
} elseif (is_object($representative)) {
$representative = get_class($representative);
}
throw new \RuntimeException(sprintf('Controller "%s" requires that you provide a value for the "$%s" argument. Either the argument is nullable and no null value has been provided, no default value has been provided or because there is a non optional argument after this one.', $representative, $metadata->getName()));
}
return $arguments;
}
public static function getDefaultArgumentValueResolvers()
{
return array(
new RequestAttributeValueResolver(),
new RequestValueResolver(),
new DefaultValueResolver(),
new VariadicValueResolver(),
);
}
}
}
namespace Symfony\Component\HttpKernel\ControllerMetadata
{
class ArgumentMetadata
{
private $name;
private $type;
private $isVariadic;
private $hasDefaultValue;
private $defaultValue;
private $isNullable;
public function __construct($name, $type, $isVariadic, $hasDefaultValue, $defaultValue, $isNullable = false)
{
$this->name = $name;
$this->type = $type;
$this->isVariadic = $isVariadic;
$this->hasDefaultValue = $hasDefaultValue;
$this->defaultValue = $defaultValue;
$this->isNullable = $isNullable || null === $type || ($hasDefaultValue && null === $defaultValue);
}
public function getName()
{
return $this->name;
}
public function getType()
{
return $this->type;
}
public function isVariadic()
{
return $this->isVariadic;
}
public function hasDefaultValue()
{
return $this->hasDefaultValue;
}
public function isNullable()
{
return $this->isNullable;
}
public function getDefaultValue()
{
if (!$this->hasDefaultValue) {
throw new \LogicException(sprintf('Argument $%s does not have a default value. Use %s::hasDefaultValue() to avoid this exception.', $this->name, __CLASS__));
}
return $this->defaultValue;
}
}
}
namespace Symfony\Component\HttpKernel\ControllerMetadata
{
interface ArgumentMetadataFactoryInterface
{
public function createArgumentMetadata($controller);
}
}
namespace Symfony\Component\HttpKernel\ControllerMetadata
{
final class ArgumentMetadataFactory implements ArgumentMetadataFactoryInterface
{
private $supportsVariadic;
private $supportsParameterType;
public function __construct()
{
$this->supportsVariadic = method_exists('ReflectionParameter','isVariadic');
$this->supportsParameterType = method_exists('ReflectionParameter','getType');
}
public function createArgumentMetadata($controller)
{
$arguments = array();
if (is_array($controller)) {
$reflection = new \ReflectionMethod($controller[0], $controller[1]);
} elseif (is_object($controller) && !$controller instanceof \Closure) {
$reflection = (new \ReflectionObject($controller))->getMethod('__invoke');
} else {
$reflection = new \ReflectionFunction($controller);
}
foreach ($reflection->getParameters() as $param) {
$arguments[] = new ArgumentMetadata($param->getName(), $this->getType($param), $this->isVariadic($param), $this->hasDefaultValue($param), $this->getDefaultValue($param), $param->allowsNull());
}
return $arguments;
}
private function isVariadic(\ReflectionParameter $parameter)
{
return $this->supportsVariadic && $parameter->isVariadic();
}
private function hasDefaultValue(\ReflectionParameter $parameter)
{
return $parameter->isDefaultValueAvailable();
}
private function getDefaultValue(\ReflectionParameter $parameter)
{
return $this->hasDefaultValue($parameter) ? $parameter->getDefaultValue() : null;
}
private function getType(\ReflectionParameter $parameter)
{
if ($this->supportsParameterType) {
if (!$type = $parameter->getType()) {
return;
}
$typeName = $type instanceof \ReflectionNamedType ? $type->getName() : $type->__toString();
if ('array'=== $typeName && !$type->isBuiltin()) {
return;
}
return $typeName;
}
if (preg_match('/^(?:[^ ]++ ){4}([a-zA-Z_\x7F-\xFF][^ ]++)/', $parameter, $info)) {
return $info[1];
}
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\Event;
class KernelEvent extends Event
{
private $kernel;
private $request;
private $requestType;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType)
{
$this->kernel = $kernel;
$this->request = $request;
$this->requestType = $requestType;
}
public function getKernel()
{
return $this->kernel;
}
public function getRequest()
{
return $this->request;
}
public function getRequestType()
{
return $this->requestType;
}
public function isMasterRequest()
{
return HttpKernelInterface::MASTER_REQUEST === $this->requestType;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class FilterControllerEvent extends KernelEvent
{
private $controller;
public function __construct(HttpKernelInterface $kernel, callable $controller, Request $request, $requestType)
{
parent::__construct($kernel, $request, $requestType);
$this->setController($controller);
}
public function getController()
{
return $this->controller;
}
public function setController(callable $controller)
{
$this->controller = $controller;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class FilterResponseEvent extends KernelEvent
{
private $response;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, Response $response)
{
parent::__construct($kernel, $request, $requestType);
$this->setResponse($response);
}
public function getResponse()
{
return $this->response;
}
public function setResponse(Response $response)
{
$this->response = $response;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpFoundation\Response;
class GetResponseEvent extends KernelEvent
{
private $response;
public function getResponse()
{
return $this->response;
}
public function setResponse(Response $response)
{
$this->response = $response;
$this->stopPropagation();
}
public function hasResponse()
{
return null !== $this->response;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class GetResponseForControllerResultEvent extends GetResponseEvent
{
private $controllerResult;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, $controllerResult)
{
parent::__construct($kernel, $request, $requestType);
$this->controllerResult = $controllerResult;
}
public function getControllerResult()
{
return $this->controllerResult;
}
public function setControllerResult($controllerResult)
{
$this->controllerResult = $controllerResult;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class GetResponseForExceptionEvent extends GetResponseEvent
{
private $exception;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, \Exception $e)
{
parent::__construct($kernel, $request, $requestType);
$this->setException($e);
}
public function getException()
{
return $this->exception;
}
public function setException(\Exception $exception)
{
$this->exception = $exception;
}
}
}
namespace Symfony\Component\HttpKernel
{
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use Symfony\Component\HttpFoundation\Exception\ConflictingHeadersException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
class HttpKernel implements HttpKernelInterface, TerminableInterface
{
protected $dispatcher;
protected $resolver;
protected $requestStack;
private $argumentResolver;
public function __construct(EventDispatcherInterface $dispatcher, ControllerResolverInterface $resolver, RequestStack $requestStack = null, ArgumentResolverInterface $argumentResolver = null)
{
$this->dispatcher = $dispatcher;
$this->resolver = $resolver;
$this->requestStack = $requestStack ?: new RequestStack();
$this->argumentResolver = $argumentResolver;
if (null === $this->argumentResolver) {
@trigger_error(sprintf('As of 3.1 an %s is used to resolve arguments. In 4.0 the $argumentResolver becomes the %s if no other is provided instead of using the $resolver argument.', ArgumentResolverInterface::class, ArgumentResolver::class), E_USER_DEPRECATED);
$this->argumentResolver = $resolver;
}
}
public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
{
$request->headers->set('X-Php-Ob-Level', ob_get_level());
try {
return $this->handleRaw($request, $type);
} catch (\Exception $e) {
if ($e instanceof ConflictingHeadersException) {
$e = new BadRequestHttpException('The request headers contain conflicting information regarding the origin of this request.', $e);
}
if (false === $catch) {
$this->finishRequest($request, $type);
throw $e;
}
return $this->handleException($e, $request, $type);
}
}
public function terminate(Request $request, Response $response)
{
$this->dispatcher->dispatch(KernelEvents::TERMINATE, new PostResponseEvent($this, $request, $response));
}
public function terminateWithException(\Exception $exception)
{
if (!$request = $this->requestStack->getMasterRequest()) {
throw new \LogicException('Request stack is empty', 0, $exception);
}
$response = $this->handleException($exception, $request, self::MASTER_REQUEST);
$response->sendHeaders();
$response->sendContent();
$this->terminate($request, $response);
}
private function handleRaw(Request $request, $type = self::MASTER_REQUEST)
{
$this->requestStack->push($request);
$event = new GetResponseEvent($this, $request, $type);
$this->dispatcher->dispatch(KernelEvents::REQUEST, $event);
if ($event->hasResponse()) {
return $this->filterResponse($event->getResponse(), $request, $type);
}
if (false === $controller = $this->resolver->getController($request)) {
throw new NotFoundHttpException(sprintf('Unable to find the controller for path "%s". The route is wrongly configured.', $request->getPathInfo()));
}
$event = new FilterControllerEvent($this, $controller, $request, $type);
$this->dispatcher->dispatch(KernelEvents::CONTROLLER, $event);
$controller = $event->getController();
$arguments = $this->argumentResolver->getArguments($request, $controller);
$event = new FilterControllerArgumentsEvent($this, $controller, $arguments, $request, $type);
$this->dispatcher->dispatch(KernelEvents::CONTROLLER_ARGUMENTS, $event);
$controller = $event->getController();
$arguments = $event->getArguments();
$response = call_user_func_array($controller, $arguments);
if (!$response instanceof Response) {
$event = new GetResponseForControllerResultEvent($this, $request, $type, $response);
$this->dispatcher->dispatch(KernelEvents::VIEW, $event);
if ($event->hasResponse()) {
$response = $event->getResponse();
}
if (!$response instanceof Response) {
$msg = sprintf('The controller must return a response (%s given).', $this->varToString($response));
if (null === $response) {
$msg .=' Did you forget to add a return statement somewhere in your controller?';
}
throw new \LogicException($msg);
}
}
return $this->filterResponse($response, $request, $type);
}
private function filterResponse(Response $response, Request $request, $type)
{
$event = new FilterResponseEvent($this, $request, $type, $response);
$this->dispatcher->dispatch(KernelEvents::RESPONSE, $event);
$this->finishRequest($request, $type);
return $event->getResponse();
}
private function finishRequest(Request $request, $type)
{
$this->dispatcher->dispatch(KernelEvents::FINISH_REQUEST, new FinishRequestEvent($this, $request, $type));
$this->requestStack->pop();
}
private function handleException(\Exception $e, $request, $type)
{
$event = new GetResponseForExceptionEvent($this, $request, $type, $e);
$this->dispatcher->dispatch(KernelEvents::EXCEPTION, $event);
$e = $event->getException();
if (!$event->hasResponse()) {
$this->finishRequest($request, $type);
throw $e;
}
$response = $event->getResponse();
if ($response->headers->has('X-Status-Code')) {
$response->setStatusCode($response->headers->get('X-Status-Code'));
$response->headers->remove('X-Status-Code');
} elseif (!$response->isClientError() && !$response->isServerError() && !$response->isRedirect()) {
if ($e instanceof HttpExceptionInterface) {
$response->setStatusCode($e->getStatusCode());
$response->headers->add($e->getHeaders());
} else {
$response->setStatusCode(500);
}
}
try {
return $this->filterResponse($response, $request, $type);
} catch (\Exception $e) {
return $response;
}
}
private function varToString($var)
{
if (is_object($var)) {
return sprintf('Object(%s)', get_class($var));
}
if (is_array($var)) {
$a = array();
foreach ($var as $k => $v) {
$a[] = sprintf('%s => %s', $k, $this->varToString($v));
}
return sprintf('Array(%s)', implode(', ', $a));
}
if (is_resource($var)) {
return sprintf('Resource(%s)', get_resource_type($var));
}
if (null === $var) {
return'null';
}
if (false === $var) {
return'false';
}
if (true === $var) {
return'true';
}
return (string) $var;
}
}
}
namespace Symfony\Component\HttpKernel
{
final class KernelEvents
{
const REQUEST ='kernel.request';
const EXCEPTION ='kernel.exception';
const VIEW ='kernel.view';
const CONTROLLER ='kernel.controller';
const CONTROLLER_ARGUMENTS ='kernel.controller_arguments';
const RESPONSE ='kernel.response';
const TERMINATE ='kernel.terminate';
const FINISH_REQUEST ='kernel.finish_request';
}
}
namespace Symfony\Component\HttpKernel\Config
{
use Symfony\Component\Config\FileLocator as BaseFileLocator;
use Symfony\Component\HttpKernel\KernelInterface;
class FileLocator extends BaseFileLocator
{
private $kernel;
private $path;
public function __construct(KernelInterface $kernel, $path = null, array $paths = array())
{
$this->kernel = $kernel;
if (null !== $path) {
$this->path = $path;
$paths[] = $path;
}
parent::__construct($paths);
}
public function locate($file, $currentPath = null, $first = true)
{
if (isset($file[0]) &&'@'=== $file[0]) {
return $this->kernel->locateResource($file, $this->path, $first);
}
return parent::locate($file, $currentPath, $first);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Controller
{
use Symfony\Component\HttpKernel\KernelInterface;
class ControllerNameParser
{
protected $kernel;
public function __construct(KernelInterface $kernel)
{
$this->kernel = $kernel;
}
public function parse($controller)
{
$parts = explode(':', $controller);
if (3 !== count($parts) || in_array('', $parts, true)) {
throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "a:b:c" controller string.', $controller));
}
$originalController = $controller;
list($bundle, $controller, $action) = $parts;
$controller = str_replace('/','\\', $controller);
$bundles = array();
try {
$allBundles = $this->kernel->getBundle($bundle, false);
} catch (\InvalidArgumentException $e) {
$message = sprintf('The "%s" (from the _controller value "%s") does not exist or is not enabled in your kernel!',
$bundle,
$originalController
);
if ($alternative = $this->findAlternative($bundle)) {
$message .= sprintf(' Did you mean "%s:%s:%s"?', $alternative, $controller, $action);
}
throw new \InvalidArgumentException($message, 0, $e);
}
foreach ($allBundles as $b) {
$try = $b->getNamespace().'\\Controller\\'.$controller.'Controller';
if (class_exists($try)) {
return $try.'::'.$action.'Action';
}
$bundles[] = $b->getName();
$msg = sprintf('The _controller value "%s:%s:%s" maps to a "%s" class, but this class was not found. Create this class or check the spelling of the class and its namespace.', $bundle, $controller, $action, $try);
}
if (count($bundles) > 1) {
$msg = sprintf('Unable to find controller "%s:%s" in bundles %s.', $bundle, $controller, implode(', ', $bundles));
}
throw new \InvalidArgumentException($msg);
}
public function build($controller)
{
if (0 === preg_match('#^(.*?\\\\Controller\\\\(.+)Controller)::(.+)Action$#', $controller, $match)) {
throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "class::method" string.', $controller));
}
$className = $match[1];
$controllerName = $match[2];
$actionName = $match[3];
foreach ($this->kernel->getBundles() as $name => $bundle) {
if (0 !== strpos($className, $bundle->getNamespace())) {
continue;
}
return sprintf('%s:%s:%s', $name, $controllerName, $actionName);
}
throw new \InvalidArgumentException(sprintf('Unable to find a bundle that defines controller "%s".', $controller));
}
private function findAlternative($nonExistentBundleName)
{
$bundleNames = array_map(function ($b) {
return $b->getName();
}, $this->kernel->getBundles());
$alternative = null;
$shortest = null;
foreach ($bundleNames as $bundleName) {
if (false !== strpos($bundleName, $nonExistentBundleName)) {
return $bundleName;
}
$lev = levenshtein($nonExistentBundleName, $bundleName);
if ($lev <= strlen($nonExistentBundleName) / 3 && ($alternative === null || $lev < $shortest)) {
$alternative = $bundleName;
$shortest = $lev;
}
}
return $alternative;
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Controller
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolver as BaseControllerResolver;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
class ControllerResolver extends BaseControllerResolver
{
protected $container;
protected $parser;
public function __construct(ContainerInterface $container, ControllerNameParser $parser, LoggerInterface $logger = null)
{
$this->container = $container;
$this->parser = $parser;
parent::__construct($logger);
}
protected function createController($controller)
{
if (false === strpos($controller,'::')) {
$count = substr_count($controller,':');
if (2 == $count) {
$controller = $this->parser->parse($controller);
} elseif (1 == $count) {
list($service, $method) = explode(':', $controller, 2);
return array($this->container->get($service), $method);
} elseif ($this->container->has($controller) && method_exists($service = $this->container->get($controller),'__invoke')) {
return $service;
} else {
throw new \LogicException(sprintf('Unable to parse the controller name "%s".', $controller));
}
}
return parent::createController($controller);
}
protected function instantiateController($class)
{
if ($this->container->has($class)) {
return $this->container->get($class);
}
$controller = parent::instantiateController($class);
if ($controller instanceof ContainerAwareInterface) {
$controller->setContainer($this->container);
}
return $controller;
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\Request;
interface AccessMapInterface
{
public function getPatterns(Request $request);
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\RequestMatcherInterface;
use Symfony\Component\HttpFoundation\Request;
class AccessMap implements AccessMapInterface
{
private $map = array();
public function add(RequestMatcherInterface $requestMatcher, array $attributes = array(), $channel = null)
{
$this->map[] = array($requestMatcher, $attributes, $channel);
}
public function getPatterns(Request $request)
{
foreach ($this->map as $elements) {
if (null === $elements[0] || $elements[0]->matches($request)) {
return array($elements[1], $elements[2]);
}
}
return array(null, null);
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class Firewall implements EventSubscriberInterface
{
private $map;
private $dispatcher;
private $exceptionListeners;
public function __construct(FirewallMapInterface $map, EventDispatcherInterface $dispatcher)
{
$this->map = $map;
$this->dispatcher = $dispatcher;
$this->exceptionListeners = new \SplObjectStorage();
}
public function onKernelRequest(GetResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
list($listeners, $exceptionListener) = $this->map->getListeners($event->getRequest());
if (null !== $exceptionListener) {
$this->exceptionListeners[$event->getRequest()] = $exceptionListener;
$exceptionListener->register($this->dispatcher);
}
foreach ($listeners as $listener) {
$listener->handle($event);
if ($event->hasResponse()) {
break;
}
}
}
public function onKernelFinishRequest(FinishRequestEvent $event)
{
$request = $event->getRequest();
if (isset($this->exceptionListeners[$request])) {
$this->exceptionListeners[$request]->unregister($this->dispatcher);
unset($this->exceptionListeners[$request]);
}
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::REQUEST => array('onKernelRequest', 8),
KernelEvents::FINISH_REQUEST =>'onKernelFinishRequest',
);
}
}
}
namespace Symfony\Component\Security\Core\User
{
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
interface UserProviderInterface
{
public function loadUserByUsername($username);
public function refreshUser(UserInterface $user);
public function supportsClass($class);
}
}
namespace Symfony\Component\Security\Core\Authentication
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
interface AuthenticationManagerInterface
{
public function authenticate(TokenInterface $token);
}
}
namespace Symfony\Component\Security\Core\Authentication
{
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\ProviderNotFoundException;
use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class AuthenticationProviderManager implements AuthenticationManagerInterface
{
private $providers;
private $eraseCredentials;
private $eventDispatcher;
public function __construct(array $providers, $eraseCredentials = true)
{
if (!$providers) {
throw new \InvalidArgumentException('You must at least add one authentication provider.');
}
foreach ($providers as $provider) {
if (!$provider instanceof AuthenticationProviderInterface) {
throw new \InvalidArgumentException(sprintf('Provider "%s" must implement the AuthenticationProviderInterface.', get_class($provider)));
}
}
$this->providers = $providers;
$this->eraseCredentials = (bool) $eraseCredentials;
}
public function setEventDispatcher(EventDispatcherInterface $dispatcher)
{
$this->eventDispatcher = $dispatcher;
}
public function authenticate(TokenInterface $token)
{
$lastException = null;
$result = null;
foreach ($this->providers as $provider) {
if (!$provider->supports($token)) {
continue;
}
try {
$result = $provider->authenticate($token);
if (null !== $result) {
break;
}
} catch (AccountStatusException $e) {
$e->setToken($token);
throw $e;
} catch (AuthenticationException $e) {
$lastException = $e;
}
}
if (null !== $result) {
if (true === $this->eraseCredentials) {
$result->eraseCredentials();
}
if (null !== $this->eventDispatcher) {
$this->eventDispatcher->dispatch(AuthenticationEvents::AUTHENTICATION_SUCCESS, new AuthenticationEvent($result));
}
return $result;
}
if (null === $lastException) {
$lastException = new ProviderNotFoundException(sprintf('No Authentication Provider found for token of class "%s".', get_class($token)));
}
if (null !== $this->eventDispatcher) {
$this->eventDispatcher->dispatch(AuthenticationEvents::AUTHENTICATION_FAILURE, new AuthenticationFailureEvent($token, $lastException));
}
$lastException->setToken($token);
throw $lastException;
}
}
}
namespace Symfony\Component\Security\Core\Authentication\Token\Storage
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface TokenStorageInterface
{
public function getToken();
public function setToken(TokenInterface $token = null);
}
}
namespace Symfony\Component\Security\Core\Authentication\Token\Storage
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class TokenStorage implements TokenStorageInterface
{
private $token;
public function getToken()
{
return $this->token;
}
public function setToken(TokenInterface $token = null)
{
$this->token = $token;
}
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface AccessDecisionManagerInterface
{
public function decide(TokenInterface $token, array $attributes, $object = null);
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class AccessDecisionManager implements AccessDecisionManagerInterface
{
const STRATEGY_AFFIRMATIVE ='affirmative';
const STRATEGY_CONSENSUS ='consensus';
const STRATEGY_UNANIMOUS ='unanimous';
private $voters;
private $strategy;
private $allowIfAllAbstainDecisions;
private $allowIfEqualGrantedDeniedDecisions;
public function __construct(array $voters = array(), $strategy = self::STRATEGY_AFFIRMATIVE, $allowIfAllAbstainDecisions = false, $allowIfEqualGrantedDeniedDecisions = true)
{
$strategyMethod ='decide'.ucfirst($strategy);
if (!is_callable(array($this, $strategyMethod))) {
throw new \InvalidArgumentException(sprintf('The strategy "%s" is not supported.', $strategy));
}
$this->voters = $voters;
$this->strategy = $strategyMethod;
$this->allowIfAllAbstainDecisions = (bool) $allowIfAllAbstainDecisions;
$this->allowIfEqualGrantedDeniedDecisions = (bool) $allowIfEqualGrantedDeniedDecisions;
}
public function setVoters(array $voters)
{
$this->voters = $voters;
}
public function decide(TokenInterface $token, array $attributes, $object = null)
{
return $this->{$this->strategy}($token, $attributes, $object);
}
private function decideAffirmative(TokenInterface $token, array $attributes, $object = null)
{
$deny = 0;
foreach ($this->voters as $voter) {
$result = $voter->vote($token, $object, $attributes);
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
return true;
case VoterInterface::ACCESS_DENIED:
++$deny;
break;
default:
break;
}
}
if ($deny > 0) {
return false;
}
return $this->allowIfAllAbstainDecisions;
}
private function decideConsensus(TokenInterface $token, array $attributes, $object = null)
{
$grant = 0;
$deny = 0;
foreach ($this->voters as $voter) {
$result = $voter->vote($token, $object, $attributes);
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
++$grant;
break;
case VoterInterface::ACCESS_DENIED:
++$deny;
break;
}
}
if ($grant > $deny) {
return true;
}
if ($deny > $grant) {
return false;
}
if ($grant > 0) {
return $this->allowIfEqualGrantedDeniedDecisions;
}
return $this->allowIfAllAbstainDecisions;
}
private function decideUnanimous(TokenInterface $token, array $attributes, $object = null)
{
$grant = 0;
foreach ($attributes as $attribute) {
foreach ($this->voters as $voter) {
$result = $voter->vote($token, $object, array($attribute));
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
++$grant;
break;
case VoterInterface::ACCESS_DENIED:
return false;
default:
break;
}
}
}
if ($grant > 0) {
return true;
}
return $this->allowIfAllAbstainDecisions;
}
}
}
namespace Symfony\Component\Security\Core\Authorization
{
interface AuthorizationCheckerInterface
{
public function isGranted($attributes, $object = null);
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
class AuthorizationChecker implements AuthorizationCheckerInterface
{
private $tokenStorage;
private $accessDecisionManager;
private $authenticationManager;
private $alwaysAuthenticate;
public function __construct(TokenStorageInterface $tokenStorage, AuthenticationManagerInterface $authenticationManager, AccessDecisionManagerInterface $accessDecisionManager, $alwaysAuthenticate = false)
{
$this->tokenStorage = $tokenStorage;
$this->authenticationManager = $authenticationManager;
$this->accessDecisionManager = $accessDecisionManager;
$this->alwaysAuthenticate = $alwaysAuthenticate;
}
final public function isGranted($attributes, $object = null)
{
if (null === ($token = $this->tokenStorage->getToken())) {
throw new AuthenticationCredentialsNotFoundException('The token storage contains no authentication token. One possible reason may be that there is no firewall configured for this URL.');
}
if ($this->alwaysAuthenticate || !$token->isAuthenticated()) {
$this->tokenStorage->setToken($token = $this->authenticationManager->authenticate($token));
}
if (!is_array($attributes)) {
$attributes = array($attributes);
}
return $this->accessDecisionManager->decide($token, $attributes, $object);
}
}
}
namespace Symfony\Component\Security\Core\Authorization\Voter
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface VoterInterface
{
const ACCESS_GRANTED = 1;
const ACCESS_ABSTAIN = 0;
const ACCESS_DENIED = -1;
public function vote(TokenInterface $token, $subject, array $attributes);
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
final class FirewallConfig
{
private $name;
private $userChecker;
private $requestMatcher;
private $securityEnabled;
private $stateless;
private $provider;
private $context;
private $entryPoint;
private $accessDeniedHandler;
private $accessDeniedUrl;
private $listeners;
public function __construct($name, $userChecker, $requestMatcher = null, $securityEnabled = true, $stateless = false, $provider = null, $context = null, $entryPoint = null, $accessDeniedHandler = null, $accessDeniedUrl = null, $listeners = array())
{
$this->name = $name;
$this->userChecker = $userChecker;
$this->requestMatcher = $requestMatcher;
$this->securityEnabled = $securityEnabled;
$this->stateless = $stateless;
$this->provider = $provider;
$this->context = $context;
$this->entryPoint = $entryPoint;
$this->accessDeniedHandler = $accessDeniedHandler;
$this->accessDeniedUrl = $accessDeniedUrl;
$this->listeners = $listeners;
}
public function getName()
{
return $this->name;
}
public function getRequestMatcher()
{
return $this->requestMatcher;
}
public function isSecurityEnabled()
{
return $this->securityEnabled;
}
public function allowsAnonymous()
{
return in_array('anonymous', $this->listeners, true);
}
public function isStateless()
{
return $this->stateless;
}
public function getProvider()
{
return $this->provider;
}
public function getContext()
{
return $this->context;
}
public function getEntryPoint()
{
return $this->entryPoint;
}
public function getUserChecker()
{
return $this->userChecker;
}
public function getAccessDeniedHandler()
{
return $this->accessDeniedHandler;
}
public function getAccessDeniedUrl()
{
return $this->accessDeniedUrl;
}
public function getListeners()
{
return $this->listeners;
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\Request;
interface FirewallMapInterface
{
public function getListeners(Request $request);
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
use Symfony\Component\Security\Http\FirewallMapInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
class FirewallMap implements FirewallMapInterface
{
protected $container;
protected $map;
private $contexts;
public function __construct(ContainerInterface $container, array $map)
{
$this->container = $container;
$this->map = $map;
$this->contexts = new \SplObjectStorage();
}
public function getListeners(Request $request)
{
$context = $this->getFirewallContext($request);
if (null === $context) {
return array(array(), null);
}
return $context->getContext();
}
public function getFirewallConfig(Request $request)
{
$context = $this->getFirewallContext($request);
if (null === $context) {
return;
}
return $context->getConfig();
}
private function getFirewallContext(Request $request)
{
if ($this->contexts->contains($request)) {
return $this->contexts[$request];
}
foreach ($this->map as $contextId => $requestMatcher) {
if (null === $requestMatcher || $requestMatcher->matches($request)) {
return $this->contexts[$request] = $this->container->get($contextId);
}
}
}
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
use Symfony\Component\Security\Http\Firewall\ExceptionListener;
class FirewallContext
{
private $listeners;
private $exceptionListener;
private $config;
public function __construct(array $listeners, ExceptionListener $exceptionListener = null, FirewallConfig $config = null)
{
$this->listeners = $listeners;
$this->exceptionListener = $exceptionListener;
$this->config = $config;
}
public function getConfig()
{
return $this->config;
}
public function getContext()
{
return array($this->listeners, $this->exceptionListener);
}
}
}
namespace Symfony\Component\HttpFoundation
{
interface RequestMatcherInterface
{
public function matches(Request $request);
}
}
namespace Symfony\Component\HttpFoundation
{
class RequestMatcher implements RequestMatcherInterface
{
private $path;
private $host;
private $methods = array();
private $ips = array();
private $attributes = array();
private $schemes = array();
public function __construct($path = null, $host = null, $methods = null, $ips = null, array $attributes = array(), $schemes = null)
{
$this->matchPath($path);
$this->matchHost($host);
$this->matchMethod($methods);
$this->matchIps($ips);
$this->matchScheme($schemes);
foreach ($attributes as $k => $v) {
$this->matchAttribute($k, $v);
}
}
public function matchScheme($scheme)
{
$this->schemes = null !== $scheme ? array_map('strtolower', (array) $scheme) : array();
}
public function matchHost($regexp)
{
$this->host = $regexp;
}
public function matchPath($regexp)
{
$this->path = $regexp;
}
public function matchIp($ip)
{
$this->matchIps($ip);
}
public function matchIps($ips)
{
$this->ips = null !== $ips ? (array) $ips : array();
}
public function matchMethod($method)
{
$this->methods = null !== $method ? array_map('strtoupper', (array) $method) : array();
}
public function matchAttribute($key, $regexp)
{
$this->attributes[$key] = $regexp;
}
public function matches(Request $request)
{
if ($this->schemes && !in_array($request->getScheme(), $this->schemes, true)) {
return false;
}
if ($this->methods && !in_array($request->getMethod(), $this->methods, true)) {
return false;
}
foreach ($this->attributes as $key => $pattern) {
if (!preg_match('{'.$pattern.'}', $request->attributes->get($key))) {
return false;
}
}
if (null !== $this->path && !preg_match('{'.$this->path.'}', rawurldecode($request->getPathInfo()))) {
return false;
}
if (null !== $this->host && !preg_match('{'.$this->host.'}i', $request->getHost())) {
return false;
}
if (IpUtils::checkIp($request->getClientIp(), $this->ips)) {
return true;
}
return count($this->ips) === 0;
}
}
}
namespace
{
class Twig_Environment
{
const VERSION ='2.3.1';
const VERSION_ID = 20301;
const MAJOR_VERSION = 2;
const MINOR_VERSION = 3;
const RELEASE_VERSION = 1;
const EXTRA_VERSION ='';
private $charset;
private $loader;
private $debug;
private $autoReload;
private $cache;
private $lexer;
private $parser;
private $compiler;
private $baseTemplateClass;
private $globals = array();
private $resolvedGlobals;
private $loadedTemplates;
private $strictVariables;
private $templateClassPrefix ='__TwigTemplate_';
private $originalCache;
private $extensionSet;
private $runtimeLoaders = array();
private $runtimes = array();
private $optionsHash;
public function __construct(Twig_LoaderInterface $loader, $options = array())
{
$this->setLoader($loader);
$options = array_merge(array('debug'=> false,'charset'=>'UTF-8','base_template_class'=>'Twig_Template','strict_variables'=> false,'autoescape'=>'html','cache'=> false,'auto_reload'=> null,'optimizations'=> -1,
), $options);
$this->debug = (bool) $options['debug'];
$this->setCharset($options['charset']);
$this->baseTemplateClass = $options['base_template_class'];
$this->autoReload = null === $options['auto_reload'] ? $this->debug : (bool) $options['auto_reload'];
$this->strictVariables = (bool) $options['strict_variables'];
$this->setCache($options['cache']);
$this->extensionSet = new Twig_ExtensionSet();
$this->addExtension(new Twig_Extension_Core());
$this->addExtension(new Twig_Extension_Escaper($options['autoescape']));
$this->addExtension(new Twig_Extension_Optimizer($options['optimizations']));
}
public function getBaseTemplateClass()
{
return $this->baseTemplateClass;
}
public function setBaseTemplateClass($class)
{
$this->baseTemplateClass = $class;
$this->updateOptionsHash();
}
public function enableDebug()
{
$this->debug = true;
$this->updateOptionsHash();
}
public function disableDebug()
{
$this->debug = false;
$this->updateOptionsHash();
}
public function isDebug()
{
return $this->debug;
}
public function enableAutoReload()
{
$this->autoReload = true;
}
public function disableAutoReload()
{
$this->autoReload = false;
}
public function isAutoReload()
{
return $this->autoReload;
}
public function enableStrictVariables()
{
$this->strictVariables = true;
$this->updateOptionsHash();
}
public function disableStrictVariables()
{
$this->strictVariables = false;
$this->updateOptionsHash();
}
public function isStrictVariables()
{
return $this->strictVariables;
}
public function getCache($original = true)
{
return $original ? $this->originalCache : $this->cache;
}
public function setCache($cache)
{
if (is_string($cache)) {
$this->originalCache = $cache;
$this->cache = new Twig_Cache_Filesystem($cache);
} elseif (false === $cache) {
$this->originalCache = $cache;
$this->cache = new Twig_Cache_Null();
} elseif ($cache instanceof Twig_CacheInterface) {
$this->originalCache = $this->cache = $cache;
} else {
throw new LogicException(sprintf('Cache can only be a string, false, or a Twig_CacheInterface implementation.'));
}
}
public function getTemplateClass($name, $index = null)
{
$key = $this->getLoader()->getCacheKey($name).$this->optionsHash;
return $this->templateClassPrefix.hash('sha256', $key).(null === $index ?'':'_'.$index);
}
public function render($name, array $context = array())
{
return $this->loadTemplate($name)->render($context);
}
public function display($name, array $context = array())
{
$this->loadTemplate($name)->display($context);
}
public function load($name)
{
if ($name instanceof Twig_TemplateWrapper) {
return $name;
}
if ($name instanceof Twig_Template) {
return new Twig_TemplateWrapper($this, $name);
}
return new Twig_TemplateWrapper($this, $this->loadTemplate($name));
}
public function loadTemplate($name, $index = null)
{
$cls = $mainCls = $this->getTemplateClass($name);
if (null !== $index) {
$cls .='_'.$index;
}
if (isset($this->loadedTemplates[$cls])) {
return $this->loadedTemplates[$cls];
}
if (!class_exists($cls, false)) {
$key = $this->cache->generateKey($name, $mainCls);
if (!$this->isAutoReload() || $this->isTemplateFresh($name, $this->cache->getTimestamp($key))) {
$this->cache->load($key);
}
if (!class_exists($cls, false)) {
$source = $this->getLoader()->getSourceContext($name);
$content = $this->compileSource($source);
$this->cache->write($key, $content);
$this->cache->load($key);
if (!class_exists($mainCls, false)) {
eval('?>'.$content);
}
if (!class_exists($cls, false)) {
throw new Twig_Error_Runtime(sprintf('Failed to load Twig template "%s", index "%s": cache is corrupted.', $name, $index), -1, $source);
}
}
}
$this->extensionSet->initRuntime($this);
return $this->loadedTemplates[$cls] = new $cls($this);
}
public function createTemplate($template)
{
$name = sprintf('__string_template__%s', hash('sha256', uniqid(mt_rand(), true), false));
$loader = new Twig_Loader_Chain(array(
new Twig_Loader_Array(array($name => $template)),
$current = $this->getLoader(),
));
$this->setLoader($loader);
try {
$template = $this->loadTemplate($name);
} finally {
$this->setLoader($current);
}
return $template;
}
public function isTemplateFresh($name, $time)
{
return $this->extensionSet->getLastModified() <= $time && $this->getLoader()->isFresh($name, $time);
}
public function resolveTemplate($names)
{
if (!is_array($names)) {
$names = array($names);
}
foreach ($names as $name) {
if ($name instanceof Twig_Template) {
return $name;
}
try {
return $this->loadTemplate($name);
} catch (Twig_Error_Loader $e) {
}
}
if (1 === count($names)) {
throw $e;
}
throw new Twig_Error_Loader(sprintf('Unable to find one of the following templates: "%s".', implode('", "', $names)));
}
public function setLexer(Twig_Lexer $lexer)
{
$this->lexer = $lexer;
}
public function tokenize(Twig_Source $source)
{
if (null === $this->lexer) {
$this->lexer = new Twig_Lexer($this);
}
return $this->lexer->tokenize($source);
}
public function setParser(Twig_Parser $parser)
{
$this->parser = $parser;
}
public function parse(Twig_TokenStream $stream)
{
if (null === $this->parser) {
$this->parser = new Twig_Parser($this);
}
return $this->parser->parse($stream);
}
public function setCompiler(Twig_Compiler $compiler)
{
$this->compiler = $compiler;
}
public function compile(Twig_Node $node)
{
if (null === $this->compiler) {
$this->compiler = new Twig_Compiler($this);
}
return $this->compiler->compile($node)->getSource();
}
public function compileSource(Twig_Source $source)
{
try {
return $this->compile($this->parse($this->tokenize($source)));
} catch (Twig_Error $e) {
$e->setSourceContext($source);
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Syntax(sprintf('An exception has been thrown during the compilation of a template ("%s").', $e->getMessage()), -1, $source, $e);
}
}
public function setLoader(Twig_LoaderInterface $loader)
{
$this->loader = $loader;
}
public function getLoader()
{
return $this->loader;
}
public function setCharset($charset)
{
if ('UTF8'=== $charset = strtoupper($charset)) {
$charset ='UTF-8';
}
$this->charset = $charset;
}
public function getCharset()
{
return $this->charset;
}
public function hasExtension($class)
{
return $this->extensionSet->hasExtension($class);
}
public function addRuntimeLoader(Twig_RuntimeLoaderInterface $loader)
{
$this->runtimeLoaders[] = $loader;
}
public function getExtension($class)
{
return $this->extensionSet->getExtension($class);
}
public function getRuntime($class)
{
if (isset($this->runtimes[$class])) {
return $this->runtimes[$class];
}
foreach ($this->runtimeLoaders as $loader) {
if (null !== $runtime = $loader->load($class)) {
return $this->runtimes[$class] = $runtime;
}
}
throw new Twig_Error_Runtime(sprintf('Unable to load the "%s" runtime.', $class));
}
public function addExtension(Twig_ExtensionInterface $extension)
{
$this->extensionSet->addExtension($extension);
$this->updateOptionsHash();
}
public function setExtensions(array $extensions)
{
$this->extensionSet->setExtensions($extensions);
}
public function getExtensions()
{
return $this->extensionSet->getExtensions();
}
public function addTokenParser(Twig_TokenParserInterface $parser)
{
$this->extensionSet->addTokenParser($parser);
}
public function getTokenParsers()
{
return $this->extensionSet->getTokenParsers();
}
public function getTags()
{
$tags = array();
foreach ($this->getTokenParsers() as $parser) {
$tags[$parser->getTag()] = $parser;
}
return $tags;
}
public function addNodeVisitor(Twig_NodeVisitorInterface $visitor)
{
$this->extensionSet->addNodeVisitor($visitor);
}
public function getNodeVisitors()
{
return $this->extensionSet->getNodeVisitors();
}
public function addFilter(Twig_Filter $filter)
{
$this->extensionSet->addFilter($filter);
}
public function getFilter($name)
{
return $this->extensionSet->getFilter($name);
}
public function registerUndefinedFilterCallback(callable $callable)
{
$this->extensionSet->registerUndefinedFilterCallback($callable);
}
public function getFilters()
{
return $this->extensionSet->getFilters();
}
public function addTest(Twig_Test $test)
{
$this->extensionSet->addTest($test);
}
public function getTests()
{
return $this->extensionSet->getTests();
}
public function getTest($name)
{
return $this->extensionSet->getTest($name);
}
public function addFunction(Twig_Function $function)
{
$this->extensionSet->addFunction($function);
}
public function getFunction($name)
{
return $this->extensionSet->getFunction($name);
}
public function registerUndefinedFunctionCallback(callable $callable)
{
$this->extensionSet->registerUndefinedFunctionCallback($callable);
}
public function getFunctions()
{
return $this->extensionSet->getFunctions();
}
public function addGlobal($name, $value)
{
if ($this->extensionSet->isInitialized() && !array_key_exists($name, $this->getGlobals())) {
throw new LogicException(sprintf('Unable to add global "%s" as the runtime or the extensions have already been initialized.', $name));
}
if (null !== $this->resolvedGlobals) {
$this->resolvedGlobals[$name] = $value;
} else {
$this->globals[$name] = $value;
}
}
public function getGlobals()
{
if ($this->extensionSet->isInitialized()) {
if (null === $this->resolvedGlobals) {
$this->resolvedGlobals = array_merge($this->extensionSet->getGlobals(), $this->globals);
}
return $this->resolvedGlobals;
}
return array_merge($this->extensionSet->getGlobals(), $this->globals);
}
public function mergeGlobals(array $context)
{
foreach ($this->getGlobals() as $key => $value) {
if (!array_key_exists($key, $context)) {
$context[$key] = $value;
}
}
return $context;
}
public function getUnaryOperators()
{
return $this->extensionSet->getUnaryOperators();
}
public function getBinaryOperators()
{
return $this->extensionSet->getBinaryOperators();
}
private function updateOptionsHash()
{
$this->optionsHash = implode(':', array(
$this->extensionSet->getSignature(),
PHP_MAJOR_VERSION,
PHP_MINOR_VERSION,
self::VERSION,
(int) $this->debug,
$this->baseTemplateClass,
(int) $this->strictVariables,
));
}
}
}
namespace
{
interface Twig_ExtensionInterface
{
public function getTokenParsers();
public function getNodeVisitors();
public function getFilters();
public function getTests();
public function getFunctions();
public function getOperators();
}
}
namespace
{
abstract class Twig_Extension implements Twig_ExtensionInterface
{
public function getTokenParsers()
{
return array();
}
public function getNodeVisitors()
{
return array();
}
public function getFilters()
{
return array();
}
public function getTests()
{
return array();
}
public function getFunctions()
{
return array();
}
public function getOperators()
{
return array();
}
}
}
namespace
{
final class Twig_Extension_Core extends Twig_Extension
{
private $dateFormats = array('F j, Y H:i','%d days');
private $numberFormat = array(0,'.',',');
private $timezone = null;
private $escapers = array();
public function setEscaper($strategy, callable $callable)
{
$this->escapers[$strategy] = $callable;
}
public function getEscapers()
{
return $this->escapers;
}
public function setDateFormat($format = null, $dateIntervalFormat = null)
{
if (null !== $format) {
$this->dateFormats[0] = $format;
}
if (null !== $dateIntervalFormat) {
$this->dateFormats[1] = $dateIntervalFormat;
}
}
public function getDateFormat()
{
return $this->dateFormats;
}
public function setTimezone($timezone)
{
$this->timezone = $timezone instanceof DateTimeZone ? $timezone : new DateTimeZone($timezone);
}
public function getTimezone()
{
if (null === $this->timezone) {
$this->timezone = new DateTimeZone(date_default_timezone_get());
}
return $this->timezone;
}
public function setNumberFormat($decimal, $decimalPoint, $thousandSep)
{
$this->numberFormat = array($decimal, $decimalPoint, $thousandSep);
}
public function getNumberFormat()
{
return $this->numberFormat;
}
public function getTokenParsers()
{
return array(
new Twig_TokenParser_For(),
new Twig_TokenParser_If(),
new Twig_TokenParser_Extends(),
new Twig_TokenParser_Include(),
new Twig_TokenParser_Block(),
new Twig_TokenParser_Use(),
new Twig_TokenParser_Filter(),
new Twig_TokenParser_Macro(),
new Twig_TokenParser_Import(),
new Twig_TokenParser_From(),
new Twig_TokenParser_Set(),
new Twig_TokenParser_Spaceless(),
new Twig_TokenParser_Flush(),
new Twig_TokenParser_Do(),
new Twig_TokenParser_Embed(),
new Twig_TokenParser_With(),
);
}
public function getFilters()
{
return array(
new Twig_Filter('date','twig_date_format_filter', array('needs_environment'=> true)),
new Twig_Filter('date_modify','twig_date_modify_filter', array('needs_environment'=> true)),
new Twig_Filter('format','sprintf'),
new Twig_Filter('replace','twig_replace_filter'),
new Twig_Filter('number_format','twig_number_format_filter', array('needs_environment'=> true)),
new Twig_Filter('abs','abs'),
new Twig_Filter('round','twig_round'),
new Twig_Filter('url_encode','twig_urlencode_filter'),
new Twig_Filter('json_encode','json_encode'),
new Twig_Filter('convert_encoding','twig_convert_encoding'),
new Twig_Filter('title','twig_title_string_filter', array('needs_environment'=> true)),
new Twig_Filter('capitalize','twig_capitalize_string_filter', array('needs_environment'=> true)),
new Twig_Filter('upper','twig_upper_filter', array('needs_environment'=> true)),
new Twig_Filter('lower','twig_lower_filter', array('needs_environment'=> true)),
new Twig_Filter('striptags','strip_tags'),
new Twig_Filter('trim','twig_trim_filter'),
new Twig_Filter('nl2br','nl2br', array('pre_escape'=>'html','is_safe'=> array('html'))),
new Twig_Filter('join','twig_join_filter'),
new Twig_Filter('split','twig_split_filter', array('needs_environment'=> true)),
new Twig_Filter('sort','twig_sort_filter'),
new Twig_Filter('merge','twig_array_merge'),
new Twig_Filter('batch','twig_array_batch'),
new Twig_Filter('reverse','twig_reverse_filter', array('needs_environment'=> true)),
new Twig_Filter('length','twig_length_filter', array('needs_environment'=> true)),
new Twig_Filter('slice','twig_slice', array('needs_environment'=> true)),
new Twig_Filter('first','twig_first', array('needs_environment'=> true)),
new Twig_Filter('last','twig_last', array('needs_environment'=> true)),
new Twig_Filter('default','_twig_default_filter', array('node_class'=>'Twig_Node_Expression_Filter_Default')),
new Twig_Filter('keys','twig_get_array_keys_filter'),
new Twig_Filter('escape','twig_escape_filter', array('needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe')),
new Twig_Filter('e','twig_escape_filter', array('needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe')),
);
}
public function getFunctions()
{
return array(
new Twig_Function('max','max'),
new Twig_Function('min','min'),
new Twig_Function('range','range'),
new Twig_Function('constant','twig_constant'),
new Twig_Function('cycle','twig_cycle'),
new Twig_Function('random','twig_random', array('needs_environment'=> true)),
new Twig_Function('date','twig_date_converter', array('needs_environment'=> true)),
new Twig_Function('include','twig_include', array('needs_environment'=> true,'needs_context'=> true,'is_safe'=> array('all'))),
new Twig_Function('source','twig_source', array('needs_environment'=> true,'is_safe'=> array('all'))),
);
}
public function getTests()
{
return array(
new Twig_Test('even', null, array('node_class'=>'Twig_Node_Expression_Test_Even')),
new Twig_Test('odd', null, array('node_class'=>'Twig_Node_Expression_Test_Odd')),
new Twig_Test('defined', null, array('node_class'=>'Twig_Node_Expression_Test_Defined')),
new Twig_Test('same as', null, array('node_class'=>'Twig_Node_Expression_Test_Sameas')),
new Twig_Test('none', null, array('node_class'=>'Twig_Node_Expression_Test_Null')),
new Twig_Test('null', null, array('node_class'=>'Twig_Node_Expression_Test_Null')),
new Twig_Test('divisible by', null, array('node_class'=>'Twig_Node_Expression_Test_Divisibleby')),
new Twig_Test('constant', null, array('node_class'=>'Twig_Node_Expression_Test_Constant')),
new Twig_Test('empty','twig_test_empty'),
new Twig_Test('iterable','twig_test_iterable'),
);
}
public function getOperators()
{
return array(
array('not'=> array('precedence'=> 50,'class'=>'Twig_Node_Expression_Unary_Not'),'-'=> array('precedence'=> 500,'class'=>'Twig_Node_Expression_Unary_Neg'),'+'=> array('precedence'=> 500,'class'=>'Twig_Node_Expression_Unary_Pos'),
),
array('or'=> array('precedence'=> 10,'class'=>'Twig_Node_Expression_Binary_Or','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'and'=> array('precedence'=> 15,'class'=>'Twig_Node_Expression_Binary_And','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-or'=> array('precedence'=> 16,'class'=>'Twig_Node_Expression_Binary_BitwiseOr','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-xor'=> array('precedence'=> 17,'class'=>'Twig_Node_Expression_Binary_BitwiseXor','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-and'=> array('precedence'=> 18,'class'=>'Twig_Node_Expression_Binary_BitwiseAnd','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'=='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Equal','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'!='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_NotEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'<'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Less','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'>'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Greater','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'>='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_GreaterEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'<='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_LessEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'not in'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_NotIn','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'in'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_In','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'matches'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Matches','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'starts with'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_StartsWith','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'ends with'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_EndsWith','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'..'=> array('precedence'=> 25,'class'=>'Twig_Node_Expression_Binary_Range','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'+'=> array('precedence'=> 30,'class'=>'Twig_Node_Expression_Binary_Add','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'-'=> array('precedence'=> 30,'class'=>'Twig_Node_Expression_Binary_Sub','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'~'=> array('precedence'=> 40,'class'=>'Twig_Node_Expression_Binary_Concat','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'*'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Mul','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'/'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Div','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'//'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_FloorDiv','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'%'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Mod','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'is'=> array('precedence'=> 100,'associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'is not'=> array('precedence'=> 100,'associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'**'=> array('precedence'=> 200,'class'=>'Twig_Node_Expression_Binary_Power','associativity'=> Twig_ExpressionParser::OPERATOR_RIGHT),'??'=> array('precedence'=> 300,'class'=>'Twig_Node_Expression_NullCoalesce','associativity'=> Twig_ExpressionParser::OPERATOR_RIGHT),
),
);
}
}
function twig_cycle($values, $position)
{
if (!is_array($values) && !$values instanceof ArrayAccess) {
return $values;
}
return $values[$position % count($values)];
}
function twig_random(Twig_Environment $env, $values = null)
{
if (null === $values) {
return mt_rand();
}
if (is_int($values) || is_float($values)) {
return $values < 0 ? mt_rand($values, 0) : mt_rand(0, $values);
}
if ($values instanceof Traversable) {
$values = iterator_to_array($values);
} elseif (is_string($values)) {
if (''=== $values) {
return'';
}
$charset = $env->getCharset();
if ('UTF-8'!== $charset) {
$values = iconv($charset,'UTF-8', $values);
}
$values = preg_split('/(?<!^)(?!$)/u', $values);
if ('UTF-8'!== $charset) {
foreach ($values as $i => $value) {
$values[$i] = iconv('UTF-8', $charset, $value);
}
}
}
if (!is_array($values)) {
return $values;
}
if (0 === count($values)) {
throw new Twig_Error_Runtime('The random function cannot pick from an empty array.');
}
return $values[array_rand($values, 1)];
}
function twig_date_format_filter(Twig_Environment $env, $date, $format = null, $timezone = null)
{
if (null === $format) {
$formats = $env->getExtension('Twig_Extension_Core')->getDateFormat();
$format = $date instanceof DateInterval ? $formats[1] : $formats[0];
}
if ($date instanceof DateInterval) {
return $date->format($format);
}
return twig_date_converter($env, $date, $timezone)->format($format);
}
function twig_date_modify_filter(Twig_Environment $env, $date, $modifier)
{
$date = twig_date_converter($env, $date, false);
return $date->modify($modifier);
}
function twig_date_converter(Twig_Environment $env, $date = null, $timezone = null)
{
if (false !== $timezone) {
if (null === $timezone) {
$timezone = $env->getExtension('Twig_Extension_Core')->getTimezone();
} elseif (!$timezone instanceof DateTimeZone) {
$timezone = new DateTimeZone($timezone);
}
}
if ($date instanceof DateTimeImmutable) {
return false !== $timezone ? $date->setTimezone($timezone) : $date;
}
if ($date instanceof DateTimeInterface) {
$date = clone $date;
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
if (null === $date ||'now'=== $date) {
return new DateTime($date, false !== $timezone ? $timezone : $env->getExtension('Twig_Extension_Core')->getTimezone());
}
$asString = (string) $date;
if (ctype_digit($asString) || (!empty($asString) &&'-'=== $asString[0] && ctype_digit(substr($asString, 1)))) {
$date = new DateTime('@'.$date);
} else {
$date = new DateTime($date, $env->getExtension('Twig_Extension_Core')->getTimezone());
}
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
function twig_replace_filter($str, $from)
{
if ($from instanceof Traversable) {
$from = iterator_to_array($from);
} elseif (!is_array($from)) {
throw new Twig_Error_Runtime(sprintf('The "replace" filter expects an array or "Traversable" as replace values, got "%s".', is_object($from) ? get_class($from) : gettype($from)));
}
return strtr($str, $from);
}
function twig_round($value, $precision = 0, $method ='common')
{
if ('common'== $method) {
return round($value, $precision);
}
if ('ceil'!= $method &&'floor'!= $method) {
throw new Twig_Error_Runtime('The round filter only supports the "common", "ceil", and "floor" methods.');
}
return $method($value * pow(10, $precision)) / pow(10, $precision);
}
function twig_number_format_filter(Twig_Environment $env, $number, $decimal = null, $decimalPoint = null, $thousandSep = null)
{
$defaults = $env->getExtension('Twig_Extension_Core')->getNumberFormat();
if (null === $decimal) {
$decimal = $defaults[0];
}
if (null === $decimalPoint) {
$decimalPoint = $defaults[1];
}
if (null === $thousandSep) {
$thousandSep = $defaults[2];
}
return number_format((float) $number, $decimal, $decimalPoint, $thousandSep);
}
function twig_urlencode_filter($url)
{
if (is_array($url)) {
return http_build_query($url,'','&', PHP_QUERY_RFC3986);
}
return rawurlencode($url);
}
function twig_array_merge($arr1, $arr2)
{
if ($arr1 instanceof Traversable) {
$arr1 = iterator_to_array($arr1);
} elseif (!is_array($arr1)) {
throw new Twig_Error_Runtime(sprintf('The merge filter only works with arrays or "Traversable", got "%s" as first argument.', gettype($arr1)));
}
if ($arr2 instanceof Traversable) {
$arr2 = iterator_to_array($arr2);
} elseif (!is_array($arr2)) {
throw new Twig_Error_Runtime(sprintf('The merge filter only works with arrays or "Traversable", got "%s" as second argument.', gettype($arr2)));
}
return array_merge($arr1, $arr2);
}
function twig_slice(Twig_Environment $env, $item, $start, $length = null, $preserveKeys = false)
{
if ($item instanceof Traversable) {
while ($item instanceof IteratorAggregate) {
$item = $item->getIterator();
}
if ($start >= 0 && $length >= 0 && $item instanceof Iterator) {
try {
return iterator_to_array(new LimitIterator($item, $start, $length === null ? -1 : $length), $preserveKeys);
} catch (OutOfBoundsException $exception) {
return array();
}
}
$item = iterator_to_array($item, $preserveKeys);
}
if (is_array($item)) {
return array_slice($item, $start, $length, $preserveKeys);
}
$item = (string) $item;
return (string) mb_substr($item, $start, $length, $env->getCharset());
}
function twig_first(Twig_Environment $env, $item)
{
$elements = twig_slice($env, $item, 0, 1, false);
return is_string($elements) ? $elements : current($elements);
}
function twig_last(Twig_Environment $env, $item)
{
$elements = twig_slice($env, $item, -1, 1, false);
return is_string($elements) ? $elements : current($elements);
}
function twig_join_filter($value, $glue ='')
{
if ($value instanceof Traversable) {
$value = iterator_to_array($value, false);
}
return implode($glue, (array) $value);
}
function twig_split_filter(Twig_Environment $env, $value, $delimiter, $limit = null)
{
if (!empty($delimiter)) {
return null === $limit ? explode($delimiter, $value) : explode($delimiter, $value, $limit);
}
if ($limit <= 1) {
return preg_split('/(?<!^)(?!$)/u', $value);
}
$length = mb_strlen($value, $env->getCharset());
if ($length < $limit) {
return array($value);
}
$r = array();
for ($i = 0; $i < $length; $i += $limit) {
$r[] = mb_substr($value, $i, $limit, $env->getCharset());
}
return $r;
}
function _twig_default_filter($value, $default ='')
{
if (twig_test_empty($value)) {
return $default;
}
return $value;
}
function twig_get_array_keys_filter($array)
{
if ($array instanceof Traversable) {
while ($array instanceof IteratorAggregate) {
$array = $array->getIterator();
}
if ($array instanceof Iterator) {
$keys = array();
$array->rewind();
while ($array->valid()) {
$keys[] = $array->key();
$array->next();
}
return $keys;
}
$keys = array();
foreach ($array as $key => $item) {
$keys[] = $key;
}
return $keys;
}
if (!is_array($array)) {
return array();
}
return array_keys($array);
}
function twig_reverse_filter(Twig_Environment $env, $item, $preserveKeys = false)
{
if ($item instanceof Traversable) {
return array_reverse(iterator_to_array($item), $preserveKeys);
}
if (is_array($item)) {
return array_reverse($item, $preserveKeys);
}
$string = (string) $item;
$charset = $env->getCharset();
if ('UTF-8'!== $charset) {
$item = iconv($charset,'UTF-8', $string);
}
preg_match_all('/./us', $item, $matches);
$string = implode('', array_reverse($matches[0]));
if ('UTF-8'!== $charset) {
$string = iconv('UTF-8', $charset, $string);
}
return $string;
}
function twig_sort_filter($array)
{
if ($array instanceof Traversable) {
$array = iterator_to_array($array);
} elseif (!is_array($array)) {
throw new Twig_Error_Runtime(sprintf('The sort filter only works with arrays or "Traversable", got "%s".', gettype($array)));
}
asort($array);
return $array;
}
function twig_in_filter($value, $compare)
{
if (is_array($compare)) {
return in_array($value, $compare, is_object($value) || is_resource($value));
} elseif (is_string($compare) && (is_string($value) || is_int($value) || is_float($value))) {
return''=== $value || false !== strpos($compare, (string) $value);
} elseif ($compare instanceof Traversable) {
if (is_object($value) || is_resource($value)) {
foreach ($compare as $item) {
if ($item === $value) {
return true;
}
}
} else {
foreach ($compare as $item) {
if ($item == $value) {
return true;
}
}
}
return false;
}
return false;
}
function twig_trim_filter($string, $characterMask = null, $side ='both')
{
if (null === $characterMask) {
$characterMask =" \t\n\r\0\x0B";
}
switch ($side) {
case'both':
return trim($string, $characterMask);
case'left':
return ltrim($string, $characterMask);
case'right':
return rtrim($string, $characterMask);
default:
throw new Twig_Error_Runtime('Trimming side must be "left", "right" or "both".');
}
}
function twig_escape_filter(Twig_Environment $env, $string, $strategy ='html', $charset = null, $autoescape = false)
{
if ($autoescape && $string instanceof Twig_Markup) {
return $string;
}
if (!is_string($string)) {
if (is_object($string) && method_exists($string,'__toString')) {
$string = (string) $string;
} elseif (in_array($strategy, array('html','js','css','html_attr','url'))) {
return $string;
}
}
if (null === $charset) {
$charset = $env->getCharset();
}
switch ($strategy) {
case'html':
static $htmlspecialcharsCharsets;
if (null === $htmlspecialcharsCharsets) {
if (defined('HHVM_VERSION')) {
$htmlspecialcharsCharsets = array('utf-8'=> true,'UTF-8'=> true);
} else {
$htmlspecialcharsCharsets = array('ISO-8859-1'=> true,'ISO8859-1'=> true,'ISO-8859-15'=> true,'ISO8859-15'=> true,'utf-8'=> true,'UTF-8'=> true,'CP866'=> true,'IBM866'=> true,'866'=> true,'CP1251'=> true,'WINDOWS-1251'=> true,'WIN-1251'=> true,'1251'=> true,'CP1252'=> true,'WINDOWS-1252'=> true,'1252'=> true,'KOI8-R'=> true,'KOI8-RU'=> true,'KOI8R'=> true,'BIG5'=> true,'950'=> true,'GB2312'=> true,'936'=> true,'BIG5-HKSCS'=> true,'SHIFT_JIS'=> true,'SJIS'=> true,'932'=> true,'EUC-JP'=> true,'EUCJP'=> true,'ISO8859-5'=> true,'ISO-8859-5'=> true,'MACROMAN'=> true,
);
}
}
if (isset($htmlspecialcharsCharsets[$charset])) {
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
if (isset($htmlspecialcharsCharsets[strtoupper($charset)])) {
$htmlspecialcharsCharsets[$charset] = true;
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
$string = iconv($charset,'UTF-8', $string);
$string = htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE,'UTF-8');
return iconv('UTF-8', $charset, $string);
case'js':
if ('UTF-8'!== $charset) {
$string = iconv($charset,'UTF-8', $string);
}
if (0 == strlen($string) ? false : 1 !== preg_match('/^./su', $string)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\._]#Su', function ($matches) {
$char = $matches[0];
if (!isset($char[1])) {
return'\\x'.strtoupper(substr('00'.bin2hex($char), -2));
}
$char = twig_convert_encoding($char,'UTF-16BE','UTF-8');
$char = strtoupper(bin2hex($char));
if (4 >= strlen($char)) {
return sprintf('\u%04s', $char);
}
return sprintf('\u%04s\u%04s', substr($char, 0, -4), substr($char, -4));
}, $string);
if ('UTF-8'!== $charset) {
$string = iconv('UTF-8', $charset, $string);
}
return $string;
case'css':
if ('UTF-8'!== $charset) {
$string = iconv($charset,'UTF-8', $string);
}
if (0 == strlen($string) ? false : 1 !== preg_match('/^./su', $string)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9]#Su', function ($matches) {
$char = $matches[0];
if (!isset($char[1])) {
$hex = ltrim(strtoupper(bin2hex($char)),'0');
if (0 === strlen($hex)) {
$hex ='0';
}
return'\\'.$hex.' ';
}
$char = twig_convert_encoding($char,'UTF-16BE','UTF-8');
return'\\'.ltrim(strtoupper(bin2hex($char)),'0').' ';
}, $string);
if ('UTF-8'!== $charset) {
$string = iconv('UTF-8', $charset, $string);
}
return $string;
case'html_attr':
if ('UTF-8'!== $charset) {
$string = iconv($charset,'UTF-8', $string);
}
if (0 == strlen($string) ? false : 1 !== preg_match('/^./su', $string)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\.\-_]#Su', function ($matches) {
static $entityMap = array(
34 =>'quot',
38 =>'amp',
60 =>'lt',
62 =>'gt',
);
$chr = $matches[0];
$ord = ord($chr);
if (($ord <= 0x1f && $chr !="\t"&& $chr !="\n"&& $chr !="\r") || ($ord >= 0x7f && $ord <= 0x9f)) {
return'&#xFFFD;';
}
if (strlen($chr) == 1) {
$hex = strtoupper(substr('00'.bin2hex($chr), -2));
} else {
$chr = twig_convert_encoding($chr,'UTF-16BE','UTF-8');
$hex = strtoupper(substr('0000'.bin2hex($chr), -4));
}
$int = hexdec($hex);
if (array_key_exists($int, $entityMap)) {
return sprintf('&%s;', $entityMap[$int]);
}
return sprintf('&#x%s;', $hex);
}, $string);
if ('UTF-8'!== $charset) {
$string = iconv('UTF-8', $charset, $string);
}
return $string;
case'url':
return rawurlencode($string);
default:
static $escapers;
if (null === $escapers) {
$escapers = $env->getExtension('Twig_Extension_Core')->getEscapers();
}
if (isset($escapers[$strategy])) {
return $escapers[$strategy]($env, $string, $charset);
}
$validStrategies = implode(', ', array_merge(array('html','js','url','css','html_attr'), array_keys($escapers)));
throw new Twig_Error_Runtime(sprintf('Invalid escaping strategy "%s" (valid ones: %s).', $strategy, $validStrategies));
}
}
function twig_escape_filter_is_safe(Twig_Node $filterArgs)
{
foreach ($filterArgs as $arg) {
if ($arg instanceof Twig_Node_Expression_Constant) {
return array($arg->getAttribute('value'));
}
return array();
}
return array('html');
}
function twig_convert_encoding($string, $to, $from)
{
return iconv($from, $to, $string);
}
function twig_length_filter(Twig_Environment $env, $thing)
{
if (is_scalar($thing)) {
return mb_strlen($thing, $env->getCharset());
}
if (method_exists($thing,'__toString') && !$thing instanceof \Countable) {
return mb_strlen((string) $thing, $env->getCharset());
}
return count($thing);
}
function twig_upper_filter(Twig_Environment $env, $string)
{
return mb_strtoupper($string, $env->getCharset());
}
function twig_lower_filter(Twig_Environment $env, $string)
{
return mb_strtolower($string, $env->getCharset());
}
function twig_title_string_filter(Twig_Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_convert_case($string, MB_CASE_TITLE, $charset);
}
return ucwords(strtolower($string));
}
function twig_capitalize_string_filter(Twig_Environment $env, $string)
{
$charset = $env->getCharset();
return mb_strtoupper(mb_substr($string, 0, 1, $charset), $charset).mb_strtolower(mb_substr($string, 1, null, $charset), $charset);
}
function twig_ensure_traversable($seq)
{
if ($seq instanceof Traversable || is_array($seq)) {
return $seq;
}
return array();
}
function twig_test_empty($value)
{
if ($value instanceof Countable) {
return 0 == count($value);
}
if (is_object($value) && method_exists($value,'__toString')) {
return''=== (string) $value;
}
return''=== $value || false === $value || null === $value || array() === $value;
}
function twig_test_iterable($value)
{
return $value instanceof Traversable || is_array($value);
}
function twig_include(Twig_Environment $env, $context, $template, $variables = array(), $withContext = true, $ignoreMissing = false, $sandboxed = false)
{
$alreadySandboxed = false;
$sandbox = null;
if ($withContext) {
$variables = array_merge($context, $variables);
}
if ($isSandboxed = $sandboxed && $env->hasExtension('Twig_Extension_Sandbox')) {
$sandbox = $env->getExtension('Twig_Extension_Sandbox');
if (!$alreadySandboxed = $sandbox->isSandboxed()) {
$sandbox->enableSandbox();
}
}
$result = null;
try {
$result = $env->resolveTemplate($template)->render($variables);
} catch (Twig_Error_Loader $e) {
if (!$ignoreMissing) {
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
throw $e;
}
} catch (Throwable $e) {
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
throw $e;
}
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
return $result;
}
function twig_source(Twig_Environment $env, $name, $ignoreMissing = false)
{
$loader = $env->getLoader();
try {
return $loader->getSourceContext($name)->getCode();
} catch (Twig_Error_Loader $e) {
if (!$ignoreMissing) {
throw $e;
}
}
}
function twig_constant($constant, $object = null)
{
if (null !== $object) {
$constant = get_class($object).'::'.$constant;
}
return constant($constant);
}
function twig_constant_is_defined($constant, $object = null)
{
if (null !== $object) {
$constant = get_class($object).'::'.$constant;
}
return defined($constant);
}
function twig_array_batch($items, $size, $fill = null)
{
if ($items instanceof Traversable) {
$items = iterator_to_array($items, false);
}
$size = ceil($size);
$result = array_chunk($items, $size, true);
if (null !== $fill && !empty($result)) {
$last = count($result) - 1;
if ($fillCount = $size - count($result[$last])) {
$result[$last] = array_merge(
$result[$last],
array_fill(0, $fillCount, $fill)
);
}
}
return $result;
}
function twig_get_attribute(Twig_Environment $env, Twig_Source $source, $object, $item, array $arguments = array(), $type = Twig_Template::ANY_CALL, $isDefinedTest = false, $ignoreStrictCheck = false)
{
static $cache = array();
if (Twig_Template::METHOD_CALL !== $type) {
$arrayItem = is_bool($item) || is_float($item) ? (int) $item : $item;
if ((is_array($object) && (isset($object[$arrayItem]) || array_key_exists($arrayItem, $object)))
|| ($object instanceof ArrayAccess && isset($object[$arrayItem]))
) {
if ($isDefinedTest) {
return true;
}
return $object[$arrayItem];
}
if (Twig_Template::ARRAY_CALL === $type || !is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$env->isStrictVariables()) {
return;
}
if ($object instanceof ArrayAccess) {
$message = sprintf('Key "%s" in object with ArrayAccess of class "%s" does not exist.', $arrayItem, get_class($object));
} elseif (is_object($object)) {
$message = sprintf('Impossible to access a key "%s" on an object of class "%s" that does not implement ArrayAccess interface.', $item, get_class($object));
} elseif (is_array($object)) {
if (empty($object)) {
$message = sprintf('Key "%s" does not exist as the array is empty.', $arrayItem);
} else {
$message = sprintf('Key "%s" for array with keys "%s" does not exist.', $arrayItem, implode(', ', array_keys($object)));
}
} elseif (Twig_Template::ARRAY_CALL === $type) {
if (null === $object) {
$message = sprintf('Impossible to access a key ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to access a key ("%s") on a %s variable ("%s").', $item, gettype($object), $object);
}
} elseif (null === $object) {
$message = sprintf('Impossible to access an attribute ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to access an attribute ("%s") on a %s variable ("%s").', $item, gettype($object), $object);
}
throw new Twig_Error_Runtime($message, -1, $source);
}
}
if (!is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$env->isStrictVariables()) {
return;
}
if (null === $object) {
$message = sprintf('Impossible to invoke a method ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to invoke a method ("%s") on a %s variable ("%s").', $item, gettype($object), $object);
}
throw new Twig_Error_Runtime($message, -1, $source);
}
if ($object instanceof Twig_Template) {
throw new Twig_Error_Runtime('Accessing Twig_Template attributes is forbidden.');
}
if (Twig_Template::METHOD_CALL !== $type) {
if (isset($object->$item) || array_key_exists((string) $item, $object)) {
if ($isDefinedTest) {
return true;
}
if ($env->hasExtension('Twig_Extension_Sandbox')) {
$env->getExtension('Twig_Extension_Sandbox')->checkPropertyAllowed($object, $item);
}
return $object->$item;
}
}
$class = get_class($object);
if (!isset($cache[$class])) {
$methods = get_class_methods($object);
sort($methods);
$lcMethods = array_map('strtolower', $methods);
$classCache = array();
foreach ($methods as $i => $method) {
$classCache[$method] = $method;
$classCache[$lcName = $lcMethods[$i]] = $method;
if ('g'=== $lcName[0] && 0 === strpos($lcName,'get')) {
$name = substr($method, 3);
$lcName = substr($lcName, 3);
} elseif ('i'=== $lcName[0] && 0 === strpos($lcName,'is')) {
$name = substr($method, 2);
$lcName = substr($lcName, 2);
} elseif ('h'=== $lcName[0] && 0 === strpos($lcName,'has')) {
$name = substr($method, 3);
$lcName = substr($lcName, 3);
if (in_array('is'.$lcName, $lcMethods)) {
continue;
}
} else {
continue;
}
if (!isset($classCache[$name])) {
$classCache[$name] = $method;
}
if (!isset($classCache[$lcName])) {
$classCache[$lcName] = $method;
}
}
$cache[$class] = $classCache;
}
$call = false;
if (isset($cache[$class][$item])) {
$method = $cache[$class][$item];
} elseif (isset($cache[$class][$lcItem = strtolower($item)])) {
$method = $cache[$class][$lcItem];
} elseif (isset($cache[$class]['__call'])) {
$method = $item;
$call = true;
} else {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$env->isStrictVariables()) {
return;
}
throw new Twig_Error_Runtime(sprintf('Neither the property "%1$s" nor one of the methods "%1$s()", "get%1$s()"/"is%1$s()"/"has%1$s()" or "__call()" exist and have public access in class "%2$s".', $item, $class), -1, $source);
}
if ($isDefinedTest) {
return true;
}
if ($env->hasExtension('Twig_Extension_Sandbox')) {
$env->getExtension('Twig_Extension_Sandbox')->checkMethodAllowed($object, $method);
}
try {
$ret = $object->$method(...$arguments);
} catch (BadMethodCallException $e) {
if ($call && ($ignoreStrictCheck || !$env->isStrictVariables())) {
return;
}
throw $e;
}
return $ret;
}
}
namespace
{
final class Twig_Extension_Escaper extends Twig_Extension
{
private $defaultStrategy;
public function __construct($defaultStrategy ='html')
{
$this->setDefaultStrategy($defaultStrategy);
}
public function getTokenParsers()
{
return array(new Twig_TokenParser_AutoEscape());
}
public function getNodeVisitors()
{
return array(new Twig_NodeVisitor_Escaper());
}
public function getFilters()
{
return array(
new Twig_Filter('raw','twig_raw_filter', array('is_safe'=> array('all'))),
);
}
public function setDefaultStrategy($defaultStrategy)
{
if ('name'=== $defaultStrategy) {
$defaultStrategy = array('Twig_FileExtensionEscapingStrategy','guess');
}
$this->defaultStrategy = $defaultStrategy;
}
public function getDefaultStrategy($name)
{
if (!is_string($this->defaultStrategy) && false !== $this->defaultStrategy) {
return call_user_func($this->defaultStrategy, $name);
}
return $this->defaultStrategy;
}
}
function twig_raw_filter($string)
{
return $string;
}
}
namespace
{
final class Twig_Extension_Optimizer extends Twig_Extension
{
private $optimizers;
public function __construct($optimizers = -1)
{
$this->optimizers = $optimizers;
}
public function getNodeVisitors()
{
return array(new Twig_NodeVisitor_Optimizer($this->optimizers));
}
}
}
namespace
{
interface Twig_LoaderInterface
{
public function getSourceContext($name);
public function getCacheKey($name);
public function isFresh($name, $time);
public function exists($name);
}
}
namespace
{
class Twig_Markup implements Countable, JsonSerializable
{
private $content;
private $charset;
public function __construct($content, $charset)
{
$this->content = (string) $content;
$this->charset = $charset;
}
public function __toString()
{
return $this->content;
}
public function count()
{
return mb_strlen($this->content, $this->charset);
}
public function jsonSerialize()
{
return $this->content;
}
}
}
namespace
{
abstract class Twig_Template
{
const ANY_CALL ='any';
const ARRAY_CALL ='array';
const METHOD_CALL ='method';
protected static $cache = array();
protected $parent;
protected $parents = array();
protected $env;
protected $blocks = array();
protected $traits = array();
public function __construct(Twig_Environment $env)
{
$this->env = $env;
}
public function __toString()
{
return $this->getTemplateName();
}
abstract public function getTemplateName();
abstract public function getDebugInfo();
public function getSourceContext()
{
return new Twig_Source('', $this->getTemplateName());
}
public function getParent(array $context)
{
if (null !== $this->parent) {
return $this->parent;
}
try {
$parent = $this->doGetParent($context);
if (false === $parent) {
return false;
}
if ($parent instanceof self) {
return $this->parents[$parent->getTemplateName()] = $parent;
}
if (!isset($this->parents[$parent])) {
$this->parents[$parent] = $this->loadTemplate($parent);
}
} catch (Twig_Error_Loader $e) {
$e->setSourceContext(null);
$e->guess();
throw $e;
}
return $this->parents[$parent];
}
protected function doGetParent(array $context)
{
return false;
}
public function isTraitable()
{
return true;
}
public function displayParentBlock($name, array $context, array $blocks = array())
{
if (isset($this->traits[$name])) {
$this->traits[$name][0]->displayBlock($name, $context, $blocks, false);
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, $blocks, false);
} else {
throw new Twig_Error_Runtime(sprintf('The template has no parent and no traits defining the "%s" block.', $name), -1, $this->getSourceContext());
}
}
public function displayBlock($name, array $context, array $blocks = array(), $useBlocks = true)
{
if ($useBlocks && isset($blocks[$name])) {
$template = $blocks[$name][0];
$block = $blocks[$name][1];
} elseif (isset($this->blocks[$name])) {
$template = $this->blocks[$name][0];
$block = $this->blocks[$name][1];
} else {
$template = null;
$block = null;
}
if (null !== $template && !$template instanceof self) {
throw new LogicException('A block must be a method on a Twig_Template instance.');
}
if (null !== $template) {
try {
$template->$block($context, $blocks);
} catch (Twig_Error $e) {
if (!$e->getSourceContext()) {
$e->setSourceContext($template->getSourceContext());
}
if (false === $e->getTemplateLine()) {
$e->setTemplateLine(-1);
$e->guess();
}
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Runtime(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $template->getSourceContext(), $e);
}
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, array_merge($this->blocks, $blocks), false);
} elseif (isset($blocks[$name])) {
throw new Twig_Error_Runtime(sprintf('Block "%s" should not call parent() in "%s" as the block does not exist in the parent template "%s".', $name, $blocks[$name][0]->getTemplateName(), $this->getTemplateName()), -1, $blocks[$name][0]->getTemplateName());
} else {
throw new Twig_Error_Runtime(sprintf('Block "%s" on template "%s" does not exist.', $name, $this->getTemplateName()), -1, $this->getTemplateName());
}
}
public function renderParentBlock($name, array $context, array $blocks = array())
{
ob_start();
$this->displayParentBlock($name, $context, $blocks);
return ob_get_clean();
}
public function renderBlock($name, array $context, array $blocks = array(), $useBlocks = true)
{
ob_start();
$this->displayBlock($name, $context, $blocks, $useBlocks);
return ob_get_clean();
}
public function hasBlock($name, array $context, array $blocks = array())
{
if (isset($blocks[$name])) {
return $blocks[$name][0] instanceof self;
}
if (isset($this->blocks[$name])) {
return true;
}
if (false !== $parent = $this->getParent($context)) {
return $parent->hasBlock($name, $context);
}
return false;
}
public function getBlockNames(array $context, array $blocks = array())
{
$names = array_merge(array_keys($blocks), array_keys($this->blocks));
if (false !== $parent = $this->getParent($context)) {
$names = array_merge($names, $parent->getBlockNames($context));
}
return array_unique($names);
}
protected function loadTemplate($template, $templateName = null, $line = null, $index = null)
{
try {
if (is_array($template)) {
return $this->env->resolveTemplate($template);
}
if ($template instanceof self) {
return $template;
}
if ($template instanceof Twig_TemplateWrapper) {
return $template;
}
return $this->env->loadTemplate($template, $index);
} catch (Twig_Error $e) {
if (!$e->getSourceContext()) {
$e->setSourceContext($templateName ? new Twig_Source('', $templateName) : $this->getSourceContext());
}
if ($e->getTemplateLine()) {
throw $e;
}
if (!$line) {
$e->guess();
} else {
$e->setTemplateLine($line);
}
throw $e;
}
}
public function getBlocks()
{
return $this->blocks;
}
public function display(array $context, array $blocks = array())
{
$this->displayWithErrorHandling($this->env->mergeGlobals($context), array_merge($this->blocks, $blocks));
}
public function render(array $context)
{
$level = ob_get_level();
ob_start();
try {
$this->display($context);
} catch (Throwable $e) {
while (ob_get_level() > $level) {
ob_end_clean();
}
throw $e;
}
return ob_get_clean();
}
protected function displayWithErrorHandling(array $context, array $blocks = array())
{
try {
$this->doDisplay($context, $blocks);
} catch (Twig_Error $e) {
if (!$e->getSourceContext()) {
$e->setSourceContext($this->getSourceContext());
}
if (false === $e->getTemplateLine()) {
$e->setTemplateLine(-1);
$e->guess();
}
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Runtime(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $this->getSourceContext(), $e);
}
}
abstract protected function doDisplay(array $context, array $blocks = array());
}
}
namespace Assetic
{
interface ValueSupplierInterface
{
public function getValues();
}
}
namespace Symfony\Bundle\AsseticBundle
{
use Assetic\ValueSupplierInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
class DefaultValueSupplier implements ValueSupplierInterface
{
protected $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function getValues()
{
$request = $this->getCurrentRequest();
if (!$request) {
return array();
}
return array('locale'=> $request->getLocale(),'env'=> $this->container->getParameter('kernel.environment'),
);
}
private function getCurrentRequest()
{
$request = null;
$requestStack = $this->container->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE);
if ($requestStack) {
$request = $requestStack->getCurrentRequest();
} elseif ($this->container->isScopeActive('request')) {
$request = $this->container->get('request');
}
return $request;
}
}
}
namespace Assetic\Factory
{
use Assetic\Asset\AssetCollection;
use Assetic\Asset\AssetCollectionInterface;
use Assetic\Asset\AssetInterface;
use Assetic\Asset\AssetReference;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;
use Assetic\Asset\HttpAsset;
use Assetic\AssetManager;
use Assetic\Factory\Worker\WorkerInterface;
use Assetic\Filter\DependencyExtractorInterface;
use Assetic\FilterManager;
class AssetFactory
{
private $root;
private $debug;
private $output;
private $workers;
private $am;
private $fm;
public function __construct($root, $debug = false)
{
$this->root = rtrim($root,'/');
$this->debug = $debug;
$this->output ='assetic/*';
$this->workers = array();
}
public function setDebug($debug)
{
$this->debug = $debug;
}
public function isDebug()
{
return $this->debug;
}
public function setDefaultOutput($output)
{
$this->output = $output;
}
public function addWorker(WorkerInterface $worker)
{
$this->workers[] = $worker;
}
public function getAssetManager()
{
return $this->am;
}
public function setAssetManager(AssetManager $am)
{
$this->am = $am;
}
public function getFilterManager()
{
return $this->fm;
}
public function setFilterManager(FilterManager $fm)
{
$this->fm = $fm;
}
public function createAsset($inputs = array(), $filters = array(), array $options = array())
{
if (!is_array($inputs)) {
$inputs = array($inputs);
}
if (!is_array($filters)) {
$filters = array($filters);
}
if (!isset($options['output'])) {
$options['output'] = $this->output;
}
if (!isset($options['vars'])) {
$options['vars'] = array();
}
if (!isset($options['debug'])) {
$options['debug'] = $this->debug;
}
if (!isset($options['root'])) {
$options['root'] = array($this->root);
} else {
if (!is_array($options['root'])) {
$options['root'] = array($options['root']);
}
$options['root'][] = $this->root;
}
if (!isset($options['name'])) {
$options['name'] = $this->generateAssetName($inputs, $filters, $options);
}
$asset = $this->createAssetCollection(array(), $options);
$extensions = array();
foreach ($inputs as $input) {
if (is_array($input)) {
$asset->add(call_user_func_array(array($this,'createAsset'), $input));
} else {
$asset->add($this->parseInput($input, $options));
$extensions[pathinfo($input, PATHINFO_EXTENSION)] = true;
}
}
foreach ($filters as $filter) {
if ('?'!= $filter[0]) {
$asset->ensureFilter($this->getFilter($filter));
} elseif (!$options['debug']) {
$asset->ensureFilter($this->getFilter(substr($filter, 1)));
}
}
if (!empty($options['vars'])) {
$toAdd = array();
foreach ($options['vars'] as $var) {
if (false !== strpos($options['output'],'{'.$var.'}')) {
continue;
}
$toAdd[] ='{'.$var.'}';
}
if ($toAdd) {
$options['output'] = str_replace('*','*.'.implode('.', $toAdd), $options['output']);
}
}
if (1 == count($extensions) && !pathinfo($options['output'], PATHINFO_EXTENSION) && $extension = key($extensions)) {
$options['output'] .='.'.$extension;
}
$asset->setTargetPath(str_replace('*', $options['name'], $options['output']));
return $this->applyWorkers($asset);
}
public function generateAssetName($inputs, $filters, $options = array())
{
foreach (array_diff(array_keys($options), array('output','debug','root')) as $key) {
unset($options[$key]);
}
ksort($options);
return substr(sha1(serialize($inputs).serialize($filters).serialize($options)), 0, 7);
}
public function getLastModified(AssetInterface $asset)
{
$mtime = 0;
foreach ($asset instanceof AssetCollectionInterface ? $asset : array($asset) as $leaf) {
$mtime = max($mtime, $leaf->getLastModified());
if (!$filters = $leaf->getFilters()) {
continue;
}
$prevFilters = array();
foreach ($filters as $filter) {
$prevFilters[] = $filter;
if (!$filter instanceof DependencyExtractorInterface) {
continue;
}
$clone = clone $leaf;
$clone->clearFilters();
foreach (array_slice($prevFilters, 0, -1) as $prevFilter) {
$clone->ensureFilter($prevFilter);
}
$clone->load();
foreach ($filter->getChildren($this, $clone->getContent(), $clone->getSourceDirectory()) as $child) {
$mtime = max($mtime, $this->getLastModified($child));
}
}
}
return $mtime;
}
protected function parseInput($input, array $options = array())
{
if ('@'== $input[0]) {
return $this->createAssetReference(substr($input, 1));
}
if (false !== strpos($input,'://') || 0 === strpos($input,'//')) {
return $this->createHttpAsset($input, $options['vars']);
}
if (self::isAbsolutePath($input)) {
if ($root = self::findRootDir($input, $options['root'])) {
$path = ltrim(substr($input, strlen($root)),'/');
} else {
$path = null;
}
} else {
$root = $this->root;
$path = $input;
$input = $this->root.'/'.$path;
}
if (false !== strpos($input,'*')) {
return $this->createGlobAsset($input, $root, $options['vars']);
}
return $this->createFileAsset($input, $root, $path, $options['vars']);
}
protected function createAssetCollection(array $assets = array(), array $options = array())
{
return new AssetCollection($assets, array(), null, isset($options['vars']) ? $options['vars'] : array());
}
protected function createAssetReference($name)
{
if (!$this->am) {
throw new \LogicException('There is no asset manager.');
}
return new AssetReference($this->am, $name);
}
protected function createHttpAsset($sourceUrl, $vars)
{
return new HttpAsset($sourceUrl, array(), false, $vars);
}
protected function createGlobAsset($glob, $root = null, $vars)
{
return new GlobAsset($glob, array(), $root, $vars);
}
protected function createFileAsset($source, $root = null, $path = null, $vars)
{
return new FileAsset($source, array(), $root, $path, $vars);
}
protected function getFilter($name)
{
if (!$this->fm) {
throw new \LogicException('There is no filter manager.');
}
return $this->fm->get($name);
}
private function applyWorkers(AssetCollectionInterface $asset)
{
foreach ($asset as $leaf) {
foreach ($this->workers as $worker) {
$retval = $worker->process($leaf, $this);
if ($retval instanceof AssetInterface && $leaf !== $retval) {
$asset->replaceLeaf($leaf, $retval);
}
}
}
foreach ($this->workers as $worker) {
$retval = $worker->process($asset, $this);
if ($retval instanceof AssetInterface) {
$asset = $retval;
}
}
return $asset instanceof AssetCollectionInterface ? $asset : $this->createAssetCollection(array($asset));
}
private static function isAbsolutePath($path)
{
return'/'== $path[0] ||'\\'== $path[0] || (3 < strlen($path) && ctype_alpha($path[0]) && $path[1] ==':'&& ('\\'== $path[2] ||'/'== $path[2]));
}
private static function findRootDir($path, array $roots)
{
foreach ($roots as $root) {
if (0 === strpos($path, $root)) {
return $root;
}
}
}
}
}
namespace Symfony\Bundle\AsseticBundle\Factory
{
use Assetic\Factory\AssetFactory as BaseAssetFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpKernel\KernelInterface;
class AssetFactory extends BaseAssetFactory
{
private $kernel;
private $container;
private $parameterBag;
public function __construct(KernelInterface $kernel, ContainerInterface $container, ParameterBagInterface $parameterBag, $baseDir, $debug = false)
{
$this->kernel = $kernel;
$this->container = $container;
$this->parameterBag = $parameterBag;
parent::__construct($baseDir, $debug);
}
protected function parseInput($input, array $options = array())
{
$input = $this->parameterBag->resolveValue($input);
if ('@'== $input[0] && false !== strpos($input,'/')) {
$bundle = substr($input, 1);
if (false !== $pos = strpos($bundle,'/')) {
$bundle = substr($bundle, 0, $pos);
}
$options['root'] = array($this->kernel->getBundle($bundle)->getPath());
if (false !== $pos = strpos($input,'*')) {
list($before, $after) = explode('*', $input, 2);
$input = $this->kernel->locateResource($before).'*'.$after;
} else {
$input = $this->kernel->locateResource($input);
}
}
return parent::parseInput($input, $options);
}
protected function createAssetReference($name)
{
if (!$this->getAssetManager()) {
$this->setAssetManager($this->container->get('assetic.asset_manager'));
}
return parent::createAssetReference($name);
}
protected function getFilter($name)
{
if (!$this->getFilterManager()) {
$this->setFilterManager($this->container->get('assetic.filter_manager'));
}
return parent::getFilter($name);
}
}
}
namespace Symfony\Component\Form
{
use Symfony\Component\OptionsResolver\OptionsResolver;
interface FormTypeInterface
{
public function buildForm(FormBuilderInterface $builder, array $options);
public function buildView(FormView $view, FormInterface $form, array $options);
public function finishView(FormView $view, FormInterface $form, array $options);
public function configureOptions(OptionsResolver $resolver);
public function getBlockPrefix();
public function getParent();
}
}
namespace Symfony\Component\Form
{
use Symfony\Component\Form\Util\StringUtil;
use Symfony\Component\OptionsResolver\OptionsResolver;
abstract class AbstractType implements FormTypeInterface
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
}
public function finishView(FormView $view, FormInterface $form, array $options)
{
}
public function configureOptions(OptionsResolver $resolver)
{
}
public function getBlockPrefix()
{
return StringUtil::fqcnToBlockPrefix(get_class($this));
}
public function getParent()
{
return'Symfony\Component\Form\Extension\Core\Type\FormType';
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Sonata\CoreBundle\Form\DataTransformer\BooleanTypeToBooleanTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class BooleanType extends AbstractType
{
const TYPE_YES = 1;
const TYPE_NO = 2;
public function buildForm(FormBuilderInterface $builder, array $options)
{
if ($options['transform']) {
$builder->addModelTransformer(new BooleanTypeToBooleanTransformer());
}
if ($options['catalogue'] !=='SonataCoreBundle') {
@trigger_error('Option "catalogue" is deprecated since SonataCoreBundle 2.3.10 and will be removed in 4.0.'.' Use option "translation_domain" instead.',
E_USER_DEPRECATED
);
}
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$choices = array(
self::TYPE_YES =>'label_type_yes',
self::TYPE_NO =>'label_type_no',
);
$defaultOptions = array('transform'=> false,'catalogue'=>'SonataCoreBundle','translation_domain'=> function (Options $options) {
if ($options['catalogue']) {
return $options['catalogue'];
}
return $options['translation_domain'];
},
);
if (method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
$defaultOptions['choice_translation_domain'] ='SonataCoreBundle';
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$defaultOptions['choices_as_values'] = true;
}
}
$defaultOptions['choices'] = $choices;
$resolver->setDefaults($defaultOptions);
}
public function getParent()
{
return method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix') ?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_boolean';
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Sonata\CoreBundle\Form\EventListener\ResizeFormListener;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class CollectionType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$listener = new ResizeFormListener(
$options['type'],
$options['type_options'],
$options['modifiable'],
$options['pre_bind_data_callback']
);
$builder->addEventSubscriber($listener);
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
$view->vars['btn_add'] = $options['btn_add'];
$view->vars['btn_catalogue'] = $options['btn_catalogue'];
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('modifiable'=> false,'type'=> method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\TextType':'text','type_options'=> array(),'pre_bind_data_callback'=> null,'btn_add'=>'link_add','btn_catalogue'=>'SonataCoreBundle',
));
}
public function getBlockPrefix()
{
return'sonata_type_collection';
}
public function getName()
{
return $this->getBlockPrefix();
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class DateRangeType extends AbstractType
{
protected $translator;
public function __construct(TranslatorInterface $translator = null)
{
if ($translator !== null && get_class($this) !== get_class() && get_class($this) !=='Sonata\CoreBundle\Form\Type\DateRangePickerType') {
@trigger_error('The translator dependency in '.__CLASS__.' is deprecated since 3.1 and will be removed in 4.0. '.'Please prepare your dependencies for this change.',
E_USER_DEPRECATED
);
}
$this->translator = $translator;
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$options['field_options_start'] = array_merge(
array('label'=>'date_range_start','translation_domain'=>'SonataCoreBundle',
),
$options['field_options_start']
);
$options['field_options_end'] = array_merge(
array('label'=>'date_range_end','translation_domain'=>'SonataCoreBundle',
),
$options['field_options_end']
);
$builder->add('start', $options['field_type'], array_merge(array('required'=> false), $options['field_options'], $options['field_options_start']));
$builder->add('end', $options['field_type'], array_merge(array('required'=> false), $options['field_options'], $options['field_options_end']));
}
public function getBlockPrefix()
{
return'sonata_type_date_range';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_options'=> array(),'field_options_start'=> array(),'field_options_end'=> array(),'field_type'=> method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\DateType':'date',
));
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class DateTimeRangeType extends AbstractType
{
protected $translator;
public function __construct(TranslatorInterface $translator = null)
{
if ($translator !== null && get_class($this) !== get_class() && get_class($this) !=='Sonata\CoreBundle\Form\Type\DateTimeRangePickerType') {
@trigger_error('The translator dependency in '.__CLASS__.' is deprecated since 3.1 and will be removed in 4.0. '.'Please prepare your dependencies for this change.',
E_USER_DEPRECATED
);
}
$this->translator = $translator;
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$options['field_options_start'] = array_merge(
array('label'=>'date_range_start','translation_domain'=>'SonataCoreBundle',
),
$options['field_options_start']
);
$options['field_options_end'] = array_merge(
array('label'=>'date_range_end','translation_domain'=>'SonataCoreBundle',
),
$options['field_options_end']
);
$builder->add('start', $options['field_type'], array_merge(array('required'=> false), $options['field_options'], $options['field_options_start']));
$builder->add('end', $options['field_type'], array_merge(array('required'=> false), $options['field_options'], $options['field_options_end']));
}
public function getBlockPrefix()
{
return'sonata_type_datetime_range';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_options'=> array(),'field_options_start'=> array(),'field_options_end'=> array(),'field_type'=> method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\DateTimeType':'datetime',
));
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class EqualType extends AbstractType
{
const TYPE_IS_EQUAL = 1;
const TYPE_IS_NOT_EQUAL = 2;
protected $translator;
public function __construct(TranslatorInterface $translator = null)
{
if ($translator !== null && get_class($this) !== get_class()) {
@trigger_error('The translator dependency in '.__CLASS__.' is deprecated since 3.1 and will be removed in 4.0. '.'Please prepare your dependencies for this change.',
E_USER_DEPRECATED
);
}
$this->translator = $translator;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$choices = array(
self::TYPE_IS_EQUAL =>'label_type_equals',
self::TYPE_IS_NOT_EQUAL =>'label_type_not_equals',
);
$defaultOptions = array('choice_translation_domain'=>'SonataCoreBundle',
);
if (method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$defaultOptions['choices_as_values'] = true;
}
}
$defaultOptions['choices'] = $choices;
$resolver->setDefaults($defaultOptions);
}
public function getParent()
{
return method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix') ?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice';
}
public function getBlockPrefix()
{
return'sonata_type_equal';
}
public function getName()
{
return $this->getBlockPrefix();
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class ImmutableArrayType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
foreach ($options['keys'] as $infos) {
if ($infos instanceof FormBuilderInterface) {
$builder->add($infos);
} else {
list($name, $type, $options) = $infos;
if (is_callable($options)) {
$extra = array_slice($infos, 3);
$options = $options($builder, $name, $type, $extra);
if ($options === null) {
$options = array();
} elseif (!is_array($options)) {
throw new \RuntimeException('the closure must return null or an array');
}
}
$builder->add($name, $type, $options);
}
}
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('keys'=> array(),
));
}
public function getBlockPrefix()
{
return'sonata_type_immutable_array';
}
public function getName()
{
return $this->getBlockPrefix();
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class TranslatableChoiceType extends AbstractType
{
protected $translator;
public function __construct(TranslatorInterface $translator)
{
@trigger_error('Form type "sonata_type_translatable_choice" is deprecated since SonataCoreBundle 2.2.0 and will be'.' removed in 4.0. Use form type "choice" with "translation_domain" option instead.',
E_USER_DEPRECATED
);
$this->translator = $translator;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('catalogue'=>'messages',
));
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
$view->vars['translation_domain'] = $options['catalogue'];
}
public function getParent()
{
return method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix') ?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice';
}
public function getBlockPrefix()
{
return'sonata_type_translatable_choice';
}
public function getName()
{
return $this->getBlockPrefix();
}
}
}
namespace Sonata\BlockBundle\Block
{
use Sonata\BlockBundle\Exception\BlockNotFoundException;
interface BlockLoaderInterface
{
public function load($name);
public function support($name);
}
}
namespace Sonata\BlockBundle\Block
{
use Sonata\BlockBundle\Exception\BlockNotFoundException;
class BlockLoaderChain implements BlockLoaderInterface
{
protected $loaders;
public function __construct(array $loaders)
{
$this->loaders = $loaders;
}
public function exists($type)
{
foreach ($this->loaders as $loader) {
if ($loader->exists($type)) {
return true;
}
}
return false;
}
public function load($block)
{
foreach ($this->loaders as $loader) {
if ($loader->support($block)) {
return $loader->load($block);
}
}
throw new BlockNotFoundException();
}
public function support($name)
{
return true;
}
}
}
namespace Sonata\BlockBundle\Block
{
use Symfony\Component\HttpFoundation\Response;
interface BlockRendererInterface
{
public function render(BlockContextInterface $name, Response $response = null);
}
}
namespace Sonata\BlockBundle\Block
{
use Psr\Log\LoggerInterface;
use Sonata\BlockBundle\Exception\Strategy\StrategyManagerInterface;
use Symfony\Component\HttpFoundation\Response;
class BlockRenderer implements BlockRendererInterface
{
protected $blockServiceManager;
protected $exceptionStrategyManager;
protected $logger;
protected $debug;
private $lastResponse;
public function __construct(BlockServiceManagerInterface $blockServiceManager, StrategyManagerInterface $exceptionStrategyManager, LoggerInterface $logger = null, $debug = false)
{
$this->blockServiceManager = $blockServiceManager;
$this->exceptionStrategyManager = $exceptionStrategyManager;
$this->logger = $logger;
$this->debug = $debug;
}
public function render(BlockContextInterface $blockContext, Response $response = null)
{
$block = $blockContext->getBlock();
if ($this->logger) {
$this->logger->info(sprintf('[cms::renderBlock] block.id=%d, block.type=%s ', $block->getId(), $block->getType()));
}
try {
$service = $this->blockServiceManager->get($block);
$service->load($block);
$response = $service->execute($blockContext, $this->createResponse($blockContext, $response));
if (!$response instanceof Response) {
$response = null;
throw new \RuntimeException('A block service must return a Response object');
}
$response = $this->addMetaInformation($response, $blockContext, $service);
} catch (\Exception $exception) {
if ($this->logger) {
$this->logger->error(sprintf('[cms::renderBlock] block.id=%d - error while rendering block - %s',
$block->getId(),
$exception->getMessage()
), compact('exception'));
}
$this->lastResponse = null;
$response = $this->exceptionStrategyManager->handleException($exception, $blockContext->getBlock(), $response);
}
return $response;
}
protected function createResponse(BlockContextInterface $blockContext, Response $response = null)
{
if (null === $response) {
$response = new Response();
}
if (($ttl = $blockContext->getBlock()->getTtl()) > 0) {
$response->setTtl($ttl);
}
return $response;
}
protected function addMetaInformation(Response $response, BlockContextInterface $blockContext, BlockServiceInterface $service)
{
if ($this->lastResponse && $this->lastResponse->isCacheable()) {
$response->setTtl($this->lastResponse->getTtl());
$response->setPublic();
} elseif ($this->lastResponse) { $response->setPrivate();
$response->setTtl(0);
$response->headers->removeCacheControlDirective('s-maxage');
$response->headers->removeCacheControlDirective('maxage');
}
if (!$blockContext->getBlock()->hasParent()) {
$this->lastResponse = null;
} else { $this->lastResponse = $response;
}
return $response;
}
}
}
namespace Sonata\BlockBundle\Block
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
interface BlockServiceInterface
{
public function execute(BlockContextInterface $blockContext, Response $response = null);
public function getName();
public function setDefaultSettings(OptionsResolverInterface $resolver);
public function load(BlockInterface $block);
public function getJavascripts($media);
public function getStylesheets($media);
public function getCacheKeys(BlockInterface $block);
}
}
namespace Sonata\BlockBundle\Block
{
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Validator\ErrorElement;
interface BlockServiceManagerInterface
{
public function add($name, $service, $contexts = array());
public function get(BlockInterface $block);
public function setServices(array $blockServices);
public function getServices();
public function getServicesByContext($name, $includeContainers = true);
public function has($name);
public function getService($name);
public function getLoadedServices();
public function validate(ErrorElement $errorElement, BlockInterface $block);
}
}
namespace Sonata\BlockBundle\Block
{
use Psr\Log\LoggerInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\DependencyInjection\ContainerInterface;
class BlockServiceManager implements BlockServiceManagerInterface
{
protected $services;
protected $container;
protected $inValidate;
protected $contexts;
public function __construct(ContainerInterface $container, $debug, LoggerInterface $logger = null)
{
$this->services = array();
$this->contexts = array();
$this->container = $container;
}
public function get(BlockInterface $block)
{
$this->load($block->getType());
return $this->services[$block->getType()];
}
public function getService($id)
{
return $this->load($id);
}
public function has($id)
{
return isset($this->services[$id]) ? true : false;
}
public function add($name, $service, $contexts = array())
{
$this->services[$name] = $service;
foreach ($contexts as $context) {
if (!array_key_exists($context, $this->contexts)) {
$this->contexts[$context] = array();
}
$this->contexts[$context][] = $name;
}
}
public function setServices(array $blockServices)
{
foreach ($blockServices as $name => $service) {
$this->add($name, $service);
}
}
public function getServices()
{
foreach ($this->services as $name => $id) {
if (is_string($id)) {
$this->load($id);
}
}
return $this->sortServices($this->services);
}
public function getServicesByContext($context, $includeContainers = true)
{
if (!array_key_exists($context, $this->contexts)) {
return array();
}
$services = array();
$containers = $this->container->getParameter('sonata.block.container.types');
foreach ($this->contexts[$context] as $name) {
if (!$includeContainers && in_array($name, $containers)) {
continue;
}
$services[$name] = $this->getService($name);
}
return $this->sortServices($services);
}
public function getLoadedServices()
{
$services = array();
foreach ($this->services as $service) {
if (!$service instanceof BlockServiceInterface) {
continue;
}
$services[] = $service;
}
return $services;
}
public function validate(ErrorElement $errorElement, BlockInterface $block)
{
if (!$block->getId() && !$block->getType()) {
return;
}
if ($this->inValidate) {
return;
}
try {
$this->inValidate = true;
$this->get($block)->validateBlock($errorElement, $block);
$this->inValidate = false;
} catch (\Exception $e) {
$this->inValidate = false;
}
}
private function load($type)
{
if (!$this->has($type)) {
throw new \RuntimeException(sprintf('The block service `%s` does not exist', $type));
}
if (!$this->services[$type] instanceof BlockServiceInterface) {
$this->services[$type] = $this->container->get($type);
}
if (!$this->services[$type] instanceof BlockServiceInterface) {
throw new \RuntimeException(sprintf('The service %s does not implement BlockServiceInterface', $type));
}
return $this->services[$type];
}
private function sortServices($services)
{
uasort($services, function ($a, $b) {
if ($a->getName() == $b->getName()) {
return 0;
}
return ($a->getName() < $b->getName()) ? -1 : 1;
});
return $services;
}
}
}
namespace Sonata\BlockBundle\Block\Loader
{
use Sonata\BlockBundle\Block\BlockLoaderInterface;
use Sonata\BlockBundle\Model\Block;
class ServiceLoader implements BlockLoaderInterface
{
protected $types;
public function __construct(array $types)
{
$this->types = $types;
}
public function exists($type)
{
return in_array($type, $this->types, true);
}
public function load($configuration)
{
if (!in_array($configuration['type'], $this->types)) {
throw new \RuntimeException(sprintf('The block type "%s" does not exist',
$configuration['type']
));
}
$block = new Block();
$block->setId(uniqid());
$block->setType($configuration['type']);
$block->setEnabled(true);
$block->setCreatedAt(new \DateTime());
$block->setUpdatedAt(new \DateTime());
$block->setSettings(isset($configuration['settings']) ? $configuration['settings'] : array());
return $block;
}
public function support($configuration)
{
if (!is_array($configuration)) {
return false;
}
if (!isset($configuration['type'])) {
return false;
}
return true;
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
interface BlockServiceInterface extends \Sonata\BlockBundle\Block\BlockServiceInterface
{
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
abstract class AbstractBlockService implements BlockServiceInterface
{
protected $name;
protected $templating;
public function __construct($name = null, EngineInterface $templating = null)
{
if (null === $name || null === $templating) {
@trigger_error('The $name and $templating parameters will be required fields with the 4.0 release.',
E_USER_DEPRECATED
);
}
$this->name = $name;
$this->templating = $templating;
}
public function renderResponse($view, array $parameters = array(), Response $response = null)
{
return $this->getTemplating()->renderResponse($view, $parameters, $response);
}
public function renderPrivateResponse($view, array $parameters = array(), Response $response = null)
{
return $this->renderResponse($view, $parameters, $response)
->setTtl(0)
->setPrivate()
;
}
public function setDefaultSettings(OptionsResolverInterface $resolver)
{
$this->configureSettings($resolver);
}
public function configureSettings(OptionsResolver $resolver)
{
}
public function getCacheKeys(BlockInterface $block)
{
return array('block_id'=> $block->getId(),'updated_at'=> $block->getUpdatedAt() ? $block->getUpdatedAt()->format('U') : strtotime('now'),
);
}
public function load(BlockInterface $block)
{
}
public function getJavascripts($media)
{
return array();
}
public function getStylesheets($media)
{
return array();
}
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
return $this->renderResponse($blockContext->getTemplate(), array('block_context'=> $blockContext,'block'=> $blockContext->getBlock(),
), $response);
}
public function getName()
{
return $this->name;
}
public function getTemplating()
{
return $this->templating;
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\HttpFoundation\Response;
class EmptyBlockService extends AbstractBlockService
{
public function buildEditForm(FormMapper $form, BlockInterface $block)
{
throw new \RuntimeException('Not used, this block renders an empty result if no block document can be found');
}
public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
{
throw new \RuntimeException('Not used, this block renders an empty result if no block document can be found');
}
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
return new Response();
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\MetadataInterface;
use Sonata\CoreBundle\Validator\ErrorElement;
interface AdminBlockServiceInterface extends BlockServiceInterface
{
public function buildEditForm(FormMapper $form, BlockInterface $block);
public function buildCreateForm(FormMapper $form, BlockInterface $block);
public function validateBlock(ErrorElement $errorElement, BlockInterface $block);
public function getBlockMetadata($code = null);
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
abstract class AbstractAdminBlockService extends AbstractBlockService implements AdminBlockServiceInterface
{
public function __construct($name, EngineInterface $templating)
{
parent::__construct($name, $templating);
}
public function buildCreateForm(FormMapper $formMapper, BlockInterface $block)
{
$this->buildEditForm($formMapper, $block);
}
public function prePersist(BlockInterface $block)
{
}
public function postPersist(BlockInterface $block)
{
}
public function preUpdate(BlockInterface $block)
{
}
public function postUpdate(BlockInterface $block)
{
}
public function preRemove(BlockInterface $block)
{
}
public function postRemove(BlockInterface $block)
{
}
public function buildEditForm(FormMapper $form, BlockInterface $block)
{
}
public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
{
}
public function getBlockMetadata($code = null)
{
return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false,'SonataBlockBundle', array('class'=>'fa fa-file'));
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
class RssBlockService extends AbstractAdminBlockService
{
public function configureSettings(OptionsResolver $resolver)
{
$resolver->setDefaults(array('url'=> false,'title'=>'Insert the rss title','template'=>'SonataBlockBundle:Block:block_core_rss.html.twig',
));
}
public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
{
$formMapper->add('settings','sonata_type_immutable_array', array('keys'=> array(
array('url','url', array('required'=> false)),
array('title','text', array('required'=> false)),
),
));
}
public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
{
$errorElement
->with('settings[url]')
->assertNotNull(array())
->assertNotBlank()
->end()
->with('settings[title]')
->assertNotNull(array())
->assertNotBlank()
->assertLength(array('max'=> 50))
->end();
}
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
$settings = $blockContext->getSettings();
$feeds = false;
if ($settings['url']) {
$options = array('http'=> array('user_agent'=>'Sonata/RSS Reader','timeout'=> 2,
),
);
$content = @file_get_contents($settings['url'], false, stream_context_create($options));
if ($content) {
try {
$feeds = new \SimpleXMLElement($content);
$feeds = $feeds->channel->item;
} catch (\Exception $e) {
}
}
}
return $this->renderResponse($blockContext->getTemplate(), array('feeds'=> $feeds,'block'=> $blockContext->getBlock(),'settings'=> $settings,
), $response);
}
public function getBlockMetadata($code = null)
{
return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false,'SonataBlockBundle', array('class'=>'fa fa-rss-square',
));
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Knp\Menu\ItemInterface;
use Knp\Menu\Provider\MenuProviderInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Menu\MenuRegistryInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
class MenuBlockService extends AbstractAdminBlockService
{
protected $menuProvider;
protected $menus;
protected $menuRegistry;
public function __construct($name, EngineInterface $templating, MenuProviderInterface $menuProvider, $menuRegistry)
{
parent::__construct($name, $templating);
$this->menuProvider = $menuProvider;
if ($menuRegistry instanceof MenuRegistryInterface) {
$this->menuRegistry = $menuRegistry;
} else {
@trigger_error('Initializing '.__CLASS__.' with an array parameter is deprecated since 3.x and will be removed in 4.0.',
E_USER_DEPRECATED
);
$this->menus = $menuRegistry;
}
}
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
$responseSettings = array('menu'=> $this->getMenu($blockContext),'menu_options'=> $this->getMenuOptions($blockContext->getSettings()),'block'=> $blockContext->getBlock(),'context'=> $blockContext,
);
if ('private'=== $blockContext->getSettings('cache_policy')) {
return $this->renderPrivateResponse($blockContext->getTemplate(), $responseSettings, $response);
}
return $this->renderResponse($blockContext->getTemplate(), $responseSettings, $response);
}
public function buildEditForm(FormMapper $form, BlockInterface $block)
{
$form->add('settings','sonata_type_immutable_array', array('keys'=> $this->getFormSettingsKeys(),
));
}
public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
{
if (($name = $block->getSetting('menu_name')) && $name !==''&& !$this->menuProvider->has($name)) {
$errorElement->with('menu_name')
->addViolation('sonata.block.menu.not_existing', array('name'=> $name))
->end();
}
}
public function configureSettings(OptionsResolver $resolver)
{
$resolver->setDefaults(array('title'=> $this->getName(),'cache_policy'=>'public','template'=>'SonataBlockBundle:Block:block_core_menu.html.twig','menu_name'=>'','safe_labels'=> false,'current_class'=>'active','first_class'=> false,'last_class'=> false,'current_uri'=> null,'menu_class'=>'list-group','children_class'=>'list-group-item','menu_template'=> null,
));
}
public function getBlockMetadata($code = null)
{
return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false,'SonataBlockBundle', array('class'=>'fa fa-bars',
));
}
protected function getFormSettingsKeys()
{
$choiceOptions = array('required'=> false,
);
$choices = $this->menus;
if (count($choices) == 0) {
$choices = $this->menuRegistry->getAliasNames();
}
if (method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$choiceOptions['choices_as_values'] = true;
}
}
$choiceOptions['choices'] = $choices;
return array(
array('title','text', array('required'=> false)),
array('cache_policy','choice', array('choices'=> array('public','private'))),
array('menu_name','choice', $choiceOptions),
array('safe_labels','checkbox', array('required'=> false)),
array('current_class','text', array('required'=> false)),
array('first_class','text', array('required'=> false)),
array('last_class','text', array('required'=> false)),
array('menu_class','text', array('required'=> false)),
array('children_class','text', array('required'=> false)),
array('menu_template','text', array('required'=> false)),
);
}
protected function getMenu(BlockContextInterface $blockContext)
{
$settings = $blockContext->getSettings();
return $settings['menu_name'];
}
protected function getMenuOptions(array $settings)
{
$mapping = array('current_class'=>'currentClass','first_class'=>'firstClass','last_class'=>'lastClass','safe_labels'=>'allow_safe_labels','menu_template'=>'template',
);
$options = array();
foreach ($settings as $key => $value) {
if (array_key_exists($key, $mapping) && null !== $value) {
$options[$mapping[$key]] = $value;
}
}
return $options;
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\Metadata;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
class TextBlockService extends AbstractAdminBlockService
{
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
return $this->renderResponse($blockContext->getTemplate(), array('block'=> $blockContext->getBlock(),'settings'=> $blockContext->getSettings(),
), $response);
}
public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
{
$formMapper->add('settings','sonata_type_immutable_array', array('keys'=> array(
array('content','textarea', array()),
),
));
}
public function configureSettings(OptionsResolver $resolver)
{
$resolver->setDefaults(array('content'=>'Insert your custom content here','template'=>'SonataBlockBundle:Block:block_core_text.html.twig',
));
}
public function getBlockMetadata($code = null)
{
return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false,'SonataBlockBundle', array('class'=>'fa fa-file-text-o',
));
}
}
}
namespace Sonata\BlockBundle\Exception
{
interface BlockExceptionInterface
{
}
}
namespace Symfony\Component\HttpKernel\Exception
{
interface HttpExceptionInterface
{
public function getStatusCode();
public function getHeaders();
}
}
namespace Symfony\Component\HttpKernel\Exception
{
class HttpException extends \RuntimeException implements HttpExceptionInterface
{
private $statusCode;
private $headers;
public function __construct($statusCode, $message = null, \Exception $previous = null, array $headers = array(), $code = 0)
{
$this->statusCode = $statusCode;
$this->headers = $headers;
parent::__construct($message, $code, $previous);
}
public function getStatusCode()
{
return $this->statusCode;
}
public function getHeaders()
{
return $this->headers;
}
public function setHeaders(array $headers)
{
$this->headers = $headers;
}
}
}
namespace Symfony\Component\HttpKernel\Exception
{
class NotFoundHttpException extends HttpException
{
public function __construct($message = null, \Exception $previous = null, $code = 0)
{
parent::__construct(404, $message, $previous, array(), $code);
}
}
}
namespace Sonata\BlockBundle\Exception
{
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class BlockNotFoundException extends NotFoundHttpException
{
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
interface FilterInterface
{
public function handle(\Exception $exception, BlockInterface $block);
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
class DebugOnlyFilter implements FilterInterface
{
protected $debug;
public function __construct($debug)
{
$this->debug = $debug;
}
public function handle(\Exception $exception, BlockInterface $block)
{
return $this->debug ? true : false;
}
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
class IgnoreClassFilter implements FilterInterface
{
protected $class;
public function __construct($class)
{
$this->class = $class;
}
public function handle(\Exception $exception, BlockInterface $block)
{
return !$exception instanceof $this->class;
}
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
class KeepAllFilter implements FilterInterface
{
public function handle(\Exception $exception, BlockInterface $block)
{
return true;
}
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
class KeepNoneFilter implements FilterInterface
{
public function handle(\Exception $exception, BlockInterface $block)
{
return false;
}
}
}
namespace Sonata\BlockBundle\Exception\Renderer
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
interface RendererInterface
{
public function render(\Exception $exception, BlockInterface $block, Response $response = null);
}
}
namespace Sonata\BlockBundle\Exception\Renderer
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;
class InlineDebugRenderer implements RendererInterface
{
protected $templating;
protected $template;
protected $forceStyle;
protected $debug;
public function __construct(EngineInterface $templating, $template, $debug, $forceStyle = true)
{
$this->templating = $templating;
$this->template = $template;
$this->debug = $debug;
$this->forceStyle = $forceStyle;
}
public function render(\Exception $exception, BlockInterface $block, Response $response = null)
{
$response = $response ?: new Response();
if (!$this->debug) {
return $response;
}
$flattenException = FlattenException::create($exception);
$code = $flattenException->getStatusCode();
$parameters = array('exception'=> $flattenException,'status_code'=> $code,'status_text'=> isset(Response::$statusTexts[$code]) ? Response::$statusTexts[$code] :'','logger'=> false,'currentContent'=> false,'block'=> $block,'forceStyle'=> $this->forceStyle,
);
$content = $this->templating->render($this->template, $parameters);
$response->setContent($content);
return $response;
}
}
}
namespace Sonata\BlockBundle\Exception\Renderer
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;
class InlineRenderer implements RendererInterface
{
protected $templating;
protected $template;
public function __construct(EngineInterface $templating, $template)
{
$this->templating = $templating;
$this->template = $template;
}
public function render(\Exception $exception, BlockInterface $block, Response $response = null)
{
$parameters = array('exception'=> $exception,'block'=> $block,
);
$content = $this->templating->render($this->template, $parameters);
$response = $response ?: new Response();
$response->setContent($content);
return $response;
}
}
}
namespace Sonata\BlockBundle\Exception\Renderer
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
class MonkeyThrowRenderer implements RendererInterface
{
public function render(\Exception $banana, BlockInterface $block, Response $response = null)
{
throw $banana;
}
}
}
namespace Sonata\BlockBundle\Exception\Strategy
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
interface StrategyManagerInterface
{
public function handleException(\Exception $exception, BlockInterface $block, Response $response = null);
}
}
namespace Sonata\BlockBundle\Exception\Strategy
{
use Sonata\BlockBundle\Exception\Filter\FilterInterface;
use Sonata\BlockBundle\Exception\Renderer\RendererInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
class StrategyManager implements StrategyManagerInterface
{
protected $container;
protected $filters;
protected $renderers;
protected $blockFilters;
protected $blockRenderers;
protected $defaultFilter;
protected $defaultRenderer;
public function __construct(ContainerInterface $container, array $filters, array $renderers, array $blockFilters, array $blockRenderers)
{
$this->container = $container;
$this->filters = $filters;
$this->renderers = $renderers;
$this->blockFilters = $blockFilters;
$this->blockRenderers = $blockRenderers;
}
public function setDefaultFilter($name)
{
if (!array_key_exists($name, $this->filters)) {
throw new \InvalidArgumentException(sprintf('Cannot set default exception filter "%s". It does not exist.', $name));
}
$this->defaultFilter = $name;
}
public function setDefaultRenderer($name)
{
if (!array_key_exists($name, $this->renderers)) {
throw new \InvalidArgumentException(sprintf('Cannot set default exception renderer "%s". It does not exist.', $name));
}
$this->defaultRenderer = $name;
}
public function handleException(\Exception $exception, BlockInterface $block, Response $response = null)
{
$response = $response ?: new Response();
$response->setPrivate();
$filter = $this->getBlockFilter($block);
if ($filter->handle($exception, $block)) {
$renderer = $this->getBlockRenderer($block);
$response = $renderer->render($exception, $block, $response);
}
return $response;
}
public function getBlockRenderer(BlockInterface $block)
{
$type = $block->getType();
$name = isset($this->blockRenderers[$type]) ? $this->blockRenderers[$type] : $this->defaultRenderer;
$service = $this->getRendererService($name);
if (!$service instanceof RendererInterface) {
throw new \RuntimeException(sprintf('The service "%s" is not an exception renderer', $name));
}
return $service;
}
public function getBlockFilter(BlockInterface $block)
{
$type = $block->getType();
$name = isset($this->blockFilters[$type]) ? $this->blockFilters[$type] : $this->defaultFilter;
$service = $this->getFilterService($name);
if (!$service instanceof FilterInterface) {
throw new \RuntimeException(sprintf('The service "%s" is not an exception filter', $name));
}
return $service;
}
protected function getFilterService($name)
{
if (!isset($this->filters[$name])) {
throw new \RuntimeException('The filter "%s" does not exist.');
}
return $this->container->get($this->filters[$name]);
}
protected function getRendererService($name)
{
if (!isset($this->renderers[$name])) {
throw new \RuntimeException('The renderer "%s" does not exist.');
}
return $this->container->get($this->renderers[$name]);
}
}
}
namespace Sonata\BlockBundle\Form\Type
{
use Sonata\BlockBundle\Block\BlockServiceManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class ServiceListType extends AbstractType
{
protected $manager;
public function __construct(BlockServiceManagerInterface $manager)
{
$this->manager = $manager;
}
public function getBlockPrefix()
{
return'sonata_block_service_choice';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getParent()
{
return'choice';
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$manager = $this->manager;
$resolver->setRequired(array('context',
));
$resolver->setDefaults(array('multiple'=> false,'expanded'=> false,'choices'=> function (Options $options, $previousValue) use ($manager) {
$types = array();
foreach ($manager->getServicesByContext($options['context'], $options['include_containers']) as $code => $service) {
$types[$code] = sprintf('%s - %s', $service->getName(), $code);
}
return $types;
},'preferred_choices'=> array(),'empty_data'=> function (Options $options) {
$multiple = isset($options['multiple']) && $options['multiple'];
$expanded = isset($options['expanded']) && $options['expanded'];
return $multiple || $expanded ? array() :'';
},'empty_value'=> function (Options $options, $previousValue) {
$multiple = isset($options['multiple']) && $options['multiple'];
$expanded = isset($options['expanded']) && $options['expanded'];
return $multiple || $expanded || !isset($previousValue) ? null :'';
},'error_bubbling'=> false,'include_containers'=> false,
));
}
}
}
namespace Sonata\BlockBundle\Model
{
use Doctrine\Common\Collections\Collection;
interface BlockInterface
{
public function setId($id);
public function getId();
public function setName($name);
public function getName();
public function setType($type);
public function getType();
public function setEnabled($enabled);
public function getEnabled();
public function setPosition($position);
public function getPosition();
public function setCreatedAt(\DateTime $createdAt = null);
public function getCreatedAt();
public function setUpdatedAt(\DateTime $updatedAt = null);
public function getUpdatedAt();
public function getTtl();
public function setSettings(array $settings = array());
public function getSettings();
public function setSetting($name, $value);
public function getSetting($name, $default = null);
public function addChildren(BlockInterface $children);
public function getChildren();
public function hasChildren();
public function setParent(BlockInterface $parent = null);
public function getParent();
public function hasParent();
}
}
namespace Sonata\BlockBundle\Model
{
abstract class BaseBlock implements BlockInterface
{
protected $name;
protected $settings;
protected $enabled;
protected $position;
protected $parent;
protected $children;
protected $createdAt;
protected $updatedAt;
protected $type;
protected $ttl;
public function __construct()
{
$this->settings = array();
$this->enabled = false;
$this->children = array();
}
public function __toString()
{
return sprintf('%s ~ #%s', $this->getname(), $this->getId());
}
public function setName($name)
{
$this->name = $name;
}
public function getName()
{
return $this->name;
}
public function setType($type)
{
$this->type = $type;
}
public function getType()
{
return $this->type;
}
public function setSettings(array $settings = array())
{
$this->settings = $settings;
}
public function getSettings()
{
return $this->settings;
}
public function setSetting($name, $value)
{
$this->settings[$name] = $value;
}
public function getSetting($name, $default = null)
{
return isset($this->settings[$name]) ? $this->settings[$name] : $default;
}
public function setEnabled($enabled)
{
$this->enabled = $enabled;
}
public function getEnabled()
{
return $this->enabled;
}
public function setPosition($position)
{
$this->position = $position;
}
public function getPosition()
{
return $this->position;
}
public function setCreatedAt(\DateTime $createdAt = null)
{
$this->createdAt = $createdAt;
}
public function getCreatedAt()
{
return $this->createdAt;
}
public function setUpdatedAt(\DateTime $updatedAt = null)
{
$this->updatedAt = $updatedAt;
}
public function getUpdatedAt()
{
return $this->updatedAt;
}
public function addChildren(BlockInterface $child)
{
$this->children[] = $child;
$child->setParent($this);
}
public function getChildren()
{
return $this->children;
}
public function setParent(BlockInterface $parent = null)
{
$this->parent = $parent;
}
public function getParent()
{
return $this->parent;
}
public function hasParent()
{
return $this->getParent() instanceof self;
}
public function getTtl()
{
if (!$this->getSetting('use_cache', true)) {
return 0;
}
$ttl = $this->getSetting('ttl', 86400);
foreach ($this->getChildren() as $block) {
$blockTtl = $block->getTtl();
$ttl = ($blockTtl < $ttl) ? $blockTtl : $ttl;
}
$this->ttl = $ttl;
return $this->ttl;
}
public function hasChildren()
{
return count($this->children) > 0;
}
}
}
namespace Sonata\BlockBundle\Model
{
class Block extends BaseBlock
{
protected $id;
public function setId($id)
{
$this->id = $id;
}
public function getId()
{
return $this->id;
}
}
}
namespace Sonata\CoreBundle\Model
{
use Doctrine\DBAL\Connection;
interface ManagerInterface
{
public function getClass();
public function findAll();
public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
public function findOneBy(array $criteria, array $orderBy = null);
public function find($id);
public function create();
public function save($entity, $andFlush = true);
public function delete($entity, $andFlush = true);
public function getTableName();
public function getConnection();
}
}
namespace Sonata\CoreBundle\Model
{
use Sonata\DatagridBundle\Pager\PagerInterface;
interface PageableManagerInterface
{
public function getPager(array $criteria, $page, $limit = 10, array $sort = array());
}
}
namespace Sonata\BlockBundle\Model
{
use Sonata\CoreBundle\Model\ManagerInterface;
use Sonata\CoreBundle\Model\PageableManagerInterface;
interface BlockManagerInterface extends ManagerInterface, PageableManagerInterface
{
}
}
namespace Sonata\BlockBundle\Model
{
class EmptyBlock extends Block
{
}
}
namespace Sonata\BlockBundle\Twig\Extension
{
use Sonata\BlockBundle\Templating\Helper\BlockHelper;
class BlockExtension extends \Twig_Extension
{
protected $blockHelper;
public function __construct(BlockHelper $blockHelper)
{
$this->blockHelper = $blockHelper;
}
public function getFunctions()
{
return array(
new \Twig_SimpleFunction('sonata_block_exists',
array($this->blockHelper,'exists')
),
new \Twig_SimpleFunction('sonata_block_render',
array($this->blockHelper,'render'),
array('is_safe'=> array('html'))
),
new \Twig_SimpleFunction('sonata_block_render_event',
array($this->blockHelper,'renderEvent'),
array('is_safe'=> array('html'))
),
new \Twig_SimpleFunction('sonata_block_include_javascripts',
array($this->blockHelper,'includeJavascripts'),
array('is_safe'=> array('html'))
),
new \Twig_SimpleFunction('sonata_block_include_stylesheets',
array($this->blockHelper,'includeStylesheets'),
array('is_safe'=> array('html'))
),
);
}
public function getName()
{
return'sonata_block';
}
}
}
namespace Sonata\BlockBundle\Twig
{
class GlobalVariables
{
protected $templates;
public function __construct(array $templates)
{
$this->templates = $templates;
}
public function getTemplates()
{
return $this->templates;
}
}
}
namespace Sonata\AdminBundle\Admin
{
use Knp\Menu\FactoryInterface as MenuFactoryInterface;
use Knp\Menu\ItemInterface;
use Sonata\AdminBundle\Builder\DatagridBuilderInterface;
use Sonata\AdminBundle\Builder\FormContractorInterface;
use Sonata\AdminBundle\Builder\ListBuilderInterface;
use Sonata\AdminBundle\Builder\RouteBuilderInterface;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Route\RouteGeneratorInterface;
use Sonata\AdminBundle\Security\Handler\SecurityHandlerInterface;
use Sonata\AdminBundle\Translator\LabelTranslatorStrategyInterface;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\ValidatorInterface as LegacyValidatorInterface;
interface AdminInterface
{
public function setFormContractor(FormContractorInterface $formContractor);
public function setListBuilder(ListBuilderInterface $listBuilder);
public function getListBuilder();
public function setDatagridBuilder(DatagridBuilderInterface $datagridBuilder);
public function getDatagridBuilder();
public function setTranslator(TranslatorInterface $translator);
public function getTranslator();
public function setRequest(Request $request);
public function setConfigurationPool(Pool $pool);
public function setRouteGenerator(RouteGeneratorInterface $routeGenerator);
public function getClass();
public function attachAdminClass(FieldDescriptionInterface $fieldDescription);
public function getDatagrid();
public function setBaseControllerName($baseControllerName);
public function getBaseControllerName();
public function generateObjectUrl($name, $object, array $parameters = array(), $absolute = false);
public function generateUrl($name, array $parameters = array(), $absolute = false);
public function generateMenuUrl($name, array $parameters = array(), $absolute = false);
public function getModelManager();
public function getManagerType();
public function createQuery($context ='list');
public function getFormBuilder();
public function getFormFieldDescription($name);
public function getFormFieldDescriptions();
public function getForm();
public function getRequest();
public function hasRequest();
public function getCode();
public function getBaseCodeRoute();
public function getSecurityInformation();
public function setParentFieldDescription(FieldDescriptionInterface $parentFieldDescription);
public function getParentFieldDescription();
public function hasParentFieldDescription();
public function trans($id, array $parameters = array(), $domain = null, $locale = null);
public function getRoutes();
public function getRouterIdParameter();
public function getIdParameter();
public function hasRoute($name);
public function hasShowFieldDescription($name);
public function addShowFieldDescription($name, FieldDescriptionInterface $fieldDescription);
public function removeShowFieldDescription($name);
public function addListFieldDescription($name, FieldDescriptionInterface $fieldDescription);
public function removeListFieldDescription($name);
public function hasFilterFieldDescription($name);
public function addFilterFieldDescription($name, FieldDescriptionInterface $fieldDescription);
public function removeFilterFieldDescription($name);
public function getFilterFieldDescriptions();
public function getFilterFieldDescription($name);
public function getList();
public function setSecurityHandler(SecurityHandlerInterface $securityHandler);
public function getSecurityHandler();
public function isGranted($name, $object = null);
public function getUrlsafeIdentifier($entity);
public function getNormalizedIdentifier($entity);
public function id($entity);
public function setValidator($validator);
public function getValidator();
public function getShow();
public function setFormTheme(array $formTheme);
public function getFormTheme();
public function setFilterTheme(array $filterTheme);
public function getFilterTheme();
public function addExtension(AdminExtensionInterface $extension);
public function getExtensions();
public function setMenuFactory(MenuFactoryInterface $menuFactory);
public function getMenuFactory();
public function setRouteBuilder(RouteBuilderInterface $routeBuilder);
public function getRouteBuilder();
public function toString($object);
public function setLabelTranslatorStrategy(LabelTranslatorStrategyInterface $labelTranslatorStrategy);
public function getLabelTranslatorStrategy();
public function supportsPreviewMode();
public function addChild(AdminInterface $child);
public function hasChild($code);
public function getChildren();
public function getChild($code);
public function getNewInstance();
public function setUniqid($uniqId);
public function getUniqid();
public function getObject($id);
public function setSubject($subject);
public function getSubject();
public function getListFieldDescription($name);
public function hasListFieldDescription($name);
public function getListFieldDescriptions();
public function getExportFormats();
public function getDataSourceIterator();
public function configure();
public function update($object);
public function create($object);
public function delete($object);
public function preUpdate($object);
public function postUpdate($object);
public function prePersist($object);
public function postPersist($object);
public function preRemove($object);
public function postRemove($object);
public function preBatchAction($actionName, ProxyQueryInterface $query, array &$idx, $allElements);
public function getFilterParameters();
public function hasSubject();
public function validate(ErrorElement $errorElement, $object);
public function showIn($context);
public function createObjectSecurity($object);
public function getParent();
public function setParent(AdminInterface $admin);
public function isChild();
public function getTemplate($name);
public function setTranslationDomain($translationDomain);
public function getTranslationDomain();
public function getFormGroups();
public function setFormGroups(array $formGroups);
public function getFormTabs();
public function setFormTabs(array $formTabs);
public function getShowTabs();
public function setShowTabs(array $showTabs);
public function removeFieldFromFormGroup($key);
public function getShowGroups();
public function setShowGroups(array $showGroups);
public function reorderShowGroup($group, array $keys);
public function addFormFieldDescription($name, FieldDescriptionInterface $fieldDescription);
public function removeFormFieldDescription($name);
public function isAclEnabled();
public function setSubClasses(array $subClasses);
public function hasSubClass($name);
public function hasActiveSubClass();
public function getActiveSubClass();
public function getActiveSubclassCode();
public function getBatchActions();
public function getLabel();
public function getPersistentParameters();
public function getBreadcrumbs($action);
public function setCurrentChild($currentChild);
public function getCurrentChild();
public function getTranslationLabel($label, $context ='', $type ='');
public function buildSideMenu($action, AdminInterface $childAdmin = null);
public function buildTabMenu($action, AdminInterface $childAdmin = null);
public function getObjectMetadata($object);
public function getListModes();
public function setListMode($mode);
public function getListMode();
public function getAccessMapping();
public function checkAccess($action, $object = null);
}
}
namespace Symfony\Component\Security\Acl\Model
{
interface DomainObjectInterface
{
public function getObjectIdentifier();
}
}
namespace Sonata\AdminBundle\Admin
{
use Doctrine\Common\Util\ClassUtils;
use Knp\Menu\FactoryInterface as MenuFactoryInterface;
use Knp\Menu\ItemInterface;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Builder\DatagridBuilderInterface;
use Sonata\AdminBundle\Builder\FormContractorInterface;
use Sonata\AdminBundle\Builder\ListBuilderInterface;
use Sonata\AdminBundle\Builder\RouteBuilderInterface;
use Sonata\AdminBundle\Builder\ShowBuilderInterface;
use Sonata\AdminBundle\Datagrid\DatagridInterface;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\Pager;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Model\ModelManagerInterface;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Route\RouteGeneratorInterface;
use Sonata\AdminBundle\Security\Handler\AclSecurityHandlerInterface;
use Sonata\AdminBundle\Security\Handler\SecurityHandlerInterface;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Translator\LabelTranslatorStrategyInterface;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\Constraints\InlineConstraint;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PropertyAccess\PropertyPath;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Acl\Model\DomainObjectInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\ValidatorInterface as LegacyValidatorInterface;
abstract class AbstractAdmin implements AdminInterface, DomainObjectInterface
{
const CONTEXT_MENU ='menu';
const CONTEXT_DASHBOARD ='dashboard';
const CLASS_REGEX ='@
        (?:([A-Za-z0-9]*)\\\)?        # vendor name / app name
        (Bundle\\\)?                  # optional bundle directory
        ([A-Za-z0-9]+?)(?:Bundle)?\\\ # bundle name, with optional suffix
        (
            Entity|Document|Model|PHPCR|CouchDocument|Phpcr|
            Doctrine\\\Orm|Doctrine\\\Phpcr|Doctrine\\\MongoDB|Doctrine\\\CouchDB
        )\\\(.*)@x';
const MOSAIC_ICON_CLASS ='fa fa-th-large fa-fw';
protected $listFieldDescriptions = array();
protected $showFieldDescriptions = array();
protected $formFieldDescriptions = array();
protected $filterFieldDescriptions = array();
protected $maxPerPage = 32;
protected $maxPageLinks = 25;
protected $baseRouteName;
protected $baseRoutePattern;
protected $baseControllerName;
protected $classnameLabel;
protected $translationDomain ='messages';
protected $formOptions = array();
protected $datagridValues = array('_page'=> 1,'_per_page'=> 32,
);
protected $perPageOptions = array(16, 32, 64, 128, 192);
protected $pagerType = Pager::TYPE_DEFAULT;
protected $code;
protected $label;
protected $persistFilters = false;
protected $routes;
protected $subject;
protected $children = array();
protected $parent = null;
protected $baseCodeRoute ='';
protected $parentAssociationMapping = null;
protected $parentFieldDescription;
protected $currentChild = false;
protected $uniqid;
protected $modelManager;
protected $request;
protected $translator;
protected $formContractor;
protected $listBuilder;
protected $showBuilder;
protected $datagridBuilder;
protected $routeBuilder;
protected $datagrid;
protected $routeGenerator;
protected $breadcrumbs = array();
protected $securityHandler = null;
protected $validator = null;
protected $configurationPool;
protected $menu;
protected $menuFactory;
protected $loaded = array('view_fields'=> false,'view_groups'=> false,'routes'=> false,'tab_menu'=> false,
);
protected $formTheme = array();
protected $filterTheme = array();
protected $templates = array();
protected $extensions = array();
protected $labelTranslatorStrategy;
protected $supportsPreviewMode = false;
protected $securityInformation = array();
protected $cacheIsGranted = array();
protected $searchResultActions = array('edit','show');
protected $listModes = array('list'=> array('class'=>'fa fa-list fa-fw',
),'mosaic'=> array('class'=> self::MOSAIC_ICON_CLASS,
),
);
protected $accessMapping = array();
private $class;
private $subClasses = array();
private $list;
private $show;
private $form;
private $filter;
private $cachedBaseRouteName;
private $cachedBaseRoutePattern;
private $formGroups = false;
private $formTabs = false;
private $showGroups = false;
private $showTabs = false;
private $managerType;
private $breadcrumbsBuilder;
public function __construct($code, $class, $baseControllerName)
{
$this->code = $code;
$this->class = $class;
$this->baseControllerName = $baseControllerName;
$this->predefinePerPageOptions();
$this->datagridValues['_per_page'] = $this->maxPerPage;
}
public function getExportFormats()
{
return array('json','xml','csv','xls',
);
}
public function getExportFields()
{
$fields = $this->getModelManager()->getExportFields($this->getClass());
foreach ($this->getExtensions() as $extension) {
if (method_exists($extension,'configureExportFields')) {
$fields = $extension->configureExportFields($this, $fields);
}
}
return $fields;
}
public function getDataSourceIterator()
{
$datagrid = $this->getDatagrid();
$datagrid->buildPager();
$fields = array();
foreach ($this->getExportFields() as $key => $field) {
$label = $this->getTranslationLabel($field,'export','label');
$transLabel = $this->trans($label);
if ($transLabel == $label) {
$fields[$key] = $field;
} else {
$fields[$transLabel] = $field;
}
}
return $this->getModelManager()->getDataSourceIterator($datagrid, $fields);
}
public function validate(ErrorElement $errorElement, $object)
{
}
public function initialize()
{
if (!$this->classnameLabel) {
$this->classnameLabel = substr($this->getClass(), strrpos($this->getClass(),'\\') + 1);
}
$this->baseCodeRoute = $this->getCode();
$this->configure();
}
public function configure()
{
}
public function update($object)
{
$this->preUpdate($object);
foreach ($this->extensions as $extension) {
$extension->preUpdate($this, $object);
}
$result = $this->getModelManager()->update($object);
if (null !== $result) {
$object = $result;
}
$this->postUpdate($object);
foreach ($this->extensions as $extension) {
$extension->postUpdate($this, $object);
}
return $object;
}
public function create($object)
{
$this->prePersist($object);
foreach ($this->extensions as $extension) {
$extension->prePersist($this, $object);
}
$result = $this->getModelManager()->create($object);
if (null !== $result) {
$object = $result;
}
$this->postPersist($object);
foreach ($this->extensions as $extension) {
$extension->postPersist($this, $object);
}
$this->createObjectSecurity($object);
return $object;
}
public function delete($object)
{
$this->preRemove($object);
foreach ($this->extensions as $extension) {
$extension->preRemove($this, $object);
}
$this->getSecurityHandler()->deleteObjectSecurity($this, $object);
$this->getModelManager()->delete($object);
$this->postRemove($object);
foreach ($this->extensions as $extension) {
$extension->postRemove($this, $object);
}
}
public function preValidate($object)
{
}
public function preUpdate($object)
{
}
public function postUpdate($object)
{
}
public function prePersist($object)
{
}
public function postPersist($object)
{
}
public function preRemove($object)
{
}
public function postRemove($object)
{
}
public function preBatchAction($actionName, ProxyQueryInterface $query, array &$idx, $allElements)
{
}
public function getFilterParameters()
{
$parameters = array();
if ($this->hasRequest()) {
$filters = $this->request->query->get('filter', array());
if ($this->persistFilters) {
if ($filters == array() && $this->request->query->get('filters') !='reset') {
$filters = $this->request->getSession()->get($this->getCode().'.filter.parameters', array());
} else {
$this->request->getSession()->set($this->getCode().'.filter.parameters', $filters);
}
}
$parameters = array_merge(
$this->getModelManager()->getDefaultSortValues($this->getClass()),
$this->datagridValues,
$this->getDefaultFilterValues(),
$filters
);
if (!$this->determinedPerPageValue($parameters['_per_page'])) {
$parameters['_per_page'] = $this->maxPerPage;
}
if ($this->isChild() && $this->getParentAssociationMapping()) {
$name = str_replace('.','__', $this->getParentAssociationMapping());
$parameters[$name] = array('value'=> $this->request->get($this->getParent()->getIdParameter()));
}
}
return $parameters;
}
public function buildDatagrid()
{
if ($this->datagrid) {
return;
}
$filterParameters = $this->getFilterParameters();
if (isset($filterParameters['_sort_by']) && is_string($filterParameters['_sort_by'])) {
if ($this->hasListFieldDescription($filterParameters['_sort_by'])) {
$filterParameters['_sort_by'] = $this->getListFieldDescription($filterParameters['_sort_by']);
} else {
$filterParameters['_sort_by'] = $this->getModelManager()->getNewFieldDescriptionInstance(
$this->getClass(),
$filterParameters['_sort_by'],
array()
);
$this->getListBuilder()->buildField(null, $filterParameters['_sort_by'], $this);
}
}
$this->datagrid = $this->getDatagridBuilder()->getBaseDatagrid($this, $filterParameters);
$this->datagrid->getPager()->setMaxPageLinks($this->maxPageLinks);
$mapper = new DatagridMapper($this->getDatagridBuilder(), $this->datagrid, $this);
$this->configureDatagridFilters($mapper);
if ($this->isChild() && $this->getParentAssociationMapping() && !$mapper->has($this->getParentAssociationMapping())) {
$modelHiddenType = method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Sonata\AdminBundle\Form\Type\ModelHiddenType':'sonata_type_model_hidden';
$hiddenType = method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\HiddenType':'hidden';
$mapper->add($this->getParentAssociationMapping(), null, array('show_filter'=> false,'label'=> false,'field_type'=> $modelHiddenType,'field_options'=> array('model_manager'=> $this->getModelManager(),
),'operator_type'=> $hiddenType,
), null, null, array('admin_code'=> $this->getParent()->getCode(),
));
}
foreach ($this->getExtensions() as $extension) {
$extension->configureDatagridFilters($mapper);
}
}
public function getParentAssociationMapping()
{
return $this->parentAssociationMapping;
}
public function getBaseRoutePattern()
{
if (null !== $this->cachedBaseRoutePattern) {
return $this->cachedBaseRoutePattern;
}
if ($this->isChild()) { if (!$this->baseRoutePattern) {
preg_match(self::CLASS_REGEX, $this->class, $matches);
if (!$matches) {
throw new \RuntimeException(sprintf('Please define a default `baseRoutePattern` value for the admin class `%s`', get_class($this)));
}
}
$this->cachedBaseRoutePattern = sprintf('%s/{id}/%s',
$this->getParent()->getBaseRoutePattern(),
$this->baseRoutePattern ?: $this->urlize($matches[5],'-')
);
} elseif ($this->baseRoutePattern) {
$this->cachedBaseRoutePattern = $this->baseRoutePattern;
} else {
preg_match(self::CLASS_REGEX, $this->class, $matches);
if (!$matches) {
throw new \RuntimeException(sprintf('Please define a default `baseRoutePattern` value for the admin class `%s`', get_class($this)));
}
$this->cachedBaseRoutePattern = sprintf('/%s%s/%s',
empty($matches[1]) ?'': $this->urlize($matches[1],'-').'/',
$this->urlize($matches[3],'-'),
$this->urlize($matches[5],'-')
);
}
return $this->cachedBaseRoutePattern;
}
public function getBaseRouteName()
{
if (null !== $this->cachedBaseRouteName) {
return $this->cachedBaseRouteName;
}
if ($this->isChild()) { if (!$this->baseRouteName) {
preg_match(self::CLASS_REGEX, $this->class, $matches);
if (!$matches) {
throw new \RuntimeException(sprintf('Cannot automatically determine base route name, please define a default `baseRouteName` value for the admin class `%s`', get_class($this)));
}
}
$this->cachedBaseRouteName = sprintf('%s_%s',
$this->getParent()->getBaseRouteName(),
$this->baseRouteName ?: $this->urlize($matches[5])
);
} elseif ($this->baseRouteName) {
$this->cachedBaseRouteName = $this->baseRouteName;
} else {
preg_match(self::CLASS_REGEX, $this->class, $matches);
if (!$matches) {
throw new \RuntimeException(sprintf('Cannot automatically determine base route name, please define a default `baseRouteName` value for the admin class `%s`', get_class($this)));
}
$this->cachedBaseRouteName = sprintf('admin_%s%s_%s',
empty($matches[1]) ?'': $this->urlize($matches[1]).'_',
$this->urlize($matches[3]),
$this->urlize($matches[5])
);
}
return $this->cachedBaseRouteName;
}
public function urlize($word, $sep ='_')
{
return strtolower(preg_replace('/[^a-z0-9_]/i', $sep.'$1', $word));
}
public function getClass()
{
if ($this->hasSubject() && is_object($this->getSubject())) {
return ClassUtils::getClass($this->getSubject());
}
if (!$this->hasActiveSubClass()) {
if (count($this->getSubClasses()) > 0) {
$subject = $this->getSubject();
if ($subject && is_object($subject)) {
return ClassUtils::getClass($subject);
}
}
return $this->class;
}
if ($this->getParentFieldDescription() && $this->hasActiveSubClass()) {
throw new \RuntimeException('Feature not implemented: an embedded admin cannot have subclass');
}
$subClass = $this->getRequest()->query->get('subclass');
return $this->getSubClass($subClass);
}
public function getSubClasses()
{
return $this->subClasses;
}
public function addSubClass($subClass)
{
if (!in_array($subClass, $this->subClasses)) {
$this->subClasses[] = $subClass;
}
}
public function setSubClasses(array $subClasses)
{
$this->subClasses = $subClasses;
}
public function hasSubClass($name)
{
return isset($this->subClasses[$name]);
}
public function hasActiveSubClass()
{
if (count($this->subClasses) > 0 && $this->request) {
return null !== $this->getRequest()->query->get('subclass');
}
return false;
}
public function getActiveSubClass()
{
if (!$this->hasActiveSubClass()) {
return;
}
return $this->getClass();
}
public function getActiveSubclassCode()
{
if (!$this->hasActiveSubClass()) {
return;
}
$subClass = $this->getRequest()->query->get('subclass');
if (!$this->hasSubClass($subClass)) {
return;
}
return $subClass;
}
public function getBatchActions()
{
$actions = array();
if ($this->hasRoute('delete') && $this->hasAccess('delete')) {
$actions['delete'] = array('label'=>'action_delete','translation_domain'=>'SonataAdminBundle','ask_confirmation'=> true, );
}
$actions = $this->configureBatchActions($actions);
foreach ($this->getExtensions() as $extension) {
if (method_exists($extension,'configureBatchActions')) {
$actions = $extension->configureBatchActions($this, $actions);
}
}
foreach ($actions as $name => &$action) {
if (!array_key_exists('label', $action)) {
$action['label'] = $this->getTranslationLabel($name,'batch','label');
}
if (!array_key_exists('translation_domain', $action)) {
$action['translation_domain'] = $this->getTranslationDomain();
}
}
return $actions;
}
public function getRoutes()
{
$this->buildRoutes();
return $this->routes;
}
public function getRouterIdParameter()
{
return $this->isChild() ?'{childId}':'{id}';
}
public function getIdParameter()
{
return $this->isChild() ?'childId':'id';
}
public function hasRoute($name)
{
if (!$this->routeGenerator) {
throw new \RuntimeException('RouteGenerator cannot be null');
}
return $this->routeGenerator->hasAdminRoute($this, $name);
}
public function isCurrentRoute($name, $adminCode = null)
{
if (!$this->hasRequest()) {
return false;
}
$request = $this->getRequest();
$route = $request->get('_route');
if ($adminCode) {
$admin = $this->getConfigurationPool()->getAdminByAdminCode($adminCode);
} else {
$admin = $this;
}
if (!$admin) {
return false;
}
return ($admin->getBaseRouteName().'_'.$name) == $route;
}
public function generateObjectUrl($name, $object, array $parameters = array(), $absolute = UrlGeneratorInterface::ABSOLUTE_PATH)
{
$parameters['id'] = $this->getUrlsafeIdentifier($object);
return $this->generateUrl($name, $parameters, $absolute);
}
public function generateUrl($name, array $parameters = array(), $absolute = UrlGeneratorInterface::ABSOLUTE_PATH)
{
return $this->routeGenerator->generateUrl($this, $name, $parameters, $absolute);
}
public function generateMenuUrl($name, array $parameters = array(), $absolute = UrlGeneratorInterface::ABSOLUTE_PATH)
{
return $this->routeGenerator->generateMenuUrl($this, $name, $parameters, $absolute);
}
public function setTemplates(array $templates)
{
$this->templates = $templates;
}
public function setTemplate($name, $template)
{
$this->templates[$name] = $template;
}
public function getTemplates()
{
return $this->templates;
}
public function getTemplate($name)
{
if (isset($this->templates[$name])) {
return $this->templates[$name];
}
}
public function getNewInstance()
{
$object = $this->getModelManager()->getModelInstance($this->getClass());
foreach ($this->getExtensions() as $extension) {
$extension->alterNewInstance($this, $object);
}
return $object;
}
public function getFormBuilder()
{
$this->formOptions['data_class'] = $this->getClass();
$formBuilder = $this->getFormContractor()->getFormBuilder(
$this->getUniqid(),
$this->formOptions
);
$this->defineFormBuilder($formBuilder);
return $formBuilder;
}
public function defineFormBuilder(FormBuilderInterface $formBuilder)
{
$mapper = new FormMapper($this->getFormContractor(), $formBuilder, $this);
$this->configureFormFields($mapper);
foreach ($this->getExtensions() as $extension) {
$extension->configureFormFields($mapper);
}
$this->attachInlineValidator();
}
public function attachAdminClass(FieldDescriptionInterface $fieldDescription)
{
$pool = $this->getConfigurationPool();
$adminCode = $fieldDescription->getOption('admin_code');
if ($adminCode !== null) {
$admin = $pool->getAdminByAdminCode($adminCode);
} else {
$admin = $pool->getAdminByClass($fieldDescription->getTargetEntity());
}
if (!$admin) {
return;
}
if ($this->hasRequest()) {
$admin->setRequest($this->getRequest());
}
$fieldDescription->setAssociationAdmin($admin);
}
public function getObject($id)
{
$object = $this->getModelManager()->find($this->getClass(), $id);
foreach ($this->getExtensions() as $extension) {
$extension->alterObject($this, $object);
}
return $object;
}
public function getForm()
{
$this->buildForm();
return $this->form;
}
public function getList()
{
$this->buildList();
return $this->list;
}
public function createQuery($context ='list')
{
if (func_num_args() > 0) {
@trigger_error('The $context argument of '.__METHOD__.' is deprecated since 3.3, to be removed in 4.0.',
E_USER_DEPRECATED
);
}
$query = $this->getModelManager()->createQuery($this->class);
foreach ($this->extensions as $extension) {
$extension->configureQuery($this, $query, $context);
}
return $query;
}
public function getDatagrid()
{
$this->buildDatagrid();
return $this->datagrid;
}
public function buildTabMenu($action, AdminInterface $childAdmin = null)
{
if ($this->loaded['tab_menu']) {
return;
}
$this->loaded['tab_menu'] = true;
$menu = $this->menuFactory->createItem('root');
$menu->setChildrenAttribute('class','nav navbar-nav');
$menu->setExtra('translation_domain', $this->translationDomain);
if (method_exists($menu,'setCurrentUri')) {
$menu->setCurrentUri($this->getRequest()->getBaseUrl().$this->getRequest()->getPathInfo());
}
$this->configureTabMenu($menu, $action, $childAdmin);
foreach ($this->getExtensions() as $extension) {
$extension->configureTabMenu($this, $menu, $action, $childAdmin);
}
$this->menu = $menu;
}
public function buildSideMenu($action, AdminInterface $childAdmin = null)
{
return $this->buildTabMenu($action, $childAdmin);
}
public function getSideMenu($action, AdminInterface $childAdmin = null)
{
if ($this->isChild()) {
return $this->getParent()->getSideMenu($action, $this);
}
$this->buildSideMenu($action, $childAdmin);
return $this->menu;
}
public function getRootCode()
{
return $this->getRoot()->getCode();
}
public function getRoot()
{
$parentFieldDescription = $this->getParentFieldDescription();
if (!$parentFieldDescription) {
return $this;
}
return $parentFieldDescription->getAdmin()->getRoot();
}
public function setBaseControllerName($baseControllerName)
{
$this->baseControllerName = $baseControllerName;
}
public function getBaseControllerName()
{
return $this->baseControllerName;
}
public function setLabel($label)
{
$this->label = $label;
}
public function getLabel()
{
return $this->label;
}
public function setPersistFilters($persist)
{
$this->persistFilters = $persist;
}
public function setMaxPerPage($maxPerPage)
{
$this->maxPerPage = $maxPerPage;
}
public function getMaxPerPage()
{
return $this->maxPerPage;
}
public function setMaxPageLinks($maxPageLinks)
{
$this->maxPageLinks = $maxPageLinks;
}
public function getMaxPageLinks()
{
return $this->maxPageLinks;
}
public function getFormGroups()
{
return $this->formGroups;
}
public function setFormGroups(array $formGroups)
{
$this->formGroups = $formGroups;
}
public function removeFieldFromFormGroup($key)
{
foreach ($this->formGroups as $name => $formGroup) {
unset($this->formGroups[$name]['fields'][$key]);
if (empty($this->formGroups[$name]['fields'])) {
unset($this->formGroups[$name]);
}
}
}
public function reorderFormGroup($group, array $keys)
{
$formGroups = $this->getFormGroups();
$formGroups[$group]['fields'] = array_merge(array_flip($keys), $formGroups[$group]['fields']);
$this->setFormGroups($formGroups);
}
public function getFormTabs()
{
return $this->formTabs;
}
public function setFormTabs(array $formTabs)
{
$this->formTabs = $formTabs;
}
public function getShowTabs()
{
return $this->showTabs;
}
public function setShowTabs(array $showTabs)
{
$this->showTabs = $showTabs;
}
public function getShowGroups()
{
return $this->showGroups;
}
public function setShowGroups(array $showGroups)
{
$this->showGroups = $showGroups;
}
public function reorderShowGroup($group, array $keys)
{
$showGroups = $this->getShowGroups();
$showGroups[$group]['fields'] = array_merge(array_flip($keys), $showGroups[$group]['fields']);
$this->setShowGroups($showGroups);
}
public function setParentFieldDescription(FieldDescriptionInterface $parentFieldDescription)
{
$this->parentFieldDescription = $parentFieldDescription;
}
public function getParentFieldDescription()
{
return $this->parentFieldDescription;
}
public function hasParentFieldDescription()
{
return $this->parentFieldDescription instanceof FieldDescriptionInterface;
}
public function setSubject($subject)
{
if (is_object($subject) && !is_a($subject, $this->class, true)) {
$message =<<<'EOT'
You are trying to set entity an instance of "%s",
which is not the one registered with this admin class ("%s").
This is deprecated since 3.5 and will no longer be supported in 4.0.
EOT
;
@trigger_error(
sprintf($message, get_class($subject), $this->class),
E_USER_DEPRECATED
); }
$this->subject = $subject;
}
public function getSubject()
{
if ($this->subject === null && $this->request) {
$id = $this->request->get($this->getIdParameter());
$this->subject = $this->getModelManager()->find($this->class, $id);
}
return $this->subject;
}
public function hasSubject()
{
return $this->subject != null;
}
public function getFormFieldDescriptions()
{
$this->buildForm();
return $this->formFieldDescriptions;
}
public function getFormFieldDescription($name)
{
return $this->hasFormFieldDescription($name) ? $this->formFieldDescriptions[$name] : null;
}
public function hasFormFieldDescription($name)
{
return array_key_exists($name, $this->formFieldDescriptions) ? true : false;
}
public function addFormFieldDescription($name, FieldDescriptionInterface $fieldDescription)
{
$this->formFieldDescriptions[$name] = $fieldDescription;
}
public function removeFormFieldDescription($name)
{
unset($this->formFieldDescriptions[$name]);
}
public function getShowFieldDescriptions()
{
$this->buildShow();
return $this->showFieldDescriptions;
}
public function getShowFieldDescription($name)
{
$this->buildShow();
return $this->hasShowFieldDescription($name) ? $this->showFieldDescriptions[$name] : null;
}
public function hasShowFieldDescription($name)
{
return array_key_exists($name, $this->showFieldDescriptions);
}
public function addShowFieldDescription($name, FieldDescriptionInterface $fieldDescription)
{
$this->showFieldDescriptions[$name] = $fieldDescription;
}
public function removeShowFieldDescription($name)
{
unset($this->showFieldDescriptions[$name]);
}
public function getListFieldDescriptions()
{
$this->buildList();
return $this->listFieldDescriptions;
}
public function getListFieldDescription($name)
{
return $this->hasListFieldDescription($name) ? $this->listFieldDescriptions[$name] : null;
}
public function hasListFieldDescription($name)
{
$this->buildList();
return array_key_exists($name, $this->listFieldDescriptions) ? true : false;
}
public function addListFieldDescription($name, FieldDescriptionInterface $fieldDescription)
{
$this->listFieldDescriptions[$name] = $fieldDescription;
}
public function removeListFieldDescription($name)
{
unset($this->listFieldDescriptions[$name]);
}
public function getFilterFieldDescription($name)
{
return $this->hasFilterFieldDescription($name) ? $this->filterFieldDescriptions[$name] : null;
}
public function hasFilterFieldDescription($name)
{
return array_key_exists($name, $this->filterFieldDescriptions) ? true : false;
}
public function addFilterFieldDescription($name, FieldDescriptionInterface $fieldDescription)
{
$this->filterFieldDescriptions[$name] = $fieldDescription;
}
public function removeFilterFieldDescription($name)
{
unset($this->filterFieldDescriptions[$name]);
}
public function getFilterFieldDescriptions()
{
$this->buildDatagrid();
return $this->filterFieldDescriptions;
}
public function addChild(AdminInterface $child)
{
$this->children[$child->getCode()] = $child;
$child->setBaseCodeRoute($this->getCode().'|'.$child->getCode());
$child->setParent($this);
}
public function hasChild($code)
{
return isset($this->children[$code]);
}
public function getChildren()
{
return $this->children;
}
public function getChild($code)
{
return $this->hasChild($code) ? $this->children[$code] : null;
}
public function setParent(AdminInterface $parent)
{
$this->parent = $parent;
}
public function getParent()
{
return $this->parent;
}
public function isChild()
{
return $this->parent instanceof AdminInterface;
}
public function hasChildren()
{
return count($this->children) > 0;
}
public function setUniqid($uniqid)
{
$this->uniqid = $uniqid;
}
public function getUniqid()
{
if (!$this->uniqid) {
$this->uniqid ='s'.uniqid();
}
return $this->uniqid;
}
public function getClassnameLabel()
{
return $this->classnameLabel;
}
public function getPersistentParameters()
{
$parameters = array();
foreach ($this->getExtensions() as $extension) {
$params = $extension->getPersistentParameters($this);
if (!is_array($params)) {
throw new \RuntimeException(sprintf('The %s::getPersistentParameters must return an array', get_class($extension)));
}
$parameters = array_merge($parameters, $params);
}
return $parameters;
}
public function getPersistentParameter($name)
{
$parameters = $this->getPersistentParameters();
return isset($parameters[$name]) ? $parameters[$name] : null;
}
public function getBreadcrumbs($action)
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.2 and will be removed in 4.0.'.' Use Sonata\AdminBundle\Admin\BreadcrumbsBuilder::getBreadcrumbs instead.',
E_USER_DEPRECATED
);
return $this->getBreadcrumbsBuilder()->getBreadcrumbs($this, $action);
}
public function buildBreadcrumbs($action, MenuItemInterface $menu = null)
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.2 and will be removed in 4.0.',
E_USER_DEPRECATED
);
if (isset($this->breadcrumbs[$action])) {
return $this->breadcrumbs[$action];
}
return $this->breadcrumbs[$action] = $this->getBreadcrumbsBuilder()
->buildBreadcrumbs($this, $action, $menu);
}
final public function getBreadcrumbsBuilder()
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.2 and will be removed in 4.0.'.' Use the sonata.admin.breadcrumbs_builder service instead.',
E_USER_DEPRECATED
);
if ($this->breadcrumbsBuilder === null) {
$this->breadcrumbsBuilder = new BreadcrumbsBuilder(
$this->getConfigurationPool()->getContainer()->getParameter('sonata.admin.configuration.breadcrumbs')
);
}
return $this->breadcrumbsBuilder;
}
final public function setBreadcrumbsBuilder(BreadcrumbsBuilderInterface $value)
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.2 and will be removed in 4.0.'.' Use the sonata.admin.breadcrumbs_builder service instead.',
E_USER_DEPRECATED
);
$this->breadcrumbsBuilder = $value;
return $this;
}
public function setCurrentChild($currentChild)
{
$this->currentChild = $currentChild;
}
public function getCurrentChild()
{
return $this->currentChild;
}
public function getCurrentChildAdmin()
{
foreach ($this->children as $children) {
if ($children->getCurrentChild()) {
return $children;
}
}
return;
}
public function trans($id, array $parameters = array(), $domain = null, $locale = null)
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.9 and will be removed in 4.0.',
E_USER_DEPRECATED
);
$domain = $domain ?: $this->getTranslationDomain();
return $this->translator->trans($id, $parameters, $domain, $locale);
}
public function transChoice($id, $count, array $parameters = array(), $domain = null, $locale = null)
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.9 and will be removed in 4.0.',
E_USER_DEPRECATED
);
$domain = $domain ?: $this->getTranslationDomain();
return $this->translator->transChoice($id, $count, $parameters, $domain, $locale);
}
public function setTranslationDomain($translationDomain)
{
$this->translationDomain = $translationDomain;
}
public function getTranslationDomain()
{
return $this->translationDomain;
}
public function setTranslator(TranslatorInterface $translator)
{
$args = func_get_args();
if (isset($args[1]) && $args[1]) {
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.9 and will be removed in 4.0.',
E_USER_DEPRECATED
);
}
$this->translator = $translator;
}
public function getTranslator()
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.9 and will be removed in 4.0.',
E_USER_DEPRECATED
);
return $this->translator;
}
public function getTranslationLabel($label, $context ='', $type ='')
{
return $this->getLabelTranslatorStrategy()->getLabel($label, $context, $type);
}
public function setRequest(Request $request)
{
$this->request = $request;
foreach ($this->getChildren() as $children) {
$children->setRequest($request);
}
}
public function getRequest()
{
if (!$this->request) {
throw new \RuntimeException('The Request object has not been set');
}
return $this->request;
}
public function hasRequest()
{
return $this->request !== null;
}
public function setFormContractor(FormContractorInterface $formBuilder)
{
$this->formContractor = $formBuilder;
}
public function getFormContractor()
{
return $this->formContractor;
}
public function setDatagridBuilder(DatagridBuilderInterface $datagridBuilder)
{
$this->datagridBuilder = $datagridBuilder;
}
public function getDatagridBuilder()
{
return $this->datagridBuilder;
}
public function setListBuilder(ListBuilderInterface $listBuilder)
{
$this->listBuilder = $listBuilder;
}
public function getListBuilder()
{
return $this->listBuilder;
}
public function setShowBuilder(ShowBuilderInterface $showBuilder)
{
$this->showBuilder = $showBuilder;
}
public function getShowBuilder()
{
return $this->showBuilder;
}
public function setConfigurationPool(Pool $configurationPool)
{
$this->configurationPool = $configurationPool;
}
public function getConfigurationPool()
{
return $this->configurationPool;
}
public function setRouteGenerator(RouteGeneratorInterface $routeGenerator)
{
$this->routeGenerator = $routeGenerator;
}
public function getRouteGenerator()
{
return $this->routeGenerator;
}
public function getCode()
{
return $this->code;
}
public function setBaseCodeRoute($baseCodeRoute)
{
$this->baseCodeRoute = $baseCodeRoute;
}
public function getBaseCodeRoute()
{
return $this->baseCodeRoute;
}
public function getModelManager()
{
return $this->modelManager;
}
public function setModelManager(ModelManagerInterface $modelManager)
{
$this->modelManager = $modelManager;
}
public function getManagerType()
{
return $this->managerType;
}
public function setManagerType($type)
{
$this->managerType = $type;
}
public function getObjectIdentifier()
{
return $this->getCode();
}
public function setSecurityInformation(array $information)
{
$this->securityInformation = $information;
}
public function getSecurityInformation()
{
return $this->securityInformation;
}
public function getPermissionsShow($context)
{
switch ($context) {
case self::CONTEXT_DASHBOARD:
case self::CONTEXT_MENU:
default:
return array('LIST');
}
}
public function showIn($context)
{
switch ($context) {
case self::CONTEXT_DASHBOARD:
case self::CONTEXT_MENU:
default:
return $this->isGranted($this->getPermissionsShow($context));
}
}
public function createObjectSecurity($object)
{
$this->getSecurityHandler()->createObjectSecurity($this, $object);
}
public function setSecurityHandler(SecurityHandlerInterface $securityHandler)
{
$this->securityHandler = $securityHandler;
}
public function getSecurityHandler()
{
return $this->securityHandler;
}
public function isGranted($name, $object = null)
{
$key = md5(json_encode($name).($object ?'/'.spl_object_hash($object) :''));
if (!array_key_exists($key, $this->cacheIsGranted)) {
$this->cacheIsGranted[$key] = $this->securityHandler->isGranted($this, $name, $object ?: $this);
}
return $this->cacheIsGranted[$key];
}
public function getUrlsafeIdentifier($entity)
{
return $this->getModelManager()->getUrlsafeIdentifier($entity);
}
public function getNormalizedIdentifier($entity)
{
return $this->getModelManager()->getNormalizedIdentifier($entity);
}
public function id($entity)
{
return $this->getNormalizedIdentifier($entity);
}
public function setValidator($validator)
{
if (!$validator instanceof ValidatorInterface && !$validator instanceof LegacyValidatorInterface) {
throw new \InvalidArgumentException('Argument 1 must be an instance of Symfony\Component\Validator\Validator\ValidatorInterface'.' or Symfony\Component\Validator\ValidatorInterface');
}
$this->validator = $validator;
}
public function getValidator()
{
return $this->validator;
}
public function getShow()
{
$this->buildShow();
return $this->show;
}
public function setFormTheme(array $formTheme)
{
$this->formTheme = $formTheme;
}
public function getFormTheme()
{
return $this->formTheme;
}
public function setFilterTheme(array $filterTheme)
{
$this->filterTheme = $filterTheme;
}
public function getFilterTheme()
{
return $this->filterTheme;
}
public function addExtension(AdminExtensionInterface $extension)
{
$this->extensions[] = $extension;
}
public function getExtensions()
{
return $this->extensions;
}
public function setMenuFactory(MenuFactoryInterface $menuFactory)
{
$this->menuFactory = $menuFactory;
}
public function getMenuFactory()
{
return $this->menuFactory;
}
public function setRouteBuilder(RouteBuilderInterface $routeBuilder)
{
$this->routeBuilder = $routeBuilder;
}
public function getRouteBuilder()
{
return $this->routeBuilder;
}
public function toString($object)
{
if (!is_object($object)) {
return'';
}
if (method_exists($object,'__toString') && null !== $object->__toString()) {
return (string) $object;
}
return sprintf('%s:%s', ClassUtils::getClass($object), spl_object_hash($object));
}
public function setLabelTranslatorStrategy(LabelTranslatorStrategyInterface $labelTranslatorStrategy)
{
$this->labelTranslatorStrategy = $labelTranslatorStrategy;
}
public function getLabelTranslatorStrategy()
{
return $this->labelTranslatorStrategy;
}
public function supportsPreviewMode()
{
return $this->supportsPreviewMode;
}
public function setPerPageOptions(array $options)
{
$this->perPageOptions = $options;
}
public function getPerPageOptions()
{
return $this->perPageOptions;
}
public function setPagerType($pagerType)
{
$this->pagerType = $pagerType;
}
public function getPagerType()
{
return $this->pagerType;
}
public function determinedPerPageValue($perPage)
{
return in_array($perPage, $this->perPageOptions);
}
public function isAclEnabled()
{
return $this->getSecurityHandler() instanceof AclSecurityHandlerInterface;
}
public function getObjectMetadata($object)
{
return new Metadata($this->toString($object));
}
public function getListModes()
{
return $this->listModes;
}
public function setListMode($mode)
{
if (!$this->hasRequest()) {
throw new \RuntimeException(sprintf('No request attached to the current admin: %s', $this->getCode()));
}
$this->getRequest()->getSession()->set(sprintf('%s.list_mode', $this->getCode()), $mode);
}
public function getListMode()
{
if (!$this->hasRequest()) {
return'list';
}
return $this->getRequest()->getSession()->get(sprintf('%s.list_mode', $this->getCode()),'list');
}
public function getAccessMapping()
{
return $this->accessMapping;
}
public function checkAccess($action, $object = null)
{
$access = $this->getAccess();
if (!array_key_exists($action, $access)) {
throw new \InvalidArgumentException(sprintf('Action "%s" could not be found in access mapping.'.' Please make sure your action is defined into your admin class accessMapping property.',
$action
));
}
if (!is_array($access[$action])) {
$access[$action] = array($access[$action]);
}
foreach ($access[$action] as $role) {
if (false === $this->isGranted($role, $object)) {
throw new AccessDeniedException(sprintf('Access Denied to the action %s and role %s', $action, $role));
}
}
}
public function hasAccess($action, $object = null)
{
$access = $this->getAccess();
if (!array_key_exists($action, $access)) {
return false;
}
if (!is_array($access[$action])) {
$access[$action] = array($access[$action]);
}
foreach ($access[$action] as $role) {
if (false === $this->isGranted($role, $object)) {
return false;
}
}
return true;
}
public function configureActionButtons($action, $object = null)
{
$list = array();
if (in_array($action, array('tree','show','edit','delete','list','batch'))
&& $this->hasAccess('create')
&& $this->hasRoute('create')
) {
$list['create'] = array('template'=> $this->getTemplate('button_create'),
);
}
if (in_array($action, array('show','delete','acl','history'))
&& $this->canAccessObject('edit', $object)
&& $this->hasRoute('edit')
) {
$list['edit'] = array('template'=> $this->getTemplate('button_edit'),
);
}
if (in_array($action, array('show','edit','acl'))
&& $this->canAccessObject('history', $object)
&& $this->hasRoute('history')
) {
$list['history'] = array('template'=> $this->getTemplate('button_history'),
);
}
if (in_array($action, array('edit','history'))
&& $this->isAclEnabled()
&& $this->canAccessObject('acl', $object)
&& $this->hasRoute('acl')
) {
$list['acl'] = array('template'=> $this->getTemplate('button_acl'),
);
}
if (in_array($action, array('edit','history','acl'))
&& $this->canAccessObject('show', $object)
&& count($this->getShow()) > 0
&& $this->hasRoute('show')
) {
$list['show'] = array('template'=> $this->getTemplate('button_show'),
);
}
if (in_array($action, array('show','edit','delete','acl','batch'))
&& $this->hasAccess('list')
&& $this->hasRoute('list')
) {
$list['list'] = array('template'=> $this->getTemplate('button_list'),
);
}
return $list;
}
public function getActionButtons($action, $object = null)
{
$list = $this->configureActionButtons($action, $object);
foreach ($this->getExtensions() as $extension) {
if (method_exists($extension,'configureActionButtons')) {
$list = $extension->configureActionButtons($this, $list, $action, $object);
}
}
return $list;
}
public function getDashboardActions()
{
$actions = array();
if ($this->hasRoute('create') && $this->hasAccess('create')) {
$actions['create'] = array('label'=>'link_add','translation_domain'=>'SonataAdminBundle','template'=> $this->getTemplate('action_create'),'url'=> $this->generateUrl('create'),'icon'=>'plus-circle',
);
}
if ($this->hasRoute('list') && $this->hasAccess('list')) {
$actions['list'] = array('label'=>'link_list','translation_domain'=>'SonataAdminBundle','url'=> $this->generateUrl('list'),'icon'=>'list',
);
}
return $actions;
}
final public function showMosaicButton($isShown)
{
if ($isShown) {
$this->listModes['mosaic'] = array('class'=> self::MOSAIC_ICON_CLASS);
} else {
unset($this->listModes['mosaic']);
}
}
final public function getSearchResultLink($object)
{
foreach ($this->searchResultActions as $action) {
if ($this->hasRoute($action) && $this->hasAccess($action, $object)) {
return $this->generateObjectUrl($action, $object);
}
}
return;
}
final public function isDefaultFilter($name)
{
$filter = $this->getFilterParameters();
$default = $this->getDefaultFilterValues();
if (!array_key_exists($name, $filter) || !array_key_exists($name, $default)) {
return false;
}
return $filter[$name] == $default[$name];
}
public function canAccessObject($action, $object)
{
return $object && $this->id($object) && $this->hasAccess($action, $object);
}
final protected function getDefaultFilterValues()
{
$defaultFilterValues = array();
$this->configureDefaultFilterValues($defaultFilterValues);
foreach ($this->getExtensions() as $extension) {
if (method_exists($extension,'configureDefaultFilterValues')) {
$extension->configureDefaultFilterValues($this, $defaultFilterValues);
}
}
return $defaultFilterValues;
}
protected function configureFormFields(FormMapper $form)
{
}
protected function configureListFields(ListMapper $list)
{
}
protected function configureDatagridFilters(DatagridMapper $filter)
{
}
protected function configureShowFields(ShowMapper $show)
{
}
protected function configureRoutes(RouteCollection $collection)
{
}
protected function configureBatchActions($actions)
{
return $actions;
}
protected function configureSideMenu(MenuItemInterface $menu, $action, AdminInterface $childAdmin = null)
{
}
protected function configureTabMenu(MenuItemInterface $menu, $action, AdminInterface $childAdmin = null)
{
$this->configureSideMenu($menu, $action, $childAdmin);
}
protected function buildShow()
{
if ($this->show) {
return;
}
$this->show = new FieldDescriptionCollection();
$mapper = new ShowMapper($this->showBuilder, $this->show, $this);
$this->configureShowFields($mapper);
foreach ($this->getExtensions() as $extension) {
$extension->configureShowFields($mapper);
}
}
protected function buildList()
{
if ($this->list) {
return;
}
$this->list = $this->getListBuilder()->getBaseList();
$mapper = new ListMapper($this->getListBuilder(), $this->list, $this);
if (count($this->getBatchActions()) > 0) {
$fieldDescription = $this->getModelManager()->getNewFieldDescriptionInstance(
$this->getClass(),'batch',
array('label'=>'batch','code'=>'_batch','sortable'=> false,'virtual_field'=> true,
)
);
$fieldDescription->setAdmin($this);
$fieldDescription->setTemplate($this->getTemplate('batch'));
$mapper->add($fieldDescription,'batch');
}
$this->configureListFields($mapper);
foreach ($this->getExtensions() as $extension) {
$extension->configureListFields($mapper);
}
if ($this->hasRequest() && $this->getRequest()->isXmlHttpRequest()) {
$fieldDescription = $this->getModelManager()->getNewFieldDescriptionInstance(
$this->getClass(),'select',
array('label'=> false,'code'=>'_select','sortable'=> false,'virtual_field'=> false,
)
);
$fieldDescription->setAdmin($this);
$fieldDescription->setTemplate($this->getTemplate('select'));
$mapper->add($fieldDescription,'select');
}
}
protected function buildForm()
{
if ($this->form) {
return;
}
if ($this->isChild() && $this->getParentAssociationMapping()) {
$parent = $this->getParent()->getObject($this->request->get($this->getParent()->getIdParameter()));
$propertyAccessor = $this->getConfigurationPool()->getPropertyAccessor();
$propertyPath = new PropertyPath($this->getParentAssociationMapping());
$object = $this->getSubject();
$value = $propertyAccessor->getValue($object, $propertyPath);
if (is_array($value) || ($value instanceof \Traversable && $value instanceof \ArrayAccess)) {
$value[] = $parent;
$propertyAccessor->setValue($object, $propertyPath, $value);
} else {
$propertyAccessor->setValue($object, $propertyPath, $parent);
}
}
$this->form = $this->getFormBuilder()->getForm();
}
protected function getSubClass($name)
{
if ($this->hasSubClass($name)) {
return $this->subClasses[$name];
}
throw new \RuntimeException(sprintf('Unable to find the subclass `%s` for admin `%s`',
$name,
get_class($this)
));
}
protected function attachInlineValidator()
{
$admin = $this;
if (method_exists($this->validator,'getMetadataFor')) {
$metadata = $this->validator->getMetadataFor($this->getClass());
} else {
$metadata = $this->validator->getMetadataFactory()->getMetadataFor($this->getClass());
}
$metadata->addConstraint(new InlineConstraint(array('service'=> $this,'method'=> function (ErrorElement $errorElement, $object) use ($admin) {
if ($admin->hasSubject() && spl_object_hash($object) !== spl_object_hash($admin->getSubject())) {
return;
}
$admin->validate($errorElement, $object);
foreach ($admin->getExtensions() as $extension) {
$extension->validate($admin, $errorElement, $object);
}
},'serializingWarning'=> true,
)));
}
protected function predefinePerPageOptions()
{
array_unshift($this->perPageOptions, $this->maxPerPage);
$this->perPageOptions = array_unique($this->perPageOptions);
sort($this->perPageOptions);
}
protected function getAccess()
{
$access = array_merge(array('acl'=>'MASTER','export'=>'EXPORT','historyCompareRevisions'=>'EDIT','historyViewRevision'=>'EDIT','history'=>'EDIT','edit'=>'EDIT','show'=>'VIEW','create'=>'CREATE','delete'=>'DELETE','batchDelete'=>'DELETE','list'=>'LIST',
), $this->getAccessMapping());
foreach ($this->extensions as $extension) {
if (method_exists($extension,'getAccessMapping')) {
$access = array_merge($access, $extension->getAccessMapping($this));
}
}
return $access;
}
protected function configureDefaultFilterValues(array &$filterValues)
{
}
private function buildRoutes()
{
if ($this->loaded['routes']) {
return;
}
$this->loaded['routes'] = true;
$this->routes = new RouteCollection(
$this->getBaseCodeRoute(),
$this->getBaseRouteName(),
$this->getBaseRoutePattern(),
$this->getBaseControllerName()
);
$this->routeBuilder->build($this, $this->routes);
$this->configureRoutes($this->routes);
foreach ($this->getExtensions() as $extension) {
$extension->configureRoutes($this, $this->routes);
}
}
}
}
namespace Sonata\AdminBundle\Admin
{
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Validator\ErrorElement;
interface AdminExtensionInterface
{
public function configureFormFields(FormMapper $formMapper);
public function configureListFields(ListMapper $listMapper);
public function configureDatagridFilters(DatagridMapper $datagridMapper);
public function configureShowFields(ShowMapper $showMapper);
public function configureRoutes(AdminInterface $admin, RouteCollection $collection);
public function configureSideMenu(AdminInterface $admin, MenuItemInterface $menu, $action, AdminInterface $childAdmin = null);
public function configureTabMenu(AdminInterface $admin, MenuItemInterface $menu, $action, AdminInterface $childAdmin = null);
public function validate(AdminInterface $admin, ErrorElement $errorElement, $object);
public function configureQuery(AdminInterface $admin, ProxyQueryInterface $query, $context ='list');
public function alterNewInstance(AdminInterface $admin, $object);
public function alterObject(AdminInterface $admin, $object);
public function getPersistentParameters(AdminInterface $admin);
public function preUpdate(AdminInterface $admin, $object);
public function postUpdate(AdminInterface $admin, $object);
public function prePersist(AdminInterface $admin, $object);
public function postPersist(AdminInterface $admin, $object);
public function preRemove(AdminInterface $admin, $object);
public function postRemove(AdminInterface $admin, $object);
}
}
namespace Sonata\AdminBundle\Admin
{
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Validator\ErrorElement;
abstract class AbstractAdminExtension implements AdminExtensionInterface
{
public function configureFormFields(FormMapper $formMapper)
{
}
public function configureListFields(ListMapper $listMapper)
{
}
public function configureDatagridFilters(DatagridMapper $datagridMapper)
{
}
public function configureShowFields(ShowMapper $showMapper)
{
}
public function configureRoutes(AdminInterface $admin, RouteCollection $collection)
{
}
public function configureSideMenu(AdminInterface $admin, MenuItemInterface $menu, $action, AdminInterface $childAdmin = null)
{
}
public function configureTabMenu(AdminInterface $admin, MenuItemInterface $menu, $action, AdminInterface $childAdmin = null)
{
$this->configureSideMenu($admin, $menu, $action, $childAdmin);
}
public function validate(AdminInterface $admin, ErrorElement $errorElement, $object)
{
}
public function configureQuery(AdminInterface $admin, ProxyQueryInterface $query, $context ='list')
{
}
public function alterNewInstance(AdminInterface $admin, $object)
{
}
public function alterObject(AdminInterface $admin, $object)
{
}
public function getPersistentParameters(AdminInterface $admin)
{
return array();
}
public function getAccessMapping(AdminInterface $admin)
{
return array();
}
public function configureBatchActions(AdminInterface $admin, array $actions)
{
return $actions;
}
public function configureExportFields(AdminInterface $admin, array $fields)
{
return $fields;
}
public function preUpdate(AdminInterface $admin, $object)
{
}
public function postUpdate(AdminInterface $admin, $object)
{
}
public function prePersist(AdminInterface $admin, $object)
{
}
public function postPersist(AdminInterface $admin, $object)
{
}
public function preRemove(AdminInterface $admin, $object)
{
}
public function postRemove(AdminInterface $admin, $object)
{
}
public function configureActionButtons(AdminInterface $admin, $list, $action, $object)
{
return $list;
}
public function configureDefaultFilterValues(AdminInterface $admin, array &$filterValues)
{
}
}
}
namespace Sonata\AdminBundle\Admin
{
use Doctrine\Common\Inflector\Inflector;
use Doctrine\Common\Util\ClassUtils;
use Sonata\AdminBundle\Exception\NoValueException;
use Sonata\AdminBundle\Util\FormBuilderIterator;
use Sonata\AdminBundle\Util\FormViewIterator;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;
use Symfony\Component\PropertyAccess\Exception\UnexpectedTypeException;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
class AdminHelper
{
protected $pool;
public function __construct(Pool $pool)
{
$this->pool = $pool;
}
public function getChildFormBuilder(FormBuilderInterface $formBuilder, $elementId)
{
foreach (new FormBuilderIterator($formBuilder) as $name => $formBuilder) {
if ($name == $elementId) {
return $formBuilder;
}
}
return;
}
public function getChildFormView(FormView $formView, $elementId)
{
foreach (new \RecursiveIteratorIterator(new FormViewIterator($formView), \RecursiveIteratorIterator::SELF_FIRST) as $name => $formView) {
if ($name === $elementId) {
return $formView;
}
}
return;
}
public function getAdmin($code)
{
return $this->pool->getInstance($code);
}
public function appendFormFieldElement(AdminInterface $admin, $subject, $elementId)
{
$formBuilder = $admin->getFormBuilder();
$form = $formBuilder->getForm();
$form->setData($subject);
$form->handleRequest($admin->getRequest());
$childFormBuilder = $this->getChildFormBuilder($formBuilder, $elementId);
if (!$childFormBuilder) {
$propertyAccessor = $this->pool->getPropertyAccessor();
$entity = $admin->getSubject();
$path = $this->getElementAccessPath($elementId, $entity);
$collection = $propertyAccessor->getValue($entity, $path);
if ($collection instanceof \Doctrine\ORM\PersistentCollection || $collection instanceof \Doctrine\ODM\MongoDB\PersistentCollection) {
$entityClassName = $collection->getTypeClass()->getName();
} elseif ($collection instanceof \Doctrine\Common\Collections\Collection) {
$entityClassName = $this->getEntityClassName($admin, explode('.', preg_replace('#\[\d*?\]#','', $path)));
} else {
throw new \Exception('unknown collection class');
}
$collection->add(new $entityClassName());
$propertyAccessor->setValue($entity, $path, $collection);
$fieldDescription = null;
} else {
$fieldDescription = $admin->getFormFieldDescription($childFormBuilder->getName());
try {
$value = $fieldDescription->getValue($form->getData());
} catch (NoValueException $e) {
$value = null;
}
$data = $admin->getRequest()->get($formBuilder->getName());
if (!isset($data[$childFormBuilder->getName()])) {
$data[$childFormBuilder->getName()] = array();
}
$objectCount = count($value);
$postCount = count($data[$childFormBuilder->getName()]);
$fields = array_keys($fieldDescription->getAssociationAdmin()->getFormFieldDescriptions());
$value = array();
foreach ($fields as $name) {
$value[$name] ='';
}
while ($objectCount < $postCount) {
$this->addNewInstance($form->getData(), $fieldDescription);
++$objectCount;
}
$this->addNewInstance($form->getData(), $fieldDescription);
}
$finalForm = $admin->getFormBuilder()->getForm();
$finalForm->setData($subject);
$finalForm->setData($form->getData());
return array($fieldDescription, $finalForm);
}
public function addNewInstance($object, FieldDescriptionInterface $fieldDescription)
{
$instance = $fieldDescription->getAssociationAdmin()->getNewInstance();
$mapping = $fieldDescription->getAssociationMapping();
$method = sprintf('add%s', Inflector::classify($mapping['fieldName']));
if (!method_exists($object, $method)) {
$method = rtrim($method,'s');
if (!method_exists($object, $method)) {
$method = sprintf('add%s', Inflector::classify(Inflector::singularize($mapping['fieldName'])));
if (!method_exists($object, $method)) {
throw new \RuntimeException(
sprintf('Please add a method %s in the %s class!', $method, ClassUtils::getClass($object))
);
}
}
}
$object->$method($instance);
}
public function camelize($property)
{
@trigger_error(
sprintf('The %s method is deprecated since 3.1 and will be removed in 4.0. '.'Use \Doctrine\Common\Inflector\Inflector::classify() instead.',
__METHOD__
),
E_USER_DEPRECATED
);
return Inflector::classify($property);
}
public function getElementAccessPath($elementId, $entity)
{
$propertyAccessor = $this->pool->getPropertyAccessor();
$idWithoutIdentifier = preg_replace('/^[^_]*_/','', $elementId);
$initialPath = preg_replace('#(_(\d+)_)#','[$2]_', $idWithoutIdentifier);
$parts = explode('_', $initialPath);
$totalPath ='';
$currentPath ='';
foreach ($parts as $part) {
$currentPath .= empty($currentPath) ? $part :'_'.$part;
$separator = empty($totalPath) ?'':'.';
if ($this->pathExists($propertyAccessor, $entity, $totalPath.$separator.$currentPath)) {
$totalPath .= $separator.$currentPath;
$currentPath ='';
}
}
if (!empty($currentPath)) {
throw new \Exception(
sprintf('Could not get element id from %s Failing part: %s', $elementId, $currentPath)
);
}
return $totalPath;
}
protected function getEntityClassName(AdminInterface $admin, $elements)
{
$element = array_shift($elements);
$associationAdmin = $admin->getFormFieldDescription($element)->getAssociationAdmin();
if (count($elements) == 0) {
return $associationAdmin->getClass();
}
return $this->getEntityClassName($associationAdmin, $elements);
}
private function pathExists(PropertyAccessorInterface $propertyAccessor, $entity, $path)
{
if (method_exists($propertyAccessor,'isReadable')) {
return $propertyAccessor->isReadable($entity, $path);
}
try {
$propertyAccessor->getValue($entity, $path);
return true;
} catch (NoSuchPropertyException $e) {
return false;
} catch (UnexpectedTypeException $e) {
return false;
}
}
}
}
namespace Sonata\AdminBundle\Admin
{
interface FieldDescriptionInterface
{
public function setFieldName($fieldName);
public function getFieldName();
public function setName($name);
public function getName();
public function getOption($name, $default = null);
public function setOption($name, $value);
public function setOptions(array $options);
public function getOptions();
public function setTemplate($template);
public function getTemplate();
public function setType($type);
public function getType();
public function setParent(AdminInterface $parent);
public function getParent();
public function setAssociationMapping($associationMapping);
public function getAssociationMapping();
public function getTargetEntity();
public function setFieldMapping($fieldMapping);
public function getFieldMapping();
public function setParentAssociationMappings(array $parentAssociationMappings);
public function getParentAssociationMappings();
public function setAssociationAdmin(AdminInterface $associationAdmin);
public function getAssociationAdmin();
public function isIdentifier();
public function getValue($object);
public function setAdmin(AdminInterface $admin);
public function getAdmin();
public function mergeOption($name, array $options = array());
public function mergeOptions(array $options = array());
public function setMappingType($mappingType);
public function getMappingType();
public function getLabel();
public function getTranslationDomain();
public function isSortable();
public function getSortFieldMapping();
public function getSortParentAssociationMapping();
public function getFieldValue($object, $fieldName);
}
}
namespace Sonata\AdminBundle\Admin
{
use Doctrine\Common\Inflector\Inflector;
use Sonata\AdminBundle\Exception\NoValueException;
abstract class BaseFieldDescription implements FieldDescriptionInterface
{
protected $name;
protected $type;
protected $mappingType;
protected $fieldName;
protected $associationMapping;
protected $fieldMapping;
protected $parentAssociationMappings;
protected $template;
protected $options = array();
protected $parent = null;
protected $admin;
protected $associationAdmin;
protected $help;
public function setFieldName($fieldName)
{
$this->fieldName = $fieldName;
}
public function getFieldName()
{
return $this->fieldName;
}
public function setName($name)
{
$this->name = $name;
if (!$this->getFieldName()) {
$this->setFieldName(substr(strrchr('.'.$name,'.'), 1));
}
}
public function getName()
{
return $this->name;
}
public function getOption($name, $default = null)
{
return isset($this->options[$name]) ? $this->options[$name] : $default;
}
public function setOption($name, $value)
{
$this->options[$name] = $value;
}
public function setOptions(array $options)
{
if (isset($options['type'])) {
$this->setType($options['type']);
unset($options['type']);
}
if (isset($options['template'])) {
$this->setTemplate($options['template']);
unset($options['template']);
}
if (isset($options['help'])) {
$this->setHelp($options['help']);
unset($options['help']);
}
if (!isset($options['placeholder'])) {
$options['placeholder'] ='short_object_description_placeholder';
}
if (!isset($options['link_parameters'])) {
$options['link_parameters'] = array();
}
$this->options = $options;
}
public function getOptions()
{
return $this->options;
}
public function setTemplate($template)
{
$this->template = $template;
}
public function getTemplate()
{
return $this->template;
}
public function setType($type)
{
$this->type = $type;
}
public function getType()
{
return $this->type;
}
public function setParent(AdminInterface $parent)
{
$this->parent = $parent;
}
public function getParent()
{
return $this->parent;
}
public function getAssociationMapping()
{
return $this->associationMapping;
}
public function getFieldMapping()
{
return $this->fieldMapping;
}
public function getParentAssociationMappings()
{
return $this->parentAssociationMappings;
}
public function setAssociationAdmin(AdminInterface $associationAdmin)
{
$this->associationAdmin = $associationAdmin;
$this->associationAdmin->setParentFieldDescription($this);
}
public function getAssociationAdmin()
{
return $this->associationAdmin;
}
public function hasAssociationAdmin()
{
return $this->associationAdmin !== null;
}
public function getFieldValue($object, $fieldName)
{
if ($this->isVirtual()) {
return;
}
$camelizedFieldName = Inflector::classify($fieldName);
$getters = array();
$parameters = array();
if ($this->getOption('code')) {
$getters[] = $this->getOption('code');
}
if ($this->getOption('parameters')) {
$parameters = $this->getOption('parameters');
}
$getters[] ='get'.$camelizedFieldName;
$getters[] ='is'.$camelizedFieldName;
foreach ($getters as $getter) {
if (method_exists($object, $getter)) {
return call_user_func_array(array($object, $getter), $parameters);
}
}
if (method_exists($object,'__call')) {
return call_user_func_array(array($object,'__call'), array($fieldName, $parameters));
}
if (isset($object->{$fieldName})) {
return $object->{$fieldName};
}
throw new NoValueException(sprintf('Unable to retrieve the value of `%s`', $this->getName()));
}
public function setAdmin(AdminInterface $admin)
{
$this->admin = $admin;
}
public function getAdmin()
{
return $this->admin;
}
public function mergeOption($name, array $options = array())
{
if (!isset($this->options[$name])) {
$this->options[$name] = array();
}
if (!is_array($this->options[$name])) {
throw new \RuntimeException(sprintf('The key `%s` does not point to an array value', $name));
}
$this->options[$name] = array_merge($this->options[$name], $options);
}
public function mergeOptions(array $options = array())
{
$this->setOptions(array_merge_recursive($this->options, $options));
}
public function setMappingType($mappingType)
{
$this->mappingType = $mappingType;
}
public function getMappingType()
{
return $this->mappingType;
}
public static function camelize($property)
{
@trigger_error(
sprintf('The %s method is deprecated since 3.1 and will be removed in 4.0. '.'Use \Doctrine\Common\Inflector\Inflector::classify() instead.',
__METHOD__
),
E_USER_DEPRECATED
);
return Inflector::classify($property);
}
public function setHelp($help)
{
$this->help = $help;
}
public function getHelp()
{
return $this->help;
}
public function getLabel()
{
return $this->getOption('label');
}
public function isSortable()
{
return false !== $this->getOption('sortable', false);
}
public function getSortFieldMapping()
{
return $this->getOption('sort_field_mapping');
}
public function getSortParentAssociationMapping()
{
return $this->getOption('sort_parent_association_mappings');
}
public function getTranslationDomain()
{
return $this->getOption('translation_domain') ?: $this->getAdmin()->getTranslationDomain();
}
public function isVirtual()
{
return false !== $this->getOption('virtual_field', false);
}
}
}
namespace Sonata\AdminBundle\Admin
{
class FieldDescriptionCollection implements \ArrayAccess, \Countable
{
protected $elements = array();
public function add(FieldDescriptionInterface $fieldDescription)
{
$this->elements[$fieldDescription->getName()] = $fieldDescription;
}
public function getElements()
{
return $this->elements;
}
public function has($name)
{
return array_key_exists($name, $this->elements);
}
public function get($name)
{
if ($this->has($name)) {
return $this->elements[$name];
}
throw new \InvalidArgumentException(sprintf('Element "%s" does not exist.', $name));
}
public function remove($name)
{
if ($this->has($name)) {
unset($this->elements[$name]);
}
}
public function offsetExists($offset)
{
return $this->has($offset);
}
public function offsetGet($offset)
{
return $this->get($offset);
}
public function offsetSet($offset, $value)
{
throw new \RuntimeException('Cannot set value, use add');
}
public function offsetUnset($offset)
{
$this->remove($offset);
}
public function count()
{
return count($this->elements);
}
public function reorder(array $keys)
{
if ($this->has('batch')) {
array_unshift($keys,'batch');
}
$this->elements = array_merge(array_flip($keys), $this->elements);
}
}
}
namespace Sonata\AdminBundle\Admin
{
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
class Pool
{
protected $container;
protected $adminServiceIds = array();
protected $adminGroups = array();
protected $adminClasses = array();
protected $templates = array();
protected $assets = array();
protected $title;
protected $titleLogo;
protected $options;
protected $propertyAccessor;
public function __construct(ContainerInterface $container, $title, $logoTitle, $options = array(), PropertyAccessorInterface $propertyAccessor = null)
{
$this->container = $container;
$this->title = $title;
$this->titleLogo = $logoTitle;
$this->options = $options;
$this->propertyAccessor = $propertyAccessor;
}
public function getGroups()
{
$groups = $this->adminGroups;
foreach ($this->adminGroups as $name => $adminGroup) {
foreach ($adminGroup as $id => $options) {
$groups[$name][$id] = $this->getInstance($id);
}
}
return $groups;
}
public function hasGroup($group)
{
return isset($this->adminGroups[$group]);
}
public function getDashboardGroups()
{
$groups = $this->adminGroups;
foreach ($this->adminGroups as $name => $adminGroup) {
if (isset($adminGroup['items'])) {
foreach ($adminGroup['items'] as $key => $item) {
if (''!= $item['admin']) {
$admin = $this->getInstance($item['admin']);
if ($admin->showIn(AbstractAdmin::CONTEXT_DASHBOARD)) {
$groups[$name]['items'][$key] = $admin;
} else {
unset($groups[$name]['items'][$key]);
}
} else {
unset($groups[$name]['items'][$key]);
}
}
}
if (empty($groups[$name]['items'])) {
unset($groups[$name]);
}
}
return $groups;
}
public function getAdminsByGroup($group)
{
if (!isset($this->adminGroups[$group])) {
throw new \InvalidArgumentException(sprintf('Group "%s" not found in admin pool.', $group));
}
$admins = array();
if (!isset($this->adminGroups[$group]['items'])) {
return $admins;
}
foreach ($this->adminGroups[$group]['items'] as $item) {
$admins[] = $this->getInstance($item['admin']);
}
return $admins;
}
public function getAdminByClass($class)
{
if (!$this->hasAdminByClass($class)) {
return;
}
if (!is_array($this->adminClasses[$class])) {
throw new \RuntimeException('Invalid format for the Pool::adminClass property');
}
if (count($this->adminClasses[$class]) > 1) {
throw new \RuntimeException(sprintf('Unable to find a valid admin for the class: %s, there are too many registered: %s',
$class,
implode(', ', $this->adminClasses[$class])
));
}
return $this->getInstance($this->adminClasses[$class][0]);
}
public function hasAdminByClass($class)
{
return isset($this->adminClasses[$class]);
}
public function getAdminByAdminCode($adminCode)
{
$codes = explode('|', $adminCode);
$admin = false;
foreach ($codes as $code) {
if ($admin == false) {
$admin = $this->getInstance($code);
} elseif ($admin->hasChild($code)) {
$admin = $admin->getChild($code);
}
}
return $admin;
}
public function getInstance($id)
{
if (!in_array($id, $this->adminServiceIds)) {
throw new \InvalidArgumentException(sprintf('Admin service "%s" not found in admin pool.', $id));
}
return $this->container->get($id);
}
public function getContainer()
{
return $this->container;
}
public function setAdminGroups(array $adminGroups)
{
$this->adminGroups = $adminGroups;
}
public function getAdminGroups()
{
return $this->adminGroups;
}
public function setAdminServiceIds(array $adminServiceIds)
{
$this->adminServiceIds = $adminServiceIds;
}
public function getAdminServiceIds()
{
return $this->adminServiceIds;
}
public function setAdminClasses(array $adminClasses)
{
$this->adminClasses = $adminClasses;
}
public function getAdminClasses()
{
return $this->adminClasses;
}
public function setTemplates(array $templates)
{
$this->templates = $templates;
}
public function getTemplates()
{
return $this->templates;
}
public function getTemplate($name)
{
if (isset($this->templates[$name])) {
return $this->templates[$name];
}
}
public function getTitleLogo()
{
return $this->titleLogo;
}
public function getTitle()
{
return $this->title;
}
public function getOption($name, $default = null)
{
if (isset($this->options[$name])) {
return $this->options[$name];
}
return $default;
}
public function getPropertyAccessor()
{
if (null === $this->propertyAccessor) {
$this->propertyAccessor = PropertyAccess::createPropertyAccessor();
}
return $this->propertyAccessor;
}
}
}
namespace Sonata\AdminBundle\Block
{
use Sonata\AdminBundle\Admin\Pool;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Block\Service\AbstractBlockService;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
class AdminListBlockService extends AbstractBlockService
{
protected $pool;
public function __construct($name, EngineInterface $templating, Pool $pool)
{
parent::__construct($name, $templating);
$this->pool = $pool;
}
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
$dashboardGroups = $this->pool->getDashboardGroups();
$settings = $blockContext->getSettings();
$visibleGroups = array();
foreach ($dashboardGroups as $name => $dashboardGroup) {
if (!$settings['groups'] || in_array($name, $settings['groups'])) {
$visibleGroups[] = $dashboardGroup;
}
}
return $this->renderPrivateResponse($this->pool->getTemplate('list_block'), array('block'=> $blockContext->getBlock(),'settings'=> $settings,'admin_pool'=> $this->pool,'groups'=> $visibleGroups,
), $response);
}
public function getName()
{
return'Admin List';
}
public function configureSettings(OptionsResolver $resolver)
{
$resolver->setDefaults(array('groups'=> false,
));
if (method_exists($resolver,'setNormalizer')) {
$resolver->setAllowedTypes('groups', array('bool','array'));
} else {
$resolver->setAllowedTypes(array('groups'=> array('bool','array'),
));
}
}
}
}
namespace Sonata\AdminBundle\Builder
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
interface BuilderInterface
{
public function fixFieldDescription(AdminInterface $admin, FieldDescriptionInterface $fieldDescription);
}
}
namespace Sonata\AdminBundle\Builder
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Datagrid\DatagridInterface;
interface DatagridBuilderInterface extends BuilderInterface
{
public function addFilter(DatagridInterface $datagrid, $type, FieldDescriptionInterface $fieldDescription, AdminInterface $admin);
public function getBaseDatagrid(AdminInterface $admin, array $values = array());
}
}
namespace Sonata\AdminBundle\Builder
{
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryInterface;
interface FormContractorInterface extends BuilderInterface
{
public function __construct(FormFactoryInterface $formFactory);
public function getFormBuilder($name, array $options = array());
public function getDefaultOptions($type, FieldDescriptionInterface $fieldDescription);
}
}
namespace Sonata\AdminBundle\Builder
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionCollection;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
interface ListBuilderInterface extends BuilderInterface
{
public function getBaseList(array $options = array());
public function buildField($type, FieldDescriptionInterface $fieldDescription, AdminInterface $admin);
public function addField(FieldDescriptionCollection $list, $type, FieldDescriptionInterface $fieldDescription, AdminInterface $admin);
}
}
namespace Sonata\AdminBundle\Builder
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Route\RouteCollection;
interface RouteBuilderInterface
{
public function build(AdminInterface $admin, RouteCollection $collection);
}
}
namespace Sonata\AdminBundle\Builder
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionCollection;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
interface ShowBuilderInterface extends BuilderInterface
{
public function getBaseList(array $options = array());
public function addField(FieldDescriptionCollection $list, $type, FieldDescriptionInterface $fieldDescription, AdminInterface $admin);
}
}
namespace Sonata\AdminBundle\Datagrid
{
use Sonata\AdminBundle\Admin\FieldDescriptionCollection;
use Sonata\AdminBundle\Filter\FilterInterface;
use Symfony\Component\Form\FormInterface;
interface DatagridInterface
{
public function getPager();
public function getQuery();
public function getResults();
public function buildPager();
public function addFilter(FilterInterface $filter);
public function getFilters();
public function reorderFilters(array $keys);
public function getValues();
public function getColumns();
public function setValue($name, $operator, $value);
public function getForm();
public function getFilter($name);
public function hasFilter($name);
public function removeFilter($name);
public function hasActiveFilters();
public function hasDisplayableFilters();
}
}
namespace Sonata\AdminBundle\Datagrid
{
use Sonata\AdminBundle\Admin\FieldDescriptionCollection;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Filter\FilterInterface;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
class Datagrid implements DatagridInterface
{
protected $filters = array();
protected $values;
protected $columns;
protected $pager;
protected $bound = false;
protected $query;
protected $formBuilder;
protected $form;
protected $results;
public function __construct(ProxyQueryInterface $query, FieldDescriptionCollection $columns, PagerInterface $pager, FormBuilderInterface $formBuilder, array $values = array())
{
$this->pager = $pager;
$this->query = $query;
$this->values = $values;
$this->columns = $columns;
$this->formBuilder = $formBuilder;
}
public function getPager()
{
return $this->pager;
}
public function getResults()
{
$this->buildPager();
if (!$this->results) {
$this->results = $this->pager->getResults();
}
return $this->results;
}
public function buildPager()
{
if ($this->bound) {
return;
}
foreach ($this->getFilters() as $name => $filter) {
list($type, $options) = $filter->getRenderSettings();
$this->formBuilder->add($filter->getFormName(), $type, $options);
}
$hiddenType = method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\HiddenType':'hidden';
$this->formBuilder->add('_sort_by', $hiddenType);
$this->formBuilder->get('_sort_by')->addViewTransformer(new CallbackTransformer(
function ($value) {
return $value;
},
function ($value) {
return $value instanceof FieldDescriptionInterface ? $value->getName() : $value;
}
));
$this->formBuilder->add('_sort_order', $hiddenType);
$this->formBuilder->add('_page', $hiddenType);
$this->formBuilder->add('_per_page', $hiddenType);
$this->form = $this->formBuilder->getForm();
$this->form->submit($this->values);
$data = $this->form->getData();
foreach ($this->getFilters() as $name => $filter) {
$this->values[$name] = isset($this->values[$name]) ? $this->values[$name] : null;
$filter->apply($this->query, $data[$filter->getFormName()]);
}
if (isset($this->values['_sort_by'])) {
if (!$this->values['_sort_by'] instanceof FieldDescriptionInterface) {
throw new UnexpectedTypeException($this->values['_sort_by'],'FieldDescriptionInterface');
}
if ($this->values['_sort_by']->isSortable()) {
$this->query->setSortBy($this->values['_sort_by']->getSortParentAssociationMapping(), $this->values['_sort_by']->getSortFieldMapping());
$this->query->setSortOrder(isset($this->values['_sort_order']) ? $this->values['_sort_order'] : null);
}
}
$maxPerPage = 25;
if (isset($this->values['_per_page'])) {
if (is_array($this->values['_per_page'])) {
if (isset($this->values['_per_page']['value'])) {
$maxPerPage = $this->values['_per_page']['value'];
}
} else {
$maxPerPage = $this->values['_per_page'];
}
}
$this->pager->setMaxPerPage($maxPerPage);
$page = 1;
if (isset($this->values['_page'])) {
if (is_array($this->values['_page'])) {
if (isset($this->values['_page']['value'])) {
$page = $this->values['_page']['value'];
}
} else {
$page = $this->values['_page'];
}
}
$this->pager->setPage($page);
$this->pager->setQuery($this->query);
$this->pager->init();
$this->bound = true;
}
public function addFilter(FilterInterface $filter)
{
$this->filters[$filter->getName()] = $filter;
}
public function hasFilter($name)
{
return isset($this->filters[$name]);
}
public function removeFilter($name)
{
unset($this->filters[$name]);
}
public function getFilter($name)
{
return $this->hasFilter($name) ? $this->filters[$name] : null;
}
public function getFilters()
{
return $this->filters;
}
public function reorderFilters(array $keys)
{
$this->filters = array_merge(array_flip($keys), $this->filters);
}
public function getValues()
{
return $this->values;
}
public function setValue($name, $operator, $value)
{
$this->values[$name] = array('type'=> $operator,'value'=> $value,
);
}
public function hasActiveFilters()
{
foreach ($this->filters as $name => $filter) {
if ($filter->isActive()) {
return true;
}
}
return false;
}
public function hasDisplayableFilters()
{
foreach ($this->filters as $name => $filter) {
$showFilter = $filter->getOption('show_filter', null);
if (($filter->isActive() && $showFilter === null) || ($showFilter === true)) {
return true;
}
}
return false;
}
public function getColumns()
{
return $this->columns;
}
public function getQuery()
{
return $this->query;
}
public function getForm()
{
$this->buildPager();
return $this->form;
}
}
}
namespace Sonata\AdminBundle\Mapper
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Builder\BuilderInterface;
abstract class BaseMapper
{
protected $admin;
protected $builder;
public function __construct(BuilderInterface $builder, AdminInterface $admin)
{
$this->builder = $builder;
$this->admin = $admin;
}
public function getAdmin()
{
return $this->admin;
}
abstract public function get($key);
abstract public function has($key);
abstract public function remove($key);
abstract public function reorder(array $keys);
}
}
namespace Sonata\AdminBundle\Datagrid
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Builder\DatagridBuilderInterface;
use Sonata\AdminBundle\Mapper\BaseMapper;
class DatagridMapper extends BaseMapper
{
protected $datagrid;
public function __construct(DatagridBuilderInterface $datagridBuilder, DatagridInterface $datagrid, AdminInterface $admin)
{
parent::__construct($datagridBuilder, $admin);
$this->datagrid = $datagrid;
}
public function add($name, $type = null, array $filterOptions = array(), $fieldType = null, $fieldOptions = null, array $fieldDescriptionOptions = array())
{
if (is_array($fieldOptions)) {
$filterOptions['field_options'] = $fieldOptions;
}
if ($fieldType) {
$filterOptions['field_type'] = $fieldType;
}
if ($name instanceof FieldDescriptionInterface) {
$fieldDescription = $name;
$fieldDescription->mergeOptions($filterOptions);
} elseif (is_string($name)) {
if ($this->admin->hasFilterFieldDescription($name)) {
throw new \RuntimeException(sprintf('Duplicate field name "%s" in datagrid mapper. Names should be unique.', $name));
}
if (!isset($filterOptions['field_name'])) {
$filterOptions['field_name'] = substr(strrchr('.'.$name,'.'), 1);
}
$fieldDescription = $this->admin->getModelManager()->getNewFieldDescriptionInstance(
$this->admin->getClass(),
$name,
array_merge($filterOptions, $fieldDescriptionOptions)
);
} else {
throw new \RuntimeException('Unknown field name in datagrid mapper.'.' Field name should be either of FieldDescriptionInterface interface or string.');
}
$this->builder->addFilter($this->datagrid, $type, $fieldDescription, $this->admin);
return $this;
}
public function get($name)
{
return $this->datagrid->getFilter($name);
}
public function has($key)
{
return $this->datagrid->hasFilter($key);
}
final public function keys()
{
return array_keys($this->datagrid->getFilters());
}
public function remove($key)
{
$this->admin->removeFilterFieldDescription($key);
$this->datagrid->removeFilter($key);
return $this;
}
public function reorder(array $keys)
{
$this->datagrid->reorderFilters($keys);
return $this;
}
}
}
namespace Sonata\AdminBundle\Datagrid
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionCollection;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Builder\ListBuilderInterface;
use Sonata\AdminBundle\Mapper\BaseMapper;
class ListMapper extends BaseMapper
{
protected $list;
public function __construct(ListBuilderInterface $listBuilder, FieldDescriptionCollection $list, AdminInterface $admin)
{
parent::__construct($listBuilder, $admin);
$this->list = $list;
}
public function addIdentifier($name, $type = null, array $fieldDescriptionOptions = array())
{
$fieldDescriptionOptions['identifier'] = true;
if (!isset($fieldDescriptionOptions['route']['name'])) {
$routeName = ($this->admin->hasAccess('edit') && $this->admin->hasRoute('edit')) ?'edit':'show';
$fieldDescriptionOptions['route']['name'] = $routeName;
}
if (!isset($fieldDescriptionOptions['route']['parameters'])) {
$fieldDescriptionOptions['route']['parameters'] = array();
}
return $this->add($name, $type, $fieldDescriptionOptions);
}
public function add($name, $type = null, array $fieldDescriptionOptions = array())
{
if ($name =='_action'&& $type =='actions') {
if (isset($fieldDescriptionOptions['actions']['view'])) {
@trigger_error('Inline action "view" is deprecated since version 2.2.4 and will be removed in 4.0. '.'Use inline action "show" instead.',
E_USER_DEPRECATED
);
$fieldDescriptionOptions['actions']['show'] = $fieldDescriptionOptions['actions']['view'];
unset($fieldDescriptionOptions['actions']['view']);
}
}
if (in_array($type, array('actions','batch','select'))) {
$fieldDescriptionOptions['virtual_field'] = true;
}
if ($name instanceof FieldDescriptionInterface) {
$fieldDescription = $name;
$fieldDescription->mergeOptions($fieldDescriptionOptions);
} elseif (is_string($name)) {
if ($this->admin->hasListFieldDescription($name)) {
throw new \RuntimeException(sprintf('Duplicate field name "%s" in list mapper. Names should be unique.',
$name
));
}
$fieldDescription = $this->admin->getModelManager()->getNewFieldDescriptionInstance(
$this->admin->getClass(),
$name,
$fieldDescriptionOptions
);
} else {
throw new \RuntimeException('Unknown field name in list mapper. '.'Field name should be either of FieldDescriptionInterface interface or string.');
}
if (!$fieldDescription->getLabel()) {
$fieldDescription->setOption('label',
$this->admin->getLabelTranslatorStrategy()->getLabel($fieldDescription->getName(),'list','label')
);
}
$this->builder->addField($this->list, $type, $fieldDescription, $this->admin);
return $this;
}
public function get($name)
{
return $this->list->get($name);
}
public function has($key)
{
return $this->list->has($key);
}
public function remove($key)
{
$this->admin->removeListFieldDescription($key);
$this->list->remove($key);
return $this;
}
final public function keys()
{
return array_keys($this->list->getElements());
}
public function reorder(array $keys)
{
$this->list->reorder($keys);
return $this;
}
}
}
namespace Sonata\AdminBundle\Datagrid
{
interface PagerInterface
{
public function init();
public function getMaxPerPage();
public function setMaxPerPage($max);
public function setPage($page);
public function setQuery($query);
public function getResults();
public function setMaxPageLinks($maxPageLinks);
public function getMaxPageLinks();
}
}
namespace Sonata\AdminBundle\Datagrid
{
abstract class Pager implements \Iterator, \Countable, \Serializable, PagerInterface
{
const TYPE_DEFAULT ='default';
const TYPE_SIMPLE ='simple';
protected $page = 1;
protected $maxPerPage = 0;
protected $lastPage = 1;
protected $nbResults = 0;
protected $cursor = 1;
protected $parameters = array();
protected $currentMaxLink = 1;
protected $maxRecordLimit = false;
protected $maxPageLinks = 0;
protected $results = null;
protected $resultsCounter = 0;
protected $query = null;
protected $countColumn = array('id');
public function __construct($maxPerPage = 10)
{
$this->setMaxPerPage($maxPerPage);
}
public function getCurrentMaxLink()
{
return $this->currentMaxLink;
}
public function getMaxRecordLimit()
{
return $this->maxRecordLimit;
}
public function setMaxRecordLimit($limit)
{
$this->maxRecordLimit = $limit;
}
public function getLinks($nbLinks = null)
{
if ($nbLinks == null) {
$nbLinks = $this->getMaxPageLinks();
}
$links = array();
$tmp = $this->page - floor($nbLinks / 2);
$check = $this->lastPage - $nbLinks + 1;
$limit = $check > 0 ? $check : 1;
$begin = $tmp > 0 ? ($tmp > $limit ? $limit : $tmp) : 1;
$i = (int) $begin;
while ($i < $begin + $nbLinks && $i <= $this->lastPage) {
$links[] = $i++;
}
$this->currentMaxLink = count($links) ? $links[count($links) - 1] : 1;
return $links;
}
public function haveToPaginate()
{
return $this->getMaxPerPage() && $this->getNbResults() > $this->getMaxPerPage();
}
public function getCursor()
{
return $this->cursor;
}
public function setCursor($pos)
{
if ($pos < 1) {
$this->cursor = 1;
} else {
if ($pos > $this->nbResults) {
$this->cursor = $this->nbResults;
} else {
$this->cursor = $pos;
}
}
}
public function getObjectByCursor($pos)
{
$this->setCursor($pos);
return $this->getCurrent();
}
public function getCurrent()
{
return $this->retrieveObject($this->cursor);
}
public function getNext()
{
if ($this->cursor + 1 > $this->nbResults) {
return;
}
return $this->retrieveObject($this->cursor + 1);
}
public function getPrevious()
{
if ($this->cursor - 1 < 1) {
return;
}
return $this->retrieveObject($this->cursor - 1);
}
public function getFirstIndex()
{
if ($this->page == 0) {
return 1;
}
return ($this->page - 1) * $this->maxPerPage + 1;
}
public function getFirstIndice()
{
@trigger_error('Method '.__METHOD__.' is deprecated since version 3.11 and will be removed in 4.0, '.'please use getFirstIndex() instead.',
E_USER_DEPRECATED
);
return $this->getFirstIndex();
}
public function getLastIndex()
{
if ($this->page == 0) {
return $this->nbResults;
}
if ($this->page * $this->maxPerPage >= $this->nbResults) {
return $this->nbResults;
}
return $this->page * $this->maxPerPage;
}
public function getLastIndice()
{
@trigger_error('Method '.__METHOD__.' is deprecated since version 3.11 and will be removed in 4.0, '.'please use getLastIndex() instead.',
E_USER_DEPRECATED
);
return $this->getLastIndex();
}
public function getNbResults()
{
return $this->nbResults;
}
public function getFirstPage()
{
return 1;
}
public function getLastPage()
{
return $this->lastPage;
}
public function getPage()
{
return $this->page;
}
public function getNextPage()
{
return min($this->getPage() + 1, $this->getLastPage());
}
public function getPreviousPage()
{
return max($this->getPage() - 1, $this->getFirstPage());
}
public function setPage($page)
{
$this->page = intval($page);
if ($this->page <= 0) {
$this->page = $this->getMaxPerPage() ? 1 : 0;
}
}
public function getMaxPerPage()
{
return $this->maxPerPage;
}
public function setMaxPerPage($max)
{
if ($max > 0) {
$this->maxPerPage = $max;
if ($this->page == 0) {
$this->page = 1;
}
} else {
if ($max == 0) {
$this->maxPerPage = 0;
$this->page = 0;
} else {
$this->maxPerPage = 1;
if ($this->page == 0) {
$this->page = 1;
}
}
}
}
public function getMaxPageLinks()
{
return $this->maxPageLinks;
}
public function setMaxPageLinks($maxPageLinks)
{
$this->maxPageLinks = $maxPageLinks;
}
public function isFirstPage()
{
return 1 == $this->page;
}
public function isLastPage()
{
return $this->page == $this->lastPage;
}
public function getParameters()
{
return $this->parameters;
}
public function getParameter($name, $default = null)
{
return isset($this->parameters[$name]) ? $this->parameters[$name] : $default;
}
public function hasParameter($name)
{
return isset($this->parameters[$name]);
}
public function setParameter($name, $value)
{
$this->parameters[$name] = $value;
}
public function current()
{
if (!$this->isIteratorInitialized()) {
$this->initializeIterator();
}
return current($this->results);
}
public function key()
{
if (!$this->isIteratorInitialized()) {
$this->initializeIterator();
}
return key($this->results);
}
public function next()
{
if (!$this->isIteratorInitialized()) {
$this->initializeIterator();
}
--$this->resultsCounter;
return next($this->results);
}
public function rewind()
{
if (!$this->isIteratorInitialized()) {
$this->initializeIterator();
}
$this->resultsCounter = count($this->results);
return reset($this->results);
}
public function valid()
{
if (!$this->isIteratorInitialized()) {
$this->initializeIterator();
}
return $this->resultsCounter > 0;
}
public function count()
{
return $this->getNbResults();
}
public function serialize()
{
$vars = get_object_vars($this);
unset($vars['query']);
return serialize($vars);
}
public function unserialize($serialized)
{
$array = unserialize($serialized);
foreach ($array as $name => $values) {
$this->$name = $values;
}
}
public function getCountColumn()
{
return $this->countColumn;
}
public function setCountColumn(array $countColumn)
{
return $this->countColumn = $countColumn;
}
public function setQuery($query)
{
$this->query = $query;
}
public function getQuery()
{
return $this->query;
}
protected function setNbResults($nb)
{
$this->nbResults = $nb;
}
protected function setLastPage($page)
{
$this->lastPage = $page;
if ($this->getPage() > $page) {
$this->setPage($page);
}
}
protected function isIteratorInitialized()
{
return null !== $this->results;
}
protected function initializeIterator()
{
$this->results = $this->getResults();
$this->resultsCounter = count($this->results);
}
protected function resetIterator()
{
$this->results = null;
$this->resultsCounter = 0;
}
protected function retrieveObject($offset)
{
$queryForRetrieve = clone $this->getQuery();
$queryForRetrieve
->setFirstResult($offset - 1)
->setMaxResults(1);
$results = $queryForRetrieve->execute();
return $results[0];
}
}
}
namespace Sonata\AdminBundle\Datagrid
{
interface ProxyQueryInterface
{
public function __call($name, $args);
public function execute(array $params = array(), $hydrationMode = null);
public function setSortBy($parentAssociationMappings, $fieldMapping);
public function getSortBy();
public function setSortOrder($sortOrder);
public function getSortOrder();
public function getSingleScalarResult();
public function setFirstResult($firstResult);
public function getFirstResult();
public function setMaxResults($maxResults);
public function getMaxResults();
public function getUniqueParameterId();
public function entityJoin(array $associationMappings);
}
}
namespace Sonata\AdminBundle\Exception
{
class ModelManagerException extends \Exception
{
}
}
namespace Sonata\AdminBundle\Exception
{
class NoValueException extends \Exception
{
}
}
namespace Sonata\AdminBundle\Filter
{
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
interface FilterInterface
{
const CONDITION_OR ='OR';
const CONDITION_AND ='AND';
public function filter(ProxyQueryInterface $queryBuilder, $alias, $field, $value);
public function apply($query, $value);
public function getName();
public function getFormName();
public function getLabel();
public function setLabel($label);
public function getDefaultOptions();
public function getOption($name, $default = null);
public function setOption($name, $value);
public function initialize($name, array $options = array());
public function getFieldName();
public function getParentAssociationMappings();
public function getFieldMapping();
public function getAssociationMapping();
public function getFieldOptions();
public function getFieldOption($name, $default = null);
public function setFieldOption($name, $value);
public function getFieldType();
public function getRenderSettings();
public function isActive();
public function setCondition($condition);
public function getCondition();
public function getTranslationDomain();
}
}
namespace Sonata\AdminBundle\Filter
{
abstract class Filter implements FilterInterface
{
protected $name = null;
protected $value = null;
protected $options = array();
protected $condition;
public function initialize($name, array $options = array())
{
$this->name = $name;
$this->setOptions($options);
}
public function getName()
{
return $this->name;
}
public function getFormName()
{
return str_replace('.','__', $this->name);
}
public function getOption($name, $default = null)
{
if (array_key_exists($name, $this->options)) {
return $this->options[$name];
}
return $default;
}
public function setOption($name, $value)
{
$this->options[$name] = $value;
}
public function getFieldType()
{
return $this->getOption('field_type', method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\TextType':'text');
}
public function getFieldOptions()
{
return $this->getOption('field_options', array('required'=> false));
}
public function getFieldOption($name, $default = null)
{
if (isset($this->options['field_options'][$name]) && is_array($this->options['field_options'])) {
return $this->options['field_options'][$name];
}
return $default;
}
public function setFieldOption($name, $value)
{
$this->options['field_options'][$name] = $value;
}
public function getLabel()
{
return $this->getOption('label');
}
public function setLabel($label)
{
$this->setOption('label', $label);
}
public function getFieldName()
{
$fieldName = $this->getOption('field_name');
if (!$fieldName) {
throw new \RuntimeException(sprintf('The option `field_name` must be set for field: `%s`', $this->getName()));
}
return $fieldName;
}
public function getParentAssociationMappings()
{
return $this->getOption('parent_association_mappings', array());
}
public function getFieldMapping()
{
$fieldMapping = $this->getOption('field_mapping');
if (!$fieldMapping) {
throw new \RuntimeException(sprintf('The option `field_mapping` must be set for field: `%s`', $this->getName()));
}
return $fieldMapping;
}
public function getAssociationMapping()
{
$associationMapping = $this->getOption('association_mapping');
if (!$associationMapping) {
throw new \RuntimeException(sprintf('The option `association_mapping` must be set for field: `%s`', $this->getName()));
}
return $associationMapping;
}
public function setOptions(array $options)
{
$this->options = array_merge(
array('show_filter'=> null,'advanced_filter'=> true),
$this->getDefaultOptions(),
$options
);
}
public function getOptions()
{
return $this->options;
}
public function setValue($value)
{
$this->value = $value;
}
public function getValue()
{
return $this->value;
}
public function isActive()
{
$values = $this->getValue();
return isset($values['value'])
&& false !== $values['value']
&&''!== $values['value'];
}
public function setCondition($condition)
{
$this->condition = $condition;
}
public function getCondition()
{
return $this->condition;
}
public function getTranslationDomain()
{
return $this->getOption('translation_domain');
}
}
}
namespace Sonata\AdminBundle\Filter
{
interface FilterFactoryInterface
{
public function create($name, $type, array $options = array());
}
}
namespace Sonata\AdminBundle\Filter
{
use Symfony\Component\DependencyInjection\ContainerInterface;
class FilterFactory implements FilterFactoryInterface
{
protected $container;
protected $types;
public function __construct(ContainerInterface $container, array $types = array())
{
$this->container = $container;
$this->types = $types;
}
public function create($name, $type, array $options = array())
{
if (!$type) {
throw new \RuntimeException('The type must be defined');
}
$id = isset($this->types[$type]) ? $this->types[$type] : false;
if ($id) {
$filter = $this->container->get($id);
} elseif (class_exists($type)) {
$filter = new $type();
} else {
throw new \RuntimeException(sprintf('No attached service to type named `%s`', $type));
}
if (!$filter instanceof FilterInterface) {
throw new \RuntimeException(sprintf('The service `%s` must implement `FilterInterface`', $type));
}
$filter->initialize($name, $options);
return $filter;
}
}
}
namespace Symfony\Component\Form
{
use Symfony\Component\Form\Exception\TransformationFailedException;
interface DataTransformerInterface
{
public function transform($value);
public function reverseTransform($value);
}
}
namespace Sonata\AdminBundle\Form\DataTransformer
{
use Sonata\AdminBundle\Model\ModelManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
class ArrayToModelTransformer implements DataTransformerInterface
{
protected $modelManager;
protected $className;
public function __construct(ModelManagerInterface $modelManager, $className)
{
$this->modelManager = $modelManager;
$this->className = $className;
}
public function reverseTransform($array)
{
if ($array instanceof $this->className) {
return $array;
}
$instance = new $this->className();
if (!is_array($array)) {
return $instance;
}
return $this->modelManager->modelReverseTransform($this->className, $array);
}
public function transform($value)
{
return $value;
}
}
}
namespace Sonata\AdminBundle\Form\DataTransformer
{
use Doctrine\Common\Util\ClassUtils;
use Sonata\AdminBundle\Form\ChoiceList\ModelChoiceList;
use Sonata\AdminBundle\Form\ChoiceList\ModelChoiceLoader;
use Sonata\AdminBundle\Model\ModelManagerInterface;
use Sonata\CoreBundle\Model\Adapter\AdapterInterface;
use Symfony\Component\Form\ChoiceList\LazyChoiceList;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\RuntimeException;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
class ModelsToArrayTransformer implements DataTransformerInterface
{
protected $modelManager;
protected $class;
protected $choiceList;
public function __construct($choiceList, $modelManager, $class = null)
{
$args = func_get_args();
if (func_num_args() == 3) {
$this->legacyConstructor($args);
} else {
$this->modelManager = $args[0];
$this->class = $args[1];
}
}
public function __get($name)
{
if ('choiceList'=== $name) {
$this->triggerDeprecation();
}
return $this->$name;
}
public function __set($name, $value)
{
if ('choiceList'=== $name) {
$this->triggerDeprecation();
}
$this->$name = $value;
}
public function __isset($name)
{
if ('choiceList'=== $name) {
$this->triggerDeprecation();
}
return isset($this->$name);
}
public function __unset($name)
{
if ('choiceList'=== $name) {
$this->triggerDeprecation();
}
unset($this->$name);
}
public function transform($collection)
{
if (null === $collection) {
return array();
}
$array = array();
foreach ($collection as $key => $entity) {
$id = implode(AdapterInterface::ID_SEPARATOR, $this->getIdentifierValues($entity));
$array[] = $id;
}
return $array;
}
public function reverseTransform($keys)
{
if (!is_array($keys)) {
throw new UnexpectedTypeException($keys,'array');
}
$collection = $this->modelManager->getModelCollectionInstance($this->class);
$notFound = array();
foreach ($keys as $key) {
if ($entity = $this->modelManager->find($this->class, $key)) {
$collection[] = $entity;
} else {
$notFound[] = $key;
}
}
if (count($notFound) > 0) {
throw new TransformationFailedException(sprintf('The entities with keys "%s" could not be found', implode('", "', $notFound)));
}
return $collection;
}
private function legacyConstructor($args)
{
$choiceList = $args[0];
if (!$choiceList instanceof ModelChoiceList
&& !$choiceList instanceof ModelChoiceLoader
&& !$choiceList instanceof LazyChoiceList) {
throw new RuntimeException('First param passed to ModelsToArrayTransformer should be instance of
                ModelChoiceLoader or ModelChoiceList or LazyChoiceList');
}
$this->choiceList = $choiceList;
$this->modelManager = $args[1];
$this->class = $args[2];
}
private function getIdentifierValues($entity)
{
try {
return $this->modelManager->getIdentifierValues($entity);
} catch (\Exception $e) {
throw new \InvalidArgumentException(sprintf('Unable to retrieve the identifier values for entity %s', ClassUtils::getClass($entity)), 0, $e);
}
}
private function triggerDeprecation()
{
@trigger_error(sprintf('Using the "%s::$choiceList" property is deprecated since version 3.12 and will be removed in 4.0.',
__CLASS__),
E_USER_DEPRECATED)
;
}
}
}
namespace Sonata\AdminBundle\Form\DataTransformer
{
use Sonata\AdminBundle\Model\ModelManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
class ModelToIdTransformer implements DataTransformerInterface
{
protected $modelManager;
protected $className;
public function __construct(ModelManagerInterface $modelManager, $className)
{
$this->modelManager = $modelManager;
$this->className = $className;
}
public function reverseTransform($newId)
{
if (empty($newId) && !in_array($newId, array('0', 0), true)) {
return;
}
return $this->modelManager->find($this->className, $newId);
}
public function transform($entity)
{
if (empty($entity)) {
return;
}
return $this->modelManager->getNormalizedIdentifier($entity);
}
}
}
namespace Sonata\AdminBundle\Form\EventListener
{
use Sonata\AdminBundle\Model\ModelManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
class MergeCollectionListener implements EventSubscriberInterface
{
protected $modelManager;
public function __construct(ModelManagerInterface $modelManager)
{
$this->modelManager = $modelManager;
}
public static function getSubscribedEvents()
{
return array(
FormEvents::SUBMIT => array('onBind', 10),
);
}
public function onBind(FormEvent $event)
{
$collection = $event->getForm()->getData();
$data = $event->getData();
$event->stopPropagation();
if (!$collection) {
$collection = $data;
} elseif (count($data) === 0) {
$this->modelManager->collectionClear($collection);
} else {
foreach ($collection as $entity) {
if (!$this->modelManager->collectionHasElement($data, $entity)) {
$this->modelManager->collectionRemoveElement($collection, $entity);
} else {
$this->modelManager->collectionRemoveElement($data, $entity);
}
}
foreach ($data as $entity) {
$this->modelManager->collectionAddElement($collection, $entity);
}
}
$event->setData($collection);
}
}
}
namespace Symfony\Component\Form
{
use Symfony\Component\OptionsResolver\OptionsResolver;
interface FormTypeExtensionInterface
{
public function buildForm(FormBuilderInterface $builder, array $options);
public function buildView(FormView $view, FormInterface $form, array $options);
public function finishView(FormView $view, FormInterface $form, array $options);
public function configureOptions(OptionsResolver $resolver);
public function getExtendedType();
}
}
namespace Symfony\Component\Form
{
use Symfony\Component\OptionsResolver\OptionsResolver;
abstract class AbstractTypeExtension implements FormTypeExtensionInterface
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
}
public function finishView(FormView $view, FormInterface $form, array $options)
{
}
public function configureOptions(OptionsResolver $resolver)
{
}
}
}
namespace Sonata\AdminBundle\Form\Extension\Field\Type
{
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Exception\NoValueException;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class FormTypeFieldExtension extends AbstractTypeExtension
{
protected $defaultClasses = array();
protected $options;
public function __construct(array $defaultClasses, array $options)
{
$this->defaultClasses = $defaultClasses;
$this->options = $options;
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$sonataAdmin = array('name'=> null,'admin'=> null,'value'=> null,'edit'=>'standard','inline'=>'natural','field_description'=> null,'block_name'=> false,'options'=> $this->options,
);
$builder->setAttribute('sonata_admin_enabled', false);
$builder->setAttribute('sonata_help', false);
if ($options['sonata_field_description'] instanceof FieldDescriptionInterface) {
$fieldDescription = $options['sonata_field_description'];
$sonataAdmin['admin'] = $fieldDescription->getAdmin();
$sonataAdmin['field_description'] = $fieldDescription;
$sonataAdmin['name'] = $fieldDescription->getName();
$sonataAdmin['edit'] = $fieldDescription->getOption('edit','standard');
$sonataAdmin['inline'] = $fieldDescription->getOption('inline','natural');
$sonataAdmin['block_name'] = $fieldDescription->getOption('block_name', false);
$sonataAdmin['class'] = $this->getClass($builder);
$builder->setAttribute('sonata_admin_enabled', true);
}
$builder->setAttribute('sonata_admin', $sonataAdmin);
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
$sonataAdmin = $form->getConfig()->getAttribute('sonata_admin');
if ($view->parent && $view->parent->vars['sonata_admin_enabled'] && !$sonataAdmin['admin']) {
$blockPrefixes = $view->vars['block_prefixes'];
$baseName = str_replace('.','_', $view->parent->vars['sonata_admin_code']);
$baseType = $blockPrefixes[count($blockPrefixes) - 2];
$blockSuffix = preg_replace('#^_([a-z0-9]{14})_(.++)$#','$2', array_pop($blockPrefixes));
$blockPrefixes[] = sprintf('%s_%s', $baseName, $baseType);
$blockPrefixes[] = sprintf('%s_%s_%s_%s', $baseName, $baseType, $view->parent->vars['name'], $view->vars['name']);
$blockPrefixes[] = sprintf('%s_%s_%s_%s', $baseName, $baseType, $view->parent->vars['name'], $blockSuffix);
$view->vars['block_prefixes'] = $blockPrefixes;
$view->vars['sonata_admin_enabled'] = true;
$view->vars['sonata_admin'] = array('admin'=> false,'field_description'=> false,'name'=> false,'edit'=>'standard','inline'=>'natural','block_name'=> false,'class'=> false,'options'=> $this->options,
);
$view->vars['sonata_admin_code'] = $view->parent->vars['sonata_admin_code'];
return;
}
$sonataAdminHelp = isset($options['sonata_help']) ? $options['sonata_help'] : null;
if ($sonataAdmin && $form->getConfig()->getAttribute('sonata_admin_enabled', true)) {
$sonataAdmin['value'] = $form->getData();
$blockPrefixes = $view->vars['block_prefixes'];
$baseName = str_replace('.','_', $sonataAdmin['admin']->getCode());
$baseType = $blockPrefixes[count($blockPrefixes) - 2];
$blockSuffix = preg_replace('#^_([a-z0-9]{14})_(.++)$#','$2', array_pop($blockPrefixes));
$blockPrefixes[] = sprintf('%s_%s', $baseName, $baseType);
$blockPrefixes[] = sprintf('%s_%s_%s', $baseName, $sonataAdmin['name'], $baseType);
$blockPrefixes[] = sprintf('%s_%s_%s_%s', $baseName, $sonataAdmin['name'], $baseType, $blockSuffix);
if (isset($sonataAdmin['block_name']) && $sonataAdmin['block_name'] !== false) {
$blockPrefixes[] = $sonataAdmin['block_name'];
}
$view->vars['block_prefixes'] = $blockPrefixes;
$view->vars['sonata_admin_enabled'] = true;
$view->vars['sonata_admin'] = $sonataAdmin;
$view->vars['sonata_admin_code'] = $sonataAdmin['admin']->getCode();
$attr = $view->vars['attr'];
if (!isset($attr['class']) && isset($sonataAdmin['class'])) {
$attr['class'] = $sonataAdmin['class'];
}
$view->vars['attr'] = $attr;
} else {
$view->vars['sonata_admin_enabled'] = false;
}
$view->vars['sonata_help'] = $sonataAdminHelp;
$view->vars['sonata_admin'] = $sonataAdmin;
}
public function getExtendedType()
{
return
method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix') ?'Symfony\Component\Form\Extension\Core\Type\FormType':'form';
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('sonata_admin'=> null,'sonata_field_description'=> null,'label_render'=> true,'sonata_help'=> null,
));
}
public function getValueFromFieldDescription($object, FieldDescriptionInterface $fieldDescription)
{
$value = null;
if (!$object) {
return $value;
}
try {
$value = $fieldDescription->getValue($object);
} catch (NoValueException $e) {
if ($fieldDescription->getAssociationAdmin()) {
$value = $fieldDescription->getAssociationAdmin()->getNewInstance();
}
}
return $value;
}
protected function getClass(FormBuilderInterface $formBuilder)
{
foreach ($this->getTypes($formBuilder) as $type) {
if (!method_exists($type,'getName')) { $name = get_class($type);
} else {
$name = $type->getName();
}
if (isset($this->defaultClasses[$name])) {
return $this->defaultClasses[$name];
}
}
return'';
}
protected function getTypes(FormBuilderInterface $formBuilder)
{
$types = array();
for ($type = $formBuilder->getType(); null !== $type; $type = $type->getParent()) {
array_unshift($types, $type->getInnerType());
}
return $types;
}
}
}
namespace Sonata\AdminBundle\Mapper
{
abstract class BaseGroupedMapper extends BaseMapper
{
protected $currentGroup;
protected $currentTab;
protected $apply;
public function with($name, array $options = array())
{
$defaultOptions = array('collapsed'=> false,'class'=> false,'description'=> false,'translation_domain'=> null,'name'=> $name,'box_class'=>'box box-primary',
);
$code = $name;
if (array_key_exists('tab', $options) && $options['tab']) {
$tabs = $this->getTabs();
if ($this->currentTab) {
if (isset($tabs[$this->currentTab]['auto_created']) && true === $tabs[$this->currentTab]['auto_created']) {
throw new \RuntimeException('New tab was added automatically when you have added field or group. You should close current tab before adding new one OR add tabs before adding groups and fields.');
}
throw new \RuntimeException(sprintf('You should close previous tab "%s" with end() before adding new tab "%s".', $this->currentTab, $name));
} elseif ($this->currentGroup) {
throw new \RuntimeException(sprintf('You should open tab before adding new group "%s".', $name));
}
if (!isset($tabs[$name])) {
$tabs[$name] = array();
}
$tabs[$code] = array_merge($defaultOptions, array('auto_created'=> false,'groups'=> array(),
), $tabs[$code], $options);
$this->currentTab = $code;
} else {
if ($this->currentGroup) {
throw new \RuntimeException(sprintf('You should close previous group "%s" with end() before adding new tab "%s".', $this->currentGroup, $name));
}
if (!$this->currentTab) {
$this->with('default', array('tab'=> true,'auto_created'=> true,'translation_domain'=> isset($options['translation_domain']) ? $options['translation_domain'] : null,
)); }
if ($this->currentTab !=='default') {
$code = $this->currentTab.'.'.$name; }
$groups = $this->getGroups();
if (!isset($groups[$code])) {
$groups[$code] = array();
}
$groups[$code] = array_merge($defaultOptions, array('fields'=> array(),
), $groups[$code], $options);
$this->currentGroup = $code;
$this->setGroups($groups);
$tabs = $this->getTabs();
}
if ($this->currentGroup && isset($tabs[$this->currentTab]) && !in_array($this->currentGroup, $tabs[$this->currentTab]['groups'])) {
$tabs[$this->currentTab]['groups'][] = $this->currentGroup;
}
$this->setTabs($tabs);
return $this;
}
public function ifTrue($bool)
{
if ($this->apply !== null) {
throw new \RuntimeException('Cannot nest ifTrue or ifFalse call');
}
$this->apply = ($bool === true);
return $this;
}
public function ifFalse($bool)
{
if ($this->apply !== null) {
throw new \RuntimeException('Cannot nest ifTrue or ifFalse call');
}
$this->apply = ($bool === false);
return $this;
}
public function ifEnd()
{
$this->apply = null;
return $this;
}
public function tab($name, array $options = array())
{
return $this->with($name, array_merge($options, array('tab'=> true)));
}
public function end()
{
if ($this->currentGroup !== null) {
$this->currentGroup = null;
} elseif ($this->currentTab !== null) {
$this->currentTab = null;
} else {
throw new \RuntimeException('No open tabs or groups, you cannot use end()');
}
return $this;
}
public function hasOpenTab()
{
return null !== $this->currentTab;
}
abstract protected function getGroups();
abstract protected function getTabs();
abstract protected function setGroups(array $groups);
abstract protected function setTabs(array $tabs);
protected function addFieldToCurrentGroup($fieldName)
{
$currentGroup = $this->getCurrentGroupName();
$groups = $this->getGroups();
$groups[$currentGroup]['fields'][$fieldName] = $fieldName;
$this->setGroups($groups);
return $groups[$currentGroup];
}
protected function getCurrentGroupName()
{
if (!$this->currentGroup) {
$this->with($this->admin->getLabel(), array('auto_created'=> true));
}
return $this->currentGroup;
}
}
}
namespace Sonata\AdminBundle\Form
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Builder\FormContractorInterface;
use Sonata\AdminBundle\Mapper\BaseGroupedMapper;
use Symfony\Component\Form\FormBuilderInterface;
class FormMapper extends BaseGroupedMapper
{
protected $formBuilder;
public function __construct(FormContractorInterface $formContractor, FormBuilderInterface $formBuilder, AdminInterface $admin)
{
parent::__construct($formContractor, $admin);
$this->formBuilder = $formBuilder;
}
public function reorder(array $keys)
{
$this->admin->reorderFormGroup($this->getCurrentGroupName(), $keys);
return $this;
}
public function add($name, $type = null, array $options = array(), array $fieldDescriptionOptions = array())
{
if ($this->apply !== null && !$this->apply) {
return $this;
}
if ($name instanceof FormBuilderInterface) {
$fieldName = $name->getName();
} else {
$fieldName = $name;
}
if (!$name instanceof FormBuilderInterface && !isset($options['property_path'])) {
$options['property_path'] = $fieldName;
$fieldName = $this->sanitizeFieldName($fieldName);
}
if ($type ==='collection'|| $type ==='Symfony\Component\Form\Extension\Core\Type\CollectionType') {
$type ='sonata_type_native_collection';
}
$label = $fieldName;
$group = $this->addFieldToCurrentGroup($label);
if ($name instanceof FormBuilderInterface && null === $type) {
$fieldDescriptionOptions['type'] = get_class($name->getType()->getInnerType());
}
if (!isset($fieldDescriptionOptions['type']) && is_string($type)) {
$fieldDescriptionOptions['type'] = $type;
}
if ($group['translation_domain'] && !isset($fieldDescriptionOptions['translation_domain'])) {
$fieldDescriptionOptions['translation_domain'] = $group['translation_domain'];
}
$fieldDescription = $this->admin->getModelManager()->getNewFieldDescriptionInstance(
$this->admin->getClass(),
$name instanceof FormBuilderInterface ? $name->getName() : $name,
$fieldDescriptionOptions
);
$this->builder->fixFieldDescription($this->admin, $fieldDescription, $fieldDescriptionOptions);
if ($fieldName != $name) {
$fieldDescription->setName($fieldName);
}
$this->admin->addFormFieldDescription($fieldName, $fieldDescription);
if ($name instanceof FormBuilderInterface) {
$this->formBuilder->add($name);
} else {
$options = array_replace_recursive($this->builder->getDefaultOptions($type, $fieldDescription), $options);
if (!isset($options['label_render'])) {
$options['label_render'] = false;
}
if (!isset($options['label'])) {
$options['label'] = $this->admin->getLabelTranslatorStrategy()->getLabel($fieldDescription->getName(),'form','label');
}
$help = null;
if (isset($options['help'])) {
$help = $options['help'];
unset($options['help']);
}
$this->formBuilder->add($fieldDescription->getName(), $type, $options);
if (null !== $help) {
$this->admin->getFormFieldDescription($fieldDescription->getName())->setHelp($help);
}
}
return $this;
}
public function get($name)
{
$name = $this->sanitizeFieldName($name);
return $this->formBuilder->get($name);
}
public function has($key)
{
$key = $this->sanitizeFieldName($key);
return $this->formBuilder->has($key);
}
final public function keys()
{
return array_keys($this->formBuilder->all());
}
public function remove($key)
{
$key = $this->sanitizeFieldName($key);
$this->admin->removeFormFieldDescription($key);
$this->admin->removeFieldFromFormGroup($key);
$this->formBuilder->remove($key);
return $this;
}
public function removeGroup($group, $tab ='default', $deleteEmptyTab = false)
{
$groups = $this->getGroups();
if ($tab !=='default') {
$group = $tab.'.'.$group;
}
if (isset($groups[$group])) {
foreach ($groups[$group]['fields'] as $field) {
$this->remove($field);
}
}
unset($groups[$group]);
$tabs = $this->getTabs();
$key = array_search($group, $tabs[$tab]['groups']);
if (false !== $key) {
unset($tabs[$tab]['groups'][$key]);
}
if ($deleteEmptyTab && count($tabs[$tab]['groups']) == 0) {
unset($tabs[$tab]);
}
$this->setTabs($tabs);
$this->setGroups($groups);
return $this;
}
public function getFormBuilder()
{
return $this->formBuilder;
}
public function create($name, $type = null, array $options = array())
{
return $this->formBuilder->create($name, $type, $options);
}
public function setHelps(array $helps = array())
{
foreach ($helps as $name => $help) {
$this->addHelp($name, $help);
}
return $this;
}
public function addHelp($name, $help)
{
if ($this->admin->hasFormFieldDescription($name)) {
$this->admin->getFormFieldDescription($name)->setHelp($help);
}
return $this;
}
protected function sanitizeFieldName($fieldName)
{
return str_replace(array('__','.'), array('____','__'), $fieldName);
}
protected function getGroups()
{
return $this->admin->getFormGroups();
}
protected function setGroups(array $groups)
{
$this->admin->setFormGroups($groups);
}
protected function getTabs()
{
return $this->admin->getFormTabs();
}
protected function setTabs(array $tabs)
{
$this->admin->setFormTabs($tabs);
}
}
}
namespace Sonata\AdminBundle\Form\Type
{
use Doctrine\Common\Collections\Collection;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Form\DataTransformer\ArrayToModelTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\PropertyAccess\Exception\NoSuchIndexException;
use Symfony\Component\PropertyAccess\PropertyAccessor;
class AdminType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$admin = clone $this->getAdmin($options);
if ($admin->hasParentFieldDescription()) {
$admin->getParentFieldDescription()->setAssociationAdmin($admin);
}
if ($options['delete'] && $admin->hasAccess('delete')) {
if (!array_key_exists('translation_domain', $options['delete_options']['type_options'])) {
$options['delete_options']['type_options']['translation_domain'] = $admin->getTranslationDomain();
}
$builder->add('_delete',
$options['delete_options']['type'],
array_merge(
$options['delete_options']['type_options'],
array('attr'=> array('class'=>'sonata-admin-type-delete-checkbox'),
)
)
);
}
if ($builder->getData() === null) {
$p = new PropertyAccessor(false, true);
try {
$parentSubject = $admin->getParentFieldDescription()->getAdmin()->getSubject();
if ($parentSubject !== null && $parentSubject !== false) {
if (!method_exists($p,'isReadable')) {
$subjectCollection = $p->getValue(
$parentSubject,
$this->getFieldDescription($options)->getFieldName()
);
if ($subjectCollection instanceof Collection) {
$subject = $subjectCollection->get(trim($options['property_path'],'[]'));
}
} else {
$subject = $p->getValue(
$parentSubject,
$options['property_path']
);
}
$builder->setData($subject);
}
} catch (NoSuchIndexException $e) {
}
}
$admin->setSubject($builder->getData());
$admin->defineFormBuilder($builder);
$builder->addModelTransformer(new ArrayToModelTransformer($admin->getModelManager(), $admin->getClass()));
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
$view->vars['btn_add'] = $options['btn_add'];
$view->vars['btn_list'] = $options['btn_list'];
$view->vars['btn_delete'] = $options['btn_delete'];
$view->vars['btn_catalogue'] = $options['btn_catalogue'];
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('delete'=> function (Options $options) {
return $options['btn_delete'] !== false;
},'delete_options'=> array('type'=>'checkbox','type_options'=> array('required'=> false,'mapped'=> false,
),
),'auto_initialize'=> false,'btn_add'=>'link_add','btn_list'=>'link_list','btn_delete'=>'link_delete','btn_catalogue'=>'SonataAdminBundle',
));
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_admin';
}
protected function getFieldDescription(array $options)
{
if (!isset($options['sonata_field_description'])) {
throw new \RuntimeException('Please provide a valid `sonata_field_description` option');
}
return $options['sonata_field_description'];
}
protected function getAdmin(array $options)
{
return $this->getFieldDescription($options)->getAssociationAdmin();
}
}
}
namespace Sonata\AdminBundle\Form\Type\Filter
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class ChoiceType extends AbstractType
{
const TYPE_CONTAINS = 1;
const TYPE_NOT_CONTAINS = 2;
const TYPE_EQUAL = 3;
protected $translator;
public function __construct(TranslatorInterface $translator)
{
$this->translator = $translator;
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_filter_choice';
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$choices = array('label_type_contains'=> self::TYPE_CONTAINS,'label_type_not_contains'=> self::TYPE_NOT_CONTAINS,'label_type_equals'=> self::TYPE_EQUAL,
);
$operatorChoices = array();
if ($options['operator_type'] !=='hidden'&& $options['operator_type'] !=='Symfony\Component\Form\Extension\Core\Type\HiddenType') {
if (!method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
foreach ($choices as $key => $value) {
$choices[$key] = $this->translator->trans($value, array(),'SonataAdminBundle');
}
} else {
$operatorChoices['choice_translation_domain'] ='SonataAdminBundle';
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$operatorChoices['choices_as_values'] = true;
}
}
$operatorChoices['choices'] = $choices;
}
$builder
->add('type', $options['operator_type'], array_merge(array('required'=> false), $options['operator_options'], $operatorChoices))
->add('value', $options['field_type'], array_merge(array('required'=> false), $options['field_options']))
;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_type'=>'choice','field_options'=> array(),'operator_type'=> method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice','operator_options'=> array(),
));
}
}
}
namespace Sonata\AdminBundle\Form\Type\Filter
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class DateRangeType extends AbstractType
{
const TYPE_BETWEEN = 1;
const TYPE_NOT_BETWEEN = 2;
protected $translator;
public function __construct(TranslatorInterface $translator)
{
$this->translator = $translator;
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_filter_date_range';
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$choices = array('label_date_type_between'=> self::TYPE_BETWEEN,'label_date_type_not_between'=> self::TYPE_NOT_BETWEEN,
);
$choiceOptions = array('required'=> false,
);
if (!method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
foreach ($choices as $key => $value) {
$choices[$key] = $this->translator->trans($value, array(),'SonataAdminBundle');
}
} else {
$choiceOptions['choice_translation_domain'] ='SonataAdminBundle';
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$choiceOptions['choices_as_values'] = true;
}
}
$choiceOptions['choices'] = $choices;
$builder
->add('type', method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice', $choiceOptions)
->add('value', $options['field_type'], $options['field_options'])
;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_type'=>'sonata_type_date_range','field_options'=> array('format'=>'yyyy-MM-dd'),
));
}
}
}
namespace Sonata\AdminBundle\Form\Type\Filter
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class DateTimeRangeType extends AbstractType
{
const TYPE_BETWEEN = 1;
const TYPE_NOT_BETWEEN = 2;
protected $translator;
public function __construct(TranslatorInterface $translator)
{
$this->translator = $translator;
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_filter_datetime_range';
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$choices = array('label_date_type_between'=> self::TYPE_BETWEEN,'label_date_type_not_between'=> self::TYPE_NOT_BETWEEN,
);
$choiceOptions = array('required'=> false,
);
if (!method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
foreach ($choices as $key => $value) {
$choices[$key] = $this->translator->trans($value, array(),'SonataAdminBundle');
}
} else {
$choiceOptions['choice_translation_domain'] ='SonataAdminBundle';
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$choiceOptions['choices_as_values'] = true;
}
}
$choiceOptions['choices'] = $choices;
$builder
->add('type', method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice', $choiceOptions)
->add('value', $options['field_type'], $options['field_options'])
;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_type'=>'sonata_type_datetime_range','field_options'=> array('date_format'=>'yyyy-MM-dd'),
));
}
}
}
namespace Sonata\AdminBundle\Form\Type\Filter
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class DateTimeType extends AbstractType
{
const TYPE_GREATER_EQUAL = 1;
const TYPE_GREATER_THAN = 2;
const TYPE_EQUAL = 3;
const TYPE_LESS_EQUAL = 4;
const TYPE_LESS_THAN = 5;
const TYPE_NULL = 6;
const TYPE_NOT_NULL = 7;
protected $translator;
public function __construct(TranslatorInterface $translator)
{
$this->translator = $translator;
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_filter_datetime';
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$choices = array('label_date_type_equal'=> self::TYPE_EQUAL,'label_date_type_greater_equal'=> self::TYPE_GREATER_EQUAL,'label_date_type_greater_than'=> self::TYPE_GREATER_THAN,'label_date_type_less_equal'=> self::TYPE_LESS_EQUAL,'label_date_type_less_than'=> self::TYPE_LESS_THAN,'label_date_type_null'=> self::TYPE_NULL,'label_date_type_not_null'=> self::TYPE_NOT_NULL,
);
$choiceOptions = array('required'=> false,
);
if (!method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
foreach ($choices as $key => $value) {
$choices[$key] = $this->translator->trans($value, array(),'SonataAdminBundle');
}
} else {
$choiceOptions['choice_translation_domain'] ='SonataAdminBundle';
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$choiceOptions['choices_as_values'] = true;
}
}
$choiceOptions['choices'] = $choices;
$builder
->add('type', method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice', $choiceOptions)
->add('value', $options['field_type'], array_merge(array('required'=> false), $options['field_options']))
;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_type'=>'datetime','field_options'=> array('date_format'=>'yyyy-MM-dd'),
));
}
}
}
namespace Sonata\AdminBundle\Form\Type\Filter
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Optionsresolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class DateType extends AbstractType
{
const TYPE_GREATER_EQUAL = 1;
const TYPE_GREATER_THAN = 2;
const TYPE_EQUAL = 3;
const TYPE_LESS_EQUAL = 4;
const TYPE_LESS_THAN = 5;
const TYPE_NULL = 6;
const TYPE_NOT_NULL = 7;
protected $translator;
public function __construct(TranslatorInterface $translator)
{
$this->translator = $translator;
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_filter_date';
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$choices = array('label_date_type_equal'=> self::TYPE_EQUAL,'label_date_type_greater_equal'=> self::TYPE_GREATER_EQUAL,'label_date_type_greater_than'=> self::TYPE_GREATER_THAN,'label_date_type_less_equal'=> self::TYPE_LESS_EQUAL,'label_date_type_less_than'=> self::TYPE_LESS_THAN,'label_date_type_null'=> self::TYPE_NULL,'label_date_type_not_null'=> self::TYPE_NOT_NULL,
);
$choiceOptions = array('required'=> false,
);
if (!method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
foreach ($choices as $key => $value) {
$choices[$key] = $this->translator->trans($value, array(),'SonataAdminBundle');
}
} else {
$choiceOptions['choice_translation_domain'] ='SonataAdminBundle';
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$choiceOptions['choices_as_values'] = true;
}
}
$choiceOptions['choices'] = $choices;
$builder
->add('type', method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice', $choiceOptions)
->add('value', $options['field_type'], array_merge(array('required'=> false), $options['field_options']))
;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_type'=>'date','field_options'=> array('date_format'=>'yyyy-MM-dd'),
));
}
}
}
namespace Sonata\AdminBundle\Form\Type\Filter
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class DefaultType extends AbstractType
{
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_filter_default';
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('type', $options['operator_type'], array_merge(array('required'=> false), $options['operator_options']))
->add('value', $options['field_type'], array_merge(array('required'=> false), $options['field_options']))
;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('operator_type'=> method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\HiddenType':'hidden','operator_options'=> array(),'field_type'=> method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\TextType':'text','field_options'=> array(),
));
}
}
}
namespace Sonata\AdminBundle\Form\Type\Filter
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class NumberType extends AbstractType
{
const TYPE_GREATER_EQUAL = 1;
const TYPE_GREATER_THAN = 2;
const TYPE_EQUAL = 3;
const TYPE_LESS_EQUAL = 4;
const TYPE_LESS_THAN = 5;
protected $translator;
public function __construct(TranslatorInterface $translator)
{
$this->translator = $translator;
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_filter_number';
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$choices = array('label_type_equal'=> self::TYPE_EQUAL,'label_type_greater_equal'=> self::TYPE_GREATER_EQUAL,'label_type_greater_than'=> self::TYPE_GREATER_THAN,'label_type_less_equal'=> self::TYPE_LESS_EQUAL,'label_type_less_than'=> self::TYPE_LESS_THAN,
);
$choiceOptions = array('required'=> false,
);
if (!method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
foreach ($choices as $key => $value) {
$choices[$key] = $this->translator->trans($value, array(),'SonataAdminBundle');
}
} else {
$choiceOptions['choice_translation_domain'] ='SonataAdminBundle';
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$choiceOptions['choices_as_values'] = true;
}
}
$choiceOptions['choices'] = $choices;
$builder
->add('type', method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice', $choiceOptions)
->add('value', $options['field_type'], array_merge(array('required'=> false), $options['field_options']))
;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_type'=>'number','field_options'=> array(),
));
}
}
}
namespace Sonata\AdminBundle\Form\Type
{
use Sonata\AdminBundle\Form\DataTransformer\ModelToIdTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class ModelReferenceType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder->addModelTransformer(new ModelToIdTransformer($options['model_manager'], $options['class']));
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('compound'=> false,'model_manager'=> null,'class'=> null,
));
}
public function getParent()
{
return method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\TextType':'text';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_model_reference';
}
}
}
namespace Sonata\AdminBundle\Form\Type
{
use Sonata\AdminBundle\Form\ChoiceList\ModelChoiceList;
use Sonata\AdminBundle\Form\ChoiceList\ModelChoiceLoader;
use Sonata\AdminBundle\Form\DataTransformer\LegacyModelsToArrayTransformer;
use Sonata\AdminBundle\Form\DataTransformer\ModelsToArrayTransformer;
use Sonata\AdminBundle\Form\DataTransformer\ModelToIdTransformer;
use Sonata\AdminBundle\Form\EventListener\MergeCollectionListener;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
class ModelType extends AbstractType
{
protected $propertyAccessor;
public function __construct(PropertyAccessorInterface $propertyAccessor)
{
$this->propertyAccessor = $propertyAccessor;
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
if ($options['multiple']) {
if (array_key_exists('choice_loader', $options) && $options['choice_loader'] !== null) { $builder->addViewTransformer(new ModelsToArrayTransformer(
$options['model_manager'],
$options['class']), true);
} else {
$builder->addViewTransformer(new LegacyModelsToArrayTransformer($options['choice_list']), true);
}
$builder
->addEventSubscriber(new MergeCollectionListener($options['model_manager']))
;
} else {
$builder
->addViewTransformer(new ModelToIdTransformer($options['model_manager'], $options['class']), true)
;
}
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
$view->vars['btn_add'] = $options['btn_add'];
$view->vars['btn_list'] = $options['btn_list'];
$view->vars['btn_delete'] = $options['btn_delete'];
$view->vars['btn_catalogue'] = $options['btn_catalogue'];
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$options = array();
$propertyAccessor = $this->propertyAccessor;
if (interface_exists('Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface')) { $options['choice_loader'] = function (Options $options, $previousValue) use ($propertyAccessor) {
if ($previousValue && count($choices = $previousValue->getChoices())) {
return $choices;
}
return new ModelChoiceLoader(
$options['model_manager'],
$options['class'],
$options['property'],
$options['query'],
$options['choices'],
$propertyAccessor
);
};
} else {
$options['choice_list'] = function (Options $options, $previousValue) use ($propertyAccessor) {
if ($previousValue && count($choices = $previousValue->getChoices())) {
return $choices;
}
return new ModelChoiceList(
$options['model_manager'],
$options['class'],
$options['property'],
$options['query'],
$options['choices'],
$propertyAccessor
);
};
}
$resolver->setDefaults(array_merge($options, array('compound'=> function (Options $options) {
if (isset($options['multiple']) && $options['multiple']) {
if (isset($options['expanded']) && $options['expanded']) {
return true;
}
return false;
}
if (isset($options['expanded']) && $options['expanded']) {
return true;
}
return false;
},'template'=>'choice','multiple'=> false,'expanded'=> false,'model_manager'=> null,'class'=> null,'property'=> null,'query'=> null,'choices'=> array(),'preferred_choices'=> array(),'btn_add'=>'link_add','btn_list'=>'link_list','btn_delete'=>'link_delete','btn_catalogue'=>'SonataAdminBundle',
)));
}
public function getParent()
{
return method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_model';
}
}
}
namespace Sonata\AdminBundle\Form\Type
{
use Sonata\AdminBundle\Form\DataTransformer\ModelToIdTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class ModelListType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->resetViewTransformers()
->addViewTransformer(new ModelToIdTransformer($options['model_manager'], $options['class']));
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
if (isset($view->vars['sonata_admin'])) {
$view->vars['sonata_admin']['edit'] ='list';
}
$view->vars['btn_add'] = $options['btn_add'];
$view->vars['btn_list'] = $options['btn_list'];
$view->vars['btn_delete'] = $options['btn_delete'];
$view->vars['btn_catalogue'] = $options['btn_catalogue'];
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('model_manager'=> null,'class'=> null,'btn_add'=>'link_add','btn_list'=>'link_list','btn_delete'=>'link_delete','btn_catalogue'=>'SonataAdminBundle',
));
}
public function getParent()
{
return method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\TextType':'text';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_model_list';
}
}
}
namespace Sonata\AdminBundle\Guesser
{
use Sonata\AdminBundle\Model\ModelManagerInterface;
interface TypeGuesserInterface
{
public function guessType($class, $property, ModelManagerInterface $modelManager);
}
}
namespace Sonata\AdminBundle\Guesser
{
use Sonata\AdminBundle\Model\ModelManagerInterface;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Form\Guess\Guess;
class TypeGuesserChain implements TypeGuesserInterface
{
protected $guessers = array();
public function __construct(array $guessers)
{
foreach ($guessers as $guesser) {
if (!$guesser instanceof TypeGuesserInterface) {
throw new UnexpectedTypeException($guesser,'Sonata\AdminBundle\Guesser\TypeGuesserInterface');
}
if ($guesser instanceof self) {
$this->guessers = array_merge($this->guessers, $guesser->guessers);
} else {
$this->guessers[] = $guesser;
}
}
}
public function guessType($class, $property, ModelManagerInterface $modelManager)
{
return $this->guess(function ($guesser) use ($class, $property, $modelManager) {
return $guesser->guessType($class, $property, $modelManager);
});
}
private function guess(\Closure $closure)
{
$guesses = array();
foreach ($this->guessers as $guesser) {
if ($guess = $closure($guesser)) {
$guesses[] = $guess;
}
}
return Guess::getBestGuess($guesses);
}
}
}
namespace Sonata\AdminBundle\Model
{
interface AuditManagerInterface
{
public function setReader($serviceId, array $classes);
public function hasReader($class);
public function getReader($class);
}
}
namespace Sonata\AdminBundle\Model
{
use Symfony\Component\DependencyInjection\ContainerInterface;
class AuditManager implements AuditManagerInterface
{
protected $classes = array();
protected $readers = array();
protected $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function setReader($serviceId, array $classes)
{
$this->readers[$serviceId] = $classes;
}
public function hasReader($class)
{
foreach ($this->readers as $classes) {
if (in_array($class, $classes)) {
return true;
}
}
return false;
}
public function getReader($class)
{
foreach ($this->readers as $readerId => $classes) {
if (in_array($class, $classes)) {
return $this->container->get($readerId);
}
}
throw new \RuntimeException(sprintf('The class "%s" does not have any reader manager', $class));
}
}
}
namespace Sonata\AdminBundle\Model
{
interface AuditReaderInterface
{
public function find($className, $id, $revision);
public function findRevisionHistory($className, $limit = 20, $offset = 0);
public function findRevision($classname, $revision);
public function findRevisions($className, $id);
public function diff($className, $id, $oldRevision, $newRevision);
}
}
namespace Sonata\AdminBundle\Model
{
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Datagrid\DatagridInterface;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
interface ModelManagerInterface
{
public function getNewFieldDescriptionInstance($class, $name, array $options = array());
public function create($object);
public function update($object);
public function delete($object);
public function findBy($class, array $criteria = array());
public function findOneBy($class, array $criteria = array());
public function find($class, $id);
public function batchDelete($class, ProxyQueryInterface $queryProxy);
public function getParentFieldDescription($parentAssociationMapping, $class);
public function createQuery($class, $alias ='o');
public function getModelIdentifier($class);
public function getIdentifierValues($model);
public function getIdentifierFieldNames($class);
public function getNormalizedIdentifier($model);
public function getUrlsafeIdentifier($model);
public function getModelInstance($class);
public function getModelCollectionInstance($class);
public function collectionRemoveElement(&$collection, &$element);
public function collectionAddElement(&$collection, &$element);
public function collectionHasElement(&$collection, &$element);
public function collectionClear(&$collection);
public function getSortParameters(FieldDescriptionInterface $fieldDescription, DatagridInterface $datagrid);
public function getDefaultSortValues($class);
public function modelReverseTransform($class, array $array = array());
public function modelTransform($class, $instance);
public function executeQuery($query);
public function getDataSourceIterator(DatagridInterface $datagrid, array $fields, $firstResult = null, $maxResult = null);
public function getExportFields($class);
public function getPaginationParameters(DatagridInterface $datagrid, $page);
public function addIdentifiersToQuery($class, ProxyQueryInterface $query, array $idx);
}
}
namespace Symfony\Component\Config\Loader
{
interface LoaderInterface
{
public function load($resource, $type = null);
public function supports($resource, $type = null);
public function getResolver();
public function setResolver(LoaderResolverInterface $resolver);
}
}
namespace Symfony\Component\Config\Loader
{
use Symfony\Component\Config\Exception\FileLoaderLoadException;
abstract class Loader implements LoaderInterface
{
protected $resolver;
public function getResolver()
{
return $this->resolver;
}
public function setResolver(LoaderResolverInterface $resolver)
{
$this->resolver = $resolver;
}
public function import($resource, $type = null)
{
return $this->resolve($resource, $type)->load($resource, $type);
}
public function resolve($resource, $type = null)
{
if ($this->supports($resource, $type)) {
return $this;
}
$loader = null === $this->resolver ? false : $this->resolver->resolve($resource, $type);
if (false === $loader) {
throw new FileLoaderLoadException($resource);
}
return $loader;
}
}
}
namespace Sonata\AdminBundle\Route
{
use Sonata\AdminBundle\Admin\Pool;
use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\RouteCollection as SymfonyRouteCollection;
class AdminPoolLoader extends Loader
{
const ROUTE_TYPE_NAME ='sonata_admin';
protected $pool;
protected $adminServiceIds = array();
protected $container;
public function __construct(Pool $pool, array $adminServiceIds, ContainerInterface $container)
{
$this->pool = $pool;
$this->adminServiceIds = $adminServiceIds;
$this->container = $container;
}
public function supports($resource, $type = null)
{
return $type === self::ROUTE_TYPE_NAME;
}
public function load($resource, $type = null)
{
$collection = new SymfonyRouteCollection();
foreach ($this->adminServiceIds as $id) {
$admin = $this->pool->getInstance($id);
foreach ($admin->getRoutes()->getElements() as $code => $route) {
$collection->add($route->getDefault('_sonata_name'), $route);
}
$reflection = new \ReflectionObject($admin);
if (file_exists($reflection->getFileName())) {
$collection->addResource(new FileResource($reflection->getFileName()));
}
}
$reflection = new \ReflectionObject($this->container);
if (file_exists($reflection->getFileName())) {
$collection->addResource(new FileResource($reflection->getFileName()));
}
return $collection;
}
}
}
namespace Sonata\AdminBundle\Route
{
use Sonata\AdminBundle\Admin\AdminInterface;
interface RouteGeneratorInterface
{
public function generateUrl(AdminInterface $admin, $name, array $parameters = array(), $absolute = false);
public function generateMenuUrl(AdminInterface $admin, $name, array $parameters = array(), $absolute = false);
public function generate($name, array $parameters = array(), $absolute = false);
public function hasAdminRoute(AdminInterface $admin, $name);
}
}
namespace Sonata\AdminBundle\Route
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
class DefaultRouteGenerator implements RouteGeneratorInterface
{
private $router;
private $cache;
private $caches = array();
private $loaded = array();
public function __construct(RouterInterface $router, RoutesCache $cache)
{
$this->router = $router;
$this->cache = $cache;
}
public function generate($name, array $parameters = array(), $absolute = UrlGeneratorInterface::ABSOLUTE_PATH)
{
return $this->router->generate($name, $parameters, $absolute);
}
public function generateUrl(AdminInterface $admin, $name, array $parameters = array(), $absolute = UrlGeneratorInterface::ABSOLUTE_PATH)
{
$arrayRoute = $this->generateMenuUrl($admin, $name, $parameters, $absolute);
return $this->router->generate($arrayRoute['route'], $arrayRoute['routeParameters'], $arrayRoute['routeAbsolute']);
}
public function generateMenuUrl(AdminInterface $admin, $name, array $parameters = array(), $absolute = UrlGeneratorInterface::ABSOLUTE_PATH)
{
if ($admin->isChild() && $admin->hasRequest() && $admin->getRequest()->attributes->has($admin->getParent()->getIdParameter())) {
if (isset($parameters['id'])) {
$parameters[$admin->getIdParameter()] = $parameters['id'];
unset($parameters['id']);
}
$parameters[$admin->getParent()->getIdParameter()] = $admin->getRequest()->attributes->get($admin->getParent()->getIdParameter());
}
if ($admin->hasParentFieldDescription()) {
$parameters = array_merge($parameters, $admin->getParentFieldDescription()->getOption('link_parameters', array()));
$parameters['uniqid'] = $admin->getUniqid();
$parameters['code'] = $admin->getCode();
$parameters['pcode'] = $admin->getParentFieldDescription()->getAdmin()->getCode();
$parameters['puniqid'] = $admin->getParentFieldDescription()->getAdmin()->getUniqid();
}
if ($name =='update'|| substr($name, -7) =='|update') {
$parameters['uniqid'] = $admin->getUniqid();
$parameters['code'] = $admin->getCode();
}
if ($admin->hasRequest()) {
$parameters = array_merge($admin->getPersistentParameters(), $parameters);
}
$code = $this->getCode($admin, $name);
if (!array_key_exists($code, $this->caches)) {
throw new \RuntimeException(sprintf('unable to find the route `%s`', $code));
}
return array('route'=> $this->caches[$code],'routeParameters'=> $parameters,'routeAbsolute'=> $absolute,
);
}
public function hasAdminRoute(AdminInterface $admin, $name)
{
return array_key_exists($this->getCode($admin, $name), $this->caches);
}
private function getCode(AdminInterface $admin, $name)
{
$this->loadCache($admin);
if ($admin->isChild()) {
return $admin->getBaseCodeRoute().'.'.$name;
}
if (array_key_exists($name, $this->caches)) {
return $name;
}
if (strpos($name,'.')) {
return $admin->getCode().'|'.$name;
}
return $admin->getCode().'.'.$name;
}
private function loadCache(AdminInterface $admin)
{
if ($admin->isChild()) {
$this->loadCache($admin->getParent());
} else {
if (in_array($admin->getCode(), $this->loaded)) {
return;
}
$this->caches = array_merge($this->cache->load($admin), $this->caches);
$this->loaded[] = $admin->getCode();
}
}
}
}
namespace Sonata\AdminBundle\Route
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Builder\RouteBuilderInterface;
use Sonata\AdminBundle\Model\AuditManagerInterface;
class PathInfoBuilder implements RouteBuilderInterface
{
protected $manager;
public function __construct(AuditManagerInterface $manager)
{
$this->manager = $manager;
}
public function build(AdminInterface $admin, RouteCollection $collection)
{
$collection->add('list');
$collection->add('create');
$collection->add('batch');
$collection->add('edit', $admin->getRouterIdParameter().'/edit');
$collection->add('delete', $admin->getRouterIdParameter().'/delete');
$collection->add('show', $admin->getRouterIdParameter().'/show');
$collection->add('export');
if ($this->manager->hasReader($admin->getClass())) {
$collection->add('history', $admin->getRouterIdParameter().'/history');
$collection->add('history_view_revision', $admin->getRouterIdParameter().'/history/{revision}/view');
$collection->add('history_compare_revisions', $admin->getRouterIdParameter().'/history/{base_revision}/{compare_revision}/compare');
}
if ($admin->isAclEnabled()) {
$collection->add('acl', $admin->getRouterIdParameter().'/acl');
}
if ($admin->getParent()) {
return;
}
foreach ($admin->getChildren() as $children) {
$collection->addCollection($children->getRoutes());
}
}
}
}
namespace Sonata\AdminBundle\Route
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Builder\RouteBuilderInterface;
use Sonata\AdminBundle\Model\AuditManagerInterface;
class QueryStringBuilder implements RouteBuilderInterface
{
protected $manager;
public function __construct(AuditManagerInterface $manager)
{
$this->manager = $manager;
}
public function build(AdminInterface $admin, RouteCollection $collection)
{
$collection->add('list');
$collection->add('create');
$collection->add('batch');
$collection->add('edit');
$collection->add('delete');
$collection->add('show');
$collection->add('export');
if ($this->manager->hasReader($admin->getClass())) {
$collection->add('history','/audit-history');
$collection->add('history_view_revision','/audit-history-view');
$collection->add('history_compare_revisions','/audit-history-compare');
}
if ($admin->isAclEnabled()) {
$collection->add('acl', $admin->getRouterIdParameter().'/acl');
}
if ($admin->getParent()) {
return;
}
foreach ($admin->getChildren() as $children) {
$collection->addCollection($children->getRoutes());
}
}
}
}
namespace Sonata\AdminBundle\Route
{
use Symfony\Component\Routing\Route;
class RouteCollection
{
protected $elements = array();
protected $baseCodeRoute;
protected $baseRouteName;
protected $baseControllerName;
protected $baseRoutePattern;
public function __construct($baseCodeRoute, $baseRouteName, $baseRoutePattern, $baseControllerName)
{
$this->baseCodeRoute = $baseCodeRoute;
$this->baseRouteName = $baseRouteName;
$this->baseRoutePattern = $baseRoutePattern;
$this->baseControllerName = $baseControllerName;
}
public function add($name, $pattern = null, array $defaults = array(), array $requirements = array(), array $options = array(), $host ='', array $schemes = array(), array $methods = array(), $condition ='')
{
$pattern = $this->baseRoutePattern.'/'.($pattern ?: $name);
$code = $this->getCode($name);
$routeName = $this->baseRouteName.'_'.$name;
if (!isset($defaults['_controller'])) {
$defaults['_controller'] = $this->baseControllerName.':'.$this->actionify($code);
}
if (!isset($defaults['_sonata_admin'])) {
$defaults['_sonata_admin'] = $this->baseCodeRoute;
}
$defaults['_sonata_name'] = $routeName;
$this->elements[$this->getCode($name)] = function () use (
$pattern, $defaults, $requirements, $options, $host, $schemes, $methods, $condition) {
return new Route($pattern, $defaults, $requirements, $options, $host, $schemes, $methods, $condition);
};
return $this;
}
public function getCode($name)
{
if (strrpos($name,'.') !== false) {
return $name;
}
return $this->baseCodeRoute.'.'.$name;
}
public function addCollection(RouteCollection $collection)
{
foreach ($collection->getElements() as $code => $route) {
$this->elements[$code] = $route;
}
return $this;
}
public function getElements()
{
foreach ($this->elements as $name => $element) {
$this->elements[$name] = $this->resolve($element);
}
return $this->elements;
}
public function has($name)
{
return array_key_exists($this->getCode($name), $this->elements);
}
public function get($name)
{
if ($this->has($name)) {
$code = $this->getCode($name);
$this->elements[$code] = $this->resolve($this->elements[$code]);
return $this->elements[$code];
}
throw new \InvalidArgumentException(sprintf('Element "%s" does not exist.', $name));
}
public function remove($name)
{
unset($this->elements[$this->getCode($name)]);
return $this;
}
public function clearExcept($routeList)
{
if (!is_array($routeList)) {
$routeList = array($routeList);
}
$routeCodeList = array();
foreach ($routeList as $name) {
$routeCodeList[] = $this->getCode($name);
}
$elements = $this->elements;
foreach ($elements as $key => $element) {
if (!in_array($key, $routeCodeList)) {
unset($this->elements[$key]);
}
}
return $this;
}
public function clear()
{
$this->elements = array();
return $this;
}
public function actionify($action)
{
if (($pos = strrpos($action,'.')) !== false) {
$action = substr($action, $pos + 1);
}
if (strpos($this->baseControllerName,':') === false) {
$action .='Action';
}
return lcfirst(str_replace(' ','', ucwords(strtr($action,'_-','  '))));
}
public function getBaseCodeRoute()
{
return $this->baseCodeRoute;
}
public function getBaseControllerName()
{
return $this->baseControllerName;
}
public function getBaseRouteName()
{
return $this->baseRouteName;
}
public function getBaseRoutePattern()
{
return $this->baseRoutePattern;
}
private function resolve($element)
{
if (is_callable($element)) {
return call_user_func($element);
}
return $element;
}
}
}
namespace Symfony\Component\Security\Acl\Permission
{
interface PermissionMapInterface
{
public function getMasks($permission, $object);
public function contains($permission);
}
}
namespace Sonata\AdminBundle\Security\Acl\Permission
{
use Symfony\Component\Security\Acl\Permission\PermissionMapInterface;
class AdminPermissionMap implements PermissionMapInterface
{
const PERMISSION_VIEW ='VIEW';
const PERMISSION_EDIT ='EDIT';
const PERMISSION_CREATE ='CREATE';
const PERMISSION_DELETE ='DELETE';
const PERMISSION_UNDELETE ='UNDELETE';
const PERMISSION_LIST ='LIST';
const PERMISSION_EXPORT ='EXPORT';
const PERMISSION_OPERATOR ='OPERATOR';
const PERMISSION_MASTER ='MASTER';
const PERMISSION_OWNER ='OWNER';
private $map = array(
self::PERMISSION_VIEW => array(
MaskBuilder::MASK_VIEW,
MaskBuilder::MASK_LIST,
MaskBuilder::MASK_EDIT,
MaskBuilder::MASK_OPERATOR,
MaskBuilder::MASK_MASTER,
MaskBuilder::MASK_OWNER,
),
self::PERMISSION_EDIT => array(
MaskBuilder::MASK_EDIT,
MaskBuilder::MASK_OPERATOR,
MaskBuilder::MASK_MASTER,
MaskBuilder::MASK_OWNER,
),
self::PERMISSION_CREATE => array(
MaskBuilder::MASK_CREATE,
MaskBuilder::MASK_OPERATOR,
MaskBuilder::MASK_MASTER,
MaskBuilder::MASK_OWNER,
),
self::PERMISSION_DELETE => array(
MaskBuilder::MASK_DELETE,
MaskBuilder::MASK_OPERATOR,
MaskBuilder::MASK_MASTER,
MaskBuilder::MASK_OWNER,
),
self::PERMISSION_UNDELETE => array(
MaskBuilder::MASK_UNDELETE,
MaskBuilder::MASK_OPERATOR,
MaskBuilder::MASK_MASTER,
MaskBuilder::MASK_OWNER,
),
self::PERMISSION_LIST => array(
MaskBuilder::MASK_LIST,
MaskBuilder::MASK_OPERATOR,
MaskBuilder::MASK_MASTER,
MaskBuilder::MASK_OWNER,
),
self::PERMISSION_EXPORT => array(
MaskBuilder::MASK_EXPORT,
MaskBuilder::MASK_OPERATOR,
MaskBuilder::MASK_MASTER,
MaskBuilder::MASK_OWNER,
),
self::PERMISSION_OPERATOR => array(
MaskBuilder::MASK_OPERATOR,
MaskBuilder::MASK_MASTER,
MaskBuilder::MASK_OWNER,
),
self::PERMISSION_MASTER => array(
MaskBuilder::MASK_MASTER,
MaskBuilder::MASK_OWNER,
),
self::PERMISSION_OWNER => array(
MaskBuilder::MASK_OWNER,
),
);
public function getMasks($permission, $object)
{
if (!isset($this->map[$permission])) {
return;
}
return $this->map[$permission];
}
public function contains($permission)
{
return isset($this->map[$permission]);
}
}
}
namespace Symfony\Component\Security\Acl\Permission
{
interface MaskBuilderInterface
{
public function set($mask);
public function get();
public function add($mask);
public function remove($mask);
public function reset();
public function resolveMask($code);
}
}
namespace Symfony\Component\Security\Acl\Permission
{
abstract class AbstractMaskBuilder implements MaskBuilderInterface
{
protected $mask;
public function __construct($mask = 0)
{
$this->set($mask);
}
public function set($mask)
{
if (!is_int($mask)) {
throw new \InvalidArgumentException('$mask must be an integer.');
}
$this->mask = $mask;
return $this;
}
public function get()
{
return $this->mask;
}
public function add($mask)
{
$this->mask |= $this->resolveMask($mask);
return $this;
}
public function remove($mask)
{
$this->mask &= ~$this->resolveMask($mask);
return $this;
}
public function reset()
{
$this->mask = 0;
return $this;
}
}
}
namespace Symfony\Component\Security\Acl\Permission
{
class MaskBuilder extends AbstractMaskBuilder
{
const MASK_VIEW = 1; const MASK_CREATE = 2; const MASK_EDIT = 4; const MASK_DELETE = 8; const MASK_UNDELETE = 16; const MASK_OPERATOR = 32; const MASK_MASTER = 64; const MASK_OWNER = 128; const MASK_IDDQD = 1073741823;
const CODE_VIEW ='V';
const CODE_CREATE ='C';
const CODE_EDIT ='E';
const CODE_DELETE ='D';
const CODE_UNDELETE ='U';
const CODE_OPERATOR ='O';
const CODE_MASTER ='M';
const CODE_OWNER ='N';
const ALL_OFF ='................................';
const OFF ='.';
const ON ='*';
public function getPattern()
{
$pattern = self::ALL_OFF;
$length = strlen($pattern);
$bitmask = str_pad(decbin($this->mask), $length,'0', STR_PAD_LEFT);
for ($i = $length - 1; $i >= 0; --$i) {
if ('1'=== $bitmask[$i]) {
try {
$pattern[$i] = self::getCode(1 << ($length - $i - 1));
} catch (\Exception $e) {
$pattern[$i] = self::ON;
}
}
}
return $pattern;
}
public static function getCode($mask)
{
if (!is_int($mask)) {
throw new \InvalidArgumentException('$mask must be an integer.');
}
$reflection = new \ReflectionClass(get_called_class());
foreach ($reflection->getConstants() as $name => $cMask) {
if (0 !== strpos($name,'MASK_') || $mask !== $cMask) {
continue;
}
if (!defined($cName ='static::CODE_'.substr($name, 5))) {
throw new \RuntimeException('There was no code defined for this mask.');
}
return constant($cName);
}
throw new \InvalidArgumentException(sprintf('The mask "%d" is not supported.', $mask));
}
public function resolveMask($code)
{
if (is_string($code)) {
if (!defined($name = sprintf('static::MASK_%s', strtoupper($code)))) {
throw new \InvalidArgumentException(sprintf('The code "%s" is not supported', $code));
}
return constant($name);
}
if (!is_int($code)) {
throw new \InvalidArgumentException('$code must be an integer.');
}
return $code;
}
}
}
namespace Sonata\AdminBundle\Security\Acl\Permission
{
use Symfony\Component\Security\Acl\Permission\MaskBuilder as BaseMaskBuilder;
class MaskBuilder extends BaseMaskBuilder
{
const MASK_LIST = 4096; const MASK_EXPORT = 8192;
const CODE_LIST ='L';
const CODE_EXPORT ='E';
}
}
namespace Sonata\AdminBundle\Security\Handler
{
use Sonata\AdminBundle\Admin\AdminInterface;
interface SecurityHandlerInterface
{
public function isGranted(AdminInterface $admin, $attributes, $object = null);
public function getBaseRole(AdminInterface $admin);
public function buildSecurityInformation(AdminInterface $admin);
public function createObjectSecurity(AdminInterface $admin, $object);
public function deleteObjectSecurity(AdminInterface $admin, $object);
}
}
namespace Sonata\AdminBundle\Security\Handler
{
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Model\AclInterface;
use Symfony\Component\Security\Acl\Model\ObjectIdentityInterface;
interface AclSecurityHandlerInterface extends SecurityHandlerInterface
{
public function setAdminPermissions(array $permissions);
public function getAdminPermissions();
public function setObjectPermissions(array $permissions);
public function getObjectPermissions();
public function getObjectAcl(ObjectIdentityInterface $objectIdentity);
public function findObjectAcls(\Traversable $oids, array $sids = array());
public function addObjectOwner(AclInterface $acl, UserSecurityIdentity $securityIdentity = null);
public function addObjectClassAces(AclInterface $acl, array $roleInformation = array());
public function createAcl(ObjectIdentityInterface $objectIdentity);
public function updateAcl(AclInterface $acl);
public function deleteAcl(ObjectIdentityInterface $objectIdentity);
public function findClassAceIndexByRole(AclInterface $acl, $role);
public function findClassAceIndexByUsername(AclInterface $acl, $username);
}
}
namespace Sonata\AdminBundle\Security\Handler
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\RoleSecurityIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Exception\AclNotFoundException;
use Symfony\Component\Security\Acl\Exception\NotAllAclsFoundException;
use Symfony\Component\Security\Acl\Model\AclInterface;
use Symfony\Component\Security\Acl\Model\MutableAclProviderInterface;
use Symfony\Component\Security\Acl\Model\ObjectIdentityInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
use Symfony\Component\Security\Core\SecurityContextInterface;
class AclSecurityHandler implements AclSecurityHandlerInterface
{
protected $tokenStorage;
protected $authorizationChecker;
protected $aclProvider;
protected $superAdminRoles;
protected $adminPermissions;
protected $objectPermissions;
protected $maskBuilderClass;
public function __construct($tokenStorage, $authorizationChecker, MutableAclProviderInterface $aclProvider, $maskBuilderClass, array $superAdminRoles)
{
if (!$tokenStorage instanceof TokenStorageInterface && !$tokenStorage instanceof SecurityContextInterface) {
throw new \InvalidArgumentException('Argument 1 should be an instance of Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface or Symfony\Component\Security\Core\SecurityContextInterface');
}
if (!$authorizationChecker instanceof AuthorizationCheckerInterface && !$authorizationChecker instanceof SecurityContextInterface) {
throw new \InvalidArgumentException('Argument 2 should be an instance of Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface or Symfony\Component\Security\Core\SecurityContextInterface');
}
$this->tokenStorage = $tokenStorage;
$this->authorizationChecker = $authorizationChecker;
$this->aclProvider = $aclProvider;
$this->maskBuilderClass = $maskBuilderClass;
$this->superAdminRoles = $superAdminRoles;
}
public function setAdminPermissions(array $permissions)
{
$this->adminPermissions = $permissions;
}
public function getAdminPermissions()
{
return $this->adminPermissions;
}
public function setObjectPermissions(array $permissions)
{
$this->objectPermissions = $permissions;
}
public function getObjectPermissions()
{
return $this->objectPermissions;
}
public function isGranted(AdminInterface $admin, $attributes, $object = null)
{
if (!is_array($attributes)) {
$attributes = array($attributes);
}
try {
return $this->authorizationChecker->isGranted($this->superAdminRoles) || $this->authorizationChecker->isGranted($attributes, $object);
} catch (AuthenticationCredentialsNotFoundException $e) {
return false;
}
}
public function getBaseRole(AdminInterface $admin)
{
return'ROLE_'.str_replace('.','_', strtoupper($admin->getCode())).'_%s';
}
public function buildSecurityInformation(AdminInterface $admin)
{
$baseRole = $this->getBaseRole($admin);
$results = array();
foreach ($admin->getSecurityInformation() as $role => $permissions) {
$results[sprintf($baseRole, $role)] = $permissions;
}
return $results;
}
public function createObjectSecurity(AdminInterface $admin, $object)
{
$objectIdentity = ObjectIdentity::fromDomainObject($object);
$acl = $this->getObjectAcl($objectIdentity);
if (is_null($acl)) {
$acl = $this->createAcl($objectIdentity);
}
$user = $this->tokenStorage->getToken()->getUser();
$securityIdentity = UserSecurityIdentity::fromAccount($user);
$this->addObjectOwner($acl, $securityIdentity);
$this->addObjectClassAces($acl, $this->buildSecurityInformation($admin));
$this->updateAcl($acl);
}
public function deleteObjectSecurity(AdminInterface $admin, $object)
{
$objectIdentity = ObjectIdentity::fromDomainObject($object);
$this->deleteAcl($objectIdentity);
}
public function getObjectAcl(ObjectIdentityInterface $objectIdentity)
{
try {
$acl = $this->aclProvider->findAcl($objectIdentity);
} catch (AclNotFoundException $e) {
return;
}
return $acl;
}
public function findObjectAcls(\Traversable $oids, array $sids = array())
{
try {
$acls = $this->aclProvider->findAcls(iterator_to_array($oids), $sids);
} catch (NotAllAclsFoundException $e) {
$acls = $e->getPartialResult();
} catch (AclNotFoundException $e) { $acls = new \SplObjectStorage();
}
return $acls;
}
public function addObjectOwner(AclInterface $acl, UserSecurityIdentity $securityIdentity = null)
{
if (false === $this->findClassAceIndexByUsername($acl, $securityIdentity->getUsername())) {
$acl->insertObjectAce($securityIdentity, constant("$this->maskBuilderClass::MASK_OWNER"));
}
}
public function addObjectClassAces(AclInterface $acl, array $roleInformation = array())
{
$builder = new $this->maskBuilderClass();
foreach ($roleInformation as $role => $permissions) {
$aceIndex = $this->findClassAceIndexByRole($acl, $role);
$hasRole = false;
foreach ($permissions as $permission) {
if (in_array($permission, $this->getObjectPermissions())) {
$builder->add($permission);
$hasRole = true;
}
}
if ($hasRole) {
if ($aceIndex === false) {
$acl->insertClassAce(new RoleSecurityIdentity($role), $builder->get());
} else {
$acl->updateClassAce($aceIndex, $builder->get());
}
$builder->reset();
} elseif ($aceIndex !== false) {
$acl->deleteClassAce($aceIndex);
}
}
}
public function createAcl(ObjectIdentityInterface $objectIdentity)
{
return $this->aclProvider->createAcl($objectIdentity);
}
public function updateAcl(AclInterface $acl)
{
$this->aclProvider->updateAcl($acl);
}
public function deleteAcl(ObjectIdentityInterface $objectIdentity)
{
$this->aclProvider->deleteAcl($objectIdentity);
}
public function findClassAceIndexByRole(AclInterface $acl, $role)
{
foreach ($acl->getClassAces() as $index => $entry) {
if ($entry->getSecurityIdentity() instanceof RoleSecurityIdentity && $entry->getSecurityIdentity()->getRole() === $role) {
return $index;
}
}
return false;
}
public function findClassAceIndexByUsername(AclInterface $acl, $username)
{
foreach ($acl->getClassAces() as $index => $entry) {
if ($entry->getSecurityIdentity() instanceof UserSecurityIdentity && $entry->getSecurityIdentity()->getUsername() === $username) {
return $index;
}
}
return false;
}
}
}
namespace Sonata\AdminBundle\Security\Handler
{
use Sonata\AdminBundle\Admin\AdminInterface;
class NoopSecurityHandler implements SecurityHandlerInterface
{
public function isGranted(AdminInterface $admin, $attributes, $object = null)
{
return true;
}
public function getBaseRole(AdminInterface $admin)
{
return'';
}
public function buildSecurityInformation(AdminInterface $admin)
{
return array();
}
public function createObjectSecurity(AdminInterface $admin, $object)
{
}
public function deleteObjectSecurity(AdminInterface $admin, $object)
{
}
}
}
namespace Sonata\AdminBundle\Security\Handler
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
use Symfony\Component\Security\Core\SecurityContextInterface;
class RoleSecurityHandler implements SecurityHandlerInterface
{
protected $authorizationChecker;
protected $superAdminRoles;
public function __construct($authorizationChecker, array $superAdminRoles)
{
if (!$authorizationChecker instanceof AuthorizationCheckerInterface && !$authorizationChecker instanceof SecurityContextInterface) {
throw new \InvalidArgumentException('Argument 1 should be an instance of Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface or Symfony\Component\Security\Core\SecurityContextInterface');
}
$this->authorizationChecker = $authorizationChecker;
$this->superAdminRoles = $superAdminRoles;
}
public function isGranted(AdminInterface $admin, $attributes, $object = null)
{
if (!is_array($attributes)) {
$attributes = array($attributes);
}
foreach ($attributes as $pos => $attribute) {
$attributes[$pos] = sprintf($this->getBaseRole($admin), $attribute);
}
$allRole = sprintf($this->getBaseRole($admin),'ALL');
try {
return $this->authorizationChecker->isGranted($this->superAdminRoles)
|| $this->authorizationChecker->isGranted($attributes, $object)
|| $this->authorizationChecker->isGranted(array($allRole), $object);
} catch (AuthenticationCredentialsNotFoundException $e) {
return false;
}
}
public function getBaseRole(AdminInterface $admin)
{
return'ROLE_'.str_replace('.','_', strtoupper($admin->getCode())).'_%s';
}
public function buildSecurityInformation(AdminInterface $admin)
{
return array();
}
public function createObjectSecurity(AdminInterface $admin, $object)
{
}
public function deleteObjectSecurity(AdminInterface $admin, $object)
{
}
}
}
namespace Sonata\AdminBundle\Show
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionCollection;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Builder\ShowBuilderInterface;
use Sonata\AdminBundle\Mapper\BaseGroupedMapper;
class ShowMapper extends BaseGroupedMapper
{
protected $list;
public function __construct(ShowBuilderInterface $showBuilder, FieldDescriptionCollection $list, AdminInterface $admin)
{
parent::__construct($showBuilder, $admin);
$this->list = $list;
}
public function add($name, $type = null, array $fieldDescriptionOptions = array())
{
if ($this->apply !== null && !$this->apply) {
return $this;
}
$fieldKey = ($name instanceof FieldDescriptionInterface) ? $name->getName() : $name;
$this->addFieldToCurrentGroup($fieldKey);
if ($name instanceof FieldDescriptionInterface) {
$fieldDescription = $name;
$fieldDescription->mergeOptions($fieldDescriptionOptions);
} elseif (is_string($name)) {
if (!$this->admin->hasShowFieldDescription($name)) {
$fieldDescription = $this->admin->getModelManager()->getNewFieldDescriptionInstance(
$this->admin->getClass(),
$name,
$fieldDescriptionOptions
);
} else {
throw new \RuntimeException(sprintf('Duplicate field name "%s" in show mapper. Names should be unique.', $name));
}
} else {
throw new \RuntimeException('invalid state');
}
if (!$fieldDescription->getLabel() && false !== $fieldDescription->getOption('label')) {
$fieldDescription->setOption('label', $this->admin->getLabelTranslatorStrategy()->getLabel($fieldDescription->getName(),'show','label'));
}
$fieldDescription->setOption('safe', $fieldDescription->getOption('safe', false));
$this->builder->addField($this->list, $type, $fieldDescription, $this->admin);
return $this;
}
public function get($name)
{
return $this->list->get($name);
}
public function has($key)
{
return $this->list->has($key);
}
public function remove($key)
{
$this->admin->removeShowFieldDescription($key);
$this->list->remove($key);
return $this;
}
public function removeGroup($group, $tab ='default', $deleteEmptyTab = false)
{
$groups = $this->getGroups();
if ($tab !=='default') {
$group = $tab.'.'.$group;
}
if (isset($groups[$group])) {
foreach ($groups[$group]['fields'] as $field) {
$this->remove($field);
}
}
unset($groups[$group]);
$tabs = $this->getTabs();
$key = array_search($group, $tabs[$tab]['groups']);
if (false !== $key) {
unset($tabs[$tab]['groups'][$key]);
}
if ($deleteEmptyTab && count($tabs[$tab]['groups']) == 0) {
unset($tabs[$tab]);
}
$this->setTabs($tabs);
$this->setGroups($groups);
return $this;
}
final public function keys()
{
return array_keys($this->list->getElements());
}
public function reorder(array $keys)
{
$this->admin->reorderShowGroup($this->getCurrentGroupName(), $keys);
return $this;
}
protected function getGroups()
{
return $this->admin->getShowGroups();
}
protected function setGroups(array $groups)
{
$this->admin->setShowGroups($groups);
}
protected function getTabs()
{
return $this->admin->getShowTabs();
}
protected function setTabs(array $tabs)
{
$this->admin->setShowTabs($tabs);
}
}
}
namespace Sonata\AdminBundle\Translator
{
interface LabelTranslatorStrategyInterface
{
public function getLabel($label, $context ='', $type ='');
}
}
namespace Sonata\AdminBundle\Translator
{
class BCLabelTranslatorStrategy implements LabelTranslatorStrategyInterface
{
public function getLabel($label, $context ='', $type ='')
{
if ($context =='breadcrumb') {
return sprintf('%s.%s_%s', $context, $type, strtolower($label));
}
return ucfirst(strtolower($label));
}
}
}
namespace Sonata\AdminBundle\Translator
{
class FormLabelTranslatorStrategy implements LabelTranslatorStrategyInterface
{
public function getLabel($label, $context ='', $type ='')
{
return ucfirst(strtolower($label));
}
}
}
namespace Sonata\AdminBundle\Translator
{
class NativeLabelTranslatorStrategy implements LabelTranslatorStrategyInterface
{
public function getLabel($label, $context ='', $type ='')
{
$label = str_replace(array('_','.'),' ', $label);
$label = strtolower(preg_replace('~(?<=\\w)([A-Z])~','_$1', $label));
return trim(ucwords(str_replace('_',' ', $label)));
}
}
}
namespace Sonata\AdminBundle\Translator
{
class NoopLabelTranslatorStrategy implements LabelTranslatorStrategyInterface
{
public function getLabel($label, $context ='', $type ='')
{
return $label;
}
}
}
namespace Sonata\AdminBundle\Translator
{
class UnderscoreLabelTranslatorStrategy implements LabelTranslatorStrategyInterface
{
public function getLabel($label, $context ='', $type ='')
{
$label = str_replace('.','_', $label);
return sprintf('%s.%s_%s', $context, $type, strtolower(preg_replace('~(?<=\\w)([A-Z])~','_$1', $label)));
}
}
}
namespace Sonata\AdminBundle\Twig\Extension
{
use Doctrine\Common\Util\ClassUtils;
use Psr\Log\LoggerInterface;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Admin\FieldDescriptionInterface;
use Sonata\AdminBundle\Admin\Pool;
use Sonata\AdminBundle\Exception\NoValueException;
use Symfony\Component\Translation\TranslatorInterface;
class SonataAdminExtension extends \Twig_Extension
{
protected $pool;
protected $logger;
protected $translator;
private $xEditableTypeMapping = array();
public function __construct(Pool $pool, LoggerInterface $logger = null, TranslatorInterface $translator = null)
{
if (null === $translator) {
@trigger_error('The $translator parameter will be required fields with the 4.0 release.',
E_USER_DEPRECATED
);
}
$this->pool = $pool;
$this->logger = $logger;
$this->translator = $translator;
}
public function getFilters()
{
return array(
new \Twig_SimpleFilter('render_list_element',
array($this,'renderListElement'),
array('is_safe'=> array('html'),'needs_environment'=> true,
)
),
new \Twig_SimpleFilter('render_view_element',
array($this,'renderViewElement'),
array('is_safe'=> array('html'),'needs_environment'=> true,
)
),
new \Twig_SimpleFilter('render_view_element_compare',
array($this,'renderViewElementCompare'),
array('is_safe'=> array('html'),'needs_environment'=> true,
)
),
new \Twig_SimpleFilter('render_relation_element',
array($this,'renderRelationElement')
),
new \Twig_SimpleFilter('sonata_urlsafeid',
array($this,'getUrlsafeIdentifier')
),
new \Twig_SimpleFilter('sonata_xeditable_type',
array($this,'getXEditableType')
),
new \Twig_SimpleFilter('sonata_xeditable_choices',
array($this,'getXEditableChoices')
),
);
}
public function getName()
{
return'sonata_admin';
}
public function renderListElement(
\Twig_Environment $environment,
$object,
FieldDescriptionInterface $fieldDescription,
$params = array()
) {
$template = $this->getTemplate(
$fieldDescription,
$fieldDescription->getAdmin()->getTemplate('base_list_field'),
$environment
);
return $this->output($fieldDescription, $template, array_merge($params, array('admin'=> $fieldDescription->getAdmin(),'object'=> $object,'value'=> $this->getValueFromFieldDescription($object, $fieldDescription),'field_description'=> $fieldDescription,
)), $environment);
}
public function output(
FieldDescriptionInterface $fieldDescription,
\Twig_Template $template,
array $parameters,
\Twig_Environment $environment
) {
$content = $template->render($parameters);
if ($environment->isDebug()) {
$commentTemplate =<<<'EOT'

<!-- START
    fieldName: %s
    template: %s
    compiled template: %s
    -->
    %s
<!-- END - fieldName: %s -->
EOT
;
return sprintf(
$commentTemplate,
$fieldDescription->getFieldName(),
$fieldDescription->getTemplate(),
$template->getTemplateName(),
$content,
$fieldDescription->getFieldName()
);
}
return $content;
}
public function getValueFromFieldDescription(
$object,
FieldDescriptionInterface $fieldDescription,
array $params = array()
) {
if (isset($params['loop']) && $object instanceof \ArrayAccess) {
throw new \RuntimeException('remove the loop requirement');
}
$value = null;
try {
$value = $fieldDescription->getValue($object);
} catch (NoValueException $e) {
if ($fieldDescription->getAssociationAdmin()) {
$value = $fieldDescription->getAssociationAdmin()->getNewInstance();
}
}
return $value;
}
public function renderViewElement(
\Twig_Environment $environment,
FieldDescriptionInterface $fieldDescription,
$object
) {
$template = $this->getTemplate(
$fieldDescription,'SonataAdminBundle:CRUD:base_show_field.html.twig',
$environment
);
try {
$value = $fieldDescription->getValue($object);
} catch (NoValueException $e) {
$value = null;
}
return $this->output($fieldDescription, $template, array('field_description'=> $fieldDescription,'object'=> $object,'value'=> $value,'admin'=> $fieldDescription->getAdmin(),
), $environment);
}
public function renderViewElementCompare(
\Twig_Environment $environment,
FieldDescriptionInterface $fieldDescription,
$baseObject,
$compareObject
) {
$template = $this->getTemplate(
$fieldDescription,'SonataAdminBundle:CRUD:base_show_field.html.twig',
$environment
);
try {
$baseValue = $fieldDescription->getValue($baseObject);
} catch (NoValueException $e) {
$baseValue = null;
}
try {
$compareValue = $fieldDescription->getValue($compareObject);
} catch (NoValueException $e) {
$compareValue = null;
}
$baseValueOutput = $template->render(array('admin'=> $fieldDescription->getAdmin(),'field_description'=> $fieldDescription,'value'=> $baseValue,
));
$compareValueOutput = $template->render(array('field_description'=> $fieldDescription,'admin'=> $fieldDescription->getAdmin(),'value'=> $compareValue,
));
$isDiff = $baseValueOutput !== $compareValueOutput;
return $this->output($fieldDescription, $template, array('field_description'=> $fieldDescription,'value'=> $baseValue,'value_compare'=> $compareValue,'is_diff'=> $isDiff,'admin'=> $fieldDescription->getAdmin(),
), $environment);
}
public function renderRelationElement($element, FieldDescriptionInterface $fieldDescription)
{
if (!is_object($element)) {
return $element;
}
$propertyPath = $fieldDescription->getOption('associated_property');
if (null === $propertyPath) {
$method = $fieldDescription->getOption('associated_tostring');
if ($method) {
@trigger_error('Option "associated_tostring" is deprecated since version 2.3 and will be removed in 4.0. '.'Use "associated_property" instead.',
E_USER_DEPRECATED
);
} else {
$method ='__toString';
}
if (!method_exists($element, $method)) {
throw new \RuntimeException(sprintf('You must define an `associated_property` option or '.'create a `%s::__toString` method to the field option %s from service %s is ',
get_class($element),
$fieldDescription->getName(),
$fieldDescription->getAdmin()->getCode()
));
}
return call_user_func(array($element, $method));
}
if (is_callable($propertyPath)) {
return $propertyPath($element);
}
return $this->pool->getPropertyAccessor()->getValue($element, $propertyPath);
}
public function getUrlsafeIdentifier($model, AdminInterface $admin = null)
{
if (is_null($admin)) {
$admin = $this->pool->getAdminByClass(ClassUtils::getClass($model));
}
return $admin->getUrlsafeIdentifier($model);
}
public function setXEditableTypeMapping($xEditableTypeMapping)
{
$this->xEditableTypeMapping = $xEditableTypeMapping;
}
public function getXEditableType($type)
{
return isset($this->xEditableTypeMapping[$type]) ? $this->xEditableTypeMapping[$type] : false;
}
public function getXEditableChoices(FieldDescriptionInterface $fieldDescription)
{
$choices = $fieldDescription->getOption('choices', array());
$catalogue = $fieldDescription->getOption('catalogue');
$xEditableChoices = array();
if (!empty($choices)) {
reset($choices);
$first = current($choices);
if (is_array($first) && array_key_exists('value', $first) && array_key_exists('text', $first)) {
$xEditableChoices = $choices;
} else {
foreach ($choices as $value => $text) {
if ($catalogue) {
if (null !== $this->translator) {
$text = $this->translator->trans($text, array(), $catalogue);
} elseif (method_exists($fieldDescription->getAdmin(),'trans')) {
$text = $fieldDescription->getAdmin()->trans($text, array(), $catalogue);
}
}
$xEditableChoices[] = array('value'=> $value,'text'=> $text,
);
}
}
}
return $xEditableChoices;
}
protected function getTemplate(
FieldDescriptionInterface $fieldDescription,
$defaultTemplate,
\Twig_Environment $environment
) {
$templateName = $fieldDescription->getTemplate() ?: $defaultTemplate;
try {
$template = $environment->loadTemplate($templateName);
} catch (\Twig_Error_Loader $e) {
@trigger_error('Relying on default template loading on field template loading exception '.'is deprecated since 3.1 and will be removed in 4.0. '.'A \Twig_Error_Loader exception will be thrown instead',
E_USER_DEPRECATED
);
$template = $environment->loadTemplate($defaultTemplate);
if (null !== $this->logger) {
$this->logger->warning(sprintf('An error occured trying to load the template "%s" for the field "%s", '.'the default template "%s" was used instead.',
$templateName,
$fieldDescription->getFieldName(),
$defaultTemplate
), array('exception'=> $e));
}
}
return $template;
}
}
}
namespace Sonata\AdminBundle\Util
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Security\Handler\AclSecurityHandlerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Security\Acl\Model\AclInterface;
interface AdminAclManipulatorInterface
{
public function configureAcls(OutputInterface $output, AdminInterface $admin);
public function addAdminClassAces(OutputInterface $output, AclInterface $acl, AclSecurityHandlerInterface $securityHandler, array $roleInformation = array());
}
}
namespace Sonata\AdminBundle\Util
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Security\Handler\AclSecurityHandlerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\RoleSecurityIdentity;
use Symfony\Component\Security\Acl\Model\AclInterface;
class AdminAclManipulator implements AdminAclManipulatorInterface
{
protected $maskBuilderClass;
public function __construct($maskBuilderClass)
{
$this->maskBuilderClass = $maskBuilderClass;
}
public function configureAcls(OutputInterface $output, AdminInterface $admin)
{
$securityHandler = $admin->getSecurityHandler();
if (!$securityHandler instanceof AclSecurityHandlerInterface) {
$output->writeln(sprintf('Admin `%s` is not configured to use ACL : <info>ignoring</info>', $admin->getCode()));
return;
}
$objectIdentity = ObjectIdentity::fromDomainObject($admin);
$newAcl = false;
if (is_null($acl = $securityHandler->getObjectAcl($objectIdentity))) {
$acl = $securityHandler->createAcl($objectIdentity);
$newAcl = true;
}
$output->writeln(sprintf(' > install ACL for %s', $admin->getCode()));
$configResult = $this->addAdminClassAces($output, $acl, $securityHandler, $securityHandler->buildSecurityInformation($admin));
if ($configResult) {
$securityHandler->updateAcl($acl);
} else {
$output->writeln(sprintf('   - %s , no roles and permissions found', ($newAcl ?'skip':'removed')));
$securityHandler->deleteAcl($objectIdentity);
}
}
public function addAdminClassAces(OutputInterface $output, AclInterface $acl, AclSecurityHandlerInterface $securityHandler, array $roleInformation = array())
{
if (count($securityHandler->getAdminPermissions()) > 0) {
$builder = new $this->maskBuilderClass();
foreach ($roleInformation as $role => $permissions) {
$aceIndex = $securityHandler->findClassAceIndexByRole($acl, $role);
$roleAdminPermissions = array();
foreach ($permissions as $permission) {
if (in_array($permission, $securityHandler->getAdminPermissions())) {
$builder->add($permission);
$roleAdminPermissions[] = $permission;
}
}
if (count($roleAdminPermissions) > 0) {
if ($aceIndex === false) {
$acl->insertClassAce(new RoleSecurityIdentity($role), $builder->get());
$action ='add';
} else {
$acl->updateClassAce($aceIndex, $builder->get());
$action ='update';
}
if (!is_null($output)) {
$output->writeln(sprintf('   - %s role: %s, permissions: %s', $action, $role, json_encode($roleAdminPermissions)));
}
$builder->reset();
} elseif ($aceIndex !== false) {
$acl->deleteClassAce($aceIndex);
if (!is_null($output)) {
$output->writeln(sprintf('   - remove role: %s', $role));
}
}
}
return true;
}
return false;
}
}
}
namespace Sonata\AdminBundle\Util
{
use Symfony\Component\Form\FormBuilderInterface;
class FormBuilderIterator extends \RecursiveArrayIterator
{
protected static $reflection;
protected $formBuilder;
protected $keys = array();
protected $prefix;
protected $iterator;
public function __construct(FormBuilderInterface $formBuilder, $prefix = false)
{
$this->formBuilder = $formBuilder;
$this->prefix = $prefix ? $prefix : $formBuilder->getName();
$this->iterator = new \ArrayIterator(self::getKeys($formBuilder));
}
public function rewind()
{
$this->iterator->rewind();
}
public function valid()
{
return $this->iterator->valid();
}
public function key()
{
$name = $this->iterator->current();
return sprintf('%s_%s', $this->prefix, $name);
}
public function next()
{
$this->iterator->next();
}
public function current()
{
return $this->formBuilder->get($this->iterator->current());
}
public function getChildren()
{
return new self($this->formBuilder->get($this->iterator->current()), $this->current());
}
public function hasChildren()
{
return count(self::getKeys($this->current())) > 0;
}
private static function getKeys(FormBuilderInterface $formBuilder)
{
return array_keys($formBuilder->all());
}
}
}
namespace Sonata\AdminBundle\Util
{
use Symfony\Component\Form\FormView;
class FormViewIterator implements \RecursiveIterator
{
protected $iterator;
public function __construct(FormView $formView)
{
$this->iterator = $formView->getIterator();
}
public function getChildren()
{
return new self($this->current());
}
public function hasChildren()
{
return count($this->current()->children) > 0;
}
public function current()
{
return $this->iterator->current();
}
public function next()
{
$this->iterator->next();
}
public function key()
{
return $this->current()->vars['id'];
}
public function valid()
{
return $this->iterator->valid();
}
public function rewind()
{
$this->iterator->rewind();
}
}
}
namespace Sonata\AdminBundle\Util
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Exception\ModelManagerException;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
interface ObjectAclManipulatorInterface
{
public function batchConfigureAcls(OutputInterface $output, AdminInterface $admin, UserSecurityIdentity $securityIdentity = null);
}
}
namespace Sonata\AdminBundle\Util
{
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Security\Handler\AclSecurityHandlerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
abstract class ObjectAclManipulator implements ObjectAclManipulatorInterface
{
public function configureAcls(OutputInterface $output, AdminInterface $admin, \Traversable $oids, UserSecurityIdentity $securityIdentity = null)
{
$countAdded = 0;
$countUpdated = 0;
$securityHandler = $admin->getSecurityHandler();
if (!$securityHandler instanceof AclSecurityHandlerInterface) {
$output->writeln(sprintf('Admin `%s` is not configured to use ACL : <info>ignoring</info>', $admin->getCode()));
return array(0, 0);
}
$acls = $securityHandler->findObjectAcls($oids);
foreach ($oids as $oid) {
if ($acls->contains($oid)) {
$acl = $acls->offsetGet($oid);
++$countUpdated;
} else {
$acl = $securityHandler->createAcl($oid);
++$countAdded;
}
if (!is_null($securityIdentity)) {
$securityHandler->addObjectOwner($acl, $securityIdentity);
}
$securityHandler->addObjectClassAces($acl, $securityHandler->buildSecurityInformation($admin));
try {
$securityHandler->updateAcl($acl);
} catch (\Exception $e) {
$output->writeln(sprintf('Error saving ObjectIdentity (%s, %s) ACL : %s <info>ignoring</info>', $oid->getIdentifier(), $oid->getType(), $e->getMessage()));
}
}
return array($countAdded, $countUpdated);
}
}
}