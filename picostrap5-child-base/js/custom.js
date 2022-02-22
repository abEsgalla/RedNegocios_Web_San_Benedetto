// to enable the enqueue of this optional JS file, 
// you'll have to uncomment a row in the functions.php file
// just read the comments in there mate

//console.log("Custom js file loaded");

//add here your own js code. Vanilla JS welcome.

document.addEventListener('DOMContentLoaded', function () {

  var myOffcanvas = document.getElementById('offcanvas-marcas');
  myOffcanvas.addEventListener('show.bs.offcanvas', function () {
    myOffcanvas.parentElement.classList.remove("h-0");
  })
  myOffcanvas.addEventListener('hidden.bs.offcanvas', function () {
    myOffcanvas.parentElement.classList.add("h-0");
  })

});