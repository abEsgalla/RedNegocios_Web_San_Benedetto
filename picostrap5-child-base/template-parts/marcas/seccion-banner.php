<?php
$fields = wp_parse_args( $args );
?>

<div class="container-fluid position-relative zi-99 bg-secondary py-96">
  <?php
  if($fields["fondo"]):
  ?>
    <div class="bg-custom-image opacity-80 w-100 h-100 position-absolute top-0 start-0" 
          style="background:url('<?=wp_get_attachment_image_url($fields["fondo"], "full")?>')">
    </div>
  <?
  endif;
  if($fields["texto_superior"] || $fields["texto_principal"] || $fields["texto_cta"]):
  ?>
    <div class="container position-relative">
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
                  <div class="h4 mt-8 mb-0"><?=$fields["texto_principal"]?></div>
                <?
                endif;
                ?>
              </div>
            </div>
            <?
            if($fields["texto_cta"]):
            ?>
            <a href="<?=$fields["link_cta"]?>" class="col-12 text-center">
                <div class="btn btn-outline-white border-2 fw-500 fs-14 text-uppercase mt-40 rounded-0">
                  <span><?=$fields["texto_cta"]?><span>
                </div>
            </a>
            <?
            endif;
            ?>
        </div>
      </div>
    </div>
</div>

<?
endif;
?>