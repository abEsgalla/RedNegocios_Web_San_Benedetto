<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class=" zi-99 position-relative pb-0 pt-md-64 pb-0 pb-md-178 background-font-natura">
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
          $vueltas = 0;
          ?>
          <? foreach ($seccion['col'] as $col): ?>
            <?php $controlImagen = $vueltas == 0 ? 'w-100 h-100' : 'w-100'; ?>
            <div class="mb-4 col-12 position-relative zi-9 <?=$col['tamano']?>">
              <div class="row d-flex flex-column h-100 justify-content-between text-center flex-nowrap">
                <div class="col-12 order-2 h-100">
                  <?=wp_get_attachment_image($col['imagen'], "full", "", array( 'class' => $controlImagen0 , 'alt' => '' , 'title' => '') ); ?>
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