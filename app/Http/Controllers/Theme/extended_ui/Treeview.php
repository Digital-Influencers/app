<?php

namespace App\Http\Controllers\Theme\extended_ui;

use App\Http\Controllers\Controller;

class Treeview extends Controller
{
  public function index()
  {
    return view('content.extended-ui.extended-ui-treeview');
  }
}
