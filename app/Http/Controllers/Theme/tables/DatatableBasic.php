<?php

namespace App\Http\Controllers\Theme\tables;

use App\Http\Controllers\Controller;

class DatatableBasic extends Controller
{
  public function index()
  {
    return view('content.tables.tables-datatables-basic');
  }
}
