<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();

        return view('guest.index', compact('posts'));
    }

    public function contacts()
    {
        return view('guest.contacts');
    }

    public function faq()
    {
        return view('guest.faq');
    }

    public function about()
    {
        return view('guest.about');
    }
}
