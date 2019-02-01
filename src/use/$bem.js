import Vue from 'vue';
import BEM from 'vue-bem-cn';

Vue.use(BEM, {
  methodName: 'bem',
  delimiters: {
    ns: '',       // namespace
    el: '-',      // element
    mod: '_',     // modifier
    modVal: '=',  // mod value
  },
  hyphenate: false
})