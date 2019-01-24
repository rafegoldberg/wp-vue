import Vue from 'vue'
import App from '@/app'
import router from '$use/router'

import '$use/async'
import '$use/filters'

import '$use/$log'
import '$use/$api'
import '$use/$bem'

/**
 * @todo match app.$data.context to WP API <https://wpscholar.com/blog/internal-wp-rest-api-calls/>
 */
new Vue({
  ...App,
  router,

  el: '#app',  
  data:()=> ({
    staging: process.env.NODE_ENV=="development" ? true: false
  }),
})

Vue.config.productionTip = false