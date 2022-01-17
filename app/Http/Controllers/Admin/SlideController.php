<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slide;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function sliderAdd()
    {

        return view('admin.sliderAdd');

    }

    public function store(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'slider_name' => 'required',
            'slider_details' => 'required',
            'discount' => 'required',
            'slider_image' => 'required|file|max:1024',
        ]);


        $Slide = new Slide();
        $Slide->type = $request->input('type');
        $Slide->slider_name = $request->input('slider_name');
        $Slide->slider_details = $request->input('slider_details');
        $Slide->discount = $request->input('discount');
        if ($request->hasFile('slider_image')) {
            $file = $request->file('slider_image');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('categorypic/', $filename);
            $Slide->slider_image = $filename;
        }
        $Slide->save();
        Toastr::success('Add slider Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('/sliderAdd');

    }

    public function editSlider($id)
    {
        $slider = Slide::find($id);
        return view('admin.updateSlider', compact('slider'));
    }

    public function showSlider()
    {
        $slider = Slide::all();
        return view('admin.sliderDetails', compact('slider'));

    }

    public function updateSlider(Request $request, $id)
    {
        $request->validate([
            'slider_name' => 'required',
            'slider_details' => 'required',
            'discount' => 'required',
        ]);
        $Slide = Slide::find($id);
        $Slide->slider_name = $request->input('slider_name');
        $Slide->slider_details = $request->input('slider_details');
        $Slide->discount = $request->input('discount');
        $Slide->save();
        return back();

    }

    public function deleteSlider($id)
    {
        $Slide = Slide::find($id);
        $Slide->delete();
        Toastr::error('Slider delete Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }

}
