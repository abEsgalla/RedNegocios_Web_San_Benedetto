<?  $acf_fields = get_fields();
    $id_producto=get_the_ID();
?>
<section>
    <div class="container-fluid position-relative zi-99">
        <div class="bg-custom-image w-100 h-100 position-absolute top-0 start-0" 
        style="background:url('<?=wp_get_attachment_image_url($acf_fields['cabecera']['fondo'], "full")?>')"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 text-center">
                        <?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => 'mtn-custom-25' , 'alt' => '' , 'title' => '') ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<? 
if($acf_fields['secciones']):
    foreach ($acf_fields['secciones'] as $seccion):
        $seccion['id_producto'] = $id_producto;
        //var_dump($seccion['acf_fc_layout']);
        switch ($seccion['acf_fc_layout']):
            case 'slider_imagenes_productos':
                ?>
                <section class="bg-dark pt-65 pb-64">
                    <div class="container-fluid container-fluid-custom position-relative">
                        <div class="row">
                        <div class="col-12">
                            <div class="row text-center text-white">
                            <div class="col-12 fs-18 text-uppercase">
                                <?=$seccion['slider']['texto_superior']?>
                            </div>
                            <div class="col-12 h3 text-white">
                                <?=$seccion['slider']['texto_principal']?>
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="swiper swiper-landing-productos mt-94">
                            <div class="swiper-wrapper <?=(count($seccion['slider']['slide'])<=7)?'justify-content-xl-center':'';?>">
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
                                    <div style="background-color: #0096D6;"
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
                                    <svg width="17" height="32" viewBox="0 0 17 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.6349 0.267202C16.4656 0.098339 16.2354 0.00275224 15.9949 0.00138084C15.8756 0.000276475 15.7573 0.023281 15.6472 0.0689906C15.5372 0.114698 15.4377 0.182146 15.3549 0.267202L0.263784 15.1912C0.179029 15.2739 0.111736 15.3725 0.0658031 15.4811C0.0198722 15.5898 -0.00378086 15.7064 -0.00378087 15.8241C-0.00378088 15.9419 0.0198721 16.0585 0.065803 16.1671C0.111736 16.2758 0.179029 16.3743 0.263784 16.457L15.3549 31.3842C15.4379 31.4719 15.5379 31.5422 15.6489 31.591C15.7599 31.6397 15.8797 31.6658 16.0012 31.6678C16.1226 31.6698 16.2432 31.6477 16.3558 31.6026C16.4685 31.5576 16.5707 31.4906 16.6566 31.4057C16.7425 31.3207 16.8103 31.2196 16.8558 31.1082C16.9013 30.9969 16.9238 30.8776 16.9217 30.7575C16.9197 30.6374 16.8933 30.5189 16.844 30.4091C16.7947 30.2993 16.7236 30.2004 16.6349 30.1184L2.18378 15.8241L16.6349 1.53302C16.7193 1.45008 16.7863 1.35147 16.8319 1.24285C16.8776 1.13424 16.9012 1.01775 16.9012 0.90011C16.9012 0.782469 16.8776 0.665991 16.8319 0.557371C16.7863 0.448751 16.7193 0.350138 16.6349 0.267202Z" fill="white" fill-opacity="0.2"/>
                                    </svg>
                                    </div>
                                    <div class="c-pointer arrow-next" onclick=swiper_landing_productos.slideNext()>
                                    <svg width="17" height="32" viewBox="0 0 17 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.286946 31.4008C0.456308 31.5696 0.686448 31.6652 0.926944 31.6666C1.0463 31.6677 1.16463 31.6447 1.27468 31.599C1.38473 31.5533 1.48418 31.4858 1.56694 31.4008L16.6581 16.4768C16.7428 16.394 16.8101 16.2955 16.8561 16.1868C16.902 16.0782 16.9257 15.9616 16.9257 15.8439C16.9257 15.7261 16.902 15.6095 16.8561 15.5009C16.8101 15.3922 16.7428 15.2937 16.6581 15.2109L1.56694 0.283768C1.48396 0.196045 1.38399 0.125728 1.27297 0.0769989C1.16194 0.0282703 1.04214 0.00212688 0.920694 0.000124454C0.799245 -0.00187797 0.678629 0.0203016 0.566026 0.0653431C0.453423 0.110385 0.351132 0.177367 0.265243 0.262306C0.179353 0.347244 0.111621 0.448401 0.0660747 0.559757C0.0205288 0.671113 -0.001899 0.790392 0.000125849 0.910496C0.0021507 1.0306 0.0285869 1.14907 0.0778612 1.25887C0.127136 1.36866 0.198241 1.46753 0.286946 1.54959L14.7381 15.8439L0.286946 30.135C0.202578 30.2179 0.135624 30.3165 0.0899357 30.4251C0.0442477 30.5337 0.020727 30.6502 0.020727 30.7679C0.020727 30.8855 0.0442477 31.002 0.0899357 31.1106C0.135624 31.2192 0.202578 31.3178 0.286946 31.4008Z" fill="white"/>
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
                        style="background-color:<?=get_field('caracteristicas_producto',$seccion['id_producto'])['color_corporativo']?>">

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
                <section class=" zi-99 position-relative bg-dark pb-160 seccion_imagenes_texto">
                    <div class="container position-relative">
                        <div class="row">
                        <div class="col-12 offset-xl-1 col-xl-10">
                            <div class="row position-relative">
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
                            <?  $i = 1;
                                foreach ($seccion['col'] as $col): ?>
                                <div class="mb-4 col-12 position-relative zi-9 <?=$col['tamano']?>">
                                <div class="row d-flex h-100 text-center">
                                    <div class="col-12 order-2 h-100">
                                    <?=wp_get_attachment_image($col['imagen'], "full", "", array( 'class' => 'w-100 img-'. $i , 'alt' => '' , 'title' => '') ); ?>
                                    </div>
                                    <? if($col['posicion_texto'] && $col['texto']): ?>
                                    <div class="text-start text-white ms-35 mt-55 col-10 <?=$col['posicion_texto']?>">
                                    <? if($col['posicion_texto']): ?>
                                        <?=$col['texto']?>
                                    <? endif; ?>
                                    </div>
                                    <? endif; ?>
                                </div>
                                </div>
                            <? $i++;
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