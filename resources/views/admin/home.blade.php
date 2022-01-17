{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center"><h2>Product Add</h2></div>--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">Dashboard</div>--}}

{{--                    <div class="card-body">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        You are logged in as a Admin!--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
{{--@extends('admin.layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">Admin Dashboard</div>--}}

{{--                    <div class="card-body">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        You are logged in!--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('admin.master')
@section('maincontent')

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Total User</h6>
                        <h4 class="mb-3 mt-0 float-right">{{$count = \App\user::all()->count()}}</h4>
                    </div>
                    <div>
                        <span class="badge badge-light text-info"> +11% </span> <span
                            class="ml-2">From previous period</span>
                    </div>

                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                    </div>
                    @forelse($user->slice(0, 1) as $val)
                        <p class="font-14 m-0">Last
                            update:{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</p>
                    @empty
                        <p class="font-14 m-0">Last update:No user added</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-info mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Total Package</h6>
                        <h4 class="mb-3 mt-0 float-right">{{$count = \App\Product::all()->count()}}</h4>
                    </div>
                    <div>
                        <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                    </div>
                    @forelse($product->slice(0, 1) as $val)
                        <p class="font-14 m-0">Last
                            update:{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</p>
                    @empty
                        <p class="font-14 m-0">Last update: No Product Added</p>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-pink mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Package Category</h6>
                        <h4 class="mb-3 mt-0 float-right">{{$count = \App\Product::all()->count()}}</h4>
                    </div>
                    <div>
                        <span class="badge badge-light text-primary"> 0% </span> <span
                            class="ml-2">From previous period</span>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>
                    </div>
                    {{--                    @forelse($application->slice(0, 1) as $val)--}}
                    {{--                        <p class="font-14 m-0">Last--}}
                    {{--                            update:{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</p>--}}
                    {{--                    @empty--}}
                    {{--                        <p class="font-14 m-0">Last update:You don't application yet</p>--}}
                    {{--                    @endforelse--}}
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-success mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Total Payment</h6>
                        <h4 class="mb-3 mt-0 float-right">{{$count = \App\Order::all()->count()}}</h4>
                    </div>
                    <div>
                        <span class="badge badge-light text-info"> +89% </span> <span
                            class="ml-2">From previous period</span>
                    </div>
                </div>
                <div class="p-3">
                    <div class="float-right">
                        <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                    </div>
                    {{--                    @forelse($order->slice(0, 1) as $val)--}}
                    {{--                        <p class="font-14 m-0">Last--}}
                    {{--                            update:{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</p>--}}
                    {{--                    @empty--}}
                    {{--                        <p class="font-14 m-0">Last update:No payment added yet</p>--}}
                    {{--                    @endforelse--}}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


    <!-- end row -->

    <div class="row">
        <!-- end col -->

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                    <ol class="activity-feed mb-0">

                        @foreach($user->slice(0, 5) as $val)
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span
                                        class="date text-white-50"> {{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }} </span>
                                    <span class="activity-text"> Last User's Name: {{$val->name}}</span>
                                </div>
                            </li>

                        @endforeach
                    </ol>

                </div>
            </div>
        </div>

        <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Social Source</h4>
                    <div class="text-center">
                        <div class="social-source-icon lg-icon mb-3">
                            <div class="text-center">
                                <img src="assets/images/demos/demo-18/logo.png"
                                     class="rounded-circle img-thumbnail mx-auto d-block" alt="thumbnail" height=".5px">
                            </div>
                        </div>
                        <h5 class="font-16"><a href="#" class="text-dark">Online Marketing Agency - <br><span
                                    class="text-muted">125 Engage</span> </a></h5>
                        <p class="text-muted"></p>
                        <a href="#" class="text-primary font-14">Learn more <i
                                class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="social-source text-center mt-3">
                                <div class="social-source-icon mb-2">
                                    <i class="mdi mdi-facebook h5 bg-primary"></i>
                                </div>
                                <p class="font-14 text-muted mb-2">125 Engage</p>
                                <h6>Facebook</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="social-source text-center mt-3">
                                <div class="social-source-icon mb-2">
                                    <i class="mdi mdi-twitter h5 bg-info"></i>
                                </div>
                                <p class="font-14 text-muted mb-2">112 Engage</p>
                                <h6>Twitter</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="social-source text-center mt-3">
                                <div class="social-source-icon mb-2">
                                    <i class="mdi mdi-instagram h5 bg-pink"></i>
                                </div>
                                <p class="font-14 text-muted mb-2">104 Engage</p>
                                <h6>Instagram</h6>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Latest User</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">ID creation time</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($user->slice(0, 5) as $val)
                                <tr>
                                    <th scope="row">{{$val->id}}</th>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->email}}</td>
                                    <td> {{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</td>
                                    {{--                                    <td>--}}
                                    {{--                                        <div class="progress" style="height: 5px;">--}}
                                    {{--                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 89%;"--}}
                                    {{--                                                 aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

@endsection
