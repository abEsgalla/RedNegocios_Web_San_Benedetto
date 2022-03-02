<?php
/* Template Name: Page Contacto */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="my-96 mt-218">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-4">
            <div class="row">
              <div class="col-12">
                <div class="text-uppercase text-secondary">GRUPO SAN BENEDETTO</div>
                <h1 class="h2 text-secondary mt-8">Localización y contacto</h1>
              </div>
              <div class="col-12 mt-80">
                <div class="text-uppercase h5 text-secondary">oficinas centrales</div>
              </div>
              <div class="col-12 text-primary my-48">
                <div class="row">
                  <div class="col-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="38" viewBox="0 0 28 38" fill="none">
                      <path d="M23.9052 4.10386C21.2671 1.5018 17.7106 0.0429688 14.0052 0.0429688C10.2998 0.0429688 6.7433 1.5018 4.10521 4.10386C-1.95879 10.1739 0.705206 17.4759 3.24121 22.4419C3.59321 23.1279 3.98721 23.7979 4.39921 24.4519L12.3152 37.0619C12.4952 37.3486 12.745 37.585 13.0413 37.7489C13.3376 37.9127 13.6706 37.9987 14.0092 37.9987C14.3478 37.9987 14.6808 37.9127 14.9771 37.7489C15.2734 37.585 15.5232 37.3486 15.7032 37.0619L23.7032 24.3219C24.0552 23.7559 24.3972 23.1759 24.7032 22.5839C27.2772 17.5759 30.0012 10.1999 23.9052 4.10386ZM21.1372 20.7539C20.8852 21.2479 20.5992 21.7299 20.3052 22.1979L14.0012 32.2399L7.7772 22.3279C7.4292 21.7739 7.09321 21.2079 6.79521 20.6239C3.58521 14.3339 3.62521 10.2379 6.92721 6.93186C8.81563 5.07826 11.3561 4.0398 14.0022 4.0398C16.6483 4.0398 19.1888 5.07826 21.0772 6.93186C24.4012 10.2579 24.4192 14.3999 21.1372 20.7539Z" fill="#69B3E7"/>
                      <path d="M14 8C12.8133 8 11.6533 8.35189 10.6666 9.01118C9.67989 9.67047 8.91085 10.6075 8.45673 11.7039C8.0026 12.8003 7.88378 14.0067 8.11529 15.1705C8.3468 16.3344 8.91825 17.4035 9.75736 18.2426C10.5965 19.0818 11.6656 19.6532 12.8295 19.8847C13.9933 20.1162 15.1997 19.9974 16.2961 19.5433C17.3925 19.0892 18.3295 18.3201 18.9888 17.3334C19.6481 16.3467 20 15.1867 20 14C20 12.4087 19.3679 10.8826 18.2426 9.75736C17.1174 8.63214 15.5913 8 14 8ZM14 16C13.6044 16 13.2178 15.8827 12.8889 15.6629C12.56 15.4432 12.3036 15.1308 12.1522 14.7654C12.0009 14.3999 11.9613 13.9978 12.0384 13.6098C12.1156 13.2219 12.3061 12.8655 12.5858 12.5858C12.8655 12.3061 13.2219 12.1156 13.6098 12.0384C13.9978 11.9613 14.3999 12.0009 14.7654 12.1522C15.1308 12.3036 15.4432 12.56 15.6629 12.8889C15.8827 13.2178 16 13.6044 16 14C16 14.5304 15.7893 15.0391 15.4142 15.4142C15.0391 15.7893 14.5304 16 14 16Z" fill="#69B3E7"/>
                    </svg>
                  </div>
                  <div class="col-10">
                    <div class="row">
                      <div class="col-12 text-uppercase fw-bolder mt-8">
                        dirección
                      </div>
                      <div class="col-12 mt-24 text-secondary-light">
                        Camino del Pinarejo, s/n <br>
                        46390 San Antonio de Requena <br>
                        Valencia – España <br>
                        Lat.: 39° 32’ 51.2376” <br>
                        Alt.: -1° 7‘ 59.7504” <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 text-primary my-48">
                <div class="row">
                  <div class="col-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                      <path d="M41.3824 27.9762L41.3064 26.3222L28.3404 24.4702L25.7104 29.6182C22.9333 28.0553 20.3948 26.102 18.1724 23.8182C15.8639 21.5986 13.8966 19.0497 12.3344 16.2542L17.9344 13.4542L12.3344 0.410156L10.8144 0.630156C8.24084 0.985189 5.85664 2.18045 4.0324 4.03016C-2.3136 10.3722 0.1704 22.7982 9.6864 32.3122C15.6484 38.2742 22.7524 41.4762 28.7884 41.4762C30.4756 41.5346 32.1575 41.2542 33.7345 40.6517C35.3116 40.0492 36.7519 39.1367 37.9704 37.9682C39.2151 36.6398 40.1631 35.0619 40.7514 33.3392C41.3396 31.6165 41.5547 29.7884 41.3824 27.9762ZM35.1424 35.1402C30.5424 39.7402 20.1824 37.1402 12.5144 29.4842C4.8464 21.8282 2.2584 11.4562 6.8584 6.85816C7.71566 5.98844 8.76516 5.33216 9.9224 4.94216L12.7624 11.5682L10.5484 12.6742C10.0688 12.9144 9.64213 13.2481 9.29351 13.6557C8.94489 14.0634 8.68136 14.5367 8.51847 15.0477C8.35557 15.5588 8.2966 16.0972 8.34502 16.6314C8.39344 17.1656 8.54827 17.6847 8.8004 18.1582C10.5514 21.2949 12.7535 24.1574 15.3364 26.6542C17.8334 29.2066 20.6838 31.3875 23.8004 33.1302C24.2802 33.3917 24.8076 33.5544 25.3514 33.6086C25.8952 33.6629 26.4443 33.6077 26.9664 33.4462C27.4781 33.288 27.9523 33.0273 28.3601 32.68C28.7679 32.3328 29.1007 31.9062 29.3384 31.4262L30.6304 28.8382L37.3664 29.8002C37.2899 31.7894 36.5005 33.6847 35.1424 35.1402Z" fill="#69B3E7"/>
                      <path d="M37 21H41C40.9942 15.6975 38.8852 10.6138 35.1357 6.8643C31.3862 3.11483 26.3025 1.00582 21 1V5C25.242 5.00476 29.3089 6.692 32.3084 9.69155C35.308 12.6911 36.9952 16.758 37 21Z" fill="#69B3E7"/>
                      <path d="M29 21H33C32.9968 17.8184 31.7315 14.768 29.4818 12.5182C27.232 10.2685 24.1816 9.00318 21 9V13C23.1217 13 25.1566 13.8429 26.6569 15.3431C28.1571 16.8434 29 18.8783 29 21Z" fill="#69B3E7"/>
                    </svg>
                  </div>
                  <div class="col-10">
                    <div class="row">
                      <div class="col-12 text-uppercase fw-bolder mt-8">
                        Teléfono / FAX
                      </div>
                      <div class="col-12 mt-24 text-secondary-light">
                        Tel. +34 96 232 20 00 <br>
                        Fax +34 96 232 06 16
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 text-primary my-48">
                <div class="row">
                  <div class="col-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="38" viewBox="0 0 40 38" fill="none">
                      <path d="M26 4.89066L14 0.890656L0 5.55666V37.7747L14 33.1067L26 37.1067L40 32.4407V0.222656L26 4.89066ZM16 5.77266L24 8.43866V32.2247L16 29.5587V5.77266ZM4 8.44066L12 5.77266V29.5567L4 32.2227V8.44066ZM36 29.5567L28 32.2247V8.44066L36 5.77466V29.5567Z" fill="#69B3E7"/>
                    </svg>
                  </div>
                  <div class="col-10">
                    <div class="row">
                      <div class="col-12 text-uppercase fw-bolder mt-8">
                        Cómo Llegar
                      </div>
                      <div class="col-12 mt-24 text-secondary-light">
                        Salida 285 de la A-3, dirección estación del AVE. 
                        Pasar la vía del AVE hacia camino rural y girar a la izquierda. 
                        A 3 km girar a la derecha.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-80">
                <div class="text-uppercase h5 text-secondary">Otras</div>
              </div>
              <div class="col-12 text-primary my-48">
                <div class="row">
                  <div class="col-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="38" viewBox="0 0 28 38" fill="none">
                      <path d="M23.9052 4.10386C21.2671 1.5018 17.7106 0.0429688 14.0052 0.0429688C10.2998 0.0429688 6.7433 1.5018 4.10521 4.10386C-1.95879 10.1739 0.705206 17.4759 3.24121 22.4419C3.59321 23.1279 3.98721 23.7979 4.39921 24.4519L12.3152 37.0619C12.4952 37.3486 12.745 37.585 13.0413 37.7489C13.3376 37.9127 13.6706 37.9987 14.0092 37.9987C14.3478 37.9987 14.6808 37.9127 14.9771 37.7489C15.2734 37.585 15.5232 37.3486 15.7032 37.0619L23.7032 24.3219C24.0552 23.7559 24.3972 23.1759 24.7032 22.5839C27.2772 17.5759 30.0012 10.1999 23.9052 4.10386ZM21.1372 20.7539C20.8852 21.2479 20.5992 21.7299 20.3052 22.1979L14.0012 32.2399L7.7772 22.3279C7.4292 21.7739 7.09321 21.2079 6.79521 20.6239C3.58521 14.3339 3.62521 10.2379 6.92721 6.93186C8.81563 5.07826 11.3561 4.0398 14.0022 4.0398C16.6483 4.0398 19.1888 5.07826 21.0772 6.93186C24.4012 10.2579 24.4192 14.3999 21.1372 20.7539Z" fill="#69B3E7"/>
                      <path d="M14 8C12.8133 8 11.6533 8.35189 10.6666 9.01118C9.67989 9.67047 8.91085 10.6075 8.45673 11.7039C8.0026 12.8003 7.88378 14.0067 8.11529 15.1705C8.3468 16.3344 8.91825 17.4035 9.75736 18.2426C10.5965 19.0818 11.6656 19.6532 12.8295 19.8847C13.9933 20.1162 15.1997 19.9974 16.2961 19.5433C17.3925 19.0892 18.3295 18.3201 18.9888 17.3334C19.6481 16.3467 20 15.1867 20 14C20 12.4087 19.3679 10.8826 18.2426 9.75736C17.1174 8.63214 15.5913 8 14 8ZM14 16C13.6044 16 13.2178 15.8827 12.8889 15.6629C12.56 15.4432 12.3036 15.1308 12.1522 14.7654C12.0009 14.3999 11.9613 13.9978 12.0384 13.6098C12.1156 13.2219 12.3061 12.8655 12.5858 12.5858C12.8655 12.3061 13.2219 12.1156 13.6098 12.0384C13.9978 11.9613 14.3999 12.0009 14.7654 12.1522C15.1308 12.3036 15.4432 12.56 15.6629 12.8889C15.8827 13.2178 16 13.6044 16 14C16 14.5304 15.7893 15.0391 15.4142 15.4142C15.0391 15.7893 14.5304 16 14 16Z" fill="#69B3E7"/>
                    </svg>
                  </div>
                  <div class="col-10">
                    <div class="row">
                      <div class="col-12 text-uppercase fw-bolder mt-8">
                        sede granada
                      </div>
                      <div class="col-12 mt-24 text-secondary-light">
                        Parque La Presa, S.A. <br>
                        Finca La Presa, s/n <br>
                        18300 Loja (Granada) <br>
                        Tfno.: (+34) 958 325 535 <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="offset-2 col-6">
            <div class="row">
              <div class="col-12">
                <?=wp_get_attachment_image(665, "full", "", array( 'class' => '' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
                <?=wp_get_attachment_image(666, "full", "", array( 'class' => 'mt-112' , 'alt' => 'Banner Home Slider' , 'title' => 'Banner Home Slider') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6 bg-primary"> 
        <div class="row">
          <div class="col-7 offset-4">
            <div class="row">
              <div class="col-12 text-white py-48">
                <div class="fw-bold h3">
                  Formulario de contacto
                </div>
                <div class="mt-64">
                  Lorem ipsum dolor sit amet consectetur adipiscing elit hac facilisis, 
                  metus aptent rhoncus tristique curabitur semper fusce nunc integer, 
                  auctor leo dis eros vehicula suscipit dignissim sodales.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 bg-secondary"> 
        
      </div>
    </div>
  </div>
</section>

<section class="my-96">
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