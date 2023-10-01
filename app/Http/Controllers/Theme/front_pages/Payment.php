<?php

namespace App\Http\Controllers\Theme\front_pages;

use App\Http\Controllers\Controller;

class Payment extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'front'];
    return view('content.front-pages.payment-page', ['pageConfigs' => $pageConfigs]);
  }
}
