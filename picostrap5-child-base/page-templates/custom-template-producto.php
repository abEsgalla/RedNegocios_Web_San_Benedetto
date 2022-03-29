<?php
/* Template Name: Page Producto */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black py-261">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')"></div>
      <?=wp_get_attachment_image(764, "full", "", array( 'class' => 'position-absolute top-50 start-50 translate-middle-y zi-99 mw-50vw d-none d-md-block' , 'alt' => '' , 'title' => '') ); ?>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-xl-4 col-xl-4 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase">
                ecolosofía
              </div>
              <h1 class="col-12 mt-16 h1 text-green mb-70">
                Producto
              </h1>
              <div class="col-12 position-relative">
                <?=wp_get_attachment_image(1181, "full", "", array( 'class' => 'sello opacity-75' , 'alt' => '' , 'title' => '') ); ?>
                <?=wp_get_attachment_image(1182, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-50 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96 mt-xl-170 gx-sm-12 gx-4">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 offset-xl-1 col-xl-10 h2 fs-32 fs-md-64 mb-64 fs-xl-64">
        <?=$acf_fields['titulo_grid_sup_izq']?>
      </div>
      <div class="col-12 position-relative">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
        class="d-none d-xxxl-block position-absolute top-0 end-0 w-auto translate-dots-col-after">
        <div class="row position-relative zi-99 overflow-hidden">
          <div class="order-1 order-md-0 col-12 col-xl-6" data-aos="fade-up">
            <div class="row">
              <div class="col-12 offset-xl-2 col-xl-8 fs-14 fs-sm-17 mb-sm-80 my-64 mt-sm-0">
                <?=$acf_fields['texto_grid_sup_izq']?>
              </div>
            </div>
          </div>
          <div style="background: url(<?=wp_get_attachment_image_url($acf_fields['imagen_grid_sup_der'], "full")?>)" 
          class="order-0 order-md-1 py-xl-0 py-200 col-12 col-sm-6 bg-custom-image img-version-mobile">
          </div>
          <div style="" class="img-version-mobile order-2 col-12 col-sm-6 py-xl-0 py-138 py-sm-200 bg-secondary text-white">
            <div class="row position-relative h-100">
              <div class="container">
                <div class="row d-flex h-100 align-items-center">
                  <div class="offset-xl-2 col-xl-8 col-12 h2 fs-32 fs-lg-64 text-xl-start text-center">
                    <?=$acf_fields['titulo_grid_inf_izq']?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="order-3 col-12 col-xl-6">
            <div class="row overflow-hidden">
              <div class="pt-64 py-sm-80 pb-sm-0 pb-xl-80 col-12 offset-xl-2 col-xl-8 fs-14 fs-sm-17" data-aos="fade-up">
                <?=$acf_fields['texto_grid_inf_der']?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96 mt-xl-133 mb-xl-176 gx-sm-12 gx-4">
  <div class="container">
    <div class="row position-relative">
      <div class="col-12 bg-custom-image py-200 py-sm-290 zi-99 img-version-mobile"
        style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_pre_concienciacion'], "full")?>')">
      </div>
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
        class="d-none d-xxxl-block position-absolute bottom-0 start-0 w-auto translate-dots-col-before">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
        class="d-none d-xxxl-block position-absolute bottom-0 end-0 w-auto translate-dots-col-bottom-after">
    </div>
  </div>
</section>

<section class="my-96 mb-xl-160 gx-sm-12 gx-4">
  <div class="container overflow-hidden">
    <div class="row text-center text-secondary" data-aos="fade-up">
      <div class="col-12 h2 fs-32 fs-md-64">
        <?=$acf_fields['titulo_concienciacion']?>
      </div>
      <div class="col-12 offset-xl-2 col-xl-8 mt-40 fs-14 fs-sm-17">
        <?=$acf_fields['texto_concienciacion']?>
      </div>
      <div class="offset-2 col-8 offset-sm-0 col-sm-12 mt-40 mt-xl-133">
        <div class="d-flex flex-wrap flex-sm-nowrap w-100 justify-content-evenly align-items-center">
          <div class="py-3 px-12 my-sm-0">
            <?=wp_get_attachment_image($acf_fields['imagen_concienciacion_1'], "full", "", array( 'class' => 'my-12 my-sm-0' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="py-3 px-12 my-sm-0">
            <?=wp_get_attachment_image($acf_fields['imagen_concienciacion_2'], "full", "", array( 'class' => 'my-12 my-sm-0' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="py-3 px-12 my-sm-0">
            <?=wp_get_attachment_image($acf_fields['imagen_concienciacion_3'], "full", "", array( 'class' => 'my-12 my-sm-0' , 'alt' => '' , 'title' => '') ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-56 gx-sm-12 gx-4">
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