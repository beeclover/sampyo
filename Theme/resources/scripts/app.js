import 'jquery';
import Alpine from 'alpinejs';
import { gsap, ScrollTrigger } from 'gsap/all';
import intersect from '@alpinejs/intersect';

Alpine.plugin(intersect);

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
import csr from './routes/csr';
import phcPile from './routes/phcPile';
import mindset from './routes/mindset';

const routes = new Router({
  // All pages
  common,
  newsroom,
  home,
  singleBusiness: business,
  readyMix,
  sampyoTechCenter: readyMix,
  blueCon: readyMix,
  distribution: readyMix,
  csr,
  phcPile,
  mindset,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  Alpine.start();
});
