<spark-connection inline-template>
    <div>
        <!-- Create API Token -->
        <div>
            @include('spark::settings.connection.list-connections')
        </div>

        <!-- API Tokens -->
        <div>
            @include('spark::settings.connection.create-connections')
        </div>
    </div>
</spark-connection>
