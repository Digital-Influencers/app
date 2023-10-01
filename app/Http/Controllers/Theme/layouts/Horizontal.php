<?php

namespace App\Http\Controllers\Theme\layouts;

use App\Http\Controllers\Controller;

class Horizontal extends Controller
{
  public function index()
  {

    $pageConfigs = ['myLayout' => 'horizontal'];

    return view('content.dashboard.dashboards-analytics',['pageConfigs'=> $pageConfigs]);
  }
}
