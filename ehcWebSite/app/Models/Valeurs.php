<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valeurs extends Model
{
    use HasFactory;
    protected $fillable =['Valeur','ImageValeur'];
}
