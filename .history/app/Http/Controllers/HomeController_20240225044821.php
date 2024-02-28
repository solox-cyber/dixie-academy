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

            // 'featuredPosts' => Post::published()->featured()->latest('published_at')->take(9)->get(),
            // 'latestPosts' => Post::published()->latest('published_at')->take(9)->get(),
            'Posts' => Post::published()->orderBy('published_at','desc')->paginate(6),
            'categories' => Category::take(10)->get(),
        ]);
    }

    public function blog(){
        return view('blog',
    [
        'categories' => Category::whereHas('posts', function())ake(10)->get(),
    ]);
    }
}
