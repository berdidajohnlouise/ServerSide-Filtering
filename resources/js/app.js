/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router').default;


import App from './components/App.vue'

export const router = new VueRouter({
    mode: 'history',
    history: true,
    hash: false,
})

new Vue(
    Vue.util.extend({router},
        App
    )
).$mount('#app');
