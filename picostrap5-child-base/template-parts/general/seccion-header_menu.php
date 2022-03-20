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
    $header_menu.="
    <div class='col'>
        <div class='row'>
            <div class='col-12 text-uppercase fs-13 fw-bold text-secondary'>".$term_name."</div>
            <div class='col-12 mt-24'>
                <div class='row'>";
    $limit=0;
    foreach ($id_posts as $id_producto):
    if($limit==4){
        continue;
    } 
    $header_menu.="    
                    <div class='col-2'>
                        <div class='row'>
                            <a class='text-decoration-none text-reset position-relative' href='".get_permalink(get_field('caracteristicas_producto',$id_producto)['relacion_page_landing'])."'>
                                <div style='background:".get_field('caracteristicas_producto',$id_producto)["color_corporativo"]."99"."' class='col-12 ratio ratio-9x16'>
                                    ".wp_get_attachment_image(get_field('caracteristicas_producto',$id_producto)["imagen_logo_marca"], 'full', '', array( 'class' => 'px-2 fix-translate-absolute w-auto h-auto top-50 start-50' , 'alt' => '' , 'title' => '') )."
                                </div>
                                <div class='col-12 mt-10 text-secondary fw-500'>
                                ".get_the_title($id_producto)."
                                </div>
                            </a>
                        </div>
                    </div>";
    $limit++;
    endforeach;
    $header_menu.="    
                    <div class='col-2'>
                        <div class='row'>
                            <a class='text-decoration-none text-reset position-relative' href='".get_permalink( 49 )."'>
                                <div class='col-12 ratio ratio-9x16 border border-1 shadow'>
                                ".wp_get_attachment_image(708, 'full', '', array( 'class' => 'w-100 h-100' , 'alt' => '' , 'title' => '') )."
                                </div>
                                <div class='col-12 mt-10 text-secondary fw-500'>
                                    Otras Marcas
                                </div>
                            </a>
                        </div>
                    </div>";
    $header_menu.=" 
                </div>
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
        wp_reset_query();
    endif;
    ?>
    <section class="zi-1050 position-relative" 
    style="background-color:<?=get_field('caracteristicas_producto',$id_producto)['color_corporativo']?>">
        <div class="container">
        <div class="row">
            <div class="col-12 text-uppercase py-16 m-0 text-white h6 fs-24">
            <?=get_the_title()?>
            </div>
        </div>
        </div>
    </section>
    <?php
endif;
?>

<div class="position-relative h-0">

    <div class="h-0 offcanvas offcanvas-top position-sticky border-0 bg-white shadow" 
        data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvas-marcas" aria-labelledby="offcanvas-marcas">
        <div class="container">
            <div class="row py-56">
                <?=$header_menu?>
            </div>
        </div>
    </div>

    <?php
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
    <div class="h-0 offcanvas offcanvas-top position-sticky border-0 bg-white shadow" 
        data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvas-nosotros" aria-labelledby="offcanvas-nosotros">
        <div class="container">
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
    </div>
    
    <?php
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

    <div class="h-0 offcanvas offcanvas-top position-sticky border-0 bg-white shadow" 
        data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvas-ecolosofia" aria-labelledby="offcanvas-ecolosofia">
        <div class="container">
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
    </div>
    
    <?php
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

    <div class="h-0 offcanvas offcanvas-top position-sticky border-0 bg-white shadow" 
        data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvas-contacto" aria-labelledby="offcanvas-contacto">
        <div class="container">
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
    </div>

</div>