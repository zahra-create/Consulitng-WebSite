<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeDeDevis;
use App\Models\FormPages;

class DemandeDevisController extends Controller
{




    public function index()
    {
        $DevisPage = FormPages::where('Page', 'Contact')->first();
        if (!$DevisPage) {
        
            $DevisPage = new FormPages(['Page' => 'Contact',
            'Titre' => 'Bienvenue sur notre page de demande de devis.',
            'SousTitre' => '',
            'Image' => 'assets/imgs/gallery/img-r-17.webp', 
            'TitreIntro' => 'En tant qu\'experts en ressources humaines, nous sommes dédiés à vous fournir des solutions sur mesure pour répondre à vos besoins spécifiques. ',
             'SousTitreIntro' => '',
            'TitreForm' => 'Demander Devis !',
            'Button' => 'Envoyer',]);
    }
    return view('demande-devis', [
    'Titre' => $DevisPage->Titre,
    'SousTitre' => $DevisPage->SousTitre ,
    'Image' => $DevisPage->Image, 
    'TitreIntro' => $DevisPage->TitreIntro,
    'SousTitreIntro' => $DevisPage->SousTitreIntro,
    'TitreForm' => $DevisPage->TitreForm,
    'Button' => $DevisPage->Button,
     ]);}

}
