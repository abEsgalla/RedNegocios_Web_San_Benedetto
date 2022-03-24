<?php
/* Template Name: Page Procesos */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black py-261">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(623, "full")?>')"></div>
      <?=wp_get_attachment_image(773, "full", "", array( 'class' => 'position-absolute top-50 start-50 translate-middle-y zi-99' , 'alt' => '' , 'title' => '') ); ?>
      <div class="container position-relative">
        <div class="row">
          <div class="offset-4 col-4 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase">
                ecolosofía
              </div>
              <h1 class="col-12 mt-16 h1 text-green mb-70">
                Procesos
              </h1>
              <div class="col-12 position-relative">
                <?=wp_get_attachment_image(1183, "full", "", array( 'class' => 'opacity-75' , 'alt' => '' , 'title' => '') ); ?>
                <?=wp_get_attachment_image(1184, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-50 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="mt-185">
  <div class="container text-secondary">
    <div class="row">
      <div class="g-0 col-12 mb-105">
        <div class="row">
          <div class="offset-2 col-8 text-center h2">
          Medición de indicadores estratégicos
          </div>
        </div>
      </div>
      <div class="col-12 position-relative pt-80">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
        class="d-none d-xxxl-block position-absolute top-0 end-0 w-auto translate-dots-col-after">
        <div class="row position-relative">
          <div class="g-0 col-12 col-sm-6 d-block">
            <div class="row">
              <div class="offset-2 col-8" data-aos="fade-right">
                <div class="row">
                  <div class="col-12 h3">
                    Huella de Carbono 
                  </div>
                  <div class="col-12 mt-32 mb-105 fs-17">
                    En Agua Mineral San Benedetto creemos que, para poder reducir nuestra huella ambiental, 
                    primero hemos de ser capaces de <strong>cuantificarla</strong>. 
                    Y es que <strong>todo lo que se puede medir, se puede mejorar.</strong> ¿Cómo lo hacemos? <br></br>

                    Nosotros usamos un sistema de cálculo ofrecido por el software SIMAPRO, 
                    certificado con estándares internacionales reconocidos como el GHG Protocol o la Norma ISO 14064. 
                    Sólo de esta manera podemos responder en consecuencia con soluciones que reduzcan de forma <strong>efectiva, 
                    cuantificable y medible</strong> nuestro impacto medioambiental. 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="g-0 col-12 col-sm-6 d-block position-relative">
            <?=wp_get_attachment_image(774, "full", "", array( 'class' => 'w-100 position-absolute' , 'alt' => '' , 'title' => '') ); ?>
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

<section class="">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 mt-64">
        <div class="row">
          <div class="g-0 col-12 col-sm-6 d-block position-relative">
            <?=wp_get_attachment_image(775, "full", "", array( 'class' => 'w-100 position-absolute bottom-0' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="g-0 col-12 col-sm-6 d-block">
            <div class="row">
              <div class="offset-2 col-8" data-aos="fade-left">
                <div class="row">
                  <div class="col-12 h3 mt-89">
                    Smart Water 4.0 
                  </div>
                  <div class="col-12 mt-30 fs-17">
                    En 2019 incorporamos a nuestro proceso productivo un <strong>sistema de gestión 
                    inteligente de los recursos hídricos</strong> que nos permite obtener y disponer datos en tiempo real. 
                    Este proyecto innovador fue seleccionado por <strong>El Observatorio de Innovación en Gran Consumo</strong> en el mismo año.<br></br>
                    Se trata de una aplicación que, mediante la tecnología 4.0 y el IoT (“Internet de las Cosas”), 
                    conecta los pozos de agua y monitoriza las lecturas de los manantiales en remoto. 
                    El <strong>control de las métricas</strong> ―caudal, características bioquímicas del agua, lecturas microbiológicas― 
                    es inmediato y preciso, por lo que se facilita la gestión de los 
                    datos tratados a lo largo de todo el proceso productivo.<br></br> 
                    Gracias a ello, <strong>evitamos los desplazamientos físicos</strong> hasta los manantiales para la toma de datos, 
                    <strong>disminuyendo el impacto ambiental de los vehículos utilizados y el desperdicio de los recursos hídricos.</strong>
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

<section class="my-96 mt-xl-245 mb-xl-185">
  <div class="container">
    <div class="row text-secondary">
      <div class="col-12 h2 text-center">
        Circularidad de los recursos 
      </div>
      <div class="col-12 mt-90">
        <div class="row">
          <div class="col-4">
            <div class="row">
              <div class="col-12 ratio-1x1">
                <?=wp_get_attachment_image(778, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
              </div>
              <div class="col-12 mt-48 h4">
                Vertido Cero 
              </div>
              <div class="col-12 mt-24 fs-17">
                Tenemos un <strong>acuerdo con la comunidad de regantes local, 
                avalado y tutelado por la Confederación Hidrográfica del Júcar</strong>, 
                para aprovechar el agua sobrante de nuestro proceso productivo y 
                canalizarla hacia los campos de cultivo de nuestro entorno. De esta manera, 
                evitamos las perforaciones con fines agrarios, 
                que ponen en peligro de sobreexplotación al acuífero, y aprovechamos la totalidad de los recursos hídricos.      
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="row">
              <div class="col-12 ratio-1x1">
                <?=wp_get_attachment_image(777, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
              </div>
              <div class="col-12 mt-48 h4">
                Producción con energías 100% renovables 
              </div>
              <div class="col-12 mt-24 fs-17">
                El 100% de la energía eléctrica que consumimos en nuestras fábricas en España 
                proviene directamente de fuentes 100% renovables. 
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="row">
              <div class="col-12 ratio-1x1">
                <?=wp_get_attachment_image(776, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
              </div>
              <div class="col-12 mt-48 h4">
                Residuos industriales 
              </div>
              <div class="col-12 mt-24 fs-17">
                Tenemos un acuerdo con <strong>Reciclatges Guerola S.L</strong> mediante el cual se garantiza 
                que todos nuestros residuos internos de cartón y plástico son adecuadamente tratados 
                (Ley 22/2011 de Residuos y Suelos Contaminados) para que estos se reincorporen, 
                ya como materia prima, al circuito productivo, ofreciéndoles así una segunda vida. 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-56">
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