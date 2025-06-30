<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies_main";
    public $timestamps = false;
    protected $fillable = [
        "title",
        "short_description",
        "year",
        "restriction",
        "lasts",
        "imdb_rating",
        "kinopoisk_rating",
        "long_description",
        "image_url",
        "director_id"
    ];
    public function director(){
        return $this->belongsTo(DirectorsModel::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class, "movies_categories", "movie_id");
    }
    public function writers(){
        return $this->belongsToMany(Writer::class, "movies_writers");
    }
    #public function writers(){
    #    return $this->hasMany("App\Models\Writer", "writers_id", "id");
    #}
    #public function categories(){
    #    return $this->hasMany("App\Models\Category", "category_id", "id");
    #}
}
