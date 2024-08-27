<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\CategoryBlog;
use App\Models\BlogView;
use App\Models\BlogLike;
use App\Models\otherPages;
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
        ->leftJoin('blog_category_blog', function ($join) {
            $join->on('category_blogs.id', '=', 'blog_category_blog.category_blog_id')
                 ->join('blogs', 'blog_category_blog.blog_id', '=', 'blogs.id')
                 ->where('blogs.active', '=', 1);
        })
        ->select('category_blogs.titre', 'category_blogs.slug', DB::raw('count(blog_category_blog.id) as total'))
        ->groupBy(['category_blogs.titre', 'category_blogs.slug'])
        ->having(DB::raw('count(blog_category_blog.id)'), '>', 0) // Filtre les catégories avec au moins un blog actif
        ->orderByDesc('total')
        ->get();

        $blogPage = otherPages::where('Page', 'Blog')->first();

        if(!$blogPage) {
            $blogPage = new otherPages([
                'Page' =>'Blog',
                'Titre' => 'EHC BLOG',
                'SousTitre' => 'Un regard sur le journal EHC',
                'Description' => '',
            ]);
        }

        $Titre=$blogPage->Titre;
        $SousTitre=$blogPage->SousTitre;
        $Description=$blogPage->Description;

        return view('medias.blog.blogs',compact('blogs','categories','Titre','SousTitre','Description'));
    }

    public function show(Blog $blog ,Request $request)
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

        $existingView = BlogView::where('ip_address', $request->ip())
        ->where('user_agent', $request->userAgent())
        ->where('blog_id', $blog->id)
        ->first();
    
    if (!$existingView) {
        // Créer une nouvelle vue si elle n'existe pas encore
        BlogView::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'blog_id' => $blog->id
        ]);
    }

    $viewCount = BlogView::where('blog_id', $blog->id)->count();



        return view('medias.blog.blog-details',compact('blog','prev','next','viewCount' ));
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
        ->leftJoin('blog_category_blog', function ($join) {
            $join->on('category_blogs.id', '=', 'blog_category_blog.category_blog_id')
                 ->join('blogs', 'blog_category_blog.blog_id', '=', 'blogs.id')
                 ->where('blogs.active', '=', 1);
        })
        ->select('category_blogs.titre', 'category_blogs.slug', DB::raw('count(blog_category_blog.id) as total'))
        ->groupBy(['category_blogs.titre', 'category_blogs.slug'])
        ->having(DB::raw('count(blog_category_blog.id)'), '>', 0) // Filtre les catégories avec au moins un blog actif
        ->orderByDesc('total')
        ->get();

        $blogPage = otherPages::where('Page', 'Blog')->first();

        if(!$blogPage) {
            $blogPage = new otherPages([
                'Page' =>'Blog',
                'Titre' => 'EHC BLOG',
                'SousTitre' => 'Un regard sur le journal EHC',
                'Description' => '',
            ]);
        }

        $Titre=$blogPage->Titre;
        $SousTitre=$blogPage->SousTitre;
        $Description=$blogPage->Description;

    return view('medias.blog.blogBycategory', compact('blogs','categories','Titre','SousTitre','Description'));
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
            ->paginate(8);

            $categories = CategoryBlog::query()
            ->leftJoin('blog_category_blog', function ($join) {
                $join->on('category_blogs.id', '=', 'blog_category_blog.category_blog_id')
                     ->join('blogs', 'blog_category_blog.blog_id', '=', 'blogs.id')
                     ->where('blogs.active', '=', 1);
            })
            ->select('category_blogs.titre', 'category_blogs.slug', DB::raw('count(blog_category_blog.id) as total'))
            ->groupBy(['category_blogs.titre', 'category_blogs.slug'])
            ->having(DB::raw('count(blog_category_blog.id)'), '>', 0) // Filtre les catégories avec au moins un blog actif
            ->orderByDesc('total')
            ->get();

            $blogPage = otherPages::where('Page', 'Blog')->first();

            if(!$blogPage) {
                $blogPage = new otherPages([
                    'Page' =>'Blog',
                    'Titre' => 'EHC BLOG',
                    'SousTitre' => 'Un regard sur le journal EHC',
                    'Description' => '',
                ]);
            }
    
            $Titre=$blogPage->Titre;
            $SousTitre=$blogPage->SousTitre;
            $Description=$blogPage->Description;
         
        if (empty($q) || $blogs->isEmpty()) {
         
            return redirect()->back()->with('message', 'Aucun résultat n\'est trouvé');
        
        }
        else{
        
            return view('medias.blog.searchblog', compact('blogs','categories','Titre','SousTitre','Description')); 
       
    }
    

}
}