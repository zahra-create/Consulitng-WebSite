<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmissionMail;

class ContactMailController extends Controller
{
    public function sendContactEmail(Request $request) {
        $this->validate($request,[
            'name' => 'required|min:5|max:100',
            'prenom' => 'required|min:5|max:100',
            'email' => 'required|email',
            'objet' => 'required|min:5|max:100',
            'message' => 'required|min:5',
          ]);
	$RHemail = config('mail.RHemail');
	$response = Mail::to($RHemail)->send(new ContactSubmissionMail($request->all()));

              if ($response){
               return back()->with('success', 'Votre message a été envoyé avec succès');
                
              }
              return back()->with('error', "Votre message n'a pas pu être envoyée.");
         
    }
}
