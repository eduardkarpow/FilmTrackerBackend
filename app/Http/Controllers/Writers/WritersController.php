<?php

namespace App\Http\Controllers\Writers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Writer;

class WritersController extends Controller
{
    public function getWriter(){
        return response()->json(Writer::get(),200);
    }
    public function addWriter(Request $request){
        $category = Writer::create($request->input());
        return response()->json($category,201);
    }
}
