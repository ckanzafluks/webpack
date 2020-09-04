/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

import Vue from 'vue';
import Example from './components/Example'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'


/**
 * Create a fresh Vue Application instance
 */
new Vue({
    el: '#app',
    components: {
        Example
    }
});




// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';
