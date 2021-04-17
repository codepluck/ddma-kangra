import AppLayout from './../Layout/AppLayout';
import AuthLayout from './../Layout/AuthLayout';
import NotFound from './../views/NotFoundPage';

const routes = [
    {
        path: '/',
        redirect: 'home',
        component: AppLayout,
        children: [
            {
                path: '/',
                name: 'home',
                // route level code-splitting
                // this generates a separate chunk (about.[hash].js) for this route
                // which is lazy-loaded when the route is visited.
                component: () => import(/* webpackChunkName: "demo" */ '@/views/Pages/HomePage')
            },
        ]
    },
    {
        path: '/',
        redirect: 'login',
        component: AuthLayout,
        children: [
            {
                path: '/login',
                name: 'login',
                component: () => import(/* webpackChunkName: "demo" */ './../views/Pages/Login')
            },
            {
                path: '/register',
                name: 'register',
                component: () => import(/* webpackChunkName: "demo" */ './../views/Pages/Register')
            },
            {path: '*', component: NotFound}
        ]
    }
];

export default routes;
