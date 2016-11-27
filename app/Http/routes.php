  <?php

  $app->register('Dingo\Api\Provider\LumenServiceProvider');

  $api = $app['api.router'];
  /*
   * Version 1 API
   */
  $api->version('v1', function ($api) use ($app) {

    $api->group(['namespace' => 'App\Http\Controllers'], function ($api) {
        $api->get('/', ['uses' => 'BaseController@helloWorld']);

        $api->group(['prefix' => 'auth'], function ($api) {
            $api->post('/login', ['uses' => 'AuthController@login']);
        });

        $api->group(['prefix' => 'user'], function ($api) {
            $api->get('/', ['uses' => 'UsersController@list']);
            $api->post('/', ['uses' => 'UsersController@createUser']);
            $api->group(['prefix' => '{user_id}'], function ($api) {
                $api->put('/', ['uses' => 'UsersController@updateUser']);
                $api->delete('/', ['uses' => 'UsersController@deleteUser']);
            });
        });

    });
  });
