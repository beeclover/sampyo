$(document).ready(() => {
  setTimeout(() => {
    const loader = document.querySelector(".loader");
    const bg = document.querySelector(".loader-bg");
    const sipnner = document.querySelector(".loader-5");
    const tl = gsap.timeline();
    tl.to(bg, {
      autoAlpha: 0,
      duration: 2,
    });
    gsap.to(sipnner, {
      autoAlpha: 0,
      duration: 1,
    });
    tl.to(loader, {
      display: "none",
    });
    // 사업분야
    const cards = document.querySelectorAll("[data-scroll-animation]");
    cards.forEach((card) => {
      gsap.to(card, {
        autoAlpha: 0,
        y: card.dataset.y,
        duration: 0,
      });
    });
  }, 1000);
});
