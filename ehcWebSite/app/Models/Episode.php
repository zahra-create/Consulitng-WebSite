<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description','active', 'audio', 'cover', 'proprietaire', 'date_publication'];

    public function podcaste()
    {
        return $this->belongsTo(Podcast::class);
    }
}
