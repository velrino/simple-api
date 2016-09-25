<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    function __construct()
    {
      $this->Products = new Products;
    }
    /**
    * @api {post} /products Criar
    * @apiGroup Produtos
    * @apiName Criar
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
}
