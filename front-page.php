<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inland_toner_child
 */

global $wp_query;
$pagename_class = ! empty( $wp_query->queried_object->post_name ) ? ' main-' . $wp_query->queried_object->post_name : '';
get_header(); ?>
	
	<main id="main" class="site-main<?php echo esc_attr( $pagename_class ); ?>">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-home', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
get_footer();
