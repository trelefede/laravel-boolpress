import Vue from 'vue';

import VueRouter from 'vue-router';

import PostsComponent from './pages/PostsComponent'

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        { path: '/', name: 'home', component: PostsComponent }
    ],
});

export default router;
