<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = ['titre','slug','description','cover' ,'category' ,'active','date_publication','Proprietaire'];

    protected $casts =[ 'date_publication' => 'datetime'];

    public function categories(){
        return $this->belongsToMany(CategoryPodcast::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function shortBody(){
        return Str::words(strip_tags($this->description),30);
     }
     
     public function getFormatedDate(){
        return $this->date_publication->format('D j F Y');
     }
     
     public function getImage(){
     
       if(str_starts_with($this->cover, 'http')){
         return $this->cover;
       }
       return '/storage/'.$this->cover;
     }
}
