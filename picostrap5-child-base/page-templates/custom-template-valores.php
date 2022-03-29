<?php
/* Template Name: Page Valores */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>

<section class="text-vision">
  <div class="container-fluid position-relative zi-9 bg-black pt-138 pt-md-270 pb-md-317 pb-150">
    <div class="bg-parallax opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(606, "full")?>')"></div>
      <div class="container position-relative">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="row text-white text-uppercase text-center text-md-start">
            <div class="col-12 fs-18">
              GRUPO SAN BENEDETTO
            </div>
            <h1 class="col-12 mt-8 h2 text-primary">
              Visión
            </h1>
            <div class="col-12 fs-24 mt-48 fw-bolder">
              Ser la <span class="text-primary fst-italic">Total Beverage Company</span> que eligen las personas para hidratarse y refrescarse, 
              donde quieran y cuando quieran, a través de bebidas que saben bien y hacen sentir bien.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid container-lg mt-lg-n120">
    <div class="row">
      <div class="col-12 col-lg-6 d-none d-md-block g-0 text-mision order-2 order-lg-1">
      </div>
      <div class="col-12 col-lg-6 g-lg-0 order-1 order-lg-2 mt-n80 mt-lg-0 px-32 px-lg-0">
        <?=wp_get_attachment_image(607, "full", "", array( 'class' => 'w-100 position-relative d-none d-lg-block img-parallax' , 'alt' => '' , 'title' => '') ); ?>
        <?=wp_get_attachment_image(1253, "full", "", array( 'class' => 'w-100 position-relative d-lg-none' , 'alt' => '' , 'title' => '') ); ?>
      </div>
      <div class="col-12 col-lg-6 g-lg-0 d-block bg-primary-brighter order-3 py-md-166 py-105 px-112 text-center text-lg-start mt-70 mt-md-270 mt-lg-0">
        <div class="text-secondary fs-16 fs-md-18">ÉSTA ES NUESTRA</div>
        <div class="fs-32 fs-md-64 fw-bold text-secondary">Misión</div>
      </div>
      <div class="col-12 col-lg-6 g-lg-0 d-block order-4 py-65 py-lg-40 py-xl-112 py-xxl-145 px-56" data-aos="fade-up">
        <div class="text-secondary text-uppercase fw-bold fs-18 fs-md-24">
          «Integrar calidad, seguridad y capacidad de innovación con un profundo respeto por el medio ambiente, 
          el territorio y el desarrollo de las personas.»  
        </div>
        <div class="text-secondary mt-12 fs-16 fs-md-18">
          ― Enrico Zoppas, Presidente de Gruppo Acqua Minerale San Benedetto S.p.A.
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 px-0 col-sm-6 g-0 pe-sm-0 ps-sm-24 ps-lg-0">
        <?=wp_get_attachment_image(610, "full", "", array( 'class' => 'position-relative zi-99 center-image w-100' , 'alt' => '' , 'title' => '') ); ?>
      </div>
      <div class="col-6 px-0 col-sm-6 g-0 ps-sm-0 pe-sm-24 pe-lg-0">
        <?=wp_get_attachment_image(609, "full", "", array( 'class' => 'position-relative zi-99 center-image w-100' , 'alt' => '' , 'title' => '') ); ?>
      </div>
    </div>
  </div>
</section>

<section class="my-96">
  <div class="container">
    <div class="row text-secondary">
      <div class="col-12 text-uppercase text-center fs-18">
        descubre nuestros
      </div>
      <div class="col-12 h2 text-center mt-8">
        Valores
      </div>
      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-lg-6 mt-85">
                <div class="row">
                  <div class="offset-1 col-10">
                    <div class="row">
                      <div class="col-12 fs-96 fw-bold text-primary">
                        01
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" fill="none">
                            <path d="M35.9336 34.2918C35.9336 41.0214 41.3384 46.4742 48.0008 46.4742C54.6632 46.4742 60.068 41.0214 60.068 34.2918C60.068 27.5622 54.6632 22.1094 48.0008 22.1094" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path d="M62.6488 54.0573C60.7864 55.4685 56.092 51.3885 54.0088 52.1085C51.8488 52.8573 50.5816 58.9533 48.3448 58.9821C46.0888 59.0109 44.6488 52.9437 42.4888 52.2717C40.348 51.6093 35.7688 55.8141 33.9064 54.4797C32.1016 53.1933 34.4728 47.4525 33.0808 45.5709C31.6888 43.6893 25.5544 44.3709 24.844 42.2589C24.1048 40.0797 29.3944 36.8253 29.3656 34.5597C29.3368 32.2749 23.9704 29.1741 24.6328 26.9949C25.2952 24.8349 31.4488 25.3341 32.764 23.4429C34.0312 21.6189 31.4872 15.9261 33.34 14.5245C35.2024 13.1229 39.8968 17.1933 41.98 16.4733C44.14 15.7245 45.4072 9.62851 47.644 9.59971C49.9 9.57091 51.34 15.6381 53.5 16.3101C55.6408 16.9725 60.22 12.7677 62.0824 14.1021C63.8872 15.3885 61.516 21.1293 62.908 23.0109C64.3 24.8925 70.4344 24.2109 71.1448 26.3229C71.884 28.5021 66.5944 31.7565 66.6232 34.0221C66.652 36.3069 72.0184 39.4077 71.356 41.5869C70.6936 43.7469 64.54 43.2477 63.2248 45.1389C61.9672 46.9533 64.5112 52.6461 62.6488 54.0573Z" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10"/>
                            <path d="M63.0904 49.209L76.7992 78.8922L66.0184 76.569L60.8536 86.3994L48.3448 58.9818L35.1448 86.3994L29.98 76.569L19.1992 78.8922L24.1048 68.2746" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M33.5414 47.8359L27.9062 60.0471" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </span>
                      </div>
                      <div class="col-12 fs-24 fw-bold text-uppercase text-secondary-light">
                        Liderazgo en calidad.
                      </div>
                      <div class="col-12 mt-24 fs-17 fw-500 text-secondary-lighter">
                        Nuestra máxima prioridad es poder garantizar una oferta de productos asequibles, 
                        capaz de satisfacer las distintas necesidades de consumo y con los mejores estándares de calidad. 
                        Somos la primera envasadora de agua mineral en España y uno de los principales fabricantes de refrescos del país: 
                        nuestra gama de productos cubre la mayor parte del segmento de bebidas analcohólicas, 
                        y lo hace bajo los máximos niveles de seguridad alimentaria.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 mt-80">
                <div class="row">
                  <div class="offset-1 col-10">
                    <div class="row">
                      <div class="col-12 fs-96 fw-bold text-primary">
                        02
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" fill="none">
                            <path d="M44.9102 25.7192C46.5998 25.0568 48.4334 24.6152 50.4302 24.6152" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M71.3869 46.7618C71.3869 54.6818 67.5469 61.4691 61.8637 65.6739C59.5597 67.2867 58.1773 69.8786 58.1773 72.7874C58.1773 74.2466 57.5629 75.5331 56.4877 76.5027C55.4125 77.3091 54.0301 77.7986 52.8013 77.4722C49.8829 76.829 46.3501 76.0131 44.0461 75.3699C42.6637 75.0435 41.5885 73.757 41.5885 72.1346C41.5885 69.5522 40.3597 67.2866 38.3629 65.9906C32.3725 61.949 28.3789 54.9986 28.3789 46.925C28.3789 45.629 28.5325 44.4962 28.6861 43.373" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M41.5977 79.7754L53.7321 83.0874" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M44.9102 85.2969L50.4206 86.4009" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M49.3164 67.641V58.137C49.3164 50.5914 52.014 43.353 56.958 37.6218C59.358 34.7514 61.4508 32.3418 61.4508 32.3418" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M49.3157 57.716C49.3157 57.716 48.8549 52.676 48.2501 48.4136C47.7893 44.4776 46.1093 40.8488 43.3637 38.1704C38.0165 32.9672 29.4629 24.6152 29.4629 24.6152" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M45.3417 38.9668C45.3417 38.9668 47.9337 30.058 42.9129 22.6563C39.0249 17.0691 23.7897 13.7475 16.6569 12.5379C15.6873 12.3843 14.7081 12.5379 14.0649 13.1427C13.4121 13.7475 12.9321 14.5059 12.9321 15.4083C12.7689 20.3907 13.7385 29.7603 21.0345 37.1619C31.7289 47.8851 41.1273 43.6611 41.1273 43.6611" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M54.1646 39.9648C54.1646 39.9648 51.035 33.2448 53.6942 26.8416C55.7294 22.1088 65.8862 17.9904 71.2046 16.0032C72.1454 15.696 73.0766 15.696 73.8638 16.1568C74.6414 16.6176 75.275 17.376 75.4286 18.2976C76.0526 22.416 76.3694 29.2896 72.1454 35.5488C65.579 45.3216 57.9182 43.1808 57.9182 43.1808" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M64.7632 48.8926C64.7632 48.8926 64.6288 53.1934 61.4512 58.819" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M39.2458 34.5508H28.3594" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </span>
                      </div>
                      <div class="col-12 fs-24 fw-bold text-uppercase text-secondary-light">
                        Innovación e investigación.
                      </div>
                      <div class="col-12 mt-24 fs-17 fw-500 text-secondary-lighter">
                        Si algo nos ha caracterizado desde nuestros orígenes es un profundo espíritu visionario, 
                        anticipándonos siempre a las grandes tendencias del futuro que revolucionarían el mercado. 
                        Primero fue la introducción de la botella de PET en 1980, 
                        después la patente de tapones <i>push&pull</i> completamente asépticos; más tarde, 
                        la medición y neutralización de emisiones de CO2. 
                        Un espíritu que nos sigue guiando hoy en día en nuestro 
                        camino hacia una <i>Total Beverage Company</i>. 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 mt-80 mt-xl-120">
                <div class="row">
                  <div class="offset-1 col-10">
                    <div class="row">
                      <div class="col-12 fs-96 fw-bold text-primary">
                        03
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" fill="none">
                            <path d="M47.6945 68.7133C59.1352 68.7133 68.4066 59.4418 68.4066 48.0012C68.4066 36.5605 59.1352 27.2891 47.6945 27.2891C36.2539 27.2891 26.9824 36.5605 26.9824 48.0012C26.9824 59.4418 36.2539 68.7133 47.6945 68.7133Z" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M47.6945 83.214C28.3294 83.214 12.4805 67.4787 12.4805 48.2535C12.4805 35.291 19.5215 24.0777 30.0875 17.9551" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M47.6953 12.7871C67.0604 12.7871 82.9094 28.7673 82.9094 48.2986C82.9094 61.4711 75.8683 72.8592 65.3023 79.0781" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M45.6211 87.3602L49.767 83.2143L45.6211 79.0684" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M49.767 17.9646L45.6211 13.3026L49.767 8.64062" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M33.1934 53.8786C33.1934 53.8786 34.2255 53.275 35.2488 52.6803C36.4209 52.0768 37.7416 51.9281 38.9224 52.5316C40.3919 53.1351 42.2986 54.036 43.6194 54.6308C44.6515 55.0769 45.6749 55.0769 46.707 54.4821C48.0277 53.7299 49.6458 53.8786 50.8179 54.7795C50.9666 54.9282 51.2552 55.2256 51.5526 55.383C52.436 56.1352 52.8734 57.1848 52.8734 58.3831C52.8734 59.5814 52.436 60.631 51.5526 61.3832C50.6692 62.1354 50.2319 63.185 50.2319 64.3833C50.2319 65.5816 50.8179 66.6312 51.5526 67.3834C51.85 67.5321 51.85 67.6808 51.85 67.6808" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M64.2685 48.184C64.2685 48.184 64.1111 48.3327 63.8049 48.4814C61.9594 49.531 59.4928 49.0761 58.2595 47.2831C57.6473 46.3909 56.8688 45.3413 56.2566 44.4492C55.4869 43.3996 55.3294 42.21 55.793 41.0117C56.4053 39.3673 55.793 37.723 54.4023 36.6821C53.79 36.236 53.169 35.6325 52.3993 35.1864C50.8599 33.9882 50.3963 31.8977 51.166 30.1134C51.6296 29.2212 52.0931 28.3203 52.0931 28.3203" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M33.1934 47.9997C33.1934 47.9997 34.1905 40.5388 41.4765 38.6758" stroke="#69B3E7" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </span>
                      </div>
                      <div class="col-12 fs-24 fw-bold text-uppercase text-secondary">
                        Responsabilidad con la comunidad.
                      </div>
                      <div class="col-12 mt-24 fs-17 fw-500 text-secondary-lighter">
                        Formamos parte de las empresas que ofrecen soluciones a la España vaciada. 
                        Las envasadoras de agua mineral generamos empleo de calidad en zonas rurales, 
                        contribuyendo además al crecimiento económico local. Además, 
                        en Agua Mineral San Benedetto colaboramos de forma activa 
                        con las iniciativas socio-culturales de nuestro entorno más cercano.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 mt-80 mt-xl-120">
                <div class="row">
                  <div class="offset-1 col-10">
                    <div class="row">
                      <div class="col-12 fs-96 fw-bold text-primary">
                        04
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="96" height="93" viewBox="0 0 96 93" fill="none">
                            <path d="M68.0151 79.4047V81.6739C68.0151 82.7899 67.0743 83.7013 65.9223 83.7013H39.5127C38.3607 83.7013 37.4199 82.7899 37.4199 81.6739V71.6113" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M30.4883 20.8514C35.2595 13.9229 43.4099 9.30078 52.7219 9.30078C67.5251 9.30078 79.4099 20.8607 79.4099 35.2571C79.4099 43.9619 74.6867 51.56 68.0147 56.3123V71.9828" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.6169 57.437V52.8335L16.5977 50.1458L26.0345 30.1973" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M56.7834 61.5391V64.7011C56.7834 68.5048 53.2026 71.0344 49.2954 71.0344H29.769C25.8618 71.0344 22.6074 68.5048 22.6074 64.7011" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M38.8884 29.8809C41.6532 29.8809 43.7748 31.9362 43.7748 34.6332C43.7748 37.3302 41.6628 39.3855 38.8884 39.3855C38.562 39.3855 38.0724 39.3855 37.746 39.2274C35.634 38.7531 34.002 36.8559 34.002 34.6332C34.002 31.9362 36.2868 29.8809 38.8884 29.8809Z" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M50.2751 18.7969C53.0399 18.7969 55.1615 20.8522 55.1615 23.5492C55.1615 26.2462 53.0495 28.3015 50.2751 28.3015C49.9487 28.3015 49.4591 28.3015 49.1327 28.1434C47.0207 27.6691 45.3887 25.7719 45.3887 23.5492C45.3983 20.8615 47.6735 18.7969 50.2751 18.7969Z" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M38.8887 39.377V45.7103L43.7751 50.4626V56.7959" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M61.6696 29.8809C58.9048 29.8809 56.7832 31.9362 56.7832 34.6332C56.7832 37.3302 58.8952 39.3855 61.6696 39.3855C61.996 39.3855 62.4856 39.3855 62.812 39.2274C64.924 38.7531 66.556 36.8559 66.556 34.6332C66.5464 31.9362 64.4344 29.8809 61.6696 29.8809Z" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M61.6696 39.377V45.7103L56.7832 50.4626V56.7959" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M50.2754 28.9512V56.7954" stroke="#69B3E7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </span>
                      </div>
                      <div class="col-12 fs-24 fw-bold text-uppercase text-secondary">
                        Bienestar laboral.
                      </div>
                      <div class="col-12 mt-24 fs-17 fw-500 text-secondary-lighter">
                        En Agua Mineral San Benedetto queremos atraer talento, 
                        pero más nos preocupa ser capaces de fidelizarlo. 
                        Por eso nos enorgullece poder presumir de la media de antigüedad entre nuestros empleados, 
                        que ronda los 16 años. Y es que, al incorporarse a nuestra plantilla, 
                        los trabajadores no sólo acceden a múltiples oportunidades de formación y promoción: 
                        también se suman a un proyecto de familia, con una cultura preventiva del cuidado de la persona, 
                        respetuosa, abierta a la comunicación bidireccional, diversa e igualitaria. 
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

<section class="mt-111">
  <div class="container-fluid">
    <div class="row position-relative">
      <div class="col-12 col-lg-6 g-0 bg-black position-relative">
        <div class="position-relative">
          <div class="position-absolute top-50 translate-middle-y zi-99 text-white w-100">
            <div class="container">
              <div class="row">
                <div class="offset-1 col-9 offset-lg-5 col-lg-6">
                  <div class="row">
                    <div class="col-12 fs-80 fs-md-96 fw-bold">
                      05
                      <span class="ico-sostenible">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" fill="none">
                        <path d="M17.423 61.7466C17.1542 60.9402 17.2886 59.9898 17.6918 59.1834C18.095 58.377 18.911 57.8298 19.727 57.6954C24.0758 56.889 31.967 56.3418 38.8982 60.2586C45.8294 64.1754 49.2374 71.337 50.7254 75.5226C50.9942 76.329 50.8599 77.2794 50.4567 78.0858C50.0439 78.8922 49.2374 79.4394 48.4214 79.5738C44.0726 80.3802 36.1814 80.9274 29.2502 77.0106C22.319 73.0938 18.9206 65.9418 17.423 61.7466Z" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M51.8398 78.4423C52.2334 79.1143 52.7614 79.5175 53.5486 79.6519C57.091 80.3239 63.379 80.8615 69.0142 77.492C74.6494 74.1224 77.4046 68.1895 78.5854 64.8199C78.8446 64.1479 78.7198 63.3415 78.3262 62.6599C77.9326 61.9879 77.4046 61.5848 76.6174 61.4504C73.075 60.7784 66.787 60.2408 61.1518 63.6104C59.8366 64.4168 58.6654 65.2232 57.7438 66.308" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M50.8787 78.2397C45.3683 72.9597 39.4643 69.0045 32.6387 67.6797" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M51.8398 78.2407C51.8398 78.2407 57.091 69.5623 68.1598 66.7207" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M62.3995 56.1598V19.0654C62.3995 18.259 62.1211 17.4526 61.4299 16.7806C60.8827 16.243 60.0475 15.8398 59.0875 15.8398C54.4027 15.8398 45.5707 15.8398 40.7515 15.8398C39.9259 15.8398 39.1003 16.1086 38.4091 16.7806C37.8619 17.3182 37.4395 18.1246 37.4395 19.0654C37.4395 28.0702 37.4395 52.7998 37.4395 52.7998" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32.6391 28.3203H26.3319C25.5063 28.3203 24.6903 28.5795 23.9991 29.2323C23.4519 29.7507 23.0391 30.5283 23.0391 31.4403V52.3203" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M47.0391 24.7867C47.0391 24.0859 46.4727 23.5195 45.7719 23.5195C44.7927 23.5195 43.5255 23.5195 42.5367 23.5195C41.8359 23.5195 41.2695 24.0859 41.2695 24.7867C41.2695 25.7659 41.2695 27.0331 41.2695 28.0219C41.2695 28.7227 41.8359 29.2891 42.5367 29.2891C43.5159 29.2891 44.7831 29.2891 45.7719 29.2891C46.4727 29.2891 47.0391 28.7227 47.0391 28.0219V24.7867Z" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M58.5587 24.7867C58.5587 24.0859 57.9923 23.5195 57.2915 23.5195C56.3123 23.5195 55.0451 23.5195 54.0563 23.5195C53.3555 23.5195 52.7891 24.0859 52.7891 24.7867C52.7891 25.7659 52.7891 27.0331 52.7891 28.0219C52.7891 28.7227 53.3555 29.2891 54.0563 29.2891C55.0355 29.2891 56.3027 29.2891 57.2915 29.2891C57.9923 29.2891 58.5587 28.7227 58.5587 28.0219V24.7867Z" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M47.0391 35.3473C47.0391 34.6465 46.4727 34.0801 45.7719 34.0801C44.7927 34.0801 43.5255 34.0801 42.5367 34.0801C41.8359 34.0801 41.2695 34.6465 41.2695 35.3473C41.2695 36.3265 41.2695 37.5937 41.2695 38.5825C41.2695 39.2833 41.8359 39.8497 42.5367 39.8497C43.5159 39.8497 44.7831 39.8497 45.7719 39.8497C46.4727 39.8497 47.0391 39.2833 47.0391 38.5825V35.3473Z" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M58.5684 35.3473C58.5684 34.6465 58.002 34.0801 57.3012 34.0801C56.322 34.0801 55.0548 34.0801 54.066 34.0801C53.3652 34.0801 52.7988 34.6465 52.7988 35.3473C52.7988 36.3265 52.7988 37.5937 52.7988 38.5825C52.7988 39.2833 53.3652 39.8497 54.066 39.8497C55.0452 39.8497 56.3124 39.8497 57.3012 39.8497C58.002 39.8497 58.5684 39.2833 58.5684 38.5825V35.3473Z" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M77.7584 56.1601V31.4977C77.7584 30.7009 77.48 29.9041 76.7984 29.2417C76.2512 28.7137 75.4256 28.3105 74.4656 28.3105C71.4512 28.3105 66.6512 28.3105 62.3984 28.3105" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                      </span>
                    </div>
                    <div class="col-12 fs-20 fs-md-24 fw-bold">
                      PRODUCCIÓN SOSTENIBLE.
                    </div>
                    <div class="col-12 mt-36">
                      <a href="<?=get_permalink(583)?>" 
                      class="btn btn-outline-white text-uppercase rounded-0 border-2 fs-14 fw-500">
                        <span>ir a ecolosofía</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?=wp_get_attachment_image(611, "full", "", array( 'class' => 'w-100 opacity-60' , 'alt' => '' , 'title' => '') ); ?>
        </div>
      </div>
      <div class="col-12 col-lg-6 text-secondary bg-primary-brighter d-flex align-items-center py-40 pt-sm-80 pb-sm-70 pt-lg-0 pb-lg-0">
        <div class="row">

              <div class="offset-2 col-8 offset-lg-1 col-lg-9 fw-500 fs-17 text-secondary-lighter ps-0" data-aos="fade-up">
                Desde el principio nos hemos preocupado por ser capaces de desarrollar nuestra actividad con el mínimo impacto 
                en nuestro entorno. Lo conseguimos a través de proyectos y sinergias estratégicas con agentes locales. 
                Así, no sólo fabricamos los envases más ligeros del mercado de agua mineral: 
                también aprovechamos al máximo nuestros recursos hídricos, evitando su desperdicio; 
                <a class="text-reset" href="<?=get_permalink(585)?>">fomentamos la circularidad de nuestros envases y residuos</a>, 
                realizamos tareas de limpieza y reforestación en nuestros alrededores, etc. ¡Descubre más en nuestra 
                <a class="text-reset" href="<?=get_permalink(583)?>"><i>Ecolosofía</i></a>! 
              </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-56">
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