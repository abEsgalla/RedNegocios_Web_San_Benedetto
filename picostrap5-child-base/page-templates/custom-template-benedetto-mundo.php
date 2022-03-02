<?php
/* Template Name: Page Benedetto Mundo */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="position-relative bg-black">
    <?=wp_get_attachment_image(669, "full", "", array( 'class' => 'opacity-50' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
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
              Agua Mineral San Benedetto en el mundo
            </h1>
            <div class="col-12 fs-24 mt-48 text-uppercase">
              Agua Mineral San Benedetto es una 
              empresa perteneciente al Gruppo 
              Acqua Minerale San Benedetto S.p.A. 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container position-relative">
    <?/*
    <?=wp_get_attachment_image(671, "full", "", array( 'class' => 'w-100 position-absolute top-0 start-0' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
    */?>
    <div class="row">
      <div class="col-4 text-secondary">
        <div class="text-uppercase">
          PRESENTES EN diferentes
        </div>
        <div class="h2">
          Países
        </div>
        <div class="mt-32">
          El Grupo tiene plantas situadas en 4 países 
          gracias a su know-how y distribuye en más de 100 países en todo el mundo.
        </div>
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