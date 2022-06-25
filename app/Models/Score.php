<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'post_id',
        'score_text',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
