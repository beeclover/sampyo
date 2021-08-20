import Swiper from 'swiper';
import camelCase from '../../util/camelCase';

function s2() {
  // Wrap Swiper
  const swiperContentRoot = new Swiper('#swiperContentRoot', {
    preloadImages: true,
    touchEventsTarget: 'wrapper',
    effect: 'fade',
    allowTouchMove: false,
    fadeEffect: {
      crossFade: true,
    },
  });
  const swiperBgRoot = new Swiper('#swiperBgRoot', {
    preloadImages: true,
    updateOnImagesReady: true,
    touchEventsTarget: 'wrapper',
    effect: 'fade',
    allowTouchMove: false,
    fadeEffect: {
      crossFade: true,
    },
  });

  function dynamicClassActive(currentId, postBox) {
    postBox.forEach((post) => {
      const { id } = post.dataset;
      if (id === currentId) {
        post.classList.add('active');
      } else {
        post.classList.remove('active');
      }
    });
  }

  // children
  // children 기준 갯수
  const childrenBg = document.querySelectorAll(
    '#swiperBgRoot > .swiper-wrapper > .swiper-slide'
  );
  const childrenContent = document.querySelectorAll(
    '#swiperContentRoot > .swiper-wrapper > .swiper-slide'
  );
  const childrenCount = childrenBg.length;

  for (let index = 0; index < childrenCount; index++) {
    // set content slider
    const contentEl = childrenContent[index].querySelector('.card-content');
    const contentSwiper = contentEl.querySelector('[id="swiperContentChild"]');
    const postBoxId = contentSwiper.dataset.id;
    const postBox = document.querySelectorAll(
      `#postBox[data-id="${postBoxId}"] li`
    );
    const content = new Swiper(contentSwiper, {
      preloadImages: true,
      updateOnImagesReady: true,
      touchEventsTarget: 'wrapper',
      effect: 'fade',
      allowTouchMove: false,
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: contentEl.querySelector('.card-content-footer .next'),
        prevEl: contentEl.querySelector('.card-content-footer .prev'),
      },
      on: {
        init: function () {},
        slideChange: function (s) {
          const { realIndex, slides } = s;
          const currentPost =
            slides[realIndex].querySelector('.card-content-body');
          const { id } = currentPost.dataset;
          dynamicClassActive(id, postBox);
        },
      },
    });

    // set background slider
    const bgEl = childrenBg[index];
    const bg = new Swiper(bgEl.querySelector('[id="swiperBgChild"]'), {
      preloadImages: true,
      updateOnImagesReady: true,
      touchEventsTarget: 'wrapper',
      effect: 'fade',
      allowTouchMove: false,
      fadeEffect: {
        crossFade: true,
      },
    });

    content.controller.control = bg;
  }

  // tabs
  const tabs = document.querySelectorAll('#tab li');
  const tabBody = document.querySelector('#tab-content');
  const tabPostbox = document.querySelectorAll('#tab-content #postBox');

  tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
      const { id } = tab.dataset;

      // tabs 아이템에 active 클래스 설정
      tabs.forEach((t) => t.classList.remove('active'));
      tab.classList.add('active');

      // BG 슬라이드 설정
      let slideId;
      switch (id) {
        case 'blog':
          slideId = 0;
          break;
        case 'press':
          slideId = 1;
          break;
        case 'notice-board':
          slideId = 2;
          break;
        default:
          break;
      }
      swiperBgRoot.slideTo(slideId);
      swiperContentRoot.slideTo(slideId);

      // tabs 컨텐츠 설정
      tabPostbox.forEach((t) => t.classList.remove('active'));
      tabBody
        .querySelector(`#postBox[data-id="${camelCase(id)}"]`)
        .classList.add('active');
    });
  });

  // tab item click
  tabPostbox.forEach((tpb) => {
    const { id } = tpb.dataset;
    const content = document.querySelector(
      `#swiperContentChild[data-id="${id}"]`
    );
    const contents = content.querySelectorAll('.swiper-slide');

    const tabPosts = tpb.querySelectorAll('li[data-id]');
    tabPosts.forEach((post) => {
      post.addEventListener('click', () => {
        const { id } = post.dataset;
        contents.forEach((b) => {
          const contentId = b.querySelector('.card-content-body').dataset.id;
          const { index } = b.dataset;
          console.log(id, contentId, index);
          if (id === contentId) {
            content.swiper.slideTo(index);
          }
        });
      });
    });
  });
}

export default s2;
