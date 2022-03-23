<?php
/* Template Name: Page Benedetto Mundo */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="position-relative bg-black">
    <?=wp_get_attachment_image(669, "full", "", array( 'class' => 'opacity-50' , 'alt' => '' , 'title' => '') ); ?>
  </div>
  <div class="container-fluid zi-99 top-50 position-absolute transform-translate-y">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="row text-white">
            <div class="col-12 fs-18">
              GRUPO SAN BENEDETTO
            </div>
            <h1 class="col-12 h2">
              <?=get_field('titulo');?>
            </h1>
            <div class="col-12 fs-24 mt-48 text-uppercase fw-bold">
              <div class="w-descripcion">
                <?=get_field('subtitulo');?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96 mt-xl-160 mb-xl-0">
  <div class="container position-relative">
    <?/*
    <?=wp_get_attachment_image(671, "full", "", array( 'class' => 'w-100 position-absolute top-0 start-0' , 'alt' => '' , 'title' => '') ); ?>
    */?>
    <div class="row">
      <div class="col-4 text-secondary">
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
      <div class="offset-2 col-6 position-relative">
        <?=wp_get_attachment_image(926, "full", "", array( 'class' => 'position-absolute w-100 top-0 transform-translate-ny' , 'alt' => '' , 'title' => '') ); ?>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="container-fluid">
    <div class="row offset-2 position-relative">
      <?=wp_get_attachment_image(689, "full", "", array( 'class' => 'p-0 m-0 w-100' , 'alt' => '' , 'title' => '') ); ?>
      <div class="position-absolute w-auto icon-map-1">
        <?=wp_get_attachment_image(688, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
      </div>
      <div class="position-absolute w-auto icon-map-2">
        <?=wp_get_attachment_image(688, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
      </div>
      <div class="position-absolute w-auto icon-map-3">
        <?=wp_get_attachment_image(688, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
      </div>
      <div class="position-absolute w-auto icon-map-4">
        <?=wp_get_attachment_image(688, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
      </div>
    </div>
  </div>
</section>


<section class="my-96">
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