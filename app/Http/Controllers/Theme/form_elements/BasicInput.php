<?php

namespace App\Http\Controllers\Theme\form_elements;

use App\Http\Controllers\Controller;

class BasicInput extends Controller
{
  public function index()
  {
    return view('content.form-elements.forms-basic-inputs');
  }
}
