<?php
/* Template Name: Page Preguntas Frecuentes */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="position-relative">
  <div class="position-relative bg-secondary-darker">
    <?=wp_get_attachment_image(787, "full", "", array( 'class' => 'opacity-50' , 'alt' => '' , 'title' => '') ); ?>
  </div>
  <div class="container-fluid zi-99 top-50 position-absolute transform-translate-y">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="row text-white">
            <div class="col-12 fs-18 text-uppercase">
              GRUPO SAN BENEDETTO
            </div>
            <h1 class="col-12 h2">
                Preguntas frecuentes
            </h1>
            <div class="col-12 fs-24 mt-24">
                ¿Tienes alguna duda?
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$request = array(
  '1. ¿Qué es lo que distingue a nuestras aguas minerales de otras marcas?',
  '2. ¿En qué se distingue el agua mineral de otras aguas?',
  '3. ¿Cuál es la mejor agua mineral? ',
  '4. ¿Es cierto que los adultos ingerimos menos minerales de los que deberíamos?',
  '5. ¿Qué es el residuo seco?',
  '6. ¿En qué se diferencian nuestros refrescos de otras marcas?',
  '7. ¿Por qué nuestros envases son los más ligeros del mercado?',
  '8. ¿Qué es el PET y el rPET? ',
  '9. ¿Por qué utilizamos PET para envasar nuestras bebidas y por qué es un material 100% reciclable y circular?',
  '10. ¿Qué es la Ecolosofía de Agua Mineral San Benedetto? ',
  '11. Soy consumidor, ¿puedo comprar productos directamente a Agua Mineral San Benedetto?',
  '12. Soy diabético, ¿puedo consumir los refrescos de Agua Mineral San Benedetto?',
  '13. Estoy organizando un evento. ¿Puede Agua Mineral San Benedetto proporcionarme el agua o la bebida?',
  '14. Estoy buscando posibles patrocinadores. ¿Podría patrocinarme Agua Mineral San Benedetto?'
);
$response = array(
  'Cada agua mineral es única. Hay muchos factores que influyen en el sabor y las características nutricionales de las aguas minerales, 
  principalmente la composición química, que a su vez depende directamente de las cualidades del terreno en el que se localiza el 
  manantial correspondiente. <br></br>
  Los manantiales de Agua Mineral San Benedetto ―Fuente Primavera, Fuencisla y Font Natura― se caracterizan 
  por tener una composición mineral muy equilibrada. Los dos primeros, situados entre el Parque Natural de las Hoces del Cabriel 
  y el Parque Geológico Sot de Chera, son ricos en calcio y en magnesio, lo que proporciona una hidratación completa, 
  especialmente recomendable para personas con déficit de estos minerales. 
  El manantial de Font Natura (Sierra de Loja), por su parte, provee un agua mineral especialmente indicada para dietas pobres en sodio. <br></br>
  Todas nuestras aguas minerales son de mineralización débil.',
  'lorem',
  'lorem',
  'lorem',
  'lorem',
  'lorem',
  'lorem',
  'lorem',
  'lorem',
  'lorem',
  'lorem',
  'lorem',
  'lorem',
  'lorem'
);
?>

<section id="preguntas-frecuentes" class="position-relative my-120">
  <div class="container">
    <div class="row">
      <div class="col-12 offset-xl-1 col-xl-10">
      <!--ACORDION-->
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php
        foreach ($request as $request_key => $single_request):
        ?>
        <div class="accordion-item border-secondary-lighter">
          <h2 class="accordion-header" id="flush-heading-<?=$request_key?>">
            <button class="accordion-button collapsed fs-18 fw-500 text-secondary text-uppercase py-24 ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?=$request_key?>" 
            aria-expanded="false" aria-controls="flush-collapse-<?=$request_key?>">
              <?=$single_request?>
            </button>
          </h2>
          <div id="flush-collapse-<?=$request_key?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?=$request_key?>"
           data-bs-parent="#accordionFlushExample">
            <div class="ps-0 accordion-body pt-32 pb-64 text-secondary fs-16">
              <?=$response[$request_key]?>
            </div>
          </div>
        </div>
        <?
        endforeach;
        ?>
      </div>
      <!--***-->
      </div>
    </div>
  </div>
</section>

<section class="d-flex position-relative my-56">
  <div class="bg-secondary-darker">
    <?=wp_get_attachment_image(51, "full", "", array( 'class' => 'opacity-50' , 'alt' => '' , 'title' => '') ); ?>
  </div>
  <div class="container-fluid zi-99 position-absolute top-50 translate-middle-y">
    <div class="container">
      <div class="row">
        <div class="offset-3 col-6 text-center text-white">
          <div class="row">
            <div class="col-12 text-uppercase fs-18 pt-20">
              san benedetto
            </div>
            <div class="col-12 h4 mt-10">
              Conoce nuestras marcas
            </div>
            <div class="col-12 mt-32 fs-17">
              <a href="#" class="col-12 text-center">
                <div class="btn btn-outline-white text-uppercase rounded-0">
                  saber más              
                </div>
              </a>
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