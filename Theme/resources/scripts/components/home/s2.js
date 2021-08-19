import Swiper from 'swiper';

function s2() {
  function dynamicClassActive(currentId) {
    const posts = document.querySelectorAll('#postBox .li__s1');
    posts.forEach((post) => {
      const { id } = post.dataset;
      if (id === currentId) {
        post.classList.add('active');
      } else {
        post.classList.remove('active');
      }
    });
  }

  const cardContent = new Swiper('#card-content-swiper', {
    preloadImages: true,
    updateOnImagesReady: true,
    touchEventsTarget: 'wrapper',
    effect: 'fade',
    allowTouchMove: false,
    fadeEffect: {
      crossFade: true,
    },
    navigation: {
      nextEl: '.card-content-footer .next',
      prevEl: '.card-content-footer .prev',
    },
    on: {
      init: function (test) {
        console.log('swiper initialized', '\n', test);
      },
      slideChange: function (test) {
        const { realIndex, slides } = test;
        const currentPost =
          slides[realIndex].querySelector('.card-content-body');
        console.log(currentPost);
        dynamicClassActive(currentPost.dataset['id']);
      },
    },
  });

  const cardBg = new Swiper('#card-content-swiper-bg', {
    preloadImages: true,
    updateOnImagesReady: true,
    touchEventsTarget: 'wrapper',
    effect: 'fade',
    allowTouchMove: false,
    fadeEffect: {
      crossFade: true,
    },
  });

  cardContent.controller.control = cardBg;
  cardBg.controller.control = cardContent;
}

export default s2;
