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
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/src/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/src/favicon/favicon-32x32.png" sizes="32x32">
  	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/src/favicon/favicon-96x96.png" sizes="96x96">
  	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/src/favicon/favicon-256x256.png" sizes="256x256">
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
        $icon_color = '#ffffff';
        $logo = 772;
        $txt_color = ' text-white ';
        if ( is_main_query() ) {
            if ( is_front_page() ) {
              //var_dump('PAGINA INICIO');
              $custom_classes .= ' ';
              //$logo = 772;
              //$txt_color = ' text-white ';
            }
            if ( is_page() && !is_front_page()) {
              $colorMenu = get_field('tipo_menu');
              if(get_the_ID()!=49):
                //var_dump('PAGINA NORMAL NOT MARCAS');
                  $custom_classes .= ' bg-secondary ';
                //$logo = 772;
                //$txt_color = ' text-white ';
              endif;
            }
            if ( is_archive()  && !is_front_page()) {
              //var_dump('PAGINA ARCHIVE');
              $custom_classes .= ' bg-white ';
              $logo = 771;
              $txt_color = ' text-secondary ';
              $icon_color = '#002D72';
            }
            if ( is_search()  && !is_front_page()) {
              //var_dump('BUSCADOR');
              $custom_classes .= ' ';
              //$logo = 772;
              //$txt_color = ' text-white ';
            }
            if ( is_singular()  && !is_front_page() && !is_page() && get_post_type()!='landing') {
              //var_dump('POST SIMPLE');
              $custom_classes .= ' bg-white ';
              $logo = 771;
              $txt_color = ' text-secondary ';
              $icon_color = '#002D72';
            }
            if(is_single() && get_post_type()=='post'){
              $colorMenu = 'menu-dark';
            }
            if ( is_singular()  && !is_front_page() && !is_page() && get_post_type()=='landing') {
              //var_dump('LANDING');
              $colorMenu = 'menu-dark';
              $custom_classes .= ' bg-white ';
              $logo = 771;
              $txt_color = ' text-secondary ';
              $icon_color = '#002D72';
            }
            if ( is_home() && !is_front_page()) {
              $colorMenu = ' menu-dark';
              //var_dump('PAGINA POSTS');
              $custom_classes .= ' bg-primary ';
              //$logo = 772;
              //$txt_color = ' text-white ';
            }
        }
        ?>
        <div class="fixed-top" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
          <nav class="force-transition zi-1050 navbar <?php echo get_theme_mod('picostrap_header_navbar_expand','navbar-expand-lg'); ?> <?php echo get_theme_mod('picostrap_header_navbar_position')." ". get_theme_mod('picostrap_header_navbar_color_scheme','').' '. get_theme_mod('picostrap_header_navbar_color_choice', $colorMenu); ?>" aria-label="Main Navigation" >
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
                        <?=wp_get_attachment_image(get_theme_mod( 'custom_logo' ), "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                        <div class="svg-container-custom d-flex align-items-center justify-content-start d-none">
                          <svg class="" xmlns="http://www.w3.org/2000/svg" width="42" height="30" viewBox="0 0 42 30" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7158 1.92095C11.1444 1.81248 11.4659 2.24635 11.841 2.13788C13.3412 1.64978 14.1448 2.46329 15.5379 3.38527C16.0737 3.76491 16.8774 3.2768 17.306 3.05987C21.1101 1.2159 24.8071 0.293919 28.9862 0.0227478C33.3797 -0.139955 37.7732 0.56509 41.7916 2.30059C42.1666 2.35482 41.9523 2.51752 41.7916 2.51752C37.8267 2.68023 34.237 3.05987 30.4864 4.09032C27.5932 4.8496 24.8606 5.66311 22.1817 7.18167C21.378 7.61555 21.0565 8.646 21.378 9.51375C21.6459 10.3815 21.9138 11.3035 22.396 12.1712C23.039 13.3644 23.6819 14.4491 24.432 15.588C25.1821 16.6727 26.093 17.5947 27.0574 18.5166C30.3257 21.3911 31.6116 21.608 32.4153 22.313C32.7367 22.53 32.3617 22.53 32.1474 22.4757C31.6116 22.3673 30.9686 22.1503 30.4328 21.9334C28.0754 21.1199 26.1465 19.6556 24.1105 18.3539C25.1821 21.2826 26.3073 23.9943 26.3073 27.1941C26.3073 27.5738 26.093 27.5738 26.0394 27.3568C25.5036 25.4586 25.075 23.7231 24.1105 21.8792C23.3068 20.3606 22.5032 19.0047 21.4316 17.7574C19.6635 15.588 18.324 13.744 15.4307 12.4424C14.7878 12.1712 14.0377 12.1712 13.4483 12.6051C10.2872 14.9372 7.76895 17.8116 5.25074 21.0656C3.054 23.9401 1.2859 27.2484 0.107158 29.8516C0.107158 30.1228 0.053579 29.9601 0 29.8516C0.214316 24.8078 1.60737 19.5471 4.17916 15.2626C6.00084 12.2797 8.19758 9.78492 10.7158 7.50708C11.6802 6.5851 11.6266 5.175 11.198 4.03608C11.0373 3.60221 11.1444 3.16834 11.1444 2.73446C11.1444 2.40906 10.7158 2.30059 10.7158 1.92095Z" fill="#002867"/>
                          </svg>
                        </div>
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
                  $lang_item = 
                  '<li class="menu-item menu-item-type-post_type menu-item-object-page nav-item nav-item-language">
                    <a href="#" class="nav-link  fw-500 text-uppercase fs-13 letter-spacing-1x3">
                      Es 
                      <i class="fa-solid fa-chevron-down"></i>
                    </a>
                  </li>';
                  wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s'.$lang_item.'</ul>',
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