<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- wp_head begin -->
    <?php wp_head(); ?>
    <!-- wp_head end -->
  </head>
  <body <?php body_class(); ?> >
    <?php wp_body_open(); ?>  
    
    <?php if(function_exists('lc_custom_header')) lc_custom_header(); else {
      
      //STANDARD NAV
      
      if (get_theme_mod("enable_topbar") ) : ?>
        <!-- ******************* The Topbar Area ******************* -->
        <div id="wrapper-topbar" class="py-2 <?php echo get_theme_mod('topbar_bg_color_choice','bg-light') ?> <?php echo get_theme_mod('topbar_text_color_choice','text-dark') ?>">
          <div class="container">
            <div class="row">
              <div id="topbar-content" class="col-md-12 text-left text-center text-md-left small"> <?php echo do_shortcode(get_theme_mod('topbar_content')) ?>	</div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        

        <!-- ******************* The Navbar Area ******************* -->
        <div class="fixed-top" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

          <a class="skip-link visually-hidden-focusable" href="#theme-main"><?php esc_html_e( 'Skip to content', 'picostrap' ); ?></a>

          
          <nav class="bg-primary zi-1050 navbar <?php echo get_theme_mod('picostrap_header_navbar_expand','navbar-expand-lg'); ?> <?php echo get_theme_mod('picostrap_header_navbar_position')." ". get_theme_mod('picostrap_header_navbar_color_scheme','navbar-dark').' '. get_theme_mod('picostrap_header_navbar_color_choice','bg-dark'); ?>" aria-label="Main Navigation" >
            <div class="container">
              <div id="logo-tagline-wrap">
                  <!-- Your site title as branding in the menu -->
                  <?php if ( ! has_custom_logo() ) { ?>

                    <?php if ( is_front_page() && is_home() ) : ?>

                      <div class="navbar-brand mb-0 h3"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></div>

                    <?php else : ?>

                      <a class="navbar-brand h3" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                    <?php endif; ?>


                  <?php } else {
                    the_custom_logo();
                  } ?><!-- end custom logo -->

                
                  <?php if (!get_theme_mod('header_disable_tagline')): ?>
                    <small id="top-description" class="text-muted d-none d-md-inline-block">
                      <?php bloginfo("description") ?>
                    </small>
                  <?php endif ?>
              
              
                  </div> <!-- /logo-tagline-wrap -->



              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                
                <button class="btn btn-primary ms-auto" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#menu-marcas" aria-controls="menu-marcas">
                  PREVIEW MENU EXPANDED
                </button>

                <?php if (get_theme_mod('enable_search_form')): ?>
                  <form action="<?php echo bloginfo('url') ?>" method="get" id="header-search-form">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="s" value="<?php the_search_query(); ?>">
                  </form> 
                <?php endif ?>

              </div> <!-- .collapse -->
            </div> <!-- .container -->
          </nav> <!-- .site-navigation -->
                    
          <!--TEST OFFCANVAS-->
          <div class="position-relative h-0">
            <div class="h-auto offcanvas offcanvas-top position-sticky bg-white" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="menu-marcas" aria-labelledby="menu-marcasLabel">
              <div class="container">
                <div class="row py-56">
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12 text-uppercase fs-13 fw-bold text-secondary">agua mineral</div>
                      <div class="col-12 mt-24">
                        <div class="row">
                          <div class="col-2">
                            <div class="row">
                              <div class="col-12">
                                <?=wp_get_attachment_image(48, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                              </div>
                              <div class="col-12 mt-10">
                                Fuente Primavera
                              </div>
                            </div>
                          </div>
                          <div class="col-2">
                            <div class="row">
                              <div class="col-12">
                                <?=wp_get_attachment_image(48, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                              </div>
                              <div class="col-12 mt-10">
                                Font Natura
                              </div>
                            </div>
                          </div>
                          <div class="col-2">
                            <div class="row">
                              <div class="col-12">
                                <?=wp_get_attachment_image(48, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                              </div>
                              <div class="col-12 mt-10">
                                San Benedetto
                              </div>
                            </div>
                          </div>
                          <div class="col-2">
                            <div class="row">
                              <div class="col-12">
                                <?=wp_get_attachment_image(48, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                              </div>
                              <div class="col-12 mt-10">
                                Otras marcas
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12 text-uppercase fs-13 fw-bold text-secondary">Refrescos</div>
                      <div class="col-12 mt-24">
                        <div class="row">
                          <div class="col-2">
                            <div class="row">
                              <div class="col-12">
                                <?=wp_get_attachment_image(48, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                              </div>
                              <div class="col-12 mt-10">
                                Enjoy
                              </div>
                            </div>
                          </div>
                          <div class="col-2">
                            <div class="row">
                              <div class="col-12">
                                <?=wp_get_attachment_image(48, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                              </div>
                              <div class="col-12 mt-10">
                                San Benedetto Zero
                              </div>
                            </div>
                          </div>
                          <div class="col-2">
                            <div class="row">
                              <div class="col-12">
                                <?=wp_get_attachment_image(48, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                              </div>
                              <div class="col-12 mt-10">
                                San Benedetto Thè
                              </div>
                            </div>
                          </div>
                          <div class="col-2">
                            <div class="row">
                              <div class="col-12">
                                <?=wp_get_attachment_image(48, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                              </div>
                              <div class="col-12 mt-10">
                                Upgrade
                              </div>
                            </div>
                          </div>
                          <div class="col-2">
                            <div class="row">
                              <div class="col-12">
                                <?=wp_get_attachment_image(48, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                              </div>
                              <div class="col-12 mt-10">
                                Otras marcas
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
          <!--/****/-->

          <?php
          //AS A TEST / DEMO for a mock-up megamenu
          //include("nav-static-mega.php");
          ?>
        </div><!-- #wrapper-navbar end -->

      
    <?php 
    } // END ELSE CASE 
    ?>

<main id='theme-main'>