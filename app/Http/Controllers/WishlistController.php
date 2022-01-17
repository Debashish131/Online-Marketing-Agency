<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request,$id)
    {
        $check = Wishlist::where('product_id', $id)->first();
        if ($check) {
            Wishlist::where('product_id',$id)->increment('quantity');
            return back();
        }
        else {
            $wish = new Wishlist;
            $wish->product_id = $request->product_id;
            $wish->price = $request->price;
            $wish->quantity = 1;
            $wish->creator = Auth::user()->name;
            $wish->save();
            return back();
        }
    }
}
