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

    public function chapter(Request $request,$id)
    {
       // External api call
       $chapter = Http::get('https://bhagavadgitaapi.in/chapter/'.$id);
        //    return $chapter;
       $chapter = json_decode($chapter);

       return view('gita.chapter',compact('chapter'));
    }

    public function sloks(Request $request,$ch)
    {

        // Curl function for call external api
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://bhagavad-gita3.p.rapidapi.com/v2/chapters/1/verses/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: bhagavad-gita3.p.rapidapi.com",
                "x-rapidapi-key: fad2efed96msh93265b42a23cc34p1544a0jsn2f2274754077"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $verses = json_decode($response);
        }

        return view('gita.verses',compact('verses'));

    }

    public function donate()
    {
        return view('gita.donate');
    }

}
