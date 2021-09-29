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
    e.removeAttribute('data-scrollreveal');
  });

  new Swiper(targetS4, {
    slidesPerView: 'auto',
    spaceBetween: 20,
  });
}

export default s4;
