<?php

namespace App\Http\Controllers\Theme\authentications;

use App\Http\Controllers\Controller;

class TwoStepsBasic extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-two-steps-basic', ['pageConfigs' => $pageConfigs]);
  }
}
