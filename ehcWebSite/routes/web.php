<?php

use App\Http\Controllers\ActualiteController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeDevisController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PubliciteController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\StageMailController;
use App\Http\Controllers\CondidatureMailController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\EmploiMailController;
use App\Http\Controllers\VideoCategoryController;
use App\Http\Controllers\VideoController;

use App\Http\Controllers\StripeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\StripeClient;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\ServiceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Home page route */
/*
Route::get('/', function () {
    return view('consultant-human');
})->name('home');*/

Route::get('/', [ActualiteController::class, 'AfficherAcceuil'])->name('home');


/* service pages routes */


/*----------------etudiant----------------------*/
/*Route::get('/service-etudiant', function () {
    return view('service-etudiant');
})->name('service-etudiant');*/

Route::get('/service-etudiant', [ServiceController::class, 'ServiceEtudiant'])->name('service-etudiant');


/*
Route::get('/cv_pro', function () {
    return view('cv_pro');
})->name('cv_pro');
Route::get('/entretien_embauche', function () {
    return view('entretien_embauche');
})->name('entretien_embauche');
Route::get('/coaching_emploi', function () {
    return view('coaching_emploi');
})->name('coaching_emploi'); */

/*----------------fonctionnaire----------------------*/

Route::get('/service-salarie', [ServiceController::class, 'ServiceSalarie'])->name('service-salarie');
/*
Route::get('/service-fonctionnaire', function () {
    return view('service-fonctionnaire');
})->name('service-fonctionnaire');
Route::get('/carrière_coaching', function () {
    return view('carrière_coaching');
})->name('carrière_coaching');
Route::get('/personal_coaching', function () {
    return view('personal_coaching');
})->name('personal_coaching');
Route::get('/bilan_competences', function () {
    return view('bilan_competences');
})->name('bilan_competences');
Route::get('/test_personnalite', function () {
    return view('test_personnalite');
})->name('test_personnalite');
Route::get('/formation_specifique', function () {
    return view('formation_specifique');
})->name('formation_specifique'); */

/*----------------Entreprise----------------------*/

Route::get('/service-entreprise', [ServiceController::class, 'ServiceEntreprise'])->name('service-entreprise');

/*
Route::get('/service-entreprise', function () {
    return view('service-entreprise');
})->name('service-entreprise');
Route::get('/conseil', function () {
    return view('conseil-details');
})->name('conseil');
Route::get('/recruitement', function () {
    return view('recruitement-details');
})->name('recruitement');
Route::get('/formation', function () {
    return view('formation-details');
})->name('formation');
Route::get('/event', function () {
    return view('event-details');
})->name('event');
Route::get('/ingenierie', function () {
    return view('ingenierie-details');
})->name('ingenierie');
*/

//service-details
Route::get('/détails-service/{serv}',[ServiceController::class, 'show'])->name('service-details');


//about page routes

Route::get('/about',[AboutController::class, 'index'])->name('about');
//team-details
Route::get('/equipe/{id}', [AboutController::class, 'show'])->name('team-details');

//blogs
/*
Route::get('/blogs', function () {
    return view('medias.blog.blogs');
})->name('blogs');
//blog details
Route::get('/blog-details', function () {
    return view('medias.blog.blog-details');
})->name('blog-details'); */


//Blogs
Route::get('/blogs',[BlogController::class, 'index'])->name('blogs');
Route::get('/search',[BlogController::class, 'search'])->name('search');


//details-blogs
Route::get('/blogs/{blog:slug}',[BlogController::class, 'show'])->name('blog-details');
Route::get('/category/{category:slug}',[BlogController::class, 'byCategory'])->name('by-category');
//Route::post('/blogs/{blog}/like', [BlogController::class, 'like'])->name('blog-details');


//contact page routes
Route::get('/contact',[ContactController::class, 'index'] 
)->name('contact');

//contact form
Route::post('/contact/submit', [ContactMailController::class, 'sendContactEmail'])->name('submitContact');


//video pages routes 

Route::get('/playlists', [VideoCategoryController::class, 'index'])->name('playlists');
Route::get('/video-category/{id}', [VideoCategoryController::class, 'show'])->name('video-category.show');
Route::get('/category/{id}/videos', [VideoCategoryController::class, 'getCategoryVideos']);

//demande devis
/*
Route::get('/demande-devis', function () {
    return view('demande-devis');
})->name('demande-devis');*/

Route::get('/demande-devis',[DemandeDevisController::class, 'index'] 
)->name('demande-devis');

//form demande devis
Route::post('/demande-devis/submit', [DevisMailController::class, 'sendDevisEmail'])->name('submitDevis');

//Paiement
Route::get('/paiement', function (Request $request) {
	$status = $request->query('status');
	if ($status){
	if ( $status === 'success') {

		session()->flash('message', 'Paiement réussi!');
		session()->flash('alert-class', 'alert-success');
		
	} else {
		session()->flash('message', 'Paiement échoué! Ressayez.');
		session()->flash('alert-class', 'alert-danger');
	}
	}
	
	return view('paiement');

})->name('paiement'); 

Route::post('/pay', [StripeController::class, 'pay'])->name('stripe.pay');



//Podcasts
/*
Route::get('/podcasts', function () {
    return view('medias.podcast.Podcasts');
})->name('Podcasts');
*/
Route::get('/podcasts',[PodcastController::class, 'index'])->name('Podcasts');
Route::get('/podcasts/search',[PodcastController::class, 'search'])->name('search-podcast');


//Page 2 Podcasts

Route::get('/podcasts2', function () {
    return view('medias.podcast.Page2');
})->name('Page2'); 

//Détails Podcasts

Route::get('/podcasts/{podcast:slug}',[PodcastController::class, 'show'])->name('detail-podcast');

//Actualites
Route::get('/Acualites',[ActualiteController::class, 'index'])->name('Actualites');

//details-actualites
Route::get('/Acualites/{actualite:slug}',[ActualiteController::class, 'show'])->name('details-actualites');
/*
Route::get('/details-acualites', function () {
    return view('medias.details-actualites');
})->name('details-actualites'); */

// condidature 
Route::get('/condidature', function () {
    return view('carriere.condidature spontanee.condidature');
})->name('condidature');
Route::post('/condidature', [CondidatureMailController::class, 'sendCondidatureEmail'])->name('submitCondidature');

//offre de stage 
Route::get('/stages', [StageController::class, 'index'])->name('stages');
Route::get('/stages/{id}', [StageController::class, 'show'])->name('stages.details');
Route::post('/stages/{id}', [StageMailController::class, 'sendStageEmail'])->name('submitStage');


// offre d'emploi 
Route::get('/emplois', [EmploiController::class, 'index'])->name('emplois');
Route::get('/emplois/{id}', [EmploiController::class, 'show'])->name('emplois.details');
Route::post('/emplois/{id}', [EmploiMailController::class, 'sendEmploiEmail'])->name('submitEmploi');

