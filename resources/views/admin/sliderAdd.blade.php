@extends('admin.master')
@section('maincontent')
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Slider</h4>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/addSlider" method="post" id="myForm" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Slider Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="type" name="type" required>
                                <option selected disabled>Select</option>
                                <option value="Promotional">Promotional</option>
                                <option value="Blog">Blog</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="slider_name" class="col-sm-2 col-form-label">Slider Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="slider_name" name="slider_name" placeholder="Enter Slider Name"
                                   required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="slider_details" class="col-sm-2 col-form-label">Details</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="slider_details" name="slider_details" placeholder="Enter your Slider Details"
                                   required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="discount" class="col-sm-2 col-form-label">Discount</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="discount" name="discount" placeholder="Enter Product Discount"
                                   required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="slider_image" class="col-sm-2 col-form-label">Slider Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"
                                   id="slider_image" name="slider_image" placeholder="Enter image of Slider 1920*700"
                                   required>
                        </div>
                    </div>

                    <div class="text-center m-t-15">
                        <!-- <button type="submit" class="btn btn-primary waves-effect waves-light justify-content-center" id="alertify-error" onclick="myFunction()">Submit</button> -->
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                        <a href="/showSlider" class="btn btn-success">Show</a></div>

                </form>

            </div>
        </div>
    </div>


@endsection
