<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\ActualiteView;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Carbon\Carbon;
use App\Models\publicite;

use App\Models\Home;
use App\Models\BU;
use App\Models\Valeurs;
use App\Models\EHCChiffre;
use App\Models\otherPages;
use App\Models\partenaire;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::query()
        ->where('active','=',1)
        ->whereDate('date_publication','<',Carbon::now())
        ->orderBy('date_publication','desc')
        ->paginate(8);

        $ActuPage = otherPages::where('Page', 'Actualités')->first();

        if(!$ActuPage) {
            $ActuPage = new otherPages([
                'Page' =>'Actualités',
                'Titre' => 'EHC ACTUALITES',
                'SousTitre' => 'NOS ACTUALITES',
                'Description' => ' ',
            ]);
        }

        $Titre=$ActuPage->Titre;
        $SousTitre=$ActuPage->SousTitre;
        $Description=$ActuPage->Description;

     // Récupérer les actualités à afficher dans la bannière
     $banniereActualites = Actualite::where('afficher_en_banniere', true)->get();

        return view('medias.Actualites',compact('actualites', 'banniereActualites','Titre','SousTitre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite,Request $request)
    {
        if(!$actualite->active){
            throw new NotFoundHttpException();
        }  

        $next = Actualite::query()
        ->where('active', true)
        ->whereDate('date_publication', '<=', Carbon::now())
        ->whereDate('date_publication', '<', $actualite->date_publication)
        ->orderBy('date_publication', 'desc')
        ->limit(1)
        ->first();

         $prev = Actualite::query()
        ->where('active', true)
        ->whereDate('date_publication', '<=', Carbon::now())
        ->whereDate('date_publication', '>', $actualite->date_publication)
        ->orderBy('date_publication', 'asc')
        ->limit(1)
        ->first();

        $existingView = ActualiteView::where('ip_address', $request->ip())
        ->where('user_agent', $request->userAgent())
        ->where('actualite_id', $actualite->id)
        ->first();
    
    if (!$existingView) {
        // Créer une nouvelle vue si elle n'existe pas encore
        ActualiteView::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'actualite_id' => $actualite->id
        ]);
    }

    $viewCount = ActualiteView::where('actualite_id', $actualite->id)->count();





        return view('medias.details-actualites',compact('actualite','prev','next','viewCount' ));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        //
    }

    public function AfficherAcceuil() 
    {
        // Récupérer les actualités à afficher sur la page d'accueil
        $actualiteshome = Actualite::where('afficher_sur_accueil', true)->get();
 
        $Header = Publicite::query()
        ->where('status','=',1)
        ->where('emplacement', 'header')
        ->get()
        ;

    $AfterBU =Publicite::query()
    ->where('status','=',1)
    ->where('emplacement', 'After BU')
    ->get()
    ;
    $AfterActu = Publicite::query()
        ->where('status','=',1)
        ->where('emplacement', 'After Actu')
        ->get();

    $BeforeActu = Publicite::query()
    ->where('status','=',1)
    ->where('emplacement', 'Before Actu')
    ->get()
    ;

    $Beforefooter = Publicite::query()
    ->where('status','=',1)
    ->where('emplacement', 'Before footer')
    ->get()
    ;

    $home = Home::first();
    $bus = BU::all();             
    $valeurs = ValeurS::all();
    $chiffres = EHCChiffre::all();
    $partenaires = partenaire::all();

    if (!$home) {
        
        $home = new Home(['TitreHeader' => 'Bienvenue chez EHC groupe',
                'ContentHeader' => 'Votre Partenaire pour le Succès en Ressources Humaines.',
                'ImageHeader' => 'assets/imgs/gallery/img-r-3.png',
                'ButtonHeader' => 'Demander Services',
                'ColorButtonHeader' => 'rgb(0, 81, 81)',
                'TitreAbout' => 'Ayant en moyenne plus de 20 ans d\'experience dans leurs domaines de competence',
                'ImageHeroAbout' => 'assets/imgs/gallery/img-s-21.png',
                'Paragraph1About' => 'Chez EHC, nous sommes dedies à transformer la gestion des ressources humaines en un atout strategique pour votre entreprise.',
                'Paragraph2About' => 'Avec une equipe d\'experts en RH, nous offrons des solutions sur mesure pour optimiser vos processus et attirer les meilleurs talents.',
                'ImageAbout' => 'assets/imgs/gallery/img-r-14.png',
                'ButtonAbout' => 'Qui Sommes-Nous',
                'ColorButtonAbout' => 'rgb(0, 81, 81)',
                'TitreWHYEHC' => 'POURQUOI EHC ?',
                'IntroWHYEHC' => 'Au coeur de ses valeurs, EHC place la satisfaction de ses partenaires au sommet de ses priorites.',
                'TitreBU' => 'NOS BUSINESS UNITS',
                'ImageBU' => 'default-image.jpg',
                'lienVideo' => 'Valeur par défaut',
                'buttonBU' => 'Demander Services',
                'ColorbuttonBU' => 'rgb(0, 81, 81)',
                'ImageChiffres' => 'https://crowdytheme.com/wp/binox/human-resource/wp-content/uploads/sites/6/2024/04/meetingImages.webp',
                'TitreChiffres' => 'EHC En Chiffres',
                'TexteChiffres' => 'EHC mobilise pour vous une équipe de haut dirigeants et cadres exerçant dans les sphères des secteurs public et privé et ayant en moyenne plus de 20 ans d\'expérience dans leurs domaines de compétence.',
                'ButtonChiffres' => 'Découvrir Nos Experts',
                'ColorChiffres' => 'rgb(0, 81, 81)',
                'TitreActualites' => 'NOS ACTUALITES',
                'ButtonActualites' => 'Voir plus',
            'TitrePartenaire' => 'NOS PARTENAIRES',
            ]); 
    }

     return view('consultant-human', ['actualiteshome' => $actualiteshome ,
  
      'Header' => $Header,
    'AfterBU' => $AfterBU,
    'AfterActu' => $AfterActu,
    'BeforeActu' => $BeforeActu,
    'Beforefooter' => $Beforefooter,

    'TitreHeader' => $home->TitreHeader ,
            'ContentHeader' => $home->ContentHeader,
            'ImageHeader' => $home->ImageHeader,
            'ButtonHeader' => $home->ButtonHeader,
            'ColorButtonHeader' => $home->ColorButtonHeader,
            'TitreAbout' => $home->TitreAbout,
            'ImageHeroAbout' => $home->ImageHeroAbout,
            'Paragraph1About' => $home->Paragraph1About,
            'Paragraph2About' => $home->Paragraph2About,
            'ImageAbout' => $home->ImageAbout,
            'ButtonAbout' => $home->ButtonAbout,
            'ColorButtonAbout' => $home->ColorButtonAbout,
            'TitreWHYEHC' => $home->TitreWHYEHC,
            'IntroWHYEHC' => $home->IntroWHYEHC,
            'TitreBU' => $home->TitreBU,
            'ImageBU' => $home->ImageBU,
            'lienVideo' => $home->getVideo(),
            'buttonBU' => $home->buttonBU,
            'ColorbuttonBU' => $home->ColorbuttonBU,
            'ImageChiffres' => $home->ImageChiffres,
            'TitreChiffres' => $home->TitreChiffres,
            'TexteChiffres' => $home->TexteChiffres,
            'ButtonChiffres' => $home->ButtonChiffres,
            'ColorChiffres' => $home->ColorChiffres,
            'TitreActualites' => $home->TitreActualites,
            'ButtonActualites' => $home->ButtonActualites,
            'TitrePartenaire' => $home->TitrePartenaire,
            'bus' => $bus, 'valeurs' => $valeurs , 'chiffres' => $chiffres , 'partenaires' => $partenaires
]);
    }

}
