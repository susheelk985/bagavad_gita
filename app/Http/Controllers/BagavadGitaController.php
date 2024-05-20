<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BagavadGitaController extends Controller
{
    public function home()
    {
        // External api call
        $chapters = Http::get('https://bhagavadgitaapi.in/chapters');
        $chapters = json_decode($chapters);

        return view('gita_home',compact('chapters'));
    }

}
