<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;

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
        $product = Product::all();
        $random2 = Product::orderby('created_at', 'desc')->get();
        $slider = Slide::all();
        $cart = Cart::all();
        return view('welcome', compact('product', 'random2', 'slider', 'cart'));
    }

    public function test()
    {

        $product = Product::all();
        return view('welcome', compact('product'));

    }

    public function category()
    {


        $product=Product::all();
        return view('productCategory', compact('product'));

    }

    public function invoice($id)
    {
        $product = Product::find($id);
        return view('invoice', compact('product'));

    }

}
