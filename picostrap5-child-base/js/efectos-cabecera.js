
document.addEventListener('DOMContentLoaded', function () {

  //SCROLL
  window.addEventListener("scroll", event => {
    if(scrollY>200){
      document.querySelector('.fixed-top > nav').classList.add('bg-secondary');
    }else{
      document.querySelector('.fixed-top > nav').classList.remove('bg-secondary');
    }
  });

  //OFFCANVAS MENU
  var menuContainerColor = document.querySelector("#wrapper-navbar .zi-1050")

  var menuMarcasOffcanvas = document.getElementById('offcanvas-marcas');
  showMenuElement(menuMarcasOffcanvas);

  var menuNosotrosOffcanvas = document.getElementById('offcanvas-nosotros');
  showMenuElement(menuNosotrosOffcanvas);

  function showMenuElement(element){
    element.addEventListener('show.bs.offcanvas', function () {
      menuContainerColor.classList.add("bg-secondary");
      element.parentElement.classList.remove("h-0");
      element.classList.remove("h-0");
      element.classList.add("h-auto");
    });
    element.addEventListener('hide.bs.offcanvas', function () {
      //element.classList.add("h-0");
      //element.classList.remove("h-auto");
    });
    element.addEventListener('hidden.bs.offcanvas', function () {
      //element.parentElement.classList.add("h-0");
      element.classList.add("h-0");
      element.classList.remove("h-auto");
      //menuContainerColor.classList.remove("bg-secondary");
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