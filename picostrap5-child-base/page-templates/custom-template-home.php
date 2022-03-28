<?php
/* Template Name: Page Home */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();

?>

<section id="sliderPrincipal">
  <div class="container-fluid g-0 position-relative">
      <div class="row g-0 gx-2 gx-sm-0">
          <div class="col-12">
            <?php
              get_template_part( 'template-parts/home/seccion', 'slider_cabecera', $acf_fields);
            ?>
          </div>
      </div>
  </div>
</section>

<section>
  <div class="container position-relative py-56 pt-md-120 pb-md-80 pt-xxl-96 pb-xxl-120 gx-4 gx-sm-2">
      <div class="row">
        <?php
          get_template_part( 'template-parts/home/seccion', 'slider_productos', $acf_fields['slider_productos']);
        ?>
      </div>
  </div>
</section>

<section id="sliderPromocional">
  <div class="container-fluid g-0 position-relative">
    <?php
      get_template_part( 'template-parts/home/seccion', 'slider_promocional', $acf_fields['slider_promocional']);
    ?>
  </div>
</section>

<section>
  <div class="container position-relative py-56 py-sm-96 pt-md-90 pb-md-82 pt-xl-133 pb-xl-285 gx-4 gx-sm-2">
      <div class="row">
        <?php
          get_template_part( 'template-parts/home/seccion', 'grid_compromiso', $acf_fields['grid_compromiso']);
        ?>
      </div>
  </div>
</section>

<section class="bg-section-noticias">
  <div class="container position-relative py-80 py-sm-96 pb-md-94 pt-md-120 pt-xl-95 pb-xl-120 gx-sm-2 gx-4">
    <div class="row">
      <?php
        get_template_part( 'template-parts/home/seccion', 'slider_noticias', $acf_fields);
      ?>
    </div>
  </div>
</section>

<section class="py-56">
  <div class="container gx-sm-2 gx-4">
    <div class="row">
      <div class="col-12 position-relative">
        <?php
            get_template_part( 'template-parts/general/seccion', 'slider_logos', get_field('slider_logos', 'options'));
        ?>
      </div>
    </div>
  </div>
</section>

<?php 
get_footer();
