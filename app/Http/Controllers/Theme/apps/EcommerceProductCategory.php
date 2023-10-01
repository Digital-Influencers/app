<?php

namespace App\Http\Controllers\Theme\apps;

use App\Http\Controllers\Controller;

class EcommerceProductCategory extends Controller
{
  public function index()
  {
    return view('content.apps.app-ecommerce-category-list');
  }
}
