<?php

namespace App\Http\Controllers;

use App\Models\DetailAnnonce;
use Illuminate\Http\Request;
use App\Models\Emploi;
use App\Models\otherPages;

class EmploiController extends Controller
{
    public function index()
    {
       
        $EmploiPage = otherPages::where('Page', 'Emploi')->first();

        if(!$EmploiPage) {
            $EmploiPage = new otherPages([
                'Page' =>'Emploi',
                'Titre' => 'Offre d\'emplois',
                'SousTitre' => 'Découvrez nos offres de Emploi',
                'Description' => '',
            ]);
        }

        $Titre=$EmploiPage->Titre;
        $SousTitre=$EmploiPage->SousTitre;
        $Description=$EmploiPage->Description;
        

        $emplois = Emploi::latest()->paginate(6);
        return view('carriere.emplois.emplois', compact('emplois','Titre','SousTitre','Description'));
    }

    public function show($id)
    {
        $DetailPage = DetailAnnonce::where('TypeAnnonce', 'Emploi')->first();

        if(!$DetailPage) {
            $DetailPage = new DetailAnnonce([
                'TypeAnnonce' =>'Emploi',
                'Titre' => 'Détails de l\'offre',
                'Titre1' => 'Profil de poste',
                'Titre2' => 'Location',
                'Titredescription1' => 'Qualifications',
                'Titredescription2' => 'Aptitudes demandées',
                'TitreForm' =>' Postulez!',
                'Button' => 'Soumettre ma candidature',
            ]);
        }

        $Titre = $DetailPage->Titre;
        $Titre1 = $DetailPage->Titre1;
        $Titre2 = $DetailPage->Titre2;
        $Titredescription1 = $DetailPage->Titredescription1;
        $Titredescription2 = $DetailPage->Titredescription2;
        $TitreForm = $DetailPage->TitreForm;
        $Button = $DetailPage->Button;

        $emploi = Emploi::find($id);
        return view('carriere.emplois.details-emploi', compact('emploi','Titre', 'Titre1', 'Titre2', 'Titredescription1', 'Titredescription2', 'TitreForm', 'Button'));
    }
}
