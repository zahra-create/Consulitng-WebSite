<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;

    protected $table='actualite';

    protected $fillable = ['titre','slug','image' ,'corps' ,'active','date_publication','Auteur'];


  public function categories(){
    return $this->belongsToMany(CategoryActualite::class);
}
}