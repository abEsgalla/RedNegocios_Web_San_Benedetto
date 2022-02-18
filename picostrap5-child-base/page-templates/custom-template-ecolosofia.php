<?php
/* Template Name: Page Ecolosofia */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="position-relative bg-black">
    <?=wp_get_attachment_image(613, "full", "", array( 'class' => 'opacity-75' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
  </div>
</section>

<section class="my-96">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        ¡Una manera ecológica de pensar las cosas!
      </div>
      <div class="col-12">
        Ecolosofía
      </div>
      <div class="col-12">
        Del gr. οἰκο- oiko-.: Significa 'ecológico'
        Del gr. φιλοσοφία philosophía.:  Manera de pensar o de ver las cosas. 
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        Nuestro principal activo, el core y razón de ser de nuestra compañía, 
        es el agua mineral que brota del interior de la tierra. 
        Debemos a la Naturaleza la existencia de nuestra actividad y, por eso, 
        entendemos la sostenibilidad como una filosofía inherente a nuestra misión como empresa. 
        De ahí nace nuestra Ecolosofía: es la forma en la que Agua Mineral San Benedetto utiliza el conocimiento 
        y la tecnología en beneficio del medioambiente y las personas. ¿Cómo? 
      </div>
    </div>
  </div>
</section>

<?php get_footer();