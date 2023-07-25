<?php

namespace App\Http\Controllers;
use App\Models\tasded;
use Illuminate\Http\Request;

class tasdedController extends Controller
{
    public function substoretasdes(Request $request){


        $request->validate([
            "madentasded"=>"required",
            "datetasded"=>"required",

            "texttasded"=>"required"
                 ]);
                 $tasdedn = new tasded();
                 $tasdedn->madentasded= $request->input("madentasded");
                 $tasdedn->datetasded= $request->input("datetasded");

                 $tasdedn->texttasded= $request->input("texttasded");

                 $tasdedn->save();

                 return view("/website.formstesaed");}

                 public function delete($tasded_id){
                    $tasded_id = intval($tasded_id);
                    $tasdedn = tasded::find($tasded_id);
                    $tasdedn->delete();
                    return redirect()->back();
                }

}
