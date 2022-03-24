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

  //Enjoy
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
        toggleActions: 'restart pause reverse pause',
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
        toggleActions: 'restart pause reverse pause',
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
        toggleActions: 'restart pause reverse pause',
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
        toggleActions: 'restart pause reverse pause',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        markers: false,
      },
      y: -100,
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
}


if( document.body.classList.contains('page-template-custom-template-historia') ) {
  //Barrita vertical que se rellena con scroll en página Historia
  let line_height = document.querySelector('.border-dashed-custom').clientHeight + 256;
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
    let selectorAnoLeft = `.ano-timeline-${ano}.ano-timeline-left`
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

    let selectorAnoRight = `.ano-timeline-${ano}.ano-timeline-right`
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