<?php
$fields = wp_parse_args( $args );
?>

<?php
if($fields["fondo"]):
?>
  <div class="top-0 position-absolute h-100 w-100 overflow-hidden bg-secondary">
    <?=wp_get_attachment_image($fields["fondo"], "full", "", array( 'class' => 'fix-banner opacity-75' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
  </div>
<?
endif;
if($fields["texto_superior"] || $fields["texto_principal"] || $fields["texto_cta"]):
?>
  <div class="container zi-99">
    <div class="row">
        <div class="col-12 text-center text-uppercase">
          <div class="row">
            <div class="col-6 offset-3">
              <?
              if($fields["texto_superior"]):
              ?>
                <div class="fs-18"><?=$fields["texto_superior"]?></div>
              <?
              endif;
              if($fields["texto_principal"]):
              ?>
                <div class="h4 mt-8"><?=$fields["texto_principal"]?></div>
              <?
              endif;
              ?>
            </div>
          </div>
          <?
          if($fields["texto_cta"]):
          ?>
          <a href="<?=$fields["link_cta"]?>" class="col-12 text-center">
              <div class="btn btn-outline-white text-uppercase mt-40 rounded-0">
                <?=$fields["texto_cta"]?>
              </div>
          </a>
          <?
          endif;
          ?>
      </div>
    </div>
  </div>
<?
endif;
?>