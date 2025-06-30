<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesWritersModel extends Model
{
    use HasFactory;
    protected $table = "movies_writers";
    public $timestamps = false;
    protected $fillable = [
        "writer_id",
        "movie_id"
    ];
}
