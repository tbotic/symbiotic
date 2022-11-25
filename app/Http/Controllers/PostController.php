<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('blog.index', [
            'posts' => $posts
        ]);
    }

    public function adminIndex()
    {
        $posts = Post::latest()->paginate(10);

        return view('admin.blog.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('admin.blog.createPost');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move('images', $imageName);

        // images from body-post
        $body = $request->body;
        $dom = new \DomDocument();
        $dom->loadHtml('<meta http-equiv="Content-Type" content="charset=utf-8" />' . $body);
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list($type, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            file_put_contents("images/".$image_name, $data);
            $img->removeAttribute('src');
            $path = "/images/";
            $img->setAttribute('src', $path.$image_name);
            $img->setAttribute('class', 'img-responsive');
        }
        $body = $dom->saveHTML();

        $request->user()->posts()->create([
            'title' => $request->title,
            'image' => $imageName,
            'excerpt' => $request->excerpt,
            'body' => $body,
            'featured' => $request->featured
        ]);

        return redirect()->route('adminPosts')->with('flash', 'Post created successfully');
    }

    public function show(Post $post)
    {
        return view('blog.post', compact('post'));
    }

    public function edit(Post $post)
    {

        return view('admin.blog.editPost', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        // featured images
        if($request->image != null)
        {
            $imageOld = 'images/'.$post->image;
            File::delete($imageOld);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('images', $imageName);
        } 
        else 
        {
            $imageName = $post->image;
        }

        // images from body-post
        $body = $request->body;
        $dom = new \DomDocument();
        $dom->loadHtml($body);
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            if(strpos($data, 'base64')){
                list($type, $data) = explode(';', $data);
                list($type, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name= time().$k.'.png';
                file_put_contents("images/".$image_name, $data);
                $img->removeAttribute('src');
                $path = "/images/";
                $img->setAttribute('src', $path.$image_name);
                $img->setAttribute('class', 'img-responsive');
            }
        }
        $body = $dom->saveHTML();

        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'image' => $imageName,
            'excerpt' => $request->excerpt,
            'body' => $body,
            'featured' => $request->featured
        ]);

        return redirect()->route('adminPosts')->with('flash', 'Post edited successfully');
    }

    public function destroy(Post $post)
    {
        $imageFt = 'images/'.$post->image;
        File::delete($imageFt);
        
         // images from body-post
         $body = $post->body;
         $dom = new \DomDocument();
         @$dom->loadHtml($body);
         $images = $dom->getElementsByTagName('img');
 
         foreach($images as $k => $img){
             $data = $img->getAttribute('src');
             $delData = 'images/'.basename($data);
             File::delete($delData);
         }

        $post->delete();

        return redirect()->route('adminPosts')->with('flash', 'Post deleted successfully');
    }

    public function delImagePost(Request $request)
    {
        $imageDel = 'images/'.basename($request->src);
        File::delete($imageDel);
    }

}
