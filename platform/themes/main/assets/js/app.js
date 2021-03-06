import Vue from 'vue';
import Media from './pages/Media'
import common from './common';
import Axios from 'axios';
import VModal from 'vue-js-modal'
import Skeleton from 'vue-loading-skeleton';

Vue.use(Skeleton);
Vue.use(VModal);
Vue.prototype.$http = Axios;
Vue.component('page-media', Media);
Vue.mixin(common)

Vue.prototype.__ = key => {
    return window.trans[key] !== undefined ? window.trans[key] : key;
};

const app = new Vue({
    el: "#app",
});