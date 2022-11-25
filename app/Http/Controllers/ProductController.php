<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Image;
use App\Models\Cart;
use App\Models\Promo;
use App\Models\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Session;

class ProductController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('index', 'show', 'cart', 'addToCart', 'addByOne', 'reduceByOne', 'removeItem', 'checkout', 'order');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('shop.index', [
            'products' => $products
        ]);
    }

    public function adminIndex()
    {
        $products = Product::latest()->paginate(10);

        return view('admin.shop.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shop.createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'featured-image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subtitle' => 'required',
            'excerpt' => 'required',
            'price' => 'required'
        ]);

        // proizvod
        $product = Product::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'excerpt' => $request->excerpt,
            'price' => $request->price,
            'description' => $request->description,
            'addInfo' => $request->addInfo,
        ]);

        // slike
        if($request->file() > 0){
            foreach ($request->file() as $key => $file){
                $fileformats=['jpg','JPG','jpeg','JPEG','png','PNG'];

                if(in_array($file->getClientOriginalExtension(),$fileformats)){

                    $fileName=date('ymdhis').mt_rand(1,9999999).'.'.$file->getClientOriginalExtension();
                    $destinationPath = 'images/';
                    $file->move($destinationPath, $fileName);

                    if ($key != 'featured-image'){
                        $product->images()->create([
                            'name' => $fileName,
                            'path' => $destinationPath.$fileName,
                            'featured' => 0
                        ]);
                    } else {
                        $product->images()->create([
                            'name' => $fileName,
                            'path' => $destinationPath.$fileName,
                            'featured' => 1
                        ]);
                    }
                }
            }
        }

        return redirect()->route('adminProducts')->with('flash', 'Item created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('shop.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.shop.editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'excerpt' => 'required',
            'price' => 'required',
        ]);

        Product::where('id', $product->id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'excerpt' => $request->excerpt,
            'price' => $request->price,
            'description' => $request->description,
            'addInfo' => $request->addInfo,
        ]);

        // slike
        if($request->file() > 0){

            foreach ($request->file() as $key => $file){
                $fileformats=['jpg','JPG','jpeg','JPEG','png','PNG'];

                if(in_array($file->getClientOriginalExtension(),$fileformats)){

                    $fileName=date('ymdhis').mt_rand(1,9999999).'.'.$file->getClientOriginalExtension();
                    $destinationPath = 'images/';
                    $file->move($destinationPath, $fileName);

                    if ($key != 'featured-image'){
                        $product->images()->create([
                            'name' => $fileName,
                            'path' => $destinationPath.$fileName,
                            'featured' => 0
                        ]);
                    } else {

                        $ftImage = Image::where('product_id', $product->id)->where('featured', 1)->first();
                        File::delete($ftImage['path']);
                        $ftImage->delete();

                        $product->images()->create([
                            'name' => $fileName,
                            'path' => $destinationPath.$fileName,
                            'featured' => 1
                        ]);

                    }
                }
            }
        }

        return redirect()->route('adminProducts')->with('flash', 'Item edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        foreach ($product->images as $key => $file){
            File::delete($file['path']);
        }

        $product->delete();

        return redirect()->route('adminProducts')->with('flash', 'Item deleted successfully');
    }

    // delete image with button without submitting update form
    public function imageDestroy($id)
    {
        $delImage = Image::find($id);
        File::delete($delImage['path']);
        $delImage->delete();
        return back();
    }

    // SHOPPING CART
    public function cart()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
        return view ('shop.cart', [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'totalQty' => $cart->totalQty,
        ]);
    }

    public function addToCart(Request $request, $id)
    {
        $request->validate([
            'productQty' => 'required|numeric|gt:0'
        ]);
        $productQty = $request->productQty;
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id, $productQty);
        $request->session()->put('cart', $cart);

        return redirect()->route('cart');
    }

    public function addByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addByOne($id);
        Session::put('cart', $cart);

        return redirect()->route('cart');
    }

    public function reduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
            return redirect()->route('cart');
        } else {
            Session::forget('cart');
            return redirect()->route('products.index');
        }
    }

    public function removeItem ($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
            return redirect()->route('cart');
        } else {
            Session::forget('cart');
            return redirect()->route('products.index');
        }
    }

    // CHECKOUT
    public function checkout()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
        if(empty($cart->items)) {
            return redirect()->route('products.index');
        } else {
            return view ('shop.checkout', [
                'products' => $cart->items,
                'totalPrice' => $cart->totalPrice,
                'totalQty' => $cart->totalQty,
            ]);
        }
    }

    public function order(Request $request)
    {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $this->validate($request, [
            'name'=>'required|string',
            'email'=>'required|email',
            'industry'=>'required',
            'position'=>'required',
        ]); 

        $link2 = env('APP_URL_FRONTEND') . "/user";

        $orderData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'industry' => $request->industry,
            'position' => $request->position,
            'promo' => $request->promo,
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'totalQty' => $cart->totalQty,
            'link2' => $link2
        ];

        if ($request->filled('promo')) {
            if (Promo::where('email', '=', $request->email)->doesntExist()) {
                $promo = Promo::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'industry' => $request->industry,
                    'position' => $request->position
                ]);
            }
        }

        Mail::to('davor.predavec@symbiotic.hr')->send(new OrderMail($orderData));

        Session::forget('cart');
        return view('shop.thank-you');
    }

}
