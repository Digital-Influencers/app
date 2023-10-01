<?php

namespace App\Http\Controllers\Theme\front_pages;

use App\Http\Controllers\Controller;

class HelpCenter extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'front'];
    return view('content.front-pages.help-center-landing', ['pageConfigs' => $pageConfigs]);
  }
}
