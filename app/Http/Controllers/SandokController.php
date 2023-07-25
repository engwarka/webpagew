<?php

namespace App\Http\Controllers;
use App\Models\subfatora;
use App\Models\fatora;
use App\Models\kashaf;
use App\Models\Hand;
use Illuminate\Http\Request;

class SandokController extends Controller
{

    public function main(){

        $fatorat = fatora::all();

     $subfatorat =subfatora::all();
     $kashaft =  kashaf::all();
     $fatorashandt = Hand::all();

        return view('website.sandok',compact('fatorat','subfatorat','kashaft','fatorashandt'));
    }

    }

