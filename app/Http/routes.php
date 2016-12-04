  <?php

  $app->register('Dingo\Api\Provider\LumenServiceProvider');

  $api = $app['api.router'];
  /*
   * Version 1 API
   */
  $api->version('v1', function ($api) use ($app) {

    $api->group(['namespace' => 'App\Http\Controllers', 'middleware' => 'cors'], function ($api) {
        $api->get('/', ['uses' => 'BaseController@helloWorld']);

        $api->group(['prefix' => 'auth'], function ($api) {
            $api->post('/login', ['uses' => 'AuthController@login']);
        });

        $api->get('/users', ['uses' => 'UsersController@all']);
        $api->group(['prefix' => 'user'], function ($api) {
            $api->get('/', ['uses' => 'UsersController@list']);
            $api->post('/', ['uses' => 'UsersController@createUser']);
            $api->group(['prefix' => '{user_id}'], function ($api) {
                $api->put('/', ['uses' => 'UsersController@updateUser']);
                $api->delete('/', ['uses' => 'UsersController@deleteUser']);
            });
        });

        $api->get('/equipments', ['uses' => 'EquipmentsController@all']);
        $api->get('/equipments/distinct/{column?}', ['uses' => 'EquipmentsController@distinct']);
        $api->group(['prefix' => 'equipment'], function ($api) {
            $api->get('/', ['uses' => 'EquipmentsController@list']);
            $api->post('/', ['uses' => 'EquipmentsController@createEquipment']);
            $api->group(['prefix' => '{equipment_id}'], function ($api) {
                $api->put('/', ['uses' => 'EquipmentsController@updateEquipment']);
                $api->delete('/', ['uses' => 'EquipmentsController@deleteEquipment']);
            });
        });

        $api->get('/maintenances', ['uses' => 'MaintenancesController@all']);
        $api->group(['prefix' => 'maintenance'], function ($api) {
            $api->get('/', ['uses' => 'MaintenancesController@list']);
            $api->post('/', ['uses' => 'MaintenancesController@createMaintenance']);
            $api->group(['prefix' => '{equipment_id}'], function ($api) {
                $api->put('/', ['uses' => 'MaintenancesController@updateMaintenance']);
                $api->delete('/', ['uses' => 'MaintenancesController@deleteMaintenance']);
            });
        });

    });
  });
