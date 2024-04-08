import { createWebHistory,createRouter } from "vue-router";
import home from './pages/home.vue'
import login from './pages/login.vue'
import register from './pages/register.vue'


const routes = [
     { path: '/', 
    name:'Home', 
    component: home },


    { path: '/Register', 
    name:'Register', 
    component: register},
  

  { path: '/login', 
  name:'Login', 
  component: login},
];


const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
  
