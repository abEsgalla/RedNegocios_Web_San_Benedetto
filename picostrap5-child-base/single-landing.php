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
	
	get_template_part('/template-parts/landing/productos/template', 'upgrade', array($acf_fields));
	
} 
else { ?>

	<?php if( get_the_ID() == 203 ) : ?>
		<section>
			<div class="container-fluid g-0 position-relative">
				<div class="row g-0">
					<div class="col-12">
						<?php if(isset($acf_fields['cabecera']['fondo'])): ?>
						<div class="position-relative w-cabecera-animada w-cabecera-esjoy">
							<img src="<?=get_stylesheet_directory_uri().'/src/img/background-esjoy/fresa_1.png'; ?>" class="position-absolute fresa-1">
							<img src="<?=get_stylesheet_directory_uri().'/src/img/background-esjoy/fresa_2.png'; ?>" class="position-absolute fresa-2">
							<img src="<?=get_stylesheet_directory_uri().'/src/img/background-esjoy/limon_1.png'; ?>" class="position-absolute limon-1">						
							<img src="<?=get_stylesheet_directory_uri().'/src/img/background-esjoy/limon_3.png'; ?>" class="position-absolute limon-3">
							<img src="<?=get_stylesheet_directory_uri().'/src/img/background-esjoy/limon_4.png'; ?>" class="position-absolute limon-4">
							<?=wp_get_attachment_image($acf_fields['cabecera']['fondo'], "full", "", array( 'class' => 'w-100' , 'alt' => '' , 'title' => '') ); ?>
							<?php if(isset($acf_fields['cabecera']['producto_central'])): ?>
							<div class="d-flex align-items-center justify-content-center container-fluid zi-99 top-0 position-absolute h-100">
								<?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => 'd-block w-auto h-100 producto-central' , 'alt' => '' , 'title' => '') ); ?>
							</div>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	<? elseif( get_the_ID() == 489) : ?>
			<div class="container-fluid g-0 position-relative">
				<div class="row g-0">
					<div class="col-12">
						<?php if(isset($acf_fields['cabecera']['fondo'])): ?>
						<div class="position-relative w-cabecera-animada w-cabecera-esjoy">
							<?=wp_get_attachment_image($acf_fields['cabecera']['fondo'], "full", "", array( 'class' => 'w-100' , 'alt' => '' , 'title' => '') ); ?>
							<?php if(isset($acf_fields['cabecera']['producto_central'])): ?>
							<div class="d-flex align-items-center justify-content-center container-fluid zi-99 top-5 position-absolute h-100">
								<?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => 'd-block w-auto producto-central' , 'alt' => '' , 'title' => '') ); ?>
							</div>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<?  else: ?>

		<section>
			<div class="container-fluid position-relative zi-99">
				<div class="bg-custom-image w-100 h-100 position-absolute top-0 start-0" 
				style="background:url('<?=wp_get_attachment_image_url($acf_fields['cabecera']['fondo'], "full")?>')"></div>
				<div class="container position-relative">
					<div class="row">
						<div class="col-12 text-center">
								<?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => 'mtn-custom-25' , 'alt' => '' , 'title' => '') ); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

	<? endif; ?>						

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
