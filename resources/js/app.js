require('./bootstrap');
import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';
import Notification from './components/Notification.vue';
import Coupon from "./components/Coupon.vue";

window.axios = axios;
window.Form = Form;

let store = {
    user: {
        name: 'John Dou'
    }
};

/*Vue.component('coupon', {
    props: ['code'],

    template: `
        <input type="text" :value="code" @input="updateCode($event.target.value)">
    `,

    methods: {
        updateCode(code)
        {
            // TODO: validation
            this.$emit('input', code);
        }
    }
});*/

new Vue({
    el: '#app',

    components: {
        Notification,
        Coupon
    },

    data: {
        form: new Form({
            name: '',
            description: ''
        }),
        shared: store,
        //coupon: 'FREEBIE'
    },

    methods: {
        onSubmit() {
            this.form.post('/projects/create');
        }
    }
});
