import 'jquery';
import Alpine from 'alpinejs';
import { gsap, ScrollTrigger } from 'gsap/all';

import SwiperCore, {
  Navigation,
  Pagination,
  EffectFade,
  Autoplay,
  Controller,
} from 'swiper/core';
SwiperCore.use([Navigation, Pagination, EffectFade, Autoplay, Controller]);
gsap.registerPlugin(ScrollTrigger);

import Router from './util/router';
import common from './routes/common';
import newsroom from './routes/newsroom';
import home from './routes/home';
import business from './routes/business';
import readyMix from './routes/readyMix';

const routes = new Router({
  // All pages
  common,
  newsroom,
  home,
  singleBusiness: business,
  readyMix,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  Alpine.start();
});
