<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inland_toner_child
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php
	if ( has_post_thumbnail() ) :
		wonkasoft_starter_post_thumbnail();
		?>
	<?php else : ?>
		<div class="post-thumbnail">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/chalk_board_image.jpeg' ); ?>" class="img-responsive wonkasoft-logo-cover" />
		</div>
	<?php endif; ?>
	
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<hr />
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
