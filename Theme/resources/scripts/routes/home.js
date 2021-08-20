import hero from '../components/home/hero';
import s1 from '../components/home/s1';
import s2 from '../components/home/s2';

export default {
  init() {
    hero(); // hero section
    s1(); // 사업영역 animation
    s2(); // 블로그 뉴스 공지
  },
  finalize() {},
};