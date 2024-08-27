<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable =['TitreHeader','SousTitreHeader','ContentHeader','Image1Header','Image2Header','Image','descriptionAbout','Logo','TitreHistoire','SousTitreHistoire','TitreTeam','SousTitreTeam','ContentTeam','ButtonTeam','TemoignageTitre','TemoignageSousTitre','TitrePartenaire','SousTitrePartenaire','TextePartenaire'];
}
