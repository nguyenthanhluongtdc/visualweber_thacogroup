import Vue from 'vue';

import PageSearch from './pages/search';

Vue.component('box-search', PageSearch);

const app = new Vue({
    el: "#page-search"
});