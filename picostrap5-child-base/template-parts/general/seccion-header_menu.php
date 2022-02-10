<?php
 
$category_repeater=array();
$categories_array_by_id=array();

$wp_args = array(
'post_type'  => 'producto',
'post_status' => 'publish',
'posts_per_page' => -1,
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
    foreach ($id_posts as $id_producto):
    $header_menu.="    
                    <div class='col-2'>
                        <div class='row'>
                            <a class='text-decoration-none text-reset' href='".get_field('relacion_page_landing',$id_producto)."'>
                                <div class='col-12'>
                                ".wp_get_attachment_image(get_field('imagen_marca',$id_producto), 'full', '', array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') )."
                                </div>
                                <div class='col-12 mt-10'>
                                ".get_the_title($id_producto)."
                                </div>
                            </a>
                        </div>
                    </div>";
    endforeach;
    $header_menu.=" 
                </div>
            </div>
        </div>
    </div>
    ";
endforeach;

?>

<div class="position-relative h-0">
    <div class="h-auto offcanvas offcanvas-top position-sticky bg-white" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="menu-marcas" aria-labelledby="menu-marcasLabel">
        <div class="container">
            <div class="row py-56">
                <?=$header_menu?>
            </div>
        </div>
    </div>
</div>