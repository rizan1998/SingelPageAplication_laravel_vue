
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

// vue toast
import VueToast from 'vue-toast-notification';
// Import one of the available themes
//import 'vue-toast-notification/dist/theme-default.css';
import 'vue-toast-notification/dist/theme-sugar.css';

Vue.use(VueToast);
//Vue.$toast.open({/* options */});
let instance = Vue.$toast.open('You did it!');
// Force dismiss specific toast
instance.dismiss();
// Dismiss all opened toast immediately
Vue.$toast.clear();

// nav component
Vue.component('navigation', require('./components/Navigation.vue').default);


const app = new Vue({
    el: '#parsinta',
    router: new VueRouter(routes),

});
