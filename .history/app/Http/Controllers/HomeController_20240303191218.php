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
        return view('welcome', [
           $posts = 
            // 'featuredPosts' => Post::published()->featured()->latest('published_at')->take(9)->get(),
            // 'latestPosts' => Post::published()->latest('published_at')->take(9)->get(),
            'posts' => Post::published()->with('categories')->orderBy('published_at','desc')->paginate(4),
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
