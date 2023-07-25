<?php

namespace App\Http\Controllers;

use App\Models\kashaf;
use App\Models\Hand;
use Illuminate\Http\Request;

class keradatController extends Controller
{
    public function main(){

        $kashaft = kashaf::all();

        $fatorashand = Hand::all();



        return view('website.kashaferadat',compact('kashaft','fatorashand'));
    }
}
