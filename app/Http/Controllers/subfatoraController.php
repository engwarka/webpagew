<?php

namespace App\Http\Controllers;
use App\Models\subfatora;
use Illuminate\Http\Request;


class subfatoraController extends Controller
{
    public function substore(Request $request){


        $request->validate([
            "tasalsal"=>"required",
            "date_subfatora"=>"required",

            "subwared"=>"required"
                 ]);
                 $subfatoras = new subfatora();
                 $subfatoras->tasalsal= $request->input("tasalsal");
                 $subfatoras->date_subfatora= $request->input("date_subfatora");

                 $subfatoras->subwared= $request->input("subwared");
                 $subfatoras->part= $request->input("part");
                 $subfatoras->save();

                 return view("/website.main");}
                 public function delete($subfatora_id){
                    $subfatora_id = intval($subfatora_id);
                    $finduser = subfatora::find($subfatora_id);
                    $finduser->delete();
                    return redirect()->back();
                }




};
