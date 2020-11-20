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

$copyright_bar_color = get_theme_mod( 'copyright_bar_color', 'transparent' );
$copyright           = get_theme_mod( 'copyright_bar_message', 'all rights reserved.' );
$msg_align           = get_theme_mod( 'copyright_message_align', ' text-center' );
?>

	<footer id="colophon" class="site-footer container-fluid">
		<div class="row footer-columns-row">
		<?php
		$get_column_count = get_theme_mod( 'footer_columns', 1 );
		$col_class        = ( 1 < $get_column_count ) ? 'col col-12 col-md-' . ( 12 / $get_column_count / $get_column_count ) : 'col col-12';
		for ( $i = 0; $i < $get_column_count; $i++ ) :

			?>
			<div class="<?php echo esc_attr( $col_class ); ?>">
				<?php
				switch ( ( $i + 1 ) ) :
					case 1:
						?>
							<h3 class="<?php echo esc_attr( 'footer-title footer-menu-' . ( $i + 1 ) . '-title' ); ?>">More about us</h3>
							<?php
						break;
					case 2:
						?>
							<h3 class="<?php echo esc_attr( 'footer-title footer-menu-' . ( $i + 1 ) . '-title' ); ?>">Get in touch</h3>
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
		<div class="row site-info-row" style="background:<?php echo esc_attr( $copyright_bar_color ); ?>;">
			<div class="col col-12<?php echo esc_attr( $msg_align ); ?>">
				<div class="site-info">
					<span class="copyright-text">
					<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html( '&copy; %1$1s %2$2s', 'wonkasoft-starter' ), esc_html( gmdate( 'Y' ) ), esc_html( $copyright ) );
					?>
					</span>
					<span class="sep"> | </span>
					<span class="website-credit-text">
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Website by %s', 'wonkasoft-starter' ), '<a href="https://wonkasoft.com">Wonkasoft</a>' );
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
