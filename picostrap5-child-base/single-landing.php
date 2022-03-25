<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();

$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'producto',
	'meta_query'	=> array(
		array(
			'key'		=> 'caracteristicas_producto_relacion_page_landing',
			'compare'	=> '=',
			'value'		=> get_the_ID(),
		)
	)
);
$the_query = new WP_Query( $args );
if( $the_query->have_posts() &&  $the_query->post_count == 1): 
	$the_query->the_post(); 
	$id_producto=get_the_ID();
endif;
wp_reset_query();

if( get_the_ID() == 196 ) { 	
	get_template_part('/template-parts/landing/productos/template', 'upgrade');
}
elseif( get_the_ID() == 324 ) {
	get_template_part('/template-parts/landing/productos/template', 'essenzia');
}
elseif( get_the_ID() == 444 ) {
	get_template_part('/template-parts/landing/productos/template', 'quizzahappy');
}
elseif( get_the_ID() == 429 ) {
	get_template_part('/template-parts/landing/productos/template', 'essenziarefresco');
}
elseif( get_the_ID() == 211 ) {
	get_template_part('/template-parts/landing/productos/template', 'primavera');
}
elseif( get_the_ID() == 209 ) { // Natura
	get_template_part('/template-parts/landing/productos/template', 'natura');
}
elseif( get_the_ID() == 206 ) { // San Benedetto
	get_template_part('/template-parts/landing/productos/template', 'benedetto');
}
elseif( get_the_ID() == 336 ) { // Fuencisla
	get_template_part('/template-parts/landing/productos/template', 'fuencisla');
}
elseif( get_the_ID() == 203 ) { // Enjoy sin gas
	get_template_part('/template-parts/landing/productos/template', 'enjoysin');
}
elseif( get_the_ID() == 489 ) { // Enjoy con gas
	get_template_part('/template-parts/landing/productos/template', 'enjoycon');
}
elseif( get_the_ID() == 200 ) { // San Benedetto Zero
	get_template_part('/template-parts/landing/productos/template', 'benedettozero');
}
elseif( get_the_ID() == 198 ) { // San Benedetto Thé
	get_template_part('/template-parts/landing/productos/template', 'benedettothe');
}
else { ?>

<section>
	<div class="container-fluid position-relative zi-99">
		<div class="bg-custom-image w-100 h-100 position-absolute top-0 start-0" 
		style="background:url('<?=wp_get_attachment_image_url($acf_fields['cabecera']['fondo'], "full")?>')"></div>
		<div class="container position-relative">
			<div class="row">
				<div class="col-12 text-center">
						<?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => 'mtn-custom-25 producto-central' , 'alt' => '' , 'title' => '') ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

	<?php
		if($acf_fields['secciones']):
			foreach ($acf_fields['secciones'] as $seccion):
				$seccion['id_producto'] = $id_producto;
				//var_dump($seccion['acf_fc_layout']);
				switch ($seccion['acf_fc_layout']):
					case 'slider_imagenes_productos':
						get_template_part( 'template-parts/landing/seccion', 'slider_imagenes_productos', $seccion);
					break;
					case 'elementos_quimicos':
						get_template_part( 'template-parts/landing/seccion', 'elementos_quimicos', $seccion);
					break;
					case 'banner_redes':
						get_template_part( 'template-parts/landing/seccion', 'banner_redes', $seccion );
					break;
					case 'texto_centrado':
						get_template_part( 'template-parts/landing/seccion', 'texto_centrado', $seccion);
					break;
					case 'cols_imagenes_texto':
						get_template_part( 'template-parts/landing/seccion', 'cols_imagenes_texto', $seccion);
					break;
					case 'banner':
						get_template_part( 'template-parts/landing/seccion', 'banner', $seccion);
					break;
					case 'imagen_ilustraciones':
						get_template_part( 'template-parts/landing/seccion', 'imagen_ilustraciones', $seccion);
					break;
				endswitch;
			endforeach;
		endif;
	?>

	<section class="bg-prelogos-<?=get_the_ID()?>"></section>

	<section>
	<div class="container py-56">
		<div class="row">
		<div class="col-12 position-relative">
			<?php
				get_template_part( 'template-parts/general/seccion', 'slider_logos', get_field('slider_logos', 'options'));
			?>
		</div>
		</div>
	</div>
	</section>
<? } 

get_footer();
