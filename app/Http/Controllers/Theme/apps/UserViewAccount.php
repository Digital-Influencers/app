<?php

namespace App\Http\Controllers\Theme\apps;

use App\Http\Controllers\Controller;

class UserViewAccount extends Controller
{
  public function index()
  {
    return view('content.apps.app-user-view-account');
  }
}
