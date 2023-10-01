<?php

namespace App\Http\Controllers\Theme\authentications;

use App\Http\Controllers\Controller;

class LoginCover extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-login-cover', ['pageConfigs' => $pageConfigs]);
  }
}
