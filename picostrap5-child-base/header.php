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
        <?php
        $custom_classes = '';
        if ( is_main_query() ) {
            if ( is_front_page() ) {
              //var_dump('PAGINA INICIO');
              $custom_classes .= ' ';
              $logo = 20;
            }
            if ( is_page() && !is_front_page()) {
              //var_dump('PAGINA NORMAL');
              $custom_classes .= ' ';
              $logo = 20;
            }
            if ( is_archive()  && !is_front_page()) {
              //var_dump('PAGINA ARCHIVE');
              $custom_classes .= ' bg-white ';
              $logo = 637;
            }
            if ( is_search()  && !is_front_page()) {
              //var_dump('BUSCADOR');
              $custom_classes .= ' ';
              $logo = 20;
            }
            if ( is_singular()  && !is_front_page() && !is_page() && get_post_type()!='landing') {
              //var_dump('POST SIMPLE');
              $custom_classes .= ' bg-white ';
              $logo = 637;
            }
            if ( is_singular()  && !is_front_page() && !is_page() && get_post_type()=='landing') {
              //var_dump('LANDING');
              $custom_classes .= ' bg-white ';
              $logo = 637;
            }
            if ( is_home() && !is_front_page()) {
              //var_dump('PAGINA POSTS');
              $custom_classes .= ' bg-primary ';
              $logo = 20;
            }
        }
        ?>
        <div class="fixed-top" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

          <a class="skip-link visually-hidden-focusable" href="#theme-main"><?php esc_html_e( 'Skip to content', 'picostrap' ); ?></a>

          <nav class="force-transition zi-1050 shadow navbar <?=$custom_classes?> <?php echo get_theme_mod('picostrap_header_navbar_expand','navbar-expand-lg'); ?> <?php echo get_theme_mod('picostrap_header_navbar_position')." ". get_theme_mod('picostrap_header_navbar_color_scheme','navbar-dark').' '. get_theme_mod('picostrap_header_navbar_color_choice','bg-dark'); ?>" aria-label="Main Navigation" >
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
                      ?>
                      <a href="<?=get_home_url()?>" class="custom-logo-link" rel="home" aria-current="page">
                        <?=wp_get_attachment_image($logo, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                      </a>
                      <?
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
                    'walker' => new bootstrap_5_wp_nav_menu_walker_ext()
                ));
                ?>
                
                <?php if (get_theme_mod('enable_search_form')): ?>
                  <form action="<?php echo bloginfo('url') ?>" method="get" id="header-search-form">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="s" value="<?php the_search_query(); ?>">
                  </form> 
                <?php endif ?>

              </div> <!-- .collapse -->
            </div> <!-- .container -->
          </nav> <!-- .site-navigation -->
                    
          <!--TEST OFFCANVAS-->          
          <?php
            get_template_part( 'template-parts/general/seccion', 'header_menu');
          ?>
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