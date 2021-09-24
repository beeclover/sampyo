import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import Macy from 'macy';
import Swiper from 'swiper';

function s1() {
  const originalContainer = document
    .querySelector('#macy-container')
    .cloneNode(true);

  new Macy({
    container: '#macy-container',
    trueOrder: false,
    waitForImages: false,
    margin: 36,
    columns: 3,
    breakAt: {
      1280: 2,
      640: 1,
    },
  });

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

  // swiper target
  let swiperContainer = document.querySelector('#swiper-container');

  // swiper
  swiperContainer.appendChild(originalContainer);

  Array.from(
    swiperContainer.querySelectorAll('[class*="home__s1-imgCol"]')
  ).forEach((el) => {
    el.remove();
  });

  swiperContainer
    .querySelector('#macy-container')
    .classList.add('swiper-wrapper');

  new Swiper('#swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 20,
  });
}

export default s1;
