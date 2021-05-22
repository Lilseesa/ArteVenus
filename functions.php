<?php
/* Inline script printed out in the header */
add_action('wp_enqueue_scripts', 'add_script');
function add_script() {
    wp_register_script('js-home', get_stylesheet_directory_uri().'js/main.js', array(), '1', true);
	wp_enqueue_script('js-home');
	wp_register_script('js-swiper', 'https://unpkg.com/swiper/swiper-bundle.js', array(), '6.6.2', true);
	wp_enqueue_script('js-swiper');
	wp_register_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '6.6.2', true);
	wp_enqueue_script('swiper');
}