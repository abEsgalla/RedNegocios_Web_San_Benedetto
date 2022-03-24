<?php
  $fields = wp_parse_args( $args );
?>

<div class="col-12 text-start text-sm-center text-secondary">
  <?php
  if($fields["texto_superior"]):
  ?>
    <div class="text-uppercase fw-18"><?=$fields["texto_superior"]?></div>
  <?
  endif;
  if($fields["texto_principal"]):
  ?>
    <div class="h4"><?=$fields["texto_principal"]?></div>
  <?
  endif;
  ?>
</div>
<?php
if($fields["elemento_grid"]):
  ?>
  <div class="col-12 mt-64 position-relative">
    <div class="row gx-2 mx-sm-0">
      <?
      foreach ($fields["elemento_grid"] as $key => $single_grid):
        ?>
        <div 
        class="order-lg-0 col-12 h-75-vw gx-0 <?=(($key+1)==2)?'order-0':'order-1'?>
        <?=($single_grid['tamano'])? $single_grid['tamano'] : '' ;?> 
        <?=($single_grid['fondo'])? '' : 'd-flex align-items-center' ;?>
        ">
          <?
          if($single_grid['fondo']):
          ?>
            <div class="position-relative bg-black overflow-hidden h-100 d-flex">
              <?=wp_get_attachment_image($single_grid['fondo'], "full", "", array( 'class' => 'w-100 center-image opacity-75' , 'alt' => '' , 'title' => '') ); ?>
            </div>
          <?
          else:
          ?> 
            <div class="text-white d-flex h-100 w-100" <?=($single_grid['fondo_color'])?'style="background-color:'.$single_grid['fondo_color'].'"':'';?>>
              <div class="col-12 d-flex align-items-center" data-aos="fade-right">
                <div class="row">
                  <div class="offset-2 col-8">
                    <div class="row">
                      <?
                      if($single_grid['texto_superior']):
                      ?>
                        <div class="col-12 text-uppercase fs-18 pt-48 pt-sm-0"><?=$single_grid['texto_superior']?></div>
                      <?
                      endif;
                      if($single_grid['texto_principal']):
                      ?>
                        <div class="col-12 h4 mt-8"><?=$single_grid['texto_principal']?></div>
                      <?
                      endif;
                      if($single_grid['descripcion']):
                      ?>
                        <div class="col-12 mt-20">
                          <?=$single_grid['descripcion']?>
                        </div>
                      <?
                      endif;
                      if($single_grid['texto_cta']):
                      ?>
                        <div class="col-12 pb-60 pb-sm-0">
                          <a href="<?=$single_grid['link_cta']?>" class="btn border-2 fw-500 btn-outline-primary-brighter text-uppercase mt-40 fs-14 rounded-0">
                            <span><?=$single_grid['texto_cta']?></span>
                          </a>
                        </div>
                      <?
                      endif;
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?
          endif;
          ?>
        </div>
        <?
      endforeach;
      ?>
    </div>
    <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" class="d-none d-xxxl-block background-nuestro-compromiso position-absolute bottom-0 start-0">
  </div>
  <?
endif;
?>