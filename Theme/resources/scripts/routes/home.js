import ScrollReveal from 'scrollreveal';

import hero from '../components/home/hero';
import s1 from '../components/home/s1';
import s2 from '../components/home/s2';
import s3 from '../components/home/s3';

export default {
  init() {
    hero(); // hero section
    s1(); // 사업영역 animation
    s2(); // 블로그 뉴스 공지
    s3(); // 삼표의 책임경영

    const cards = Array.from(
      document.querySelectorAll('[data-scrollreveal]'),
      (card) => {
        if (!card.parentElement.classList.contains('swiper-wrapper'))
          return card;
        return null;
      }
    );
    cards.forEach((card) => {
      if (!card) return;
      const dataset = card.dataset;
      let option = {
        distance: `${Math.floor(Math.random() * 100)}px`,
        origin: 'bottom',
        duration: 800,
      };

      if (dataset.srDelay) option['delay'] = dataset.srDelay;

      ScrollReveal().reveal(card, option);
    });
  },
  finalize() {},
};
