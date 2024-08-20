<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploi;
class EmploiController extends Controller
{
    public function index()
    {
        $emplois = Emploi::latest()->paginate(6);
        return view('carriere.emplois.emplois', compact('emplois'));
    }

    public function show($id)
    {
        $emploi = Emploi::find($id);
        return view('carriere.emplois.details-emploi', compact('emploi'));
    }
}
