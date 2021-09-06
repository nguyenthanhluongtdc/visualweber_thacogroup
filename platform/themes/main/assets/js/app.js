
import Vue from 'vue';
import Media from './pages/Media/Media.vue';
import vuetify from './plugins/vuetify.js'
import common from './common';
import axios from 'axios'

Vue.prototype.$http = axios;
Vue.mixin(common)
Vue.component('page-media', Media);

const app = new Vue({
    vuetify,
}).$mount('#app')