<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\Models\Equipments;
use App\Http\Controllers\AppController;
use Illuminate\Http\Request;

class EquipmentsController extends BaseController
{
    function __construct()
    {
      $this->Equipments = new Equipments;
      $this->AppController = new AppController;
    }
    /**
    * @api {post} /Equipments Create
    * @apiGroup Equipments
    * @apiName Create
    * @apiParamExample {json} Example:
    * {
    * 	"email" : "STRING",
    * 	"password" : "STRING",
    * }
    * @apiSuccessExample {json} 200 OK
    * {
    *   "Equipment": {
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
    function createEquipment(Request $request)
    {
      $this->Equipments->validateCreateEquipment( $request->input() );
      return $this->response->array(  $this->Equipments->insertEquipment( $request->input() ) );
    }
    /**
    * @api {put} /Equipments Update
    * @apiGroup Equipments
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
    function updateEquipment(Request $request, $id)
    {
      $this->Equipments->validateUpdateEquipment( array_merge(['_id' => $id], $request->input()) );
      $this->Equipments->updateEquipment( $id, $request->input() );
      return $this->response->array( ['message' => true ]  );
    }

    function deleteEquipment( $id )
    {
      $this->Equipments->deleteEquipment( $id );
      return $this->response->array( ['message' => true ]);
    }
    /**
     * @api {get} /Equipments?where=column,value Query
     * @apiGroup Equipments
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
      return $this->response->array( $this->AppController->query($this->Equipments, $request)->toArray() );
    }

    function all(Request $request)
    {
      return $this->response->array( ['data' => $this->Equipments->get()->toArray()] );
    }

    function distinct(Request $request, $distinct)
    {
      if(empty($distinct)) $distinct = 'type';

      foreach ($this->Equipments->get() as $key => $value)
      {
        $array[$value->$distinct][] =  $value;
      }

      return $this->response->array( $array );
    }
}
