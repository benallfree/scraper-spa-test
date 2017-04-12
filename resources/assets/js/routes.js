import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./components/Landing'),
    },
    {
        path: '/details',
        component: require('./components/Details'),
    },
    {
        path: '/success',
        component: require('./components/Success'),
    },
];

export default new VueRouter({
    routes,
});
