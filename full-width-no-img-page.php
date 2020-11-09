<?php
/**
 * Template Name: Full Width No Img
 *
 * @author Wonkasoft,LLC <support@wonkasoft.com>
 * @package inland_toner_child
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || exit;

get_header(); ?>
	
	<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-no-img', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
get_footer();
