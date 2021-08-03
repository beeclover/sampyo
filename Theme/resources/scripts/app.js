import 'jquery';

import Router from './util/router';
import common from './routes/common';

const routes = new Router({
  // All pages
  common,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
});
