<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectorsModel extends Model
{
    protected $table = "directors";
    public $timestamps = false;
    protected $fillable = [
        "director"
    ];
    public function movies(){
        return $this->hasMany(Movie::class, "director_id", "id");
    }
}
