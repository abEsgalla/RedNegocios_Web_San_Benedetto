<?php
/* Template Name: Page Procesos */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black py-160 py-lg-261">
    <div class="background-position-left-mobile bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')"></div>
      <?=wp_get_attachment_image(773, "full", "", array( 'class' => 'position-absolute top-50 start-50 translate-middle-y zi-99 mw-50vw d-none d-lg-block' , 'alt' => '' , 'title' => '') ); ?>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-xl-4 col-xl-4 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase">
                ecolosofía
              </div>
              <h1 class="col-12 mt-16 h1 text-green mb-70">
                Procesos
              </h1>
              <div class="col-12 position-relative">
                <?=wp_get_attachment_image(1183, "full", "", array( 'class' => 'sello opacity-75' , 'alt' => '' , 'title' => '') ); ?>
                <?=wp_get_attachment_image(1606, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-50 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="mt-64 mt-lg-185 pb-70 position-relative zi-99 gx-4 gx-sm-12">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 mb-64 mb-lg-105">
        <div class="row">
          <div class="col-12 offset-xl-2 col-xl-8 text-center h2 fs-32 fs-md-64">
            <?=$acf_fields['texto_superior']?>
          </div>
        </div>
      </div>
      <div class="col-12 position-relative pt-0 pt-lg-80">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
        class="d-none d-xxxl-block position-absolute top-0 end-0 w-auto translate-dots-col-after">
        <div class="row position-relative">
          <div class="col-12 col-lg-6 order-1 order-lg-0">
            <div class="row overflow-hidden">
              <div class="col-12 offset-xl-2 col-xl-8 overflow-hidden" data-aos="fade-up">
                <div class="row">
                  <div class="col-12 h3 fs-26 fs-md-48 mt-70 mt-lg-0">
                    <?=$acf_fields['titulo_grid_sup_izq']?>
                  </div>
                  <div class="col-12 my-32 fs-14 fs-sm-17">
                    <?=$acf_fields['texto_grid_sup_izq']?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 order-0 order-lg-1 py-200 py-lg-409 position-relative bg-custom-image img-version-mobile" 
          style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_sup_der'], "full")?>')">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="position-relative">
  <div class="py-96 py-sm-170 bg-primary-brighter position-absolute top-0 translate-middle-lg-y w-100">
  </div>
</section>

<section class="position-relative zi-99 pt-70 gx-4 gx-sm-12">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-lg-6 py-200 py-lg-463 position-relative bg-custom-image img-version-mobile" 
          style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_inf_izq'], "full")?>')">
          </div>
          <div class="col-12 col-lg-6 d-inline-flex align-items-end">
            <div class="row overflow-hidden">
              <div class="col-12 offset-xl-2 col-xl-8 gx-xl-0" data-aos="fade-up">
                <div class="row">
                  <div class="col-12 h3 fs-26 fs-md-48 mt-70 mt-lg-0">
                    <?=$acf_fields['titulo_grid_inf_der']?>
                  </div>
                  <div class="col-12 mt-30 fs-14 fs-sm-17">
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

<section class="mb-96 mt-133 mt-xl-242 mb-xl-185 gx-4 gx-sm-12">
  <div class="container">
    <div class="row text-secondary">
      <div class="col-12 h2 fs-32 fs-md-64 text-center">
        <?=$acf_fields['titulo_grid_renovables']?>
      </div>
      <div class="col-12 offset-sm-2 col-sm-8 offset-lg-0 col-lg-12">
        <div class="row">
          <div class="col-12 col-lg-4 text-center text-lg-start mt-64 mt-lg-90">
            <div class="row">
              <div class="col-12 ratio-1x1">
                <?=wp_get_attachment_image($acf_fields['img_vertido_cero'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
              </div>
              <div class="col-12 mt-48 h4 fs-24 fs-sm-32">
                <?=$acf_fields['titulo_vertido_cero']?>
              </div>
              <div class="col-12 mt-24 fs-14 fs-sm-17">
                <?=$acf_fields['texto_vertido_cero']?>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 text-center text-lg-start mt-64 mt-lg-90">
            <div class="row">
              <div class="col-12 ratio-1x1">
                <?=wp_get_attachment_image($acf_fields['img_renovables'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
              </div>
              <div class="col-12 mt-48 h4 fs-24 fs-sm-32">
                <?=$acf_fields['titulo_renovables']?> 
              </div>
              <div class="col-12 mt-24 fs-14 fs-sm-17">
                <?=$acf_fields['texto_renovables']?> 
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 text-center text-lg-start mt-64 mt-lg-90">
            <div class="row">
              <div class="col-12 ratio-1x1">
                <?=wp_get_attachment_image($acf_fields['img_residuos'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
              </div>
              <div class="col-12 mt-48 h4 fs-24 fs-sm-32">
                <?=$acf_fields['titulo_residuos']?>  
              </div>
              <div class="col-12 mt-24 fs-14 fs-sm-17">
                <?=$acf_fields['texto_residuos']?>   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-56 gx-4 gx-sm-12">
  <div class="container">
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