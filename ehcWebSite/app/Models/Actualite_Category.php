<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite_Category extends Model
{
    use HasFactory;

    protected $table ='actualite_category_actualite';
    protected $fillable = ['category_actualite_id','actualite_id'];
}
