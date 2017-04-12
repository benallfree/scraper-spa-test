import './bootstrap';

Vue.config.debug = true;

import router from './routes';

let app = new Vue({
    el: '#app',
    data: {
        email: '' // this will store user's email throughout the process
    },
    router,
});
