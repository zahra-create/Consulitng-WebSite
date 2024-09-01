<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\Contact;
use App\Models\ContactInfo;
use App\Models\FormPages;
use App\Models\otherPages;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function index()
    {
        $ContactPage = FormPages::where('Page', 'Contact')->first();
        if (!$ContactPage) {
        
            $ContactPage = new FormPages(['Page' => 'Contact',
            'Titre' => 'Contactez-nous pour toute information ou assistance.',
            'SousTitre' => 'Nous sommes là pour vous aider ! ',
            'Image' => 'assets/imgs/gallery/img-r-17.webp', 
            'TitreIntro' =>'Contactez-nous pour toute information ou assistance.',
    'SousTitreIntro' => 'Nous sommes là pour vous aider ! ',
            'TitreForm' => 'Nous Sommes là Pour vous Aider !',
            'Button' => 'Envoyer',
        'MapImage' => 'assets/video/team-planning.mp4']);
    }
    return view('contact', [
    'Titre' => $ContactPage->Titre,
    'SousTitre' => $ContactPage->SousTitre ,
    'Image' => $ContactPage->Image, 
    'TitreIntro' => $ContactPage->TitreIntro,
    'SousTitreIntro' => $ContactPage->SousTitreIntro,
    'TitreForm' => $ContactPage->TitreForm,
    'Button' => $ContactPage->Button,
    'MapImage' => $ContactPage->MapImage,
     ]);}

}
