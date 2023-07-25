<?php

namespace App\Http\Controllers;

use App\Models\Hand;
use Illuminate\Http\Request;

class HandController extends Controller
{
    public function substorehand( Request $request){
        $request->validate([
            "tasalsal_hand"=>"required",
            "date_subfatorahand"=>"required",

            "subwaredhand"=>"required"
                 ]);
                 $fatorashand = new Hand();
                 $fatorashand->tasalsal_hand= $request->input("tasalsal_hand");
                 $fatorashand->date_subfatorahand= $request->input("date_subfatorahand");

                 $fatorashand->subwaredhand= $request->input("subwaredhand");

                 $fatorashand->save();

return view("/website.kfatora_contain");
    }
}
