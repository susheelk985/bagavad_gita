<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function change(Request $request)
    {
        // return $request->lang;
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        // return session()->get('locale');
        return redirect()->back();
    }
}
