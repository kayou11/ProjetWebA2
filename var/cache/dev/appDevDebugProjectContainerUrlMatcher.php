<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/c6d7f5d')) {
            // _assetic_c6d7f5d
            if ($pathinfo === '/css/c6d7f5d.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6d7f5d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c6d7f5d',);
            }

            if (0 === strpos($pathinfo, '/css/c6d7f5d_')) {
                if (0 === strpos($pathinfo, '/css/c6d7f5d_bootstrap')) {
                    // _assetic_c6d7f5d_0
                    if ($pathinfo === '/css/c6d7f5d_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6d7f5d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c6d7f5d_0',);
                    }

                    // _assetic_c6d7f5d_1
                    if ($pathinfo === '/css/c6d7f5d_bootstrap-theme_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6d7f5d',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c6d7f5d_1',);
                    }

                }

                // _assetic_c6d7f5d_2
                if ($pathinfo === '/css/c6d7f5d_main_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6d7f5d',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_c6d7f5d_2',);
                }

                // _assetic_c6d7f5d_3
                if ($pathinfo === '/css/c6d7f5d_boostrap-social_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6d7f5d',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_c6d7f5d_3',);
                }

                // _assetic_c6d7f5d_4
                if ($pathinfo === '/css/c6d7f5d_index_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6d7f5d',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_c6d7f5d_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/04f180e')) {
            // _assetic_04f180e
            if ($pathinfo === '/js/04f180e.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '04f180e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_04f180e',);
            }

            // _assetic_04f180e_0
            if ($pathinfo === '/js/04f180e_bootstrap_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '04f180e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_04f180e_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'site_homepage');
            }

            return array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'site_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
