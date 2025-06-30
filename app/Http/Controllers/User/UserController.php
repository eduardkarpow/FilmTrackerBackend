<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(Request $request){
        $users = User::all();
        foreach ($users as $user){
            $user->movies;
            foreach($user["movies"] as $movie){
                $movie->director;
                $movie->categories;
                $movie->writers;
            }
        }
        return response()->json($users, 200);
    }
}
