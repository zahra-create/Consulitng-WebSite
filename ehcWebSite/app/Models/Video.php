<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';

    
    protected $fillable = ['title','name', 'duration', 'video_category_id'];

    
    public function category()
    {
        return $this->belongsTo(VideoCategory::class, 'video_category_id');
    }
}
