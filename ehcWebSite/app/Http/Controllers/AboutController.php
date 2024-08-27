<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use App\Models\ClientComment;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Models\Contracts\Page;
use App\Models\About;
use App\Models\Etapes;
use App\Models\Partenaire;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $partenaires = Partenaire::all();
        $etapes = Etapes::all();

        $Equipes = Equipe::query()
        ->get();
        $Comments = ClientComment::query()
        ->get();

        if (!$about) {
            $about = About::create([
                'TitreHeader' => 'à propos de nous',
                'SousTitreHeader' => 'EHC Experts Human Capital',
                'ContentHeader' => 'Experts Human Capital est un groupe de conseil en ingénierie et services,
                     dédié à accompagner 
                    les organisations dans leur stratégie de développement. 
                    Grâce à l\'expertise et au sens éthique de nos consultants, nous nous 
                    positionnons comme un partenaire privilégié dans divers domaines du 
                    management des organisations. Nos valeurs d\'engagement, d\'innovation, 
                    d\'agilité, d\'expertise et d\'excellence nous permettent de fournir des 
                    solutions sur mesure, favorisant la croissance et l\'innovation de nos clients.
                    En choisissant EHC, vous bénéficiez d\'un accompagnement personnalisé et d\'une 
                    expertise éprouvée pour propulser votre organisation vers de nouveaux sommets. 
                    Ensemble, nous transformons vos défis en opportunités de succès.',
                'Image1Header' => 'assets/imgs/gallery/hero-img-1.webp',
                'Image2Header' => 'assets/imgs/gallery/about-img-2.webp',
                'Image' => 'assets/imgs/gallery/about-div-img.webp',
                'descriptionAbout' => 'Depuis sa création, EHC est reconnue pour offrir des solutions 
                  innovantes et éthiques en ingénierie et services, favorisant un développement organisationnel durable.',
                'Logo' => 'assets/imgs/shape/awards-logo-light.webp',
                'TitreHistoire' => 'histoire de l\'entreprise',
                'SousTitreHistoire' => 'Nous travaillons pour un meilleur résultat de croissance étape par étape',
                'TitreTeam' => 'notre équipe',
                'SousTitreTeam' => 'Rencontrer l\'équipe de conseillers',
                'ContentTeam' => 'L\'équipe d\'EHC, dynamique et innovante, combine expertise technique et collaboration. Passionnée 
                par la technologie, elle crée des solutions efficaces et robustes.',
                'ButtonTeam' => 'Rejoindre notre équipe',
                'TemoignageTitre' => 'TÉMOIGNAGES',
                'TemoignageSousTitre' => 'Commentaires des clients',
                'TitrePartenaire' => 'Nos Partenaires',
                'SousTitrePartenaire' => 'Nous sommes heureux d\'avoir des partenaires réputés.',
                'TextePartenaire' => 'Nous croyons que l\'humain est essentiel pour démarrer tout projet réussi et que c\'est là qu\'une splendide 
                  émotion entre l\'entreprise régénérée et l\'homme se crée.',
            ]);}   

    
        return view('about-page',['Equipes' => $Equipes,'Comments' => $Comments,
            'TitreHeader' => $about->TitreHeader,
            'SousTitreHeader' => $about->SousTitreHeader,
            'ContentHeader' => $about->ContentHeader,
            'Image1Header' => $about->Image1Header,
            'Image2Header' => $about->Image2Header,
            'Image' => $about->Image,
            'descriptionAbout' => $about->descriptionAbout,
            'Logo' => $about->Logo,
            'TitreHistoire' => $about->TitreHistoire,
            'SousTitreHistoire' => $about->SousTitreHistoire,
            'TitreTeam' => $about->TitreTeam,
            'SousTitreTeam' => $about->SousTitreTeam,
            'ContentTeam' => $about->ContentTeam,
            'ButtonTeam' => $about->ButtonTeam,
            'TemoignageTitre' => $about->TemoignageTitre,
            'TemoignageSousTitre' => $about->TemoignageSousTitre,
            'TitrePartenaire' => $about->TitrePartenaire,
            'SousTitrePartenaire' => $about->SousTitrePartenaire,
            'TextePartenaire' => $about->TextePartenaire,
            'partenaires' => $partenaires, 'etapes' => $etapes]
    );
    }
    public function show($id)
    {
        $equipe = Equipe::find($id);
  

        if (!$equipe) {
            abort(404);}

        return view('team-details', compact('equipe')
            
    
    );
    }

}
