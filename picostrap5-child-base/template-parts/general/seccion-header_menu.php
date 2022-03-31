<?php
 
$category_repeater=array();
$categories_array_by_id=array();

$wp_args = array(
'post_type'  => 'producto',
'post_status' => 'publish',
'posts_per_page' => -1,
'orderby'  => 'term',
'order'    => 'ASC'
);
$the_query = new WP_Query( $wp_args );
if ( $the_query->have_posts() ):
    while ( $the_query->have_posts() ):
        $the_query->the_post();
        $id_producto=get_the_ID();
        $category_id=get_the_terms( $id_producto, 'categorias_producto' )[0]->term_id;
        if (!in_array($category_id, $category_repeater)):
            if(!array_key_exists($category_id, $categories_array_by_id)) {
            $categories_array_by_id[$category_id]=array();
            }
            array_push($categories_array_by_id[$category_id], $id_producto);
        endif;
    endwhile;
endif;
wp_reset_postdata();

$header_menu="";
foreach ($categories_array_by_id as $id_term => $id_posts):
    $term_name = get_term( $id_term )->name;
    $border="";
    if($id_term==4){
        $border="border-start";
    }
    $header_menu.="
    <div class='col'>
        <div class='row px-xl-32 ".$border."'>
            <div class='col-12 text-uppercase fs-14 fw-bold text-secondary'>".$term_name."</div>
            <div class='col-12 mt-24 d-flex'>";
    $limit=0;
    foreach ($id_posts as $id_producto):
    if($id_term==3 && $limit==3){
        continue;
    }
    if($limit==4){
        continue;
    }
    $image_hover=get_field('caracteristicas_producto',$id_producto)["imagen_producto_destacado"];
    if(get_field('caracteristicas_producto',$id_producto)["imagen_grid_page_marcas"]):
        $custom_image_bg_id = get_field('caracteristicas_producto',$id_producto)["imagen_grid_page_marcas"];
    else:
        $custom_image_bg_id = get_field('caracteristicas_producto',$id_producto)["imagen_logo_marca"];
    endif;
    $header_menu.="    
                    <div class='card-producto-menu me-32'>
                        <a class='single-menu-brand text-decoration-none text-reset position-relative' href='".get_permalink(get_field('caracteristicas_producto',$id_producto)['relacion_page_landing'])."'>
                            <div style='background:".get_field('caracteristicas_producto',$id_producto)["color_corporativo"]."' class='p-8 position-relative'>
                                <div class='bg-custom-image-brand-menu img-menu-brand position-absolute top-50 start-50 w-100 translate-middle p-8'>".wp_get_attachment_image($custom_image_bg_id, 'full', '', array('class' => 'w-100'))."</div>
                                <div class='bg-custom-image-product-menu img-menu-product h-100 position-absolute top-0 start-0 w-100'>
                                    <div class='bg-producto-menu' style='background-image:url(".wp_get_attachment_image_url($image_hover, 'full').")'></div>
                                </div>
                            </div>
                            <div class='mt-10 text-secondary fw-500 fs-13'>
                            ".get_the_title($id_producto)."
                            </div>
                        </a>
                    </div>";
    $limit++;
    endforeach;
    $term_name_sanitice = str_replace(' ', '-', strtolower($term_name));
    $header_menu.="    
                    <div class='card-producto-menu-otras'>
                        <a class='text-decoration-none text-reset position-relative' href='".get_permalink( 49 )."?".$term_name_sanitice."'>
                            <div class='border border-1 more-brands'>
                            ".
                            '
                            <div class="d-flex align-items-end p-8 h-100 w-100">
                                <svg class="light" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6.91892 0V6.91892H0V9.08108H6.91892V16H9.08108V9.08108H16V6.91892H9.08108V0H6.91892Z" fill="#FFFFFF"/>
                                </svg>
                                <svg class="dark" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6.91892 0V6.91892H0V9.08108H6.91892V16H9.08108V9.08108H16V6.91892H9.08108V0H6.91892Z" fill="#69B3E7"/>
                                </svg>
                            </div>
                            '
                            .
                            /*wp_get_attachment_image(708, 'full', '', array( 'class' => 'w-100 h-100' , 'alt' => '' , 'title' => '') ).*/"
                            </div>
                            <div class='mt-10 text-secondary fw-500 fs-13'>
                                Otras Marcas
                            </div>
                        </a>
                    </div>";
    $header_menu.=" 
                </div>
            </div>
    </div>
    ";
endforeach;

?>

<?php
if(get_post_type()=="landing"):
    $args = array(
        'numberposts'	=> -1,
        'post_type'		=> 'producto',
        'meta_query'	=> array(
        array(
            'key'		=> 'caracteristicas_producto_relacion_page_landing',
            'compare'	=> '=',
            'value'		=> get_the_ID(),
        )
        )
    );
    $the_query = new WP_Query( $args );
    if( $the_query->have_posts() &&  $the_query->post_count == 1): 
        $the_query->the_post(); 
        $id_producto=get_the_ID();
        $GLOBALS['id_producto']=get_the_ID();
        wp_reset_query();
    endif;
    ?>
    <section class="zi-1050 position-relative" 
    style="background-color:<?=get_field('caracteristicas_producto',$id_producto)['color_corporativo']?>">
        <div class="container">
        <div class="row">
            <? if($id_producto!=61 && $id_producto!=490): ?>
                <div class="col-12 text-uppercase py-16 m-0 h6 fs-16 fs-sm-24 
                <?=(get_field('banner_superior_texto_color'))?get_field('banner_superior_texto_color'):'text-white';?>
                ">
                <?=get_the_title()?>
                </div>
            <? else: ?>
                <div class="col-12 text-uppercase py-16 m-0 h6 fs-16 fs-sm-24 d-flex justify-content-between
                <?=(get_field('banner_superior_texto_color'))?get_field('banner_superior_texto_color'):'text-white';?>
                ">
                    <div>
                        ENJOY
                    </div>
                    <div>
                        <a href="<?=get_permalink(get_field('caracteristicas_producto',61)['relacion_page_landing'])?>" 
                        class="py-2 text-reset text-decoration-none single-animation-undertext 
                        <?=($id_producto==61)?'active':'opacity-50';?>"><?php _e('SIN GAS'); ?></a>
                        <a href="<?=get_permalink(get_field('caracteristicas_producto',490)['relacion_page_landing'])?>" 
                        class="py-2 text-reset text-decoration-none ms-32 single-animation-undertext 
                        <?=($id_producto==490)?'active':'opacity-50';?>"><?php _e('CON GAS'); ?></a>
                    </div>
                </div>
            <? endif; ?>
        </div>
        </div>
    </section>
    <?php
endif;
?>

<div class="position-relative h-0">

    <div class="h-0 offcanvas offcanvas-top position-sticky border-0 bg-white shadow-sm"
        data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvas-menu" aria-labelledby="offcanvas-menu">

        <!-- Nosotros -->
        <?
        $data_offcanvas_nosotros = [
            0 => [
                "nombre" => "Historia",
                "image" => wp_get_attachment_image_url(876, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(579)
            ],
            1 => [
                "nombre" => "Misión, Visión y valores",
                "image" => wp_get_attachment_image_url(875, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(581)
            ],
            2 => [
                "nombre" => "San benedetto en españa",
                "image" => wp_get_attachment_image_url(874, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(655)
            ],
            3 => [
                "nombre" => "San benedetto en el mundo",
                "image" => wp_get_attachment_image_url(873, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(667)
            ],
            4 => [
                "nombre" => "Noticias",
                "image" => wp_get_attachment_image_url(872, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => esc_url(get_post_type_archive_link('post'))
            ]
        ];
        ?>
        <div class="container d-none h-0 offcanvas-nosotros">
            <div class="row py-56 text-secondary">
                <div class="col-6 image">
                    <?=wp_get_attachment_image(687, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12 text-uppercase">
                            <?php
                            foreach ($data_offcanvas_nosotros as $key => $data_offcanvas):
                                $data_offcanvas['nombre'];
                                $data_offcanvas['image'];
                                $data_offcanvas['url'];
                            ?>
                            <div class="my-12">
                                <a data-image="<?=$data_offcanvas['image'];?>"
                                class="text-decoration-none text-reset text-secondary animation-starttext py-3" href="<?=$data_offcanvas['url']?>">
                                    <?=$data_offcanvas['nombre']?>
                                </a>
                            </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nosotros -->

        <!-- Marcas -->
        <div class="container d-none h-0 offcanvas-marcas">
            <div class="row py-56">
                <?=$header_menu?>
            </div>
        </div>
        <!-- Marcas -->

        <!-- Ecolosofía -->
        <?
        $data_offcanvas_ecolosofia = [
            0 => [
                "nombre" => "Productos",
                "image" => wp_get_attachment_image_url(871, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(585)
            ],
            1 => [
                "nombre" => "Procesos",
                "image" => wp_get_attachment_image_url(870, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(587)
            ],
            2 => [
                "nombre" => "Entorno",
                "image" => wp_get_attachment_image_url(869, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(589)
            ]
        ];
        ?>
        <div class="container d-none h-0 offcanvas-ecolosofia">
            <div class="row py-56 text-secondary">
                <div class="col-6 image">
                    <?=wp_get_attachment_image(687, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12 text-uppercase">
                            <?php
                            foreach ($data_offcanvas_ecolosofia as $key => $data_offcanvas):
                                $data_offcanvas['nombre'];
                                $data_offcanvas['image'];
                                $data_offcanvas['url'];
                            ?>
                            <div class="my-12">
                                <a data-image="<?=$data_offcanvas['image'];?>"
                                class="text-decoration-none text-reset text-secondary animation-starttext py-3" 
                                href="<?=$data_offcanvas['url']?>">
                                    <?=$data_offcanvas['nombre']?>
                                </a>
                            </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ecolosofía -->

        <!-- Contacto -->
        <?
        $data_offcanvas_contacto = [
            0 => [
                "nombre" => "Buscamos Talento",
                "image" => wp_get_attachment_image_url(868, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(672)
            ],
            1 => [
                "nombre" => "Localizacion y contacto",
                "image" => wp_get_attachment_image_url(867, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(650)
            ],
            2 => [
                "nombre" => "Preguntas Frecuentes",
                "image" => wp_get_attachment_image_url(866, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ),
                "url" => get_permalink(785)
            ]
        ];
        ?>
        <div class="container d-none h-0 offcanvas-contacto">
            <div class="row py-56 text-secondary">
                <div class="col-6 image">
                    <?=wp_get_attachment_image(687, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12 text-uppercase">
                            <?php
                            foreach ($data_offcanvas_contacto as $key => $data_offcanvas):
                                $data_offcanvas['nombre'];
                                $data_offcanvas['image'];
                                $data_offcanvas['url'];
                            ?>
                            <div class="my-12">
                                <a data-image="<?=$data_offcanvas['image'];?>"
                                class="text-decoration-none text-reset text-secondary animation-starttext py-3" 
                                href="<?=$data_offcanvas['url']?>">
                                    <?=$data_offcanvas['nombre']?>
                                </a>
                            </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contacto -->
    </div>

</div>