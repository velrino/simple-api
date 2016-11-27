<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\Models\Users;
use App\Models\Products;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    function __construct()
    {
      $this->Users = new Users;
    }
    /**
    * @api {post} /auth/login Login
    * @apiGroup Auth
    * @apiName Login
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
    *     "message": "Usuário não auutenticado",
    *     "errors": [
    *       [
    *         "Email ou senha incorreto"
    *       ]
    *     ],
    *     "status_code": 404
    *   }
    * }
    */
    function login(Request $request)
    {
      $inputs = $request->input();
      $this->Users->validateLogin($inputs);
      $check = $this->Users->where('email', $inputs['email'])->where('password', md5($inputs['password']) )->first();
      if( empty($check) ) return $this->response->error('Email ou senha invalido' , 404);
      return $this->response->array( $check->toArray() );
    }
}
