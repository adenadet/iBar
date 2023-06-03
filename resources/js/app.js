import './bootstrap';
import { createApp } from 'vue';
import { createWebHistory, createRouter } from "vue-router";
import router from './routes'; 

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);


app.use(router)
    .mount('#layout-wrapper');
