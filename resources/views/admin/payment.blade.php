@extends('admin.master')

@section('maincontent')


    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Amount</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Transaction ID</th>
            <th scope="col">Id creation Time</th>

        </tr>
        </thead>
        <tbody>
        @foreach($payment as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->customer_name}}</td>
                <td>{{$val->customer_email}}</td>
                <td>{{$val->customer_mobile}}</td>
                <td>{{$val->amount}}</td>
                <td>{{$val->address}}</td>
                <td>  @if($val->status==0)
                        <span style="width:100px;"><span
                                class="badge rounded-pill bg-danger">Paid</span></span>
                    @else
                        <span style="width:100px;"><span
                                class="badge rounded-pill bg-primary">Processing</span></span>
                    @endif</td>
                <td>{{$val->trnsID}}</td>
                <td>{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</td>
                </td>
        @endforeach
        </tbody>
    </table>
@endsection


