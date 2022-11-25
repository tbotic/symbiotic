<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPosts = Post::where('featured', 'on')->limit(3)->get();
        return view('home')->with('posts', $featuredPosts);
    }
}
