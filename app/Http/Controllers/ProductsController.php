<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\Models\Products;
use App\Http\Controllers\AppController;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    function __construct()
    {
      $this->Products = new Products;
      $this->AppController = new AppController;
    }
    
    function list(Request $request)
    {
      return $this->response->array( $this->AppController->query($this->Products, $request)->toArray() );
    }
}
