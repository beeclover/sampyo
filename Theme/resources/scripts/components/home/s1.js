import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

function s1() {
  const card = document.querySelectorAll('[data-scroll-animation]');
  ScrollTrigger.batch(card, {
    onEnter: (batch) => {
      const tl = gsap.timeline();
      tl.to(batch, {
        autoAlpha: 0,
        y: Math.floor(Math.random() * 100),
        duration: 0,
      });
      tl.to(batch, {
        autoAlpha: 1,
        stagger: 0.2,
        duration: 0.8,
        y: 0,
      });
    },
    onLeaveBack: (batch) => gsap.to(batch, { autoAlpha: 0, duration: 0 }),
    scrub: true,
  });
}

export default s1;
