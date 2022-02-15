<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="my-64">
  <div class="container position-relative">
    <div class="row">
      <? foreach ($seccion['col'] as $col): ?>
        <div class="col-12 <?=$col['tamano']?>">
          <div class="row d-flex flex-column h-100 justify-content-between">
            <div class="col-12 order-2">
              <?=wp_get_attachment_image($col['imagen'], "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
            </div>
            <? if($col['texto']): ?>
            <div class="text-secondary my-48 offset-1 col-10 <?=$col['posicion_texto']?>">
              <?=$col['texto']?>
            </div>
            <? endif; ?>
          </div>
        </div>
      <? endforeach; ?>
    </div>
  </div>
</section>