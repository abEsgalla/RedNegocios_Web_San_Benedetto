<?php
/* Template Name: Page Area Profesional */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="">
  <div class="position-relative">
    <?=wp_get_attachment_image(653, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
  </div>
</section>

<section class="my-96">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="h2 text-center text-secondary">
          Área profesional
        </div>
      </div>
      <div class="col-12 text-secondary mt-160">
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div class="col-8 offset-2">
                <div class="row">
                  <div class="col-12">
                    <div class="h2">Catálogo</div>
                    <div class="mt-32">
                      Agua Mineral San Benedetto dispone de un amplísimo catálogo de productos y 
                      formatos que se adaptan a las necesidades de cada canal de distribución. <br></br>
                      Tanto en agua mineral como en refrescos, ofrecemos diversidad de formatos idóneos para el Gran Consumo, 
                      con un mix muy atractivo de Producto ―con una excelente calidad organoléptica y nutricional― y Precio, 
                      manteniéndonos siempre cerca de los hogares a través de marcas históricas y accesibles. 
                      Estamos presentes en las principales cadenas de supermercados e hipermercados. 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 g-0">
            <?=wp_get_attachment_image(663, "full", "", array( 'class' => 'w-100' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="col-6 g-0">
            <?=wp_get_attachment_image(664, "full", "", array( 'class' => 'w-100' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="col-6 d-flex align-items-center">
            <div class="row">
              <div class="col-8 offset-2">
                <div class="row">
                  <div class="col-12">
                    <div>
                    Disponemos también de toda una línea de productos que se adecúan perfectamente a las necesidades de la hostelería,
                     tiendas tradicionales y vending, acompañando a los consumidores en esas ocasiones especiales que demandan 
                     inmediatez, conveniencia o artículos más premium.<br></br>
                    Además, desde Agua Mineral San Benedetto España exportamos más de 16 millones de litros anuales a 
                    varios países de la Unión Europea y del norte de África. 
                    </div>
                    <div class="btn btn-primary text-uppercase text-white rounded-0 fs-13 mt-56">
                      Descarga nuestro catálogo
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96 d-flex position-relative">
  <div class="bg-secondary">
    <?=wp_get_attachment_image(51, "full", "", array( 'class' => 'opacity-50' , 'alt' => '' , 'title' => '') ); ?>
  </div>
  <div class="container-fluid zi-99 top-50 position-absolute translate-middle-y">
    <div class="container">
      <div class="row">
        <div class="offset-3 col-6 text-center text-white">
          <div class="row">
            <div class="col-12 text-uppercase">
              san benedetto
            </div>
            <div class="col-12 h4">
              ¿Quieres distribuir nuestros productos?
            </div>
            <div class="col-12 mt-32">
              <div class="btn btn-outline-white text-uppercase mt-40 rounded-0">
                Contáctanos aquí
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container bg-white">
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
