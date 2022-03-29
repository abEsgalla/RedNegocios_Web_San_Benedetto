if( document.body.classList.contains('single-landing') ) {
  gsap.to('.producto-central', {
    scrollTrigger: {
      trigger: '.producto-central',
      toggleActions: 'play pause pause reverse',
      start: 'top top',
      end: 'bottom top',
      scrub: true,
      markers: false,
    },
    y: 120,
    // rotation: 10,
  });

  //Enjoy SIN gas
  if( document.body.classList.contains('postid-203') ) {

    // gsap.to('.limon-1', {
    //   scrollTrigger: {
    //     trigger: '.bg-custom-image',
    //     start: 'top top',
    //     end: 'bottom top',
    //     scrub: true,
    //     markers: false,
    //   },
    //   y: 420,
    //   rotation: 0,
    // });

    //Limon borroso
    gsap.to('.limon-3', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: -400,
      rotation: 0,
    });

    gsap.to('.limon-4', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: 320,
      rotation: 0,
    });

    gsap.to('.fresa-1', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: -200,
      rotation: 0,
    });

    //Fresa borrosa
    gsap.to('.fresa-2', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: -100,
      rotation: 0,
    });

    //Fresa bloque texto
    gsap.to('.fresa-bloque-texto-sin', {
      scrollTrigger: {
        trigger: '.frutas-bloque-texto-trigger',
        start: 'top center',
        end: 'bottom center',
        scrub: true,
        markers: false,
      },
      y: 200,
      rotation: 0,
    });

    //Limon bloque texto
    gsap.to('.lima-bloque-texto-sin', {
      scrollTrigger: {
        trigger: '.frutas-bloque-texto-trigger',
        start: 'top center',
        end: 'bottom center',
        scrub: true,
        markers: false,
      },
      y: -200,
      rotation: 0,
    });

  }

  //Enjoy CON gas
  if( document.body.classList.contains('postid-489') ) {

    //Fresa bloque texto
    gsap.to('.fresa-bloque-texto-con', {
      scrollTrigger: {
        trigger: '.frutas-bloque-texto-trigger',
        start: 'top center',
        end: 'bottom center',
        scrub: true,
        markers: false,
      },
      y: 330,
      rotation: 0,
    });

    //Limon bloque texto
    gsap.to('.limon-bloque-texto-con', {
      scrollTrigger: {
        trigger: '.frutas-bloque-texto-trigger',
        start: 'top center',
        end: 'bottom center',
        scrub: true,
        markers: false,
      },
      y: -200,
      rotation: 0,
    });

  }

  //Primavera
  if( document.body.classList.contains('postid-211') ) {
    gsap.to('.gota', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        toggleActions: 'restart pause reverse pause',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: -180,
      rotation: 0,
    });
    gsap.to('.flor', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        toggleActions: 'restart pause reverse pause',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: 120,
      rotation: 0,
    });
  }

  //Font Natura
  if( document.body.classList.contains('postid-209') ) {
    gsap.to('.acuarela', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: -280,
      rotation: 0,
    });
  }

  //SAN BENEDETTO ZERO
  if( document.body.classList.contains('postid-200') ) {
    gsap.to('.fruta-1', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: 580,
      rotation: 0,
    });

    gsap.to('.fruta-2', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: 280,
      rotation: 0,
    });

    gsap.to('.fruta-3', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: -280,
      rotation: 0,
    });
  }

  //SAN BENEDETTO Essenzia agua
  if( document.body.classList.contains('postid-324') ) {
    gsap.to('.manzana-agua', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: '-123 top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: -580,
      rotation: 0,
    });

    gsap.to('.limon-agua', {
      scrollTrigger: {
        trigger: '.bg-custom-image',
        start: '-123 top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: 450,
      rotation: 0,
    });

    gsap.set('.bg-splash-agua', { x: "-50%", y: "-50%" })
    gsap.to('.bg-splash-agua', {
      scrollTrigger: {
        trigger: '.bg-splash-agua-trigger',
        start: 'top center',
        end: 'bottom center',
        scrub: true,
        markers: false,
      },
      y: '-30%',
      rotation: 0,
    });
  }

  //SAN THÉ
  if( document.body.classList.contains('postid-198') ) {
    gsap.to('.te-imagenes-top', {
      scrollTrigger: {
        trigger: '.te-imagenes-trigger',
        start: 'top center',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: 400,
      rotation: 0,
    });

    gsap.to('.te-imagenes-bottom', {
      scrollTrigger: {
        trigger: '.te-imagenes-trigger',
        start: 'center center',
        end: 'bottom center',
        scrub: true,
        markers: false,
      },
      y: -300,
      rotation: 0,
    });
  }

  //SAN BENEDETTO Essenzia refresco
  if( document.body.classList.contains('postid-429') ) {
    gsap.to('.menta-essenzia-top', {
      scrollTrigger: {
        trigger: '.menta-essenzia-bottom-trigger',
        start: 'top center',
        end: 'bottom center',
        scrub: true,
        markers: false,
      },
      y: 400,
      rotation: 50,
    });

    gsap.to('.menta-essenzia-bottom', {
      scrollTrigger: {
        trigger: '.menta-essenzia-bottom-trigger',
        start: 'top center',
        end: 'bottom center',
        scrub: true,
        markers: false,
      },
      y: 300,
      rotation: -30,
    });
  }
}


if( document.body.classList.contains('page-template-custom-template-historia') ) {
  //Barrita vertical que se rellena con scroll en página Historia
  let line_height = document.querySelector('.border-dashed-custom').clientHeight + 236;
  gsap.to(".border-dashed-custom .border-fill", {
    scrollTrigger: {
      trigger: '.border-dashed-custom',
      start: '-265px center',
      end: 'bottom center',
      scrub: true,
      markers: false,
      onUpdate: self => {
        let height = self.progress * line_height;
        document.querySelector(".border-dashed-custom .border-fill").style.height = height + 'px';
      }
    }
  });

  let maxWhiteLineHeight = 150;
  gsap.to(".white-line-timeline", {
    scrollTrigger: {
      trigger: '.white-line-timeline-trigger',
      start: 'top center',
      end: 'bottom center',
      scrub: true,
      markers: false,
      onUpdate: self => {
        let height = self.progress * maxWhiteLineHeight;
        document.querySelector(".white-line-timeline").style.height = height + 'px';
      }
    }
  });

  let anos = [
    '2002',
    '2008',
    '2013',
    '2019',
    '2022',
    '2006',
    '2009',
    '2016',
    '2020',
  ];

  anos.forEach(ano => {
    let selectorAnoLeft = `.ano-timeline-${ano}.ano-timeline-left`;
    if(document.querySelector(selectorAnoLeft)) {
      gsap.to(selectorAnoLeft, {
        scrollTrigger: {
          trigger: '.ano-timeline-' + ano,
          start: '-130px 50%',
          end: 'bottom',
          scrub: true,
          markers: false,
          onEnter: self => {
            document.querySelector(selectorAnoLeft).classList.add('ano-activo');
            document.querySelector(".ano-" + ano).classList.remove('opacity-25');
          },
          onEnterBack: self => {
            //document.querySelector(selectorAnoLeft).classList.remove('ano-activo');
          },
          onLeave: self => {
            document.querySelector(selectorAnoLeft).classList.add('ano-activo');
            document.querySelector(".ano-" + ano).classList.remove('opacity-25');
          },
          onLeaveBack: self => {
            document.querySelector(selectorAnoLeft).classList.remove('ano-activo');
            document.querySelector(".ano-" + ano).classList.add('opacity-25');
          },
        }
      });
    }


    let selectorAnoRight = `.ano-timeline-${ano}.ano-timeline-right`;
    if(document.querySelector(selectorAnoRight)) {
      gsap.to(selectorAnoRight, {
        scrollTrigger: {
          trigger: '.ano-timeline-' + ano,
          start: '-130px bottom',
          end: 'bottom',
          scrub: true,
          markers: false,
          onEnter: self => {
            document.querySelector(selectorAnoRight).classList.add('ano-activo');
            document.querySelector(".ano-" + ano).classList.remove('opacity-25');
          },
          onEnterBack: self => {
            //document.querySelector(selectorAnoRight).classList.remove('ano-activo');
          },
          onLeave: self => {
            document.querySelector(selectorAnoRight).classList.add('ano-activo');
            document.querySelector(".ano-" + ano).classList.remove('opacity-25');
          },
          onLeaveBack: self => {
            document.querySelector(selectorAnoRight).classList.remove('ano-activo');
            document.querySelector(".ano-" + ano).classList.add('opacity-25');
          },
        }
      });
    }
  });
}



//BG Parallax
let bgParallax = document.querySelectorAll('.bg-parallax');
if(bgParallax) {
  bgParallax.forEach((bg) => {
    gsap.to(bg, {
      backgroundPosition: `50% ${innerHeight / 2}px`,
      ease: "none",
      scrollTrigger: {
        trigger: bg,
        start: "top top", 
        end: "bottom top",
        scrub: true
      }
    });
  });
}

//img Parallax
let imgParallax = document.querySelectorAll('.img-parallax');
if(imgParallax) {
  ScrollTrigger.matchMedia({
    "(min-width: 1200px)": function() {
      imgParallax.forEach((img) => {
        gsap.to(img, {
          scrollTrigger: {
            trigger: img,
            start: 'top center',
            end: 'bottom center',
            scrub: true,
            markers: false,
          },
          y: -200,
          ease: "sine.out",
          rotation: 0,
        });
      });
    }
  })
}