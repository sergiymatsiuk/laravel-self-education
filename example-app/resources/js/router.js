import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./Pages/HomeView.vue"),
    },
    {
        path: "/test",
        component: () => import("./Pages/LoginView.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
