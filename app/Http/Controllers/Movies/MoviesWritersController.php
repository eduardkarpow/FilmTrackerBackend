<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Models\MoviesWritersModel;
use Illuminate\Http\Request;

class MoviesWritersController extends Controller
{
    public function addBind(Request $request){
        $bind = MoviesWritersModel::create($request->input());
        return response()->json($bind, 201);
    }
}
