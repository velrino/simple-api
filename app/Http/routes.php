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
            $api->post('/facebook', ['uses' => 'AppController@facebook']);
            $api->post('/login', ['uses' => 'AppController@teste']);
            $api->get('/register', ['uses' => 'AppController@teste']);
        });

        $api->group(['prefix' => 'products'], function ($api) {
            $api->post('/', ['uses' => 'ProductsController@createProduct']);
            $api->get('/', ['uses' => 'ProductsController@list']);

            $api->group(['prefix' => '{product_id}'], function ($api) {
                $api->put('/', ['uses' => 'ProductsController@facebook']);
                $api->delete('/', ['uses' => 'ProductsController@helloWorld']);
            });
        });

        $api->group(['prefix' => 'user'], function ($api) {
            $api->get('/', ['uses' => 'AppController@list']);
        });

    });
  });
