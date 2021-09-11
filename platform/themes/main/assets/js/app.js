import Vue from 'vue';
import Media from './pages/Media'

Vue.component('page-media', Media);

const app = new Vue({
    el: "#app",
});