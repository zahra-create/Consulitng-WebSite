<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EHCChiffre extends Model
{
    use HasFactory;
    protected $fillable = ['Chiffre','descriptionChiffre'];
}
