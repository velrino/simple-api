<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\Models\Products;
use App\Http\Controllers\AppController;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    function __construct()
    {
      $this->Products = new Products;
      $this->AppController = new AppController;
    }
    /**
    * @api {post} /products Create
    * @apiGroup Products
    * @apiName Create
    * @apiParamExample {json} Example:
    * {
    * 	"user" : "57e825b880570d0074746b112",
    * 	"name" : "STRING ",
    * 	"description" : "STRING",
    * 	"image" : "STRING",
    * 	"price" : "STRING",
    * 	"category" : "ARRAY",
    * 	"count" : "INTEGER",
    * 	"type" : "STRING",
    * }
    * @apiSuccessExample {json} 200 OK
    * {
    *   "Product": {
    *     "_id": "57e82c4080570d00854f5ab1",
    *     "user": "57e825b880570d0074746b11",
    *     "name": "Teste",
    *     "updated_at": "2016-09-25 16:57:52",
    *     "created_at": "2016-09-25 16:57:52"
    *   }
    * }
    * @apiErrorExample {json} 422 Invalid
    * {
    *   "error": {
    *     "message": "Produto não pode ser criado",
    *     "errors": [
    *       [
    *         "user não existe"
    *       ]
    *     ],
    *     "status_code": 422
    *   }
    * }
    */
    function createProduct(Request $request)
    {
      $this->Products->validateCreateProduct( $request->input() );
      return $this->response->array(  $this->Products::create( (array) $request->input() ) );
    }
    /**
     * @api {get} /products?where=column,value Query
     * @apiGroup Products
     * @apiParam (Query) {String} where Após o sinal de = você informa a coluna e valor, por exemplo
     *                                 para conseguir serviços do tipo tech, basta informar: "where=type,tech"
     *                                 ou multiplos valores "where=state,São Paulo&where=type,tech".
    * @apiSuccessExample {json} 200 OK
    * {
    *  [
    *     {
    *       "_id": "57ae75bda697b2001046b09012390",
    *       "user": "57ae754da697b2000c0ba171",
    *       "title": "teste",
    *       "type": "tech",
    *       "state": "São Paulo",
    *       "updated_at": "2016-08-13 01:19:57",
    *       "created_at": "2016-08-13 01:19:57"
    *     },
    *     {
    *       "_id": "57ae75bda697b2001046b0b1",
    *       "user": "57ae754da697b2000c0ba171",
    *       "title": "teste 2",
    *       "type": "tech",
    *       "state": "São Paulo",
    *       "updated_at": "2016-08-13 01:29:57",
    *       "created_at": "2016-08-13 01:29:57"
    *     }
    *   ]
    * }
    */
    function list(Request $request)
    {
      return $this->response->array( $this->AppController->query($this->Products, $request)->toArray() );
    }
}
