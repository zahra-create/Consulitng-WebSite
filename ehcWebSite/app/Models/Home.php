<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable=['TitreHeader','ContentHeader','ImageHeader','ButtonHeader','ColorButtonHeader','TitreAbout','ImageHeroAbout','Paragraph1About','Paragraph2About','ImageAbout','ButtonAbout','ColorButtonAbout','TitreWHYEHC','IntroWHYEHC','TitreBU','ImageBU','lienVideo','buttonBU','ColorbuttonBU','ImageChiffres','TitreChiffres','TexteChiffres','ButtonChiffres','ColorChiffres','TitreActualites','ButtonActualites','TitrePartenaire'];

    public function getVideo(){

        if(str_starts_with($this->lienVideo, 'http')){
          return $this->lienVideo;
        }
        return '/storage/'.$this->lienVideo;
      }
}
