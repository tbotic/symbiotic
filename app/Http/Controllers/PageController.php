<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->only('adminIndex');
    }

    public function solutions()
    {
        return view('solutions');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function sendContact(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'industry'=>'required',
            'position'=>'required',
            'topic' => 'required',
            'body' => 'required'
        ]);

        $contactData = [
            'email' => $request->email,
            'industry' => $request->industry,
            'position' => $request->position,
            'topic' => $request->topic,
            'body' => $request->body,
            'promo' => $request->promo
        ];

        if ($request->filled('promo')) {
            if (Promo::where('email', '=', $request->email)->doesntExist()) {
                $promo = Promo::create([
                    'name' => '',
                    'email' => $request->email,
                    'phone' => '0',
                    'industry' => $request->industry,
                    'position' => $request->position
                ]);
            }
        }

        Mail::to('davor.predavec@symbiotic.hr')->send(new ContactMail($contactData));

        return redirect()->route('contactUs')->with('flash', 'Message sent successfully');
    }

    public function adminIndex()
    {

        $posts = Post::latest()->paginate(5);
        $products = Product::latest()->paginate(5);

        return view('admin.home', [
            'posts' => $posts,
            'products' => $products
        ]);

    }

    public function euFunding()
    {
        return view('eu-funding');
    }

    public function privacyPolicy()
    {
        return view('privacyPolicy');
    }

    public function termsOfUse()
    {
        return view('termsOfUse');
    }
}
