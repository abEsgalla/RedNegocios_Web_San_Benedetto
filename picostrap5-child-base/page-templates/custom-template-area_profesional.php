<?php
/* Template Name: Page Area Profesional */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black pt-sm-160 pt-120 pb-218 pb-sm-463 py-lg-333">
    <div class="bg-parallax opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 col-xl-6">
            <div class="row text-white text-center text-sm-start">
              <div class="col-12 text-uppercase">
                GRUPO SAN BENEDETTO
              </div>
              <h1 class="col-12 mt-16 h2 fs-32 fs-md-64 lh-1">
                Área <br> profesional
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gx-sm-12 gx-4">
  <div class="container">
    <div class="row">
      <div class="col-12 offset-lg-6 col-lg-6 position-relative gx-0 img-version-mobile">
        <div class="bg-custom-image img-parallax py-150 py-sm-254 py-lg-290 w-100 mt-n150 mt-sm-n333 mt-sm-n374 mt-lg-n463" 
        style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_over_cabecera'], "full")?>')">
        </div>
      </div>
    </div>
</section>

<section class="mt-56 mt-lg-32 gx-sm-12 gx-4">
  <div class="container">
    <div class="row">
      <div class="col-12 text-secondary">
        <div class="row">
          <div class="order-0 col-12 col-lg-6">
            <div class="row">
              <div class="col-12 col-xl-8 offset-xl-2">
                <div class="row overflow-hidden">
                  <div class="col-12" data-aos="fade-up">
                    <div class="h2 fs-24 fs-md-64">
                      <?=$acf_fields['titulo_grid_sup_izq']?>
                    </div>
                    <div class="mt-32 mb-48 mb-lg-0 fs-14 fs-sm-17">
                      <?=$acf_fields['texto_grid_sup_izq']?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="order-1 col-12 col-lg-6 position-relative gx-0 img-version-mobile">
            <div class="bg-custom-image img-parallax py-150 py-sm-290 w-100" 
            style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_sup_der'], "full")?>')">
            </div>
          </div>
          <div class="order-3 order-lg-2 col-12 py-lg-0 py-150 py-sm-290 col-lg-6 bg-custom-image img-parallax img-version-mobile" 
          style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_inf_izq'], "full")?>')">
          </div>
          <div class="order-2 order-lg-3 col-12 col-lg-6 d-flex align-items-center">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <div class="row overflow-hidden">
                  <div class="col-12 fs-14 fs-sm-17 my-lg-94 mt-56 mb-64" data-aos="fade-up">
                    <div>
                      <?=$acf_fields['texto_grid_inf_der']?>
                    </div>
                    <a href="<?=$acf_fields['link_catalogo']?>" class="text-reset text-decoration-none">
                      <div class="btn btn-primary text-uppercase text-white rounded-0 fs-14 mt-56 fw-500">
                        Descarga nuestro catálogo
                      </div>
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

<section class="mt-60 mt-xl-160 gx-sm-12 gx-4">
  <div class="container-fluid position-relative zi-9 bg-secondary-darker py-150 py-sm-105">
    <div class="bg-custom-image opacity-50 w-100 h-100 position-absolute top-0 start-0 bg-postion-x-center" 
      style="background:url('<?=wp_get_attachment_image_url(51, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-lg-2 col-lg-8 text-center text-white">
            <div class="row">
              <div class="col-12 text-uppercase fs-18">
                san benedetto
              </div>
              <div class="col-12 h4 mt-8">
                Conoce nuestras marcas
              </div>
              <div class="col-12 mt-32">
                <a href="<?=get_permalink(650)?>" class="text-rest">
                  <div class="btn btn-outline-white text-uppercase rounded-0 fw-500 fs-14">
                    <span>Contáctanos aquí</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-56 gx-sm-12 gx-4">
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
