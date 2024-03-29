<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function set_locale($locale)
    {
        Session::put('locale', $locale);
        return Redirect::back();
    }
}
