<?php

namespace App\Http\Controllers\Theme\form_elements;

use App\Http\Controllers\Controller;

class InputGroups extends Controller
{
  public function index()
  {
    return view('content.form-elements.forms-input-groups');
  }
}
