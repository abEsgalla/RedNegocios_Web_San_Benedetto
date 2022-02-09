<?php

// Registro del PostType Producto
function registrar_cpt_producto() {

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
		'name' => _x('Productos', 'plural'),
		'singular_name' => _x('Producto', 'singular'),
		'menu_name' => _x('Productos', 'admin menu'),
		'name_admin_bar' => _x('Productos', 'admin bar'),
		'add_new' => _x('Añadir producto', 'add new'),
		'add_new_item' => __('Añadir nuevo producto'),
		'new_item' => __('Nuevo producto'),
		'edit_item' => __('Editar producto'),
		'view_item' => __('Ver producto'),
		'all_items' => __('Todos los productos'),
		'search_items' => __('Buscar producto'),
		'not_found' => __('No se ha encontrado el producto.'),
	);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public'  => true,
		'publicly_queryable' => true,
		'show_ui'  => true,
		'show_in_menu'  => true,
		'query_var'  => true,
		'rewrite'  => array( 'slug' => 'productos' ),
		'capability_type'   => 'page',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-book-alt',
		'menu_position' => 5
	);
	register_post_type( 'producto', $args );
	
}
add_action( 'init', 'registrar_cpt_producto');

// Registro de las taxonomías de Producto
function registrar_tax_producto() {

	// Categorías de producto
	$labels = array(
			'name' => _x( 'Categorías Producto', 'taxonomy general name', 'textdomain' ),
	);
	$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
	);
	register_taxonomy( 'categorias_producto', array( 'producto'), $args );
  
}
add_action( 'init', 'registrar_tax_producto', 0 );