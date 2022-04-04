<?php
/* Template Name: Page Benedetto Mundo */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="">
  <div class="container-fluid position-relative zi-99 bg-black pt-138 pb-228 pt-sm-214 pb-sm-317 pt-lg-270 pb-lg-254">
      <div class="bg-parallax opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12">
            <div class="row text-white text-center text-sm-start">
              <div class="col-12 col-lg-6">
                <div class="row">
                  <div class="col-12 fs-18">
                    <?=_e('GRUPO SAN BENEDETTO')?>
                  </div>
                  <h1 class="col-12 h2 fs-32 fs-sm-64 mb-48">
                    <?=get_field('titulo');?>
                  </h1>
                </div>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-12 col-lg-6 fs-18 fs-sm-24 text-uppercase fw-bolder">
                    <div class="w-descripcion">
                        <?=get_field('subtitulo');?>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 position-relative zi-99">
                    <div class="mt-65 mt-sm-103 mt-lg-0 start-0 w-100 position-absolute py-155 py-sm-253 bg-custom-image img-parallax" 
                    style="background:url('<?=wp_get_attachment_image_url($acf_fields['image_over_cabecera'], "full")?>')">
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>

<section class="gx-sm-12 gx-4">
  <div class="container position-relative zi-99">
    <div class="row">
      <div class="mt-253 mt-sm-356 mt-lg-160 col-12 col-sm-8 col-lg-4 text-secondary text-sm-start text-center">
        <div class="text-uppercase">
            <?=get_field('antetitulo_mapa');?>
        </div>
        <div class="h2">
          Países
        </div>
        <div class="mt-32 fs-17">
          <div class="w-descripcion">
            <?=get_field('descripcion');?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="mt-n116 mt-sm-n333 mt-lg-n120">
  <div class="container-fluid">
    <div class="row offset-lg-2 position-relative overflow-hidden">
      <?=wp_get_attachment_image(689, "full", "", array( 'class' => 'p-0 m-0 img-mapa' , 'alt' => '' , 'title' => '') ); ?>
      <div class="position-absolute w-auto c-pointer icon-map-1">
        <div class="opacity-0 position-absolute start-0 bottom-100 pb-12 tx-n50 start-50">
          <div class="card border shadow p-12 px-sm-24 py-sm-30 w-card-mapa text-secondary">
            <?=$acf_fields['indicador_mapa_1']?>
          </div>
        </div>
        <?=wp_get_attachment_image(688, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
      </div>
      <div class="position-absolute w-auto c-pointer icon-map-2">
        <div class="opacity-0 position-absolute start-0 bottom-100 pb-12 tx-n50 start-50">
          <div class="card border shadow p-12 px-sm-24 py-sm-30 w-card-mapa text-secondary">
            <?=$acf_fields['indicador_mapa_2']?>
          </div>
        </div>
        <?=wp_get_attachment_image(688, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
      </div>
      <div class="position-absolute w-auto c-pointer icon-map-3">
        <div class="opacity-0 position-absolute start-0 bottom-100 pb-12 tx-n50 start-50">
          <div class="card border shadow p-12 px-sm-24 py-sm-30 w-card-mapa text-secondary">
            <?=$acf_fields['indicador_mapa_3']?>
          </div>
        </div>
        <?=wp_get_attachment_image(688, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
      </div>
      <div class="position-absolute w-auto c-pointer icon-map-4">
        <div class="opacity-0 position-absolute start-0 bottom-100 pb-12 tx-n50 start-50">
          <div class="card border shadow p-12 px-sm-24 py-sm-30 w-card-mapa text-secondary">
            <?=$acf_fields['indicador_mapa_4']?>
          </div>
        </div>
        <?=wp_get_attachment_image(688, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
      </div>
    </div>
  </div>
</section>


<section class="gx-sm-12 gx-4 my-56">
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