
document.addEventListener('DOMContentLoaded', function () {

  function swap_text_menu_classes(target_class,swap_class)
  {
    var elements_text_menu = document.querySelectorAll('#menu-home .'+target_class);
    elements_text_menu.forEach(function (element){
       element.classList.remove(target_class);
       element.classList.add(swap_class);
    });
  }

  //SCROLL
  window.addEventListener("scroll", event => {
    if(scrollY>200){
      
      if(!document.querySelector('body').classList.contains('single-landing')){
        document.querySelector('.fixed-top > nav').classList.add('bg-white');
        swap_text_menu_classes('text-white', 'text-secondary');
      }

      document.querySelector('#logo-tagline-wrap .custom-logo-link img').classList.add('d-none');
      document.querySelector('#logo-tagline-wrap .custom-logo-link .svg-container-custom').classList.remove('d-none');      

    }else{

      if(!document.querySelector('body').classList.contains('single-landing')){
        document.querySelector('.fixed-top > nav').classList.remove('bg-white');
        swap_text_menu_classes('text-secondary', 'text-white');
      }

      document.querySelector('#logo-tagline-wrap .custom-logo-link img').classList.remove('d-none');
      document.querySelector('#logo-tagline-wrap .custom-logo-link .svg-container-custom').classList.add('d-none');

    }
  });

  //OFFCANVAS MENU
  var menuContainerColor = document.querySelector("#wrapper-navbar .zi-1050");

  var menuMarcasOffcanvas = document.getElementById('offcanvas-marcas');
  showMenuElement(menuMarcasOffcanvas);

  var menuNosotrosOffcanvas = document.getElementById('offcanvas-nosotros');
  showMenuElement(menuNosotrosOffcanvas);

  function showMenuElement(element){
    element.addEventListener('show.bs.offcanvas', function (event) {
      event.relatedTarget.classList.add("active","active-offcanvas");
      menuContainerColor.classList.add("bg-secondary");
      element.parentElement.classList.remove("h-0");
      element.classList.remove("h-0");
      element.classList.add("h-auto");
    });
    element.addEventListener('hide.bs.offcanvas', function () {
      /*element.classList.add("h-0");
      element.classList.remove("h-auto");*/
    });
    element.addEventListener('hidden.bs.offcanvas', function () {
      //element.parentElement.classList.add("h-0");
      document.querySelector(".active.active-offcanvas").classList.remove("active");
      element.classList.remove("h-auto");
      element.classList.add("h-0");
      menuContainerColor.classList.remove("bg-secondary");
    });
  }

  //LANDING PRODUCTOS DATOS SLIDER
  var sliderProductosOffcanvas = document.getElementById('offcanvasInfoSliderProductos');
  if(sliderProductosOffcanvas){
    sliderProductosOffcanvas.addEventListener('show.bs.offcanvas', function (custom_event) {
      sliderProductosOffcanvas.querySelector(".image").innerHTML = "<img src='"+custom_event.relatedTarget.dataset.image+"'>";
      sliderProductosOffcanvas.querySelector(".name").innerHTML = custom_event.relatedTarget.dataset.name;
      sliderProductosOffcanvas.querySelector(".description").innerHTML = custom_event.relatedTarget.dataset.description;
    })
  }
  

});