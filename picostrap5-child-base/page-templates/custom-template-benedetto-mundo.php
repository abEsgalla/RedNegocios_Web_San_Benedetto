<?php
/* Template Name: Page Benedetto Mundo */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="">
    <div class="container-fluid position-relative zi-99 bg-black pt-270 pb-254">
        <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
        style="background:url('<?=wp_get_attachment_image_url(669, "full")?>')"></div>
        <div class="container position-relative">
          <div class="row">
            <div class="col-6">
              <div class="row text-white">
                <div class="col-12 fs-18">
                  GRUPO SAN BENEDETTO
                </div>
                <h1 class="col-12 h2">
                  Agua Mineral San Benedetto en el mundo
                </h1>
                <div class="col-12 fs-24 mt-48 text-uppercase fw-bold">
                  Agua Mineral San Benedetto es una 
                  empresa perteneciente al <span class="text-decoration-underline">Gruppo 
                  Acqua Minerale San Benedetto S.p.A. </span>
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
          PRESENTES EN diferentes
        </div>
        <div class="h2">
          Países
        </div>
        <div class="mt-32 fs-17">
          El Grupo tiene plantas situadas en 4 países 
          gracias a su know-how y distribuye en más de 100 países en todo el mundo.
        </div>
      </div>
      <div class="offset-2 col-6 position-relative zi-99">
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