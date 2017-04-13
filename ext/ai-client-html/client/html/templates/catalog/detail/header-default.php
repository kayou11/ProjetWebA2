<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2012
 * @copyright Aimeos (aimeos.org), 2015-2016
 */

$enc = $this->encoder();

/** client/html/common/template/baseurl
 * Path to the template directory or template base URL to a server
 *
 * This option must point to the base path or URL of the used template. This
 * directory must contain a "css/, "js/" and "images/" subdirectory with the
 * necessary files referenced in the HTML code.
 *
 * If you use an absolute URL prefer the https protocol to avoid issues with mixed
 * content. Browsers avoid to load files via http if the page was retrieved via
 * https.
 *
 * @param string Relative path or absolute URL
 * @since 2014.03
 * @see client/html/common/content/baseurl
 */
$templateUrl = $this->config( 'client/html/common/template/baseurl' );

$detailTarget = $this->config( 'client/html/catalog/detail/url/target' );
$detailController = $this->config( 'client/html/catalog/detail/url/controller', 'catalog' );
$detailAction = $this->config( 'client/html/catalog/detail/url/action', 'detail' );
$detailConfig = $this->config( 'client/html/catalog/detail/url/config', [] );


/** client/html/catalog/detail/metatags
 * Adds the title, meta and link tags to the HTML header
 *
 * By default, each instance of the catalog list component adds some HTML meta
 * tags to the page head section, like page title, meta keywords and description
 * as well as some link tags to support browser navigation. If several instances
 * are placed on one page, this leads to adding several title and meta tags used
 * by search engine. This setting enables you to suppress these tags in the page
 * header and maybe add your own to the page manually.
 *
 * @param boolean True to display the meta tags, false to hide it
 * @since 2017.01
 * @category Developer
 * @category User
 * @see client/html/catalog/lists/metatags
 */


?>
<?php if( (bool) $this->config( 'client/html/catalog/detail/metatags', true ) === true ) : ?>

	<?php if( isset( $this->detailProductItem ) ) : ?>

		<title><?php echo $enc->html( $this->detailProductItem->getName() ); ?></title>

		<?php foreach( $this->detailProductItem->getRefItems( 'text', 'meta-keyword', 'default' ) as $textItem ) : ?>
			<meta name="keywords" content="<?php echo $enc->attr( strip_tags( $textItem->getContent() ) ); ?>" />
		<?php endforeach; ?>

		<?php foreach( $this->detailProductItem->getRefItems( 'text', 'meta-description', 'default' ) as $textItem ) : ?>
			<meta name="description" content="<?php echo $enc->attr( strip_tags( $textItem->getContent() ) ); ?>" />
		<?php endforeach; ?>

		<?php $params = array( 'd_name' => $this->detailProductItem->getName( 'url' ), 'd_prodid' => $this->detailProductItem->getId() ); ?>
		<link rel="canonical" href="<?php echo $enc->attr( $this->url( $detailTarget, $detailController, $detailAction, $params, [], $detailConfig ) ); ?>" />

	<?php endif; ?>

	<meta name="application-name" content="Aimeos" />

<?php endif; ?>

<?php if( isset( $this->detailStockUrl ) ) : ?>
	<script type="text/javascript" defer="defer" src="<?php echo $enc->attr( $this->detailStockUrl ); ?>"></script>
<?php endif; ?>

<?php echo $this->get( 'detailHeader' ); ?>
