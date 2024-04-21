<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Resources;
use App\Models\Course;
use App\Models\Profitable;
use App\Models\AboutProfile;
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

        $courses = Course::all();

        $aboutProfile = AboutProfile::with('images')->find($id=3);

        return view('welcome', [
            'posts' => $posts,
            'categories' => $categories,
            'resources' => $resources,
            'courses' => $courses,
            'about' => $aboutProfile
        ]);
    }


    public function __invoke(Request $request)
    {
        $posts = Post::published()->with('categories')->orderBy('published_at', 'desc')->take(4)->get();

        $categories = Category::whereHas('posts', function($query){
            $query->published();
        })->take(10)->get();

        $resources = Resources::take(10)->get();

        $courses = Course::all();

        $aboutProfile = AboutProfile::with('images')->find($id=3);

        return view('welcome', [
            'posts' => $posts,
            'categories' => $categories,
            'resources' => $resources,
            'courses' => $courses,
            'about' => $aboutProfile
        ]);
    }

    public function about($id)
    {
        $aboutProfile = AboutProfile::with('images')->find($id);
        return view('about', compact('aboutProfile'));
    }

    public function profitable(Profitable $profitable)
    {

        return view('profitable', ['profitable' => $profitable]);
    }


    public function onetraining()
    {
        return view('one_on_one');
    }


    public function join()
    {
        return view('join_as_class');
    }

    public function resources(){

        $freeresources =  Resources::where('price', '<=', 0)->get();


        $paidresources = Resources::where('price', '>', 0)->get();


        return view('resources', [
            'freeresources' => $freeresources,
            'paidresources' => $paidresources
        ]);
    }


    public function noforex(){

        $noforex = Resources::where('price', '<=', 0)
        ->where('no_idea_forex', true)
        ->get();


        return view('noideaforex', [
            'freeresources' => $noforex
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


    public function resourceShow(Resources $resource){
        return view('resources-details',
        [
         'resource' => $resource
       ]
  );
    }


}
