import 'jquery';

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
});
