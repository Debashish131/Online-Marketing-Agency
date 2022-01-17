<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Payment;
use App\Product;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $product = Product::all();
        return view('admin.home', compact('user', 'product'));
    }

    public function test2()
    {
        return view('admin.index');

    }

    public function alluser()
    {
        $user = User::all();
        return view('admin.alluser', compact('user'));

    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function paymentdetails()
    {
        $payment = Payment::all();
        return view('admin.payment', compact('payment'));

    }

}
