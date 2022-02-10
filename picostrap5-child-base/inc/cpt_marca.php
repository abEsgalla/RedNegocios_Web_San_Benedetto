<?php

// Registro del PostType Marca
function registrar_cpt_marca() {

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
		'name' => _x('Marcas', 'plural'),
		'singular_name' => _x('Marca', 'singular'),
		'menu_name' => _x('Marcas', 'admin menu'),
		'name_admin_bar' => _x('Marcas', 'admin bar'),
		'add_new' => _x('Añadir marca', 'add new'),
		'add_new_item' => __('Añadir nueva marca'),
		'new_item' => __('Nueva marca'),
		'edit_item' => __('Editar marca'),
		'view_item' => __('Ver marca'),
		'all_items' => __('Todas las marcas'),
		'search_items' => __('Buscar marca'),
		'not_found' => __('No se ha encontrado la marca.'),
	);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public'  => true,
		'publicly_queryable' => true,
		'show_ui'  => true,
		'show_in_menu'  => true,
		'query_var'  => true,
		'rewrite'  => array( 'slug' => 'marcas' ),
		'capability_type'   => 'page',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-book-alt',
		'menu_position' => 5
	);
	register_post_type( 'marca', $args );
	
}
add_action( 'init', 'registrar_cpt_marca');