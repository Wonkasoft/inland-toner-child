<<<<<<< HEAD
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

get_header(); ?>
	
	<main id="main" class="site-main">
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
=======
<? get_header(); ?>

<section class="services">
  <img src="<? echo get_stylesheet_directory_uri(); ?>/IMAGES/americanflag.png" />
  <div class="content">
    <h1 class="heading">We help your business grow.</h1>
    <p>
      We know that running a business is your priority and we're here to help.
      We offer a cost effective, eco-friendly solution to buying retail toner
      cartridges; and our products are manufactured right here in the USA with a 100% quality guarantee.
    </p>
    <button class="learn-cta"><a href="/about">LEARN MORE</a></button>
  </div>
  <div class="container">
    <div class="serviceBx">
      <div>
        <i class="fas fa-hand-holding-usd fa-6x"></i>
        <h2>EFFICIENT</h2>
      </div>
    </div>
    <div class="serviceBx">
      <div>
        <i class="fas fa-heart fa-6x"></i>
        <h2>QUALITY</h2>
      </div>
    </div>
    <div class="serviceBx">
      <div>
        <i class="fas fa-globe-americas fa-6x"></i>
        <h2>ECO-FRIENDLY</h2>
      </div>
    </div>
  </div>
</section>

<? get_footer(); ?>
>>>>>>> f27bf7fdc719e5471dcab6c9c6e8f750d683a242
