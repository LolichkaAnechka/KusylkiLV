<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanHeroImg extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'path',
        'post_id'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
