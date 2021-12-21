const app = new Vue({
    el: "#app",
    data: {
        cdInfo: null,
    },
    created() {
        this.getCdInfo();
    },
    methods: {
        getCdInfo() {
            axios
                .get(
                    "http://localhost/php-ajax-dischi/vue-version/data/database.php"
                )
                .then((response) => {
                    this.cdInfo = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
});
