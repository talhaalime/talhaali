<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package talha-ali
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

<?php 
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();   
    }
?>
<div id="page" class="site">
	<!--
	┌─────────────────────────────────────────────┐
	│          VERTICAL LINE CONTAINER            │
	└─────────────────────────────────────────────┘
	-->
	<div class="container-auto">
		<div class="lines-container">
			<div class="verticle-line"></div>
			<div class="verticle-line"></div>
			<div class="verticle-line"></div>
			<div class="verticle-line"></div>
			<div class="verticle-line"></div>
		</div>
	</div>

	<div class="section-bg-img">
		<img src="<?php echo get_template_directory_uri(); ?>/asset/images/section-bg-circle-shape.png" alt="" />
	</div>

	<!--
	┌─────────────────────────────────────────────┐
	│          SECTION HEADER : START             │
	└─────────────────────────────────────────────┘
	-->

	<header class="header" id="site-header" role="header">
		<?php get_template_part( 'template-parts/header/nav' ); ?> 
	</header><!-- #masthead -->
