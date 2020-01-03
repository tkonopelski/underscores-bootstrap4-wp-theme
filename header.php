<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpms
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wpms' ); ?></a>

	<header id="masthead" class="site-header">

		<div id="topNav" class="container">
			<div class="row">
				<div class="col-4">
					<?php dynamic_sidebar( 'top-nav-left' ); ?>
				</div>
				<div class="col"></div>
				<div class="col-3 ">

				<div class="">
				<?php dynamic_sidebar( 'top-nav-right' ); ?>
				</div>

				</div>
		</div>

		</div>

		<nav id="site-navigation" class="main-navigation111 navbar navbar-expand-md navbar-light " role="navigation">
		<div class="container">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
    		</button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">LOGO</a>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'menu-1',
				'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'bs-example-navbar-collapse-1',
				//'menu_class'      => 'navbar-nav mr-auto',
				'menu_class'        => 'nav navbar-nav ml-auto',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
