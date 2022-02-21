<?php
/* Template Name: Page Producto */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="position-relative bg-black">
    <?=wp_get_attachment_image(620, "full", "", array( 'class' => 'opacity-75' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
  </div>
  <div class="container-fluid zi-99 top-50 position-absolute transform-translate-y">
    <div class="container">
      <div class="row">
        <div class="offset-4 col-4 text-center">
          <div class="row text-white">
            <div class="col-12 text-uppercase">
              ecolosofía
            </div>
            <h1 class="col-12 mt-16 fs-64 fw-bold text-primary">
              Producto
            </h1>
            <div class="col-12 mt-40">
              <?=wp_get_attachment_image(614, "full", "", array( 'class' => 'opacity-75' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
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
      <div class="g-0 col-6 h2">
        <div class="row">
          <div class="offset-2 col-8">
            Ecodiseño
          </div>
        </div>
      </div>
      <div class="col-12 mt-64">
        <div class="row">
          <div class="g-0 col-12 col-sm-6 d-block">
            <div class="row">
              <div class="offset-2 col-8">
                En Agua Mineral San Benedetto somos especialistas en ecodiseño. 
                Ecodiseñar es considerar la variable ambiental en el proceso de diseño y desarrollo de un producto.  
                Llevamos una reducción media de más del 20% del gramaje de PET en nuestros envases desde 2008, 
                lo que nos ha llevado a ser el fabricante de envases más ligeros del mercado de agua mineral. 
                Además, empleamos PET y polietileno incoloros en la inmensa mayoría de nuestros envases para facilitar 
                su posterior reciclaje, ya que las botellas de otros colores se descartan en las plantas de reciclaje 
                y se destinan a otros usos. En la medida de lo posible, también utilizamos etiquetas de papel. 
                Por todo ello, ¡todos nuestros envases son 100% reciclables! 
                También diseñamos nuestros envases pensando en su optimización logística. 
                Por esa razón, la forma de algunas de nuestras botellas más representativas es cuadrada: de esta manera, 
                ¡evitamos huecos de aire innecesarios y podemos transportar más botellas por palé
              </div>
            </div>
          </div>
          <div class="g-0 col-12 col-sm-6 d-block">
            <?=wp_get_attachment_image(621, "full", "", array( 'class' => 'opacity-75' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
          </div>
          <div style="" class="g-0 col-12 col-sm-6 d-block bg-primary text-secondary">
            <div class="row position-relative h-100">
              <div class="container-fluid zi-99 top-50 position-absolute transform-translate-y">
                <div class="container">
                  <div class="row">
                    <div class="offset-2 col-8 h2">
                      Circularidad de envases
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="g-0 col-12 col-sm-6 d-block">
            <div class="row">
              <div class="offset-2 col-8 py-80">
                En Agua Mineral San Benedetto sostenemos que el rPET no es el objetivo, 
                sino una de las muchas variables que hacen posible la reducción de la huella de carbono. 
                Introducir más plástico reciclado para luego aumentar el gramaje de las botellas o 
                colorear los envases no es coherente con el objetivo.
                Por eso, en Agua Mineral San Benedetto intentamos utilizar rPET sin entrar en conflicto 
                con los logros obtenidos en materia de ecodiseño.  
                De este modo, todos nuestros films ya incorporan un 50% de plástico reciclado. 
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

<section class="my-96">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?=wp_get_attachment_image(622, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container">
    <div class="row text-center text-secondary">
      <div class="col-12 h2">
        Concienciación 
      </div>
      <div class="col-12 offset-sm-2 col-sm-8 mt-40">
        Queremos concienciar a las personas de la importancia de reciclar los envases en su contenedor correspondiente. 
        Con la ayuda de Ecoembes, podemos orientar a los consumidores a través de nuestro etiquetado y 
        evitar así que nuestros envases vayan a parar a donde no deben.  
        Además, todos nuestros productos incorporan el Punto Verde, 
        lo que significa que tenemos un ciclo de recuperación y reciclaje que nos permite reaprovechar los materiales. 
        Eso sí, siempre y cuando contemos con la colaboración ciudadana: 
        ¡vosotros iniciáis el ciclo al tirar el envase a su correspondiente contenedor!  
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