<?php
/* Template Name: Page Entorno */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black py-160 py-lg-261">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(780, "full")?>')"></div>
      <?=wp_get_attachment_image(779, "full", "", array( 'class' => 'position-absolute top-50 start-50 translate-middle-y zi-99 mw-50vw d-none d-md-block' , 'alt' => '' , 'title' => '') ); ?>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-xl-4 col-xl-4 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase">
                ecolosofía
              </div>
              <h1 class="col-12 mt-16 h1 text-green mb-70">
                Entorno
              </h1>
              <div class="col-12 position-relative">
                <?=wp_get_attachment_image(1185, "full", "", array( 'class' => 'sello opacity-75' , 'alt' => '' , 'title' => '') ); ?>
                <?=wp_get_attachment_image(1186, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-50 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-64 mt-sm-80 mt-lg-185 gx-4 gx-sm-12">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 offset-sm-1 col-sm-10">
        <div class="row overflow-hidden">
          <div class="col-12 text-center h2 fs-32 fs-md-64">
            Reducción y compensación de emisiones
          </div>
          <div class="col-12 text-center mt-64 mt-sm-80 fs-17" data-aos="fade-up">
            Creemos que <strong>una cantidad de CO2 emitida en un lugar de la Tierra 
            puede ser neutralizada con la reducción o eliminación de la misma cantidad de CO2 en otro punto del planeta.</strong>
            Gracias a que medimos nuestra huella de carbono, 
            ¡podemos afirmar que compensamos el 100% de las emisiones de algunos de nuestros productos! 
            ¿Cómo? Invirtiendo en <strong>proyectos forestales sostenibles.</strong> <br></br>
            Descubre más sobre ellos aquí:  
          </div>
          <div class="col-12">
            <div class="row text-center">
              <div class="col-12 col-sm-4 mt-60" data-aos="fade-right">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <span class="rounded-circle border border-1">
                      <?=wp_get_attachment_image(781, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                    </span>
                  </div>
                  <div class="col-12 mt-24 fs-20 fw-bold">
                    Nyagatare (Ruanda) 
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4 mt-60" data-aos="fade-down">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <span class="rounded-circle border border-1">
                      <?=wp_get_attachment_image(782, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                    </span>
                  </div>
                  <div class="col-12 mt-24 fs-20 fw-bold">
                    Castañeros REDD+ (Perú) 
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4 mt-60" data-aos="fade-left">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <span class="rounded-circle border border-1">
                      <?=wp_get_attachment_image(783, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                    </span>
                  </div>
                  <div class="col-12 mt-24 fs-20 fw-bold">
                    Ecomapuá REDD+ (Brasil)  
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

<section class="mt-64 mt-sm-120 mt-lg-245 pb-36 position-relative zi-99 gx-4 gx-sm-12">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 position-relative">
        <div class="row position-relative">
          <div class="col-12 col-lg-6 order-1 order-lg-0">
            <div class="row">
              <div class="col-12 offset-xl-2 col-xl-8 overflow-hidden" data-aos="fade-right">
                <div class="row">
                  <div class="col-12 h3 fs-26 fs-md-45 mt-70 mt-lg-0">
                    Logística
                  </div>
                  <div class="col-12 my-32 fs-17">
                    En la medida de lo posible, tratamos de utilizar formas de transporte sostenible, 
                    como el uso de vehículos propulsados por GNL y camiones dúo-tráiler, 
                    contribuyendo así a reducir nuestras emisiones de CO2. 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 order-0 order-lg-1 py-200 py-lg-245 position-relative bg-custom-image" 
          style="background:url('<?=wp_get_attachment_image_url(784, "full")?>')">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="position-relative">
  <div class="py-96 py-sm-218 bg-primary-brighter position-absolute top-0 translate-middle-lg-y w-100">
  </div>
</section>

<section class="position-relative zi-99 pt-36 gx-4 gx-sm-12 mb-80 mb-md-242">
  <div class="container text-secondary">
    <div class="row position-relative">
      <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
      class="d-none d-xxxl-block position-absolute bottom-0 start-0 w-auto translate-dots-col-before">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-lg-6 py-200 py-lg-374 position-relative bg-custom-image" 
          style="background:url('<?=wp_get_attachment_image_url(632, "full")?>')">
          </div>
          <div class="col-12 col-lg-6 d-inline-flex align-items-end">
            <div class="row overflow-hidden">
              <div class="col-12 offset-xl-2 col-xl-8 gx-xl-0" data-aos="fade-left">
                <div class="row">
                  <div class="col-12 h3 fs-26 fs-md-45 mt-70 mt-lg-0">
                    Limpieza y reforestación del entorno 
                  </div>
                  <div class="col-12 mt-30 fs-17">
                    Llevamos varios años organizando plantaciones de árboles 
                    en los alrededores de nuestras instalaciones, eligiendo árboles y 
                    vegetación autóctona del Parque Natural de las Hoces del Cabriel. 
                    En total, calculamos que hemos repoblado <b>más de 1.000 plantas en 
                    los últimos cinco años.</b>
                    <br></br>
                    También realizamos tareas de limpieza en nuestro entorno para 
                    fomentar la lucha contra el littering ―abandono de residuos― y 
                    la limpieza de espacios protegidos. 
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

<section class="my-56 gx-4 gx-sm-12">
  <div class="container">
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