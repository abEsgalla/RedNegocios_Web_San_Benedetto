<?php
/* Template Name: Page Buscamos Talento */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="position-relative">
  <div class="position-relative bg-black">
    <?=wp_get_attachment_image(674, "full", "", array( 'class' => 'opacity-50' , 'alt' => '' , 'title' => '') ); ?>
  </div>
  <div class="container-fluid zi-99 top-50 position-absolute transform-translate-y">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="row text-white">
            <div class="col-12 fs-18">
              GRUPO SAN BENEDETTO
            </div>
            <h1 class="col-12 h2">
              Buscamos <br> talento
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-56 bg-secondary text-white">
  <div class="container">
    <div class="row py-96">
      <div class="col-6">
        
        <div class="row">
          <div class="col-8">
            <form class="text-white rm-bootstrap-form-style needs-validation" novalidate>
              <div class="mt-3">
                <label for="inputNombre" class="form-label fs-12 mb-1">Nombre y apellidos *</label>
                <input type="text" placeholder="Ej. Jesús Carrillo Laso" 
                class="form-control bg-transparent border-0 border-bottom text-white pt-0 ps-0" 
                id="inputNombre" required>
              </div>
              <div class="mt-3">
                <label for="inputNombre" class="form-label fs-12 mb-1">E-mail *</label>
                <input type="text" placeholder="Ej. name@name.com" 
                class="form-control bg-transparent border-0 border-bottom text-white pt-0 ps-0" 
                id="inputNombre" required>
              </div>
              <div class="mt-3">
                <label for="formFileSm" class="form-label fs-12 mb-1">Adjunta tu curriculum *</label>
                <input class="form-control bg-transparent border-0 border-bottom text-white fs-14" 
                id="formFileSm" type="file" required />
              </div>
              <div class="my-28 form-check">
                <input type="checkbox" class="form-check-input rounded-0 bg-transparent" 
                id="exampleCheck1" required>
                <label class="form-check-label fs-12 ps-16" for="exampleCheck1">
                    He leído y acepto la política de privacidad y consiento el tratamiento de mis datos personales 
                    con la finalidad descrita *
                </label>
              </div>
              <div class="my-28 form-check">
                <input type="checkbox" class="form-check-input rounded-0 bg-transparent" 
                id="exampleCheck1" required>
                <label class="form-check-label fs-12 ps-16" for="exampleCheck1">
                  Doy mi consentimiento a la comunicación de datos a Parque La Presa S.A., 
                  con la finalidad de evaluar mi solicitud como candidato a lo largo de los procesos de selección actuales o futuros
                </label>
              </div>
              <div class="my-28 border border-1 border-primary p-12">
                <div class="row fs-12">
                  <div class="col-4 fw-500 text-center">
                    Responsable
                  </div>
                  <div class="col-8">
                    Agua Mineral San Benedetto S.A.U, con domicilio social en San Antonio de Requena (Valencia) 
                    en el camino del pinarejo s/n, 46390.
                  </div>
                </div>
              </div>
              <div class="text-end">
                <button type="submit" 
                class="btn border-2 fw-500 btn-primary text-white text-uppercase fs-14 rounded-0 px-40">
                  ENVIAR
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
      <div class="col-6">
        <?=wp_get_attachment_image(791, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
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