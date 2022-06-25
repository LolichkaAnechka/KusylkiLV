<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamLogo extends Model
{
    protected $fillable = [
        'path',
        'post_id',
    ];

    public $timestamps = false;
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
