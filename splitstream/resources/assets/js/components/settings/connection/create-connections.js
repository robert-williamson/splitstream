
Vue.component('spark-create-connections', {
    /**
     * The component's data.
     */
    data() {
        return {
            connectionForm: new SparkForm({
                connectionName: '',
                busy:false,
            }),

        };
    },



    methods: {
        /**
         * Update the user's contact information.
         */
        storeConnection(e) {
            e.preventDefault();
            this.connectionForm.busy = true;
            Spark.post('/connections', this.connectionForm)
                .then(() => {
                alert('done')
                    this.connectionForm.busy = false;
                });
        }
    }
});