Vue.config.devtools = true;

new Vue({
    el: '#root',
    data: {   
        dischi: [],
        selectedGenre: '',
        
    },

    getAlbums() {
        
            axios.get(`/php-ajax-dischi/api?genre=${this.selectedGenre}`)
                .then(response => {
                    this.dischi = response.data;
                })
        
    },
       mounted() {
        this.getAlbums();
    },
});