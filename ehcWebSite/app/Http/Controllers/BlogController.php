<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\CategoryBlog;
use Illuminate\Support\Facades\DB;
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

        $categories = CategoryBlog::query()
        ->leftjoin('blog_category_blog', 'category_blogs.id', '=', 'blog_category_blog.category_blog_id')
        ->select('category_blogs.titre', 'category_blogs.slug', DB::raw('count(*) as total'))
        ->groupBy(['category_blogs.titre', 'category_blogs.slug'])
        ->orderByDesc('total')
        ->get();

        return view('medias.blog.blogs',compact('blogs','categories'));
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

    public function byCategory(CategoryBlog $category){

        $blogs = Blog::query()
        ->join('blog_category_blog', 'blogs.id', '=', 'blog_category_blog.blog_id')
        ->where('blog_category_blog.category_blog_id', '=', $category->id)
        ->where('active', '=', true)
        ->whereDate('date_publication', '<=', Carbon::now())
        ->orderBy('date_publication', 'desc')
        ->paginate(10);

        $categories = CategoryBlog::query()
        ->leftjoin('blog_category_blog', 'category_blogs.id', '=', 'blog_category_blog.category_blog_id')
        ->select('category_blogs.titre', 'category_blogs.slug', DB::raw('count(*) as total'))
        ->groupBy(['category_blogs.titre', 'category_blogs.slug'])
        ->orderByDesc('total')
        ->get();

    return view('medias.blog.blogBycategory', compact('blogs','categories'));
    }

    public function search(Request $request)
    {
        $q = $request->get('q');

        $blogs = Blog::query()
            ->where('active', '=', true)
            ->whereDate('date_publication', '<=', Carbon::now())
            ->orderBy('date_publication', 'desc')
            ->where(function ($query) use ($q) {
                $query->where('titre', 'like', "%$q%")
                    ->orWhere('corps', 'like', "%$q%");
            })
            ->paginate(10);

        return view('medias.blog.searchblog', compact('blogs'));
    }

}
