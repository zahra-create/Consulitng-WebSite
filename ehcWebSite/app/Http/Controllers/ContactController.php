<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\Contact;
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

}
