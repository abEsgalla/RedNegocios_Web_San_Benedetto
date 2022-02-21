<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//ENQUEUE
function esgalla_scripts() {
	
	// Swiper slider
	wp_enqueue_style( 'swiper-slider-css', get_stylesheet_directory_uri() . '/css-output/swiper-bundle.min.css', array('picostrap-styles'), time());
	wp_enqueue_script( 'swiper-slider-js', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), false, true );
	wp_enqueue_script( 'swiper-slider-custom-js', get_stylesheet_directory_uri() . '/js/swiper-slider-custom.js', array('swiper-slider-js'), false, true );

	// Filtro Tabs JS
	wp_enqueue_script( 'filtros-search-js', get_stylesheet_directory_uri() . '/js/filtros-search.js', array(), false, true );

	// Cursor custom JS
	wp_enqueue_script( 'cursor-custom-js', get_stylesheet_directory_uri() . '/js/cursor-custom.js', array(), false, true );

	// Custom JS
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array(), false, true );

	//AÑADIR BUNDLE SASS CUSTOM AUTOCOMPILADO
	wp_enqueue_style( 'esgalla_custom_bundle', get_stylesheet_directory_uri() . '/' . picostrap_get_css_optional_subfolder_name() . 'esgalla_custom_bundle.css', array(), time());
}

add_action( 'wp_enqueue_scripts', 'esgalla_scripts' );