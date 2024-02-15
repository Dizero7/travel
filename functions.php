<?php

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css',);
	wp_enqueue_style('icon-library', 'https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css');
});
add_action('after_setup_theme', function () {
	add_theme_support('menus');
	register_nav_menus([
		'header-menu' => 'Header menu',
		'footer-menu1' => 'Footer menu 1',
		'footer-menu2' => 'Footer menu 2',
		'footer-menu3' => 'Footer menu 3',
		'footer-menu4' => 'Footer menu 4',
	]);
	
});