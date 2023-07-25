<?php

namespace App\Http\Controllers;

use App\Models\fatora;
use Illuminate\Http\Request;

class fatoraController extends Controller
{
    public function storeaccount(Request $request){


        $request->validate([
            "date_fatora"=>"required",
            "maden"=>"required",

            "rased"=>"required"
                 ]);
                 $fatoras = new fatora();
                 $fatoras->date_fatora= $request->input("date_fatora");
                 $fatoras->maden= $request->input("maden");

                 $fatoras->rased= $request->input("rased");
                 $fatoras->save();

return view("/website.main");



}
public function delete($fatora_id){
    $fatora_id = intval($fatora_id);
    $findusers = fatora::find($fatora_id);
    $findusers->delete();
    return redirect()->back();
}


};
