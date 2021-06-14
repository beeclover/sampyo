class Slideshow {
  constructor(el) {
    this.DOM = { el: el };

    this.config = {
      slideshow: {
        delay: 3000,
        pagination: {
          duration: 3,
          el: ".swiper-pagination",
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
      effect: "fade",
      preloadImages: true,
      updateOnImagesReady: true,
      touchEventsTarget: "wrapper",
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          switch (index) {
            case 0:
              return `
                <div class="${className}">
                  <span className="num">0${index + 1}</span>
                  <p>
                    미래의 새로운 삶을 위한<br/>
                    기초를 만들다
                  </p>
                </div>
              `;
            case 1:
              return `
                <div class="${className}">
                  <span className="num">0${index + 1}</span>
                  <p>
                    해양·항만 분야<br/>
                    특수시멘트 개발 기술제휴
                  </p>
                </div>
              `;
            case 2:
              return `
                <div class="${className}">
                  <span className="num">0${index + 1}</span>
                  <p>
                    삼표시멘트<br/>
                    업계 선도 ESG 경영체계 구축
                  </p>
                </div>
              `;
            default:
              return (
                '<span class="' + className + '">' + (index + 1) + "</span>"
              );
          }
        },
      },
      on: {
        init: () => {
          self.animate("next");
        },
      },
    });

    this.initEvents();
  }
  animate(diraction = "next") {
    // Get the active slide
    this.DOM.activeSlide = this.DOM.el.querySelector(".swiper-slide-active");
    this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector("img");
    this.DOM.activeSlideTitle1 = this.DOM.activeSlide.querySelector(
      ".hero-content-title-1"
    );
    this.DOM.activeSlideTitle2 = this.DOM.activeSlide.querySelector(
      ".hero-content-title-2"
    );

    // reset animation
    if (this.DOM.t1) this.DOM.t1.kill();
    if (this.DOM.t2) this.DOM.t2.kill();
    this.DOM.el.querySelectorAll(".swiper-slide").forEach((element) => {
      element.querySelector(".hero-content-title-1").removeAttribute("style");
      element.querySelector(".hero-content-title-2").removeAttribute("style");
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
    this.slideshow.on("slideNextTransitionStart", () => this.animate("next"));
    this.slideshow.on("slidePrevTransitionStart", () => this.animate("prev"));
  }
}

const slideshow = new Slideshow(document.querySelector(".hero-slide"));

// 인재채용
const s3_items4 = document.querySelectorAll("[data-scroll-animation-item='4']");
ScrollTrigger.batch(s3_items4, {
  onEnter: (batch) => {
    const tl = gsap.timeline();
    tl.to(batch, {
      autoAlpha: 0,
      y: 40,
      duration: 0,
    });
    tl.to(batch, {
      autoAlpha: 1,
      delay: 0.5,
      stagger: 0.2,
      y: 0,
      duration: 0.8,
    });
  },
  onLeaveBack: (batch) => gsap.to(batch, { autoAlpha: 0, duration: 0 }),
  scrub: true,
});
