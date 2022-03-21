const swiper_home = new Swiper('.swiper-home', {
  direction: 'horizontal',
  autoHeight : true,
  loop: false,
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

swiper_home.on('slideChange', function () {
  var arrow_next = document.querySelector(".swiper-home .arrow-next");
  var arrow_prev = document.querySelector(".swiper-home .arrow-prev");
  if(swiper_home.isBeginning){
    arrow_prev.classList.add('opacity-50');
    arrow_next.classList.remove('opacity-50');
  }else if (swiper_home.isEnd){
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.add('opacity-50');
  }else{
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.remove('opacity-50');
  }

});
swiper_home.on('slideChangeTransitionEnd', function () {
  let active_slide = document.querySelector(".swiper-home .swiper-slide-active");
  let navbar = document.querySelector("nav.navbar");
  if( active_slide.classList.contains("slide-light") ) {
    navbar.classList.remove('menu-light');
    navbar.classList.add('menu-dark');
  } else {
    navbar.classList.remove('menu-dark');
    navbar.classList.add('menu-light');
  }
});

const swiper_home_dedicado = new Swiper('.swiper-home-dedicado', {
  direction: 'horizontal',
  //autoHeight : true,
  loop: false,
  spaceBetween: 16,
  slidesPerView: 2,
  breakpoints: {
    768: {
      spaceBetween: 16,
      slidesPerView: 2
    },
    992: {
      spaceBetween: 55,
      slidesPerView: 4
    },
    1440: {
      spaceBetween: 32,
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
  }else if (swiper_home_dedicado.isEnd){
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.add('opacity-50');
  }else{
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.remove('opacity-50');
  }
});


const swiper_home_promocional = new Swiper('.swiper-home-promocional', {
  direction: 'vertical',
  autoHeight : true,
  loop: false,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  slidesPerView: 1,
  pagination: {
    el: '.swiper-pagination-home-promocional',
    clickable: true,
    bulletActiveClass: 'bg-white opacity-100',
  },
  breakpoints: {
    768: {
      direction: 'vertical',
    },
    992: {
      direction: 'horizontal',
      slidesPerView: 1,
    }
  },
  on: {
    init: function () {
      let first_slide = document.querySelectorAll('.swiper-home-promocional .swiper-slide')[0];
      let bg_color_slide = first_slide.dataset.bgcolor;
      let contenedor_swiper_home_promocional = document.querySelector("#sliderPromocional");
      contenedor_swiper_home_promocional.style["background-color"] = bg_color_slide;
      first_slide.querySelector('.slider-cover').classList.add('to-the-left');
    },
  },
});

swiper_home_promocional.on('slideChange', function () {
  document.querySelector("#sliderPromocional .opacity-100").classList.remove('opacity-100');
  document.querySelectorAll("#sliderPromocional .col.c-pointer.fs-13")[eval(swiper_home_promocional.activeIndex)].classList.add('opacity-100');
  var arrow_prev = document.querySelector("#sliderPromocional .arrow-prev");
  var arrow_next = document.querySelector("#sliderPromocional .arrow-next");
  if(swiper_home_promocional.isBeginning){
    arrow_prev.classList.add('opacity-50');
    arrow_next.classList.remove('opacity-50');
  }else if (swiper_home_promocional.isEnd){
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.add('opacity-50');
  }else{
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.remove('opacity-50');
  }
});

swiper_home_promocional.on('slideChangeTransitionEnd', function () {
  //Reinicio el cover de los otros slides
  swiper_home_promocional.slides.each(function(slide) {
    if(!slide.classList.contains('swiper-slide-active')) {
      slide.querySelector('.slider-cover').classList.remove('to-the-left');
    }
  });
});


swiper_home_promocional.on('activeIndexChange', function (swiper) {
  let active_slide = swiper_home_promocional.slides[swiper_home_promocional.realIndex];
  // let active_slide = document.querySelector(".swiper-home-promocional .swiper-slide-active");
  let bg_color_slide = active_slide.dataset.bgcolor;
  let contenedor_swiper_home_promocional = document.querySelector("#sliderPromocional");
  contenedor_swiper_home_promocional.style["background-color"] = bg_color_slide;

  //Muevo el cover del slide activo
  active_slide.querySelector('.slider-cover').classList.add('to-the-left');
});



const swiper_home_noticias = new Swiper('.swiper-home-noticias', {
  direction: 'horizontal',
  autoHeight : true,
  loop: true,
  slidesPerView: 1,
  breakpoints: {
    768: {
      spaceBetween: 33,
      direction: 'horizontal',
      slidesPerView: 3,
    },
    992: {
      spaceBetween: 33,
      direction: 'horizontal',
      slidesPerView: 4,
    }
  }
});

const swiper_prefooter_logos = new Swiper('.swiper-prefooter-logos', {
  direction: 'horizontal',
  autoHeight : true,
  loop: true,
  slidesPerView: 2,
  breakpoints: {
    768: {
      slidesPerView: 4,
    },
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

/*swiper_landing_productos.on('slideChange', function () {
  var arrow_prev = document.querySelector(".swiper-landing-productos .arrow-prev");
  var arrow_next = document.querySelector(".swiper-landing-productos .arrow-next");
  if(swiper_landing_productos.isBeginning){
    arrow_prev.classList.add('opacity-50');
    arrow_next.classList.remove('opacity-50');
  }else if (swiper_landing_productos.isEnd){
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.add('opacity-50');
  }else{
    arrow_prev.classList.remove('opacity-50');
    arrow_next.classList.remove('opacity-50');
  }
});*/