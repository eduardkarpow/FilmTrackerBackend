<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMoviesModel extends Model
{
    protected $table = "users_movies";
    public $timestamps = false;
    protected $fillable = [
        "user_id",
        "movie_id"
    ];
}
