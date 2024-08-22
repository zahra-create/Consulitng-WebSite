<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientComment extends Model
{
    use HasFactory;
    protected $fillable =['image','nom','prenom','poste','entreprise','commentaire'];

    public function getImage(){
     
        if(str_starts_with($this->image, 'http')){
          return $this->image;
        }
        return '/storage/'.$this->image;
      }
}
