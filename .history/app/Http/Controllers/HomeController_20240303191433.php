<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Cache::remember('posts', Carbon::now()->addDay(), function(){
            return Post::published()->with('categories')->orderBy('published_at','desc')->paginate(4);
            });

        return view('welcome', [
       'posts' => $posts,
            // 'featuredPosts' => Post::published()->featured()->latest('published_at')->take(9)->get(),
            // 'latestPosts' => Post::published()->latest('published_at')->take(9)->get(),
            'categories' => Category::whereHas('posts', function($query){
                $query->published();
            })->take(10)->get(),
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
