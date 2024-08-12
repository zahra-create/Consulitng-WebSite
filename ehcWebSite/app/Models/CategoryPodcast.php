<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPodcast extends Model
{
    use HasFactory;

    protected $fillable = ['titre','slug'];

    public function podcasts(){
       return $this->belongsToMany(Podcast::class);
    }  
}
