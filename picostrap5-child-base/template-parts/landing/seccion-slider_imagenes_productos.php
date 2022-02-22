<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="my-64">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12">
        <div class="row text-center text-secondary text-uppercase">
          <div class="col-12 fs-18">
            <?=$seccion['slider']['texto_superior']?>
          </div>
          <div class="col-12 h3">
            <?=$seccion['slider']['texto_principal']?>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="swiper swiper-landing-productos mt-96">
          <div class="swiper-wrapper">
            <?php
            if ($seccion['slider']):
              foreach ($seccion['slider']['slide'] as $slide ):
              ?>
              <div class="swiper-slide d-flex flex-column justify-content-center align-items-center h-100">
                <div style="background-color:<?=get_field('caracteristicas_producto',$seccion['id_producto'])['color_corporativo']?>"
                class='h-90 w-100 d-flex justify-content-center align-items-center'>
                  <?=wp_get_attachment_image($slide['imagen_producto'], "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') )?>
                </div>
                <div class="w-100 text-start text-uppercase mt-12 text-secondary">
                  <?=$slide['nombre_producto']?>
                </div>
              </div>
              <?
              endforeach;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>