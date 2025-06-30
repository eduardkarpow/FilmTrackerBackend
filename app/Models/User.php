<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    protected $table = "user";
    public $timestamps = false;
    protected $fillable = [
        "name",
        "email",
        "password"
    ];
    public function movies(){
        return $this->belongsToMany(Movie::class, "users_movies");
    }
}
