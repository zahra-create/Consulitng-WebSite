<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmploiSubmissionMail;
use App\Models\Emploi;
class EmploiMailController extends Controller
{
    public function sendEmploiEmail(Request $request) {
        $this->validate($request,[
            'name' => 'required|min:5|max:100',
            'email' => 'required|email',
            'message' => 'required|min:5',
            'phone' => 'required|min:5|max:100',
            'cv' => 'required|mimes:pdf,doc,docx,xls;xlsx|max:2048',
            'subject' => 'required|min:5|max:100',
          ]);
    
          
            if ($request->hasFile('cv')) {
              $fileName = time() . '.' . $request->file('cv')->getClientOriginalExtension();
              $request->file('cv')->move(public_path('attachment'), $fileName);
    
              $RHemail = config('mail.recrutement_email');
              $emploi = Emploi::find($request->input('emploi_id'));
              $emploiName = $emploi->title;
              $response = Mail::to($RHemail)->send(new EmploiSubmissionMail($request->all(),$fileName,$emploiName));
              if ($response){
               return back()->with('success', 'Votre condidature a été envoyé avec succès');
                
              }
              return back()->with('error', "Votre candidature n'a pas pu être envoyée.");
                
            }
    
            return back()->with('error', 'Aucun fichier de CV n\'a été trouvé.');
         
      
    }
}
