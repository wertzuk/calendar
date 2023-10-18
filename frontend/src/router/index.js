import { createRouter, createWebHashHistory } from 'vue-router';
import Events from '../views/Events.vue';
import EventDetails from '../views/EventDetails.vue';

const routes = [
  {
    path: '/',
    name: 'Events',
    component: Events,
  },
  {
    path: '/events/:id',
    name: 'EventDetails',
    component: EventDetails,
  },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});
export default router;
