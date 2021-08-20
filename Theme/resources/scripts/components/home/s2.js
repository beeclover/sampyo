import Swiper from 'swiper';

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
    const content = new Swiper(
      contentEl.querySelector('[id*="swiperContentChild"]'),
      {
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
            const id = currentPost.dataset['id'];
            const syncPostBox = document.querySelectorAll(
              `#postBox[data-id="${index}"] li`
            );
            dynamicClassActive(id, syncPostBox);
          },
        },
      }
    );

    // set background slider
    const bgEl = childrenBg[index];
    const bg = new Swiper(bgEl.querySelector('[id*="swiperBgChild"]'), {
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
      const id = tab.dataset['id'];

      // tabs 아이템에 active 클래스 설정
      tabs.forEach((t) => t.classList.remove('active'));
      tab.classList.add('active');

      // BG 슬라이드 설정
      swiperBgRoot.slideTo(id);
      swiperContentRoot.slideTo(id);

      // tabs 컨텐츠 설정
      tabPostbox.forEach((t) => t.classList.remove('active'));
      tabBody
        .querySelector(`#postBox[data-id="${id}"]`)
        .classList.add('active');
    });
  });
}

export default s2;
