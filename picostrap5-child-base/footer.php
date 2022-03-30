</main>
	<?php if (function_exists("lc_custom_footer")) lc_custom_footer(); else {
		?>
		<?php if (is_active_sidebar( 'footerfull' )): ?>
		<div class="wrapper bg-light mt-5 py-5" id="wrapper-footer-widgets">
			
			<div class="container mb-5">
				
				<div class="row">
					<?php dynamic_sidebar( 'footerfull' ); ?>
				</div>

			</div>
		</div>
		<?php endif ?>
		
    <!-- Modal -->
    <div class="modal fade" id="modalLanguage" tabindex="-1" aria-labelledby="modalLanguageLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body h4 text-secondary text-center py-60">
            Próximamente
          </div>
        </div>
      </div>
    </div>

		
		<div class="wrapper bg-secondary" id="wrapper-footer-colophon">
			<div class="container gx-sm-2 gx-4">
				<div class="row">
					<div class="col-12">
						<footer class="site-footer py-40 py-sm-48 text-white" id="colophon">
              <div class="row">
                <div class="col-12">
                  <a class="text-reset text-decoration-none" href="<?=get_home_url()?>">
                    <?=wp_get_attachment_image(40, "full", "", array( 'class' => '' , 'alt' => '' , 'title' => '') ); ?>
                  </a>
                </div>
                <div class="col-12 mt-40 text-uppercase">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                      <div class="row fs-13">
                        <div class="col-12 h6 mt-40 mt-lg-0">nosotros</div>
                        <div class="col-12 mt-24">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(579)?>">
                            historia
                          </a>
                        </div>
                        <div class="col-12 mt-16">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(581)?>">
                            misión, visión y valores
                          </a>
                        </div>
                        <div class="col-12 mt-16">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(655)?>">
                            San benedetto en españa
                          </a>
                        </div>
                        <div class="col-12 mt-16">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(667)?>">
                            San benedetto en el mundo
                          </a>
                        </div>
                        <div class="col-12 mt-16">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink( get_option( 'page_for_posts' ) ); ?>">
                           noticias
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                      <div class="row fs-13 d-flex flex-wrap align-items-end flex-column h-100">
                        <div class="col-12 h6 mt-40 mt-lg-0">marcas</div>
                        <div class="col-12 mt-24">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(49)?>">
                            Agua mineral
                          </a>
                        </div>
                        <div class="col-12 mt-16">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(49)?>">
                            Refrescos
                          </a>
                        </div>
                        <div class="col-12 mt-16 h6 mt-sm-auto mt-40">
                          <a class="text-reset text-decoration-none" href="<?=get_permalink(647)?>">
                            área profesional
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                      <div class="row fs-13 d-flex flex-wrap align-items-end flex-column h-100">
                        <div class="col-12 h6 mt-40 mt-lg-0">
                          <a class="text-reset text-decoration-none" href="<?=get_permalink(583)?>">
                            ecolosofía
                          </a>
                        </div>
                        <div class="col-12 mt-24">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(585)?>">
                            Producto
                          </a>
                        </div>
                        <div class="col-12 mt-16">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(587)?>">
                            procesos
                          </a>
                        </div>
                        <div class="col-12 mt-16">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(589)?>">
                            entorno
                          </a>
                        </div>
                        <div class="col-12 mt-16 h6 mt-40 mt-lg-auto d-flex flex-wrap align-items-center">
                          <span>Síguenos</span>
                          <span class="d-flex flex-wrap align-items-center mx-12">
                            <a class="mx-2 text-reset text-decoration-none" target="_blank"
                            href="https://www.facebook.com/SanBenedetto.es/">
                              <svg xmlns="http://www.w3.org/2000/svg" width="8" height="17" viewBox="0 0 8 17" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.91252 4.84123V3.55192C4.91252 2.91991 5.32501 2.78086 5.62501 2.78086C5.91251 2.78086 7.42502 2.78086 7.42502 2.78086V0.0126449L4.95002 0C2.20002 0 1.58751 2.07301 1.58751 3.3876V4.85386H0V6.81311V8.08977H1.60001C1.60001 11.7554 1.60001 16.1795 1.60001 16.1795H4.80001C4.80001 16.1795 4.80001 11.7049 4.80001 8.08977H7.17502L7.28752 6.81311L7.46252 4.84123H4.91252Z" fill="white"/>
                              </svg>
                            </a>
                            <a class="mx-2 text-reset text-decoration-none" target="_blank"
                            href="https://www.instagram.com/sanbenedetto_es/">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15.5845 4H8.41533C5.98072 4 4 6.00304 4 8.46497V15.7146C4 18.1766 5.98072 20.1795 8.41533 20.1795H15.5845C18.0193 20.1795 20 18.1765 20 15.7146V8.46497C20.0001 6.00304 18.0193 4 15.5845 4ZM18.5805 15.7146C18.5805 17.385 17.2365 18.744 15.5846 18.744H8.41533C6.76348 18.7441 5.4196 17.385 5.4196 15.7146V8.46497C5.4196 6.79459 6.76348 5.43553 8.41533 5.43553H15.5845C17.2364 5.43553 18.5804 6.79459 18.5804 8.46497V15.7146H18.5805Z" fill="white"/>
                                <path d="M11.9998 7.9209C9.72641 7.9209 7.87695 9.7911 7.87695 12.09C7.87695 14.3887 9.72641 16.2588 11.9998 16.2588C14.2731 16.2588 16.1226 14.3887 16.1226 12.09C16.1226 9.7911 14.2731 7.9209 11.9998 7.9209ZM11.9998 14.8232C10.5093 14.8232 9.29655 13.5971 9.29655 12.0899C9.29655 10.5826 10.5092 9.35633 11.9998 9.35633C13.4903 9.35633 14.703 10.5826 14.703 12.0899C14.703 13.5971 13.4902 14.8232 11.9998 14.8232Z" fill="white"/>
                                <path d="M16.2959 6.7041C16.0224 6.7041 15.7537 6.81607 15.5606 7.01226C15.3665 7.20749 15.2549 7.47929 15.2549 7.75682C15.2549 8.0335 15.3666 8.30519 15.5606 8.50138C15.7536 8.69661 16.0224 8.80954 16.2959 8.80954C16.5704 8.80954 16.8382 8.69661 17.0322 8.50138C17.2262 8.30519 17.337 8.0334 17.337 7.75682C17.337 7.47929 17.2262 7.20749 17.0322 7.01226C16.8392 6.81607 16.5704 6.7041 16.2959 6.7041Z" fill="white"/>
                              </svg>
                            </a>
                              <!--
                              <svg class="mx-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21.4696 7.40625C21.294 6.44409 20.4571 5.74341 19.486 5.52466C18.0326 5.21875 15.3429 5 12.4328 5C9.52447 5 6.79173 5.21875 5.33669 5.52466C4.36723 5.74341 3.52864 6.39966 3.353 7.40625C3.17564 8.5 3 10.0312 3 12C3 13.9688 3.17564 15.5 3.39605 16.5938C3.57341 17.5559 4.41028 18.2566 5.37974 18.4753C6.9226 18.7812 9.56752 19 12.4776 19C15.3877 19 18.0326 18.7812 19.5755 18.4753C20.545 18.2566 21.3818 17.6003 21.5592 16.5938C21.7348 15.5 21.9552 13.9243 22 12C21.9105 10.0312 21.69 8.5 21.4696 7.40625ZM10.0531 15.0625V8.9375L15.4308 12L10.0531 15.0625Z" fill="white"/>
                              </svg>
                              -->
                            <a class="mx-2 text-reset text-decoration-none" target="_blank"
                            href="https://es.linkedin.com/company/agua-mineral-san-benedetto-espana/">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6.77621 5C5.70221 5 5 5.71317 5 6.65052C5 7.56718 5.68129 8.30068 6.735 8.30068H6.75538C7.85039 8.30068 8.53186 7.56718 8.53186 6.65052C8.51139 5.71317 7.85039 5 6.77621 5Z" fill="white"/>
                                <path d="M5.18555 9.60547H8.32532V19.1577H5.18555V9.60547Z" fill="white"/>
                                <path d="M16.032 9.38086C14.3382 9.38086 13.2024 10.9903 13.2024 10.9903V9.60505H10.0625V19.1573H13.2022V13.8229C13.2022 13.5374 13.2227 13.2522 13.3056 13.048C13.5326 12.4778 14.0492 11.887 14.9166 11.887C16.0527 11.887 16.5071 12.763 16.5071 14.0471V19.1573H19.6467V13.6802C19.6467 10.7462 18.0976 9.38086 16.032 9.38086Z" fill="white"/>
                              </svg> 
                            </a>   
                          </span>                   
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                      <div class="row fs-13">
                        <div class="col-12 h6 mt-40 mt-lg-0">
                          <a class="text-reset text-decoration-none" href="<?=get_permalink(650)?>">
                            Contacto
                          </a>
                        </div>
                        <div class="col-12 mt-24">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(672)?>">
                            buscamos talento
                          </a>
                        </div>
                        <div class="col-12 mt-16">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(650)?>">
                            localización y contacto
                          </a>
                        </div>
                        <div class="col-12 mt-16">
                          <a class="text-reset text-decoration-none letter-spacing-1x3" href="<?=get_permalink(785)?>">
                            preguntas frecuentes
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 mt-40 mt-xl-80">
                  <div class="row fs-13">
                    <div class="col-12 order-1 order-sm-0 col-sm-3 my-20">
                      <div class="">® Agua mineral San Benedetto, S.A.U.</div>
                    </div>
                    <div class="col-12 order-0 order-sm-1 col-sm-9 my-20">
                      <div class="links-footer text-start d-block d-xl-flex flex-wrap justify-content-start <?/*justify-content-lg-between*/?>">
                          <a class="mx-lg-0 text-reset text-decoration-none" href="<?=get_permalink(923)?>">
                          Info empresa
                          </a>
                          <span class="mx-1 mx-lg-2">|</span>
                          <a class="mx-lg-0 text-reset text-decoration-none" href="<?=get_permalink(943)?>">
                          Política de seguridad de la información
                          </a>
                          <span class="mx-1 mx-lg-2">|</span>
                          <a class="mx-lg-0 text-reset text-decoration-none" href="<?=get_permalink(943)?>">
                          Política de privacidad web
                          </a>
                          <span class="mx-1 mx-lg-2">|</span>
                          <a class="mx-lg-0 text-reset text-decoration-none" href="<?=get_permalink(945)?>">
                          Condiciones generales
                          </a>
                          <span class="mx-1 mx-lg-2">|</span>
                          <a class="mx-lg-0 text-reset text-decoration-none" href="<?=get_permalink(947)?>">
                          Cookies
                          </a>
                          <?/*<span class="mx-1">|</span>
                          <a class="mx-lg-0 text-reset text-decoration-none" href="<?=get_permalink(939)?>">
                          Créditos
                          </a>
                          <span class="mx-1">|</span>
                          <a class="mx-lg-0 text-reset text-decoration-none" href="<?=get_permalink(941)?>">
                          Mapa web
                          </a>*/?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
						</footer><!-- #colophon -->
					</div><!--col end -->
				</div><!-- row end -->
			</div><!-- container end -->
		</div><!-- wrapper end -->
		
	<?php 
	} //END ELSE CASE ?>

	<?php wp_footer(); ?>

	</body>
</html>

