<?php
/* Template Name: Page Procesos */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if($args['page_id']):
  $acf_fields = get_fields($args['page_id']);
else:
  $acf_fields = get_fields();
endif;

if(!$args['page_id']):
  get_header();
endif;
?>

<? if(!$args['page_id']): ?>
  <section>
    <div class="container-fluid position-relative zi-9 <?/*bg-black*/?>">

      <div class="zi-75 background-position-left-mobile bg-custom-image <?/*opacity-60*/?> w-100 h-100 position-absolute top-0 start-0" 
          style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')">
      </div>
      <div class="zi-50 position-absolute position-absolute w-100vw h-100 top-0 end-0 bg-secondary">
      </div>

      <svg class="zi-100 overflow-visible position-absolute top-50 start-50 zi-99 mw-50vw d-none d-lg-block static-rotate" 
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" 
        x="0px" y="0px" width="707px" height="721.5px" viewBox="0 0 707 721.5" style="enable-background:new 0 0 707 721.5;" xml:space="preserve">
        <circle class="dot-static active opacity-100" class="active" style="fill:#FFFFFF;" cx="353.5" cy="7.5" r="10"/>
      </svg>

      <svg class="zi-50 overflow-visible svg-under-sellos position-absolute top-50 start-50 zi-99 mw-50vw d-none d-lg-block rotate tool-rotate" 
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" 
        id="Capa_1" x="0px" y="0px" width="707px" height="721.5px" 
        viewBox="0 0 707 721.5" style="enable-background:new 0 0 707 721.5;" xml:space="preserve">
        <path style="fill:#FFFFFF;" d="M353.5,713.5c-47.7217,0-94.0166-9.3467-137.5986-27.7803  c-42.0947-17.8047-79.8994-43.293-112.3633-75.7578C71.0732,577.498,45.585,539.6934,27.7803,497.5986  C9.3467,454.0166,0,407.7216,0,360s9.3467-94.0166,27.7803-137.5981c17.8047-42.0947,43.293-79.8994,75.7578-112.3643  c32.4639-32.4644,70.2686-57.9526,112.3633-75.7573C259.4834,15.8467,305.7783,6.5,353.5,6.5s94.0166,9.3467,137.5986,27.7803  c42.0947,17.8047,79.8994,43.293,112.3633,75.7573c32.4648,32.4649,57.9531,70.2695,75.7578,112.3643  C697.6533,265.9834,707,312.2783,707,360s-9.3467,94.0166-27.7803,137.5986c-17.8047,42.0948-43.293,79.8994-75.7578,112.3633  c-32.4639,32.4648-70.2686,57.9531-112.3633,75.7578C447.5166,704.1533,401.2217,713.5,353.5,713.5z M353.5,8.5  c-93.8896,0-182.1582,36.5625-248.5479,102.9521S2,266.1108,2,360c0,93.8896,36.5625,182.1582,102.9521,248.5479  S259.6104,711.5,353.5,711.5s182.1582-36.5625,248.5479-102.9521S705,453.8896,705,360  c0-93.8892-36.5625-182.1582-102.9521-248.5479S447.3896,8.5,353.5,8.5z"/>
        <circle dot-position="1" class="dot dot-1 active" class="active" style="fill:#FFFFFF;" cx="353.5" cy="7.5" r="7.5"/>
        <circle dot-position="2" class="dot dot-2" style="fill:#FFFFFF;" cx="655.9595" cy="183.841" r="7.5"/>
        <circle dot-position="3" class="dot dot-3" style="fill:#FFFFFF;" cx="655.9595" cy="537.2389" r="7.5"/>
        <circle dot-position="4" class="dot dot-4 d-none" style="fill:#FFFFFF;" cx="353.5" cy="712.5" r="7.5"/>
        <circle dot-position="5" class="dot dot-5" style="fill:#FFFFFF;" cx="51.0405" cy="537.2389" r="7.5"/>
        <circle dot-position="6" class="dot dot-6" style="fill:#FFFFFF;" cx="51.0406" cy="182.7143" r="7.5"/>
      </svg>
      <svg class="position-absolute top-50 start-50 translate-middle-y zi-99 mw-50vw d-none d-lg-block" 
        xmlns="http://www.w3.org/2000/svg" width="559" height="707" viewBox="0 0 559 707" fill="none">
        <g class="text">
          <a dot-position="1" page-name="procesos" page-id="587" class="animation group-one" href="#">
            <text class="text-one" x="330" y="190" fill="white" font-size="32" font-weight="800" font-family="Montserrat, sans-serif">
              Procesos
            </text>
          </a>
          <a dot-position="2" page-name="entorno" page-id="589" class="animation group-two" href="#">
            <text class="text-two" x="330" y="540" fill="white" font-size="32" font-weight="800" font-family="Montserrat, sans-serif">
              Entorno
            </text>
          </a>
        </g>
      </svg>

      <div class="zi-75 container position-relative py-160 py-lg-261">
        <div class="row">
          <div class="col-12 offset-xl-4 col-xl-4 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase">
                <?=_e('ecolosofía')?>
              </div>
              <h1 class="col-12 mt-16 h1 text-green mb-70">
                <?=_e('Procesos')?>
              </h1>
              <div class="col-12 position-relative">
                <?=wp_get_attachment_image(1183, "full", "", array( 'class' => 'sello opacity-75' , 'alt' => '' , 'title' => '') ); ?>
                <?=wp_get_attachment_image(1606, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-50 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
<? endif; ?>

<? if(!$args['page_id']): ?>
<div class="custom-body">
<? endif; ?> 
  <section class="mt-64 mt-lg-185 pb-70 position-relative zi-99 gx-4 gx-sm-12">
    <div class="container text-secondary">
      <div class="row">
        <div class="col-12 mb-64 mb-lg-105">
          <div class="row">
            <div class="col-12 offset-xl-2 col-xl-8 text-center h2 fs-32 fs-md-64">
              <?=$acf_fields['texto_superior']?>
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
                      <?=$acf_fields['titulo_grid_sup_izq']?>
                    </div>
                    <div class="col-12 my-32 fs-14 fs-sm-17">
                      <?=$acf_fields['texto_grid_sup_izq']?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 order-0 order-lg-1 py-200 py-lg-409 position-relative bg-custom-image img-version-mobile" 
            style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_sup_der'], "full")?>')">
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
            style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_grid_inf_izq'], "full")?>')">
            </div>
            <div class="col-12 col-lg-6 d-inline-flex align-items-end">
              <div class="row overflow-hidden">
                <div class="col-12 offset-xl-2 col-xl-8 gx-xl-0" data-aos="fade-up">
                  <div class="row">
                    <div class="col-12 h3 fs-26 fs-md-48 mt-70 mt-lg-0">
                      <?=$acf_fields['titulo_grid_inf_der']?>
                    </div>
                    <div class="col-12 mt-30 fs-14 fs-sm-17">
                      <?=$acf_fields['texto_grid_inf_der']?>
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
          <?=$acf_fields['titulo_grid_renovables']?>
        </div>
        <div class="col-12 offset-sm-2 col-sm-8 offset-lg-0 col-lg-12">
          <div class="row">
            <div class="col-12 col-lg-4 text-center text-lg-start mt-64 mt-lg-90">
              <div class="row">
                <div class="col-12 ratio-1x1">
                  <?=wp_get_attachment_image($acf_fields['img_vertido_cero'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                </div>
                <div class="col-12 mt-48 h4 fs-24 fs-sm-32">
                  <?=$acf_fields['titulo_vertido_cero']?>
                </div>
                <div class="col-12 mt-24 fs-14 fs-sm-17">
                  <?=$acf_fields['texto_vertido_cero']?>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4 text-center text-lg-start mt-64 mt-lg-90">
              <div class="row">
                <div class="col-12 ratio-1x1">
                  <?=wp_get_attachment_image($acf_fields['img_renovables'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                </div>
                <div class="col-12 mt-48 h4 fs-24 fs-sm-32">
                  <?=$acf_fields['titulo_renovables']?> 
                </div>
                <div class="col-12 mt-24 fs-14 fs-sm-17">
                  <?=$acf_fields['texto_renovables']?> 
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4 text-center text-lg-start mt-64 mt-lg-90">
              <div class="row">
                <div class="col-12 ratio-1x1">
                  <?=wp_get_attachment_image($acf_fields['img_residuos'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                </div>
                <div class="col-12 mt-48 h4 fs-24 fs-sm-32">
                  <?=$acf_fields['titulo_residuos']?>  
                </div>
                <div class="col-12 mt-24 fs-14 fs-sm-17">
                  <?=$acf_fields['texto_residuos']?>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<? if(!$args['page_id']): ?>
</div>
<? endif; ?>

<? if(!$args['page_id']): ?>
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
<? endif; ?>

<?php 
if(!$args['page_id']):
  get_footer();
endif;