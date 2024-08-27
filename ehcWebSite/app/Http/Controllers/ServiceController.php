<?php

namespace App\Http\Controllers;

use App\Models\DetailService;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function ServiceEntreprise() 
    {
        $service = Service::where('TypeService', 'Pour Entreprises')->first();
    
        $services = DetailService::where('TypeService', 'Pour Entreprises')->get();

    if (!$service) {
        
        $service = new Service(['TypeService' => 'Pour Entreprises',
            'TitreIntroService' => 'Bienvenue chez les services EHC',
            'IntroService' => 'Profitez de solutions sur mesure pour optimiser votre performance et le développement de vos équipes.',
            'Image' => 'assets/imgs/gallery/service-entreprise.jpg',
            'TitreService' => 'Notre mission',
            'SousTitreService' => 'EHC excelle dans l\'accompagnement des entreprises vers l\'excellence',
            'description' => 'Grâce à notre expertise, nous simplifions les projets complexes. Nous offrons un <span>soutien intégral</span> pour aider les
            entreprises à maximiser leur potentiel et à atteindre leurs objectifs stratégiques.',
            'Titre' => 'Entamez votre parcours de transformation ici',
            'SousTitre' => 'Améliorez votre entreprise en gérant efficacement vos ressources et projets',
            'Button' => 'Contactez-nous',
            'ColorButton' => '',
            ]); 
    }

     return view('service-entreprise', [
     'TitreIntroService' => $service->TitreIntroService,
     'IntroService' => $service->IntroService,
     'Image' => $service->Image,
     'TitreService' => $service->TitreService,
     'SousTitreService' => $service->SousTitreService,
     'description' => $service->description,
     'Titre' => $service->Titre,
     'SousTitre' => $service->SousTitre,
     'Button' => $service->Button,
     'ColorButton' => $service->ColorButton,
     'services' => $services,
     ]
);
    }

    public function ServiceSalarie() 
    {
        $service = Service::where('TypeService', 'Pour Salariés')->first();
    
        $services = DetailService::where('TypeService', 'Pour Salariés')->get();

    if (!$service) {
        
        $service = new Service(['TypeService' => 'Pour Salariés',
            'TitreIntroService' => 'Bienvenue, Cher salarié',
            'IntroService' => 'Bénéficiez d\'un accompagnement personnalisé pour votre développement professionnel et personnel.',
            'Image' => 'assets/imgs/gallery/service-fonctionnaire.jpg',
            'TitreService' => 'Notre mission',
            'SousTitreService' => 'EHC accompagne les professionnels dans leur évolution de carrière',
            'description' => 'Nous clarifions les défis professionnels exigeants grâce à notre savoir-faire. Notre <span>accompagnement total</span> aide les fonctionnaires, salariés et professions libérales à atteindre leurs objectifs de carrière.',
            'Titre' => 'Votre évolution professionnelle commence ici',
            'SousTitre' => 'Optimisez votre parcours professionnel grâce à notre expertise',
            'Button' => 'Contactez-nous',
            'ColorButton' => '',
            ]); 
    }

     return view('service-fonctionnaire', [
     'TitreIntroService' => $service->TitreIntroService,
     'IntroService' => $service->IntroService,
     'Image' => $service->Image,
     'TitreService' => $service->TitreService,
     'SousTitreService' => $service->SousTitreService,
     'description' => $service->description,
     'Titre' => $service->Titre,
     'SousTitre' => $service->SousTitre,
     'Button' => $service->Button,
     'ColorButton' => $service->ColorButton,
     'services' => $services,
     ]
);
    }

    public function ServiceEtudiant() 
    {
        $service = Service::where('TypeService', 'Pour Étudiants')->first();
    
        $services = DetailService::where('TypeService', 'Pour Étudiants')->get();

    if (!$service) {
        
        $service = new Service([
            'TitreIntroService' => 'Bienvenue, Cher Etudiant',
            'IntroService' => 'Bénéficiez d\'un accompagnement personnalisé pour votre développement professionnel et personnel.',
            'Image' => 'assets/imgs/gallery/graduation.jpg',
            'TitreService' => 'Notre mission',
            'SousTitreService' => 'EHC excelle dans le soutien des étudiants vers leur réussite',
            'description' => 'Les projets complexes deviennent plus accessibles grâce à notre expertise. Nous fournissons un <span>soutien complet</span> pour aider les étudiants à naviguer dans leur parcours académique et professionnel.',
            'Titre' => 'Votre avenir commence ici',
            'SousTitre' => 'Facilitez votre transition du monde académique au professionnel',
            'Button' => 'Contactez-nous',
            'ColorButton' => '',
            ]); 
    }

     return view('service-etudiant', [
     'TitreIntroService' => $service->TitreIntroService,
     'IntroService' => $service->IntroService,
     'Image' => $service->Image,
     'TitreService' => $service->TitreService,
     'SousTitreService' => $service->SousTitreService,
     'description' => $service->description,
     'Titre' => $service->Titre,
     'SousTitre' => $service->SousTitre,
     'Button' => $service->Button,
     'ColorButton' => $service->ColorButton,
     'services' => $services,
     ]
);
    }

    public function show(DetailService $serv)
    {

    return view('service-details',compact('serv'));
    }

}
