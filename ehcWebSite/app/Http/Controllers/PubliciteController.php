<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publicite;

class PubliciteController extends Controller
{
    public function index()
    {
        $publicites = Publicite::query()
        ->where('status','=',1)
        ->get();

     $Header = Publicite::query()
     ->where('status','=',1)
     ->where('emplacement', 'Header')
     ->sortByDesc('ordre')
     ->get()
     ;

    $AfterBU =  $publicites->where('emplacement', 'After BU')
    ->sortByDesc('ordre')
    ;
    $AfterActu =  $publicites->where('emplacement', 'After Actu')
    ->sortByDesc('ordre')
    ;
    $BeforeActu =  $publicites->where('emplacement', 'Before Actu')
    ->sortByDesc('ordre')
    ;
    $Beforefooter =  $publicites->where('emplacement', 'Before footer')
    ->sortByDesc('ordre')
    ;


        return view('medias.Actualites',compact('Header', 'AfterBU', 'AfterActu','BeforeActu','Beforefooter'));
    }
}
