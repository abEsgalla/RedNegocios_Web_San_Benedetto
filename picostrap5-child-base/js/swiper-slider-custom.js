const swiper_metodo = new Swiper('.swiper-metodo', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  spaceBetween: 15,
  // Disable preloading of all images
  preloadImages: false,
  // Enable lazy loading
  lazy: true,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination-metodo',
    clickable: true,
    bulletActiveClass: 'bg-primary opacity-100',
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-metodo',
    prevEl: '.swiper-button-prev-metodo',
  },
  breakpoints: {
    // when window width is >= 992px
    992: {
      loop: true,
      slidesPerView: 3
    }
  }
});