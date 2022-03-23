<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="banner-redes py-108">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="fs-24 fw-bold text-secondary text-center text-xl-end pe-xl-55 text-uppercase"><?= $seccion['titulo'] ?></div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <a href="#" class="d-flex align-items-center fs-24 lh-20 text-secondary text-decoration-none pe-40"><i class="fa-brands fa-facebook-f fs-16 me-24"></i>FACEBOOK</a>
                <a href="" class="d-flex align-items-center fs-24 lh-20 text-secondary text-decoration-none ps-40"><i class="fa-brands fa-instagram fs-18 me-24"></i>INSTAGRAM</a>
            </div>
        </div>
    </div>
</section>