import Headroom from 'headroom.js';

function header() {
  const targetEl = document.querySelector('header#global');
  const headroom = new Headroom(targetEl);
  headroom.init();

  $(window).scroll(function () {
    const shrinkHeader =
      document.querySelector('.section.hero')?.offsetHeight ?? 100;
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      $('header#global').addClass('shrink');
    } else {
      $('header#global').removeClass('shrink');
    }
  });
  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }
}

export default header;
