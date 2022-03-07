<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="my-64">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12">
        <div class="row text-center text-secondary text-uppercase fw-bolder">
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
              <div class="px-12 w-custom-20 swiper-slide d-inline-flex flex-column justify-content-center align-items-center h-100">
                <a class="text-reset text-decoration-none d-flex flex-column w-100 h-100"
                data-bs-toggle="offcanvas" href="#offcanvasInfoSliderProductos" role="button" 
                aria-controls="offcanvasInfoSliderProductos" 
                data-image="<?=wp_get_attachment_image_src($slide['imagen_producto'], 'full')[0]?>" 
                data-name="<?=ucfirst($slide['nombre_producto'])?>" 
                data-description="<?=$slide['descripcion_producto']?>">
                  <div style="background-color:<?=get_field('caracteristicas_producto',$seccion['id_producto'])['color_corporativo']?>"
                  class='h-90 w-100 d-flex justify-content-center align-items-center'>
                    <?=wp_get_attachment_image($slide['imagen_producto'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                  </div>
                  <div class="w-100 text-start text-uppercase mt-12 text-secondary">
                    <?=$slide['nombre_producto']?>
                  </div>
                </a>
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
  
  <div class="p-24 offcanvas offcanvas-end" tabindex="-1" id="offcanvasInfoSliderProductos" 
  aria-labelledby="offcanvasInfoSliderProductosLabel" data-bs-backdrop="false" data-bs-scroll="true">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body text-secondary">
      <div class="py-24 d-flex align-items-center justify-content-center image" 
      style="background-color:<?=get_field('caracteristicas_producto',$seccion['id_producto'])['color_corporativo']?>">

      </div>
      <div class="name mt-40 fs-24 fw-bolder">
        
      </div>
      <div class="description mt-30">
        
      </div>
    </div>
  </div>

</section>