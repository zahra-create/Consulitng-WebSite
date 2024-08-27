<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etapes extends Model
{
    use HasFactory;
    protected $fillable =['Date','Titre','Content'];
}
