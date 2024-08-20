<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    use HasFactory;

    protected $table = 'video_categories';

   
    protected $fillable = ['name','image'];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function getNumberOfVideosAttribute()
    {
        return $this->videos()->count();
    }
    
    public function getTotalDurationAttribute()
{
    // Retrieve all video durations as an array
    $durations = $this->videos()->pluck('duration');

    $totalDurationInSeconds = 0;

    foreach ($durations as $duration) {
        // Convert the duration (which is in 'H:i:s' format) to seconds
        $totalDurationInSeconds += strtotime($duration) - strtotime('TODAY');
    }

    // Convert the total duration from seconds to 'H:i:s' format
    return gmdate('H:i:s', $totalDurationInSeconds);
}
}
