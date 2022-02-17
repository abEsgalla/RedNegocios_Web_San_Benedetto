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



<section>
  <div class="container-fluid g-0 position-relative">
    <div class="row g-0">
      <div class="col-12">
				<?php if(isset($acf_fields['cabecera']['fondo'])): ?>
        <div class="position-relative">
          <?=wp_get_attachment_image($acf_fields['cabecera']['fondo'], "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
        </div>
				<?php endif; ?>
				<?php if(isset($acf_fields['cabecera']['producto_central'])): ?>
        <div class="d-flex align-items-center justify-content-center container-fluid zi-99 top-0 position-absolute">
          <?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
        </div>
				<?php endif; ?>
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
            get_template_part( 'template-parts/general/seccion', 'slider_logos', $acf_fields['slider_logos']);
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
