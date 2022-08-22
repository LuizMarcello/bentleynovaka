require('./bootstrap');

import Vue from 'vue'
import {
    BootstrapVue,
    IconsPlugin
} from 'bootstrap-vue'

// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

window.Vue = require('vue').default;

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login-component', require('./components/Login.vue').default);
Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('input-container-component', require('./components/InputContainer.vue').default);
Vue.component('nav-bar-component', require('./components/NavBarComponent.vue').default);
Vue.component('side-bar-component', require('./components/SideBarComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);

const app = new Vue({
    el: '#app',
});
