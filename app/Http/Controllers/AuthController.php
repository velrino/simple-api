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

    function facebook(Request $request)
    {
      $inputs = $request->input();
      $this->Users->validateFacebook($inputs);
      $check = $this->Users->where('facebook_id', $inputs['facebook_id'])->where('facebook_token', $inputs['facebook_token'])->first();
      $login = (!empty($check)) ? $check : $this->Users::create( (array) $inputs) ;
      return $this->response->array( $login );
    }

    function login(Request $request)
    {
      $inputs = $request->input();
      $this->Users->validateLogin($inputs);
      $check = $this->Users->where('email', $inputs['email'])->where('password', md5($inputs['password']) )->first();
      if( empty($check) ) return $this->response->error('Email ou senha invalido' , 404);
      return $this->response->array( $check->toArray() );
    }
}
