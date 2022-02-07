<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//ENQUEUE
function esgalla_scripts() {
	
	// Swiper slider
	wp_enqueue_style( 'swiper-slider-css', get_stylesheet_directory_uri() . '/css-output/swiper-bundle.min.css', array('picostrap-styles'), time());
	wp_enqueue_script( 'swiper-slider-js', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), false, true );
	wp_enqueue_script( 'swiper-slider-custom-js', get_stylesheet_directory_uri() . '/js/swiper-slider-custom.js', array('swiper-slider-js'), false, true );

	//AÑADIR BUNDLE SASS CUSTOM AUTOCOMPILADO
	wp_enqueue_style( 'esgalla_custom_bundle', get_stylesheet_directory_uri() . '/' . picostrap_get_css_optional_subfolder_name() . 'esgalla_custom_bundle.css', array(), time());
}

add_action( 'wp_enqueue_scripts', 'esgalla_scripts' );