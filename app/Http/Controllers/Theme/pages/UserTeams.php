<?php

namespace App\Http\Controllers\Theme\pages;

use App\Http\Controllers\Controller;

class UserTeams extends Controller
{
  public function index()
  {
    return view('content.pages.pages-profile-teams');
  }
}
