import Swiper from 'swiper';
import SwiperCore, { Navigation, Pagination } from 'swiper/core';

SwiperCore.use([Navigation, Pagination]);

export default {
  init() {
    new Swiper('.newsroom__blog-body', {
      slidesPerView: 3,
      spaceBetween: 50,
      navigation: {
        nextEl: '.btn-arrow.next',
        prevEl: '.btn-arrow.prev',
      },
    });
  },
  finalize() {},
};
