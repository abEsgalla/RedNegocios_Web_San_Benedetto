// to enable the enqueue of this optional JS file, 
// you'll have to uncomment a row in the functions.php file
// just read the comments in there mate

//console.log("Custom js file loaded");

//add here your own js code. Vanilla JS welcome.

document.addEventListener('DOMContentLoaded', function () {

  var menuContainerColor = document.querySelector("#wrapper-navbar .zi-1050")

  var menuMarcasOffcanvas = document.getElementById('offcanvas-marcas');
  showMenuElement(menuMarcasOffcanvas);

  var menuNosotrosOffcanvas = document.getElementById('offcanvas-nosotros');
  showMenuElement(menuNosotrosOffcanvas);

  function showMenuElement(element){
    if(element){
      element.addEventListener('show.bs.offcanvas', function () {
        menuContainerColor.classList.add("bg-secondary");
        element.parentElement.classList.remove("h-0");
        element.classList.remove("h-0");
        element.classList.add("h-auto");
      })
      element.addEventListener('hidden.bs.offcanvas', function () {
        element.parentElement.classList.add("h-0");
        element.classList.add("h-0");
        element.classList.remove("h-auto");
        menuContainerColor.classList.remove("bg-secondary");
      })
    }
  }

  var sliderProductosOffcanvas = document.getElementById('offcanvasInfoSliderProductos');
  if(sliderProductosOffcanvas){
    sliderProductosOffcanvas.addEventListener('show.bs.offcanvas', function (custom_event) {
      sliderProductosOffcanvas.querySelector(".image").innerHTML = "<img src='"+custom_event.relatedTarget.dataset.image+"'>";
      sliderProductosOffcanvas.querySelector(".name").innerHTML = custom_event.relatedTarget.dataset.name;
      sliderProductosOffcanvas.querySelector(".description").innerHTML = custom_event.relatedTarget.dataset.description;
    })
  }
  

});