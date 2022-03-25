<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<section class="banner-redes py-108">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="fs-24 fw-bold text-secondary text-center text-xl-end pe-xl-55 text-uppercase lh-1"><?= $seccion['titulo'] ?></div>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center align-items-center mt-40 mt-lg-0">
                <a href="#" class="d-flex align-items-center fs-24 lh-20 text-secondary text-decoration-none px-12 pe-sm-40 mb-24 mb-sm-0"><i class="fa-brands fa-facebook-f fs-16 me-24"></i>FACEBOOK</a>
                <a href="" class="d-flex align-items-center fs-24 lh-20 text-secondary text-decoration-none px-12 ps-sm-40"><i class="fa-brands fa-instagram fs-18 me-24"></i>INSTAGRAM</a>
            </div>
        </div>
    </div>
</section>