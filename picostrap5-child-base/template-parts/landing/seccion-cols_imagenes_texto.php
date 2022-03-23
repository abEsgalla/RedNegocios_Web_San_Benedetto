<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="mt-56 mb-178 zi-99 position-relative">
  <div class="container position-relative">
    <div class="row">
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