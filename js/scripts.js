const { createApp } = Vue;

createApp({
    data() {
        return {
            message: 'Hello Vue!'
        }
    },
    created() {
        axios
            .get('http://localhost/63-lc-php-json/api.php', {
                params: {
                    last_name: 'Rossi'
                }
            })
            .then(res => {
                console.log(res.data);
            });
    }
}).mount('#app');