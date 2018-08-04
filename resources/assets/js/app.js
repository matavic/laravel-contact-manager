require('./bootstrap');

window.Vue = require('vue');

Vue.component('contacts', require('./components/Contacts.vue'));

const app = new Vue({
  el: '#app'
});
