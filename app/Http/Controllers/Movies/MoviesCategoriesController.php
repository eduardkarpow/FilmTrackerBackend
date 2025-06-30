<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Models\MoviesCategoriesModel;
use Illuminate\Http\Request;

class MoviesCategoriesController extends Controller
{
    public function addBind(Request $request){
        $bind = MoviesCategoriesModel::create($request->input());
        return response()->json($bind, 201);
    }
}
