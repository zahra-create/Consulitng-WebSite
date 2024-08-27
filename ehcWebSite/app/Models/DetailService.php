<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailService extends Model
{
    use HasFactory;
    protected $fillable =['TypeService','TitreService','DescriptionService','HeaderTitre','HeaderDescription','ImageHeader','Image','Titre1','Content1','Titre2','Content2','Titre3','Content3','Button','ButtonColor','LastImage','LastTitre','LastSousTitre'];
    
}
