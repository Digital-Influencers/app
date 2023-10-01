<?php

namespace App\Http\Controllers\Theme\language;

use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
  public function swap($locale)
  {

    if (!in_array($locale, ['en', 'fr', 'de', 'pt'])) {
      abort(400);
    } else {
      session()->put('locale', $locale);
    }

    App::setLocale($locale);
    return redirect()->back();
  }
}
