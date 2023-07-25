<?php

namespace App\Http\Controllers;
use App\Models\subfatora;
use App\Models\fatora;
use App\Models\tasded;
use Illuminate\Http\Request;

class EradatController extends Controller
{
    //

    public function index(){

        $fatorat = fatora::all();

     $subfatorat =subfatora::all();

$tasdedn = tasded::all();

        return view('website.eradat',compact('fatorat','subfatorat','tasdedn'));
    }
}
