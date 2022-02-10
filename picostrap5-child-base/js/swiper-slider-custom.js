const swiper_home = new Swiper('.swiper-home', {
  direction: 'horizontal',
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
  loop: true,
  breakpoints: {
    992: {
      slidesPerView: 6,
    }
  }
});