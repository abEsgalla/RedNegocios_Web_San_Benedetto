<?php
/* Template Name: Page Producto Workbench*/

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

<section>
  <div class="container-fluid position-relative zi-9 <?/*bg-black*/?> ">
    <div class="zi-75 background-position-left-mobile bg-custom-image <?/*opacity-60*/?> w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url($acf_fields['fondo_cabecera'], "full")?>')">
    </div>
    <div class="zi-50 position-absolute position-absolute w-50vw h-100 top-0 end-0 bg-secondary">
    </div>
    <div class="zi-50 overflow-visible svg-under-sellos position-absolute top-50 start-50 translate-middle zi-99 mw-50vw d-none d-lg-block">
      <svg class="rotate tool-rotate" 
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" 
        id="Capa_1" x="0px" y="0px" width="707px" height="721.5px" 
        viewBox="0 0 707 721.5" style="enable-background:new 0 0 707 721.5;" xml:space="preserve">
        <path style="fill:#FFFFFF;" d="M353.5,713.5c-47.7217,0-94.0166-9.3467-137.5986-27.7803  c-42.0947-17.8047-79.8994-43.293-112.3633-75.7578C71.0732,577.498,45.585,539.6934,27.7803,497.5986  C9.3467,454.0166,0,407.7216,0,360s9.3467-94.0166,27.7803-137.5981c17.8047-42.0947,43.293-79.8994,75.7578-112.3643  c32.4639-32.4644,70.2686-57.9526,112.3633-75.7573C259.4834,15.8467,305.7783,6.5,353.5,6.5s94.0166,9.3467,137.5986,27.7803  c42.0947,17.8047,79.8994,43.293,112.3633,75.7573c32.4648,32.4649,57.9531,70.2695,75.7578,112.3643  C697.6533,265.9834,707,312.2783,707,360s-9.3467,94.0166-27.7803,137.5986c-17.8047,42.0948-43.293,79.8994-75.7578,112.3633  c-32.4639,32.4648-70.2686,57.9531-112.3633,75.7578C447.5166,704.1533,401.2217,713.5,353.5,713.5z M353.5,8.5  c-93.8896,0-182.1582,36.5625-248.5479,102.9521S2,266.1108,2,360c0,93.8896,36.5625,182.1582,102.9521,248.5479  S259.6104,711.5,353.5,711.5s182.1582-36.5625,248.5479-102.9521S705,453.8896,705,360  c0-93.8892-36.5625-182.1582-102.9521-248.5479S447.3896,8.5,353.5,8.5z"/>
        <circle dot-position="1" class="dot dot-1 active" class="active" style="fill:#FFFFFF;" cx="353.5" cy="7.5" r="7.5"/>
        <circle dot-position="2" class="dot dot-2" style="fill:#FFFFFF;" cx="655.9595" cy="183.841" r="7.5"/>
        <circle dot-position="3" class="dot dot-3" style="fill:#FFFFFF;" cx="655.9595" cy="537.2389" r="7.5"/>
        <circle dot-position="4" class="dot dot-4" style="fill:#FFFFFF;" cx="353.5" cy="712.5" r="7.5"/>
        <circle dot-position="5" class="dot dot-5" style="fill:#FFFFFF;" cx="51.0405" cy="537.2389" r="7.5"/>
        <circle dot-position="6" class="dot dot-6" style="fill:#FFFFFF;" cx="51.0406" cy="182.7143" r="7.5"/>
      </svg>
    </div>
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
    <div class="zi-75 container position-relative py-160 pb-md-261 pt-md-228 py-lg-261">
      <div class="row">
        <div class="col-12 offset-xl-4 col-xl-4 text-center">
          <div class="row text-white">
            <div class="col-12 text-uppercase">
              <?=_e('ecolosofía')?>
            </div>
            <h1 class="col-12 mt-8 mt-xl-16 h1 text-green mb-70">
              <?=_e('Producto')?>
            </h1>
            <div class="col-12 position-relative">
              <?=wp_get_attachment_image(1181, "full", "", array( 'class' => 'sello opacity-75' , 'alt' => '' , 'title' => '') ); ?>
              <?=wp_get_attachment_image(1606, "full", "", array( 'class' => 'sello-rotacion opacity-75 top-50 start-50 position-absolute ' , 'alt' => '' , 'title' => '') ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="custom-body">
  <section class="mt-56 my-sm-96 mb-md-0 mt-md-103 mt-xl-170 gx-sm-12 gx-4">
    <div class="container text-secondary">
      <div class="row text-center text-lg-start">
        <div class="col-12 offset-xl-1 col-xl-10 h2 fs-32 fs-md-64 mb-0 mb-sm-64 mb-md-70 mb-lg-64 fs-xl-64">
          <?=$acf_fields['titulo_grid_sup_izq']?>
        </div>
        <div class="col-12 position-relative">
          <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
          class="d-none d-xxxl-block position-absolute top-0 end-0 w-auto translate-dots-col-after">
          <div class="row position-relative zi-99 overflow-hidden">
            <div class="order-0 order-sm-1 order-md-0 col-12 col-xl-6" data-aos="fade-up">
              <div class="row">
                <div class="col-12 offset-xl-2 col-xl-8 fs-14 fs-sm-17 mb-md-108 mb-lg-80 mt-24 mb-64 mt-sm-0">
                  <?=$acf_fields['texto_grid_sup_izq']?>
                </div>
              </div>
            </div>
            <div style="background: url(<?=wp_get_attachment_image_url($acf_fields['imagen_grid_sup_der'], "full")?>)" 
            class="order-1 order-sm-0 order-md-1 py-xl-0 py-160 py-sm-356 py-lg-200 col-12 col-lg-6 bg-custom-image img-version-mobile">
            </div>
            <div style="" class="img-version-mobile order-2 order-sm-2 col-12 col-lg-6 py-xl-0 pt-80 pb-60 py-sm-138 py-sm-200 bg-secondary text-white">
              <div class="row position-relative h-100">
                <div class="container">
                  <div class="row d-flex h-100 align-items-center">
                    <div class="offset-xl-2 col-xl-8 col-12 h2 fs-32 fs-md-64 text-xl-start text-center">
                      <?=$acf_fields['titulo_grid_inf_izq']?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="order-3 order-sm-3 col-12 col-xl-6">
              <div class="row overflow-hidden">
                <div class="pt-48 pt-sm-64 py-sm-80 py-md-80 py-lg-185 pb-sm-0 pb-xl-48 col-12 offset-xl-2 col-xl-8 fs-14 fs-sm-17" data-aos="fade-up">
                  <?=$acf_fields['texto_grid_inf_der']?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="my-64 my-sm-96 my-md-0 mt-xl-133 mb-xl-176 gx-sm-12 gx-4">
    <div class="container">
      <div class="row position-relative">
        <div class="col-12 bg-custom-image py-108 py-sm-290 zi-99 img-version-mobile"
          style="background:url('<?=wp_get_attachment_image_url($acf_fields['imagen_pre_concienciacion'], "full")?>')">
        </div>
          <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
          class="d-none d-xxxl-block position-absolute bottom-0 start-0 w-auto translate-dots-col-before">
          <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
          class="d-none d-xxxl-block position-absolute bottom-0 end-0 w-auto translate-dots-col-bottom-after">
      </div>
    </div>
  </section>

  <section class="my-sm-96 mt-0 mb-40 mt-md-149 mb-xl-160 gx-sm-12 gx-4">
    <div class="container overflow-hidden">
      <div class="row text-center text-secondary" data-aos="fade-up">
        <div class="col-12 h2 fs-32 fs-md-64">
          <?=$acf_fields['titulo_concienciacion']?>
        </div>
        <div class="col-12 offset-xl-2 col-xl-8 mt-24 mt-sm-70 mt-lg-40 fs-14 fs-sm-17">
          <?=$acf_fields['texto_concienciacion']?>
        </div>
        <div class="col-12 offset-sm-2 col-sm-8 offset-sm-0 mt-40 mt-xl-133">
          <div class="d-flex flex-wrap flex-sm-nowrap w-100 justify-content-evenly align-items-center">
            <div class="col-4 py-3 px-12 my-sm-0">
              <?=wp_get_attachment_image($acf_fields['imagen_concienciacion_1'], "full", "", array( 'class' => 'my-12 my-sm-0' , 'alt' => '' , 'title' => '') ); ?>
            </div>
            <div class="col-4 py-3 px-12 my-sm-0">
              <?=wp_get_attachment_image($acf_fields['imagen_concienciacion_2'], "full", "", array( 'class' => 'my-12 my-sm-0' , 'alt' => '' , 'title' => '') ); ?>
            </div>
            <div class="col-4 py-3 px-12 my-sm-0">
              <?=wp_get_attachment_image($acf_fields['imagen_concienciacion_3'], "full", "", array( 'class' => 'my-12 my-sm-0' , 'alt' => '' , 'title' => '') ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

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

<?php 
if(!$args['page_id']):
  get_footer();
endif;