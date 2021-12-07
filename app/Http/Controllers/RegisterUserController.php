<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisteredUser;

class RegisterUserController extends Controller
{
    
    function register(Request $request){

        $registeredUser = new RegisteredUser;
        $registeredUser->name = $request->name;
        $registeredUser->email = $request->email;
        $registeredUser->phone = $request->phone;
        $registeredUser->cargo = $request->cargo;
        $registeredUser->save();

        return response()->json(["success" => true, "msg" => "Te has registrado exitosamente, te contactaremos en breve"]);

    }

}
