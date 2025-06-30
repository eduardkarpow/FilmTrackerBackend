<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Models\DirectorsModel;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function addMovie(Request $request){
        $movie = Movie::create($request->input());
        return response()->json($movie,201);
    }
    public function getMovies(Request $request){
        $movies = Movie::all();
        foreach ($movies as $movie){
            $movie->director;
            $movie->categories;
            $movie->writers;
        }
        return response()->json($movies, 200);
    }
}
