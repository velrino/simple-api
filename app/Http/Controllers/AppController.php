<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\Models\Users;
use App\Models\Products;
use Illuminate\Http\Request;

class AppController extends BaseController
{
    function __construct()
    {
      $this->Users = new Users;
    }
    /**
    * @api {post} /auth/facebook Facebook
    * @apiGroup Auth
    * @apiName Facebook
    * @apiParamExample {json} Request-Example:
    *     {
    *       "facebook_id": "STRING",
    *       "facebook_token": "STRING"
    *     }
    * @apiSuccessExample {json} 200 OK
    * {
    *   "User":
    *     {
    *       "_id": "57ae75bda697b2001046b09012390",
    *       "facebook_id": "57ae754da697b2000c0ba171",
    *       "facebook_token": "57ae754da697b2000c0ba171012909129010911",
    *       "updated_at": "2016-08-13 01:19:57",
    *       "created_at": "2016-08-13 01:19:57"
    *     }
    * }
    * @apiErrorExample {json} 422 Invalid
    * {
    *   "error": {
    *     "message": "Usuário não pode ser criado",
    *     "errors": [
    *       [
    *         "facebook id não informado"
    *       ]
    *     ],
    *     "status_code": 422
    *   }
    * }
    */
    function facebook(Request $request)
    {
      $inputs = $request->input();
      $this->Users->validateFacebook($inputs);
      $check = $this->Users->where('facebook_id', $inputs['facebook_id'])->where('facebook_token', $inputs['facebook_token'])->first();
      $login = (!empty($check)) ? $check : $this->Users::create( (array) $inputs) ;
      return $this->response->array( $login );
    }
    /**
    * @api {get} /user List
    * @apiGroup Users
    * @apiName List
    * @apiParamExample {json} Request-Example:
    *     {
    *       "facebook_id": "STRING",
    *       "facebook_token": "STRING"
    *     }
    * @apiSuccessExample {json} 200 OK
    * {
    *   "Users":
    *     {
    *       "_id": "57ae75bda697b2001046b09012390",
    *       "facebook_id": "57ae754da697b2000c0ba171",
    *       "facebook_token": "57ae754da697b2000c0ba171012909129010911",
    *       "updated_at": "2016-08-13 01:19:57",
    *       "created_at": "2016-08-13 01:19:57"
    *     }
    * }
    */
    function list()
    {
      return $this->response->array( $this->Users::all() );
    }
    
    public function query($list, $request = null)
    {
      foreach ($request->toArray() as $key => $value)
      {
        if($key == 'where')
        {
          $where = explode(',',$value);
          $list = $list->where($where[0], $where[1]);
        }

        if($key == 'order')
        {
          $order = explode(',',$value);
          $list = $list->orderBy($order[0], $order[1]);
        }
      }
      return $list->get();
    }
}
