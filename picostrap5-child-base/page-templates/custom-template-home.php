<?php
/* Template Name: Page Home */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();

?>

<section>
  <div class="container-fluid g-0 position-relative">
      <div class="row g-0">
          <div class="col-12">
            <?php
              get_template_part( 'template-parts/home/seccion', 'slider_cabecera', $acf_fields);
            ?>
          </div>
      </div>
  </div>
</section>

<section>
  <div class="container position-relative py-96">
      <div class="row">
        <?php
          get_template_part( 'template-parts/home/seccion', 'slider_productos', $acf_fields['slider_productos']);
        ?>
      </div>
  </div>
</section>

<section>
  <div class="container-fluid g-0 position-relative">
    <div class="row g-0">
      <?php
        get_template_part( 'template-parts/home/seccion', 'slider_promocional', $acf_fields['slider_promocional']);
      ?>
    </div>
  </div>
</section>

<section>
  <div class="container position-relative py-96">
      <div class="row">
        <?php
          get_template_part( 'template-parts/home/seccion', 'grid_compromiso', $acf_fields['grid_compromiso']);
        ?>
      </div>
  </div>
</section>

<section class="bg-secondary-brighter">
  <div class="container position-relative py-96">
    <div class="row">
      <div class="col-12 text-center text-secondary">
        <div class="h5 text-uppercase">SAN BENEDETTO</div>
        <div class="h2 fw-bold">Noticias</div>
      </div>
      <div class="col-12 mt-64">
          <div class="swiper swiper-home-noticias">
            <div class="swiper-wrapper">
              <div class="swiper-slide text-center text-secondary">
                <?=wp_get_attachment_image(27, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                <div class="text-start mt-16 text-uppercase">Agua Mineral San Benedetto en Atiende de Telfy TV</div>
                <div class="text-start mt-2">
                  Hace unos días, la televisión local de Requena Telfy TV entrevistó a nuestro Director de...
                </div>
              </div>
              <div class="swiper-slide text-center text-secondary">
                <?=wp_get_attachment_image(27, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                <div class="text-start mt-16 text-uppercase">Agua Mineral San Benedetto celebra el Día del Árbol...</div>
                <div class="text-start mt-2">
                  Agua Mineral San Benedetto (AMSB) organizó por cuarto año consecutivo una plantación...
                </div>
              </div>
              <div class="swiper-slide text-center text-secondary">
                <?=wp_get_attachment_image(27, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                <div class="text-start mt-16 text-uppercase">Agua Mineral San Benedetto colabora con Aldeas...</div>
                <div class="text-start mt-2">
                  Agua Mineral San Benedetto (AMSB) y Aldeas Infantiles SOS han firmado un convenio de...
                </div>
              </div>
              <div class="swiper-slide text-center text-secondary">
                <?=wp_get_attachment_image(27, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                <div class="text-start mt-16 text-uppercase">Agua Mineral San Benedetto apuesta por su gama...</div>
                <div class="text-start mt-2">
                  La nueva imagen de ‘Essenzia’ pone el acento en el origen y la naturalidad de sus productos...
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-12 text-center">
        <div class="btn btn-outline-secondary text-uppercase mt-64">
          ver todas
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container py-56">
    <div class="row">
      <div class="col-12 position-relative">
        <div class="swiper swiper-prefooter-marcas">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide">
              <?=wp_get_attachment_image(34, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
            </div>
            <div class="swiper-slide">
              <?=wp_get_attachment_image(35, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
            </div>
            <div class="swiper-slide">
              <?=wp_get_attachment_image(36, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
            </div>
            <div class="swiper-slide">
              <?=wp_get_attachment_image(37, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
            </div>
            <div class="swiper-slide">
              <?=wp_get_attachment_image(38, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
            </div>
            <div class="swiper-slide">
              <?=wp_get_attachment_image(39, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 g-0 d-flex position-absolute top-50 zi-99 transform-translate-y justify-content-between">
            <div class="mx-12 c-pointer" onclick=swiper_prefooter_marcas.slidePrev()>
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="32" viewBox="0 0 17 32" fill="none">
                <path d="M16.6388 0.266225C16.4695 0.0973631 16.2393 0.00177592 15.9988 0.00040414C15.8795 -0.000700891 15.7612 0.0223047 15.6511 0.0680134C15.5411 0.113722 15.4416 0.18117 15.3588 0.266225L0.26769 15.1902C0.182936 15.273 0.115642 15.3715 0.0697101 15.4801C0.0237785 15.5888 0.00012532 15.7054 0.00012531 15.8231C0.000125299 15.9409 0.0237784 16.0575 0.06971 16.1661C0.115642 16.2748 0.182936 16.3733 0.26769 16.4561L15.3588 31.3832C15.4418 31.4709 15.5418 31.5413 15.6528 31.59C15.7638 31.6387 15.8836 31.6649 16.0051 31.6669C16.1265 31.6689 16.2472 31.6467 16.3598 31.6016C16.4724 31.5566 16.5746 31.4896 16.6605 31.4047C16.7464 31.3197 16.8142 31.2186 16.8597 31.1072C16.9053 30.9959 16.9277 30.8766 16.9257 30.7565C16.9236 30.6364 16.8972 30.5179 16.8479 30.4081C16.7986 30.2983 16.7275 30.1995 16.6388 30.1174L2.18768 15.8231L16.6388 1.53204C16.7232 1.44911 16.7902 1.3505 16.8358 1.24188C16.8815 1.13326 16.9051 1.01678 16.9051 0.899135C16.9051 0.781493 16.8815 0.665014 16.8358 0.556395C16.7902 0.447776 16.7232 0.349161 16.6388 0.266225V0.266225Z" fill="#002D72"/>
              </svg>
            </div>
            <div class="mx-12 c-pointer" onclick=swiper_prefooter_marcas.slideNext()>
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="32" viewBox="0 0 17 32" fill="none">
                <path d="M0.286946 31.4008C0.456308 31.5696 0.686448 31.6652 0.926944 31.6666C1.0463 31.6677 1.16463 31.6447 1.27468 31.599C1.38473 31.5533 1.48418 31.4858 1.56694 31.4008L16.6581 16.4768C16.7428 16.394 16.8101 16.2955 16.8561 16.1868C16.902 16.0782 16.9257 15.9616 16.9257 15.8438C16.9257 15.7261 16.902 15.6095 16.8561 15.5009C16.8101 15.3922 16.7428 15.2937 16.6581 15.2109L1.56694 0.283768C1.48396 0.196045 1.38399 0.125728 1.27297 0.0769989C1.16194 0.0282703 1.04214 0.00212688 0.920694 0.000124454C0.799245 -0.00187797 0.678629 0.0203016 0.566026 0.0653431C0.453423 0.110385 0.351132 0.177367 0.265243 0.262306C0.179353 0.347244 0.111621 0.448401 0.0660747 0.559757C0.0205288 0.671113 -0.001899 0.790392 0.000125849 0.910496C0.0021507 1.0306 0.0285869 1.14907 0.0778612 1.25887C0.127136 1.36866 0.198241 1.46753 0.286946 1.54959L14.7381 15.8438L0.286946 30.135C0.202578 30.2179 0.135624 30.3165 0.0899357 30.4251C0.0442477 30.5337 0.020727 30.6502 0.020727 30.7679C0.020727 30.8855 0.0442477 31.002 0.0899357 31.1106C0.135624 31.2192 0.202578 31.3178 0.286946 31.4008V31.4008Z" fill="#002D72"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
get_footer();
