<?php

namespace App\Http\Controllers\Theme\apps;

use App\Http\Controllers\Controller;

class EcommerceCustomerDetailsBilling extends Controller
{
  public function index()
  {
    return view('content.apps.app-ecommerce-customer-details-billing');
  }
}
