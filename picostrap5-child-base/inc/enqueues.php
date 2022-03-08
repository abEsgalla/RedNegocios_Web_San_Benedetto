<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//ENQUEUE
function esgalla_scripts() {
	
	// Swiper slider
	wp_enqueue_style( 'swiper-slider-css', get_stylesheet_directory_uri() . '/css-output/swiper-bundle.min.css', array('picostrap-styles'), time());
	wp_enqueue_script( 'swiper-slider-js', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), false, true );
	wp_enqueue_script( 'swiper-slider-custom-js', get_stylesheet_directory_uri() . '/js/swiper-slider-custom.js', array('swiper-slider-js'), false, true );

	// Animate Scroll
	wp_enqueue_style( 'animate-scroll-css', get_stylesheet_directory_uri() . '/css-output/animate-scroll.min.css', array('picostrap-styles'), time());
	wp_enqueue_script( 'animate-scroll-js', get_stylesheet_directory_uri() . '/js/animate-scroll.min.js', array(), false, true );
	wp_enqueue_script( 'animate-scroll-custom-js', get_stylesheet_directory_uri() . '/js/animate-scroll-custom.js', array('animate-scroll-js'), false, true );

	// Filtro Tabs JS
	wp_enqueue_script( 'filtros-search-js', get_stylesheet_directory_uri() . '/js/filtros-search.js', array(), false, true );

	// Cursor custom JS
	wp_enqueue_script( 'cursor-custom-js', get_stylesheet_directory_uri() . '/js/cursor-custom.js', array(), false, true );

	// Cabecera
	wp_enqueue_script( 'efectos-cabecera-js', get_stylesheet_directory_uri() . '/js/efectos-cabecera.js', array('bootstrap5'), false, true );

	// Custom JS
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array(), false, true );

	//AÑADIR BUNDLE SASS CUSTOM AUTOCOMPILADO
	wp_enqueue_style( 'esgalla_custom_bundle', get_stylesheet_directory_uri() . '/' . picostrap_get_css_optional_subfolder_name() . 'esgalla_custom_bundle.css', array(), time());
}

add_action( 'wp_enqueue_scripts', 'esgalla_scripts' );