import AppLayout from '../views/Layout/AppLayout.vue';
import AuthLayout from '../views/Pages/AuthLayout';

import NotFound from '../views/NotFoundPage';

const routes = [
    {
        path: '/',
        redirect: 'dashboard',
        component: AppLayout,
    },
    {
        path: '/',
        redirect: 'login',
        component: AuthLayout,
        children: [
            {
                path: '/login',
                name: 'login',
                component: () => import(/* webpackChunkName: "demo" */ '../views/Pages/Login.vue')
            },
            {
                path: '/register',
                name: 'register',
                component: () => import(/* webpackChunkName: "demo" */ '../views/Pages/Register.vue')
            },
            {path: '*', component: NotFound}
        ]
    }
];

export default routes;
