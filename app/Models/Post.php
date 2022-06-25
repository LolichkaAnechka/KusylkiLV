<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_name',
        'post_text',
        'post_img',
    ];

    public $timestamps = false;

  
    public function comments(){
        return $this->hasMany(Comment::class);
    }



    
    public function pick_hero_imgs(){
        return $this->hasMany(PickHeroImg::class);
    }
    public function ban_hero_imgs(){
        return $this->hasMany(BanHeroImg::class);
    }
    public function team_logos(){
        return $this->hasMany(TeamLogo::class);
    }
    public function scores(){
        return $this->hasOne(Score::class);
    }
}
