<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;

class StageController extends Controller
{
    public function index()
    {
        $stages = Stage::latest()->paginate(6);
        return view('carriere.stages.stage', compact('stages'));
    }

    public function show($id)
    {
        $stage = Stage::find($id);
        return view('carriere.stages.details', compact('stage'));
    }
}
