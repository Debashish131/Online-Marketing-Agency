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
                <form action="/updateProduct{{$product->id}}" method="post" id="myForm" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group row">
                        <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="product_name" name="product_name" value="{{$product->product_name}}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="product_price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="product_price" name="product_price" value="{{$product->product_price}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="discount" class="col-sm-2 col-form-label">Discount</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="discount" name="discount" value="{{$product->discount}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date"
                                   id="date" name="date" timezone="[[timezone]]" value="{{$product->date}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" type="text"
                                      id="description" name="description" >{{$product->description}}</textarea>
                        </div>
                    </div>


                    <div class="text-center m-t-15">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
{{--                        <a href="/addproduct" class="btn btn-success">Show</a></div>--}}

                </form>

            </div>
        </div>
    </div>


@endsection

