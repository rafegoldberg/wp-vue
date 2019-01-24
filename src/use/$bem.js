import Vue from 'vue';
import BEM from 'vue-bem-cn';

Vue.use(BEM, {
  methodName: 'bem',
  delimiters: {
    ns: '',        // namespace
    el: '-',       // element delimeter
    mod: '_',      // modifier delimeter
    modVal: '=', // value delimeter for modifier
  },
  hyphenate: false
})