import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

function s3() {
  const s3_items4 = document.querySelectorAll(
    "[data-scroll-animation-item='4']"
  );
  ScrollTrigger.batch(s3_items4, {
    onEnter: (batch) => {
      const tl = gsap.timeline();
      tl.to(batch, {
        autoAlpha: 0,
        y: 40,
        duration: 0,
      });
      tl.to(batch, {
        autoAlpha: 1,
        delay: 0.5,
        stagger: 0.2,
        y: 0,
        duration: 0.8,
      });
    },
    onLeaveBack: (batch) => gsap.to(batch, { autoAlpha: 0, duration: 0 }),
    scrub: true,
  });
}

export default s3;
