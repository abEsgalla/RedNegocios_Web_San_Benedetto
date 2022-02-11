<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();

/*if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    endwhile;
 endif;*/
 ?>

<section>
  <div class="container-fluid g-0 position-relative">
    <div class="row g-0">
      <div class="col-12">
        <div class="position-relative">
          <?=wp_get_attachment_image($acf_fields['cabecera']['fondo'], "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
        </div>
        <div class="d-flex align-items-center justify-content-center container-fluid zi-99 top-0 position-absolute">
          <?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
 

<?php get_footer();
