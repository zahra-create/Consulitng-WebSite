<?php

namespace App\Http\Controllers;

use App\Models\otherPages;
use App\Models\VideoCategory;
use Illuminate\Http\Request;

class VideoCategoryController extends Controller

{     public function index()
    {
        $categories = VideoCategory::latest()->paginate(6);

        $VideoPage = otherPages::where('Page', 'Podcast')->first();

        if(!$VideoPage) {
            $VideoPage = new otherPages([
                'Page' =>'Videos',
                'Titre' => 'EHC playlists',
                'SousTitre' => 'PLAYLISTS RECOMMANDÉE',
                'Description' => 'Every decision make need answer the million dollar question how will this benefit
                 our partner goal best we work to develop solution:',
            ]);
        }

        $Titre=$VideoPage->Titre;
        $SousTitre=$VideoPage->SousTitre;
        $Description=$VideoPage->Description;

        return view('media.video.playlists', compact('categories','Titre','SousTitre','Description'));
    }
    public function show($id)
    {
        
        $VideoPage = otherPages::where('Page', 'Podcast')->first();

        if(!$VideoPage) {
            $VideoPage = new otherPages([
                'Page' =>'Videos',
                'Titre' => 'EHC playlists',
                'SousTitre' => 'PLAYLISTS RECOMMANDÉE',
                'Description' => 'Every decision make need answer the million dollar question how will this benefit
                 our partner goal best we work to develop solution:',
            ]);
        }

        $Titre=$VideoPage->Titre;
        $SousTitre=$VideoPage->SousTitre;
        $Description=$VideoPage->Description;

        $category = VideoCategory::with('videos')->findOrFail($id);

        
        $firstVideo = $category->videos->first();

        
        return view('media.video.playlist_details', [
            'category' => $category,
            'firstVideo' => $firstVideo,
            'videos' => $category->videos,
           /* 'Titre','SousTitre','Description' */
        ]);
    }
    public function getCategoryVideos($id)
    {
        $category = VideoCategory::with('videos')->findOrFail($id);
        $videos = $category->videos->map(function($video) {
            return [
                'id' => $video->id,
                'title' => $video->title,
                'name' => $video->name,
                'duration' => $video->duration
            ];
        });

        return response()->json($videos);
    }
}
