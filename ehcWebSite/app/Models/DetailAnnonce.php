<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAnnonce extends Model
{
    use HasFactory;
    protected $fillable = ['TypeAnnonce','Titre','SousTitre','Titre1','Titre2','Titredescription1','Titredescription2','TitreForm','Button'];
}
