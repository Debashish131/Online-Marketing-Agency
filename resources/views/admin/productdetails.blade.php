@extends('admin.master')
@section('maincontent')

    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Product Type</th>
            <th scope="col">Price</th>
            <th scope="col">Discount</th>
            <th scope="col">Images</th>
            <th scope="col">Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $val)
            <tr>
                <th scope="row">{{$val->product_name}}</th>
                <td>{{$val->sarees}}</td>
                <td>{{$val->product_price}}</td>
                <td>{{$val->discount}}</td>
                <td><img src="categorypic/{{$val['product_image1']}}" alt="No image found"
                         height="80"
                         width="80"></td>

                <td>{{$val->created_at->diffForHumans()}}</td>
                <td><a href="/editProduct{{$val->id}}" class="btn btn-outline-warning"><i class="fas fa-edit "></i></a>
                <td><a href="/deleteProduct/{{$val->id}}/delete" class="btn btn-outline-danger"><i
                            class="fas fa-trash-alt"></i></a>

            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
