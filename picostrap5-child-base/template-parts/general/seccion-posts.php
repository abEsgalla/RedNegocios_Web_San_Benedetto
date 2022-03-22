<?php 
  if ( have_posts() ) : 
      while ( have_posts() ) : the_post();
        if(has_post_thumbnail()):
          $custom_url_thumbnail=get_the_post_thumbnail_url();
        else:
          $custom_url_thumbnail=wp_get_attachment_image_url(922, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') );
        endif;
        ?>
        <div class="col-md-3 col-sm-6">
          <div class="card mb-4 <?/*shadow-sm*/?> rounded-0 border-0">
            <a class="text-reset text-decoration-none" href="<?php the_permalink() ?>">
              <div class="contenedor-cursor-custom">
                <div style="background:url('<?=$custom_url_thumbnail?>')" 
                class="bg-custom-post container-scale ratio ratio-3x4 overflow-hidden">
                </div>
              </div>
              <div class="card-body px-0 text-secondary fs-13 name-grid-product">
                  <div class="text-uppercase fw-500 position-relative">
                      <div class="pe-20">
                        <?=mb_strimwidth(wp_strip_all_tags(get_the_title()), 0, 60, '...');?>
                      </div>
                      <span class="position-absolute end-0 top-0 d-none">
                        <?=wp_get_attachment_image(892, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') )?>
                      </span>
                  </div>
                  <div class="card-text mt-8">
                    <?=mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 80, '...');?>
                  </div>
              </div>
            </a>
          </div>
        </div>
        <?
      endwhile;
  else :
      _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
  endif;
?>