import Vue from 'vue';

import VueRouter from 'vue-router';

import HomeComponent from './pages/HomeComponent'
import BlogComponent from './pages/BlogComponent'
import PostShowComponent from './pages/PostShowComponent'
import AboutComponent from './pages/AboutComponent'
import NotFoundComponent from './pages/NotFoundComponent'
import ContactsComponent from './pages/ContactsComponent'

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        { path: '/home', name: 'home', component: HomeComponent },
        { path: '/blog', name: 'blog', component: BlogComponent },
        { path: '/blog/:id', name: 'post-show', component: PostShowComponent },
        { path: '/about', name: 'about', component: AboutComponent },
        { path: '/contacts', name: 'contacts', component: ContactsComponent },

        { path: '/*', name: 'notfound', component: NotFoundComponent },
    ],
});

export default router;
