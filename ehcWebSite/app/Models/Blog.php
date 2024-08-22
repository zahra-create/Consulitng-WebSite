<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['titre','slug','image' ,'corps' ,'active','date_publication','Auteur'];

    protected $casts =[ 'date_publication' => 'datetime'];

  public function categories(){
    return $this->belongsToMany(CategoryBlog::class);
}

public function shortBody(){
   return Str::words(strip_tags($this->corps),30);
}

public function getFormatedDate(){
   return $this->date_publication->format('D j F Y');
}

public function getImage(){

  if(str_starts_with($this->image, 'http')){
    return $this->image;
  }
  return '/storage/'.$this->image;
}

public function likes()
    {
        return $this->hasMany(BlogLike::class, 'blog_id');
    }

}
