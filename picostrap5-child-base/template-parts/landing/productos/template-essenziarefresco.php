<?  $acf_fields = get_fields();
    $id_producto=get_the_ID();
?>

<section>
    <div class="container-fluid position-relative zi-99">
        <div class="bg-custom-image bg-c-center w-100 h-100 position-absolute top-0 start-0" 
        style="background:url('<?=wp_get_attachment_image_url($acf_fields['cabecera']['fondo'], "full")?>')"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 text-center">
                    <?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => 'mtn-custom-25 producto-central' , 'alt' => '' , 'title' => '') ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if($acf_fields['secciones']):
    foreach ($acf_fields['secciones'] as $seccion):
        $seccion['id_producto'] = $id_producto;
        //var_dump($seccion['acf_fc_layout']);
        switch ($seccion['acf_fc_layout']):
            case 'slider_imagenes_productos':
            ?>
            <section class="mt-65 mb-64">
                <div class="container-fluid container-fluid-custom position-relative">
                    <div class="row">
                    <div class="col-12">
                        <div class="row text-center text-secondary">
                        <div class="col-12 fs-18 text-uppercase <? if( is_single(489) ) { echo 'fw-bold'; } ?>">
                            <?=$seccion['slider']['texto_superior']?>
                        </div>
                        <div class="col-12 h3 text-secondary-light">
                            <?=$seccion['slider']['texto_principal']?>
                        </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="swiper swiper-landing-productos mt-94">
                        <div class="swiper-wrapper <?=(count($seccion['slider']['slide'])<=7)?'justify-content-xl-center':'';?> <?=(count($seccion['slider']['slide'])<=4)?'justify-content-md-center':'';?>">
                            <?php
                            if ($seccion['slider']):
                            foreach ($seccion['slider']['slide'] as $slide ):
                            ?>
                            <div class="px-8 w-custom-1-9 swiper-slide d-inline-flex flex-column justify-content-center align-items-center h-100">
                                <a class="text-reset text-decoration-none d-flex flex-column w-100 h-100 contenedor-cursor-custom"
                                data-bs-toggle="offcanvas" href="#offcanvasInfoSliderProductos" role="button" 
                                aria-controls="offcanvasInfoSliderProductos" 
                                data-image="<?=wp_get_attachment_image_src($slide['imagen_producto'], 'full')[0]?>" 
                                data-name="<?=ucfirst($slide['nombre_producto'])?>" 
                                data-description="<?=$slide['descripcion_producto']?>">
                                <div style="background-color:<?=get_field('caracteristicas_producto',$GLOBALS['id_producto'])['color_corporativo']?>"
                                class='w-100 ratio ratio-5x7 d-flex justify-content-center align-items-center container-scale'>
                                    <div class="bg-custom-post" style="background:url('<?=wp_get_attachment_image_url($slide['imagen_producto'], "full", "")?>')">
                                    </div>
                                </div>
                                <div class="name-slider-product w-100 text-start text-uppercase mt-12 text-secondary fw-500 fs-13">
                                    <?=$slide['nombre_producto']?>
                                </div>
                                </a>
                            </div>
                            <?
                            endforeach;
                            endif;
                            ?>
                        </div>
                        <div class="container mt-55">
                            <div class="row position-relative <?=(count($seccion['slider']['slide'])<=7)?'d-xl-none':'';?>">
                            <div class="zi-99 col-12 d-none d-xxl-flex justify-content-between align-items-center">
                                <div class="c-pointer arrow-prev <?/*opacity-50*/?>" onclick=swiper_landing_productos.slidePrev()>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="32" viewBox="0 0 17 32" fill="none">
                                    <path d="M16.6388 0.266225C16.4695 0.0973631 16.2393 0.00177592 15.9988 0.00040414C15.8795 -0.000700891 15.7612 0.0223047 15.6511 0.0680134C15.5411 0.113722 15.4416 0.18117 15.3588 0.266225L0.26769 15.1902C0.182936 15.273 0.115642 15.3715 0.0697101 15.4801C0.0237785 15.5888 0.00012532 15.7054 0.00012531 15.8231C0.000125299 15.9409 0.0237784 16.0575 0.06971 16.1661C0.115642 16.2748 0.182936 16.3733 0.26769 16.4561L15.3588 31.3832C15.4418 31.4709 15.5418 31.5413 15.6528 31.59C15.7638 31.6387 15.8836 31.6649 16.0051 31.6669C16.1265 31.6689 16.2472 31.6467 16.3598 31.6016C16.4724 31.5566 16.5746 31.4896 16.6605 31.4047C16.7464 31.3197 16.8142 31.2186 16.8597 31.1072C16.9053 30.9959 16.9277 30.8766 16.9257 30.7565C16.9236 30.6364 16.8972 30.5179 16.8479 30.4081C16.7986 30.2983 16.7275 30.1995 16.6388 30.1174L2.18768 15.8231L16.6388 1.53204C16.7232 1.44911 16.7902 1.3505 16.8358 1.24188C16.8815 1.13326 16.9051 1.01678 16.9051 0.899135C16.9051 0.781493 16.8815 0.665014 16.8358 0.556395C16.7902 0.447776 16.7232 0.349161 16.6388 0.266225V0.266225Z" fill="#002D72"/>
                                </svg>
                                </div>
                                <div class="c-pointer arrow-next" onclick=swiper_landing_productos.slideNext()>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="32" viewBox="0 0 17 32" fill="none">
                                    <path d="M0.286946 31.4008C0.456308 31.5696 0.686448 31.6652 0.926944 31.6666C1.0463 31.6677 1.16463 31.6447 1.27468 31.599C1.38473 31.5533 1.48418 31.4858 1.56694 31.4008L16.6581 16.4768C16.7428 16.394 16.8101 16.2955 16.8561 16.1868C16.902 16.0782 16.9257 15.9616 16.9257 15.8438C16.9257 15.7261 16.902 15.6095 16.8561 15.5009C16.8101 15.3922 16.7428 15.2937 16.6581 15.2109L1.56694 0.283768C1.48396 0.196045 1.38399 0.125728 1.27297 0.0769989C1.16194 0.0282703 1.04214 0.00212688 0.920694 0.000124454C0.799245 -0.00187797 0.678629 0.0203016 0.566026 0.0653431C0.453423 0.110385 0.351132 0.177367 0.265243 0.262306C0.179353 0.347244 0.111621 0.448401 0.0660747 0.559757C0.0205288 0.671113 -0.001899 0.790392 0.000125849 0.910496C0.0021507 1.0306 0.0285869 1.14907 0.0778612 1.25887C0.127136 1.36866 0.198241 1.46753 0.286946 1.54959L14.7381 15.8438L0.286946 30.135C0.202578 30.2179 0.135624 30.3165 0.0899357 30.4251C0.0442477 30.5337 0.020727 30.6502 0.020727 30.7679C0.020727 30.8855 0.0442477 31.002 0.0899357 31.1106C0.135624 31.2192 0.202578 31.3178 0.286946 31.4008V31.4008Z" fill="#002D72"/>
                                </svg>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="p-24 offcanvas offcanvas-end" tabindex="-1" id="offcanvasInfoSliderProductos" 
                aria-labelledby="offcanvasInfoSliderProductosLabel" data-bs-backdrop="false" data-bs-scroll="true">
                    <div class="offcanvas-header">
                    <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body text-secondary">
                    <div class="py-24 d-flex align-items-center justify-content-center image" 
                    style="background-color:<?=get_field('caracteristicas_producto',$GLOBALS['id_producto'])['color_corporativo']?>">

                    </div>
                    <div class="name mt-40 fs-24 fw-bolder">
                        
                    </div>
                    <div class="description mt-30">
                        
                    </div>
                    </div>
                </div>

                </section>
            <?
            break;
            case 'elementos_quimicos':
                get_template_part( 'template-parts/landing/seccion', 'elementos_quimicos', $seccion);
            break;
            case 'banner_redes':
                get_template_part( 'template-parts/landing/seccion', 'banner_redes', $seccion );
            break;
            case 'texto_centrado':
                get_template_part( 'template-parts/landing/seccion', 'texto_centrado', $seccion);
            break;
            case 'cols_imagenes_texto':
            ?>
            <section class=" zi-99 position-relative mt-56 mb-56 mb-md-178 seccion_cols_imagenes menta-essenzia-bottom-trigger">
                <div class="container position-relative">
                    <img src="<?=get_stylesheet_directory_uri().'/src/img/background-essenzia/limon_essenzia_top.png'; ?>" class="position-absolute limon-essenzia-top">                    
                    <img src="<?=get_stylesheet_directory_uri().'/src/img/background-essenzia/menta_essenzia_top.png'; ?>" class="position-absolute menta-essenzia-top">
                    <img src="<?=get_stylesheet_directory_uri().'/src/img/background-essenzia/naranja_essenzia_bottom.png'; ?>" class="position-absolute naranja-essenzia-bottom">
                    <div class="row">
                    <div class="col-12 offset-xl-1 col-xl-10">
                        <div class="row ">
                        <?php
                        if($seccion['background_dots']):
                        ?>
                            <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
                            class="d-none d-xxxl-block position-absolute bottom-0 start-0 w-auto translate-dots-col-before">
                            <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
                            class="d-none d-xxxl-block position-absolute top-0 end-0 w-auto translate-dots-col-after">
                        <?php
                        endif;
                        ?>
                        <? 
                        $i = 1;
                        foreach ($seccion['col'] as $col): ?>
                            <div class="col-12 position-relative zi-9 <?=$col['tamano']?> columna-<?=$i ?> columna-refresco-essenzia">
                            <? if($col['posicion_texto'] && $col['texto']): ?>
                                    <div class="text-start text-secondary texto px-lg-48 mb-48 mt-48 mb-md-64 mt-md-64" data-aos="fade-up">
                                    <? if($col['posicion_texto']): ?>
                                        <?=$col['texto']?>
                                    <? endif; ?>
                                    </div>
                                <? endif; ?>
                                <?php if($i == 2): ?>
                                    <div class="position-relative">
                                        <img src="<?=get_stylesheet_directory_uri().'/src/img/background-essenzia/menta_essenzia_bottom.png'; ?>" class="position-absolute menta-essenzia-bottom">
                                        <?=wp_get_attachment_image($col['imagen'], "full", "", array( 'class' => 'w-100 zi-99 position-relative' , 'alt' => '' , 'title' => '') ); ?>  
                                    </div>
                                <?php else: ?>                                
                                    <?=wp_get_attachment_image($col['imagen'], "full", "", array( 'class' => 'w-100 zi-99 position-relative h-100' , 'alt' => '' , 'title' => '') ); ?>  
                                <?php endif; ?>
                            </div>
                        <?     
                        $i++;
                        endforeach; ?>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <?
            break;
            case 'banner':
                get_template_part( 'template-parts/landing/seccion', 'banner', $seccion);
            break;
            case 'imagen_ilustraciones':
                get_template_part( 'template-parts/landing/seccion', 'imagen_ilustraciones', $seccion);
            break;
        endswitch;
    endforeach;
endif;
?>

<section class="bg-prelogos-<?=get_the_ID()?>"></section>

<section>
    <div class="container py-56">
        <div class="row">
            <div class="col-12 position-relative">
                <?php
                    get_template_part( 'template-parts/general/seccion', 'slider_logos', get_field('slider_logos', 'options'));
                ?>
            </div>
        </div>
    </div>
</section>