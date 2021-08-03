import header from '../components/header';

export default {
  containerInit() {},
  init() {
    header();
    this.containerInit();
  },
  finalize() {},
};
