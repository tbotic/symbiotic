<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        return view('admin.index');
    }

    public function blog()
    {

        $posts = Post::paginate(10);

        return view('admin.blog.index', [
            'posts' => $posts
        ]);
    }

    public function post()
    {
        return view('admin.blog.post');
    }

    public function shop()
    {
        return view('admin.shop.index');
    }

    public function product()
    {
        return view('admin.shop.product');
    }

}
