<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DevisSubmissionMail;
class DevisMailController extends Controller
{
    public function sendDevisEmail(Request $request) {
        $this->validate($request,[
            'name' => 'required|min:5|max:100',
            'prenom' => 'required|min:5|max:100',
            'email' => 'required|email',
            'phone' => 'required|min:5|max:100',
            'company' => 'required|min:5|max:100',
            'message' => 'required|min:5',


          ]);
	$RHemail = config('mail.RHemail');
	$response = Mail::to($RHemail)->send(new DevisSubmissionMail($request->all()));

              if ($response){
               return back()->with('success', 'Votre demande de devis a été envoyé avec succès');
                
              }
              return back()->with('error', "Votre demande de devis n'a pas pu être envoyée.");
         
    }    
}
