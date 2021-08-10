import Swiper from 'swiper';
import SwiperCore, { Navigation, Pagination, EffectFade } from 'swiper/core';

SwiperCore.use([Navigation, Pagination, EffectFade]);

export default {
  init() {
    // newsroom pin blog
    new Swiper('.newsroom__blog-body', {
      slidesPerView: 3,
      spaceBetween: 50,
      navigation: {
        nextEl: '.newsroom__blog .btn-arrow.next',
        prevEl: '.newsroom__blog .btn-arrow.prev',
      },
    });

    // newsroom pin blog
    new Swiper('.newsroom__press-swiper', {
      loop: true,
      preloadImages: true,
      updateOnImagesReady: true,
      touchEventsTarget: 'wrapper',
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '.newsroom__press .btn-arrow.next',
        prevEl: '.newsroom__press .btn-arrow.prev',
      },
    });
  },
  finalize() {},
};
