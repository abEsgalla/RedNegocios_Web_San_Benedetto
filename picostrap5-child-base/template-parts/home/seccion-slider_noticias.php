<?php
$fields = wp_parse_args( $args );

$args_wp = array(
  'post_type' => 'post',
  'posts_per_page' => 6
);

// The Query
$the_query = new WP_Query( $args_wp );
 
// The Loop
$html_slide_post="";
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $html_slide_post.="<div class='swiper-slide text-center text-secondary'>
          <a class='text-decoration-none text-reset' href='".get_the_permalink()."'>
            ".wp_get_attachment_image(get_post_thumbnail_id(), 'full', '', array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') )
            ."<div class='text-start mt-16 text-uppercase'>".get_the_title()."</div>
            <div class='text-start mt-2 text-truncate'>
              ".get_the_content()."
            </div>
          </a>
        </div>";
    }

} 
/* Restore original Post Data */
wp_reset_postdata();

?>


<div class="col-12 text-center text-secondary">
  <div class="h5 text-uppercase">SAN BENEDETTO</div>
  <div class="h2 fw-bold">Noticias</div>
</div>
<div class="col-12 mt-64">
    <div class="swiper swiper-home-noticias">
      <div class="swiper-wrapper">
        <?=$html_slide_post?>
      </div>
    </div>
</div>
<div class="col-12 text-center">
  <a href="<?=esc_url(get_post_type_archive_link('post'));?>" class="btn btn-outline-secondary text-uppercase mt-64">
    ver todas
  </a>
</div>