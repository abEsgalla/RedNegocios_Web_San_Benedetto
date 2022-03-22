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
    if( active_slide.classList.contains("slide-light") ) {
      navbar.classList.add('menu-dark');
    } else {
      navbar.classList.add('menu-light');
    }
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