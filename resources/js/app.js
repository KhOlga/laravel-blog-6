require('./bootstrap');

new Vue({
    el: '#app',

    data: {
        name: '',
        description: '',
    },

    methods: {
        onSubmit() {
            alert('submitting');
        }
    }
});
