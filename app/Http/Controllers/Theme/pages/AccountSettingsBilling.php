<?php

namespace App\Http\Controllers\Theme\pages;

use App\Http\Controllers\Controller;

class AccountSettingsBilling extends Controller
{
  public function index()
  {
    return view('content.pages.pages-account-settings-billing');
  }
}
