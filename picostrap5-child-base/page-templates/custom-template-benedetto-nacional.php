<?php
/* Template Name: Page Benedetto España */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="position-absolute top-0">
  <div class="position-relative bg-black">
    <?=wp_get_attachment_image(657, "full", "", array( 'class' => 'opacity-50' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
  </div>
  <div class="container-fluid zi-99 top-25 position-absolute">
    <div class="container">
      <div class="row">
        <div class="offset-1 col-10 text-center">
          <div class="row text-white">
            <div class="col-12 text-uppercase fs-18">
            GRUPO SAN BENEDETTO
            </div>
            <h1 class="col-12 mt-8 h2 text-white">
              Agua Mineral San Benedetto en España
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-96 position-relative mt-custom-25">
  <div class="container bg-white">
    <div class="row">
      <div class="offset-2 col-8 mt-112">
        <div class="row">
          <div class="col-12 text-center text-secondary">
            <div class="h2">
              Nuestras plantas
            </div>
            <div class="mt-56 pb-56">
              Agua Mineral San Benedetto es la primera envasadora de agua mineral en España por volumen, 
              y uno de los principales fabricantes de refrescos del país.<br></br>
              La compañía posee 2 plantas de envasado en España: Agua Mineral San Benedetto S.A.U. 
              en San Antonio de Requena (Valencia) y Parque La Presa S.A. en Loja (Granada). 
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
          <div class="col-6 g-0 position-relative">
            <?=wp_get_attachment_image(658, "full", "", array( 'class' => 'w-100 position-absolute' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
          </div>
          <div class="col-6 py-56">
            <div class="row">
              <div class="offset-1 col-10">
                En San Antonio de Requena se envasan nuestras aguas minerales Fuente Primavera y Fuencisla, 
                además de producirse toda nuestra línea de refrescos. Aquí se encuentran también nuestra Oficinas Centrales. 
              </div>
            </div>
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
          <div class="col-6 py-56">
            <div class="row">
              <div class="offset-1 col-10">
                En Loja, se envasa nuestra agua mineral Font Natura.<br></br>
                En total, disponemos de 11 líneas de llenado y 2 de aséptico. 
                Envasamos más de 1.000 millones de litros anuales y empleamos a más de 300 personas entre las dos plantas. 
              </div>
            </div>
          </div>
          <div class="col-6 g-0 position-relative">
            <?=wp_get_attachment_image(659, "full", "", array( 'class' => 'w-100 position-absolute bottom-0' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
          </div>
        </div> 
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 text-center">
        <div class="fs-18 text-uppercase">descubre nuestros</div>
        <div class="h2">Manatiales</div>
      </div>
      <div class="col-12 mt-80">
        <div class="row">
          <div class="col-4">
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <span class="rounded-circle border border-1 p-80 border-grey bg-grey"></span>
              </div>
              <div class="col-12 mt-48 fs-20 fw-bold text-uppercase">
                Manantial<br> Fuente Primavera
              </div>
              <div class="mt-20">
                <ul class="list-style-inside p-0 text-secondary-lighter">
                  <li class="mt-12">Caudal de 75L por segundo</li>
                  <li class="mt-12">Alumbramiento perforado a 180m de profundidad.</li>
                  <li class="mt-12"> Agua de mineralización débil.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <span class="rounded-circle border border-1 p-80 border-grey bg-grey"></span>
              </div>
              <div class="col-12 mt-48 fs-20 fw-bold text-uppercase">
                Manantial Fuencisla
              </div>
              <div class="mt-20">
                <ul class="list-style-inside p-0 text-secondary-lighter">
                  <li class="mt-12">Caudal de 8L por segundo</li>
                  <li class="mt-12">Alumbramiento perforado a 170m de profundidad.</li>
                  <li class="mt-12"> Agua de mineralización débil.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="row">
              <div class="col-12 d-flex justify-content-center">
                <span class="rounded-circle border border-1 p-80 border-grey bg-grey"></span>
              </div>
              <div class="col-12 mt-48 fs-20 fw-bold text-uppercase">
                Manantial Font Natura
              </div>
              <div class="mt-20">
                <ul class="list-style-inside p-0 text-secondary-lighter">
                  <li class="mt-12">Caudal de 150L por segundo</li>
                  <li class="mt-12">Alumbramiento por surgente natural</li>
                  <li class="mt-12"> Agua de mineralización débil.</li>
                  <li class="mt-12">Bajo contenido en sodio</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <?=wp_get_attachment_image(660, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container text-secondary">
    <div class="row">
      <div class="col-12 text-center">
        <div class="row">
          <div class="offset-2 col-8">
            <div class="row">
              <div class="col-12">
                <div class="text-uppercase">
                  descubre nuestro
                </div>
                <div class="h2 mt-8">
                  Entorno
                </div>
                <div class="mt-40">
                  Nuestros manantiales Fuente Primavera y Fuencisla se encuentran entre dos parques naturales del interior 
                  de la provincia de Valencia: el Parque Natural de Las Hoces del Cabriel y el Parque Natural Geológico de Chera-Sot de Chera. 
                  Es por ello que disponemos de la certificación de Producto Parque Natural. 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mt-80">
        <div class="row">
          <div class="offset-1 col-10">
            <div class="row">
              <div class="col-6">
                <?=wp_get_attachment_image(661, "full", "", array( 'class' => 'w-100' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
              </div>
              <div class="col-6">
                <div class="row h-100 flex-column  justify-content-between">
                  <div class="offset-1 col-10 pt-24">
                    Nuestro manantial Font Natura está situado en la Sierra de Loja, 
                    un enclave natural caracterizado por su paisaje agreste y escarpado, 
                    lleno de magia y belleza salvajes. 
                  </div>
                  <div class="col-12">
                    <?=wp_get_attachment_image(662, "full", "", array( 'class' => 'w-100' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
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