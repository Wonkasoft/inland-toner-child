<<<<<<< HEAD
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wonkasoft_Starter
 */

$copyright = ( ! empty( get_theme_mod( 'copyright_bar_message', false ) ) ) ? get_theme_mod( 'copyright_bar_message', false ) : 'all rights reserved.';
?>

	<footer id="colophon" class="site-footer container-fluid">
		<div class="row footer-columns-row">
		<?php
		$get_column_count = get_theme_mod( 'footer_columns', 1 );
		$col_class        = ( 1 < $get_column_count ) ? 'col col-12 col-md-' . ( 12 / $get_column_count ) : 'col col-12';
		for ( $i = 0; $i < $get_column_count; $i++ ) :

			?>
			<div class="<?php echo esc_attr( $col_class ); ?>">
				<?php
				switch ( ( $i + 1 ) ) :
					case 1:
						?>
							<h3 class="<?php echo esc_attr( 'footer-title footer-menu-' . ( $i + 1 ) . '-title' ); ?>">Information</h3>
							<?php
						break;
					case 2:
						?>
							<h3 class="<?php echo esc_attr( 'footer-title footer-menu-' . ( $i + 1 ) . '-title' ); ?>">Toner</h3>
							<?php
						break;
					case 3:
						?>
							<h3 class="<?php echo esc_attr( 'footer-title footer-menu-' . ( $i + 1 ) . '-title' ); ?>">Contact Us</h3>
							<?php
						break;

					endswitch;
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu-' . ( $i + 1 ),
							'menu_id'        => 'footer-menu-' . ( $i + 1 ),
							'container_id'   => 'footer-menus',
						)
					);
			?>
			</div>
		<?php endfor; ?>
		</div>
		<div class="row site-info-row">
			<div class="col col-12">
				<div class="site-info">
					<span class="copyright-text">
					<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( '&copy; %1$1s %2$2s', 'wonkasoft-starter' ), gmdate( 'Y' ), esc_html( $copyright ) );
					?>
					</span>
					<span class="sep"> | </span>
					<span class="website-credit-text">
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Website by %s.', 'wonkasoft-starter' ), '<a href="https://wonkasoft.com">Wonkasoft</a>' );
					?>
					</span>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

			<?php wp_footer(); ?>

</body>
</html>
=======
  <section class="footer">
    <div class="footer-content">
      <div class="footer-section-info">
        <h3>INFORMATION</h3>
        <br>
        <ul>
          <li><a href="/about">About INLAND Toner</a></li>
          <li><a href="/about">Our Services</a></li>
          <li><a href="/about#customers">Our Customers</a></li>
          <li><a href="/about#certification">Certification</a></li>
        </ul>
      </div>
      <div class="footer-section-toner">
        <h3>TONER</h3>
        <br>
        <ul>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/toner">Catalog</a></li>
          <li><a href="/quote">Get a Quote</a></li>
          <li><a href="/about#manufacturers">Our Manufacturers</a></li>
        </ul>
      </div>
      <div class="footer-section-contact">
        <h3>CONTACT US</h3>
        <br>
        <ul>
          <li><a href="tel:3104188905">+1(951)-834-4260</a></li>
          <li><a href="mailto: support@inlandtoner.com">support@inlandtoner.com</a></li>
          <li><a href="#">INLAND Toner Facebook</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <h5>&copy; INLAND Toner 2020 | Designed by NEXTapp.</h5>
    </div>
  </section>

  <? wp_footer(); ?>
</body>
>>>>>>> f27bf7fdc719e5471dcab6c9c6e8f750d683a242
