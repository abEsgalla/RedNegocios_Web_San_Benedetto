<?php
/* Template Name: Page Area Profesional */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black pt-sm-160 pt-120 pb-218 pb-sm-463 py-lg-333">
    <div class="bg-parallax opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(790, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 col-xl-6">
            <div class="row text-white text-center text-sm-start">
              <div class="col-12 text-uppercase">
                GRUPO SAN BENEDETTO
              </div>
              <h1 class="col-12 mt-16 h2 fs-32 fs-md-64 lh-1">
                Área <br> profesional
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gx-sm-12 gx-4">
  <div class="container">
    <div class="row">
      <div class="col-12 offset-lg-6 col-lg-6 position-relative gx-0 img-version-mobile">
        <div class="bg-custom-image img-parallax py-150 py-sm-254 py-lg-290 w-100 mt-n150 mt-sm-n333 mt-sm-n374 mt-lg-n463" 
        style="background:url('<?=wp_get_attachment_image_url(927, "full")?>')">
        </div>
      </div>
    </div>
</section>

<section class="mt-56 mt-lg-32 gx-sm-12 gx-4">
  <div class="container">
    <div class="row">
      <div class="col-12 text-secondary">
        <div class="row">
          <div class="order-0 col-12 col-lg-6">
            <div class="row">
              <div class="col-12 col-xl-8 offset-xl-2">
                <div class="row overflow-hidden">
                  <div class="col-12" data-aos="fade-up">
                    <div class="h2 fs-24 fs-md-64">Catálogo</div>
                    <div class="mt-32 mb-48 mb-lg-0 fs-14 fs-sm-17">
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
          <div class="order-1 col-12 col-lg-6 position-relative gx-0 img-version-mobile">
            <div class="bg-custom-image img-parallax py-150 py-sm-290 w-100" 
            style="background:url('<?=wp_get_attachment_image_url(788, "full")?>')">
            </div>
          </div>
          <div class="order-3 order-lg-2 col-12 py-lg-0 py-150 py-sm-290 col-lg-6 bg-custom-image img-parallax img-version-mobile" 
          style="background:url('<?=wp_get_attachment_image_url(789, "full")?>')">
          </div>
          <div class="order-2 order-lg-3 col-12 col-lg-6 d-flex align-items-center">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <div class="row overflow-hidden">
                  <div class="col-12 fs-14 fs-sm-17 my-lg-94 mt-56 mb-64" data-aos="fade-up">
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

<section class="mt-60 mt-xl-160 gx-sm-12 gx-4">
  <div class="container-fluid position-relative zi-9 bg-secondary-darker py-150 py-sm-105">
    <div class="bg-custom-image opacity-50 w-100 h-100 position-absolute top-0 start-0 bg-postion-x-center" 
      style="background:url('<?=wp_get_attachment_image_url(51, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-lg-2 col-lg-8 text-center text-white">
            <div class="row">
              <div class="col-12 text-uppercase fs-18">
                san benedetto
              </div>
              <div class="col-12 h4 mt-8">
                Conoce nuestras marcas
              </div>
              <div class="col-12 mt-32">
                <a href="<?=get_permalink(650)?>" class="text-rest">
                  <div class="btn btn-outline-white text-uppercase rounded-0 fw-500 fs-14">
                    <span>Contáctanos aquí</span>
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

<section class="my-56 gx-sm-12 gx-4">
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
