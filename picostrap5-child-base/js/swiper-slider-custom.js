const swiper_home = new Swiper('.swiper-home', {
  direction: 'horizontal',
  autoHeight : true,
  loop: true,
  pagination: {
    el: '.swiper-pagination-home',
    clickable: true,
    bulletActiveClass: 'bg-white opacity-100',
  },
  breakpoints: {
    992: {
      slidesPerView: 1
    }
  }
});

const swiper_home_dedicado = new Swiper('.swiper-home-dedicado', {
  direction: 'horizontal',
  autoHeight : true,
  loop: false,
  spaceBetween: 55,
  breakpoints: {
    992: {
      slidesPerView: 4
    }
  }
});

const swiper_home_promocional = new Swiper('.swiper-home-promocional', {
  direction: 'horizontal',
  autoHeight : true,
  loop: true,
  pagination: {
    el: '.swiper-pagination-home-promocional',
    clickable: true,
    bulletActiveClass: 'bg-white opacity-100',
  },
  breakpoints: {
    992: {
      slidesPerView: 1,
    }
  }
});

const swiper_home_noticias = new Swiper('.swiper-home-noticias', {
  direction: 'horizontal',
  autoHeight : true,
  loop: true,
  spaceBetween: 33,
  breakpoints: {
    992: {
      slidesPerView: 4,
    }
  }
});

const swiper_prefooter_logos = new Swiper('.swiper-prefooter-logos', {
  direction: 'horizontal',
  autoHeight : true,
  loop: true,
  breakpoints: {
    992: {
      slidesPerView: 6,
    }
  }
});

const swiper_landing_productos = new Swiper('.swiper-landing-productos', {
  direction: 'horizontal',
  autoHeight : true,
  loop: true,
  spaceBetween: 12,
  breakpoints: {
    992: {
      slidesPerView: 7,
    }
  }
});