<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Payment;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function payment($id)
    {
        $product = Product::find($id);
        $package = Cart::where([
            ['creator', '=', Auth::user()->name]])->get();
        return view('payment', compact('package', 'product'));

    }

    public function getpayment(Request $request)
    {
        $payment = new Payment();
        $payment->customer_name = $request->input('customer_name');
        $payment->customer_mobile = $request->input('customer_mobile');
        $payment->customer_email = $request->input('customer_email');
        $payment->address = $request->input('address');
        $payment->trnsID = $request->input('trnsID');
        $payment->amount = $request->input('amount');
        $payment->country = $request->input('country');
        $payment->state = $request->input('state');
        $payment->zip = $request->input('zip');
        $payment->creator = Auth::user()->name;
        $payment->save();
        Toastr::success('Added Data Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/home');

    }

    public function invoiceshow($id)
    {
        $product = Product::find($id);
        $payment = Payment::where([['creator', '=', Auth::user()->name]])->get();
//        $payment = Payment::all();
        return view('invoice', compact('product', 'payment'));

    }
}
