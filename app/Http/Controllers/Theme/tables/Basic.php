<?php

namespace App\Http\Controllers\Theme\tables;

use App\Http\Controllers\Controller;

class Basic extends Controller
{
  public function index()
  {
    return view('content.tables.tables-basic');
  }
}
