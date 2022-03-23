<?php
/* Template Name: Page Politicas */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="mt-185 mb-150">
  <div class="container">
    <div class="row text-start text-secondary">
        <h1 class="col-12 col-xl-10 offset-xl-1 h2 mt-8">
        <?=the_title()?>
        </h1>
        <div class="col-12 col-xl-10 offset-xl-1 mt-102">
            <?=the_content()?>
        </div>
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

<?php get_footer();