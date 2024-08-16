<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()
        ->where('active','=',1)
        ->whereDate('date_publication','<',Carbon::now())
        ->orderBy('date_publication','desc')
        ->paginate(8);

        return view('medias.blog.blogs',compact('blogs'));
    }

    public function show(Blog $blog)
    {
        if(!$blog->active){
            throw new NotFoundHttpException();
        }  

        $next = Blog::query()
        ->where('active', true)
        ->whereDate('date_publication', '<=', Carbon::now())
        ->whereDate('date_publication', '<', $blog->date_publication)
        ->orderBy('date_publication', 'desc')
        ->limit(1)
        ->first();

         $prev = Blog::query()
        ->where('active', true)
        ->whereDate('date_publication', '<=', Carbon::now())
        ->whereDate('date_publication', '>', $blog->date_publication)
        ->orderBy('date_publication', 'asc')
        ->limit(1)
        ->first();

        return view('medias.blog.blog-details',compact('blog','prev','next' ));
    }

}
