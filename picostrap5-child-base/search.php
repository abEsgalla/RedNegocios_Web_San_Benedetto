<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section>
  <div class="container mt-218">
    <div class="row">
      <div class="col-12">
        <div class="row text-secondary">
          <div class="col-12">
            SAN BENEDETTO
          </div>
          <div class="col-12 h2 mt-8">
            <?php 
								printf(
									/* translators: %s: query term */
									esc_html__( 'Resultados de : %s', 'picostrap' ),
									'<span class="text-primary">' . get_search_query() . '</span>'
								);
						?>
          </div>
        </div>
      </div>
    </div> 
  </div>
</section>

<section class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <?php 
        get_template_part( 'template-parts/general/seccion', 'posts');
      ?>
    </div>

    <div class="row">
      <div class="col lead text-center w-100 <?=(picostrap_pagination())?'mt-96 mb-150':''?>">
        <div class="d-inline-block"><?php picostrap_pagination() ?></div>
      </div><!-- /col -->
    </div <!-- /row -->
  </div>
</section>

<section class="d-flex position-relative">
  <div class="bg-secondary">
    <?=wp_get_attachment_image(51, "full", "", array( 'class' => 'opacity-75' , 'alt' => '' , 'title' => '') ); ?>
  </div>
  <div class="container-fluid zi-99 position-absolute top-50 translate-middle-y">
    <div class="container">
      <div class="row">
        <div class="offset-3 col-6 text-center text-white">
          <div class="row">
            <div class="col-12 text-uppercase fs-18 pt-20">
              san benedetto
            </div>
            <div class="col-12 h4 mt-10">
              Conoce nuestras marcas
            </div>
            <div class="col-12 mt-32 fs-17">
              <a href="#" class="col-12 text-center">
                <div class="btn btn-outline-white text-uppercase rounded-0">
                  saber más              
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container py-56">
    <div class="row">
      <div class="col-12 position-relative">
        <?php
            get_template_part( 'template-parts/general/seccion', 'slider_logos', get_field('slider_logos', 'options'));
        ?>
      </div>
    </div>
  </div>
</section>
 
<?php get_footer();
