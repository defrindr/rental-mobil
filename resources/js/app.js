require('./bootstrap');

window.Vue = require('vue');
import IndexMobil from './components/mobil/daftarMobil.vue';
import IndexLayout from './components/layouts/Index.vue';
import AboutLayout from './components/layouts/about.vue';
// Vue.component('router-view',IndexMobil);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);
// Vue.use(VueAxios, axios);

import VueRouter from 'vue-router';
Vue.use(VueRouter);
// define routes for users

const routes = [
    {
        path: '/',
        name: 'index',
        component: IndexLayout
    },
    {
        path: '/daftar-mobil',
        name: 'mobilList',
        component: IndexMobil
    },
    {
        path: '/about',
        name: 'about',
        component: AboutLayout
    },
]

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, "#website")).$mount('#website');

// const app = new Vue({
//     el: '#app',
// });
