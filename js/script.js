Vue.config.devtools = true;

new Vue({
    el: '#root',
    data: {   
              dischi: [],
    },
    mounted() {
        axios.get('/php-ajax-dischi/api/dischi.php').then((res) => {
            this.dischi = res.data;
        })
    }
});