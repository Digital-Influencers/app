<?php

namespace App\Http\Controllers\Theme\user_interface;

use App\Http\Controllers\Controller;

class Buttons extends Controller
{
  public function index()
  {
    return view('content.user-interface.ui-buttons');
  }
}