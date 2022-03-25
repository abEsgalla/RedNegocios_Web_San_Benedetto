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
            //var_dump($seccion['acf_fc_layout']);
            switch ($seccion['acf_fc_layout']):
                case 'slider_imagenes_productos':
                    echo '<div class="background-start-te">';
                    get_template_part( 'template-parts/landing/seccion', 'slider_imagenes_productos_te', $seccion);
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
                    get_template_part( 'template-parts/landing/seccion', 'cols_imagenes_texto_te', $seccion);
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