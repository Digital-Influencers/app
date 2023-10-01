<?php

namespace App\Http\Controllers\Theme\icons;

use App\Http\Controllers\Controller;

class MdiIcons extends Controller
{
  public function index()
  {
    return view('content.icons.icons-mdi');
  }
}
