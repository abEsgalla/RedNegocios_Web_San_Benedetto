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
  
 

<section>
  <div class="container mt-218">
    <div class="row">
      <div class="col-12">
        <div class="row text-secondary">
          <div class="col-12 fs-18">
            SAN BENEDETTO
          </div>
          <div class="col-12 h2 mt-8">
            Noticias
          </div>
          <?php
          if ($remove_elements):        
          ?>
            <div class="col-12 mt-48">
              <div class="row">
                <div class="col-9">
                  <div class="overflow-hidden">  
                    <?php 
                    if(has_post_thumbnail()):
                      the_post_thumbnail('full', ['class' => 'w-100']);    
                    else:
                      echo wp_get_attachment_image(891, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') );
                    endif;
                    ?>                
                  </div>
                </div>
                <div class="col-4 position-absolute top-50 start-50 py-24">
                  <div class="">
                    <div class="card rounded-0 border-0 mb-4 shadow-sm h-100">
                      <div class="card-body text-secondary fs-13 p-80 d-flex flex-column justify-content-center">
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
                          <div class="card-text mt-16 fs-17">
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


<section class="album py-5 bg-light mt-48">
  <div class="container">
    <div class="row">
    <?php
    if ($remove_elements):       
    ?>
      <div class="col-12 mb-64">
        <div class="row">
          <div class="col-3">
            <form role="search" method="get" class="search-form input-group w-auto fs-16 icono-lupa" action="<?=site_url()?>">
                <input type="text" class="form-control px-0 py-10 border-0 border-radius border-bottom" placeholder="Buscar..." data-swplive="false" data-swpengine="default" value="" name="s">
                <input type="hidden" id="swpengine" name="swpengine" value="default">
            </form>
          </div>
          <div class="offset-1 col-8 text-end">
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
                  <span>saber más</span>
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
