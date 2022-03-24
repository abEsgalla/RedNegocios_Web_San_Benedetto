<?php
/* Template Name: Page Area Profesional */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black py-333">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(790, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-6">
            <div class="row text-white">
              <h1 class="col-12 h2">
                Área <br> profesional
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96 mt-xl-138">
  <div class="container">
    <div class="row">
      <div class="col-12 text-secondary">
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div class="col-8 offset-2">
                <div class="row">
                  <div class="col-12">
                    <div class="h2">Catálogo</div>
                    <div class="mt-32 fs-17">
                      Agua Mineral San Benedetto dispone de un amplísimo catálogo de productos y 
                      formatos que se adaptan a las necesidades de cada canal de distribución. <br></br>
                      Tanto en agua mineral como en refrescos, ofrecemos diversidad de formatos idóneos para el <strong>Gran Consumo</strong>, 
                      con un <i>mix</i> muy atractivo de Producto ―con una excelente calidad organoléptica y nutricional― y Precio, 
                      manteniéndonos <strong>siempre cerca de los hogares</strong> a través de marcas históricas y accesibles. 
                      Estamos presentes en las principales cadenas de supermercados e hipermercados. 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 position-relative g-0">
            <?=wp_get_attachment_image(927, "full", "", array( 'class' => 'position-absolute w-100 top-0 transform-translate-ny pb-32' , 'alt' => '' , 'title' => '') ); ?>
            <?=wp_get_attachment_image(788, "full", "", array( 'class' => 'w-100' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="col-6 g-0">
            <?=wp_get_attachment_image(789, "full", "", array( 'class' => 'w-100' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="col-6 d-flex align-items-center">
            <div class="row">
              <div class="col-8 offset-2">
                <div class="row">
                  <div class="col-12 fs-17">
                    <div>
                    Disponemos también de toda una línea de productos que se adecúan perfectamente a las necesidades de la <strong>hostelería,
                     tiendas tradicionales y vending</strong>, acompañando a los consumidores en esas ocasiones especiales que demandan 
                     inmediatez, conveniencia o artículos más <i>premium</i>.<br></br>
                    Además, desde Agua Mineral San Benedetto España <strong>exportamos más de 16 millones de litros anuales</strong> a 
                    varios países de la Unión Europea y del norte de África. 
                    </div>
                    <div class="btn btn-primary text-uppercase text-white rounded-0 fs-14 mt-56 fw-500">
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

<section class="mt-160">
  <div class="container-fluid position-relative zi-9 bg-secondary-darker py-105">
    <div class="bg-custom-image opacity-50 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(51, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="offset-2 col-8 text-center text-white">
            <div class="row">
              <div class="col-12 text-uppercase fs-18">
                san benedetto
              </div>
              <div class="col-12 h4 mt-8">
                ¿Quieres distribuir nuestros productos?
              </div>
              <div class="col-12 mt-32">
                <a href="<?=get_permalink(650)?>" class="text-rest">
                  <div class="btn btn-outline-white text-uppercase rounded-0 fw-500 fs-14">
                    Contáctanos aquí
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-56">
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
