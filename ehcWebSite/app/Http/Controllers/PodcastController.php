<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Episode;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasts = Podcast::query()
        ->where('active','=',1)
        ->whereDate('date_publication','<',Carbon::now())
        ->orderBy('date_publication','desc')
        ->paginate(8);

        return view('medias.podcast.Podcasts',compact('podcasts'));
    
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
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(Podcast $podcast)
    {
        if (!$podcast->active) {
            throw new NotFoundHttpException();
        }
    
        $episodes = Episode::query()
            ->where('podcast_id', $podcast->id) 
            ->where('active', '=', 1)
            ->whereDate('date_publication', '<', Carbon::now())
            ->orderBy('date_publication', 'desc')
            ->paginate(8); 
    
        return view('medias.podcast.detail-podcast', compact('podcast', 'episodes'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Podcast $podcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcast $podcast)
    {
        //
    }
}
