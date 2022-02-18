<?php
/* Template Name: Page Home */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();

?>

<section>
  <div class="container-fluid g-0 position-relative">
      <div class="row g-0">
          <div class="col-12">
            <?php
              get_template_part( 'template-parts/home/seccion', 'slider_cabecera', $acf_fields);
            ?>
          </div>
      </div>
  </div>
</section>

<section>
  <div class="container position-relative py-96">
      <div class="row">
        <?php
          get_template_part( 'template-parts/home/seccion', 'slider_productos', $acf_fields['slider_productos']);
        ?>
      </div>
  </div>
</section>

<section>
  <div class="container-fluid g-0 position-relative">
    <div class="row g-0">
      <?php
        get_template_part( 'template-parts/home/seccion', 'slider_promocional', $acf_fields['slider_promocional']);
      ?>
    </div>
  </div>
</section>

<section>
  <div class="container position-relative py-96">
      <div class="row">
        <?php
          get_template_part( 'template-parts/home/seccion', 'grid_compromiso', $acf_fields['grid_compromiso']);
        ?>
      </div>
  </div>
</section>

<section class="bg-secondary-brighter">
  <div class="container position-relative py-96">
    <div class="row">
      <?php
        get_template_part( 'template-parts/home/seccion', 'slider_noticias', $acf_fields);
      ?>
    </div>
  </div>
</section>

<section>
  <div class="container py-56">
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
