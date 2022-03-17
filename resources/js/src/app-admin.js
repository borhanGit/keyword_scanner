/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');

window.Vue = require('vue');
// import axios from 'axios';

import master from '../components/layouts/Master'
import router from './router'
import store from './store'
import moment from 'moment'
import VModal from 'vue-js-modal'
import Toasted from 'vue-toasted';
import VuejsDialog from 'vuejs-dialog';
import VuejsDialogMixin from 'vuejs-dialog/dist/vuejs-dialog-mixin.min.js'; // only needed in custom components
//  for download plugins

// include the default style
import 'vuejs-dialog/dist/vuejs-dialog.min.css';
Vue.use(VModal)
Vue.use(Toasted)
Vue.use(VuejsDialog)
Vue.use(VuejsDialogMixin)
//CK Editor for content[textarea]
import CKEditor from '@ckeditor/ckeditor5-vue2';


Vue.use( CKEditor );


import VueBreadcrumbs from 'vue-2-breadcrumbs'; 
Vue.use(VueBreadcrumbs, {
    template:
      '        <nav v-if="$breadcrumbs.length" aria-label="breadcrumb">\n' +
      '            <ol class="breadcrumb">\n' +
      '                <li v-for="(crumb, key) in $breadcrumbs" v-if="crumb.meta.breadcrumb" :key="key" class="breadcrumb-item active" aria-current="page">\n' +
      '                    <router-link :to="{ path: getPath(crumb) }">{{ getBreadcrumb(crumb.meta.breadcrumb) }}</router-link>' +
      '                </li>\n' +
      '            </ol>\n' +
      '        </nav>'
  });
// import Vue2Crumbs from 'vue-2-crumbs'

// Vue.use(Vue2Crumbs)
//  Breadcrumbs end
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
Vue.component('v-select', vSelect)


// Excell
import JsonExcel from "vue-json-excel";
Vue.component("downloadExcel", JsonExcel);

Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('Navbar', require('../components/layouts/Navbar').default);
Vue.component('PageHeader', require('../components/layouts/PageHeader').default);
Vue.component('TableContent', require('../components/layouts/TableContent').default);
Vue.component('AdminMenuList', require('../components/layouts/AdminMenuList').default);

Vue.component('FormButton', require('../components/layouts/FormButton').default);

const app = new Vue({
    router,moment,store,
    created() {
        const userInfo = localStorage.getItem("user");
        if (userInfo) {
            const userData = JSON.parse(userInfo);
            this.$store.commit("setUserData", userData);
        }
        axios.interceptors.response.use(
            response => response,
            error => {
                if (error.response.status === 401) {
                    this.$store.dispatch('singOut')
                }
                return Promise.reject(error)
            }
        )
    },
    render: h => h(master)
}).$mount('#app');
