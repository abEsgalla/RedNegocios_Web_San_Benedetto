
document.addEventListener('DOMContentLoaded', function () {

  // function swap_text_menu_classes(target_class,swap_class)
  // {
  //   var elements_text_menu = document.querySelectorAll('#menu-home .'+target_class);
  //   elements_text_menu.forEach(function (element){
  //      element.classList.remove(target_class);
  //      element.classList.add(swap_class);
  //   });
  // }

  // SCROLL
  window.addEventListener("scroll", event => {
    if(scrollY>200){
      
      if(!document.querySelector('body').classList.contains('single-landing')){
        document.querySelector('.fixed-top > nav').classList.add('menu-scrolled');
        // swap_text_menu_classes('text-white', 'text-secondary');
      }

      // document.querySelector('#logo-tagline-wrap .custom-logo-link img').classList.add('d-none');
      // document.querySelector('#logo-tagline-wrap .custom-logo-link .svg-container-custom').classList.remove('d-none');      

    }else{

      if(!document.querySelector('body').classList.contains('single-landing')){
        document.querySelector('.fixed-top > nav').classList.remove('menu-scrolled');
        // swap_text_menu_classes('text-secondary', 'text-white');
      }

      // document.querySelector('#logo-tagline-wrap .custom-logo-link img').classList.remove('d-none');
      // document.querySelector('#logo-tagline-wrap .custom-logo-link .svg-container-custom').classList.add('d-none');

    }
  });


  //OFFCANVAS MENU
    var menuContainerColor = document.querySelector("#wrapper-navbar .zi-1050");

    async function waitUntil(condition) {
      return await new Promise(resolve => {
        const interval = setInterval(() => {
          if (condition) {
            resolve();
            clearInterval(interval);
            canvasMenu();
          };
        }, 1000);
      });
    }
    waitUntil("typeof bootstrap != 'undefined'");

    function canvasMenu(){
      generate_menuCanvas('nosotros');
      generate_menuCanvas('marcas');
      generate_menuCanvas('ecolosofia');
      generate_menuCanvas('contacto');
    }

    var custom_bootstrap = {};

    function generate_menuCanvas(id_element){
      eval( "var linkMenu"+id_element+" = document.querySelector('[data-bs-target=\"#offcanvas-"+id_element+"\"]');");
      eval( "var menuCanvas"+id_element+"Offcanvas = document.getElementById('offcanvas-"+id_element+"');");
      eval( "var event"+id_element+"Offcanvas = new bootstrap.Offcanvas(menuCanvas"+id_element+"Offcanvas);");

      eval("linkMenu"+id_element).addEventListener('mouseover', function (event) {
        checkAllMenuOffcanvasClose(true);

        eval( "custom_bootstrap."+id_element+" = event"+id_element+"Offcanvas;");
        eval("linkMenu"+id_element).classList.add("active","active-offcanvas");
        eval("event"+id_element+"Offcanvas").show();
        eval("menuCanvas"+id_element+"Offcanvas").classList.add("menu-open-offcanvas");
        eval("menuCanvas"+id_element+"Offcanvas").parentElement.classList.remove("h-0");
        eval("menuCanvas"+id_element+"Offcanvas").classList.remove("h-0");
        eval("menuCanvas"+id_element+"Offcanvas").classList.add("h-auto");

      });
      eval("menuCanvas"+id_element+"Offcanvas").addEventListener('show.bs.offcanvas', function () {
        menuContainerColor.classList.add("menu-open-offcanvas");
        //eval("menuCanvas"+id_element+"Offcanvas").classList.remove("d-none");
      });
      eval("menuCanvas"+id_element+"Offcanvas").addEventListener('hidden.bs.offcanvas', function () {
        eval("menuCanvas"+id_element+"Offcanvas").classList.remove("d-none");
        if(document.querySelector(".active.active-offcanvas")){
          document.querySelector(".active.active-offcanvas").classList.remove("active");
        }
        eval("menuCanvas"+id_element+"Offcanvas").classList.remove("h-auto");
        eval("menuCanvas"+id_element+"Offcanvas").classList.add("h-0");
        //menuContainerColor.classList.remove("menu-open-offcanvas");
      });
    }

    function checkAllMenuOffcanvasClose(d_none){
      checkMenuOffcanvasClose('nosotros',d_none);
      checkMenuOffcanvasClose('marcas',d_none);
      checkMenuOffcanvasClose('ecolosofia',d_none);
      checkMenuOffcanvasClose('contacto',d_none);
    }

    function checkMenuOffcanvasClose(id_element,d_none){
      if(eval("custom_bootstrap."+id_element)){
        if(eval("custom_bootstrap."+id_element+"._isShown")==true){
          if(document.querySelector(".active.active-offcanvas")){
            document.querySelector(".active.active-offcanvas").classList.remove("active");
          }
          if(d_none==true){
            eval("custom_bootstrap."+id_element+"._element.classList.add('d-none');");
          }
          eval("custom_bootstrap."+id_element).hide();
        }
      }
    }

    document.querySelector('.fixed-top').addEventListener('mouseleave', function (event) {
      checkAllMenuOffcanvasClose(false);
      menuContainerColor.classList.remove("menu-open-offcanvas");
    });

    const navs_link_not_offcanvas = document.querySelectorAll('.fixed-top .nav-link:not([role="button"])');
    navs_link_not_offcanvas.forEach(function(nav_link_not_offcanvas) {
      nav_link_not_offcanvas.addEventListener('mouseover', function (event) {
        checkAllMenuOffcanvasClose(false);
      });
    });

    //TEMP
    var swap_images_submenu_canvas = document.querySelectorAll('#offcanvas-ecolosofia a[data-image]');
    swap_images_submenu_canvas.forEach(function(swap_image_submenu_canvas) {
      swap_image_submenu_canvas.addEventListener('mouseover', function (event) {
        document.querySelector('#offcanvas-ecolosofia .image').innerHTML = "<img src='"+this.getAttribute('data-image')+"'>";
      });
    });
    var swap_images_submenu_canvas = document.querySelectorAll('#offcanvas-nosotros a[data-image]');
    swap_images_submenu_canvas.forEach(function(swap_image_submenu_canvas) {
      swap_image_submenu_canvas.addEventListener('mouseover', function (event) {
        document.querySelector('#offcanvas-nosotros .image').innerHTML = "<img src='"+this.getAttribute('data-image')+"'>";
      });
    });
    var swap_images_submenu_canvas = document.querySelectorAll('#offcanvas-contacto a[data-image]');
    swap_images_submenu_canvas.forEach(function(swap_image_submenu_canvas) {
      swap_image_submenu_canvas.addEventListener('mouseover', function (event) {
        document.querySelector('#offcanvas-contacto .image').innerHTML = "<img src='"+this.getAttribute('data-image')+"'>";
      });
    });
    //TEMP

  //OFFCANVAS MENU//

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