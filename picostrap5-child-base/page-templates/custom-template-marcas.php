<?php
/* Template Name: Page Marcas */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="text-white">
    <div class="container-fluid position-relative zi-99 bg-secondary pt-172 pb-145">
        <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
        style="background:url('<?=wp_get_attachment_image_url(51, "full")?>')"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="fs-32 fs-md-64 fw-bold">NUESTRAS <br> MARCAS</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-32 mt-md-88 pb-md-55 after-effect-banner-blue">
    <div class="container-fluid container-lg">
        <div class="row">
            <?php
              get_template_part( 'template-parts/marcas/seccion', 'slider_productos', $acf_fields['slider_productos']);
            ?>
        </div>
    </div>
</section>

<section class="d-flex position-relative text-white">
    <?php
        get_template_part( 'template-parts/marcas/seccion', 'banner', $acf_fields['banner']);
    ?>
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

<?php get_footer();
