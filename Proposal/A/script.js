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
          return '<span class="' + className + '">' + (index + 1) + "</span>";
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

// 사업영역 animation
const card = document.querySelectorAll("[data-scroll-animation]");
ScrollTrigger.batch(card, {
  onEnter: (batch) => {
    const tl = gsap.timeline();
    tl.to(batch, {
      autoAlpha: 0,
      y: batch[0].dataset.y,
      duration: 0,
    });
    tl.to(batch, {
      autoAlpha: 1,
      stagger: 0.2,
      duration: 0.8,
      y: 0,
    });
  },
  onLeaveBack: (batch) => gsap.to(batch, { autoAlpha: 0, duration: 0 }),
  scrub: true,
});

const fadeAnimation = [];
fadeAnimation.push(document.querySelector(".bgLayer .a"));
fadeAnimation.push(document.querySelector(".bgLayer .b"));
fadeAnimation.forEach((fa) => {
  gsap.from(fa, {
    scrollTrigger: {
      onEnter: () => {
        gsap.to(fa, {
          autoAlpha: 1,
        });
      },
      trigger: fa,
      scrub: true,
    },
  });
});

// 책임경영
// img
const s3_items = document.querySelectorAll(
  "[data-scroll-animation-item='3'] img:nth-child(1)"
);
ScrollTrigger.batch(s3_items, {
  onEnter: (batch) => {
    const tl = gsap.timeline();
    tl.to(batch, {
      autoAlpha: 0,
      y: 40,
      duration: 0,
    });
    tl.to(batch, {
      autoAlpha: 1,
      y: 0,
      stagger: 0.2,
      duration: 0.3,
    });
  },
  onLeaveBack: (batch) => gsap.to(batch, { autoAlpha: 0, duration: 0 }),
  scrub: true,
});

// content
const s3_items2 = document.querySelectorAll(
  "[data-scroll-animation-item='3'] img:nth-child(2)"
);
ScrollTrigger.batch(s3_items2, {
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
      duration: 0.3,
    });
  },
  onLeaveBack: (batch) => gsap.to(batch, { autoAlpha: 0, duration: 0 }),
  scrub: true,
});

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

// 블로그 뉴스 공지
{
  const targetList = document.querySelectorAll("[data-target].list");
  const targetImgs = document.querySelectorAll("[data-target].img");
  targetList.forEach((t) => {
    t.addEventListener("mouseenter", () => {
      t.classList.add("enter");
      targetList.forEach((tt) => {
        if (tt.dataset.target !== t.dataset.target) {
          tt.classList.add("disable");
        }
      });
      targetImgs.forEach((timg) => {
        if (timg.dataset.target !== t.dataset.target) {
          timg.classList.add("disable");
        } else {
          timg.classList.add("enter");
        }
      });
    });
    t.addEventListener("mouseleave", () => {
      t.classList.remove("enter");
      targetList.forEach((tt) => {
        if (tt.dataset.target !== t.dataset.target) {
          tt.classList.remove("disable");
        }
      });
      targetImgs.forEach((timg) => {
        if (timg.dataset.target !== t.dataset.target) {
          timg.classList.remove("disable");
        } else {
          timg.classList.remove("enter");
        }
      });
    });
    t.addEventListener("click", () => {
      t.classList.add("click");
      targetList.forEach((tt) => {
        if (tt.dataset.target !== t.dataset.target) {
          tt.classList.remove("click");
        }
      });
      targetImgs.forEach((timg) => {
        if (timg.dataset.target === t.dataset.target) {
          timg.classList.add("active");
        } else {
          timg.classList.remove("active");
        }
      });
    });
  });
}
