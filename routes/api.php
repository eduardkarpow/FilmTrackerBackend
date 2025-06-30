<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("category/get", "Category\CategoryController@getCategories");
Route::post("category/add", "Category\CategoryController@addCategory");
Route::get("writer/get", "Writers\WritersController@getWriter");
Route::post("writer/add", "Writers\WritersController@addWriter");
Route::get("director/get", "Directors\DirectorsController@getDirector");
Route::post("director/add", "Directors\DirectorsController@addDirector");
Route::post("movie/add", "Movies\MoviesController@addMovie");
Route::get("movie/getall", "Movies\MoviesController@getMovies");
Route::get("director/getall", "Directors\DirectorsController@getDirectors");
Route::post("movies/addbindcategory", "Movies\MoviesCategoriesController@addbind");
Route::post("movies/addbindwriter", "Movies\MoviesWritersController@addbind");
Route::post("movies/addbinduser", "Movies\UserMoviesController@addbind");
Route::post('auth/login', 'Auth\AuthController@login');
Route::post('auth/register', 'Auth\AuthController@register');
Route::get('user/getall', 'User\UserController@getUsers');
