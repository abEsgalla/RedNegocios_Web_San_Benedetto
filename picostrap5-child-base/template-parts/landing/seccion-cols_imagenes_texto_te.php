<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class=" zi-99 position-relative pt-64 mb-64 mb-md-178 background-te-imagenes te-imagenes-trigger overflow-x-clip">
  <div class="container position-relative">
    <img src="<?=get_stylesheet_directory_uri().'/src/img/background-te/te_imagenes_bottom.png'; ?>" class="position-absolute te-imagenes-bottom">
    <img src="<?=get_stylesheet_directory_uri().'/src/img/background-te/te_imagenes_bottom_left.png'; ?>" class="position-absolute te-imagenes-bottom-left">
    <img src="<?=get_stylesheet_directory_uri().'/src/img/background-te/te_imagenes_top.png'; ?>" class="position-absolute te-imagenes-top">
    <img src="<?=get_stylesheet_directory_uri().'/src/img/background-te/liquido_te.png'; ?>" class="position-absolute te-liquido">
    <div class="row zi-99">
      <div class="col-12 offset-xl-1 col-xl-10">
        <div class="row position-relative">
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
          <? foreach ($seccion['col'] as $col): ?>
            <div class="mb-4 col-12 position-relative zi-9 <?=$col['tamano']?>">
              <div class="row d-flex flex-column h-100 justify-content-between text-center">
                <div class="col-12 order-2 h-100">
                  <?=wp_get_attachment_image($col['imagen'], "full", "", array( 'class' => 'w-100 h-100' , 'alt' => '' , 'title' => '') ); ?>
                </div>
                <? if($col['posicion_texto'] && $col['texto']): ?>
                <div class="text-start text-secondary m-auto offset-1 col-10 <?=$col['posicion_texto']?>">
                  <? if($col['posicion_texto']): ?>
                    <?=$col['texto']?>
                  <? endif; ?>
                </div>
                <? endif; ?>
              </div>
            </div>
          <? endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>