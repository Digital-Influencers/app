<?php

namespace App\Http\Controllers\Theme\pages;

use App\Http\Controllers\Controller;

class UserConnections extends Controller
{
  public function index()
  {
    return view('content.pages.pages-profile-connections');
  }
}
