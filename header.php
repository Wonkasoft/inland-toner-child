<<<<<<< HEAD
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wonkasoft_Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		$header_cols = ' header-column-' . get_theme_mod( 'header_columns', 2 );
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wonkasoft-starter' ); ?></a>

	<header id="masthead" class="site-header<?php echo esc_attr( $header_cols ); ?>">
		<?php
		if ( ! empty( get_theme_mod( 'enable_topbar' ) ) ) :
			$top_banner_color = ( ! empty( get_theme_mod( 'topbar_color', false ) ) ) ? ' style=background-color:' . get_theme_mod( 'topbar_color', '#fff' ) . ';' : '';
			$top_message      = ( ! empty( get_theme_mod( 'topbar_message', false ) ) ) ? get_theme_mod( 'topbar_message', false ) : '';

			?>
			<div class="top-banner-message"<?php echo esc_attr( $top_banner_color ); ?>>
				<span class="top-banner-message-text"><?php echo esc_html( $top_message ); ?></span>
			</div><!-- .contact-number -->
		<?php endif; ?>
		<?php
		if ( has_custom_logo() ) :
			?>
		
		<div class="site-branding-with-logo">
				<div class="custom-logo"><?php the_custom_logo(); ?></div>
			<?php
			if ( is_front_page() && is_home() ) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1>INLAND <span>Toner</span></h1></a></div>
					<?php
			endif;
				$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) :
				?>
				<div class="site-description sr-only"><?php echo $description; /* WPCS: xss ok. */ ?></div>
					<?php
			endif;
			else :
				?>
		<div class="site-branding">
					<?php
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
						<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?></h1></a></div>
							<?php
						endif;
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) :
							?>
					<div class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
							<?php
					endif;
			endif;

			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<span class="hang-a-bur hang-a-bur-top"></span>
				<span class="hang-a-bur hang-a-bur-mid"></span>
				<span class="hang-a-bur hang-a-bur-bottom"></span>
			</button>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container_id'   => 'top-main',
					)
				);
				?>
		</nav><!-- #site-navigation -->

		<a href="javascript.void[0];" class="btn">Contact</a>
		
	</header><!-- #masthead -->
=======
<!doctype html>
<html <? language_attributes(); ?>>

	<head>
		<meta charset="<? bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Nick Navarro">
		<meta name="description" content="INLAND Toner helps your business grow by offering cost efficient, eco-friendly toner cartridges for your printing needs!">
		<meta name="keywords" content="Socal, California, Inland Empire, Murrieta, Riverside County, Ink cartridge, Toner, Printing, Business">
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
			integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
			crossorigin="anonymous"
		/>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<? wp_head(); ?>
	</head>

	<body <? body_class(); ?>>

		<header>
			<div class="logo">
				<a href="/">
					<img src="<? echo get_stylesheet_directory_uri(); ?>/IMAGES/logo.png" />
					<h1><span>INLAND</span> Toner</h1>
				</a>
			</div>
			<nav>
				<ul class="nav_links">
					<li><a href="/">Home</a></li>
					<li><a href="/toner">Toner Catalog</a></li>
					<li><a href="/faq">FAQ</a></li>
					<li><a href="/about">About Us</a></li>
				</ul>
			</nav>
			<button class="nav-cta"><a href="/quote">GET A QUOTE</a></button>
		</header>
>>>>>>> f27bf7fdc719e5471dcab6c9c6e8f750d683a242
