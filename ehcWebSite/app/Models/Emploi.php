<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'entreprise', 'profil', 'description',
     'location', 'image_offre_path','image_details_path', 'skills'];

    protected $casts = [
        'skills' => 'array',
    ];
}
