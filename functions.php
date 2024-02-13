<?php

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css',);
	
});
add_action('after_setup_theme', function () {
	add_theme_support('menus');
	register_nav_menus([
		'header-menu' => 'Header menu',
		'footer-menu' => 'Footer menu',
	]);
	
});