<?php
/* Template Name: Page Marcas */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="d-flex position-relative text-white">
    <div class="bg-secondary">
        <?=wp_get_attachment_image(51, "full", "", array( 'class' => 'opacity-50' , 'alt' => '' , 'title' => '') ); ?>
    </div>
    <div class="container-fluid zi-99 top-50 position-absolute translate-middle-y">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="h2">NUESTRAS <br> MARCAS</div>
                </div>
            </div>
        </div>
    <div>
</section>

<section class="mt-96 mb-120">
    <div class="container">
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
