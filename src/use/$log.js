let
log = console.log.bind(console)

import Vue from "vue";
Vue.prototype.$log = log

if( process.env.NODE_ENV == "development" ){
  log.dir     = console.dir.bind(console)
  log.table   = console.table.bind(console)
  log.set     = console.groupCollapsed.bind(console)
  log.end     = console.groupEnd.bind(console)
  log.warn    = console.warn.bind(console)
  log.error   = console.error.bind(console)
  log.err     = console.error.bind(console)
  log.clear   = console.clear.bind(console)
}
else
  log         =
  log.dir     =
  log.table   =
  log.set     =
  log.end     =
  log.warn    =
  log.error   =
  log.err     =
  log.clear   = new Function();

export default log
