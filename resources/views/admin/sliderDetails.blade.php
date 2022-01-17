@extends('admin.master')
@section('maincontent')

    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">Slider Name</th>
            <th scope="col">Product Type</th>
            <th scope="col">Details</th>
            <th scope="col">Discount</th>
            <th scope="col">Images</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($slider as $val)
            <tr>
                <th scope="row">{{$val->slider_name}}</th>
                <td>{{$val->type}}</td>
                <td>{{$val->details}}</td>
                <td>{{$val->discount}}</td>
                <td><img src="categorypic/{{$val['slider_image']}}" alt="No image found"
                         height="80"
                         width="80"></td>
                <td><a href="/editSlider{{$val->id}}" class="btn btn-outline-warning"><i class="fas fa-edit "></i></a>
                <td><a href="/deleteSlider/{{$val->id}}/delete" class="btn btn-outline-danger"><i
                            class="fas fa-trash-alt"></i></a>

            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
