import Swiper from 'swiper';
import gsap from 'gsap';

class Slideshow {
  constructor(el) {
    this.DOM = { el: el };

    this.config = {
      slideshow: {
        delay: 3000,
        pagination: {
          duration: 3,
          el: '.swiper-pagination',
          clickable: true,
        },
      },
    };

    this.init();
  }

  init() {
    var self = this;

    this.slideshow = new Swiper(this.DOM.el, {
      loop: true,
      effect: 'fade',
      preloadImages: true,
      updateOnImagesReady: true,
      touchEventsTarget: 'wrapper',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">0' + (index + 1) + '</span>';
        },
      },
      on: {
        init: () => {
          self.animate('next');
        },
      },
    });

    this.initEvents();
  }
  // animate(diraction = 'next') {
  animate() {
    // Get the active slide
    this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active');
    this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('img');
    this.DOM.activeSlideTitle1 = this.DOM.activeSlide.querySelector(
      '.hero-content-title-1'
    );
    this.DOM.activeSlideTitle2 = this.DOM.activeSlide.querySelector(
      '.hero-content-title-2'
    );

    // reset animation
    if (this.DOM.t1) this.DOM.t1.kill();
    if (this.DOM.t2) this.DOM.t2.kill();
    this.DOM.el.querySelectorAll('.swiper-slide').forEach((element) => {
      element.querySelector('.hero-content-title-1').removeAttribute('style');
      element.querySelector('.hero-content-title-2').removeAttribute('style');
    });

    // .title1 애니메이션
    this.DOM.t1 = gsap.timeline();
    this.DOM.t1.to(this.DOM.activeSlideTitle1, { y: 10, duration: 0.5 });
    this.DOM.t1.to(this.DOM.activeSlideTitle1, {
      opacity: 1,
      y: 0,
      duration: 1,
    });
    this.DOM.t2 = gsap.timeline();
    this.DOM.t2.to(this.DOM.activeSlideTitle2, { y: 10, duration: 0.3 });
    this.DOM.t2.to(this.DOM.activeSlideTitle2, {
      opacity: 1,
      y: 0,
      delay: 0.3,
      duration: 2,
    });
  }
  initEvents() {
    this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));
    this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));
  }
}

function hero() {
  new Slideshow(document.querySelector('.hero-slide'));
}

export default hero;
