<?php
/* Template Name: Page Historia */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="pt-166 pb-92">
  <div class="container">
    <div class="row text-center text-secondary">
      <div class="col-12 text-uppercase fs-18">
        <?=_e('GRUPO SAN BENEDETTO')?>
      </div>
      <h1 class="col-12  h2 fs-42 fs-lg-64  mt-8">
        <?=_e('Historia')?>
      </h1>
    </div>
  </div>
</section>

<section class="text-white">
    <div class="container-fluid position-relative zi-99 <?/*bg-secondary*/?> pt-112 pb-149 py-lg-84">
        <div class="bg-parallax <?/*opacity-60*/?> w-100 h-100 position-absolute top-0 start-0" 
        style="background:url('/wp-content/uploads/2022/05/img-cabecera-2.png')"></div>
        <div class="container position-relative">
          <div class="row">
            <div class="col-12 offset-lg-3 col-lg-6 text-center text-white">
              <div class="row">
                <div class="col-12 offset-sm-1 col-sm-10">
                  <div class="row">
                    <div class="col-12  h2 fs-42 fs-lg-64 ">
                      <?=$acf_fields['banner_superior_ano']?>
                    </div>
                    <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 fs-32 fs-lg-40 mt-24 mt-28">
                      <?=$acf_fields['banner_superior_title']?>
                    </div>
                    <div class="col-12  fs-14 fs-lg-17  mt-24 mt-24 fw-500 white-line-timeline-trigger">
                      <?=$acf_fields['banner_superior_texto']?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

<section class="my-64 my-sm-96 gx-sm-12 gx-4">
  <div class="container position-relative">
    <div class="white-line-timeline"></div>
    <div class="row">
      <div class="d-none d-sm-inline-block col-12 col-sm-6 position-relative">
        <div class="row">
          <div class="offset-2 col-10 offset-sm-0 col-sm-10">
            <div class="row text-start text-sm-end text-secondary">
              <div class="col-12 opacity-25 ano-2002">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-left ano-timeline-2002">2002</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2002']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-23">
                    <?=$acf_fields['descripcion_2002']?>
                  </div>
                  <div class="col-12 mt-65">
                    <?=wp_get_attachment_image($acf_fields['imagen_2002'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-200 opacity-25 ano-2008">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-left ano-timeline-2008">2008</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2008']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2008']?>
                  </div>
                  <div class="col-12 mt-82">
                    <?=wp_get_attachment_image($acf_fields['imagen_2008'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                  <div class="col-12 mt-24">
                    I.F.S (International Food Standard)<br>
                    ISO/FSSC22000 <br>
                    ISO9001
                  </div>
                </div>
              </div>
              <div class="col-12 mt-290 opacity-25 ano-2013">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-left ano-timeline-2013">2013</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2013']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2013']?>
                  </div>
                  <div class="col-12 mt-64">
                    <?=wp_get_attachment_image($acf_fields['imagen_2013'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-106 opacity-25 ano-2019">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-left ano-timeline-2019">2019</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2019']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2019']?>
                  </div>
                  <div class="col-12 mt-56">
                    <?=wp_get_attachment_image($acf_fields['imagen_2019'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-106 opacity-25 ano-2022">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-left ano-timeline-2022">2022</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2022']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2022']?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-none d-sm-inline-block col-12 col-sm-6 border-dashed-custom position-relative">
        <div class="border-fill"></div>
        <div class="row">
          <div class="offset-2 col-10 offset-sm-2 col-sm-10">
            <div class="row text-start text-secondary">
              <div class="col-12 opacity-25 ano-2006">
                <div class="row">
                  <div class="col-12">
                    <?=wp_get_attachment_image($acf_fields['imagen_2006'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                  <div class="col-12  h2 fs-42 fs-lg-64  mt-53">
                    <span class="ano-timeline-right ano-timeline-2006">2006</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2006']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2006']?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-87 opacity-25 ano-2009">
                <div class="row">
                  <div class="col-12">
                    <?=wp_get_attachment_image($acf_fields['imagen_2009'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                  <div class="col-12  h2 fs-42 fs-lg-64  mt-53">
                    <span class="ano-timeline-right ano-timeline-2009">2009</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2009']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2009']?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-187 opacity-25 ano-2016">
                <div class="row">
                  <div class="col-12">
                    <?=wp_get_attachment_image($acf_fields['imagen_2016'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                  <div class="col-12  h2 fs-42 fs-lg-64  mt-53">
                    <span class="ano-timeline-right ano-timeline-2016">2016</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2016']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2016']?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-155 opacity-25 ano-2020">
                <div class="row">
                  <div class="col-12">
                    <?=wp_get_attachment_image($acf_fields['imagen_2020'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                  <div class="col-12  h2 fs-42 fs-lg-64  mt-53">
                    <span class="ano-timeline-right ano-timeline-2020">2020</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2020']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2020']?> 
                  </div>
                </div>
              </div>
              <div class="col-12 mt-225">
                <div class="row">
                  <div class="col-12">
                    <?=wp_get_attachment_image($acf_fields['imagen_2022'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      
      <div class="d-inline-block d-sm-none col-12 col-sm-6 border-dashed-custom-mobile position-relative">
        <div class="border-fill"></div>
        <div class="row">
          <div class="offset-2 col-10 offset-sm-2 col-sm-10">
            <div class="row text-start text-secondary">
              <div class="col-12 opacity-25 ano-2002-mobile">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-right-mobile ano-timeline-2002-mobile ano-timeline-right">2002</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2002']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-23">
                    <?=$acf_fields['descripcion_2002']?>
                  </div>
                  <div class="col-12 mt-24">
                    <?=wp_get_attachment_image($acf_fields['imagen_2002'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-56 opacity-25 ano-2006-mobile">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64  mt-53">
                    <span class="ano-timeline-right-mobile ano-timeline-2006-mobile ano-timeline-right">2006</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2006']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2006']?>
                  </div>
                  <div class="col-12 mt-24">
                    <?=wp_get_attachment_image($acf_fields['imagen_2006'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-56 opacity-25 ano-2008-mobile">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-right-mobile ano-timeline-2008-mobile ano-timeline-right">2008</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2008']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2008']?>
                  </div>
                  <div class="col-12 mt-24">
                    <?=wp_get_attachment_image($acf_fields['imagen_2008'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                  <div class="col-12 mt-12 mt-sm-24">
                    I.F.S (International Food Standard)<br>
                    ISO/FSSC22000 <br>
                    ISO9001
                  </div>
                </div>
              </div>
              <div class="col-12 mt-56 opacity-25 ano-2009-mobile">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64  mt-53">
                    <span class="ano-timeline-right-mobile ano-timeline-2009-mobile ano-timeline-right">2009</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2009']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2009']?>
                  </div>
                  <div class="col-12 mt-24">
                    <?=wp_get_attachment_image($acf_fields['imagen_2009'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-56 opacity-25 ano-2013-mobile">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-right-mobile ano-timeline-2013-mobile ano-timeline-right">2013</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2013']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2013']?>
                  </div>
                  <div class="col-12 mt-24">
                    <?=wp_get_attachment_image($acf_fields['imagen_2013'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-56 opacity-25 ano-2016-mobile">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64  mt-53">
                    <span class="ano-timeline-right-mobile ano-timeline-2016-mobile ano-timeline-right">2016</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2016']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2016']?>
                  </div>
                  <div class="col-12 mt-24">
                    <?=wp_get_attachment_image($acf_fields['imagen_2016'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-56 opacity-25 ano-2019-mobile">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-right-mobile ano-timeline-2019-mobile ano-timeline-right">2019</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2019']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2019']?>
                  </div>
                  <div class="col-12 mt-24">
                    <?=wp_get_attachment_image($acf_fields['imagen_2019'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-56 opacity-25 ano-2020-mobile">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64  mt-53">
                    <span class="ano-timeline-right-mobile ano-timeline-2020-mobile ano-timeline-right">2020</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2020']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2020']?>
                  </div>
                  <div class="col-12 mt-24">
                    <?=wp_get_attachment_image($acf_fields['imagen_2020'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-56 opacity-25 ano-2022-mobile">
                <div class="row">
                  <div class="col-12  h2 fs-42 fs-lg-64 ">
                    <span class="ano-timeline-right-mobile ano-timeline-2022-mobile ano-timeline-right">2022</span>
                  </div>
                  <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-8 mt-sm-24">
                    <?=$acf_fields['titulo_2022']?>
                  </div>
                  <div class="col-12  fs-14 fs-lg-17  mt-24">
                    <?=$acf_fields['descripcion_2022']?> 
                  </div>
                </div>
              </div>
              <div class="col-12 mt-24 last-image-mobile">
                <div class="row">
                  <div class="col-12">
                    <?=wp_get_attachment_image($acf_fields['imagen_2022'], "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
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

<section>
  <div class="container-fluid position-relative zi-9 bg-secondary-darker py-150 py-sm-105">
    <div class="bg-mobile-banner-marcas bg-custom-image bg-postion-x-center opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(51, "full")?>')"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 offset-lg-3 col-lg-6 text-center text-white">
            <div class="row">
              <div class="col-12 text-uppercase fs-18 pt-20">
                <?=_e('san benedetto')?>
              </div>
              <div class="col-12  h4 fs-24 fs-sm-32 fs-lg-40 mt-10">
                <?=_e('Conoce nuestras marcas')?>
              </div>
              <div class="col-12 mt-32  fs-14 fs-lg-17 ">
                <a href="<?=get_permalink(49)?>" class="col-12 text-center">
                  <div class="btn btn-outline-white text-uppercase rounded-0">
                    <span>
                      <?=_e('saber más')?>
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

<section class="my-55">
  <div class="container">
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