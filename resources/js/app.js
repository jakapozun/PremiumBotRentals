require('./bootstrap');

import router from "./router";
import { createApp } from 'vue';
import App from './App.vue';

//UI
import BaseLayer from "./components/UI/BaseLayer";
import TheHeader from "./components/UI/TheHeader";

const app = createApp(App);

//global components
app.component('base-layer', BaseLayer);
app.component('the-header', TheHeader);

app.use(router);
app.mount('#app');
