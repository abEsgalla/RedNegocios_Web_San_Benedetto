<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


?>
<section class="gx-4 gx-sm-12">
<?
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    
    if (get_the_post_thumbnail_url()){ 
        ?><div class="d-flex container-fluid" style="height:50vh;background:url(<?php echo get_the_post_thumbnail_url(); ?>)  center / cover no-repeat;"></div>
    <?php } else {
        ?><div class="d-flex container-fluid" style="height:20vh;"></div>
    <?php } ?>
    
    <div class="container my-80">
      <div class="row">
        <div class="col-12 mb-30">
          <div class="row fs-16 text-secondary">
            <div class="col-7">
              <span>
                <?=wp_get_attachment_image(890, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
              </span>
              <span class="ms-12">
                <?=e_('San Benedetto')?>
              </span>
            </div>
            <div class="col-5 d-none">
              <span class="me-18">
                <?=e_('Compartir')?>
              </span>
              <?=wp_get_attachment_image(892, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-7">
          <div class="row">
            <div class="col-12">
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
        <div class="col-12 col-lg-5 mt-lg-0 mt-105">
          <div class="row">
            <div class="col-12 offset-lg-3 col-lg-9">
              <div class="row">
                <div class="col-12 text-secondary fs-18 text-uppercase fw-500">
                  <div class="border-black border-top border-1 py-24">
                  <?=e_('Categorías')?>
                  </div>
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
</section>

<section class="gx-4 gx-sm-12 d-flex position-relative mt-82 mt-md-185 mb-102 mb-lg-150">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center text-secondary mb-0 mb-md-70">
        <div class="text-uppercase fs-18">
          <?=e_('SAN BENEDETTO')?>
        </div>
        <div class="h4">
          <?=e_('Noticias relacionadas')?>
        </div>
      </div>
      <?php 
        $args = array(
          'post__not_in'=> array(get_the_ID()),
          'posts_per_page' => 4
        );
        query_posts( $args );
        get_template_part( 'template-parts/general/seccion', 'posts');
      ?>
    </div>
  </div>
</section>

<section class="gx-4 gx-sm-12">
  <div class="container-fluid position-relative zi-9 bg-secondary-darker py-105">
    <div class="bg-mobile-banner-marcas bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(51, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-lg-3 col-lg-6 text-center text-white">
            <div class="row">
              <div class="col-12 text-uppercase fs-18 pt-20">
                <?=e_('san benedetto')?>
              </div>
              <div class="col-12 h4 mt-10">
                <?=e_('Conoce nuestras marcas')?>
              </div>
              <div class="col-12 mt-32 fs-17">
                <a href="<?=get_permalink(49)?>" class="col-12 text-center">
                  <div class="btn btn-outline-white text-uppercase rounded-0">
                    <span>
                      <?=e_('saber más')?>
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="gx-4 gx-sm-12">
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
