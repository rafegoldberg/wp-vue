import Vue from 'vue'

let
filters = {
  USD(int){
    int = parseFloat(int)
    return int ? '$' + int.toFixed(2) : ''
  },
  percent(int){
    int = parseFloat(int)
    return int ? `${int}%` : ""
  }
}

// register global filters
Object.keys(filters).map(key=> Vue.filter(key, filters[key]))

export default filters