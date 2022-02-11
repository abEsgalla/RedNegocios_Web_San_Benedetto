<?php

// Registro del PostType Landing
function registrar_cpt_landing() {

	$supports = array(
		'title', // post title
		'editor', // post content
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'revisions', // post revisions
		'post-formats', // post formats
	);

	$labels = array(
		'name' => _x('Landings', 'plural'),
		'singular_name' => _x('Landing', 'singular'),
		'menu_name' => _x('Landings', 'admin menu'),
		'name_admin_bar' => _x('Landings', 'admin bar'),
		'add_new' => _x('Añadir landing', 'add new'),
		'add_new_item' => __('Añadir nueva landing'),
		'new_item' => __('Nuevo landing'),
		'edit_item' => __('Editar landing'),
		'view_item' => __('Ver landing'),
		'all_items' => __('Todas las landings'),
		'search_items' => __('Buscar landing'),
		'not_found' => __('No se ha encontrado la landing.'),
	);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public'  => true,
		'publicly_queryable' => true,
		'show_ui'  => true,
		'show_in_menu'  => true,
		'query_var'  => true,
		'rewrite'  => array( 'slug' => 'landings' ),
		'capability_type'   => 'page',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-book-alt',
		'menu_position' => 5
	);
	register_post_type( 'landing', $args );
	
}
add_action( 'init', 'registrar_cpt_landing');