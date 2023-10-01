<?php

namespace App\Http\Controllers\Theme\pages;

use App\Http\Controllers\Controller;

class MiscUnderMaintenance extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.pages.pages-misc-under-maintenance', ['pageConfigs' => $pageConfigs]);
  }
}
