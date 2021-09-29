import header from '../components/header';
import { select } from '../components/alpine_function';

export default {
  containerInit() {},
  init() {
    header();
    this.containerInit();
    window.select = select;
  },
  finalize() {},
};
