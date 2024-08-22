<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicite extends Model
{
    use HasFactory;
    protected $fillable = ['emplacement','Titre','SousTitre','Image','Type','link','description','status','Boutton','button_color','background'];

    public function getImage(){
      if(str_starts_with($this->Image, 'http')){
        return $this->cover;
      }
      return '/storage/'.$this->Image;
    }
}
