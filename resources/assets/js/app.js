
require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = "rfc3986";

Vue.component('slugWidget', require('./components/slugWidget.vue'));
Vue.component('tabWidget', require('./components/tabWidget.vue'));

// var app = new Vue({
//   el: '#app',
//   data: {}
// });
