<?php
/* Template Name: Page Entorno */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black py-160 py-lg-261">
    <div class="background-position-left-mobile bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')"></div>
      <?=wp_get_attachment_image(779, "full", "", array( 'class' => 'position-absolute top-50 start-50 translate-middle-y zi-99 mw-50vw d-none d-lg-block' , 'alt' => '' , 'title' => '') ); ?>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-xl-4 col-xl-4 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase">
                  <?=_e('ecolosofía')?>
              </div>
              <h1 class="col-12 mt-16 h1 text-green mb-70">
                  <?=_e('Entorno')?>
              </h1>
              <div class="col-12 position-relative">
                <?=wp_get_attachment_image(1185, "full", "", array( 'class' => 'sello opacity-75' , 'alt' => '' , 'title' => '') ); ?>
                <?=wp_get_attachment_image(1606, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-50 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-56 mt-sm-103 mt-lg-185 gx-4 gx-sm-12">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 offset-sm-1 col-sm-10">
        <div class="row overflow-hidden">
          <div class="col-12 text-center h2 fs-32 fs-md-64 lh-1 my-0">
            <?=$acf_fields['texto_superior']?>
          </div>
          <div class="col-12 text-center mt-32 mt-sm-70 fs-14 fs-sm-17" data-aos="fade-up">
            <?=$acf_fields['descripcion']?>
          </div>
          <div class="col-12">
            <div class="row text-center overflow-hiden">
              <div class="col-12 col-md-4 mt-60" data-aos="fade-up">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <span class="rounded-circle border border-1">
                      <?=wp_get_attachment_image($acf_fields['proyecto_1_foto'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                    </span>
                  </div>
                  <div class="col-12 mt-24 fs-20 fw-bold">
                    <a class="text-reset" target="_blank" href="<?=$acf_fields['proyecto_1_link']?>">
                      <?=$acf_fields['proyecto_1_texto']?> 
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 mt-60" data-aos="fade-down">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <span class="rounded-circle border border-1">
                      <?=wp_get_attachment_image($acf_fields['proyecto_2_foto'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                    </span>
                  </div>
                  <div class="col-12 mt-24 fs-20 fw-bold">
                    <a class="text-reset" target="_blank" href="<?=$acf_fields['proyecto_2_link']?>">
                      <?=$acf_fields['proyecto_2_texto']?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 mt-60" data-aos="fade-up">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <span class="rounded-circle border border-1">
                      <?=wp_get_attachment_image($acf_fields['proyecto_3_foto'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                    </span>
                  </div>
                  <div class="col-12 mt-24 fs-20 fw-bold">
                    <a class="text-reset" target="_blank" href="<?=$acf_fields['proyecto_3_link']?>">
                      <?=$acf_fields['proyecto_3_texto']?>
                    </a>
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

<section class="mt-0 mt-sm-120 mt-lg-245 mb-64 mb-sm-103 mb-lg-242 position-relative zi-99 gx-4 gx-sm-12">
  <div class="py-218 py-sm-218 bg-primary-brighter position-absolute top-custom-entorno translate-middle-y w-100">
  </div>
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 position-relative">
        <div class="row position-relative">
          <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
          class="d-none d-xxxl-block position-absolute bottom-0 start-0 w-auto translate-dots-col-before">
          <div class="col-12 col-lg-6">
            <div class="row">
              <div class="text-center text-lg-start col-12 offset-xl-2 col-xl-8 overflow-hidden" data-aos="fade-up">
                <div class="row">
                  <div class="col-12 h3 fs-26 fs-md-45 mt-128 mt-sm-70 mt-lg-0">
                    <?=$acf_fields['titulo_grid_sup_izq']?>
                  </div>
                  <div class="col-12 mt-32 mb-64 my-sm-32 fs-14 fs-sm-17">
                    <?=$acf_fields['texto_grid_sup_izq']?> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 py-133 py-md-270 py-lg-245 position-relative bg-custom-image img-version-mobile mb-lg-36" 
          style="background:url('<?=wp_get_attachment_image_url($acf_fields['img_grid_sup_der'], "full")?>')">
          </div>
          <div class="col-12 col-lg-6 py-170 py-md-374 position-relative bg-custom-image img-version-mobile mt-24 mt-lg-36" 
          style="background:url('<?=wp_get_attachment_image_url($acf_fields['img_grid_inf_izq'], "full")?>')">
          </div>
          <div class="col-12 col-lg-6 d-inline-flex align-items-end">
            <div class="row overflow-hidden">
              <div class="text-center text-lg-start col-12 offset-xl-2 col-xl-8 gx-xl-0" data-aos="fade-up">
                <div class="row">
                  <div class="col-12 h3 fs-26 fs-md-45 mt-64 mt-sm-70 mt-lg-0">
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