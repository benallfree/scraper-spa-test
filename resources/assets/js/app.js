/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('enter-email', require('./components/enter-email.vue'));
Vue.component('enter-data', require('./components/enter-data.vue'));
Vue.component('finish', require('./components/finish.vue'));

const app = new Vue({
    el: '#app',
    data() {
        return {
            step: 1
        }
    },
    methods: {
        nextStep() {
            // send email for step 2
            if (this.step == 2) {
                axios.post('/email', this.$root.$data)
                    .then(response => {
                        // echo to console
                        console.log(response);
                    });
            }
            this.step++;
        }
    }
});
