<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<? if(is_single(211)): ?>

  <?
  $padding="py-64";
  if($seccion['fondo']==383):
    $padding="pt-274 pb-533 pt-md-111 pb-md-533 pt-xxl-145 pb-xxl-492";
  endif;
  if($seccion['fondo']==1115):
    $padding="py-145 py-md-200 pt-xxl-200 pb-xxl-245";
  endif;
  ?>
  
  <section class="d-flex position-relative bg-custom-image  <?=$padding?>" style="background:url('<?=wp_get_attachment_image_url($seccion['fondo'], "full")?>')">
      <div class="container">
        <div class="row">
          <div class="col-12 offset-md-1 col-md-10 offset-lg-3 col-lg-6 text-center text-white" data-aos="fade-up">
            <div class="row">
            <?
              if($seccion['texto_superior']):
              ?>
              <div class="col-12 text-uppercase fs-18 pt-20">
                <?=$seccion['texto_superior']?>
              </div>
              <?
              endif;
              if($seccion['texto_principal']):
                if($seccion['enlace_texto_principal']): ?>
                  <div class="col-12 h4 mt-10">
                    <a href="<?=$seccion['enlace_texto_principal'] ?>" class="text-decoration-none text-white"><?=$seccion['texto_principal'] ?></a>
                  </div>
                <? 
                else: ?>
                  <div class="col-12 h4 mt-10">
                    <?=$seccion['texto_principal']?>
                  </div>
                <?
                endif;
                ?>
              <?
              endif;
              if($seccion['descripcion']):
              ?>
              <div class="col-12 mt-32 fs-17">
                <?=$seccion['descripcion']?>
              </div>
              <?
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
  </section>

<? else: ?>

  <section class="d-flex position-relative">
    <div class="bg-black w-100">
      <?=wp_get_attachment_image($seccion['fondo'], "full", "", array( 'class' => 'img-seccion-banner ' .$seccion['fondo_opacidad']   , 'alt' => '' , 'title' => '') ); ?>
    </div>
    <div class="container-fluid zi-99 <?=$seccion['texto_vertical']?> position-absolute translate-middle-y">
      <div class="container">
        <div class="row">
          <div class="offset-3 col-6 text-center text-white" data-aos="fade-up">
            <div class="row">
            <?
              if($seccion['texto_superior']):
              ?>
              <div class="col-12 text-uppercase fs-18 pt-20">
                <?=$seccion['texto_superior']?>
              </div>
              <?
              endif;
              if($seccion['texto_principal']):
                if($seccion['enlace_texto_principal']): ?>
                  <div class="col-12 h4 mt-10">
                    <a href="<?=$seccion['enlace_texto_principal'] ?>" class="text-decoration-none text-white"><?=$seccion['texto_principal'] ?></a>
                  </div>
                <? 
                else: ?>
                  <div class="col-12 h4 mt-10">
                    <?=$seccion['texto_principal']?>
                  </div>
                <?
                endif;
                ?>
              <?
              endif;
              if($seccion['descripcion']):
              ?>
              <div class="col-12 mt-32 fs-17">
                <?=$seccion['descripcion']?>
              </div>
              <?
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<? endif; ?>