Vue.component('lang', {
    props: ['name', 'ident'],
    template: `<li><a class="active" :id=" ident " href="javascript:void(0)" @click="$emit('language')"><i class="icon-28"></i> {{ name }} </a></li>`
});

new Vue({
    el: '#app',
    methods: {
        changeLanguage: function (language) {
            language == 'en' ? value = 'es' : value = 'en';
            axios.post('/'+value+'/config-language/', {
                lang: language
            })
            .then(function (response) {
                window.location = response.data;
            });
        },
    }
});