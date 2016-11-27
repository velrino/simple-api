<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\Models\Users;
use App\Http\Controllers\AppController;
use Illuminate\Http\Request;

class UsersController extends BaseController
{
    function __construct()
    {
      $this->Users = new Users;
      $this->AppController = new AppController;
    }
    /**
    * @api {post} /users Create
    * @apiGroup Users
    * @apiName Create
    * @apiParamExample {json} Example:
    * {
    * 	"email" : "STRING",
    * 	"password" : "STRING",
    * }
    * @apiSuccessExample {json} 200 OK
    * {
    *   "User": {
    *     "_id": "57e82c4080570d00854f5ab1",
    *     "email": "teste@email.com",
    *     "password": "teste",
    *     "updated_at": "2016-09-25 16:57:52",
    *     "created_at": "2016-09-25 16:57:52"
    *   }
    * }
    * @apiErrorExample {json} 422 Invalid
    * {
    *   "error": {
    *     "message": "Usuário não pode ser criado",
    *     "errors": [
    *       [
    *         "password não informado"
    *       ]
    *     ],
    *     "status_code": 422
    *   }
    * }
    */
    function createUser(Request $request)
    {
      $this->Users->validateCreateUser( $request->input() );
      return $this->response->array(  $this->Users->insertUser( $request->input() ) );
    }
    /**
    * @api {put} /users Update
    * @apiGroup Users
    * @apiName Create
    * @apiParamExample {json} Example:
    * {
    * 	"name" : "STRING",
    * 	"hierarchy" : "STRING",
    * }
    * @apiSuccessExample {json} 200 OK
    * {
    *   "message": "true"
    * }
    * @apiErrorExample {json} 422 Invalid
    * {
    *   "error": {
    *     "message": "Usuário não pode ser atualizado",
    *     "errors": [
    *       [
    *         "_id não existe"
    *       ]
    *     ],
    *     "status_code": 422
    *   }
    * }
    */
    function updateUser(Request $request, $id)
    {
      $this->Users->validateUpdateUser( array_merge(['_id' => $id], $request->input()) );
      $this->Users->updateUser( $id, $request->input() );
      return $this->response->array( ['message' => true ]  );
    }

    function deleteUser( $id )
    {
      $this->Users->deleteUser( $id );
      return $this->response->array( ['message' => true ]);
    }
    /**
     * @api {get} /users?where=column,value Query
     * @apiGroup Users
     * @apiParam (Query) {String} where Após o sinal de = você informa a coluna e valor, por exemplo
     *                                 para conseguir serviços do tipo tech, basta informar: "where=type,tech"
     *                                 ou multiplos valores "where=state,São Paulo&where=type,tech".
    * @apiSuccessExample {json} 200 OK
    * {
    *  [
    *     {
    *       "_id": "57ae75bda697b2001046b09012390",
    *       "email": "email@mail.com",
    *       "type": "tech",
    *       "state": "São Paulo",
    *       "updated_at": "2016-08-13 01:19:57",
    *       "created_at": "2016-08-13 01:19:57"
    *     },
    *     {
    *       "_id": "57ae75bda697b2001046b0b1",
    *       "email": "email2@mail.com",
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
      return $this->response->array( $this->AppController->query($this->Users, $request)->toArray() );
    }
}
