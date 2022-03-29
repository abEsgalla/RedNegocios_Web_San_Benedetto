<?php
/* Template Name: Page Producto */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black py-261">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(620, "full")?>')"></div>
      <?=wp_get_attachment_image(764, "full", "", array( 'class' => 'position-absolute top-50 start-50 translate-middle-y zi-99 mw-50vw d-none d-md-block' , 'alt' => '' , 'title' => '') ); ?>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-xl-4 col-xl-4 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase">
                ecolosofía
              </div>
              <h1 class="col-12 mt-16 h1 text-green mb-70">
                Producto
              </h1>
              <div class="col-12 position-relative">
                <?=wp_get_attachment_image(1181, "full", "", array( 'class' => 'sello opacity-75' , 'alt' => '' , 'title' => '') ); ?>
                <?=wp_get_attachment_image(1182, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-50 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96 mt-xl-170 gx-sm-12 gx-4">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 offset-xl-1 col-xl-10 h2 fs-32 fs-md-64 mb-64 fs-xl-64">
                Ecodiseño
      </div>
      <div class="col-12 position-relative">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
        class="d-none d-xxxl-block position-absolute top-0 end-0 w-auto translate-dots-col-after">
        <div class="row position-relative zi-99 overflow-hidden">
          <div class="order-1 order-md-0 col-12 col-xl-6" data-aos="fade-up">
            <div class="row">
              <div class="col-12 offset-xl-2 col-xl-8 fs-14 fs-sm-17 mb-sm-80 my-64 mt-sm-0">
                En Agua Mineral San Benedetto somos <strong>especialistas en ecodiseño.</strong>
                Ecodiseñar es considerar la variable ambiental en el proceso de diseño y desarrollo de un producto.<br></br>

                Llevamos una reducción media de más del 20% del gramaje de PET en nuestros envases desde 2008, 
                lo que nos ha llevado a ser el <strong>fabricante de envases más ligeros del mercado de agua mineral.</strong><br></br>

                Además, <strong>empleamos PET y polietileno incoloros en la inmensa mayoría de nuestros envases</strong> para facilitar 
                su posterior reciclaje, ya que las botellas de otros colores se descartan en las plantas de reciclaje 
                y se destinan a otros usos. En la medida de lo posible, también utilizamos etiquetas de papel. 
                Por todo ello, <strong>¡todos nuestros envases son 100% reciclables!</strong> <br></br>

                También diseñamos nuestros envases pensando en su <strong>optimización logística</strong>. 
                Por esa razón, la forma de algunas de nuestras botellas más representativas es cuadrada: de esta manera, 
                ¡evitamos huecos de aire innecesarios y podemos transportar más botellas por palé
              </div>
            </div>
          </div>
          <div style="background: url(<?=wp_get_attachment_image_url(1166, "full")?>)" 
          class="order-0 order-md-1 py-xl-0 py-200 col-12 col-sm-6 bg-custom-image img-version-mobile">
          </div>
          <div style="" class="img-version-mobile order-2 col-12 col-sm-6 py-xl-0 py-138 py-sm-200 bg-secondary text-white">
            <div class="row position-relative h-100">
              <div class="container">
                <div class="row d-flex h-100 align-items-center">
                  <div class="offset-xl-2 col-xl-8 col-12 h2 fs-32 fs-lg-64 text-xl-start text-center">
                    Circularidad de envases
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="order-3 col-12 col-xl-6">
            <div class="row overflow-hidden">
              <div class="pt-64 py-sm-80 pb-sm-0 pb-xl-80 col-12 offset-xl-2 col-xl-8 fs-14 fs-sm-17" data-aos="fade-up">
                En Agua Mineral San Benedetto sostenemos que <strong>el rPET no es el objetivo, 
                sino una de las muchas variables que hacen posible la reducción de la huella de carbono.</strong> 
                Introducir más plástico reciclado para luego aumentar el gramaje de las botellas o 
                colorear los envases no es coherente con el objetivo.<br></br>

                Por eso, en Agua Mineral San Benedetto <strong>intentamos utilizar rPET sin entrar en conflicto 
                con los logros obtenidos en materia de ecodiseño.</strong><br></br>

                De este modo, <strong>todos nuestros films ya incorporan un 50% de plástico reciclado.</strong> 
                Así mismo, nuestra botella Font Natura 1L Easy Eco Green, 
                galardonada con el premio Producto del Año en 2016, también está fabricada con un 50% de rPET. 
                Este año, también nuestra botella de Fuente Primavera con gas en formato de 1.5L incorpora un 25% de rPET. 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96 mt-xl-133 mb-xl-176 gx-sm-12 gx-4">
  <div class="container">
    <div class="row position-relative">
      <div class="col-12 bg-custom-image py-200 py-sm-290 zi-99 img-version-mobile"
        style="background:url('<?=wp_get_attachment_image_url(766, "full")?>')">
      </div>
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
        class="d-none d-xxxl-block position-absolute bottom-0 start-0 w-auto translate-dots-col-before">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
        class="d-none d-xxxl-block position-absolute bottom-0 end-0 w-auto translate-dots-col-bottom-after">
    </div>
  </div>
</section>

<section class="my-96 mb-xl-160 gx-sm-12 gx-4">
  <div class="container overflow-hidden">
    <div class="row text-center text-secondary" data-aos="fade-up">
      <div class="col-12 h2 fs-32 fs-md-64">
        Concienciación 
      </div>
      <div class="col-12 offset-xl-2 col-xl-8 mt-40 fs-14 fs-sm-17">
        Queremos concienciar a las personas de la <strong>importancia de reciclar los envases en su contenedor correspondiente.</strong>
        Con la ayuda de <strong>Ecoembes</strong>, podemos orientar a los consumidores a través de nuestro <strong>etiquetado</strong> y 
        evitar así que nuestros envases vayan a parar a donde no deben.<br></br>
        Además, todos nuestros productos incorporan el <strong>Punto Verde</strong>, 
        lo que significa que tenemos un ciclo de recuperación y reciclaje que nos permite reaprovechar los materiales. 
        Eso sí, siempre y cuando contemos con la colaboración ciudadana: 
        <strong>¡vosotros iniciáis el ciclo al tirar el envase a su correspondiente contenedor!</strong>
      </div>
      <div class="offset-2 col-8 offset-sm-0 col-sm-12 mt-40 mt-xl-133">
        <div class="d-flex flex-wrap flex-sm-nowrap w-100 justify-content-evenly align-items-center">
          <div class="py-3 px-12 my-sm-0">
            <?=wp_get_attachment_image(767, "full", "", array( 'class' => 'my-12 my-sm-0' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="py-3 px-12 my-sm-0">
            <?=wp_get_attachment_image(768, "full", "", array( 'class' => 'my-12 my-sm-0' , 'alt' => '' , 'title' => '') ); ?>
          </div>
          <div class="py-3 px-12 my-sm-0">
            <?=wp_get_attachment_image(769, "full", "", array( 'class' => 'my-12 my-sm-0' , 'alt' => '' , 'title' => '') ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-56 gx-sm-12 gx-4">
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