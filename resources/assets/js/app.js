require('./bootstrap');

window.Vue = require('vue');

const axios = require('axios');

Vue.component('contacts', require('./components/Contacts.vue'));

const app = new Vue({
  el: '#app'
});
