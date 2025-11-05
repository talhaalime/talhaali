<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package talha-ali
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function talha_ali_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'talha_ali_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function talha_ali_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'talha_ali_pingback_header' );

// function talha_ali_navigation_menu() {
// 	wp_nav_menu(array(
// 		'theme_location' => 'menu-1',
// 		'menu_class'     => 'header__list',
// 		'container'      => false,
// 		'walker'         => new Custom_Nav_Walker(),
// 	)); 
// }

// Add ACF Theme Options Page
add_action('acf/init', function() {
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Theme Settings',
            'menu_title'    => 'Theme Options',
            'menu_slug'     => 'theme-options',
            'capability'    => 'edit_posts',
            'redirect'      => false,
            'position'      => 2,
            'icon_url'      => 'dashicons-admin-generic',
        ));
    }
});

function talhaali_enqueue_scripts() {
    // CSS Files

	 // Enqueue Stylesheets
    wp_enqueue_style('talhaali-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version')); // Theme Style CSS
    
    // font-awesome CSS
    wp_enqueue_style('talhaali-font-awesome-style-css', get_template_directory_uri() . '/asset/css/font-awesome.css', array(), null);
	
	// fancybox CSS
    wp_enqueue_style('talhaali-fancybox-style-css', get_template_directory_uri() . '/asset/css/fancybox.css', array(), null);

	// splide CSS
    wp_enqueue_style('talhaali-splide-style-css', get_template_directory_uri() . '/asset/css/splide.css', array(), null);
	
    // style CSS
    wp_enqueue_style('talhaali-main-style-css', get_template_directory_uri() . '/asset/css/style.css', array(), null); 


    wp_enqueue_style('talhaali-swiper-bundle-css', get_template_directory_uri() . '/asset/css/swiper-bundle.css', array(), null);

	// JQuery JS
    // wp_enqueue_script('talhaali-jquery-scripts', get_template_directory_uri() . '/asset/js/tailwind.js', array('jquery'), true);
  	
	

	// JQuery JS
    wp_enqueue_script('talhaali-jquery-scripts', get_template_directory_uri() . '/asset/js/jquery.js', array('jquery'), true);
  	
	// lenis JS
    wp_enqueue_script('talhaali-lenis-scripts', get_template_directory_uri() . '/asset/js/lenis.min.js', array('jquery'), true);

	// splide js
    wp_enqueue_script('talhaali-splide-scripts', get_template_directory_uri() . '/asset/js/splide.min.js', array('jquery'), null, true);

	// gsa js
    wp_enqueue_script('talhaali-gsa-scripts', get_template_directory_uri() . '/asset/js/gsa.js', array('jquery'), null, true);

	// ScrollTrigge js
	wp_enqueue_script('talhaali-scrolltrigger-scripts', get_template_directory_uri() . '/asset/js/ScrollTrigge.js', array('jquery'), null, true);

	// custom js
    wp_enqueue_script('talhaali-custom-theme-scripts', get_template_directory_uri() . '/asset/js/custom.js', array('jquery'), null, true);

	// swiper-bundle js
    wp_enqueue_script('talhaali-swiper-bundle-scripts', get_template_directory_uri() . '/asset/js/swiper-bundle.js', array('jquery'), null, true);

	// lib-init js
    wp_enqueue_script('talhaali-lib-init-scripts', get_template_directory_uri() . '/asset/js/lib-init.js', array('jquery'), null, true);


    wp_enqueue_script('talhaali-tailwind-scripts', get_template_directory_uri() . '/asset/js/tailwind.js', array('jquery'), true);


}

add_action('wp_enqueue_scripts', 'talhaali_enqueue_scripts');
