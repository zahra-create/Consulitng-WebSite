<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryActualite extends Model
{
    use HasFactory;

    protected $table='category_actualites';
    protected $fillable = ['titre','slug'];

 public function actualites(){
    return $this->belongsToMany(Actualite::class);
 }   
}
