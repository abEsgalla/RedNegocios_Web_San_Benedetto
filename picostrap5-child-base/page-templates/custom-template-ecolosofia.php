<?php
/* Template Name: Page Ecolosofia */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$acf_fields = get_fields();

get_header();
?>


<section class="position-absolute top-0 w-100">
  <div class="container-fluid position-relative zi-9 bg-black pt-261 pb-228">
    <div class="bg-custom-image opacity-60 w-100 h-100 position-absolute top-0 start-0" 
      style="background:url('<?=wp_get_attachment_image_url(613, "full")?>')"></div>
      <div class="container position-relative zi-99">
        <div class="row">
          <div class="offset-3 col-6 text-center">
            <div class="row text-white">
              <div class="col-12 text-uppercase fs-18">
              ¡Una manera ecológica de pensar las cosas!
              </div>
              <h1 class="col-12 mt-16 fs-72 fw-bold text-green">
                Ecolosofía
              </h1>
              <div class="col-12 mt-40">
                <?=wp_get_attachment_image(614, "full", "", array( 'class' => 'opacity-75' , 'alt' => '' , 'title' => '') ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-96 position-relative mt-custom-28">
  <div class="container bg-white">
    <div class="row text-center">
      <div class="offset-2 col-8 mt-176 fs-32 fw-bolder text-secondary text-uppercase">
        Del gr. οἰκο- oiko-.: Significa 'ecológico'<br>
        Del gr. φιλοσοφία philosophía.:  <span class="text-green d-block lh-1"> Manera de pensar o de ver las cosas. </span>
      </div>
      <div class="offset-2 col-8 mt-102 text-center text-secondary fs-17">
        Nuestro principal activo, el core y razón de ser de nuestra compañía, 
        es el agua mineral que brota del interior de la tierra. 
        Debemos a la Naturaleza la existencia de nuestra actividad y, por eso, 
        entendemos la sostenibilidad como una <strong>filosofía inherente a nuestra misión como empresa.</strong> 
        De ahí nace nuestra Ecolosofía: es la forma en la que Agua Mineral San Benedetto utiliza el <strong>conocimiento 
        y la tecnología en beneficio del medioambiente y las personas. ¿Cómo? </strong>
      </div>
      <div class="col-12 mt-123">
        <div class="row text-white text-uppercase">
          <div class="col-4">
            <a class="text-reset text-decoration-none hover-ecolosofia-efect" href="<?=get_permalink(585)?>">
              <div class="ratio ratio-1x1 bg-primary">
                <div class="d-flex flex-column align-items-center justify-content-center">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="121" viewBox="0 0 120 121" fill="none">
                      <path d="M60 120.824C43.9706 120.824 28.8866 114.57 17.563 103.245C6.2395 91.9203 0 76.8554 0 60.8346C0 44.8138 6.2395 29.7489 17.563 18.4034C28.9076 7.07876 43.9706 0.824219 60 0.824219C76.0294 0.824219 91.1134 7.07876 102.437 18.4034C113.761 29.7281 120 44.7931 120 60.8138C120 76.8346 113.761 91.8995 102.437 103.224C91.1134 114.59 76.0504 120.824 60 120.824ZM60 5.18786C45.1681 5.18786 31.1975 10.9645 20.7143 21.4788C10.1891 31.993 4.41176 45.9567 4.41176 60.8346C4.41176 75.7125 10.1891 89.6762 20.7143 100.19C31.2185 110.684 45.1681 116.481 60.021 116.481C74.874 116.481 88.8235 110.705 99.3277 100.19C109.832 89.6762 115.63 75.7125 115.63 60.8346C115.63 45.9567 109.811 31.993 99.3067 21.4788C88.8025 10.9645 74.8529 5.18786 60 5.18786Z" fill="white"/>
                      <path d="M37.961 55.3066C37.6249 54.8287 37.3518 54.3924 36.0283 44.0235C35.8182 43.0053 35.0619 38.1222 39.4106 33.8001C41.5745 31.6391 43.9274 30.2677 45.482 29.4988L43.2131 18.2573C43.0871 17.6755 43.2131 17.0937 43.5493 16.595C43.8854 16.117 44.4106 15.7846 44.9778 15.6807L57.6459 13.4573C58.2341 13.3534 58.8224 13.4781 59.3056 13.8313C59.7888 14.1638 60.1039 14.6833 60.2089 15.2651L62.0787 26.7768C63.3602 26.9014 65.1669 27.1716 67.0787 27.795C72.0787 29.395 75.482 32.4911 76.9316 36.7508C76.9736 36.8547 76.9947 36.9586 77.0157 37.0833L78.4862 45.6651L74.1375 46.3924L72.6879 37.9768C70.1879 30.9742 60.314 31.0365 60.2089 31.0365H60.1879C59.1165 31.0365 58.1921 30.2677 58.0031 29.2079L56.2173 18.1534L47.982 19.6079L50.1669 30.3716C50.377 31.4313 49.7678 32.4911 48.7383 32.8651C48.7173 32.8651 45.419 34.0703 42.5619 36.8963C39.5787 39.8469 40.335 43.0885 40.356 43.13C40.377 43.2131 40.398 43.317 40.419 43.4209C40.9652 47.7222 41.6585 52.6261 41.8896 53.3742C41.8896 53.3534 41.8266 53.1664 41.6585 52.917L37.961 55.3066Z" fill="white"/>
                      <path d="M77.368 97.9877C76.8428 97.9877 76.3176 97.8007 75.8974 97.4474L71.4226 93.541L61.1495 95.515C60.2671 95.6812 59.3848 95.3072 58.9016 94.5799C58.3974 93.8526 58.3974 92.8968 58.9016 92.1695L64.5949 83.6708L68.2713 86.0812L65.4982 90.2371L71.6747 89.0526C72.347 88.928 73.0403 89.115 73.5655 89.5513L77.9142 93.3539C79.6999 92.6682 80.7713 91.4838 81.1915 89.7591C81.5697 88.1799 81.2545 86.7254 81.2545 86.7046C81.2545 86.663 81.2335 86.6215 81.2335 86.5799L75.2041 53.8111L79.5529 53.0215L85.5613 85.7695C85.6663 86.2267 86.0655 88.3669 85.4772 90.7773C84.5949 94.3929 81.9058 96.928 77.9142 97.9046C77.7251 97.9669 77.536 97.9877 77.368 97.9877Z" fill="white"/>
                      <path d="M61.9877 91.5581L59.5352 95.1855L67.7958 100.649L70.2483 97.0218L61.9877 91.5581Z" fill="white"/>
                      <path d="M57.6661 104.68C56.8257 104.68 55.8803 104.618 54.914 104.452C50.2921 103.662 47.1198 100.836 46.0064 96.4723C45.9854 96.4308 45.9854 96.3685 45.9644 96.3061L40.7543 67.0282L38.8846 70.1866L35.082 67.984L39.998 59.7139C40.4602 58.9243 41.3846 58.5087 42.2879 58.6749C43.1913 58.8412 43.9056 59.5477 44.0736 60.4412L50.3131 95.4542C51.0274 98.1139 52.7711 99.6308 55.6703 100.129C58.0442 100.524 60.2501 100.046 60.2921 100.046L61.2795 104.306C61.1535 104.348 59.6829 104.68 57.6661 104.68Z" fill="white"/>
                      <path d="M43.0879 59.0002L40.6641 62.6465L48.6339 67.8294L51.0577 64.1832L43.0879 59.0002Z" fill="white"/>
                      <path d="M76.3013 48.3873C75.9022 48.3873 75.503 48.2834 75.1459 48.0549L67.0156 43.0886L69.3265 39.3691L75.6921 43.2756L78.3392 43.1302L78.4862 46.0808C78.5282 46.8912 78.1081 47.66 77.4148 48.0756C77.0786 48.2834 76.7005 48.3873 76.3013 48.3873Z" fill="white"/>
                      <path d="M80.0785 36.7755L74.4688 44.9883L78.1243 47.431L83.7341 39.2182L80.0785 36.7755Z" fill="white"/>
                    </svg>
                  </div>
                  <div class="mt-24 h5">PRODUCTO</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a class="text-reset text-decoration-none hover-ecolosofia-efect" href="<?=get_permalink(587)?>">
              <div class="ratio ratio-1x1 bg-secondary">
                <div class="d-flex flex-column align-items-center justify-content-center">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120" fill="none">
                      <path d="M60 120C43.9706 120 28.8866 113.745 17.563 102.421C6.2395 91.0961 0 76.0312 0 60.0104C0 43.9896 6.2395 28.9247 17.563 17.5792C28.9076 6.25454 43.9706 0 60 0C76.0294 0 91.1134 6.25454 102.437 17.5792C113.761 28.9039 120 43.9688 120 59.9896C120 76.0104 113.761 91.0753 102.437 102.4C91.1134 113.766 76.0504 120 60 120ZM60 4.36364C45.1681 4.36364 31.1975 10.1403 20.7143 20.6545C10.1891 31.1688 4.41176 45.1325 4.41176 60.0104C4.41176 74.8883 10.1891 88.852 20.7143 99.3662C31.2185 109.86 45.1681 115.657 60.021 115.657C74.874 115.657 88.8235 109.881 99.3277 99.3662C109.832 88.852 115.63 74.8883 115.63 60.0104C115.63 45.1325 109.811 31.1688 99.3067 20.6545C88.8025 10.1403 74.8529 4.36364 60 4.36364Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M62.6548 87.7195C56.4419 87.7195 51.4265 92.6519 51.4265 98.5583V100.946H46.6016V98.5583C46.6016 89.9214 53.8718 82.9434 62.6548 82.9434C71.4379 82.9434 78.7081 89.9214 78.7081 98.5583V100.946H73.8831V98.5583C73.8831 92.6519 68.8678 87.7195 62.6548 87.7195Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M28.3415 70.0566L52.2593 93.7324L48.8476 97.1096L24.9297 73.4339L28.3415 70.0566Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M39.7478 62.2969L62.5132 84.1275L59.156 87.5579L36.3906 65.7273L39.7478 62.2969Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M57.0844 42.3183L39.8742 60.095L36.3906 56.7903L53.6008 39.0137L57.0844 42.3183Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M50.4491 29.7978L28.3952 52.3327L24.9297 49.0095L46.9836 26.4746L50.4491 29.7978Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M65.1344 39.0117L75.7836 49.5531L72.3719 52.9304L61.7227 42.3889L65.1344 39.0117Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M71.5919 27.6738L78.1317 33.5158C78.1541 33.5359 78.1762 33.5564 78.1979 33.5772L85.1296 40.2543L81.7646 43.6773L74.8654 37.0315L68.3594 31.2196L71.5919 27.6738Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7734 61.0841C14.7734 53.6251 20.9931 47.6758 28.5469 47.6758C36.1007 47.6758 42.3204 53.6251 42.3204 61.0841C42.3204 68.5272 36.1169 74.4925 28.5469 74.4925C20.9913 74.4925 14.7734 68.5289 14.7734 61.0841ZM28.5469 52.4519C23.5618 52.4519 19.5984 56.3569 19.5984 61.0841C19.5984 65.8006 23.5636 69.7164 28.5469 69.7164C33.5411 69.7164 37.4954 65.8023 37.4954 61.0841C37.4954 56.3569 33.532 52.4519 28.5469 52.4519Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M45.4766 31.318C45.478 23.8744 51.6953 17.9121 59.25 17.9121C66.8038 17.9121 73.0235 23.8614 73.0235 31.3205C73.0235 38.7635 66.8201 44.7288 59.25 44.7288C51.6872 44.7288 45.4624 38.7825 45.4766 31.318ZM59.25 22.6882C54.2668 22.6882 50.3016 26.604 50.3016 31.3205L50.3015 31.3254C50.2917 36.046 54.2495 39.9527 59.25 39.9527C64.2442 39.9527 68.1986 36.0386 68.1986 31.3205C68.1986 26.5933 64.2351 22.6882 59.25 22.6882Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M71.6016 50.0631C71.6016 43.834 76.794 38.8613 83.1079 38.8613C89.4218 38.8613 94.6142 43.834 94.6142 50.0631C94.6142 56.2922 89.4218 61.2649 83.1079 61.2649C76.8089 61.2649 71.6016 56.2944 71.6016 50.0631ZM83.1079 43.6374C79.3654 43.6374 76.4265 46.5633 76.4265 50.0631C76.4265 53.5608 79.3758 56.4888 83.1079 56.4888C86.8504 56.4888 89.7893 53.563 89.7893 50.0631C89.7893 46.5633 86.8504 43.6374 83.1079 43.6374Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M75.5158 49.4405L72.1494 57.5898L79.2656 69.7156H89.3834V74.4917H77.8771C77.0175 74.4917 76.2228 74.0389 75.791 73.3032L67.3811 58.973C67.0052 58.3324 66.9509 57.5554 67.2342 56.8696L71.0498 47.6328L75.5158 49.4405Z" fill="#FAFAFA"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M86.3274 39.375L97.7931 41.083C98.5171 41.1908 99.1524 41.6183 99.5201 42.2449L107.93 56.575C108.347 57.2861 108.366 58.1597 107.979 58.8873L103.219 67.8331L98.9503 65.6077L103.087 57.8313L95.9298 45.6353L85.6094 44.0979L86.3274 39.375Z" fill="#FAFAFA"/>
                    </svg>
                  </div>
                  <div class="mt-24 h5">PROCESOS</div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-4">
            <a class="text-reset text-decoration-none hover-ecolosofia-efect" href="<?=get_permalink(589)?>">
              <div class="ratio ratio-1x1 bg-primary">
                <div class="d-flex flex-column align-items-center justify-content-center">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="119" height="120" viewBox="0 0 119 120" fill="none">
                      <path d="M59.3926 120C43.5255 120 28.5941 113.745 17.3852 102.421C6.17633 91.0961 0 76.0312 0 60.0104C0 43.9896 6.17633 28.9247 17.3852 17.5792C28.6149 6.25455 43.5255 0 59.3926 0C75.2597 0 90.1911 6.25455 101.4 17.5792C112.609 28.9039 118.785 43.9688 118.785 59.9896C118.785 76.0104 112.609 91.0753 101.4 102.4C90.1911 113.766 75.2805 120 59.3926 120ZM59.3926 4.36364C44.7108 4.36364 30.8816 10.1403 20.5046 20.6545C10.0859 31.1688 4.3671 45.1325 4.3671 60.0104C4.3671 74.8883 10.0859 88.852 20.5046 99.3662C30.9024 109.86 44.7108 115.657 59.4134 115.657C74.116 115.657 87.9243 109.881 98.3222 99.3662C108.72 88.852 114.46 74.8883 114.46 60.0104C114.46 45.1325 108.699 31.1688 98.3014 20.6545C87.9035 10.1403 74.0952 4.36364 59.3926 4.36364Z" fill="white"/>
                      <path d="M98.1741 53.5858C100.624 53.5791 102.915 52.3732 104.312 50.3573C105.709 48.3414 106.035 45.7686 105.185 43.4667C104.336 41.1647 102.419 39.4231 100.048 38.8024V38.5584C100.048 35.8741 98.6191 33.3936 96.2993 32.0512C93.9795 30.7095 91.1207 30.7095 88.8009 32.0512C86.4811 33.3938 85.0517 35.8743 85.0517 38.5584V38.8024C82.6818 39.423 80.7643 41.1647 79.9149 43.4667C79.0655 45.7686 79.391 48.3413 80.7886 50.3573C82.1853 52.3732 84.4767 53.5791 86.9261 53.5858H90.6753V59.221H60.6817V53.5858H64.4309C66.8805 53.5791 69.1718 52.3732 70.5685 50.3573C71.966 48.3414 72.2916 45.7686 71.4422 43.4667C70.5927 41.1647 68.6755 39.4231 66.3053 38.8024V38.5584C66.3053 35.8741 64.8759 33.3936 62.5561 32.0512C60.2364 30.7095 57.3775 30.7095 55.0578 32.0512C52.738 33.3938 51.3086 35.8743 51.3086 38.5584V38.8024C48.9386 39.423 47.0212 41.1647 46.1717 43.4667C45.3223 45.7686 45.6478 48.3413 47.0454 50.3573C48.4422 52.3732 50.7336 53.5791 53.183 53.5858H56.9322V59.221H26.9386V53.5858H30.6878C33.1374 53.5791 35.4287 52.3732 36.8253 50.3573C38.2229 48.3414 38.5485 45.7686 37.699 43.4667C36.8496 41.1647 34.9323 39.4231 32.5622 38.8024V38.5584C32.5622 35.8741 31.1328 33.3936 28.813 32.0512C26.4932 30.7095 23.6344 30.7095 21.3146 32.0512C18.9948 33.3938 17.5654 35.8743 17.5654 38.5584V38.8024C15.1955 39.423 13.278 41.1647 12.4286 43.4667C11.5792 45.7686 11.9047 48.3413 13.3023 50.3573C14.699 52.3732 16.9904 53.5791 19.4398 53.5858H23.189V59.221H13.816C12.7808 59.221 11.9414 60.0621 11.9414 61.0994C11.9347 73.2888 16.6581 85.0034 25.1129 93.7664C33.5687 102.529 45.0924 107.655 57.251 108.06H58.8067C67.0331 108.06 75.1149 105.89 82.2403 101.768C89.3646 97.6464 95.2804 91.7186 99.3936 84.5798C103.507 77.441 105.673 69.3429 105.673 61.0987C105.673 60.6006 105.475 60.1226 105.124 59.7704C104.772 59.4182 104.295 59.2203 103.798 59.2203H94.4252V53.5851L98.1741 53.5858ZM53.1837 49.829C51.8439 49.829 50.6062 49.1128 49.9367 47.9506C49.2672 46.7883 49.2672 45.356 49.9367 44.1938C50.6062 43.0315 51.8439 42.3154 53.1837 42.3154H53.4833C54.1127 42.3523 54.7185 42.0705 55.096 41.564C55.4742 41.0575 55.573 40.3934 55.3579 39.798C55.1847 39.4064 55.0834 38.9862 55.0583 38.5586C55.0583 37.216 55.773 35.9758 56.9329 35.305C58.0928 34.6341 59.5222 34.6341 60.6821 35.305C61.842 35.9758 62.5567 37.2161 62.5567 38.5586C62.5542 38.9955 62.4714 39.429 62.3132 39.8357C62.0981 40.4311 62.1969 41.0952 62.5751 41.6018C62.9526 42.1074 63.5585 42.39 64.1878 42.3531L64.4313 42.3154C65.7711 42.3154 67.0088 43.0315 67.6783 44.1938C68.3478 45.356 68.3478 46.7883 67.6783 47.9506C67.0088 49.1128 65.7711 49.829 64.4313 49.829H60.6821V46.0722C60.6821 45.0349 59.8427 44.1938 58.8075 44.1938C57.7723 44.1938 56.9329 45.0349 56.9329 46.0722V49.829L53.1837 49.829ZM19.441 49.829C18.1011 49.829 16.8634 49.1128 16.1939 47.9506C15.5244 46.7883 15.5244 45.356 16.1939 44.1938C16.8634 43.0315 18.1012 42.3154 19.441 42.3154H19.7406C20.3699 42.3523 20.9758 42.0705 21.3532 41.564C21.7315 41.0575 21.8302 40.3934 21.6152 39.798C21.4419 39.4064 21.3407 38.9862 21.3156 38.5586C21.3156 37.216 22.0302 35.9758 23.1902 35.305C24.3501 34.6341 25.7795 34.6341 26.9394 35.305C28.0992 35.9758 28.814 37.2161 28.814 38.5586C28.8114 38.9955 28.7286 39.429 28.5704 39.8357C28.3554 40.4311 28.4541 41.0952 28.8324 41.6018C29.2098 42.1074 29.8157 42.39 30.445 42.3531L30.6886 42.3154C32.0284 42.3154 33.2661 43.0315 33.9356 44.1938C34.6051 45.356 34.6051 46.7883 33.9356 47.9506C33.2661 49.1128 32.0283 49.829 30.6886 49.829H26.9394V46.0722C26.9394 45.0349 26.1 44.1938 25.0648 44.1938C24.0296 44.1938 23.1902 45.0349 23.1902 46.0722V49.829L19.441 49.829ZM15.6918 62.9778H30.7824C29.9254 64.4931 29.5388 66.2305 29.6719 67.9673C29.8058 69.7039 30.4535 71.361 31.5322 72.727C33.0955 74.5501 34.104 76.7856 34.4362 79.1664C34.7685 81.5471 34.4111 83.974 33.4069 86.1575C32.1072 88.679 31.3716 91.4548 31.2512 94.2908C26.6226 90.4469 22.8472 85.6753 20.1677 80.2825C17.488 74.8905 15.9633 68.9953 15.692 62.9778H15.6918ZM58.9575 104.303C58.0386 93.8591 62.1443 91.3979 71.9106 88.2424C78.1345 86.2139 80.5899 81.7996 82.7456 77.9112C84.9013 74.0228 86.4948 71.1112 91.1252 69.9657H91.126C94.3537 69.1086 97.7691 69.2856 100.892 70.473C98.77 80.0428 93.4625 88.6046 85.842 94.7527C78.2215 100.901 68.7405 104.268 58.957 104.303L58.9575 104.303ZM101.548 66.7346C97.9181 65.5103 94.0105 65.3669 90.3008 66.3212C84.0962 67.8616 81.6776 72.238 79.5401 76.0889C77.4036 79.9397 75.6789 83.0952 70.7488 84.6733C61.113 87.791 54.2708 91.0976 55.1897 104.133C47.9674 103.537 41.0138 101.113 34.9817 97.0892C34.7541 93.9923 35.3215 90.8879 36.6312 88.0728C39.5744 83.0574 38.7116 75.807 34.5315 70.4343C32.1506 67.3726 34.2126 64.2356 35.2629 62.9207L101.924 62.9216C101.924 64.2364 101.718 65.4951 101.549 66.7346L101.548 66.7346ZM86.9265 49.829C85.5867 49.829 84.349 49.1128 83.6795 47.9506C83.01 46.7883 83.01 45.356 83.6795 44.1938C84.349 43.0315 85.5867 42.3154 86.9265 42.3154H87.2261C87.8554 42.3523 88.4613 42.0705 88.8387 41.564C89.217 41.0575 89.3158 40.3934 89.1007 39.798C88.9275 39.4064 88.8262 38.9862 88.8011 38.5586C88.8011 37.216 89.5158 35.9758 90.6757 35.305C91.8356 34.6341 93.265 34.6341 94.4249 35.305C95.5848 35.9758 96.2995 37.2161 96.2995 38.5586C96.297 38.9955 96.2141 39.429 96.056 39.8357C95.8409 40.4311 95.9396 41.0952 96.3179 41.6018C96.6953 42.1074 97.3012 42.39 97.9305 42.3531L98.1741 42.3154C99.5139 42.3154 100.752 43.0315 101.421 44.1938C102.091 45.356 102.091 46.7883 101.421 47.9506C100.752 49.1128 99.5139 49.829 98.1741 49.829H94.4249V46.0722C94.4249 45.0349 93.5855 44.1938 92.5503 44.1938C91.5151 44.1938 90.6757 45.0349 90.6757 46.0722V49.829L86.9265 49.829Z" fill="white"/>
                    </svg>
                  </div>
                  <div class="mt-24 h5">ENTORNO</div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-96 mt-xl-256 mb-xl-160">
  <div class="container position-relative">
      <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
      class="d-none d-xxxl-block position-absolute top-0 start-0 w-auto translate-dots-col-top-before">
      <img src="<?=get_stylesheet_directory_uri().'/src/img/background_nuestro_compromiso.png'?>" 
      class="d-none d-xxxl-block position-absolute bottom-0 start-0 w-auto translate-dots-col-bottom-before">
    <div class="row position-relative">
      <div class="col-12">
        <div class="row ">
          <div style="" class="g-0 col-12 col-sm-6 d-block">
            <div class="row position-relative h-100">
              <div class="container-fluid zi-99 top-0 h-100 position-absolute">
                <div class="container h-100 bg-white">
                  <div class="row">
                    <div class="offset-1 col-10">
                      <div class="row text-secondary text-uppercase mt-80">
                        <div class="col-12 fs-18">
                          san benedetto
                        </div>  
                        <div class="col-12 h2">
                          RSC 
                        </div>
                        <div class="col-12 text-end">
                          <?=wp_get_attachment_image(617, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="" class="g-0 col-12 col-sm-6 d-block bg-black">
            <div class="position-relative d-flex w-100 h-100">
              <?=wp_get_attachment_image(615, "full", "", array( 'class' => 'center-image w-100 opacity-75' , 'alt' => '' , 'title' => '') ); ?>
            </div>
          </div>
          <div style="" class="g-0 col-12 col-sm-6 d-block bg-black">
            <div class="position-relative d-flex w-100 h-100">
              <?=wp_get_attachment_image(616, "full", "", array( 'class' => 'center-image w-100 opacity-75' , 'alt' => '' , 'title' => '') ); ?>
            </div>
          </div>
          <div style="" class="g-0 col-12 col-sm-6 d-block">
            <div class="row position-relative h-100">
              <div class="container-fluid zi-99 top-50 position-absolute transform-translate-y">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="row text-secondary">
                        <div class="offset-1 col-10">
                          Tenemos un acuerdo con <strong>Aldeas Infantiles SOS</strong> según el cual suministramos botellas de agua diarias 
                          a los 45 niños y niñas de su Centro de Día en Valencia. 
                          También realizamos donaciones asiduas a organizaciones como <strong>Cruz Roja, 
                          Fundación Ayuda Una Familia</strong> y <strong>Hambre Cero</strong>, 
                          además de apoyar activamente todas las iniciativas culturales y de ocio de nuestro entorno local.  
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
  </div>  
</section>

<section class="my-56">
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