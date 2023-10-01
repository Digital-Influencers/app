<?php

namespace App\Http\Controllers\Theme\apps;

use App\Http\Controllers\Controller;

class AccessRoles extends Controller
{
  public function index()
  {
    return view('content.apps.app-access-roles');
  }
}
