<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    public $timestamps = false;
    protected $fillable = [
        "category"
    ];
    public function movies(){
        return $this->belongsToMany(Movie::class, "movies_categories", "category_id");
    }
}
