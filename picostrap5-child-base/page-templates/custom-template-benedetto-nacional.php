<?php
/* Template Name: Page Benedetto España */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black pt-138 pb-374 pt-md-214 pb-md-409 pt-lg-242 pb-lg-492">
    <div class="bg-parallax opacity-50 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-lg-1 col-lg-10 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase fs-18">
              GRUPO SAN BENEDETTO
              </div>
              <h1 class="col-12 mt-8 h2 fs-32 fs-md-64 text-white lh-1">
                Agua Mineral San Benedetto en España
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="position-relative gx-4 gx-sm-12">
  <div class="container mw-custom-container bg-white position-absolute start-50 translate-middle-espana 
  mb-md-n1 mb-lg-n0 pb-md-70 pt-48 pt-sm-128 pb-lg-123">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <div class="row"> 
          <div class="col-12 offset-md-1 col-md-10 offset-lg-0 col-lg-12 text-center text-secondary">
            <div class="h2 fs-32 fs-md-64 mb-56">
              <?=$acf_fields['texto_superior']?>
            </div>
            <div class="mt-40 mt-sm-56 fs-14 fs-sm-17">
              <?=$acf_fields['descripcion']?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-192 mt-sm-123 position-relative zi-99 gx-4 gx-sm-12">
  <div class="container text-secondary position-relative">
    <div class="row">
      <div class="col-12"> 
        <div class="row">
          <div class="order-0 order-lg-0 col-12 col-lg-6 py-111 py-sm-253 mb-lg-24 img-version-mobile
          bg-custom-image img-parallax" style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_sup_izq'], "full")?>')">
          </div>
          <div class="order-1 order-lg-1 col-12 col-lg-6">
            <div class="row">
              <div class="col-12 offset-md-2 col-md-8 offset-lg-1 col-lg-10 fs-14 fs-sm-17 py-40 pb-sm-60 pt-sm-82 pt-lg-103">
                <?=$acf_fields['texto_grid_sup_der']?>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</section>

<section class="position-relative">
  <div class="py-96 py-sm-170 bg-primary-brighter position-absolute top-0 translate-middle-lg-y w-100"></div>
</section>

<section class="position-relative zi-99 gx-4 gx-sm-12">
  <div class="container text-secondary position-relative">
    <div class="row">
      <div class="col-12"> 
        <div class="row">
          <div class="order-1 order-lg-0 col-12 col-lg-6">
            <div class="row">
              <div class="col-12 offset-md-2 col-md-8 offset-lg-1 col-lg-10 fs-14 fs-sm-17 py-40 py-sm-80 pt-lg-228">
                <?=$acf_fields['texto_grid_inf_izq']?>
              </div>
            </div>
          </div>
          <div class="order-0 order-lg-1 col-12 col-lg-6 py-120 py-sm-274 py-lg-253 mt-70 mt-lg-24 img-version-mobile
          bg-custom-image img-parallax" style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_inf_der'], "full")?>')">
          </div>
        </div> 
      </div>
    </div>
  </div>
</section>


<section class="mt-102 mt-sm-60 mt-lg-222 mb-lg-96 manantiales gx-4 gx-sm-12">
  <div class="container text-secondary">
    <div class="row overflow-hidden">
      <div class="col-12 text-center" data-aos="fade-up">
        <div class="fs-18 text-uppercase">descubre nuestros</div>
        <div class="h2 fs-32 fs-md-64">Manantiales</div>
      </div>
      <div class="col-12 mt-64 mt-sm-88">
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="row">
              <div class="col-12 offset-sm-2 col-sm-8 offset-lg-1 col-lg-10 pb-48 pb-lg-0">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                    <span class="rounded-circle border border-1">
                      <?=wp_get_attachment_image($acf_fields['image_manantial_1'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                    </span>
                  </div>
                  <div class="col-12 mt-65 mt-sm-48 mt-lg-80 fs-18 fs-sm-23 fw-bold text-uppercase text-start text-sm-center text-lg-start">
                    <?=$acf_fields['titulo_manantial_1']?>
                  </div>
                  <div class="col-12 col-lg-9 text-secondary">
                      <div class="mt-30 d-flex align-items-center">
                        <?=wp_get_attachment_image(760, "full", "", array( 'class' => 'pe-24' , 'alt' => '' , 'title' => '') ); ?>
                        <div>
                          <?=$acf_fields['texto_caudal_manantial_1']?>
                        </div>
                      </div>
                      <div class="mt-30 d-flex align-items-center">
                        <?=wp_get_attachment_image(761, "full", "", array( 'class' => 'pe-24' , 'alt' => '' , 'title' => '') ); ?>
                        <div>
                          <?=$acf_fields['texto_alumbramiento_manantial_1']?>
                        </div>
                      </div>
                      <div class="mt-30 d-flex align-items-center">
                        <?=wp_get_attachment_image(759, "full", "", array( 'class' => 'pe-24' , 'alt' => '' , 'title' => '') ); ?>
                        <div>
                          <?=$acf_fields['texto_mineralizacion_manantial_1']?>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 border-1 border-x border-secondary-light-disable">
            <div class="row">
              <div class="col-12 offset-sm-2 col-sm-8 offset-lg-1 col-lg-10 py-48 py-lg-0">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center justify-content-lg-start ">
                    <span class="rounded-circle border border-1">
                      <?=wp_get_attachment_image($acf_fields['image_manantial_2'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                    </span>
                  </div>
                  <div class="col-12 mt-65 mt-sm-48 mt-lg-80 fs-18 fs-sm-23 fw-bold text-uppercase text-start text-sm-center text-lg-start">
                    <?=$acf_fields['titulo_manantial_2']?>
                  </div>
                  <div class="col-12 col-lg-9 text-secondary">
                      <div class="mt-30 d-flex align-items-center">
                        <?=wp_get_attachment_image(760, "full", "", array( 'class' => 'pe-24' , 'alt' => '' , 'title' => '') ); ?>
                        <div>
                          <?=$acf_fields['texto_caudal_manantial_2']?>
                        </div>
                      </div>
                      <div class="mt-30 d-flex align-items-center">
                        <?=wp_get_attachment_image(761, "full", "", array( 'class' => 'pe-24' , 'alt' => '' , 'title' => '') ); ?>
                        <div>
                          <?=$acf_fields['texto_alumbramiento_manantial_2']?>
                        </div>
                      </div>
                      <div class="mt-30 d-flex align-items-center">
                        <?=wp_get_attachment_image(759, "full", "", array( 'class' => 'pe-24' , 'alt' => '' , 'title' => '') ); ?>
                        <div>
                          <?=$acf_fields['texto_mineralizacion_manantial_2']?>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="row">
              <div class="col-12 offset-sm-2 col-sm-8 offset-lg-1 col-lg-10 pt-48 pt-lg-0">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                    <span class="rounded-circle border border-1">
                      <?=wp_get_attachment_image($acf_fields['image_manantial_3'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                    </span>
                  </div>
                  <div class="col-12 mt-65 mt-sm-48 mt-lg-80 fs-18 fs-sm-23 fw-bold text-uppercase text-start text-sm-center text-lg-start">
                    <?=$acf_fields['titulo_manantial_3']?>
                  </div>
                  <div class="col-12 col-lg-9 text-secondary">
                      <div class="mt-30 d-flex align-items-center">
                        <?=wp_get_attachment_image(760, "full", "", array( 'class' => 'pe-24' , 'alt' => '' , 'title' => '') ); ?>
                        <div>
                          <?=$acf_fields['texto_caudal_manantial_3']?>
                        </div>
                      </div>
                      <div class="mt-30 d-flex align-items-center">
                        <?=wp_get_attachment_image(761, "full", "", array( 'class' => 'pe-24' , 'alt' => '' , 'title' => '') ); ?>
                        <div>
                          <?=$acf_fields['texto_alumbramiento_manantial_3']?>
                        </div>
                      </div>
                      <div class="mt-30 d-flex align-items-center">
                        <?=wp_get_attachment_image(759, "full", "", array( 'class' => 'pe-24' , 'alt' => '' , 'title' => '') ); ?>
                        <div>
                          <?=$acf_fields['texto_mineralizacion_manantial_3']?>
                        </div>
                      </div>
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

<section class="my-120 my-sm-165 mt-lg-274 mb-lg-160 gx-4 gx-sm-12">
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <?=wp_get_attachment_image($acf_fields['imagen_central'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
      </div>
    </div>
  </div>
</section>

<section class="mb-102 mb-sm-120 mb-lg-200 gx-4 gx-sm-12">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 text-center">
        <div class="row">
          <div class="col-12 offset-lg-2 col-lg-8">
            <div class="row overflow-hidden">
              <div class="col-12" data-aos="fade-up">
                <div class="text-uppercase">
                  descubre nuestro
                </div>
                <div class="h2 fs-32 fs-md-64 mt-8">
                  Entorno
                </div>
                <div class="mt-36 mt-sm-40 fs-14 fs-sm-17">
                  <?=$acf_fields['descripcion_entorno']?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mt-40 mt-sm-80">
        <div class="row">
          <div class="col-12 offset-md-2 col-md-8 offset-lg-1 col-lg-10">
            <div class="row">
              <div class="col-12 col-lg-6 py-200 py-sm-317 py-lg-0 bg-custom-image img-version-mobile" 
              style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_entorno_izq'], "full")?>')">
              </div>
              <div class="col-12 col-lg-6">
                <div class="row overflow-hidden">
                  <div class="col-12 offset-lg-1 col-lg-10 my-40 my-sm-70 mt-lg-48 mb-lg-70 fs-14 fs-sm-17" data-aos="fade-up">
                    <?=$acf_fields['texto_entorno_der']?>
                  </div>
                  <div class="col-12 mx-lg-32 bg-custom-image py-218 py-lg-245 img-version-mobile" 
                  style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_entorno_der'], "full")?>')">
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