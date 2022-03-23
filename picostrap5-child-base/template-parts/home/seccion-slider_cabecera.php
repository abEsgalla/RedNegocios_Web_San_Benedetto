<?php
$fields = wp_parse_args( $args );
?>

<!-- Slider main container -->
<div class="swiper swiper-home">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <?php
    if($fields['slider_cabecera'] && $fields['slider_cabecera']['slides']):
      foreach ($fields['slider_cabecera']['slides'] as $slide):
        if($slide['fondo']):
          ?>
          <div class="swiper-slide <?=($slide['color'] == 'text-white') ? 'slide-dark' : 'slide-light'; ?>">
            <div class="position-relative">
              <?=wp_get_attachment_image($slide['fondo_mobile'], "full", "", array( 'class' => 'd-inline d-lg-none' , 'alt' => '' , 'title' => '') ); ?>
              <?=wp_get_attachment_image($slide['fondo'], "full", "", array( 'class' => 'd-none d-lg-inline' , 'alt' => '' , 'title' => '') ); ?>
            </div>
            <?
            endif;
            if($slide['logo'] || $slide['texto_superior'] || $slide['texto_principal'] 
            || $slide['texto_cta'] || $slide['link_cta']):
            ?>
            <div class="d-flex align-items-center justify-content-center container container-slider zi-99 top-50 position-absolute transform-translate-y">
              <div class="row w-100">
                <div class="col-12">
                  <div class="row text-start text-sm-center <?=$slide['color']?>">
                    <?
                    if($slide['logo']):
                      ?>
                        <div class="d-none d-md-block col-12 mb-48">
                          <?=wp_get_attachment_image($slide['logo'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                        </div>
                      <?
                    endif;
                    if($slide['texto_superior']):
                      ?>
                        <div class="col-7 col-sm-12 fs-18 lh-24 text-uppercase mb-16"><?=$slide['texto_superior']?></div>
                      <?
                    endif;
                    if($slide['texto_principal']):
                      ?>
                        <div class="col-12 fs-64 lh-64 fw-bold"><?=$slide['texto_principal']?></div>
                      <?
                    endif;
                    if($slide['descripcion']):
                      ?>
                        <div class="d-none d-sm-block offset-1 col-10 mt-20 mt-xxl-32">
                          <div class="w-descripcion">
                            <?=$slide['descripcion']?>
                          </div>
                        </div>
                      <?
                    endif;
                    if($slide['texto_cta']):
                      ?>
                        <div class="col-12 mt-20 mt-xxl-36">
                          <div class="btn btn-primary text-uppercase text-white rounded-0 fs-13">
                            <?=$slide['texto_cta']?>
                          </div>
                        </div>
                      <?
                    endif;
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?
        endif;
      endforeach;
    endif;
    ?>
  </div>
  <!-- If we need pagination -->
  <div class="row">
    <div class="col-12 col-md-12 offset-md-0 d-flex justify-content-start justify-content-md-center align-items-center swiper-pagination swiper-pagination-home position-absolute bt-40"></div>
  </div>

  <div class="container">
    <div class="row position-relative">
      <div class="zi-99 offset-8 col-4 d-none d-xxl-flex justify-content-end align-items-center position-absolute bt-30">
        <div class="mx-12 c-pointer arrow-prev opacity-50" onclick=swiper_home.slidePrev()>
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="32" viewBox="0 0 17 32" fill="none">
            <path d="M16.6388 0.266225C16.4695 0.0973631 16.2393 0.00177592 15.9988 0.00040414C15.8795 -0.000700891 15.7612 0.0223047 15.6511 0.0680134C15.5411 0.113722 15.4416 0.18117 15.3588 0.266225L0.26769 15.1902C0.182936 15.273 0.115642 15.3715 0.0697101 15.4801C0.0237785 15.5888 0.00012532 15.7054 0.00012531 15.8231C0.000125299 15.9409 0.0237784 16.0575 0.06971 16.1661C0.115642 16.2748 0.182936 16.3733 0.26769 16.4561L15.3588 31.3832C15.4418 31.4709 15.5418 31.5413 15.6528 31.59C15.7638 31.6387 15.8836 31.6649 16.0051 31.6669C16.1265 31.6689 16.2472 31.6467 16.3598 31.6016C16.4724 31.5566 16.5746 31.4896 16.6605 31.4047C16.7464 31.3197 16.8142 31.2186 16.8597 31.1072C16.9053 30.9959 16.9277 30.8766 16.9257 30.7565C16.9236 30.6364 16.8972 30.5179 16.8479 30.4081C16.7986 30.2983 16.7275 30.1995 16.6388 30.1174L2.18768 15.8231L16.6388 1.53204C16.7232 1.44911 16.7902 1.3505 16.8358 1.24188C16.8815 1.13326 16.9051 1.01678 16.9051 0.899135C16.9051 0.781493 16.8815 0.665014 16.8358 0.556395C16.7902 0.447776 16.7232 0.349161 16.6388 0.266225V0.266225Z" fill="white"/>
          </svg>
        </div>
        <div class="mx-12 c-pointer arrow-next" onclick=swiper_home.slideNext()>
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="32" viewBox="0 0 17 32" fill="none">
            <path d="M0.286946 31.4008C0.456308 31.5696 0.686448 31.6652 0.926944 31.6666C1.0463 31.6677 1.16463 31.6447 1.27468 31.599C1.38473 31.5533 1.48418 31.4858 1.56694 31.4008L16.6581 16.4768C16.7428 16.394 16.8101 16.2955 16.8561 16.1868C16.902 16.0782 16.9257 15.9616 16.9257 15.8438C16.9257 15.7261 16.902 15.6095 16.8561 15.5009C16.8101 15.3922 16.7428 15.2937 16.6581 15.2109L1.56694 0.283768C1.48396 0.196045 1.38399 0.125728 1.27297 0.0769989C1.16194 0.0282703 1.04214 0.00212688 0.920694 0.000124454C0.799245 -0.00187797 0.678629 0.0203016 0.566026 0.0653431C0.453423 0.110385 0.351132 0.177367 0.265243 0.262306C0.179353 0.347244 0.111621 0.448401 0.0660747 0.559757C0.0205288 0.671113 -0.001899 0.790392 0.000125849 0.910496C0.0021507 1.0306 0.0285869 1.14907 0.0778612 1.25887C0.127136 1.36866 0.198241 1.46753 0.286946 1.54959L14.7381 15.8438L0.286946 30.135C0.202578 30.2179 0.135624 30.3165 0.0899357 30.4251C0.0442477 30.5337 0.020727 30.6502 0.020727 30.7679C0.020727 30.8855 0.0442477 31.002 0.0899357 31.1106C0.135624 31.2192 0.202578 31.3178 0.286946 31.4008V31.4008Z" fill="white"/>
          </svg>
        </div>
      </div>
    </div>
  </div>

</div>