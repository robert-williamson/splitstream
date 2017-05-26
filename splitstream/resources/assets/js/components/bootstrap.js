
/*
 |--------------------------------------------------------------------------
 | Laravel Spark Components
 |--------------------------------------------------------------------------
 |
 | Here we will load the Spark components which makes up the core client
 | application. This is also a convenient spot for you to load all of
 | your components that you write while building your applications.
 */

require('./../spark-components/bootstrap');

require('./home');

/**
 * Connections Settings Components...
 */
require('./settings/connection');
require('./settings/connection/list-connections');
require('./settings/connection/create-connections');