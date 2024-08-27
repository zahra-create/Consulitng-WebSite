<?php

namespace App\Http\Controllers;

use App\Models\DetailAnnonce;
use App\Models\otherPages;
use Illuminate\Http\Request;
use App\Models\Stage;

class StageController extends Controller
{
    public function index()
    {
        $StagePage = otherPages::where('Page', 'Stages')->first();

        if(!$StagePage) {
            $StagePage = new otherPages([
                'Page' =>'Stages',
                'Titre' => 'Stages',
                'SousTitre' => 'Découvrez nos offres de stage',
                'Description' => '',
            ]);
        }

        $Titre=$StagePage->Titre;
        $SousTitre=$StagePage->SousTitre;
        $Description=$StagePage->Description;


        $stages = Stage::latest()->paginate(6);
        return view('carriere.stages.stage', compact('stages','Titre','SousTitre','Description'));
    }

    public function show($id)
    {

        $DetailPage = DetailAnnonce::where('TypeAnnonce', 'Stage')->first();

        if(!$DetailPage) {
            $DetailPage = new DetailAnnonce([
                'TypeAnnonce' =>'Stage',
                'Titre' => 'Stage détails',
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

        $stage = Stage::find($id);
        return view('carriere.stages.details', compact('stage','Titre', 'Titre1', 'Titre2', 'Titredescription1', 'Titredescription2', 'TitreForm', 'Button'));
    }
}
