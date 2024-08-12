<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Podcast extends Model
{
    use HasFactory;

    protected $table ='category_podcast_podcast';
    protected $fillable = ['category_podcast_id','podcast_id'];
}
