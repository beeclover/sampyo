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
import 'swiper/css/bundle';
SwiperCore.use([Navigation, Pagination, EffectFade, Autoplay, Controller]);
gsap.registerPlugin(ScrollTrigger);

import Router from './util/router';
import common from './routes/common';
import newsroom from './routes/newsroom';
import home from './routes/home';
import business from './routes/business';
import readyMix from './routes/readyMix';
import csr from './routes/csr';
import mindset from './routes/mindset';
import evaluation from './routes/evaluation';
import talentDev from './routes/talentDev';

const routes = new Router({
  // All pages
  common,
  newsroom,
  home,
  singleBusiness: business,
  readyMix,
  sampyoTechCenter: readyMix,
  blueCon: readyMix,
  csr,
  mindset,
  talentDev,
  distribution: evaluation,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  Alpine.start();
});
