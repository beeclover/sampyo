import Swiper from 'swiper';

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

    // newsroom pin blog
    new Swiper('.newsroom__newslater-notice', {
      loop: true,
      direction: 'vertical',
      slidesPerView: 1,
      height: 80,
      autoplay: {
        delay: 5000,
      },
    });

    // newsroom press row
    new Swiper('#press_release', {
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '#press_release_btn.btn-arrow.next',
        prevEl: '#press_release_btn.btn-arrow.prev',
      },
    });
    new Swiper('#press_featured', {
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '#press_featured_btn.btn-arrow.next',
        prevEl: '#press_featured_btn.btn-arrow.prev',
      },
    });
  },
  finalize() {},
};
