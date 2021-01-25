import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from "./views/home";
import About from "./views/about";
import Contact from "./views/contact";
import Shop from "./views/shop";


Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {path: '/', component: Home},
        {path: '/shop', component: Shop},
        {path: '/contact', component: Contact},
        {path: '/about', component: About},
    ],
    mode: 'history',
});
