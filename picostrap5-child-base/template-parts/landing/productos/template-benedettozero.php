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
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background-zero/fruta-1.png'; ?>" class="position-absolute fruta-1">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background-zero/fruta-2.png'; ?>" class="position-absolute fruta-2">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background-zero/fruta-3.png'; ?>" class="position-absolute fruta-3">
    </div>
</section>

<?php
    if($acf_fields['secciones']):
        foreach ($acf_fields['secciones'] as $seccion):
            $seccion['id_producto'] = $id_producto;
            switch ($seccion['acf_fc_layout']):
                case 'slider_imagenes_productos':
                    echo '<div class="background-zero-frutas pb-64">';
                    get_template_part( 'template-parts/landing/seccion', 'slider_imagenes_productos_zero', $seccion);
                break;
                case 'elementos_quimicos':
                    get_template_part( 'template-parts/landing/seccion', 'elementos_quimicos', $seccion);
                break;
                case 'banner_redes':
                    get_template_part( 'template-parts/landing/seccion', 'banner_redes', $seccion );
                break;
                case 'texto_centrado':
                    get_template_part( 'template-parts/landing/seccion', 'texto_centrado', $seccion);
                    echo '</div>';
                break;
                case 'cols_imagenes_texto':
                    ?>
                    <section class="zi-99 position-relative mt-56 pb-56 pb-xl-178 seccion_cols_imagenes background-col-imagenes-zero">
                        <div class="container position-relative">
                            <img src="<?=get_stylesheet_directory_uri().'/src/img/background-zero/zero_manzana_imagenes.png'; ?>" class="zi-99 position-absolute zero-manzana-imagenes">
                            <img src="<?=get_stylesheet_directory_uri().'/src/img/background-zero/zero_limon_imagenes.png'; ?>" class="position-absolute zero-limon-imagenes">
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
                                    <div class="col-12 position-relative zi-9 <?=$col['tamano']?> columna-<?=$i ?> columna-zero">
                                    <? if($col['posicion_texto'] && $col['texto']): ?>
                                            <div class="text-start text-secondary texto px-lg-48 mt-0 mt-md-64 mb-md-64 mb-48" data-aos="fade-up">
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