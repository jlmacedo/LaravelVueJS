
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import App from './components/App.vue';
import Home from './components/Home.vue';

window.Vue = require('vue');

Vue.component('home-name', Home);

//import VueRouter from 'vue-router';

//window.Vue.use(VueRouter);

//const router = new VueRouter({ routes })

//const app = new Vue({ router }).$mount('#app')

const app = new Vue({
    el: '#app',
    render: h => h(App)
})
