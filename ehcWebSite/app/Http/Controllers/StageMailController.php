<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\StageSubmissionMail;
use App\Models\Stage;

class StageMailController extends Controller
{
  public function sendStageEmail(Request $request) {
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

          $RHemail = 'zahirakasmouti@gmail.com';
          $stage = Stage::find($request->input('internship_id'));
          $stageName = $stage->title;
          $response = Mail::to($RHemail)->send(new StageSubmissionMail($request->all(),$fileName,$stageName));
          if ($response){
           return back()->with('success', 'Votre condidature a été envoyé avec succès');
            
          }
          return back()->with('error', "Votre candidature n'a pas pu être envoyée.");
            
        }

        return back()->with('error', 'Aucun fichier de CV n\'a été trouvé.');
     
  
}
} 