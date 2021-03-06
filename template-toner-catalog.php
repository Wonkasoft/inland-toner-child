<?php
/**
 * Template Name: Toner Catalog
 *
 * @package inland_toner_child
 */

get_header(); ?>

<main id="main" class="site-main">
<section class="toner">
  <h1>Toner Catalog</h1>
  <div class="pdf-content">
	  <p>
		Please browse through our catalog to see what toner we have available. In
		addition to our remanufactured OEMs, we do have compatibles available
		which are noted in the catalog.
	  </p>
	  <p>You can download a copy <a href="<?php echo esc_url( get_stylesheet_directory_uri() . '/files/inlandpdf.pdf' ); ?>" download>here</a></p>
	  <p>Have any questions? Email us at <a href="mailto: support@inlandtoner.com">support@inlandtoner.com</a></p>

	<div class="pdf">
		<?php echo do_shortcode( '[toner-list]' ); ?>
	</div>

	<p class="cta-pdf">To see where quality toner can take your business, get quote and start saving!</p>
	<button class="pdf-cta"><a href="<?php echo esc_url( get_site_url() . '/quote', null, 'display' ); ?>">GET A QUOTE</a></button>
  </div>
</section>
</main>

<?php get_footer(); ?>
