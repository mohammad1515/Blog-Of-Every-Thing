<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Posts = Post::paginate(3);
        return view('home' , compact('Posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function post($slug)
    {
        $post = Post::where('slug' , '=' , $slug)->firstOrFail();
        return view('post' , compact('post'));
    }
}
