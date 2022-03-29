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
swiper_home.on('slideChangeTransitionStart', function () {
  let active_slide = document.querySelector(".swiper-home .swiper-slide-active");
  let navbar = document.querySelector("nav.navbar");
  let slider_principal = document.querySelector("#sliderPrincipal")
  if( active_slide.classList.contains("slide-light") ) {
    navbar.classList.remove('menu-light');
    navbar.classList.add('menu-dark');
    slider_principal.classList.remove('slide-light');
    slider_principal.classList.add('slide-dark');
  } else {
    navbar.classList.remove('menu-dark');
    navbar.classList.add('menu-light');
    slider_principal.classList.remove('slide-dark');
    slider_principal.classList.add('slide-light');
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
  preventInteractionOnTransition: true,
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
      let arrows_next = document.querySelector("#sliderPromocional .arrow-next path");
      let arrows_prev = document.querySelector("#sliderPromocional .arrow-prev path");
      arrows_next.style.fill = first_slide.dataset.textcolor;
      arrows_prev.style.fill = first_slide.dataset.textcolor;
    },
    slideChange: function(swiper) {
      let cortinilla = document.querySelector('.swiper-home-promocional .cortinilla-swiper');

      //Restauro la cortinilla a estado inicial
      cortinilla.innerHTML = '';
      cortinilla.style.zIndex = 0;
      cortinilla.classList.remove('recogida');

      //Pillo el actual slider activo y lo clono
      let current_active_slide = swiper.slides[swiper.previousIndex];
      let current_active_slide_width = current_active_slide.offsetWidth;
      let current_active_slide_clon = current_active_slide.cloneNode(true);

      //Limpio el slider clonado de clases/estilos que no quiero
      current_active_slide_clon.classList.remove('swiper-slide');
      current_active_slide_clon.classList.remove('swiper-slide-active');
      current_active_slide_clon.removeAttribute("style");
      current_active_slide_clon.style.width = current_active_slide_width + 'px';

      //Meto el clon en el slider ficticio/cortinilla
      cortinilla.append(current_active_slide_clon);
    },
    slideChangeTransitionStart: function() {
      let cortinilla = document.querySelector('.swiper-home-promocional .cortinilla-swiper');

      //Al empezar la transicion, pongo la cortinilla encima para que no se vea el cambio de slider real
      cortinilla.style.zIndex = 9;
    },
    slideChangeTransitionEnd: function() {
      let cortinilla = document.querySelector('.swiper-home-promocional .cortinilla-swiper');

      //Al terminar la transicion de cambio de slide, "recojo" la cortinilla
      cortinilla.classList.add('recogida');

    }
  },
});
swiper_home_promocional.on('beforeSlideChangeStart', function() {
  
});
//swiper_home_promocional.on('slideChange', function () {
//   document.querySelector("#sliderPromocional .opacity-100").classList.remove('opacity-100');
//   document.querySelectorAll("#sliderPromocional .col.c-pointer.fs-13")[eval(swiper_home_promocional.activeIndex)].classList.add('opacity-100');
//   var arrow_prev = document.querySelector("#sliderPromocional .arrow-prev");
//   var arrow_next = document.querySelector("#sliderPromocional .arrow-next");
//   if(swiper_home_promocional.isBeginning){
//     arrow_prev.classList.add('opacity-50');
//     arrow_next.classList.remove('opacity-50');
//   }else if (swiper_home_promocional.isEnd){
//     arrow_prev.classList.remove('opacity-50');
//     arrow_next.classList.add('opacity-50');
//   }else{
//     arrow_prev.classList.remove('opacity-50');
//     arrow_next.classList.remove('opacity-50');
//   }
//});

swiper_home_promocional.on('slideChangeTransitionEnd', function () {
  //Reinicio el cover de los otros slides
  swiper_home_promocional.slides.each(function(slide) {
    if(!slide.classList.contains('swiper-slide-active')) {
      // slide.querySelector('.wrapper-slide').classList.remove('to-the-left');
    }
  });
});


swiper_home_promocional.on('activeIndexChange', function (swiper) {
  let active_slide = swiper_home_promocional.slides[swiper_home_promocional.realIndex];
  // let active_slide = document.querySelector(".swiper-home-promocional .swiper-slide-active");
  let bg_color_slide = active_slide.dataset.bgcolor;
  let contenedor_swiper_home_promocional = document.querySelector("#sliderPromocional");
  let arrows_next = document.querySelector("#sliderPromocional .arrow-next path");
  let arrows_prev = document.querySelector("#sliderPromocional .arrow-prev path");
  contenedor_swiper_home_promocional.style["background-color"] = bg_color_slide;
  //Muevo el cover del slide activo
  // active_slide.querySelector('.wrapper-slide').classList.add('to-the-left');
  let colorTexto = active_slide.dataset.textcolor == 'white' ? '#FFFFFF' : '#002D72';
  arrows_next.setAttribute('style', 'fill: '+colorTexto);
  arrows_prev.setAttribute('style', 'fill: '+colorTexto);
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

var count_items = document.querySelectorAll('.swiper-landing-productos .swiper-slide').length;
if(count_items>=8){
  boolean_loop = true;
}else{
  boolean_loop = false;
}
const swiper_landing_productos = new Swiper('.swiper-landing-productos', {
  direction: 'horizontal',
  autoHeight : true,
  loop: boolean_loop,
  slidesPerView: 'auto',
  //spaceBetween: 12,
  breakpoints: {
    350: {
      slidesPerView: 2,
    },    
    768: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 'auto',
    }
  }
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


const swiper_landing_banner = new Swiper('.swiper-landing-banner', {
  direction: 'horizontal',
  loop: true,
  slidesPerView: 5,
  breakpoints: {
    350: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 3,
    },
    900: {
      slidesPerView: 5,
    }
  }
});
