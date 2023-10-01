<?php

namespace App\Http\Controllers\Theme\layouts;

use App\Http\Controllers\Controller;

class Fluid extends Controller
{
  public function index()
  {
    $pageConfigs = ['contentLayout' => 'wide'];
    return view('content.layouts-example.layouts-fluid',['pageConfigs'=> $pageConfigs]);
  }
}
