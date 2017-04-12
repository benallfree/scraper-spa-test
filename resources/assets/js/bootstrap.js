import jQuery from 'jquery';

window.$ = window.jQuery = jQuery;

require('bootstrap-sass');

import Vue from 'vue';

window.Vue = Vue;

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Axios from 'axios';

window.axios = Axios;

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Security.csrfToken;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
