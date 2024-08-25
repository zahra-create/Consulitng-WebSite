<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use App\Models\ClientComment;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Models\Contracts\Page;

class AboutController extends Controller
{
    public function index()
    {
        $Equipes = Equipe::query()
        ->get();
        $Comments = ClientComment::query()
        ->get();

        return view('about-page',compact('Equipes','Comments'));
    }
    public function show($id)
    {
        $equipe = Equipe::find($id);

        if (!$equipe) {
            abort(404);}

        return view('team-details', compact('equipe'));
    }

}
