import 'jquery';
import Alpine from 'alpinejs';

import SwiperCore, {
  Navigation,
  Pagination,
  EffectFade,
  Autoplay,
} from 'swiper/core';
SwiperCore.use([Navigation, Pagination, EffectFade, Autoplay]);

import Router from './util/router';
import common from './routes/common';
import newsroom from './routes/newsroom';

const routes = new Router({
  // All pages
  common,
  newsroom,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  Alpine.start();
});
