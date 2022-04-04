<?php
/* Template Name: Page Buscamos Talento */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black pt-120 pb-187 py-md-214 pt-lg-270 pb-lg-242">
    <div class="bg-parallax opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 text-center text-xl-start col-xl-6">
            <div class="row text-white">
              <div class="col-12 fs-18">
                <?=_e('GRUPO SAN BENEDETTO')?>
              </div>
              <h1 class="col-12 h2 fs-32 fs-sm-64">
                <?=_e('Buscamos')?> 
                <br> 
                <?=_e('talento')?>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pb-70 pb-sm-145 pb-xl-128 bg-secondary text-white gx-sm-12 gx-4">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2 offset-xl-0 col-xl-6 order-1 order-xl-0"> 
        <div class="row">
          <div class="col-12 col-xl-8 pt-53 pt-sm-64 pt-xl-102">
            <div class="contact-form-contacto my-48 my-sm-64 my-lg-80">
              <?=do_shortcode('[contact-form-7 id="1373" title="Formulario de contacto 2"]')?>
            </div>
          </div>
        </div>
      </div>
      <div class="img-version-mobile col-12 col-md-8 offset-md-2 offset-xl-0 col-xl-6 bg-custom-image py-155 mt-n155 mt-sm-n80 py-sm-228 py-xl-356 mt-sm-n133 mt-xl-n70" 
        style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_derecha_contacto'], "full")?>')">
      </div>
    </div>
  </div>
</section>

<section class="my-56 gx-sm-12 gx-4">
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

<?php get_footer();