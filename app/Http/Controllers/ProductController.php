<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function productview()
    {
        $product = Product::all();
        return view('productview', compact('product'));

    }

    public function showproduct($id)
    {
        $product = Product::find($id);
//        $product=Product::where('id','=',$id)->first();
//        $product = Product::all();
        return view('product', compact('product'));

    }

    public function cart($id)
    {

        $cart = Cart::where([
            ['creator', '=', Auth::user()->name]])->get();
        $product = Product::find($id);
        return view('cart', compact('product','cart'));

    }

    public function proccessCart()
    {
        $product = Cart::where([
            ['creator', '=', Auth::user()->name]])->get();
        return view('cart', compact('product'));

    }

    public function product()
    {
        $product = Product::all();

        return view('product', compact('product'));

    }
}
