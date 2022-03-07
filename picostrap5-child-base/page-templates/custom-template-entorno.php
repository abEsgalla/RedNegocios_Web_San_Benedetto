<?php
/* Template Name: Page Entorno */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="position-relative bg-black">
    <?=wp_get_attachment_image(630, "full", "", array( 'class' => 'opacity-75' , 'alt' => '' , 'title' => '') ); ?>
  </div>
  <div class="container-fluid zi-99 top-50 position-absolute transform-translate-y">
    <div class="container">
      <div class="row">
        <div class="offset-4 col-4 text-center">
          <div class="row text-white">
            <div class="col-12 text-uppercase">
              ecolosofía
            </div>
            <h1 class="col-12 mt-16 h1 text-green">
              Entorno
            </h1>
            <div class="col-12 mt-40">
              <?=wp_get_attachment_image(636, "full", "", array( 'class' => 'opacity-75' , 'alt' => '' , 'title' => '') ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="offset-2 col-8 text-center h2">
            Medición de indicadores estratégicos
          </div>
          <div class="offset-2 col-8 text-center mt-80">
            Creemos que una cantidad de CO2 emitida en un lugar de la Tierra 
            puede ser neutralizada con la reducción o eliminación de la misma cantidad de CO2 en otro punto del planeta.
            Gracias a que medimos nuestra huella de carbono, 
            ¡podemos afirmar que compensamos el 100% de las emisiones de algunos de nuestros productos! 
            ¿Cómo? Invirtiendo en proyectos forestales sostenibles. <br></br>
            Descubre más sobre ellos aquí:  
          </div>
          <div class="col-12 mt-56">
            <div class="row text-center">
              <div class="col-4">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <span class="rounded-circle border border-1 p-80 border-grey bg-grey"></span>
                  </div>
                  <div class="col-12 mt-24 fs-20 fw-bold">
                    Nyagatare (Ruanda) 
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <span class="rounded-circle border border-1 p-80 border-grey bg-grey"></span>
                  </div>
                  <div class="col-12 mt-24 fs-20 fw-bold">
                    Castañeros REDD+ (Perú) 
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-12 d-flex justify-content-center">
                    <span class="rounded-circle border border-1 p-80 border-grey bg-grey"></span>
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

<section class="my-96">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="g-0 col-12 col-sm-6 d-block">
            <div class="row">
              <div class="offset-2 col-8">
                <div class="row">
                  <div class="col-12 h3">
                    Logística 
                  </div>
                  <div class="col-12 mt-30">
                    En la medida de lo posible, tratamos de utilizar formas de transporte sostenible, 
                    como el uso de vehículos propulsados por GNL y camiones dúo-tráiler, 
                    contribuyendo así a reducir nuestras emisiones de CO2. 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="g-0 col-12 col-sm-6 d-block position-relative">
            <?=wp_get_attachment_image(631, "full", "", array( 'class' => 'position-absolute' , 'alt' => '' , 'title' => '') ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-218 bg-primary-brighter">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="g-0 col-12 col-sm-6 d-block position-relative">
            <?=wp_get_attachment_image(632, "full", "", array( 'class' => 'position-absolute bottom-0' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="g-0 col-12 col-sm-6 d-block">
            <div class="row">
              <div class="offset-2 col-8">
                <div class="row">
                  <div class="col-12 h3">
                    Limpieza y reforestación del entorno  
                  </div>
                  <div class="col-12 mt-30">
                    Llevamos varios años organizando plantaciones de árboles en los alrededores de nuestras instalaciones, 
                    eligiendo árboles y vegetación autóctona del Parque Natural de las Hoces del Cabriel. 
                    En total, calculamos que hemos repoblado más de 1.000 plantas en los últimos cinco años. <br></br>
                    También realizamos tareas de limpieza en nuestro entorno para fomentar la lucha contra el littering 
                    ―abandono de residuos― y la limpieza de espacios protegidos. 
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

<section class="my-96">
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