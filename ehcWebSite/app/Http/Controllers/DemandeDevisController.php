<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeDeDevis;
use App\Models\FormPages;

class DemandeDevisController extends Controller
{
    public function submitdevis(Request $request)
    {
        
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',   //|unique:demande_de_devis
            'phone' => 'nullable|string|max:255',
            'company' => 'required|string|max:255',
            'service' => 'required|integer',
            'message' => 'required|string',
        ]);

        $Devis = new DemandeDeDevis();
        $Devis->nom = $request->input('nom');
        $Devis->prenom = $request->input('prenom');        
        $Devis->email = $request->input('email');
        $Devis->phone = $request->input('phone');
        $Devis->company = $request->input('company');
        $Devis->service = $request->input('service');
        $Devis->message = $request->input('message');
        $Devis->save();

        return redirect()->route('demande-devis')->with('success_devis', 'Votre demande de devis a été envoyée avec succès.');
    }

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
