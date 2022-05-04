<?php
/* Template Name: Page Preguntas Frecuentes */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="gx-sm-12 gx-4">
  <div class="container-fluid position-relative zi-9 bg-secondary-darker pb-108 pb-sm-149 pt-165 pt-sm-214 pt-xxl-200 pb-xxl-165 pt-xxxl-221 pb-xxxl-149">
    <div class="bg-parallax opacity-50 w-100 h-100 position-absolute top-0 start-0 bg-postion-x-right" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 text-center text-lg-start offset-xxl-1 col-xxl-6 offset-xxxl-0 col-xxxl-6">
            <div class="row text-white">
              <div class="col-12 fs-18 text-uppercase">
                <?=_e('GRUPO SAN BENEDETTO')?>
              </div>
              <h1 class="col-12 h2 fs-32 mt-2 mt-sm-8 fs-md-64 lh-1 mb-0">
                <?=_e('Preguntas frecuentes')?>
              </h1>
              <div class="col-12 fs-18 fs-md-24 mt-8 mt-md-24">
                <?=_e('¿Tienes alguna duda?')?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$request = array();
$response = array();
if($acf_fields['faqs']):
  foreach ($acf_fields['faqs'] as $faq) {
    $request[] = $faq['pregunta'];
    $response[] = $faq['respuesta'];
  }
endif;
?>

<section id="preguntas-frecuentes" class="position-relative mt-40 mb-70 my-md-96 my-lg-120 gx-sm-12 gx-4">
  <div class="container">
    <div class="row">
      <div class="col-12 offset-xxl-1 col-xxl-10">
      <!--ACORDION-->
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php
        foreach ($request as $request_key => $single_request):
        ?>
        <div class="accordion-item border-secondary-lighter">
          <h2 class="accordion-header" id="flush-heading-<?=$request_key?>">
            <button class="accordion-button collapsed fs-16 fs-sm-18 fw-500 text-secondary text-uppercase py-24 ps-0 lh-base" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?=$request_key?>" 
            aria-expanded="false" aria-controls="flush-collapse-<?=$request_key?>">
              <?=$request_key+1?>. <?=$single_request?>
            </button>
          </h2>
          <div id="flush-collapse-<?=$request_key?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?=$request_key?>"
           data-bs-parent="#accordionFlushExample">
            <div class="ps-0 accordion-body pt-32 pb-64 text-secondary fs-16">
              <?=$response[$request_key]?>
            </div>
          </div>
        </div>
        <?
        endforeach;
        ?>
      </div>
      <!--***-->
      </div>
    </div>
  </div>
</section>

<section class="">
  <div class="container-fluid position-relative zi-9 bg-secondary-darker py-149 py-sm-105">
    <div class="bg-mobile-banner-marcas bg-custom-image bg-postion-x-center opacity-50 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_banner'], "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-xl-3 col-xl-6 text-center text-white">
            <div class="row">
              <div class="col-12 text-uppercase fs-18 pt-20">
                <?=$acf_fields['pretitulo_banner']?>
              </div>
              <div class="col-12 h4 mt-10 mb-0">
                <?=$acf_fields['titulo_banner']?>
              </div>
              <div class="col-12 mt-32">
                <a href="<?=$acf_fields['link_cta']?>" class="col-12 text-center">
                  <div class="btn btn-outline-white text-uppercase rounded-0 fs-14 px-40 fw-500 border-2">
                    <span>
                      <?=$acf_fields['texto_cta']?>
                    </span>
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