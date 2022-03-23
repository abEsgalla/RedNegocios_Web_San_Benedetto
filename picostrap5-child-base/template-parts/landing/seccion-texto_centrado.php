<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="mt-64 mb-80">
  <div class="container position-relative">
    <div class="row">
      <div class="offset-3 col-6">
        <div class="row text-center text-secondary">
          <?php if($seccion['texto_superior']): ?>
            <div class="col-12 text-uppercase fs-18 mb-10 fw-bold"><?=$seccion['texto_superior']?></div>
          <? endif; ?>
          <?php if($seccion['texto_principal']): ?>
            <div class="col-12 h3 mb-40"><?=$seccion['texto_principal']?></div>
          <? endif; ?>
          <?php if($seccion['descripcion']): ?>
            <div class="col-12 fs-17"><?=$seccion['descripcion']?></div>
          <? endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>