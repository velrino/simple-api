<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Validator;
use App\Models\ValidatorModel;

class Products extends Eloquent
{
  protected $collection = 'Products';
  protected $hidden = ['password', 'code'];
  protected $ValidatorModel;
  protected static $unguarded = true;

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

  public function validateCreateProduct( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'user' => 'required|string|exists:Users,_id',
      'name' => 'required|string',
      'description'     => 'string',
      'image'     => 'string',
      'price'     => 'string',
      'category'  => 'array',
      'count'     => 'integer',
      'type'     => 'string',
    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Produto não pode ser criado', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function insert( array $inputs )
  {
    if(!empty($inputs['password'])) $inputs['password'] = md5($inputs['password']);
    if(empty($inputs['active'])) $inputs['active'] = 'false';
    return $this::create( $inputs );
  }

  public function updateUserValidate( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'description'  => 'string',
      'local'        => 'array',
      'expert'       => 'array',
      'expert.*'     => 'in:'.env('PROJECT_SERVICE_TYPE'),

    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Professional não pode ser atualizado', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function edit( $inputs, $_id )
  {
    return $this::where( '_id', $_id )->update( $inputs );
  }
}
