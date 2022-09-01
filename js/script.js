Vue.config.devtools = true;

new Vue({
    el: '#root',
    data: {   
              dischi: [],
    },
    mounted() {
        axios.get('localhost:8888/php-ajax-dischi/api/dischi.php').then((res) => {
            this.dischi = res.data;
        })
    }
});