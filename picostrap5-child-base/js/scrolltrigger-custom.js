console.log('scrolltrigger custom');

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