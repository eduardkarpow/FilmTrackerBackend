<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesCategoriesModel extends Model
{
    use HasFactory;
    protected $table = "movies_categories";
    public $timestamps = false;
    protected $fillable = [
        "category_id",
        "movie_id"
    ];
}
