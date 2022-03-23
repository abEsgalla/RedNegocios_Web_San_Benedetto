<?php
/* Template Name: Page Preguntas Frecuentes */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-secondary-darker py-149">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(787, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-6">
            <div class="row text-white">
              <div class="col-12 fs-18 text-uppercase">
                GRUPO SAN BENEDETTO
              </div>
              <h1 class="col-12 h2">
                  Preguntas frecuentes
              </h1>
              <div class="col-12 fs-24 mt-24">
                  ¿Tienes alguna duda?
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

<section id="preguntas-frecuentes" class="position-relative my-120">
  <div class="container">
    <div class="row">
      <div class="col-12 offset-xl-1 col-xl-10">
      <!--ACORDION-->
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php
        foreach ($request as $request_key => $single_request):
        ?>
        <div class="accordion-item border-secondary-lighter">
          <h2 class="accordion-header" id="flush-heading-<?=$request_key?>">
            <button class="accordion-button collapsed fs-18 fw-500 text-secondary text-uppercase py-24 ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?=$request_key?>" 
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

<section class="d-flex position-relative my-56">
  <div class="bg-secondary-darker">
    <?=wp_get_attachment_image(51, "full", "", array( 'class' => 'opacity-50' , 'alt' => '' , 'title' => '') ); ?>
  </div>
  <div class="container-fluid zi-99 position-absolute top-50 translate-middle-y">
    <div class="container">
      <div class="row">
        <div class="offset-3 col-6 text-center text-white">
          <div class="row">
            <div class="col-12 text-uppercase fs-18 pt-20">
              san benedetto
            </div>
            <div class="col-12 h4 mt-10">
              Conoce nuestras marcas
            </div>
            <div class="col-12 mt-32 fs-17">
              <a href="#" class="col-12 text-center">
                <div class="btn btn-outline-white text-uppercase rounded-0">
                  saber más              
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-56">
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