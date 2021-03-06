<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Panel of OMR</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="ThemeDesign" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

{{--    <link rel="shortcut icon" href="{{"assets2"}}/images/favicon.ico">--}}
    <!-- morris css -->
    <link rel="stylesheet" href="{{"assets2"}}/morris.css">
    <link href="{{"assets2"}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{"assets2"}}/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{"assets2"}}/css/style.css" rel="stylesheet" type="text/css">


    {{--    <link href="{{"assets2"}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>--}}
    {{--    <link href="{{"assets2"}}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>--}}

    {{--    <!-- Responsive datatable examples -->--}}
    {{--    <link href="{{"assets2"}}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>--}}

    {{--    <link href="{{"assets2"}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">--}}
    {{--    <link href="{{"assets2"}}/css/icons.css" rel="stylesheet" type="text/css">--}}
    {{--    <link href="{{"assets2"}}/css/style.css" rel="stylesheet" type="text/css">--}}

    <link href="{{"assets2"}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{"assets2"}}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

    <!-- Responsive datatable examples -->
    <link href="{{"assets2"}}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

    <link href="{{"assets2"}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{"assets2"}}/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{"assets2"}}/css/style.css" rel="stylesheet" type="text/css">

    {{--Moris CHart--}}
    <link rel="stylesheet" href="{{"assets2"}}/plugins/morris/morris.css">

    <link href="{{"assets2"}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{"assets2"}}/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{"assets2"}}/css/style.css" rel="stylesheet" type="text/css">

{{--    --}}{{--    Toastr css--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">--}}
</head>


<body class="fixed-left">
<style>

</style>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="mdi mdi-close"></i>
        </button>

        <div class="left-side-logo d-block d-lg-none">
            <div class="text-center">
                <a href="/admin" class="logo"><img src="assets/images/demos/demo-18/logo-icon.png" alt="OMA Logo" width="124" height="35"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Main</li>

                    <li>
                        <a href="{{url('/admin')}}" class="waves-effect">
                            <i class="dripicons-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/userdetails')}}" class="waves-effect"><i
                                class="far fa-comment"></i><span>User Details</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{url('/productaddpage')}}" class="waves-effect"><i
                                class="dripicons-clipboard "></i><span> Product Add </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/productdetails')}}" class="waves-effect"><i
                                class="fas fa-adjust"></i><span> Product Details </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/sliderAdd')}}" class="waves-effect"><i
                                class="dripicons-clipboard "></i><span> Slider Add </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/showSlider')}}" class="waves-effect"><i
                                class="dripicons-clipboard "></i><span> Slider Details </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/paymentdetails')}}" class="waves-effect"><i
                                class="dripicons-clipboard "></i><span> Payment Details </span>
                        </a>
                    </li>



                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <div class="topbar-left	d-none d-lg-block">
                    <div class="text-center">
                        <a href="{{url('/admin')}}" class="logo"><img src="assets2/images/logo.png" height="50"
                                                                          alt="logo"></a>
                    </div>
                </div>

                <nav class="navbar-custom">

                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="Search"/>
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                                <i class="mdi mdi-magnify noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">5</span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Notification (5)</h5>
                                </div>

                                <div class="slimscroll-noti">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i>
                                        </div>
                                        <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i>
                                        </div>
                                        <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                        </p>
                                    </a>

                                </div>


                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>


                        <li class="list-inline-item dropdown notification-list nav-user">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{"assets2"}}/images/users/avata.jpg" alt="user" class="rounded-circle">
                                <span class="d-none d-md-inline-block ml-1">{{Auth::user()->name}}<i
                                        class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><span
                                        class="badge badge-success float-right m-t-5">5</span><i
                                        class="dripicons-gear text-muted"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                {{--                                <a class="dropdown-item" href="{{ route('logout') }}"><i--}}
                                {{--                                        class="dripicons-exit text-muted"></i> Logout</a>--}}

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}

                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>


                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title m-0">Wellcome Admin</h4>
                                    </div>
                                {{--                                    <div class="col-md-4">--}}
                                {{--                                        <div class="float-right d-none d-md-block">--}}
                                {{--                                            <div class="dropdown">--}}
                                {{--                                                <button class="btn btn-primary dropdown-toggle" type="button"--}}
                                {{--                                                        data-toggle="dropdown" aria-haspopup="true"--}}
                                {{--                                                        aria-expanded="false">--}}
                                {{--                                                    <i class="ti-settings mr-1"></i> Settings--}}
                                {{--                                                </button>--}}
                                {{--                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">--}}
                                {{--                                                    <a class="dropdown-item" href="#">Action</a>--}}
                                {{--                                                    <a class="dropdown-item" href="#">Another action</a>--}}
                                {{--                                                    <a class="dropdown-item" href="#">Something else here</a>--}}
                                {{--                                                    <div class="dropdown-divider"></div>--}}
                                {{--                                                    <a class="dropdown-item" href="#">Separated link</a>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end page-title-box -->
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    @yield('maincontent')

                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div><!-- container fluid -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->

    <footer class="footer">
        ?? 2020 Smart Transport Assistant <span class="d-none d-md-inline-block"> - Crafted with <i
                class="mdi mdi-heart text-danger"></i> by Designer Canvas.</span>
    </footer>

</div>
<!-- End Right content here -->

<!-- END wrapper -->

{{--Toastr--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}
<!-- jQuery  -->
<script src="{{"assets2"}}/js/jquery.min.js"></script>
<script src="{{"assets2"}}/js/bootstrap.bundle.min.js"></script>
<script src="{{"assets2"}}/js/modernizr.min.js"></script>
<script src="{{"assets2"}}/js/detect.js"></script>
<script src="{{"assets2"}}/js/fastclick.js"></script>
<script src="{{"assets2"}}/js/jquery.slimscroll.js"></script>
<script src="{{"assets2"}}/js/jquery.blockUI.js"></script>
<script src="{{"assets2"}}/js/waves.js"></script>
<script src="{{"assets2"}}/js/jquery.nicescroll.js"></script>
<script src="{{"assets2"}}/js/jquery.scrollTo.min.js"></script>

<!-- Alertify js -->
<script src="{{"assets2"}}/plugins/alertify/js/alertify.js"></script>
<script src="{{"assets2"}}/pages/alertify-init.js"></script>

<script src="{{"assets2"}}/pages/dashboard.int.js"></script>

<!-- Required datatable js -->
<script src="assets2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets2/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets2/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets2/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="assets2/plugins/datatables/jszip.min.js"></script>
<script src="assets2/plugins/datatables/pdfmake.min.js"></script>
<script src="assets2/plugins/datatables/vfs_fonts.js"></script>
<script src="assets2/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets2/plugins/datatables/buttons.print.min.js"></script>
<script src="assets2/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="{{"assets2"}}/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="{{"assets2"}}/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{"assets2"}}/pages/datatables.init.js"></script>


<!-- App js -->
<script src="{{"assets2"}}/js/app.js"></script>


<!--Morris Chart-->
<script src="{{"assets2"}}/morris.min.js"></script>
<script src="{{"assets2"}}/raphael.min.js"></script>

<!-- Parsley js -->
<script src="../plugins/parsleyjs/parsley.min.js"></script>
<script>
    $(document).ready(function () {
        $('form').parsley();
    });
</script>

<script>
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}
{{--{!! Toastr::message() !!}--}}

</body>
</html>
