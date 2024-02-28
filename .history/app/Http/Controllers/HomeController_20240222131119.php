<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('blog', [
            'featuredPosts' => Post::publishdtake(3)->get(),
            'latestPosts' => Post::take(9)->get()
        ]);
    }
}
