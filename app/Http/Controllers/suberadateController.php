<?php

namespace App\Http\Controllers;

use App\Models\subfatora;
use App\Models\fatora;
use App\Models\kashaf;
use App\Models\Hand;
use Illuminate\Http\Request;

class suberadateController extends Controller
{
    public function contain(){

        $fatorat = fatora::all();

     $subfatorat =subfatora::all();
     $kashaft =  kashaf::all();
     $fatorashandt = Hand::all();

        return view('website.suberadat',compact('fatorat','subfatorat','kashaft','fatorashandt'));
    }
}
