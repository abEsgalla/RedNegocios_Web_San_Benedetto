<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="my-64">
  <div class="container position-relative">
    <div class="row">
      <div class="offset-2 col-8">
        <div class="row text-secondary">
          <?php
          foreach ($seccion['elementos'] as $elemento => $dato):
            $opacity = "opacity-25";
            $w = "100";
            switch ($elemento):
              case 'calcio':
                $w = "200";
                $opacity = "";
                $cols = "col-5";
                $padding = "p-64";
                $align = "justify-content-end";
              break;
              case 'silice':
                $w = "80";
                $cols = "col-2";
                $padding = "p-16";
                $align = "justify-content-center";
              break;
              case 'magnesio':
                $w = "150";
                $opacity = "";
                $cols = "col-5";
                $padding = "p-40";
                $align = "justify-content-start";
              break;
              case 'sulfatos':
                $w = "170";
                $cols = "col-4";
                $padding = "p-40";
                $align = "justify-content-end";
              break;
              case 'cloruros':
                $w = "80";
                $cols = "col-2";
                $padding = "p-16";
                $align = "justify-content-center";
              break;
              case 'sodio':
                $w = "100";
                $cols = "col-2";
                $padding = "p-16";
                $align = "justify-content-center";
              break;
              case 'bicarbonatos':
                $w = "230";
                $cols = "col-4";
                $padding = "p-64";
                $align = "justify-content-start";
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