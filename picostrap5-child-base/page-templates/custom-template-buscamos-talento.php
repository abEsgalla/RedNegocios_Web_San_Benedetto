<?php
/* Template Name: Page Buscamos Talento */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="position-relative">
  <div class="position-relative bg-black">
    <?=wp_get_attachment_image(674, "full", "", array( 'class' => 'opacity-50' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
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
              Buscamos <br> talento
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-96 bg-secondary text-white">
  <div class="container">
    <div class="row py-96">
      <div class="col-6">
        
      </div>
      <div class="col-6">
        <?=wp_get_attachment_image(675, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
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