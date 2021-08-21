import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

function s3() {
  const s3_items = document.querySelectorAll(
    "[data-scroll-animation-item='3']"
  );
  ScrollTrigger.batch(s3_items, {
    onEnter: (batch) => {
      const tl = gsap.timeline();
      tl.to(batch, {
        autoAlpha: 0,
        y: 40,
        duration: 0,
      });
      tl.to(batch, {
        autoAlpha: 1,
        y: 0,
        stagger: 0.2,
        duration: 0.3,
      });
    },
    onLeaveBack: (batch) => gsap.to(batch, { autoAlpha: 0, duration: 0 }),
    scrub: true,
  });
}

export default s3;
