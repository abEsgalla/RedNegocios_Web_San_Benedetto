
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

       document.querySelector('#logo-tagline-wrap .custom-logo-link img').classList.add('d-none');
       document.querySelector('#logo-tagline-wrap .custom-logo-link .svg-container-custom').classList.remove('d-none'); 
       document.querySelector('.custom-mobile-menu-button').classList.add('menu-scrolled');

    }else{

      if(!document.querySelector('body').classList.contains('single-landing')){
        document.querySelector('.fixed-top > nav').classList.remove('menu-scrolled');
        // swap_text_menu_classes('text-secondary', 'text-white');
      }

       document.querySelector('#logo-tagline-wrap .custom-logo-link img').classList.remove('d-none');
       document.querySelector('#logo-tagline-wrap .custom-logo-link .svg-container-custom').classList.add('d-none');
       document.querySelector('.custom-mobile-menu-button').classList.remove('menu-scrolled');

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
        }, 400);
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
      // id_element = 'menu';
      eval( "var linkMenu"+id_element+" = document.querySelector('[data-bs-target=\"#offcanvas-"+id_element+"\"]');");
      eval( "var menuCanvasMenuOffcanvas = document.getElementById('offcanvas-menu');");
      eval( "var eventMenuOffcanvas = new bootstrap.Offcanvas(menuCanvasMenuOffcanvas);");

      eval("linkMenu"+id_element).addEventListener('mouseover', function (event) {
        ocultarTodosMenus();
        mostrarMenu(id_element);
        showOffCanvas();
      });
      eval("menuCanvasMenuOffcanvas").addEventListener('show.bs.offcanvas', function () {
        menuContainerColor.classList.add("menu-open-offcanvas");
        //eval("menuCanvas"+id_element+"Offcanvas").classList.remove("d-none");
      });
      eval("menuCanvasMenuOffcanvas").addEventListener('hidden.bs.offcanvas', function () {
        eval("menuCanvasMenuOffcanvas").classList.remove("d-none");
        if(document.querySelector(".active.active-offcanvas")){
          document.querySelector(".active.active-offcanvas").classList.remove("active");
        }
        eval("menuCanvasMenuOffcanvas").classList.remove("h-auto");
        eval("menuCanvasMenuOffcanvas").classList.add("h-0");
      });
    }

    function ocultarTodosMenus() {
      ocultarMenu('nosotros');
      ocultarMenu('marcas');
      ocultarMenu('ecolosofia');
      ocultarMenu('contacto');
    }

    function ocultarMenu(menu) {
      if(document.querySelector(".active.active-offcanvas")){
        document.querySelector(".active.active-offcanvas").classList.remove("active");
      }
      document.querySelector('.offcanvas-' + menu).classList.add('d-none');
      document.querySelector('.offcanvas-' + menu).classList.add('h-0');
    }

    function mostrarMenu(menu) {
      document.querySelector('.offcanvas-' + menu).classList.remove('d-none');
      document.querySelector('.offcanvas-' + menu).classList.remove('h-0');
    }
    function closeOffCanvas() {
      let topBar = document.querySelector('#wrapper-navbar');
      topBar.classList.remove('bg-white');
      topBar.querySelectorAll('a').forEach(a => {a.classList.remove('text-secondary')})
      let menu = document.querySelector('#offcanvas-menu');
      menu.classList.remove('show');
      menu.classList.remove('menu-open-offcanvas');
    }
    function showOffCanvas() {
      let topBar = document.querySelector('#wrapper-navbar');
      topBar.classList.add('bg-white');
      topBar.querySelectorAll('a').forEach(a => {a.classList.add('text-secondary')})
      let menu = document.querySelector('#offcanvas-menu');
      menu.classList.add('show');
      menu.classList.add('menu-open-offcanvas');
      menu.classList.add('visible');
    }

    document.querySelector('#wrapper-navbar').addEventListener('mouseleave', function (event) {
      ocultarTodosMenus();
      closeOffCanvas();
    });

    const navs_link_not_offcanvas = document.querySelectorAll('.fixed-top .nav-link:not([role="button"]):not(.active)');
    navs_link_not_offcanvas.forEach(function(nav_link_not_offcanvas) {
      nav_link_not_offcanvas.addEventListener('mouseover', function (event) {
        if(document.querySelector(".active.active-offcanvas")){
          document.querySelector(".active.active-offcanvas").classList.remove("active");
        }
        ocultarTodosMenus();
        closeOffCanvas();
      });
    });

    //TEMP
    var swap_images_submenu_canvas = document.querySelectorAll('.offcanvas-ecolosofia a[data-image]');
    swap_images_submenu_canvas.forEach(function(swap_image_submenu_canvas) {
      swap_image_submenu_canvas.addEventListener('mouseover', function (event) {
        console.log(this.getAttribute('data-image'));
        document.querySelector('.offcanvas-ecolosofia .image img').src = this.getAttribute('data-image');
        document.querySelector('.offcanvas-ecolosofia .image img').srcset = this.getAttribute('data-image');
      });
    });
    var swap_images_submenu_canvas = document.querySelectorAll('.offcanvas-nosotros a[data-image]');
    swap_images_submenu_canvas.forEach(function(swap_image_submenu_canvas) {
      swap_image_submenu_canvas.addEventListener('mouseover', function (event) {
        document.querySelector('.offcanvas-nosotros .image img').src = this.getAttribute('data-image');
        document.querySelector('.offcanvas-nosotros .image img').srcset = this.getAttribute('data-image');
      });
    });
    var swap_images_submenu_canvas = document.querySelectorAll('.offcanvas-contacto a[data-image]');
    swap_images_submenu_canvas.forEach(function(swap_image_submenu_canvas) {
      swap_image_submenu_canvas.addEventListener('mouseover', function (event) {
        document.querySelector('.offcanvas-contacto .image img').src = this.getAttribute('data-image');
        document.querySelector('.offcanvas-contacto .image img').srcset = this.getAttribute('data-image');
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
  

  var refreshIntervalId = setInterval(function() {
    if (document.querySelectorAll('#offcanvasMenuMobile svg.fa-minus').length) {
        clearInterval(refreshIntervalId);
        menu_mobile(this);
    }
    }, 100);
    //ICON PLUS MOBILE
    function menu_mobile(){
      const menu_mobile_icons_more =  document.querySelectorAll('#offcanvasMenuMobile svg');
      menu_mobile_icons_more.forEach(function(menu_mobile_icon_more) {
        menu_mobile_icon_more.addEventListener('click', function (event) {
          if(this.classList.contains('fa-minus')){
            this.parentElement.parentElement.classList.remove('active');
          }else{
            active_menu(this);
          }
        });
      });
    };

    function active_menu(element){
      var old_submenu = document.querySelector('#offcanvasMenuMobile .active');
      if(old_submenu){
        old_submenu.classList.remove('active');
      }
      var submenu = element.parentElement.parentElement;
      if(submenu){
        submenu.classList.add('active');
      }
    };

});