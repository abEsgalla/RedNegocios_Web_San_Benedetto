<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="my-64 mb-sm-64 mb-120">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 offset-lg-2 col-lg-8">
        <div class="row text-secondary row-valores">
          <?php
          foreach ($seccion['elementos'] as $elemento => $dato):
            $opacity = "opacity-25";
            $w = "100";
            switch ($elemento):
              case 'calcio':
                $w = "200";
                $opacity = "";
                $cols = "col-6 col-sm-5 position-relative";
                $padding = "my-20 my-sm-0 p-16 p-sm-64";
                $align = "justify-content-end justify-content-sm-end";
              break;
              case 'silice':
                $w = "80";
                $cols = "col-6 col-sm-2";
                $padding = "my-20 my-sm-0 p-16 p-sm-16";
                $align = "justify-content-start justify-content-sm-center";
              break;
              case 'magnesio':
                $w = "150";
                $opacity = "";
                $cols = "col-6 col-sm-5 position-relative";
                $padding = "my-20 my-sm-0 p-16 p-sm-40";
                $align = "justify-content-end justify-content-sm-start";
              break;
              case 'sulfatos':
                $w = "170";
                $cols = "col-6 col-sm-4 position-relative";
                $padding = "my-20 my-sm-0 p-16 p-sm-40";
                $align = "justify-content-start justify-content-sm-end";
              break;
              case 'cloruros':
                $w = "80";
                $cols = "col-6 col-sm-2 position-relative translate-50px";
                $padding = "my-20 my-sm-0 p-16 p-sm-16";
                $align = "justify-content-end justify-content-sm-center";
              break;
              case 'sodio':
                $w = "100";
                $cols = "col-6 col-sm-2 translate-25px";
                $padding = "my-20 my-sm-0 p-16 p-sm-16";
                $align = "justify-content-start justify-content-sm-center";
              break;
              case 'bicarbonatos':
                $w = "230";
                $cols = "col-12 col-sm-4 position-relative";
                $padding = "my-20 my-sm-0 p-16 p-sm-64";
                $align = "justify-content-center justify-content-sm-start";
              break;
            endswitch;
            ?>
            <div class="<?=$cols?> d-flex <?=$align?>">
              <div class="d-flex flex-column justify-content-center align-items-center position-relative">
                <div class="zi-99 <?=$padding?> d-flex flex-column text-center fw-500">
                  <span class="text-uppercase fs-20"><?=$elemento?></span>
                  <span class="fs-12"><?=$dato?></span>
                </div>
                <svg class="position-absolute ratio ratio-1x1 start-50 top-50 translate-middle <?=$opacity?>" 
                  xmlns="http://www.w3.org/2000/svg" width="<?=$w?>" height="<?=$w?>" viewBox="0 0 219 207" fill="none">
                  <path d="M50.9124 20.8406C98.1311 -12.7607 162.836 -2.78743 195.434 43.1165C228.033 89.0204 230.606 143.207 168.962 187.073C121.743 220.675 57.0386 210.702 24.4401 164.798C-8.15833 118.894 -15.069 67.7937 50.9124 20.8406Z" 
                  fill="<?=$seccion['color_fondo']?>"/>
                </svg>
              </div>
            </div>
            <?
          endforeach;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>