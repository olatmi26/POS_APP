require('./bootstrap');
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//window.Vue = require('vue').default;
// import Vue from 'vue';
// window.Vue = require('vue');
require('./login');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// const app = new Vue({
//     el: '#app',
// });