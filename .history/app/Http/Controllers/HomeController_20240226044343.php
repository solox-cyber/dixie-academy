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
            'categories' => Category::whereHas('posts', function($query){
                $query->published();
            })->take(10)->get(),
        ]);
    }



    public function blog(){
        return view('blog',
   );
    }

    public function search($categoryTitle)
    {
        // Fetch posts based on the category title
        $posts = Post::whereHas('categories', function ($query) use ($categoryTitle) {
            // Filter by category title
            $query->where('title', $categoryTitle);
        })->get();


        // Pass the fetched posts to the view
        return view('blog', ['posts' => $posts]);
       

    }

    private function getPostsByCategory($category)
    {
        $query = Post::query();

        if ($category) {
            $query->whereHas('categories', function ($query) use ($category) {
                $query->where('title', $category);
            });
        }

        return $query->get();
    }
}
