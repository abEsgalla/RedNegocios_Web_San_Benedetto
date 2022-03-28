<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="my-64 mt-xl-150 mb-xl-56 position-relative bg-splash-agua-trigger">
    <img src="<?=get_stylesheet_directory_uri().'/src/img/background-essenzia/BG-agua.png'; ?>" class="position-absolute top-50 start-50  bg-splash-agua">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 offset-xl-1 col-xl-10">
                <div class="row flex-column flex-xl-row">
                    <div class="col-12 col-xl-7 pe-xl-0">
                        <?=wp_get_attachment_image($seccion['imagen'], "full", "", array( 'class' => 'w-100' , 'alt' => '' , 'title' => '') )?>
                    </div>
                    <div class="col-12 col-xl-5 ps-xl-0">
                        <div style="background-color:<?=$seccion['color_fondo']?>" class="h-100 p-32 p-xl-0">
                            <div class="row h-100 d-flex flex-xl-column justify-content-evenly text-uppercase text-secondary">
                                <div class="col-12 col-md offset-xl-2 col-xl-8 d-flex align-items-center"> <!-- icon-plus-custom -->
                                    <div class="row d-flex align-items-center flex-row flex-md-column flex-xl-row">
                                        <div class="col-6 col-md-12 col-xl-6 text-end">
                                            <?=wp_get_attachment_image($seccion['1_ilustracion'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-6 text-start text-md-center text-xl-start fw-bold fs-20">
                                            <?=$seccion['1_ilustracion_texto']?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md offset-xl-2 col-xl-8 d-flex align-items-center justify-content-center my-16"> <!-- icon-plus-custom -->
                                    <img src="<?php echo get_stylesheet_directory_uri().'/src/img/plus.png'; ?>" class="">
                                </div>
                                <div class="col-12 col-md offset-xl-2 col-xl-8 d-flex align-items-center"> <!-- icon-equal-custom -->
                                    <div class="row d-flex align-items-center flex-row flex-md-column flex-xl-row">
                                        <div class="col-6 col-md-12 col-xl-6 text-end">
                                            <?=wp_get_attachment_image($seccion['2_ilustracion'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-6 text-start text-md-center text-xl-start fw-bold fs-20">
                                            <?=$seccion['2_ilustracion_texto']?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md offset-xl-2 col-xl-8 text-center d-flex align-items-center justify-content-center my-16"> <!-- icon-plus-custom -->
                                    <img src="<?php echo get_stylesheet_directory_uri().'/src/img/equal.png'; ?>" class="">
                                </div>
                                <div class="col-12 col-md offset-xl-2 col-xl-8 d-flex align-items-center">
                                    <div class="row d-flex align-items-center flex-row flex-md-column flex-xl-row">
                                        <div class="col-6 col-md-12 col-xl-6 text-end">
                                            <?=wp_get_attachment_image($seccion['3_ilustracion'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-6 text-start text-md-center text-xl-start fw-bold fs-20">
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
    </div>
</section>