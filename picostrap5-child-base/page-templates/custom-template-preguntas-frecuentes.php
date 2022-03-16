<?php
/* Template Name: Page Preguntas Frecuentes */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="position-relative">
  <div class="position-relative bg-secondary">
    <?=wp_get_attachment_image(787, "full", "", array( 'class' => 'opacity-75' , 'alt' => '' , 'title' => '') ); ?>
  </div>
  <div class="container-fluid zi-99 top-50 position-absolute transform-translate-y">
    <div class="container">
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
</section>

<?php get_footer();