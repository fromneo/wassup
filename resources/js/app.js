
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueAxios from 'vue-axios';
//import VueColor  from 'vue-color'
import axios from 'axios';

Vue.use(VueAxios, axios);
//Vue.use(VueColor);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('welcome-component', require('./components/WelcomeComponent.vue').default);
Vue.component('dashboard-component', require('./components/DashboardComponent.vue').default);
Vue.component('ambassador-component', require('./components/AmbassadorComponent.vue').default);
Vue.component('plan-component', require('./components/PlanComponent.vue').default);
Vue.component('faq-component', require('./components/FaqComponent.vue').default);
Vue.component('jscolor', require('./components/colorpickerComponent.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '.app-wrapper'
});
