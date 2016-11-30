<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Validator;
use App\Models\ValidatorModel;

class Users extends Eloquent
{
  protected $collection = 'Users';
  protected $hidden = ['password', 'code'];
  protected $ValidatorModel;
  protected static $unguarded = true;

  public function validateRegister( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'email'         => 'required|email|unique:Users,email',
      'name'          => 'required|string',
      'password'      => 'required|string|min:4',
    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Usuário não pode ser criado', array_values(array_filter($validator->errors()->toArray())));

    return false;
  }


  public function validateLogin( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'email'        => 'required|email',
      'password'     => 'required|string|min:4',
    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('E-mail ou senha inválido', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function validateFacebook( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'facebook_id'        => 'required|string',
      'facebook_token'     => 'required|string',
    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Invalid login', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function validateRegisterActive( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'code' => 'required|string|exists:Users,code'
    ]);
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Could not active new user', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function validateCreateUser( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'email' => 'required|string|unique:Users,email',
      'password' => 'required|string',
      'client' => 'string',
      'rules'     => 'array',
      #'rules.*.email' => 'email|unique:users',
      'hierarchy'     => 'array',
    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Usuário não pode ser criado', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function insertUser( array $inputs )
  {
    if(!empty($inputs['password'])) $inputs['password'] = md5($inputs['password']);
    return $this::create( $inputs );
  }

  public function validateUpdateUser( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      '_id' => 'required|string|exists:Users,_id',
      'email' => 'string',
      'client' => 'string',
      'name' => 'string',
      'rules'     => 'array',
      'hierarchy'     => 'array',

    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Usuário não pode ser atualizado', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function updateUser( $_id, array $inputs )
  {
    return $this::where( '_id', $_id )->update( $inputs );
  }

  public function deleteUser( $_id )
  {
    return $this::where( '_id', $_id )->delete();
  }
}
