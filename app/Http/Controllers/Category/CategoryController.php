<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function getCategories(){
        return response()->json(Category::get(),200);
    }
    public function addCategory(Request $request){
        $category = Category::create($request->input());
        return response()->json($category,201);
    }
}
