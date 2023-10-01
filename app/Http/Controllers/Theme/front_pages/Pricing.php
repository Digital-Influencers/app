<?php

namespace App\Http\Controllers\Theme\front_pages;

use App\Http\Controllers\Controller;

class Pricing extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'front'];
    return view('content.front-pages.pricing-page', ['pageConfigs' => $pageConfigs]);
  }
}
