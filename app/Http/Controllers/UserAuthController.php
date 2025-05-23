<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    //
    function SignUp(Request $request){
        $input = $request->all();
        $input["password"] = bcrypt($input["password"]);
        $user = User::create($input);
        $success['token'] = $user->createToken("MyToken")->plainTextToken;
        $user['user'] = $user->name;
        return ['success'=>true, "result" => $success, "msg" => "User Register Successfully"];
    }

    function Login(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return ['result' => "User not found", "Success"=> false];
        }
        $success['token'] = $user->createToken('MyToken')->plainTextToken;
        $success['name'] = $user->name;
        return ['result'=> $success, 'msg' => "user register successfully"];
    }
}
