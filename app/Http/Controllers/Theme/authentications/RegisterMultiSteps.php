<?php

namespace App\Http\Controllers\Theme\authentications;

use App\Http\Controllers\Controller;

class RegisterMultiSteps extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-register-multisteps', ['pageConfigs' => $pageConfigs]);
  }
}
