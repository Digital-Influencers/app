<?php

namespace App\Http\Controllers\Theme\cards;

use App\Http\Controllers\Controller;

class CardBasic extends Controller
{
  public function index()
  {
    return view('content.cards.cards-basic');
  }
}
