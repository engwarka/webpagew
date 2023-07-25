<?php

namespace App\Http\Controllers;
use App\Models\kashaf;
use Illuminate\Http\Request;

class kashafController extends Controller
{
    public function kashstore(Request $request){


        $request->validate([
            "ktasalsal"=>"required",
            "kdate_fatora"=>"required",

            "ktasded"=>"required",

                 ]);
                 $kashafs = new kashaf();
                 $kashafs->ktasalsal= $request->input("ktasalsal");
                 $kashafs->kdate_fatora= $request->input("kdate_fatora");

                 $kashafs->ktasded= $request->input("ktasded");
                 $kashafs->kpart= $request->input("kpart");
                 $kashafs->save();

return view("/website.kashafmain");
}
public function delete($kashaf_id){
    $kashaf_id = intval($kashaf_id);
    $finduser = kashaf::find($kashaf_id);
    $finduser->delete();
    return redirect()->back();
}
};
