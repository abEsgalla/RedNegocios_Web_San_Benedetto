<?php
  $fields = wp_parse_args( $args );
?>

<div class="col-12 text-center text-secondary">
  <?php
  if($fields["texto_superior"]):
  ?>
    <div class="h5 text-uppercase"><?=$fields["texto_superior"]?></div>
  <?
  endif;
  if($fields["texto_principal"]):
  ?>
    <div class="h2 fw-bold"><?=$fields["texto_principal"]?></div>
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
      foreach ($fields["elemento_grid"] as $single_grid):
        ?>
        <div <?=($single_grid['fondo_color'])?'style="background-color:'.$single_grid['fondo_color'].'"':'';?> 
        class="col-12 
        <?=($single_grid['tamano'])? $single_grid['tamano'] : '' ;?> 
        <?=($single_grid['fondo'])? 'g-0' : 'd-flex align-items-center' ;?>
        ">
          <?
          if($single_grid['fondo']):
          ?>
            <div class="position-relative">
              <?=wp_get_attachment_image($single_grid['fondo'], "full", "", array( 'class' => 'ratio ratio-16x9' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
            </div>
          <?
          else:
          ?>
            <div class="row text-white">
              <?
              if($single_grid['texto_superior']):
              ?>
                <div class="col-12 text-uppercase h5"><?=$single_grid['texto_superior']?></div>
              <?
              endif;
              if($single_grid['texto_principal']):
              ?>
                <div class="col-12 fw-bold h2"><?=$single_grid['texto_principal']?></div>
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
                  <a href="<?=$single_grid['link_cta']?>" class="btn btn-outline-primary-brighter text-uppercase mt-36">
                    <?=$single_grid['texto_cta']?>
                  </a>
                </div>
              <?
              endif;
              ?>
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