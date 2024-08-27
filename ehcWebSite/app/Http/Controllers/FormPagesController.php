<?php

namespace App\Http\Controllers;

use App\Models\FormPages;
use Illuminate\Http\Request;

class FormPagesController extends Controller
{
    public function index()
    {
        $CondidaturePage = FormPages::where('Page', 'Candidature spontannée')->first();
        if (!$CondidaturePage) {
        
            $CondidaturePage = new FormPages(['Page' => 'Candidature spontannée',
            'Titre' => 'Condidature spontanée',
            'SousTitre' => 'Rejoignez l\'équipe EHC et explorez de nouvelles opportunités professionnelles!',
            'Image' => 'assets/imgs/gallery/candidature.jpeg', 
            'TitreForm' => 'Postulez!',
            'Button' => 'Soumettre Ma Candidature',]);
    }
    return view('carriere.condidature spontanee.condidature', [
    'Titre' => $CondidaturePage->Titre,
    'SousTitre' => $CondidaturePage->SousTitre ,
    'Image' => $CondidaturePage->Image, 
    'TitreIntro' => $CondidaturePage->TitreIntro,
    'SousTitreIntro' => $CondidaturePage->SousTitreIntro,
    'TitreForm' => $CondidaturePage->TitreForm,
    'Button' => $CondidaturePage->Button,
     ]);}

 /*    public function index()
     {
         $CondidaturePage = FormPages::where('Page', 'Candidature spontannée')->first();
         if (!$CondidaturePage) {
         
             $CondidaturePage = new FormPages(['Page' => 'Candidature spontannée',
             'Titre' => 'Condidature spontanée',
             'SousTitre' => 'Rejoignez l\'équipe EHC et explorez de nouvelles opportunités professionnelles!',
             'Image' => 'assets/imgs/gallery/candidature.jpeg', 
             'TitreForm' => 'Postulez!',
             'Button' => 'Soumettre Ma Candidature',]);
     }
     return view('carriere.condidature spontanee.condidature', [
     'Titre' => $CondidaturePage->Titre,
     'SousTitre' => $CondidaturePage->SousTitre ,
     'Image' => $CondidaturePage->Image, 
     'TitreIntro' => $CondidaturePage->TitreIntro,
     'SousTitreIntro' => $CondidaturePage->SousTitreIntro,
     'TitreForm' => $CondidaturePage->TitreForm,
     'Button' => $CondidaturePage->Button,
      ]);}*/
}
