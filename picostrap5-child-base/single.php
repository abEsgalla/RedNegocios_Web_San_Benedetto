<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();




if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    
    if (get_the_post_thumbnail_url()){ 
        ?><div class="d-flex container-fluid" style="height:50vh;background:url(<?php echo get_the_post_thumbnail_url(); ?>)  center / cover no-repeat;"></div>
    <?php } else {
        ?><div class="d-flex container-fluid" style="height:20vh;"></div>
    <?php } ?>
    
    <div class="container my-80">
      <div class="row">
        <div class="col-7">
          <div class="row">
            <div class="offset-1 col-10">
              <div class="row text-secondary">
                <div class="col-12 h3">
                  <?php the_title(); ?>
                </div>
                <div class="mt-48">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-5">
          <div class="row">
            <div class="offset-1 col-10">
              <div class="row border-black border-top border-1">
                <div class="col-12 text-secondary fs-18 text-uppercase py-24 fw-500">
                  Categorías
                </div>
                <div class="col-12 d-flex flex-wrap">
                  <?
                  foreach (get_categories() as $key => $value):
                  ?>
                    <a class="text-reset text-decoration-none" href="<?=get_category_link($value->term_id)?>">
                      <div class="d-flex me-8 mb-8 border-secondary border border-1 px-16 py-8 rounded-3">
                        <div class="text-secondary">
                          <?=$value->name?>
                        </div>
                      </div>
                    </a>
                  <?
                  endforeach;
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php
    endwhile;
 else :
     _e( 'Sorry, no posts matched your criteria.', 'picostrap' );
 endif;
 ?>

<section class="d-flex position-relative">
  <div class="bg-secondary">
    <?=wp_get_attachment_image(51, "full", "", array( 'class' => 'opacity-50' , 'alt' => '' , 'title' => '') ); ?>
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
