/* global WP_API_Settings */

import Vue from "vue";
import WpRest from "wpapi";

/**
 * API Configuration
 */
const
URI = typeof WP_API_Settings == "object"
  ? WP_API_Settings.endpoint
  :"http://192.168.64.2/rgd3/",
API = WpRest.discover(URI)
/**
 * API Authorization
 */

if (typeof WP_API_Settings == "object")
  API.then(WP =>
    WP.auth({
      nonce: WP_API_Settings.nonce
    })
  );

/**
 * Cache Transport
 */

let cache = [];

API.then(WP =>
  WP.transport({
    // Overwrite the GET behavior to inject a caching layer
    get(wpreq, cb) {
      var result = cache[wpreq];
      // if cache hit is found, return the promise
      // signature as the default transport method
      if (result) {
        if (cb && typeof cb === "function") cb(null, result);
        return Promise.resolve(result);
      }
      // delegate to default transport if no cache
      // data is found
      return WpRest.transport.get(wpreq, cb).then(function (result) {
        cache[wpreq] = result;
        return result;
      });
    }
  })
);

/**
 * Export & Alias
 */

export default API;

if (process.env.NODE_ENV == "development"){
  API.then(wp=>( window.ƒ = wp ))
}

export let mixin = {
  asyncComputed: {
    async WP() {
      let WP = await API;
      return WP;
    }
  }
}