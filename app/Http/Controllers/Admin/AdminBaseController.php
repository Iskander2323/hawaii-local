<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as MainBaseController;

abstract class AdminBaseController extends MainBaseController
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('status');

      //MetaTag::settags{[
        

      //]}

    }
}
