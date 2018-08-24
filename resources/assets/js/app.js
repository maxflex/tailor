
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Siema = require('./siema.min')

window.$ = window.jQuery = require('jquery')

window.axios = require('axios')

require('./engine');

window.Vue = require('vue');

window.PhotoSwipe = require('photoswipe')
window.PhotoSwipeUI_Default = require('photoswipe/dist/photoswipe-ui-default')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueTheMask from 'vue-the-mask'

Vue.use(VueTheMask)

const app = new Vue({
    el: '#app',
    created() {

    },
    data() {
        return {
            request: {},
            request_modal: false,
            request_sent: false
        }
    },
    methods: {
        makeRequest(place) {
            // this.request_modal = true
            // this.request_sent = true
            closePopUp()
            if (!this.request.phone) {
                popUpRequest(false)
                return
            }
            this.request.place = place
            axios.post('/api/request', this.request).then(() => {
                this.request = {}
            })
            popUpRequest(true)
        },
        closeRequestModal() {
            this.request = {}
            this.request_sent = false
            this.request_modal = false
        }
    },
});
