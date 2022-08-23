require('./bootstrap');

/* import Vue from 'vue' */
import {
    BootstrapVue,
    IconsPlugin
} from 'bootstrap-vue'

/* Inicio das rotas */
import {
    createRouter,
    createWebHashHistory
} from 'vue-router';
import Home from './components/Home.vue'
import Form from './components/FormComponent.vue'

/* Um array de objetos */
/* Cada objeto corresponde a uma rota da aplicação */
const routes = [{
        path: '/home', //localhost:8000/home
        component: Home
    },
    {
        path: '/form', //localhost:8000/form
        component: Form
    }
]

const router = createRouter({
    history: createWebHashHistory,
    //routes: routes
    routes
})
/* Fim das rotas */

// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Vue from 'vue';

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
    router,
    el: '#app',
});

/* const Vue = createApp(App)
Vue.use(router)
Vue.mount('#app') */

/* const app = Vue.createApp({
    router,

}) */

/* const Vue = createApp(App)
Vue.use(router) //Adicionando as configurações
//de rotas a instância do Vue
Vue.mount('#app') */

/* Vue.createApp({
    router,

}) */

/* new Vue({
    router,
    render: h => h(Home),
}).$mount('#app') */


