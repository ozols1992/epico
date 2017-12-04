
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('msg', require('./components/msg.vue'));
Vue.component('msglog', require('./components/msg_log.vue'));
Vue.component('msgform', require('./components/msg_form.vue'));

    const chat = new Vue({
        el: '#chat',
        data: {
            messages: []
        },
        methods: {
            addmsg(msg){

               axios.post(location.href + '/messages', {'msg': msg}).then(response => {
                    this.messages.push(response.data);
                }).catch(function(error){ alert(error); });
            }
        },
        created(){
            axios.get(location.href + '/messages').then(result => {
               this.messages = result.data;
            }).catch(function(error){alert(error);});
        }
    });
