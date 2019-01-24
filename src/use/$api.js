import Vue from 'vue'
import Axios from 'axios'

let API = Axios.create({
  baseURL: 'https://stage15.dermstoretech.com'
})

Vue.prototype.$API = Vue.prototype.$api = API

export default API