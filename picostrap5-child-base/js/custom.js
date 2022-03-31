// to enable the enqueue of this optional JS file, 
// you'll have to uncomment a row in the functions.php file
// just read the comments in there mate

//console.log("Custom js file loaded");

//add here your own js code. Vanilla JS welcome.

document.addEventListener('DOMContentLoaded', function () {
  let swiper_home = document.querySelector('.swiper-home');
  if( swiper_home ) {
    let active_slide = document.querySelector(".swiper-home .swiper-slide-active");
    let navbar = document.querySelector("nav.navbar");
    let slider_principal = document.querySelector("#sliderPrincipal")
    if( active_slide.classList.contains("slide-light") ) {
      navbar.classList.add('menu-dark');
      slider_principal.classList.add('slide-dark');
    } else {
      navbar.classList.add('menu-light');
      slider_principal.classList.add('slide-light');
    }
  }
  if(document.querySelector('.wpcf7-form-control.wpcf7-file')){
    document.querySelector('.wpcf7-form-control.wpcf7-file').onchange = function() {
      if(!this.parentElement.classList.contains('file-selected')){
        this.parentElement.classList.add('file-selected');
      }
    };
  }
  if(document.querySelector('.wpcf7-form-control-wrap.menu-377 select')){
    document.querySelector('.wpcf7-form-control-wrap.menu-377 select').addEventListener('change', function (event) {
      var email = "info@sanbenedetto.es";
      var dpt_comercial_1 = "sandra.garcia@sanbenedetto.es";
      var dpt_comercial_2 = "cristina.diaz@sanbenedetto.es";
      var dpt_calidad = "ee2ef3c2.sanbenedetto.es@emea.teams.ms";
      var dpt_logistica = "javier.navarro@sanbenedetto.es";
      var dpt_compras = "pedro.gomez@sanbenedetto.es";
      var dpt_tic = "e343abe9.sanbenedetto.onmicrosoft.com@emea.teams.ms";
      switch (event.target.value) {
        case 'Quiero distribuir vuestros productos':
          email = dpt_comercial_1;
        break;
        case 'No encuentro vuestros productos':
          email = dpt_comercial_1;
        break;
        case 'Tengo una consulta, sugerencia o reclamación sobre vuestros productos':
          email = dpt_calidad;
        break;
        case 'Quiero ofrecer mis servicios como proveedor de logística':
          email = dpt_logistica;
        break;
        case 'Quiero ofrecer mis servicios como proveedor informático':
          email = dpt_tic;
        break;
        case 'Quiero ofrecer soluciones de gestión comercial y/o marketing':
          email = dpt_comercial_2;
        break;
        case 'Quiero enviar mi CV':
          email = email;
          var myModal = new bootstrap.Modal(document.getElementById('modalContact'));
          if(myModal){
            myModal.show();
          }
        break;
        case 'Busco colaboradores/patrocinadores para un evento':
          email = dpt_comercial_2;
        break;
        case 'Otros':
          email = email;
        break;
      }
      document.querySelector('input[name="email_test"]').value=email;
    });
  }

  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()

});