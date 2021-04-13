import { createRouter, createWebHistory } from 'vue-router';

import AllBots from "./pages/AllBots";
import MyRentals from "./pages/MyRentals";
import MyListings from "./pages/MyListings";
import Settings from "./pages/Settings";
import Legal from "./pages/Legal";
import NotFound from "./pages/NotFound";
import Index from "./pages/Index";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {path: '/', component: Index},
        {path: '/AllBots',component: AllBots},
        {path: '/MyRentals',component: MyRentals},
        {path: '/MyListings' ,component: MyListings},
        {path: '/Settings',component: Settings},
        {path: '/Legal',component: Legal},
        {path: '/:notFound(.*)',component: NotFound},
    ],
    linkActiveClass: 'active'
});

export default router;
