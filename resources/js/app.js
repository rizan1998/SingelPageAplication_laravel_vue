
// jquery untuk navigation
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) { }

// axios
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// require('./bootstrap');

// vue js
window.Vue = require('vue').default; //vue app
import VueRouter from 'vue-router'; //vue router

Vue.use(VueRouter); //use vue router
import routes from './router/index'; //import file router


Vue.component('navigation', require('./components/Navigation.vue').default);


const app = new Vue({
    el: '#parsinta',
    router: new VueRouter(routes),

});
