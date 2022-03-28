<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


if ( !is_front_page() && is_home() && get_query_var( 'paged') == 0 ):   
  $remove_elements = true;
else:
  $remove_elements = false;
endif;

?>
  
 

<section class="gx-4 gx-sm-12">
  <div class="container mt-138 mt-166 mt-lg-218">
    <div class="row">
      <div class="col-12">
        <div class="row text-secondary">
          <div class="col-12 fs-18 text-center text-lg-start">
            SAN BENEDETTO
          </div>
          <div class="col-12 h2 fs-32 fs-sm-64 mt-8 text-center text-lg-start">
            Noticias
          </div>
          <?php
          if ($remove_elements):        
          ?>
            <div class="col-12 mt-64 mt-sm-94 mt-lg-48 contenedor-cursor-custom">
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="order-1 order-lg-0 col-12 px-md-48 px-lg-12 position-relative">
                      <div class="position-relative position-lg-absolute zi-1 mt-n88 mt-lg-88 end-0 col-12 col-lg-6">
                        <div class="card rounded-0 border-0 shadow-sm h-100">
                          <div class="card-body text-secondary fs-13 p-24 px-sm-80 py-sm-48 py-lg-80 px-lg-80 d-flex flex-column justify-content-center">
                              <div class="position-relative">
                                <span>
                                  <?=wp_get_attachment_image(890, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                                </span>
                                <span class="fs-13 ms-12">
                                  San Benedetto
                                </span>
                                <span class="position-absolute end-0 zi-99">
                                  <?=wp_get_attachment_image(892, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                                </span>
                              </div>
                              <div class="text-uppercase fw-bold fs-24 mt-30">
                                <?=mb_strimwidth(wp_strip_all_tags(get_the_title()), 0, 80, '...');?>
                              </div>
                              <div class="card-text mt-16 fs-17 d-none d-sm-block">
                                <?=mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 150, '...');?>
                              </div>
                              <div class="mt-16 fw-500 fs-16 text-uppercase">
                                <a class="text-reset" href="<?php the_permalink() ?>">
                                  Leer
                                </a>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gx-0 gx-md-24 order-0 order-lg-1 col-12 col-lg-9">
                      <div style="background:url('<?=the_post_thumbnail_url('full')?>')" 
                        class="py-123 py-sm-253 py-lg-333 overflow-hidden bg-custom-image container-scale">            
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
          endif;    
          ?>
        </div>
      </div>
    </div> 
  </div>
</section>


<section class="album pb-48 bg-light mt-96 gx-4 gx-sm-12">
  <div class="container">
    <div class="row">
    <?php
    if ($remove_elements):       
    ?>
      <div class="col-12 mb-sm-64">
        <div class="row">
          <div class="col-12 col-sm-4 col-lg-3">
            <form role="search" method="get" class="search-form input-group w-auto fs-16 icono-lupa" action="<?=site_url()?>">
                <input type="text" class="form-control px-0 py-10 border-0 border-radius border-bottom" placeholder="Buscar..." data-swplive="false" data-swpengine="default" value="" name="s">
                <input type="hidden" id="swpengine" name="swpengine" value="default">
            </form>
          </div>
          <div class="mt-70 mt-sm-0 col-12 col-sm-8 offset-lg-1 col-lg-8 text-sm-end">
            <?
            foreach (get_categories() as $key => $value):
            ?>
              <a class="text-decoration-none fs-16 fw-500 text-secondary-light mx-12 text-uppercase" href="<?=get_category_link($value->term_id)?>">
                <?=$value->name?>
              </a>
            <?
            endforeach;
            ?>
          </div>
        </div>
      </div>
    <?php
    endif;     
    ?>
      <?php 
      if ($remove_elements):  
        $args = array(
          'post__not_in'=> array(get_the_ID())
        );
        query_posts( $args );
      endif; 
        get_template_part( 'template-parts/general/seccion', 'posts');
        //wp_reset_query();
      ?>
    </div>

    <div class="row">
      <div class="col lead text-center w-100 <?=(picostrap_pagination())?'mt-96 mb-150':''?>">
        <div class="d-inline-block"><?php picostrap_pagination() ?></div>
      </div><!-- /col -->
    </div> <!-- /row -->
  </div>
</section>


<section class="gx-4 gx-sm-12">
  <div class="container-fluid position-relative zi-9 bg-secondary-darker py-105">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(51, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-lg-3 col-lg-6 text-center text-white">
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
                    <span>saber más</span>
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
