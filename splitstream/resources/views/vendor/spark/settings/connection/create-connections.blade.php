<spark-create-connections inline-template>
    <div class="panel panel-default">
        <!-- Update Payment Method Heading -->
        <div class="panel-heading">
            <div class="pull-left">
                Create New Connections
            </div>
            <form class="form-horizontal" role="form">

                <!-- Connection Name -->
                <div class="form-group">
                    <label for="connectionName" class="col-md-4 control-label">Connction name</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" v-model="connectionForm.connectionName">
                    </div>
                </div>

                <!-- Update Button -->
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" v-on:click="storeConnection" class="btn btn-primary">
                            <span>
                              Create
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</spark-create-connections>
