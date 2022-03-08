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
  },
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: ["-20%", 0, -1],
    },
    next: {
      translate: ["100%", 0, 0],
    },
  },
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

swiper_home_dedicado.on('slideChange', function () {
  var arrow_next = document.querySelector(".swiper-home-dedicado .arrow-next");
  var arrow_prev = document.querySelector(".swiper-home-dedicado .arrow-prev");
  if(swiper_home_dedicado.isBeginning){
    arrow_prev.classList.add('opacity-50');
    arrow_next.classList.remove('opacity-50');
  }else{
    arrow_prev.classList.remove('opacity-50');
  }
  if(swiper_home_dedicado.isEnd){
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.add('opacity-50');
  }
});


const swiper_home_promocional = new Swiper('.swiper-home-promocional', {
  direction: 'horizontal',
  autoHeight : true,
  loop: false,
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

swiper_home_promocional.on('slideChange', function () {
  document.querySelector(".swiper-home-promocional .opacity-100").classList.remove('opacity-100');
  document.querySelectorAll(".swiper-home-promocional .col.c-pointer.fs-13")[eval(swiper_home_promocional.activeIndex)].classList.add('opacity-100');
  var arrow_prev = document.querySelector(".swiper-home-promocional .arrow-prev");
  var arrow_next = document.querySelector(".swiper-home-promocional .arrow-next");
  if(swiper_home_promocional.isBeginning){
    arrow_prev.classList.add('opacity-50');
    arrow_next.classList.remove('opacity-50');
  }else{
    arrow_prev.classList.remove('opacity-50');
  }
  if(swiper_home_promocional.isEnd){
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.add('opacity-50');
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
  slidesPerView: 'auto',
  //spaceBetween: 12,
  /*breakpoints: {
    992: {
      slidesPerView: 7,
    }
  }*/
});