<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Post;

class PostController extends Controller
{
    public function show($slug){

        $post = Post::where('slug', $slug)->first();

        $date = new DateTime($post->created_at);

        return view('guest.posts.show', compact('post', 'date'));
    }
}
