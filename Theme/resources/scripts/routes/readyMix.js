import Swiper from 'swiper';

export default {
  init() {
    new Swiper('#readyMix', {
      slidesPerView: 5,
      spaceBetween: 50,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 3000,
      },
    });
  },
  finalize() {},
};
