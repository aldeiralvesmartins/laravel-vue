import './bootstrap';
 
import { createApp } from 'vue';

const app = createApp();

app.component('app', app);

app.mount('#app');