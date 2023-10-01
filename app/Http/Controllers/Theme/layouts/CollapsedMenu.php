<?php

namespace App\Http\Controllers\Theme\layouts;

use App\Http\Controllers\Controller;

class CollapsedMenu extends Controller
{
  public function index()
  {

    $pageConfigs = ['menuCollapsed' => true];

    return view('content.layouts-example.layouts-collapsed-menu',['pageConfigs'=> $pageConfigs]);
  }
}
