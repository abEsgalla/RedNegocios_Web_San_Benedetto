<?php
$fields = wp_parse_args( $args );

$slider_html="";
$categories_slider_html=array();

foreach ($fields['slides'] as $slide):
    $category_name=get_the_title($slide['producto']);
    if (!in_array($category_name, $categories_slider_html)):
        array_push($categories_slider_html,$category_name);
    endif;
    $slider_html.="
    <div class='swiper-slide text-secondary h-auto'>
        <div class='position-relative'>"
            .wp_get_attachment_image($slide['fondo'], 'full', '', array( 'class' => 'd-none d-lg-inline' , 'alt' => '' , 'title' => ''))
            .wp_get_attachment_image($slide['fondo_mobile'], 'full', '', array( 'class' => 'd-inline d-lg-none' , 'alt' => '' , 'title' => '')).
        "</div>
        <div class='container-fluid zi-99 top-lg-50 top-25 position-absolute translate-middle-y'>
            <div class='container'>
                <div class='row'>
                    <div class='col-12 col-lg-6'>
                        <div class='row text-center text-lg-start'>
                        <div class='col-12 text-uppercase fs-18'>".get_the_title($slide['producto'])."</div>
                        <div class='col-12 h4 mt-8'>".$slide['texto_principal']."</div>
                        <div class='col-12 mt-16 d-xxl-block d-none'>
                            ".$slide['descripcion']."
                        </div>
                        <div class='col-12 mt-36'>
                            <a href='".get_permalink(get_field('caracteristicas_producto',$slide['producto'])['relacion_page_landing'])."' class='btn btn-outline-secondary text-uppercase rounded-0'>
                            ".$slide['texto_cta']."
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
endforeach;

?>


<div class="col-12">
    <!-- Slider main container -->
    <div class="swiper swiper-home-promocional">
        <!-- Additional required wrapper -->
        <div class='container-fluid zi-99 top-0 position-absolute mt-80 mt-lg-40 mt-xl-80'>
            <div class='container'>
                <div class='row'>
                    <div class="col-12">
                        <div class='row'>
                            <div class="col-12 col-xxl-8">
                                <div class='row text-start text-uppercase text-secondary'>
                                    <?php
                                    foreach($categories_slider_html as $key => $categories_slider_html):
                                    ?>
                                    <div onclick=swiper_home_promocional.slideTo(<?=$key?>) class="col c-pointer fs-13 opacity-50 <?=($key==0)?'opacity-100':'';?>">
                                        <?=$categories_slider_html?>
                                    </div>
                                    <?
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?=$slider_html?>
        </div>

        <div class="container">
            <div class="row">
                <div class="zi-99 col-12 d-flex justify-content-lg-start justify-content-end align-items-center position-absolute bt-40">
                    <div class="d-lg-flex">
                        <div class="arrow-prev mx-12 c-pointer opacity-50" onclick=swiper_home_promocional.slidePrev()>
                            <svg class="d-lg-inline d-none" xmlns="http://www.w3.org/2000/svg" width="17" height="32" viewBox="0 0 17 32" fill="none">
                                <path d="M16.6388 0.266225C16.4695 0.0973631 16.2393 0.00177592 15.9988 0.00040414C15.8795 -0.000700891 15.7612 0.0223047 15.6511 0.0680134C15.5411 0.113722 15.4416 0.18117 15.3588 0.266225L0.26769 15.1902C0.182936 15.273 0.115642 15.3715 0.0697101 15.4801C0.0237785 15.5888 0.00012532 15.7054 0.00012531 15.8231C0.000125299 15.9409 0.0237784 16.0575 0.06971 16.1661C0.115642 16.2748 0.182936 16.3733 0.26769 16.4561L15.3588 31.3832C15.4418 31.4709 15.5418 31.5413 15.6528 31.59C15.7638 31.6387 15.8836 31.6649 16.0051 31.6669C16.1265 31.6689 16.2472 31.6467 16.3598 31.6016C16.4724 31.5566 16.5746 31.4896 16.6605 31.4047C16.7464 31.3197 16.8142 31.2186 16.8597 31.1072C16.9053 30.9959 16.9277 30.8766 16.9257 30.7565C16.9236 30.6364 16.8972 30.5179 16.8479 30.4081C16.7986 30.2983 16.7275 30.1995 16.6388 30.1174L2.18768 15.8231L16.6388 1.53204C16.7232 1.44911 16.7902 1.3505 16.8358 1.24188C16.8815 1.13326 16.9051 1.01678 16.9051 0.899135C16.9051 0.781493 16.8815 0.665014 16.8358 0.556395C16.7902 0.447776 16.7232 0.349161 16.6388 0.266225V0.266225Z" fill="#002D72"/>
                            </svg>
                            <svg class="d-lg-none d-inline" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 33 18" fill="none">
                                <path d="M32.2018 17.1867C32.3725 17.0173 32.4692 16.7872 32.4706 16.5467C32.4717 16.4273 32.4484 16.309 32.4022 16.199C32.356 16.0889 32.2878 15.9895 32.2018 15.9067L17.1106 0.815489C17.0269 0.730734 16.9273 0.663439 16.8174 0.617508C16.7075 0.571575 16.5896 0.547922 16.4706 0.547922C16.3515 0.547922 16.2336 0.571575 16.1237 0.617508C16.0139 0.663439 15.9142 0.730734 15.8306 0.815489L0.736166 15.9067C0.647461 15.9897 0.576355 16.0896 0.52708 16.2007C0.477806 16.3117 0.45137 16.4315 0.449345 16.5529C0.44732 16.6744 0.469748 16.795 0.515294 16.9076C0.56084 17.0202 0.628573 17.1225 0.714463 17.2084C0.800352 17.2943 0.902643 17.362 1.01525 17.4076C1.12785 17.4531 1.24847 17.4755 1.36992 17.4735C1.49136 17.4715 1.61117 17.445 1.72219 17.3958C1.83321 17.3465 1.93319 17.2754 2.01617 17.1867L16.4706 2.73549L30.9218 17.1867C31.0056 17.2711 31.1053 17.338 31.2152 17.3837C31.325 17.4294 31.4428 17.4529 31.5618 17.4529C31.6807 17.4529 31.7985 17.4294 31.9083 17.3837C32.0182 17.338 32.1179 17.2711 32.2018 17.1867Z" fill="#002D72"/>
                            </svg>
                        </div>
                        <div class="arrow-next mx-12 c-pointer" onclick=swiper_home_promocional.slideNext()>
                            <svg class="d-lg-inline d-none" xmlns="http://www.w3.org/2000/svg" width="17" height="32" viewBox="0 0 17 32" fill="none">
                                <path d="M0.286946 31.4008C0.456308 31.5696 0.686448 31.6652 0.926944 31.6666C1.0463 31.6677 1.16463 31.6447 1.27468 31.599C1.38473 31.5533 1.48418 31.4858 1.56694 31.4008L16.6581 16.4768C16.7428 16.394 16.8101 16.2955 16.8561 16.1868C16.902 16.0782 16.9257 15.9616 16.9257 15.8438C16.9257 15.7261 16.902 15.6095 16.8561 15.5009C16.8101 15.3922 16.7428 15.2937 16.6581 15.2109L1.56694 0.283768C1.48396 0.196045 1.38399 0.125728 1.27297 0.0769989C1.16194 0.0282703 1.04214 0.00212688 0.920694 0.000124454C0.799245 -0.00187797 0.678629 0.0203016 0.566026 0.0653431C0.453423 0.110385 0.351132 0.177367 0.265243 0.262306C0.179353 0.347244 0.111621 0.448401 0.0660747 0.559757C0.0205288 0.671113 -0.001899 0.790392 0.000125849 0.910496C0.0021507 1.0306 0.0285869 1.14907 0.0778612 1.25887C0.127136 1.36866 0.198241 1.46753 0.286946 1.54959L14.7381 15.8438L0.286946 30.135C0.202578 30.2179 0.135624 30.3165 0.0899357 30.4251C0.0442477 30.5337 0.020727 30.6502 0.020727 30.7679C0.020727 30.8855 0.0442477 31.002 0.0899357 31.1106C0.135624 31.2192 0.202578 31.3178 0.286946 31.4008V31.4008Z" fill="#002D72"/>
                            </svg>
                            <svg class="d-lg-none d-inline" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 33 18" fill="none">
                                <path d="M0.720112 0.834797C0.549358 1.00416 0.452698 1.2343 0.451313 1.4748C0.450195 1.59415 0.473457 1.71248 0.519678 1.82253C0.565899 1.93258 0.634104 2.03203 0.720112 2.1148L15.8113 17.206C15.895 17.2908 15.9946 17.358 16.1045 17.404C16.2143 17.4499 16.3322 17.4736 16.4513 17.4736C16.5704 17.4736 16.6883 17.4499 16.7982 17.404C16.908 17.358 17.0077 17.2908 17.0913 17.206L32.1857 2.1148C32.2744 2.03182 32.3455 1.93184 32.3948 1.82082C32.4441 1.7098 32.4705 1.59 32.4725 1.46855C32.4746 1.3471 32.4521 1.22648 32.4066 1.11388C32.361 1.00128 32.2933 0.898985 32.2074 0.813095C32.1215 0.727206 32.0192 0.659473 31.9066 0.613926C31.794 0.56838 31.6734 0.545953 31.552 0.547977C31.4305 0.550002 31.3107 0.576438 31.1997 0.625713C31.0887 0.674987 30.9887 0.746093 30.9057 0.834798L16.4513 15.286L2.00011 0.834797C1.91625 0.750428 1.81653 0.683474 1.70669 0.637786C1.59686 0.592098 1.47907 0.568577 1.36011 0.568577C1.24115 0.568577 1.12337 0.592098 1.01353 0.637786C0.903696 0.683474 0.803976 0.750428 0.720112 0.834797Z" fill="#002D72"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>