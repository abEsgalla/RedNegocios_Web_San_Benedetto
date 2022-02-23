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
            Noticias
          </div>
          <div class="col-12 mt-48">
            <div class="row">
              <div class="col-8">
                <div class="ratio ratio-16x9 overflow-hidden">
                  <?php the_post_thumbnail('full', ['class' => 'w-100 top-50 translate-middle-y']);    ?>
                </div>
              </div>
              <div class="col-4 position-absolute top-50 start-50 py-24">
                <div class="ratio ratio-16x9">
                  <div class="card rounded-0 border-0 mb-4 shadow-sm h-100">
                    <div class="card-body text-secondary fs-13 px-80 d-flex flex-column justify-content-center">
                        <div class="text-uppercase fw-bold fs-24">
                          Fuente Primavera renueva su imagen y lanza varias novedades por su 25º aniver...
                        </div>
                        <div class="card-text mt-8 fs-17">
                          La marca de agua mineral cambia su identidad visual, 
                          presenta nuevos lanzamientos y será el Agua Oficial de Valencia Capital Mundial del Diseño.
                        </div>
                        <div class="mt-16 fs-16 text-uppercase">
                          Leer
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
</section>

<section class="album py-5 bg-light mt-48">
  <div class="container">
    <div class="row">
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
              ?>
              <div class="col-md-3 col-sm-6">
                <div class="card mb-4 shadow-sm rounded-0">
                  <a class="text-reset text-decoration-none" href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('full', ['class' => 'w-100']);    ?>
                    <div class="card-body text-secondary fs-13">
                        <div class="text-uppercase">
                            <?php the_title() ?>
                        </div>
                        <div class="card-text mt-8 text-truncate">
                          <?=get_the_content()?>
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
    </div>

    <div class="row">
      <div class="col lead text-center w-100">
        <div class="d-inline-block"><?php picostrap_pagination() ?></div>
      </div><!-- /col -->
    </div> <!-- /row -->
  </div>
</section>

<section class="d-flex position-relative">
  <div class="bg-secondary">
    <?=wp_get_attachment_image(51, "full", "", array( 'class' => 'opacity-75' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
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
