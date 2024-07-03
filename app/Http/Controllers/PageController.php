<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function home(){
        

        $treni = Train::all();

        $dati = [
            
            "treni" => $treni
        ];

    return view('home', $dati);
    }
}
