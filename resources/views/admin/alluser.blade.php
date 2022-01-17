@extends('admin.master')

@section('maincontent')


    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User name</th>
            <th scope="col">Id creation Time</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($user as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</td>
                <td><a href="/deleteUser/{{$val->id}}/delete" class="btn btn-outline-danger">Delete</a>
                </td>
        @endforeach
        </tbody>
    </table>
@endsection


