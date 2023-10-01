<?php

namespace App\Http\Controllers\Theme\dashboard;

use App\Http\Controllers\Controller;

class Crm extends Controller
{
    public function index(){
      return view('content.dashboard.dashboards-crm');
    }
}
