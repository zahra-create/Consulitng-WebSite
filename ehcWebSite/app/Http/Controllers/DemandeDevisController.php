<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeDeDevis;

class DemandeDevisController extends Controller
{
    public function submitdevis(Request $request)
    {
        
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',   //|unique:demande_de_devis
            'phone' => 'nullable|string|max:255',
            'company' => 'required|string|max:255',
            'service' => 'required|integer',
            'message' => 'required|string',
        ]);

        $Devis = new DemandeDeDevis();
        $Devis->nom = $request->input('nom');
        $Devis->prenom = $request->input('prenom');        
        $Devis->email = $request->input('email');
        $Devis->phone = $request->input('phone');
        $Devis->company = $request->input('company');
        $Devis->service = $request->input('service');
        $Devis->message = $request->input('message');
        $Devis->save();

        return redirect()->route('demande-devis')->with('success_devis', 'Votre demande de devis a été envoyée avec succès.');
    }
}
