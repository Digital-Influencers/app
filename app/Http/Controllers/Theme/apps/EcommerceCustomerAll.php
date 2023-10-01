<?php

namespace App\Http\Controllers\Theme\apps;

use App\Http\Controllers\Controller;

class EcommerceCustomerAll extends Controller
{
  public function index()
  {
    return view('content.apps.app-ecommerce-customer-all');
  }
}
