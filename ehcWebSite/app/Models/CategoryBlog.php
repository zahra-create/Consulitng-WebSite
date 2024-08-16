<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    use HasFactory;

    protected $fillable = ['titre','slug'];

    public function blogs(){
    return $this->belongsToMany(Blog::class);
 }  
}
