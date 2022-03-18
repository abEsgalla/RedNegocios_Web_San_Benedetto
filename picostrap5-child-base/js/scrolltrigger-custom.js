/*
gsap.to('.limon-1', {
  scrollTrigger: {
    trigger: '.w-cabecera-animada',
    toggleActions: 'restart pause reverse pause',
    start: 'center center',
    end: 'bottom center',
    scrub: true,
    markers: true,
  },
  y: 220,
  rotation: 10,
  duration:3
});
*/


if( document.body.classList.contains('single-landing') ) {
  gsap.to('.producto-central', {
    scrollTrigger: {
      trigger: '.producto-central',
      toggleActions: 'play pause pause reverse',
      start: 'center center',
      end: 'bottom center',
      scrub: true,
      markers: true,
    },
    y: 60,
    // rotation: 10,
    duration:3
  });
}


if( document.body.classList.contains('page-template-custom-template-historia') ) {
  //Barrita vertical que se rellena con scroll en página Historia
  let line_height = document.querySelector('.border-dashed-custom').clientHeight;
  gsap.to(".border-dashed-custom .border-fill", {
    scrollTrigger: {
      trigger: '.border-dashed-custom',
      toggleActions: 'play none none none',
      start: 'top center',
      end: 'bottom center',
      scrub: true,
      markers: false,
      onUpdate: self => {
        let height = self.progress * line_height;
        document.querySelector(".border-dashed-custom .border-fill").style.height = height + 'px';
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
    gsap.to(".ano-timeline-" + ano, {
      scrollTrigger: {
        trigger: '.ano-timeline-' + ano,
        toggleActions: 'play none none none',
        start: '20px 50%',
        end: 'bottom',
        scrub: true,
        markers: false,
        onEnter: self => {
          document.querySelector(".ano-timeline-" + ano).classList.add('ano-activo');
          document.querySelector(".ano-" + ano).classList.remove('opacity-25');
        },
        onEnterBack: self => {
          //document.querySelector(".ano-timeline-" + ano).classList.remove('ano-activo');
        },
        onLeave: self => {
          document.querySelector(".ano-timeline-" + ano).classList.add('ano-activo');
          document.querySelector(".ano-" + ano).classList.remove('opacity-25');
        },
        onLeaveBack: self => {
          document.querySelector(".ano-timeline-" + ano).classList.remove('ano-activo');
          document.querySelector(".ano-" + ano).classList.add('opacity-25');
        },
      }
    });
  });
}
