<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Carbon\Carbon;



class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::query()
        ->where('active','=',1)
        ->whereNotNull('date_publication')
        ->orderBy('date_publication','desc')
        ->paginate(2);

        return view('medias.Actualites',compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
       if(!$actualite->active){
            throw new NotFoundHttpException();
        }  

        $next = Actualite::query()
        ->where('active', true)
        ->whereDate('date_publication', '<=', Carbon::now())
        ->whereDate('date_publication', '<', $actualite->date_publication)
        ->orderBy('date_publication', 'desc')
        ->limit(1)
        ->first();

         $prev = Actualite::query()
        ->where('active', true)
        ->whereDate('date_publication', '<=', Carbon::now())
        ->whereDate('date_publication', '>', $actualite->date_publication)
        ->orderBy('date_publication', 'asc')
        ->limit(1)
        ->first();

        return view('medias.details-actualites',compact('actualite','prev','next'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        //
    }
}
