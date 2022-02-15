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
                                <div style='background:".get_field('caracteristicas_producto',$id_producto)["color_corporativo"]."' class='col-12 ratio ratio-9x16'>
                                    ".wp_get_attachment_image(get_field('caracteristicas_producto',$id_producto)["imagen_logo_marca"], 'full', '', array( 'class' => 'fix-translate-absolute w-auto h-auto top-50 start-50' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') )."
                                </div>
                                <div class='col-12 mt-10 text-secondary'>
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
                                </div>
                                <div class='col-12 mt-10 text-secondary'>
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
            <div class="col-12 text-uppercase h4 py-16 m-0 text-white">
            <?=get_the_title()?>
            </div>
        </div>
        </div>
    </section>
    <?php
endif;
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