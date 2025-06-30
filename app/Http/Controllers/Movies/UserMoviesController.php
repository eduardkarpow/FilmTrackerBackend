<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Models\UserMoviesModel;
use Illuminate\Http\Request;

class UserMoviesController extends Controller
{
    public function addBind(Request $request){
        $bind = UserMoviesModel::create($request->input());
        return response()->json($bind, 201);
    }
}
