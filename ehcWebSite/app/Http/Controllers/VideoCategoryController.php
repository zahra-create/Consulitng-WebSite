<?php

namespace App\Http\Controllers;
use App\Models\VideoCategory;
use Illuminate\Http\Request;

class VideoCategoryController extends Controller

{     public function index()
    {
        $categories = VideoCategory::latest()->paginate(6);
        return view('media.video.playlists', compact('categories'));
    }
    public function show($id)
    {
        
        $category = VideoCategory::with('videos')->findOrFail($id);

        
        $firstVideo = $category->videos->first();

        
        return view('media.video.playlist_details', [
            'category' => $category,
            'firstVideo' => $firstVideo,
            'videos' => $category->videos,
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
