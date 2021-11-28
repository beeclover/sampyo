import Swiper from 'swiper';

function s4() {
  const cloneS4 = document.querySelector('#originalS4').cloneNode(true);
  const targetS4 = document.querySelector('#swipercontainerS4');

  targetS4.prepend(cloneS4);
  targetS4.querySelector('#originalS4').removeAttribute('class');
  targetS4.querySelector('#originalS4').classList.add('swiper-wrapper');
  targetS4.querySelectorAll('#cardWrap').forEach((e) => {
    e.classList.add('swiper-slide');
    e.classList.remove('w-1/3');
    const sal = e.querySelector('[data-sal]');
    if (sal) {
      sal.removeAttribute('data-sal');
      sal.removeAttribute('data-sal-delay');
      sal.removeAttribute('style');
    }
  });

  new Swiper(targetS4, {
    slidesPerView: 'auto',
    spaceBetween: 20,
    breakpoints: {
      640: {
        spaceBetween: 28,
        centeredSlides: true,
        initialSlide: 1,
      },
    },
  });
}

export default s4;
