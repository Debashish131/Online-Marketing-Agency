<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function store(Request $request)
    {

        $request->validate([
            'sarees' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'product_image1' => 'required|file|max:1024',
            'product_image2' => 'required|file|max:1024',
            'date' => 'required',
        ]);


        $Product = new Product();
        $Product->sarees = $request->input('sarees');
        $Product->product_name = $request->input('product_name');
        $Product->product_price = $request->input('product_price');
        $Product->discount = $request->input('discount');
        $Product->description = $request->input('description');
        $Product->product_image1 = $request->input('product_image1');
        $Product->product_image2 = $request->input('product_image2');
        $Product->date = $request->input('date');
        if ($request->hasFile('product_image1')) {
            $file = $request->file('product_image1');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('categorypic/', $filename);
            $Product->product_image1 = $filename;
        }

        if ($request->hasFile('product_image2')) {
            $file = $request->file('product_image2');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('categorypic/', $filename);
            $Product->product_image2 = $filename;
        }
        Toastr::success('Add Product Successfully', 'Success',
            ["positionClass" => "toast-top-right"]);
        $Product->save();

        return back();
//        Product::create($request->all());
    }

    public function showpage()
    {

        return view('admin.productadd');

    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('admin.productUpdate', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'discount' => 'required',
            'date' => 'required',
        ]);
        $Product = Product::find($id);
        $Product->product_name = $request->input('product_name');
        $Product->product_price = $request->input('product_price');
        $Product->discount = $request->input('discount');
        $Product->description = $request->input('description');
        Toastr::success('Add Product Successfully', 'Success',
            ["positionClass" => "toast-top-right"]);
        $Product->save();
        return back();

    }

    public function deleteProduct($id)
    {
        $Product = Product::find($id);
        $Product->delete();
        Toastr::error('User complain delete Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }

    public function productdetails()
    {
        $product = Product::all();

        return view('admin.productdetails',compact('product'));

    }



    public function discountCalculation()
    {
        return view('');

    }
}
