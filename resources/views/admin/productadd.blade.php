@extends('admin.master')
@section('maincontent')
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Add Product</h4>
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
                <form action="/addproduct" method="post" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Product</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sarees" name="sarees" required>
                                <option selected disabled>Select</option>
                                <option value="Facebook Marketing">Facebook Marketing</option>
                                <option value="Affiliate  Marketing">Affiliate  Marketing</option>
                                <option value="Instagram Marketing">Instagram Marketing</option>
                                <option value="Pinterest Marketing">Pinterest Marketing</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="product_name" name="product_name" placeholder="Enter Product Name"
                                   required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="product_price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="product_price" name="product_price" placeholder="Enter your Product Price" required>
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
                        <label for="product_image1" class="col-sm-2 col-form-label">Product Image 1</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"
                                   id="product_image1" name="product_image1" placeholder="Enter image of Product 1" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_image2" class="col-sm-2 col-form-label">Product Image 2</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"
                                   id="product_image2" name="product_image2" placeholder="Enter image of Product 2" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date"
                                   id="date" name="date" timezone="[[timezone]]" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" type="text"
                                      id="description" name="description" placeholder="Enter Description Here"></textarea>
                        </div>
                    </div>


                    <div class="text-center m-t-15">
                        <!-- <button type="submit" class="btn btn-primary waves-effect waves-light justify-content-center" id="alertify-error" onclick="myFunction()">Submit</button> -->
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                        <a href="/addproduct" class="btn btn-success">Show</a></div>

                </form>

            </div>
        </div>
    </div>


@endsection

