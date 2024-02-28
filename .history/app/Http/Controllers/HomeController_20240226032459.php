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

    #[Computed()]
    public function posts()
    {
      return Post::published()->orderBy('published_at', $this->sort)
      ->when(Category::where('slug', $this->category)->first(), function($query){
         $query->scopeWithCateogry($this->category);
      })
      ->where('title', 'like', "%{$this->search}%")->paginate(6);
    }

    public function blog(){
        return view('blog',
    [
        'categories' => Category::whereHas('posts', function($query){
            $query->published();
        })->take(10)->get(),
        // 'categories' => Category::take(10)->get(),
    ]);
    }
}
