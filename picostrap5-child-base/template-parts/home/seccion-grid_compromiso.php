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
  <div class="col-12 mt-64">
    <div class="row">
      <?
      foreach ($fields["elemento_grid"] as $key => $single_grid):
        ?>
        <div <?=($single_grid['fondo_color'])?'style="background-color:'.$single_grid['fondo_color'].'"':'';?> 
        class="col-12 h-75-vw <?=(($key+1)%2==0)?'order-0':'order-1'?>
        <?=($single_grid['tamano'])? $single_grid['tamano'] : '' ;?> 
        <?=($single_grid['fondo'])? 'g-0' : 'd-flex align-items-center' ;?>
        ">
          <?
          if($single_grid['fondo']):
          ?>
            <div class="position-relative bg-black overflow-hidden h-100">
              <?=wp_get_attachment_image($single_grid['fondo'], "full", "", array( 'class' => 'ratio ratio-16x9 opacity-75' , 'alt' => '' , 'title' => '') ); ?>
            </div>
          <?
          else:
          ?>
            <div class="row text-white">
              <div class="offset-2 col-8">
                <div class="row">
                  <?
                  if($single_grid['texto_superior']):
                  ?>
                    <div class="col-12 text-uppercase fs-18"><?=$single_grid['texto_superior']?></div>
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
                    <div class="col-12">
                      <a href="<?=$single_grid['link_cta']?>" class="btn btn-outline-primary-brighter text-uppercase mt-40 fs-14 rounded-0">
                        <?=$single_grid['texto_cta']?>
                      </a>
                    </div>
                  <?
                  endif;
                  ?>
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
  </div>
  <?
endif;
?>