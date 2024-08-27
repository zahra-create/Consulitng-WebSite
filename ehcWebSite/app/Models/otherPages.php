<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otherPages extends Model
{
    use HasFactory;
    protected $fillable =['Page','Titre','SousTitre','Description'];
}
