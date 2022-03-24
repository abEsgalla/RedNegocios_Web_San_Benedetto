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

  type.forEach(function(element) {
    if (filterType == '*') {
      element.classList.remove("d-none");
    } else if (!element.classList.contains('type-' + filterType)) {
      element.classList.remove("d-none");
      element.classList.add("d-none");
    } else {
      element.classList.remove("d-none");
    }
  });
}