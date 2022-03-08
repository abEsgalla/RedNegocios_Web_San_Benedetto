const type = document.querySelectorAll('.type-container');
const filtros = document.querySelectorAll('.filtro_buscador');
filtros.forEach(element => element.addEventListener('click', filtrar));

function filtrar(event) {
  const filterType = event.target.dataset.filter;

  filtros.forEach(function(element) {
    if (element.dataset.filter == filterType) {
      element.classList.remove("active");
      element.classList.add("active");
    } else {
      element.classList.remove("active");
    }
  });

  var name_swiper="";
  type.forEach(function(element, index) {
    if(element.dataset.swiper){
      name_swiper=element.dataset.swiper;
    }
    if (filterType == '*') {
      element.classList.remove("d-none");
    } else if (!element.classList.contains('type-' + filterType)) {
      element.classList.remove("d-none");
      element.classList.add("d-none");
    } else {
      element.classList.remove("d-none");
    }
  });
  if(name_swiper!=""){
    eval(name_swiper).update();
    eval(name_swiper).slideTo(0);
  }
}