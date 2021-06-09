<?php
/* Inline script printed out in the header */

add_action('wp_enqueue_scripts', 'add_script');
function add_script() {
	// Adding Swiper Js
	wp_register_script('js-swiper', 'https://unpkg.com/swiper/swiper-bundle.js', array(), '6.6.2', true);
	wp_enqueue_script('js-swiper');
	wp_register_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '6.6.2', true);
	wp_enqueue_script('swiper');

	// Adding Bootstrap Js
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array (), '5.0.0', true);
	
	// Adding Iconofy
	wp_enqueue_script( 'iconify', '<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>', array (), '1.0.7', true);
	
	// Adding Main JS
	wp_register_script('js-home', get_stylesheet_directory_uri().'/src/js/main.js', array(), '1', true);
	wp_enqueue_script('js-home');

}

add_action('wp_enqueue_scripts', 'add_css');
function add_css(){
	wp_register_style('first', get_template_directory_uri().'/assets/css/main.css', array(), '1.1', 'all');
	wp_enqueue_style('first');
}

function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' )
	   )
	 );
   }
add_action( 'init', 'register_my_menus' );

