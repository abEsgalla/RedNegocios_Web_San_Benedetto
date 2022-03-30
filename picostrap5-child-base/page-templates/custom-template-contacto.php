<?php
/* Template Name: Page Contacto */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="mt-120 mt-sm-166 mt-lg-218 gx-4 gx-sm-12">
  <div class="container position-relative zi-99">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <div class="text-uppercase text-secondary">GRUPO SAN BENEDETTO</div>
                <h1 class="h2 fs-32 fs-md-64 text-secondary mt-8">Localización y contacto</h1>
              </div>
              <div class="col-12 mt-40 mt-sm-48 mt-xl-80">
                <div class="text-uppercase h5 fs-18 fs-sm-32 text-secondary">oficinas centrales</div>
              </div>
              <div class="col-12 text-primary my-24 my-sm-48">
                <div class="row">
                  <div class="col-2 col-sm-1 col-lg-2 text-lg-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="38" viewBox="0 0 28 38" fill="none">
                      <path d="M23.9052 4.10386C21.2671 1.5018 17.7106 0.0429688 14.0052 0.0429688C10.2998 0.0429688 6.7433 1.5018 4.10521 4.10386C-1.95879 10.1739 0.705206 17.4759 3.24121 22.4419C3.59321 23.1279 3.98721 23.7979 4.39921 24.4519L12.3152 37.0619C12.4952 37.3486 12.745 37.585 13.0413 37.7489C13.3376 37.9127 13.6706 37.9987 14.0092 37.9987C14.3478 37.9987 14.6808 37.9127 14.9771 37.7489C15.2734 37.585 15.5232 37.3486 15.7032 37.0619L23.7032 24.3219C24.0552 23.7559 24.3972 23.1759 24.7032 22.5839C27.2772 17.5759 30.0012 10.1999 23.9052 4.10386ZM21.1372 20.7539C20.8852 21.2479 20.5992 21.7299 20.3052 22.1979L14.0012 32.2399L7.7772 22.3279C7.4292 21.7739 7.09321 21.2079 6.79521 20.6239C3.58521 14.3339 3.62521 10.2379 6.92721 6.93186C8.81563 5.07826 11.3561 4.0398 14.0022 4.0398C16.6483 4.0398 19.1888 5.07826 21.0772 6.93186C24.4012 10.2579 24.4192 14.3999 21.1372 20.7539Z" fill="#69B3E7"/>
                      <path d="M14 8C12.8133 8 11.6533 8.35189 10.6666 9.01118C9.67989 9.67047 8.91085 10.6075 8.45673 11.7039C8.0026 12.8003 7.88378 14.0067 8.11529 15.1705C8.3468 16.3344 8.91825 17.4035 9.75736 18.2426C10.5965 19.0818 11.6656 19.6532 12.8295 19.8847C13.9933 20.1162 15.1997 19.9974 16.2961 19.5433C17.3925 19.0892 18.3295 18.3201 18.9888 17.3334C19.6481 16.3467 20 15.1867 20 14C20 12.4087 19.3679 10.8826 18.2426 9.75736C17.1174 8.63214 15.5913 8 14 8ZM14 16C13.6044 16 13.2178 15.8827 12.8889 15.6629C12.56 15.4432 12.3036 15.1308 12.1522 14.7654C12.0009 14.3999 11.9613 13.9978 12.0384 13.6098C12.1156 13.2219 12.3061 12.8655 12.5858 12.5858C12.8655 12.3061 13.2219 12.1156 13.6098 12.0384C13.9978 11.9613 14.3999 12.0009 14.7654 12.1522C15.1308 12.3036 15.4432 12.56 15.6629 12.8889C15.8827 13.2178 16 13.6044 16 14C16 14.5304 15.7893 15.0391 15.4142 15.4142C15.0391 15.7893 14.5304 16 14 16Z" fill="#69B3E7"/>
                    </svg>
                  </div>
                  <div class="col-10 col-sm-11 col-lg-10">
                    <div class="row">
                      <div class="col-12 text-uppercase fw-bolder mt-8">
                        dirección
                      </div>
                      <div class="col-12 mt-8 mt-sm-24 text-secondary-light">
                        <?=$acf_fields['direccion_oficinas_centrales']?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 text-primary my-24 my-sm-48">
                <div class="row">
                  <div class="col-2 col-sm-1 col-lg-2 text-lg-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                      <path d="M41.3824 27.9762L41.3064 26.3222L28.3404 24.4702L25.7104 29.6182C22.9333 28.0553 20.3948 26.102 18.1724 23.8182C15.8639 21.5986 13.8966 19.0497 12.3344 16.2542L17.9344 13.4542L12.3344 0.410156L10.8144 0.630156C8.24084 0.985189 5.85664 2.18045 4.0324 4.03016C-2.3136 10.3722 0.1704 22.7982 9.6864 32.3122C15.6484 38.2742 22.7524 41.4762 28.7884 41.4762C30.4756 41.5346 32.1575 41.2542 33.7345 40.6517C35.3116 40.0492 36.7519 39.1367 37.9704 37.9682C39.2151 36.6398 40.1631 35.0619 40.7514 33.3392C41.3396 31.6165 41.5547 29.7884 41.3824 27.9762ZM35.1424 35.1402C30.5424 39.7402 20.1824 37.1402 12.5144 29.4842C4.8464 21.8282 2.2584 11.4562 6.8584 6.85816C7.71566 5.98844 8.76516 5.33216 9.9224 4.94216L12.7624 11.5682L10.5484 12.6742C10.0688 12.9144 9.64213 13.2481 9.29351 13.6557C8.94489 14.0634 8.68136 14.5367 8.51847 15.0477C8.35557 15.5588 8.2966 16.0972 8.34502 16.6314C8.39344 17.1656 8.54827 17.6847 8.8004 18.1582C10.5514 21.2949 12.7535 24.1574 15.3364 26.6542C17.8334 29.2066 20.6838 31.3875 23.8004 33.1302C24.2802 33.3917 24.8076 33.5544 25.3514 33.6086C25.8952 33.6629 26.4443 33.6077 26.9664 33.4462C27.4781 33.288 27.9523 33.0273 28.3601 32.68C28.7679 32.3328 29.1007 31.9062 29.3384 31.4262L30.6304 28.8382L37.3664 29.8002C37.2899 31.7894 36.5005 33.6847 35.1424 35.1402Z" fill="#69B3E7"/>
                      <path d="M37 21H41C40.9942 15.6975 38.8852 10.6138 35.1357 6.8643C31.3862 3.11483 26.3025 1.00582 21 1V5C25.242 5.00476 29.3089 6.692 32.3084 9.69155C35.308 12.6911 36.9952 16.758 37 21Z" fill="#69B3E7"/>
                      <path d="M29 21H33C32.9968 17.8184 31.7315 14.768 29.4818 12.5182C27.232 10.2685 24.1816 9.00318 21 9V13C23.1217 13 25.1566 13.8429 26.6569 15.3431C28.1571 16.8434 29 18.8783 29 21Z" fill="#69B3E7"/>
                    </svg>
                  </div>
                  <div class="col-10 col-sm-11 col-lg-10">
                    <div class="row">
                      <div class="col-12 text-uppercase fw-bolder mt-8">
                        Teléfono / FAX
                      </div>
                      <div class="col-12 mt-8 mt-sm-24 text-secondary-light">
                        <?=$acf_fields['telefono_oficinas_centrales']?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 text-primary mb-48 mt-24 my-sm-48 mb-xl-0">
                <div class="row">
                  <div class="col-2 col-sm-1 col-lg-2 text-lg-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="38" viewBox="0 0 40 38" fill="none">
                      <path d="M26 4.89066L14 0.890656L0 5.55666V37.7747L14 33.1067L26 37.1067L40 32.4407V0.222656L26 4.89066ZM16 5.77266L24 8.43866V32.2247L16 29.5587V5.77266ZM4 8.44066L12 5.77266V29.5567L4 32.2227V8.44066ZM36 29.5567L28 32.2247V8.44066L36 5.77466V29.5567Z" fill="#69B3E7"/>
                    </svg>
                  </div>
                  <div class="col-10 col-sm-11 col-lg-10">
                    <div class="row">
                      <div class="col-12 text-uppercase fw-bolder mt-8">
                        Cómo Llegar
                      </div>
                      <div class="col-12 mt-8 mt-sm-24 text-secondary-light">
                        <?=$acf_fields['como_llegar_oficinas_centrales']?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 gx-0 img-version-mobile overflow-hidden road-localizacion-desktop-trigger road-localizacion-tablet-trigger road-localizacion-mobile-trigger">
        <div class="w-100 bg-custom-image py-200 py-sm-422 position-relative d-none d-lg-block road-localizacion-desktop " 
          style="background:url('<?=wp_get_attachment_image_url(1338, "full")?>')">
          <svg class="svg-road-localizacion-l position-absolute mw-100 d-none" xmlns="http://www.w3.org/2000/svg" width="572" height="605" viewBox="0 0 572 605" fill="none">
            <path d="M0.5 251C81.6667 254.167 261.8 305.2 333 484C337.167 494.5 352.3 519.9 379.5 537.5C385.833 545.667 396.3 565 387.5 577C378.7 589 376.167 593 376 593.5C374.667 592.5 371.5 591.1 369.5 593.5C367.5 595.9 368.667 598.5 369.5 599.5C371 600.667 374.2 602.3 375 599.5C375.8 596.7 383 587.667 386.5 583.5L415.5 550.5C417.5 550.833 421.9 551.1 423.5 549.5C425.1 547.9 423.5 543.167 422.5 541C427.167 539.167 436.9 534.7 438.5 531.5C440.5 527.5 458 503 469.5 502.5C478.7 502.1 499.667 491.667 509 486.5C509.333 483.667 514.6 474.5 533 460.5C551.4 446.5 563.667 432 567.5 426.5L515.5 372.5L471 312L418.5 266.5L377 234.5L320.5 205L254.5 185.5L206 169.5L198.5 165L196.5 157C201.167 148.833 210.7 132.3 211.5 131.5C212.3 130.7 221.833 120.5 226.5 115.5C232.5 109.167 244.5 95.2 244.5 90C244.5 84.8 246.167 78.8333 247 76.5L297.5 2.5" stroke="#002D72" stroke-width="6"/>
          </svg>
          <svg class="svg-road-localizacion-r position-absolute mw-100 d-none" xmlns="http://www.w3.org/2000/svg" width="497" height="720" viewBox="0 0 497 720" fill="none">
            <path d="M496.5 717C474.333 717.5 422.5 714.8 386.5 684C350.5 653.2 334.833 649.834 331.5 652C310 644.167 263.8 625.2 251 612C235 595.5 228 586.5 225 575C226.333 574 228.6 571.4 227 569C232.667 567.167 244.7 561.8 247.5 555C250.3 548.2 259.333 539.833 263.5 536.5L272.5 532L276.5 534L279.5 532V529L304.5 521C307.333 520 313.5 516.7 315.5 511.5C318 505 332 493.5 335.5 491C339 488.5 370 459.5 371.5 456C372.7 453.2 374.333 451.167 375 450.5L345 420C336.167 410.333 317.9 390.3 315.5 387.5C312.5 384 280.5 338 276.5 333C273.3 329 239.167 300.333 222.5 286.5C209 276.167 180.5 254.8 174.5 252C168.5 249.2 139.333 233.167 125.5 225.5L56.5 205.5L5 189L3.5 188L3 182L17.5 158.5C25.1667 150.333 41.2 133 44 129C47.5 124 52.5 116.5 52 112.5C51.5 108.5 52 103 57.5 96C61.9 90.4 102.333 31 122 2" stroke="#69B3E7" stroke-width="5"/>
          </svg>
          <img src="https://sanbenedetto.digitalmentapre.com/wp-content/uploads/2022/03/icon-map.png" class="position-absolute localizacion-final">
        </div>
        <div class="w-100 bg-custom-image py-200 py-sm-422 position-relative d-none d-md-block d-lg-none road-localizacion-tablet" 
          style="background:url('<?=wp_get_attachment_image_url(1339, "full")?>')">
          <svg class="svg-road-localizacion-l position-absolute mw-100 d-none" xmlns="http://www.w3.org/2000/svg" width="590" height="604" viewBox="0 0 590 604" fill="none">
            <path d="M0.5 255C120 259 233.5 289.5 347.5 474C359 493 374 513.5 399.5 537.5C414.167 551.305 411.8 569 403 581C394.2 593 394.667 591.5 394.5 592C393.167 591 391 591.1 389 593.5C387 595.9 388.667 599 389.5 600C396.5 603.5 396.5 594.5 396.5 594.5C396.5 594.5 399 591.667 402.5 587.5L436 550.5C438 550.833 441.4 550.6 443 549C444.6 547.4 444 545.167 443 543C447.667 541.167 457.9 536.2 459.5 533C461.5 529 479.5 506 491 505.5C500.2 505.1 515.167 495.667 524.5 490.5C524.833 487.667 530.1 478.5 548.5 464.5C566.9 450.5 582.167 434 586 428.5L534.5 375L489 313L432 264.5L390.5 234.5L341.5 207.5L270.5 188L225 173L216.5 170L215 159.5C219.667 151.333 230.2 135.3 231 134.5C231.8 133.7 239.333 124.5 244 119.5C250 113.167 265.458 96.6109 264.5 91.5C263 83.5 267.167 78.3333 268 76L318 2.5" stroke="#002D72" stroke-width="6"/>
          </svg>
          <svg class="svg-road-localizacion-r position-absolute mw-100 d-none" xmlns="http://www.w3.org/2000/svg" width="521" height="720" viewBox="0 0 521 720" fill="none">
            <path d="M520 717C497.833 717.5 451.5 719 412.5 700.5C393.797 691.628 367 664 340 652C318.5 644.167 270.3 625.7 257.5 612.5C241.5 596 228.5 586.5 225.5 575C226.833 574 229.1 571.4 227.5 569C233.167 567.167 243.421 563.119 247.5 557C252.5 549.5 261.333 540.833 265.5 537.5L273 532L277.5 531H281L307.5 519C310 516 312 516.2 314 511C316.5 504.5 333 492.5 336.5 490C340 487.5 367 462 368.5 458.5C369.7 455.7 375.333 451.167 376 450.5L345.5 420C336.667 410.333 318.4 390.3 316 387.5C313 384 281 338 277 333C273.8 329 239.667 300.333 223 286.5C209.5 276.167 181.5 254.8 175.5 252C169.5 249.2 140.333 232.167 126.5 224.5L57 205.5L5.5 189L4 188L3.5 182L18 158.5C25.6667 150.333 41.7 133 44.5 129C48 124 53 116.5 52.5 112.5C52 108.5 52.5 103 58 96C62.4 90.4 102.833 31 122.5 2" stroke="#69B3E7" stroke-width="5"/>
          </svg>
          <img src="https://sanbenedetto.digitalmentapre.com/wp-content/uploads/2022/03/icon-map.png" class="position-absolute localizacion-final">
        </div>
        <div class="custom-mapa-road-mobile w-100 bg-custom-image py-200 py-sm-422 position-relative d-block d-md-none road-localizacion-mobile" 
          style="background:url('<?=wp_get_attachment_image_url(1342, "full")?>')">
          <svg class="svg-road-localizacion-l position-absolute mw-100 d-none" xmlns="http://www.w3.org/2000/svg" width="270" height="289" viewBox="0 0 270 289" fill="none">
            <path d="M0.5 123C39.0076 124.513 109.5 139 156.5 227.5C159.705 233.535 166 243.59 176.673 253C183.173 258.731 186.778 269.776 182.603 275.51C178.428 281.244 177.226 283.155 177.147 283.394C176.515 282.916 175.012 282.248 174.063 283.394C173.115 284.541 173.668 285.783 174.063 286.261C174.775 286.819 176.221 287.152 177 286C177.853 284.739 177.5 284.5 177.5 284L197.5 261.5C198.449 261.659 199.241 261.265 200 260.5C200.759 259.735 200.474 259.035 200 258C201.5 256.5 207.741 253.529 208.5 252C209.449 250.089 217.544 239.739 223 239.5C227.365 239.309 235.818 234.736 240.246 232.267C240.404 230.913 242.903 226.533 251.632 219.844C260.362 213.154 266.181 206.226 268 203.598L243.33 177.795L222.218 148.887L197.31 127.146L177.622 111.855L150.817 97.7595L119.504 88.4419L96.4947 80.7967L92.9365 78.6465L91.9877 74.8239C94.2016 70.9217 98.7245 63.0216 99.1041 62.6394C99.4836 62.2571 104.006 57.3833 106.22 54.9942C109.067 51.968 114.76 45.2943 114.76 42.8097C114.76 40.325 115.551 37.4739 115.946 36.359L139.905 1" stroke="#002D72" stroke-width="3"/>
          </svg>
          <svg class="svg-road-localizacion-r position-absolute mw-100 d-none" xmlns="http://www.w3.org/2000/svg" width="237" height="340" viewBox="0 0 237 340" fill="none">
            <path d="M236 337.5C225.473 337.737 205 337 187 323.5C170.886 311.415 167.5 309.5 158.685 305.307C148.474 301.586 126.534 292.579 120.455 286.31C112.856 278.474 109.532 274.2 108.107 268.738C108.74 268.263 109.817 267.029 109.057 265.889C111.748 265.018 117.463 262.469 118.792 259.24C120.122 256.011 124.412 252.037 126.391 250.454L130.665 248.317L132.5 249L145.862 243.093C147.208 242.618 150.137 241.051 151.086 238.581C152.274 235.494 158.923 230.033 160.585 228.846C162.247 227.658 176.288 214.162 177 212.5C177.57 211.17 178.183 210.317 178.5 210L164.5 195.5C160.305 190.909 153.14 183.33 152 182C150.575 180.338 132.9 156.375 131 154C129.48 152.1 113.915 138.57 106 132C99.5887 127.093 86.9733 116.671 84.1238 115.341C81.2743 114.012 67.4227 106.397 60.8531 102.756L27.5 92.5L4 84.947L2.67627 84L2 82L8.5 71C12.141 67.1215 20.1702 58.3997 21.5 56.5C23.1622 54.1254 24.7375 51.3997 24.5 49.5C24.2625 47.6003 25.388 43.8244 28 40.5C30.0896 37.8405 46.1601 14.7725 55.5 1" stroke="#69B3E7" stroke-width="3"/>
          </svg>
          <img src="https://sanbenedetto.digitalmentapre.com/wp-content/uploads/2022/03/icon-map.png" class="position-absolute localizacion-final">
        </div>
    </div>
  </div>
</section>

<section class="position-relative gx-4 gx-sm-12">
  <div class="py-274 bg-primary-brighter position-absolute top-0 translate-custom-contacto-lg-y w-100">
  </div>
</section>

<section class="gx-4 gx-sm-12">
  <div class="container position-relative">
    <div class="row mb-0 mb-sm-64 mb-lg-120">
      <div class="col-12 col-lg-6">
        <div class="row">
          <div class="col-12 mt-48 mt-sm-64 mt-xl-228">
            <div class="text-uppercase h5 fs-18 fs-sm-32 text-secondary">Otras</div>
          </div>
          <div class="col-12 text-primary mb-48 mt-24 mb-48 my-sm-48">
            <div class="row">
              <div class="col-2 col-sm-1 col-lg-2 text-lg-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="38" viewBox="0 0 28 38" fill="none">
                  <path d="M23.9052 4.10386C21.2671 1.5018 17.7106 0.0429688 14.0052 0.0429688C10.2998 0.0429688 6.7433 1.5018 4.10521 4.10386C-1.95879 10.1739 0.705206 17.4759 3.24121 22.4419C3.59321 23.1279 3.98721 23.7979 4.39921 24.4519L12.3152 37.0619C12.4952 37.3486 12.745 37.585 13.0413 37.7489C13.3376 37.9127 13.6706 37.9987 14.0092 37.9987C14.3478 37.9987 14.6808 37.9127 14.9771 37.7489C15.2734 37.585 15.5232 37.3486 15.7032 37.0619L23.7032 24.3219C24.0552 23.7559 24.3972 23.1759 24.7032 22.5839C27.2772 17.5759 30.0012 10.1999 23.9052 4.10386ZM21.1372 20.7539C20.8852 21.2479 20.5992 21.7299 20.3052 22.1979L14.0012 32.2399L7.7772 22.3279C7.4292 21.7739 7.09321 21.2079 6.79521 20.6239C3.58521 14.3339 3.62521 10.2379 6.92721 6.93186C8.81563 5.07826 11.3561 4.0398 14.0022 4.0398C16.6483 4.0398 19.1888 5.07826 21.0772 6.93186C24.4012 10.2579 24.4192 14.3999 21.1372 20.7539Z" fill="#69B3E7"/>
                  <path d="M14 8C12.8133 8 11.6533 8.35189 10.6666 9.01118C9.67989 9.67047 8.91085 10.6075 8.45673 11.7039C8.0026 12.8003 7.88378 14.0067 8.11529 15.1705C8.3468 16.3344 8.91825 17.4035 9.75736 18.2426C10.5965 19.0818 11.6656 19.6532 12.8295 19.8847C13.9933 20.1162 15.1997 19.9974 16.2961 19.5433C17.3925 19.0892 18.3295 18.3201 18.9888 17.3334C19.6481 16.3467 20 15.1867 20 14C20 12.4087 19.3679 10.8826 18.2426 9.75736C17.1174 8.63214 15.5913 8 14 8ZM14 16C13.6044 16 13.2178 15.8827 12.8889 15.6629C12.56 15.4432 12.3036 15.1308 12.1522 14.7654C12.0009 14.3999 11.9613 13.9978 12.0384 13.6098C12.1156 13.2219 12.3061 12.8655 12.5858 12.5858C12.8655 12.3061 13.2219 12.1156 13.6098 12.0384C13.9978 11.9613 14.3999 12.0009 14.7654 12.1522C15.1308 12.3036 15.4432 12.56 15.6629 12.8889C15.8827 13.2178 16 13.6044 16 14C16 14.5304 15.7893 15.0391 15.4142 15.4142C15.0391 15.7893 14.5304 16 14 16Z" fill="#69B3E7"/>
                </svg>
              </div>
              <div class="col-10 col-sm-11 col-lg-10">
                <div class="row">
                  <div class="col-12 text-uppercase fw-bolder mt-8">
                    Planta Granada
                  </div>
                  <div class="col-12 mt-8 mt-sm-24 text-secondary-light">
                    <?=$acf_fields['direccion_sede_granada']?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 d-none d-lg-block img-version-mobile">
        <div class="w-100 h-100 bg-custom-image py-228" 
        style="background:url('<?=wp_get_attachment_image_url(666, "full")?>')">
      </div>
    </div>
  </div>
</section>
          
     
<section class="">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6 bg-primary"> 
        <div class="row">
          <div class="col-12 offset-sm-2 col-sm-8 col-lg-7 offset-lg-4">
            <div class="row px-sm-0 px-12">
              <div class="col-12 text-white mt-40 mt-sm-64 mt-lg-120">
                <div class="fw-bold h3 fs-32 fs-sm-48">
                  Formulario <br>de <span class="text-decoration-underline">contacto</span>
                </div>
              </div>
              <div class="col-12 offset-lg-2 col-lg-10 text-white">
                <div class="mt-24 mt-sm-40 mt-lg-64 mb-40 mb-sm-96 mb-xl-48 fs-17">
                  <?=$acf_fields['texto_formulario']?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 bg-secondary"> 
        <div class="row px-sm-0 px-12">
          <div class="col-12 offset-sm-2 col-sm-8 offset-lg-1 col-lg-6">
            <div class="contact-form-contacto my-48 my-sm-64 my-lg-80">
              <?=do_shortcode('[contact-form-7 id="1372" title="Formulario de contacto 1"]')?>
            </div>
            <form class="d-none my-48 my-sm-64 my-lg-80 text-white rm-bootstrap-form-style needs-validation" novalidate>
              <div class="mt-3">
                <label for="inputNombre" class="form-label fs-12 mb-1">Nombre y apellidos *</label>
                <input type="text" placeholder="Ej. Jesús Carrillo Laso" 
                class="form-control bg-transparent border-0 border-bottom text-white pt-0 ps-0" 
                id="inputNombre" required>
              </div>
              <div class="mt-3">
                <label for="inputNombre" class="form-label fs-12 mb-1">E-mail *</label>
                <input type="text" placeholder="Ej. name@name.com" 
                class="form-control bg-transparent border-0 border-bottom text-white pt-0 ps-0" 
                id="inputNombre" required>
              </div>
              <div class="mt-3">
                <label for="inputNombre" class="form-label fs-12 mb-1">E-mail *</label>
                <input type="text" placeholder="Ej. name@name.com" 
                class="form-control bg-transparent border-0 border-bottom text-white pt-0 ps-0" 
                id="inputNombre" required>
              </div>
              <div class="mt-3">
                <label for="inputNombre" class="form-label fs-12 mb-1">Comentario *</label>
                <input type="text" placeholder="Escribe un comentario" 
                class="form-control bg-transparent border-0 border-bottom text-white pt-0 ps-0" 
                id="inputNombre" required>
              </div>
              <div class="my-28 form-check align-items-center d-flex">
                <input type="checkbox" class="my-0 p-12 form-check-input rounded-0 bg-transparent" 
                id="exampleCheck1" required>
                <label class="form-check-label ms-16" for="exampleCheck1">
                  Acepto los <a class="text-decoration-none text-primary" href="#">Términos y Condiciones</a>.
                </label>
              </div>
              <div class="my-28 border border-1 border-primary p-12">
                <div class="row fs-12">
                  <div class="col-4 fw-500 text-center">
                    Responsable
                  </div>
                  <div class="col-8">
                    Agua Mineral San Benedetto S.A.U, con domicilio social en San Antonio de Requena (Valencia) 
                    en el camino del pinarejo s/n, 46390.
                  </div>
                </div>
              </div>
              <div class="text-end">
                <button type="submit" 
                class="btn border-2 fw-500 btn-primary text-white text-uppercase fs-14 rounded-0 px-40">
                  ENVIAR
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-56 gx-4 gx-sm-12">
  <div class="container bg-white">
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