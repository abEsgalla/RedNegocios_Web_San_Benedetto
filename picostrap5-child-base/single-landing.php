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
?>

<?php switch (get_the_ID()): ?>
<?php case 203 : ?>
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
						<?=wp_get_attachment_image($acf_fields['cabecera']['fondo'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
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
<?php break; ?>
<?php default: ?>
	<section>
		<div class="container-fluid g-0 position-relative">
			<div class="row g-0">
				<div class="col-12">
					<?php if(isset($acf_fields['cabecera']['fondo'])): ?>
					<div class="position-relative">
						<?=wp_get_attachment_image($acf_fields['cabecera']['fondo'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
						<?php if(isset($acf_fields['cabecera']['producto_central'])): ?>
						<div class="d-flex align-items-center justify-content-center container-fluid zi-99 top-0 position-absolute h-100">
							<?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => 'd-block w-auto h-100' , 'alt' => '' , 'title' => '') ); ?>
						</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php break; ?>
<?php endswitch; ?>

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

<?php get_footer();
