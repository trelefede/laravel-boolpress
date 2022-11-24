import Vue from 'vue';

import VueRouter from 'vue-router';

import HomeComponent from './pages/HomeComponent'
import PostsComponent from './pages/PostsComponent'
import AboutComponent from './pages/AboutComponent'
import NotFoundComponent from './pages/NotFoundComponent'
import ContactsComponent from './pages/ContactsComponent'

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        { path: '/home', name: 'home', component: HomeComponent },
        { path: '/about', name: 'about', component: AboutComponent },
        { path: '/contacts', name: 'contacts', component: ContactsComponent },

        { path: '/*', name: 'notfound', component: NotFoundComponent },
    ],
});

export default router;
