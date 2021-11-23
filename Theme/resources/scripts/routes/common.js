import header from '../components/header';
import shrink from '../components/shrink';
import footer from '../components/footer';
import { select, bodyScrollLock } from '../components/alpine_function';

export default {
  containerInit() {},
  init() {
    header();
    shrink();
    footer();
    this.containerInit();
    window.select = select;
    window.bodyScrollLock = bodyScrollLock;
  },
  finalize() {},
};
