<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $user = $request->input();
        echo($user["email"]);
        if(count(User::where("email", $user["email"])->get())){
            return response()->json(["error"=> "user is already exists"], 400);
        }
        $user["password"] = hash("sha256",$user["password"], false, ["salt"=>$user["email"]]);
        User::create($user);
        return response()->json([...$user], 201);
    }
    public function login(Request $request){
        $user = $request->input();
        $user["password"] = hash("sha256",$user["password"], false, ["salt"=>$user["email"]]);
        $userInModel = User::where("email", $user["email"])->get();
        if(!count($userInModel)){
            return response()->json(["error"=> "unregistered"], 401);
        } else{
            if($userInModel[0]["password"] != $user["password"]){
                return response()->json(["error" => "wrong email or password"],401);
            }
        }
        return response()->json($userInModel[0],200);
    }
}
