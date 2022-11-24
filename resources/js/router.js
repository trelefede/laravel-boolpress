import Vue from 'vue';

import VueRouter from 'vue-router';

import PostsComponent from './pages/PostsComponent'
import NotFoundComponent from './pages/NotFoundComponent'

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        { path: '/', name: 'home', component: PostsComponent },

        { path: '/*', name: 'notfound', component: NotFoundComponent },
    ],
});

export default router;
