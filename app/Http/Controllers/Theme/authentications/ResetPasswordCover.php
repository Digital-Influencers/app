<?php

namespace App\Http\Controllers\Theme\authentications;

use App\Http\Controllers\Controller;

class ResetPasswordCover extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-reset-password-cover', ['pageConfigs' => $pageConfigs]);
  }
}
