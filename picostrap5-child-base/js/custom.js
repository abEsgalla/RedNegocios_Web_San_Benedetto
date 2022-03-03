// to enable the enqueue of this optional JS file, 
// you'll have to uncomment a row in the functions.php file
// just read the comments in there mate

//console.log("Custom js file loaded");

//add here your own js code. Vanilla JS welcome.

document.addEventListener('DOMContentLoaded', function () {

  var menuOffcanvas = document.getElementById('offcanvas-marcas');
  menuOffcanvas.addEventListener('show.bs.offcanvas', function () {
    menuOffcanvas.parentElement.classList.remove("h-0");
  })
  menuOffcanvas.addEventListener('hidden.bs.offcanvas', function () {
    menuOffcanvas.parentElement.classList.add("h-0");
  })

  var sliderProductosOffcanvas = document.getElementById('offcanvasInfoSliderProductos');
  sliderProductosOffcanvas.addEventListener('show.bs.offcanvas', function (custom_event) {
    sliderProductosOffcanvas.querySelector(".image").innerHTML = "<img src='"+custom_event.relatedTarget.dataset.image+"'>";
    sliderProductosOffcanvas.querySelector(".name").innerHTML = custom_event.relatedTarget.dataset.name;
    sliderProductosOffcanvas.querySelector(".description").innerHTML = custom_event.relatedTarget.dataset.description;
  })

});