/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./sass/app.scss');
//import('./css/app.css')

//require('./bootstrap');

window.Vue = require('vue');

/*import VueRouter from 'vue-router';
  
Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        { path: '/' },
    { path: '/pokemons/:id' }
    ]
  })
  */
  

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('pokemon-component', require('./components/PokemonComponent.vue').default) ;
Vue.component('pokemonid-component', require('./components/PokemonIdComponent.vue').default) ;
Vue.component('users-component', require('./components/UsersComponent.vue').default) ;
Vue.component('userid-component', require('./components/UserIdComponent.vue').default) ;
Vue.component('userme-component', require('./components/UserMeComponent.vue').default) ;
Vue.component('teamme-component', require('./components/TeamMeComponent.vue').default) ;
Vue.component('teamuser-component', require('./components/TeamUserComponent.vue').default) ;
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    //router,
});

