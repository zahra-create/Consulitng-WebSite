<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPages extends Model
{
    use HasFactory;
    protected $fillable =['Page','Titre','SousTitre','Image','TitreIntro','SousTitreIntro','TitreForm','Button','MapImage'];
}
