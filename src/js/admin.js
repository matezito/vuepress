import { createApp } from 'vue';
import Admin from './Admin.vue';

//admin

const admin = createApp({
    template: '<Admin/>',
});

admin.component('Admin', Admin);
admin.mount('#vuepress-admin');