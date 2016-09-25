<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use Helpers;

    public function helloWorld()
    {
      $project['project'] = env('API_NAME');
      $project['company'] = env('API_COMPANY');
      $project['version'] = env('API_VERSION');
      $project['formart'] = env('API_DEFAULT_FORMAT');
      $project['timezone'] = date_default_timezone_get();
      $project['message'] = "Today is ".date("m/d/Y")." and now is ".date("H:i:s")."";
      return $project;
    }

    function multi_array_diff($arraya, $arrayb) {

        foreach ($arraya as $keya => $valuea) {
            if (in_array($valuea, $arrayb)) {
                unset($arraya[$keya]);
            }
        }
        return $arraya;
    }
}
