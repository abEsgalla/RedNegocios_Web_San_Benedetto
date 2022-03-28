<?php
/* Template Name: Page Buscamos Talento */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section>
  <div class="container-fluid position-relative zi-9 bg-black pt-120 pb-187 py-md-214 pt-lg-270 pb-lg-242">
    <div class="bg-parallax opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(674, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 text-center text-xl-start col-xl-6">
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
  </div>
</section>

<section class="pb-70 pb-sm-145 pb-xl-128 bg-secondary text-white gx-sm-12 gx-4">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2 offset-xl-0 col-xl-6 order-1 order-xl-0"> 
        <div class="row">
          <div class="col-12 col-xl-8 pt-53 pt-sm-64 pt-xl-102">
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
      <div class="col-12 col-md-8 offset-md-2 offset-xl-0 col-xl-6 bg-custom-image py-155 mt-n155 mt-sm-n80 py-sm-228 py-xl-356 mt-sm-n133 mt-xl-n70" 
        style="background:url('<?=wp_get_attachment_image_url(791, "full")?>')">
      </div>
    </div>
  </div>
</section>

<section class="my-56 gx-sm-12 gx-4">
  <div class="container gx-sm-2 gx-4">
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