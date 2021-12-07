<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;

class ProspectController extends Controller
{
    function register(Request $request){

        $prospect = new Prospect;
        $prospect->name = $request->name;
        $prospect->email = $request->email;
        $prospect->phone = $request->phone;
        $prospect->cargo = $request->cargo;
        $prospect->question = $request->question;
        $prospect->save();

        return response()->json(["success" => true, "msg" => "Te contactaremos en breve"]);

    }
}
