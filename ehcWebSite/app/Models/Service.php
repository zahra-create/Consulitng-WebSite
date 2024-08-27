<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable =['TypeService','TitreIntroService','IntroService','Image','TitreService','SousTitreService','description','Titre','SousTitre','Button','ColorButton'];

}
