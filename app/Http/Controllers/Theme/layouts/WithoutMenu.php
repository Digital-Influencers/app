<?php

namespace App\Http\Controllers\Theme\layouts;

use App\Http\Controllers\Controller;

class WithoutMenu extends Controller
{
  public function index()
  {

    return view('content.layouts-example.layouts-without-menu');
  }
}
