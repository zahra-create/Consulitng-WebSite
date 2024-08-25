<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'slug', 'description','active', 'audio', 'proprietaire', 'date_publication', 'podcast_id'];

    public function podcaste()
    {
        return $this->belongsTo(Podcast::class, 'podcast_id');
    }

    public function getAudio(){
     
        if(str_starts_with($this->audio, 'http')){
          return $this->audio;
        }
        return '/storage/'.$this->audio;
      }
}
