<?php
  $fields = wp_parse_args( $args );

  $category_repeater=array();
  $categories_id_slider_html=array();

  foreach ($fields as $id_producto):
    $category_id=get_the_terms( $id_producto, 'categorias_producto' )[0]->term_id;
    if (!in_array($category_id, $category_repeater)):
      if(!array_key_exists($category_id, $categories_id_slider_html)) {
        $categories_id_slider_html[$category_id]=array();
      }
      array_push($categories_id_slider_html[$category_id], $id_producto);
    endif;
  endforeach;

  $counter=0;
  $cabecera_tabs_html="";
  $cuerpo_tabs_html="";

  foreach ($categories_id_slider_html as $id_term => $id_posts):
    $term_name = get_term( $id_term )->name;
    $term_name_sanitice = str_replace(' ', '-', strtolower($term_name));
    $active=($counter==0)?'active':'';
    $show=($counter==0)?'show':'';
    $selected=($counter==0)?'true':'false';
    $cabecera_tabs_html.="
      <li class='nav-item mx-32' role='presentation'>
          <button class='nav-link ".$active."' id='".$term_name_sanitice."-tab' 
          data-bs-toggle='pill' data-bs-target='#".$term_name_sanitice."' 
          type='button' role='tab' aria-controls='".$term_name_sanitice."' aria-selected='".$selected."'>
          ".mb_strtoupper($term_name)."
          </button>
      </li>";
    $cuerpo_tabs_html.="
    <div class='col-12 tab-pane fade ".$show." ".$active."' id='".$term_name_sanitice."' 
    role='tabpanel' aria-labelledby='".$term_name_sanitice."-tab'>
      <div class='row text-center'>
          <div class='col-12 mt-80'>
              ".get_term_field( 'description', $id_term )."
          </div>
          <div class='col-12'>
              <div class='row'>";
    foreach ($id_posts as $id_producto):
    $cuerpo_tabs_html.="
                <div class='col-4 mt-64'>
                    ".wp_get_attachment_image(get_field('imagen_producto',$id_producto), 'full', '', array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') )."
                    <div class='text-start mt-20'>".mb_strtoupper(get_the_title($id_producto))."</div>
                </div>
    ";
    endforeach;
    $cuerpo_tabs_html.="
              </div>
          </div>
      </div>
    </div>
    ";
  $counter++;
  endforeach;
  unset($counter);

?>

<div class="col-12">
  <ul class="justify-content-center nav nav-pills mb-3 h2" id="pills-tab" role="tablist">
      <?=$cabecera_tabs_html?>
  </ul>
  <div class="row tab-content" id="pills-tabContent">
      <?=$cuerpo_tabs_html?>
  </div>
</div>