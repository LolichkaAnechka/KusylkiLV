<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'login',
        'email',
        'password',
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}