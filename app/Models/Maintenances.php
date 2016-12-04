<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Validator;
use App\Models\ValidatorModel;

class Maintenances extends Eloquent
{
  protected $collection = 'Maintenances';
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

  public function validateCreateMaintenance( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      'name' => 'required|string',
    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Equipamento não pode ser criado', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function insertMaintenance( array $inputs )
  {
    if(!empty($inputs['password'])) $inputs['password'] = md5($inputs['password']);
    return $this::create( $inputs );
  }

  public function validateUpdateMaintenance( array $inputs )
  {
    $validator = Validator::make(
      $inputs,
    [
      '_id' => 'required|string|exists:Maintenances,_id',
      'email' => 'string',
      'client' => 'string',
      'name' => 'string',
      'rules'     => 'array',
      'hierarchy'     => 'array',

    ], ValidatorModel::$validatorMessage );
    if ($validator->fails()) throw new \Dingo\Api\Exception\StoreResourceFailedException('Usuário não pode ser atualizado', array_values(array_filter($validator->errors()->toArray())));
    return false;
  }

  public function updateMaintenance( $_id, array $inputs )
  {
    return $this::where( '_id', $_id )->update( $inputs );
  }

  public function deleteMaintenance( $_id )
  {
    return $this::where( '_id', $_id )->delete();
  }
}
