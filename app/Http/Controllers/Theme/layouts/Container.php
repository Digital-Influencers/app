<?php

namespace App\Http\Controllers\Theme\layouts;

use App\Http\Controllers\Controller;

class Container extends Controller
{
  public function index()
  {
    $pageConfigs = ['contentLayout' => 'compact'];
    return view('content.layouts-example.layouts-container',['pageConfigs'=> $pageConfigs]);
  }
}
