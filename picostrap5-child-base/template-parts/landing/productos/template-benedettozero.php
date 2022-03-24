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
            switch ($seccion['acf_fc_layout']):
                case 'slider_imagenes_productos':
                    get_template_part( 'template-parts/landing/seccion', 'slider_imagenes_productos', $seccion);
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
                    <section class=" zi-99 position-relative mt-56 mb-178 seccion_cols_imagenes">
                        <div class="container position-relative">
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
                                    <div class="col-12 position-relative zi-9 <?=$col['tamano']?> columna-<?=$i ?>">
                                    <? if($col['posicion_texto'] && $col['texto']): ?>
                                            <div class="text-start text-secondary texto px-lg-48 mb-70">
                                            <? if($col['posicion_texto']): ?>
                                                <?=$col['texto']?>
                                            <? endif; ?>
                                            </div>
                                        <? endif; ?>
                                        <?=wp_get_attachment_image($col['imagen'], "full", "", array( 'class' => 'w-100 ' , 'alt' => '' , 'title' => '') ); ?>  
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