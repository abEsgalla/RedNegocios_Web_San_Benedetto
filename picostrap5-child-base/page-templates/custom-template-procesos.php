<?php
/* Template Name: Page Procesos */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black py-160 py-lg-261">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(623, "full")?>')"></div>
      <?=wp_get_attachment_image(773, "full", "", array( 'class' => 'position-absolute top-50 start-50 translate-middle-y zi-99 mw-50vw d-none d-md-block' , 'alt' => '' , 'title' => '') ); ?>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-xl-4 col-xl-4 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase">
                ecolosofía
              </div>
              <h1 class="col-12 mt-16 h1 text-green mb-70 lh-1">
                Procesos
              </h1>
              <div class="col-12 position-relative">
                <?=wp_get_attachment_image(1183, "full", "", array( 'class' => 'sello opacity-75' , 'alt' => '' , 'title' => '') ); ?>
                <?=wp_get_attachment_image(1184, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-50 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="mt-64 mt-lg-185 pb-70 position-relative zi-99 gx-4 gx-sm-12">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 mb-64 mb-lg-105">
        <div class="row">
          <div class="col-12 offset-xl-2 col-xl-8 text-center h2 fs-32 fs-md-64">
          Medición de indicadores estratégicos
          </div>
        </div>
      </div>
      <div class="col-12 position-relative pt-0 pt-lg-80">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
        class="d-none d-xxxl-block position-absolute top-0 end-0 w-auto translate-dots-col-after">
        <div class="row position-relative">
          <div class="col-12 col-lg-6 order-1 order-lg-0">
            <div class="row overflow-hidden">
              <div class="col-12 offset-xl-2 col-xl-8 overflow-hidden" data-aos="fade-up">
                <div class="row">
                  <div class="col-12 h3 fs-26 fs-md-48 mt-70 mt-lg-0">
                    Huella de Carbono 
                  </div>
                  <div class="col-12 my-32 fs-14 fs-sm-17">
                    En Agua Mineral San Benedetto creemos que, para poder reducir nuestra huella ambiental, 
                    primero hemos de ser capaces de <strong>cuantificarla</strong>. 
                    Y es que <strong>todo lo que se puede medir, se puede mejorar.</strong> ¿Cómo lo hacemos? <br></br>

                    Nosotros usamos un sistema de cálculo ofrecido por el 
                    <a href="https://network.simapro.com/cadis/" class="text-reset">software SIMAPRO</a>, 
                    certificado con estándares internacionales reconocidos como el GHG Protocol o la Norma ISO 14064. 
                    Sólo de esta manera podemos responder en consecuencia con soluciones que reduzcan de forma <strong>efectiva, 
                    cuantificable y medible</strong> nuestro impacto medioambiental. 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 order-0 order-lg-1 py-200 py-lg-409 position-relative bg-custom-image img-version-mobile" 
          style="background:url('<?=wp_get_attachment_image_url(774, "full")?>')">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="position-relative">
  <div class="py-96 py-sm-170 bg-primary-brighter position-absolute top-0 translate-middle-lg-y w-100">
  </div>
</section>

<section class="position-relative zi-99 pt-70 gx-4 gx-sm-12">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-lg-6 py-200 py-lg-463 position-relative bg-custom-image img-version-mobile" 
          style="background:url('<?=wp_get_attachment_image_url(775, "full")?>')">
          </div>
          <div class="col-12 col-lg-6 d-inline-flex align-items-end">
            <div class="row overflow-hidden">
              <div class="col-12 offset-xl-2 col-xl-8 gx-xl-0" data-aos="fade-up">
                <div class="row">
                  <div class="col-12 h3 fs-26 fs-md-48 mt-70 mt-lg-0">
                    Smart Water 4.0 
                  </div>
                  <div class="col-12 mt-30 fs-14 fs-sm-17">
                    En 2019 incorporamos a nuestro proceso productivo un <strong>sistema de gestión 
                    inteligente de los recursos hídricos</strong> que nos permite obtener y disponer datos en tiempo real. 
                    Este proyecto innovador fue seleccionado por 
                    <a href="https://www.icerda.org/observatorio-de-innovacion-en-gran-consumo/" class="text-reset">
                      <strong>El Observatorio de Innovación en Gran Consumo</strong> 
                    </a>  
                    en el mismo año.<br></br>
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

<section class="mb-96 mt-133 mt-xl-242 mb-xl-185 gx-4 gx-sm-12">
  <div class="container">
    <div class="row text-secondary">
      <div class="col-12 h2 fs-32 fs-md-64 text-center">
        Circularidad de los recursos 
      </div>
      <div class="col-12 offset-sm-2 col-sm-8 offset-lg-0 col-lg-12">
        <div class="row">
          <div class="col-12 col-lg-4 text-center text-lg-start mt-64 mt-lg-90">
            <div class="row">
              <div class="col-12 ratio-1x1">
                <?=wp_get_attachment_image(778, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
              </div>
              <div class="col-12 mt-48 h4 fs-24 fs-sm-32">
                Vertido Cero 
              </div>
              <div class="col-12 mt-24 fs-14 fs-sm-17">
                Tenemos un <strong>acuerdo con la comunidad de regantes local, 
                avalado y tutelado por la 
                <a href="https://www.chj.es/es-es/Paginas/Home.aspx" class="text-reset">
                  Confederación Hidrográfica del Júcar
                </a>
                </strong>, 
                para aprovechar el agua sobrante de nuestro proceso productivo y 
                canalizarla hacia los campos de cultivo de nuestro entorno. De esta manera, 
                evitamos las perforaciones con fines agrarios, 
                que ponen en peligro de sobreexplotación al acuífero, y aprovechamos la totalidad de los recursos hídricos.      
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 text-center text-lg-start mt-64 mt-lg-90">
            <div class="row">
              <div class="col-12 ratio-1x1">
                <?=wp_get_attachment_image(777, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
              </div>
              <div class="col-12 mt-48 h4 fs-24 fs-sm-32">
                Producción con energías 100% renovables 
              </div>
              <div class="col-12 mt-24 fs-14 fs-sm-17">
                El 100% de la energía eléctrica que consumimos en nuestras fábricas en España 
                proviene directamente de fuentes 100% renovables. 
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 text-center text-lg-start mt-64 mt-lg-90">
            <div class="row">
              <div class="col-12 ratio-1x1">
                <?=wp_get_attachment_image(776, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
              </div>
              <div class="col-12 mt-48 h4 fs-24 fs-sm-32">
                Residuos industriales 
              </div>
              <div class="col-12 mt-24 fs-14 fs-sm-17">
                Tenemos un acuerdo con 
                <a href="http://www.reciclajesguerola.com/" class="text-reset">
                  <strong>Reciclatges Guerola S.L</strong> 
                </a>
                mediante el cual se garantiza 
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