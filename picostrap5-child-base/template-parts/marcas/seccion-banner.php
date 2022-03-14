<?php
$fields = wp_parse_args( $args );
?>

<?php
if($fields["fondo"]):
?>
  <div class="bg-secondary">
    <?=wp_get_attachment_image($fields["fondo"], "full", "", array( 'class' => 'opacity-75' , 'alt' => '' , 'title' => '') ); ?>
  </div>
<?
endif;
if($fields["texto_superior"] || $fields["texto_principal"] || $fields["texto_cta"]):
?>
  <div class="container-fluid zi-99 top-50 position-absolute translate-middle-y">
    <div class="container">
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
  </div>
<?
endif;
?>