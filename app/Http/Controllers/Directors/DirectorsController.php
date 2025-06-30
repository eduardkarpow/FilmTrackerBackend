<?php

namespace App\Http\Controllers\Directors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DirectorsModel;

class DirectorsController extends Controller
{
    public function getDirector(){
        return response()->json(DirectorsModel::get(),200);
    }
    public function addDirector(Request $request){
        $category = DirectorsModel::create($request->input());
        return response()->json($category,201);
    }
    public function getDirectors(Request $request){
        $directors = DirectorsModel::all();
        foreach ($directors as $director){
           $director["movies"] = $director->movies;
        }
        return response()->json($directors, 200);
    }
}
