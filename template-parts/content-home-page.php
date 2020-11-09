<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wonkasoft_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php
	if ( has_post_thumbnail() ) :
		?>
			<div class="home-page-thumbnail" style="background: url( '<?php echo esc_url( get_the_post_thumbnail_url( $post ) ); ?>' ), rgba( 0, 0, 0, .6 ); background-repeat: no-repeat; background-position: center; background-size: cover; background-blend-mode: overlay;">
				<img class="US-flag" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/americanflag.png' ); ?>" />
				<div class="row">
					<div class="col col-12">
						<h1 class="section-title">Save money on printing costs</h1>
					</div>
				</div>
				<div class="row">
					<div class="col col-12">
						<h2>
							We offer high-quality, cost efficient toners for your business needs
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col col-12">
						<h3>
							Get a quote and start saving today!
						</h3>
					</div>
				</div>
				<div class="row btn-row">
					<div class="col col-12 col-md-6">
						<a href="javascript.void[0];" class="btn btn-dark">Learn More</a>
					</div>
					<div class="col col-12 col-md-6">
						<a href="javascript.void[0];" class="btn btn-light">Get A Quote</a>
					</div>
				</div>
			</div>
	<?php else : ?>
		<div class="home-page-thumbnail" style="background: url( '<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/chalk_board_image.jpeg' ); ?>' ); background-repeat: no-repeat; background-position: center; background-size: cover;">
			<img class="US-flag" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/americanflag.png' ); ?>" />
			<div class="row">
				<div class="col col-12">
					<h1 class="section-title">Save money on printing costs</h1>
				</div>
			</div>
			<div class="row">
					<div class="col col-12">
						<h2>
							We offer high-quality, cost efficient toners for your business needs
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col col-12">
						<h3>
							Get a quote and start saving today!
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col col-12 col-md-6">
						<a href="javascript.void[0];" class="btn btn-dark">Learn More</a>
					</div>
					<div class="col col-12 col-md-6">
						<a href="javascript.void[0];" class="btn btn-light">Get A Quote</a>
					</div>
				</div>
		</div>
	<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wonkasoft-starter' ),
					'after'  => '</div>',
				)
			);
			?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'wonkasoft-starter' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
