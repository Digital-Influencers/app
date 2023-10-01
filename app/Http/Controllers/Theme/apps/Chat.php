<?php

namespace App\Http\Controllers\Theme\apps;

use App\Http\Controllers\Controller;

class Chat extends Controller
{
  public function index()
  {
    return view('content.apps.app-chat');
  }
}
