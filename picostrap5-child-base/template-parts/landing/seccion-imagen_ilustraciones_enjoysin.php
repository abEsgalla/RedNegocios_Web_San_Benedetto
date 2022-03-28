<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="my-64 mt-xl-150 mb-xl-56">
    <div class="container position-relative frutas-bloque-texto-trigger">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background-esjoy/limon_bloque_texto_sin.png'; ?>" class="position-absolute lima-bloque-texto-sin">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background-esjoy/fresa_bloque_texto.png'; ?>" class="position-absolute fresa-bloque-texto-sin">
        <img src="<?=get_stylesheet_directory_uri().'/src/img/background-esjoy/naranja_bloque_texto_sin.png'; ?>" class="position-absolute naranja-bloque-texto-sin">
        <div class="row">
            <div class="col-12 offset-xl-1 col-xl-10">
                <div class="row">
                    <div class="col-7 pe-0">
                        <?=wp_get_attachment_image($seccion['imagen'], "full", "", array( 'class' => 'w-100' , 'alt' => '' , 'title' => '') )?>
                    </div>
                    <div class="col-5"
                    style="background-color:<?=$seccion['color_fondo']?>">
                        <div class="row h-100 d-flex flex-column justify-content-evenly text-uppercase text-secondary">
                            <div class="col-12 offset-xl-2 col-xl-8 icon-plus-custom">
                                <div class="row d-flex align-items-center">
                                    <div class="col-6 text-end">
                                        <?=wp_get_attachment_image($seccion['1_ilustracion'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                                    </div>
                                    <div class="col-6 text-start fw-bold fs-20">
                                        <?=$seccion['1_ilustracion_texto']?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 offset-xl-2 col-xl-8 icon-equal-custom">
                                <div class="row d-flex align-items-center">
                                    <div class="col-6 text-end">
                                        <?=wp_get_attachment_image($seccion['2_ilustracion'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                                    </div>
                                    <div class="col-6 text-start fw-bold fs-20">
                                        <?=$seccion['2_ilustracion_texto']?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 offset-xl-2 col-xl-8">
                                <div class="row d-flex align-items-center">
                                    <div class="col-6 text-end">
                                        <?=wp_get_attachment_image($seccion['3_ilustracion'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                                    </div>
                                    <div class="col-6 text-start fw-bold fs-20">
                                        <?=$seccion['3_ilustracion_texto']?>
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