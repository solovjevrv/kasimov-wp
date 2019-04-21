<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'kasimov_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function kasimov_scripts() {
	// подключение стилей
	// wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.min.css');
	wp_enqueue_style( 'rangeslider', get_template_directory_uri() . '/css/rangeslider.css');
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.min.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'fonts_css', get_template_directory_uri() . '/css/fonts.css');

	// подключение скриптов
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'lightbox.min', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'parallax.min', get_template_directory_uri() . '/js/parallax.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'rangeslider.min', get_template_directory_uri() . '/js/rangeslider.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'swiper.min', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), '1.0.0', true );
	
}
// регистрация меню
add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'primary' => 'Основное меню',
		'secondary' => 'Футер меню',
		
	) );
	add_theme_support( 'post-thumbnails', array( 'post' ) );
	add_filter( 'excerpt_length', function(){
		return 20;
	} );
	add_filter('excerpt_more', function($more) {
		return '  ...';
	});
});

