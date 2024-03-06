<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Resources;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Cache::remember('posts', Carbon::now()->addDay(), function(){
            return Post::published()->with('categories')->orderBy('published_at','desc')->take(4)->get();
        });

        $categories = Cache::remember('categories', Carbon::now()->addDay(), function(){
            return Category::whereHas('posts', function($query){
                $query->published();
            })->take(10)->get();
        });

        $resources = Cache::remember('resources', Carbon::now()->addDay(), function(){
            return Resources::take(10)->get();
        });

        return view('welcome', [
            'posts' => $posts,
            // 'featuredPosts' => Post::published()->featured()->latest('published_at')->take(9)->get(),
            // 'latestPosts' => Post::published()->latest('published_at')->take(9)->get(),
            'categories' => $categories,
            'resources' => $resources
        ]);
    }



    public function resources(){

        $resources = Cache::remember('resources', Carbon::now()->addDay(), function(){
            return Resources::take(10)->get();
        });

        return view('resources', [
            'resources' => $resources
        ]);
    }


    public function resources(){

        $resources = Cache::remember('resources', Carbon::now()->addDay(), function(){
            return Resources::take(10)->get();
        });

        return view('resources', [
            'resources' => $resources
        ]);
    }

    public function blog(){
        return view('blog');
    }

    public function blogShow(Post $post){
        return view('blog-single',
        [
         'post' => $post
       ]
  );
    }

}
