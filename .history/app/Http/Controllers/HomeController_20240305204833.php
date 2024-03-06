<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Resources;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::published()->with('categories')->orderBy('published_at', 'desc')->take(4)->get();

        $categories = Category::whereHas('posts', function($query){
            $query->published();
        })->take(10)->get();

        $resources = Resources::take(10)->get();

        return view('welcome', [
            'posts' => $posts,
            'categories' => $categories,
            'resources' => $resources
        ]);
    }




    public function resources(){

        $freeresources = Cache::remember('freeresources', Carbon::now()->addDay(), function(){
            return Resources::where('price', '<=', 0)->get();
        });

        $paidresources = Cache::remember('paidresources', Carbon::now()->addDay(), function(){
            return Resources::where('price', '>', 0)->get();
        });

        return view('resources', [
            'freeresources' => $freeresources,
            'paidresources' => $paidresources
        ]);
    }


    public function noforex(){

        $freeresources = Cache::remember('freeresources', Carbon::now()->addDay(), function(){
            return Resources::where('price', '<=', 0)->get();
        });

        $paidresources = Cache::remember('paidresources', Carbon::now()->addDay(), function(){
       

        return view('resources', [
            'freeresources' => $freeresources,
            'paidresources' => $paidresources
        ]);
    }

    public function courses()
    {
        $courses = Course::paginate(5);

        return view('courses', [
            'courses' => $courses
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


    public function courseShow(Course $course){
        return view('course-details',
        [
         'course' => $course
       ]
  );
    }

}
