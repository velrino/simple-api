<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Validator;
use App\Models\ValidatorModel;

class Equipments extends Eloquent
{
  protected $collection = 'Equipments';
  protected $hidden = ['password', 'code'];
  protected $ValidatorModel;
  protected static $unguarded = true;

  public function validateRegister( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'name'          => 'required|string',
    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Equipamento não pode ser criado', array_values(array_filter($validator->errors()->toArray())));

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
      'code' => 'required|string|exists:Equipments,code'
    ]);
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Could not active new Equipment', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function validateCreateEquipment( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'name' => 'required|string',
    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Equipamento não pode ser criado', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function insertEquipment( array $inputs )
  {
    if(!empty($inputs['password'])) $inputs['password'] = md5($inputs['password']);
    return $this::create( $inputs );
  }

  public function validateEquipmentUser( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'equipment' => 'required|string|exists:Equipments,_id',
      'user'      => 'required|string|exists:Users,_id',
    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException('Equipamento ou usuário inválido');
    //throw new \Dingo\Api\Exception\StoreResourceFailedException('Usuário não pode ser atualizado', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function validateUpdateEquipment( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      '_id' => 'required|string|exists:Equipments,_id',
      'users' => 'array',

    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException('Usuário não pode ser atualizado');
    //throw new \Dingo\Api\Exception\StoreResourceFailedException('Usuário não pode ser atualizado', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function updateEquipment( $_id, array $inputs )
  {
    return $this::where( '_id', $_id )->update( $inputs );
  }

  public function deleteEquipment( $_id )
  {
    return $this::where( '_id', $_id )->delete();
  }
}
