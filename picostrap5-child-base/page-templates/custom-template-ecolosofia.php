<?php
/* Template Name: Page Ecolosofia */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>


<section class="position-absolute top-0 w-100">
  <div class="container-fluid position-relative zi-9 bg-black pt-138 pb-422 pb-sm-333 pt-md-228 pb-md-565 pt-lg-261 pb-lg-533">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')"></div>
      <div class="container position-relative zi-99">
        <div class="row">
          <div class="col-12 offset-xl-3 col-xl-6 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase fs-16 fs-sm-18">
              ¡Una manera ecológica de pensar las cosas!
              </div>
              <h1 class="col-12 mt-8 mt-lg-16 fs-32 fs-md-64 fs-lg-1 lh-1 fw-bold text-green">
                Ecolosofía
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-96 position-relative mt-custom-28 mw-custom-container">
  <?=wp_get_attachment_image(1177, "full", "", array( 'class' => 'sello opacity-75 translate-middle top-0 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?> 
  <?=wp_get_attachment_image(1178, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-0 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?> 
  <div class="container bg-white">
    <div class="row text-center">
      <div class="col-12 offset-lg-2 col-lg-8 mt-138 mt-sm-200 mt-lg-176 mt-xxxl-178 fs-18 fs-sm-24 fs-lg-32 fw-bolder text-secondary text-uppercase">
        <p class="my-0">Del gr. οἰκο- oiko-.: Significa 'ecológico'</p>
        <p class="my-0 mt-16">Del gr. φιλοσοφία philosophía.:  <span class="text-green d-block lh-1"> 
        Manera de pensar o de ver las cosas. </span></p>
      </div>
      <div class="gx-0 gx-sm-12 col-12 offset-lg-2 col-lg-8 mt-80 mt-sm-94 mt-lg-102 text-center text-secondary fs-14 fs-sm-17">
        <?=$acf_fields['descripcion_superior']?>
      </div>
      <div class="col-12 grid-3-ecolosofia mt-55 mt-sm-123 gx-0 gx-lg-4">
        <div class="row text-white">
          <div class="col-12 col-sm-4 mb-sm-0 mb-2">
            <a class="text-reset text-decoration-none" href="<?=get_permalink(585)?>">
              <div text-cursor-custom="Ir a producto" 
              class="ratio ratio-1x1 contenedor-cursor-custom bg-contenedor-custom-ecolosofia">
                <div class="d-flex bg-primary container-scale flex-column align-items-center justify-content-center">
                  <div>
                    <?=wp_get_attachment_image(1294, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?> 
                  </div>
                  <div class="mt-16 mt-sm-24 h5 fs-24 fs-lg-32 text-uppercase">PRODUCTO</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-4 mb-sm-0 mb-2">
            <a class="text-reset text-decoration-none" href="<?=get_permalink(587)?>">
              <div text-cursor-custom="Ir a procesos" 
              class="ratio ratio-1x1 contenedor-cursor-custom bg-contenedor-custom-ecolosofia cursor-white">
                <div class="d-flex bg-secondary container-scale flex-column align-items-center justify-content-center">
                  <div class="">
                    <?=wp_get_attachment_image(1293, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?> 
                  </div>
                  <div class="mt-16 mt-sm-24 h5 fs-24 fs-lg-32 text-uppercase">PROCESOS</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-4 mb-sm-0 mb-2">
            <a class="text-reset text-decoration-none" href="<?=get_permalink(589)?>">
              <div text-cursor-custom="Ir a entorno" 
              class="ratio ratio-1x1 contenedor-cursor-custom bg-contenedor-custom-ecolosofia">
                <div class="d-flex bg-primary container-scale flex-column align-items-center justify-content-center">
                  <div>
                    <?=wp_get_attachment_image(1292, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?> 
                  </div>
                  <div class="mt-16 mt-sm-24 h5 fs-24 fs-lg-32 text-uppercase">ENTORNO</div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gx-4 gx-sm-12 my-96 mb-md-108 mt-md-160 mt-xl-256 mb-xl-160 mb-xxxl-165">
  <div class="container position-relative">
      <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
      class="d-none d-xxl-block position-absolute top-0 start-0 w-auto translate-dots-col-top-before">
      <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
      class="d-none d-xxl-block position-absolute bottom-0 start-0 w-auto translate-dots-col-before">
    <div class="row position-relative">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-lg-6 order-0 order-lg-0">
            <div class="row pt-80 pt-sm-60 pt-md-60 pt-lg-80 pb-24 pb-sm-133 pb-md-80 pb-lg-200 bg-white">
              <div class="col-12 col-sm-10 col-md-9 col-xxxl-9 offset-sm-1 offset-md-2 offset-xxxl-2">
                <div class="row text-secondary text-uppercase">
                  <div class="mt-133 mt-sm-150 mt-sm-0 col-12 col-sm-6 col-lg-12 order-sm-0 order-1">
                    <div class="row text-center text-sm-start">
                      <div class="col-12 fs-16 fs-sm-18">
                        san benedetto
                      </div>  
                      <div class="col-12 h2 fs-32 fs-sm-64">
                        RSC 
                      </div>
                    </div>
                  </div>
                  <div class="mt-40 mt-lg-108 col-12 col-sm-6 col-lg-9 position-relative order-sm-1 order-0">
                    <?=wp_get_attachment_image(1296, "full", "", array( 'class' => 'd-none d-lg-block sello opacity-75 translate-middle top-0 start-100 position-absolute ' , 'alt' => '' , 'title' => '') ); ?> 
                    <?=wp_get_attachment_image(1295, "full", "", array( 'class' => 'd-none d-lg-block sello-rotacion opacity-75 top-0 start-100 position-absolute ' , 'alt' => '' , 'title' => '') ); ?> 
                    <?=wp_get_attachment_image(1296, "full", "", array( 'class' => 'd-block d-lg-none sello opacity-75 translate-middle top-0 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?> 
                    <?=wp_get_attachment_image(1295, "full", "", array( 'class' => 'd-block d-lg-none sello-rotacion opacity-75 top-0 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-none d-sm-block col-6 py-200 py-lg-0 bg-custom-image order-2 order-lg-1" 
            style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_sup_der'], "full")?>')">
          </div>
          <div class="img-version-mobile col-12 col-sm-6 py-200 py-lg-0 bg-custom-image order-3 order-lg-2" 
            style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_inf_izq'], "full")?>')">
          </div>
          <div class="col-12 offset-md-1 col-md-10 offset-lg-0 col-lg-6 order-1 order-lg-3">
            <div class="row position-relative pb-32 pb-sm-90 pt-0 py-lg-150">
              <div class="col-12">
                <div class="row text-center text-sm-start text-secondary fs-14 fs-sm-17">
                  <div class="col-12 offset-sm-1 col-sm-10">
                    <?=$acf_fields['texto_grid_inf_der']?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>

<section class="gx-4 gx-sm-12 my-56">
  <div class="container bg-white">
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