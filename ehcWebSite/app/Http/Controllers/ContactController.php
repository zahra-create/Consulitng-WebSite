<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\Contact;
use App\Models\FormPages;
use App\Models\otherPages;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $contactdata = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',  //|unique:contact_messages
            'objet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('contact@expertshumancapital.com')->send(new Contact($contactdata));

        $contact = new ContactMessage();
        $contact->nom = $request->input('nom');
        $contact->prenom = $request->input('prenom');
        $contact->email = $request->input('email');
        $contact->objet = $request->input('objet');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect('/contact')->with('success', 'Votre message a été envoyé avec succès!');

    }

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
            'Button' => 'Envoyer',]);
    }
    return view('contact', [
    'Titre' => $ContactPage->Titre,
    'SousTitre' => $ContactPage->SousTitre ,
    'Image' => $ContactPage->Image, 
    'TitreIntro' => $ContactPage->TitreIntro,
    'SousTitreIntro' => $ContactPage->SousTitreIntro,
    'TitreForm' => $ContactPage->TitreForm,
    'Button' => $ContactPage->Button,
     ]);}
}
