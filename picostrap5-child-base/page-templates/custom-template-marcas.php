<?php
/* Template Name: Page Marcas */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="d-flex bg-primary py-176 position-relative text-white">
    <div class="top-0 position-absolute h-100 w-100 overflow-hidden">
        <?=wp_get_attachment_image(51, "full", "", array( 'class' => 'fix-banner' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
    </div>
    <div class="container zi-99">
        <div class="row">
            <div class="col-12 text-center">
                <div class="h1 fw-bold">NUESTRAS MARCAS</div>
            </div>
        </div>
    <div>
</section>

<section class="py-96">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="justify-content-center nav nav-pills mb-3 h2" id="pills-tab" role="tablist">
                    <li class="nav-item mx-32" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" 
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            AGUA MINERAL
                        </button>
                    </li>
                    <li class="nav-item mx-32" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" 
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            REFRESCOS
                        </button>
                    </li>
                </ul>
                <div class="row tab-content" id="pills-tabContent">
                    <div class="col-12 tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row text-center">
                            <div class="col-12 mt-80">
                                Un producto 100% natural, puro desde su origen y esencial para nuestra salud y bienestar. 
                                Descubre las propiedades del agua mineral a través de nuestras distintas marcas, 
                                ¡porque cada agua mineral es única! 
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
                                    </div>
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
                                    </div>
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
                                    </div>
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
                                    </div>
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row text-center">
                            <div class="col-12 my-80 text-center">
                                Un producto 100% natural, puro desde su origen y esencial para nuestra salud y bienestar. 
                                Descubre las propiedades del agua mineral a través de nuestras distintas marcas, 
                                ¡porque cada agua mineral es única! 
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
                                    </div>
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
                                    </div>
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
                                    </div>
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
                                    </div>
                                    <div class="col-4 mt-64">
                                        <?=wp_get_attachment_image(52, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                                        <div class="text-start mt-20">test</div>
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

<?php get_footer();
