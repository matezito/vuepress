import { createApp } from 'vue';
import App from './App.vue';

const app = createApp({
    template: '<App/>',
});

app.component('App', App);
app.mount('#vuepress-main');