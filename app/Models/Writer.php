<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $table = "writers";
    public $timestamps = false;
    protected $fillable = [
        "writer"
    ];
    #public function movie(){
    #    return $this->belongsTo("App\Models\Movie", "category_id", "id");
    #}
}
