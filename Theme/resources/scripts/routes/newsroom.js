import Swiper from 'swiper';

export default {
  init() {
    // newsroom pin blog
    new Swiper('.newsroom__blog-body', {
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: '.newsroom__blog .btn-arrow.next',
        prevEl: '.newsroom__blog .btn-arrow.prev',
      },
      breakpoints: {
        480: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        640: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });

    // newsroom pin blog
    new Swiper('.newsroom__media-swiper', {
      loop: true,
      preloadImages: true,
      updateOnImagesReady: true,
      touchEventsTarget: 'wrapper',
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '.newsroom__media .btn-arrow.next',
        prevEl: '.newsroom__media .btn-arrow.prev',
      },
    });

    // newsroom pin blog
    new Swiper('.newsroom__newslater-notice', {
      loop: true,
      direction: 'vertical',
      slidesPerView: 1,
      height: 140,
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        640: {
          height: 80,
        },
      },
    });

    // newsroom media row
    new Swiper('#media_release', {
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '#media_release_btn.btn-arrow.next',
        prevEl: '#media_release_btn.btn-arrow.prev',
      },
    });
    new Swiper('#media_featured', {
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '#media_featured_btn.btn-arrow.next',
        prevEl: '#media_featured_btn.btn-arrow.prev',
      },
    });
  },
  finalize() {},
};
