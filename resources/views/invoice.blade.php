<!DOCTYPE html>
<html lang="en">

<!-- doccure/invoice-view.html  30 Nov 2019 04:12:19 GMT -->
<head>
    <meta charset="utf-8">
    <title>Invoice || OMA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="{{"assets2"}}/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/invoice/assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/invoice/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/invoice/assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/invoice/assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/invoice/assets/js/html5shiv.min.js"></script>
    <script src="assets/invoice/assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
                </a>

            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    {{--                    <a href="index-2.html" class="menu-logo">--}}
                    {{--                        <img src="assets2/images/logo.png" height="100" width="100" alt="logo">--}}
                    {{--                    </a>--}}
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>

            </div>

        </nav>
    </header>
    <!-- /Header -->
    <br><br><br>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <body class="bg-light">
                    <div class="container">
                        <div class="py-5 text-center">
                            <img src="assets/images/demos/demo-18/ssl.png" width="200" alt=""><br>
                            <a href="/home" style="float: right"><i class="fas fa-home"></i>Home</a>
                        </div>
                        <h2 class="breadcrumb-title">Invoice</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="invoice-content">
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="assets/images/demos/demo-18/logo-icon.png" alt="OMA Logo" width="40%" height="40%">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="invoice-details">
                                        <strong>Order:</strong> #00124 <br>
                                        <strong>Issued:</strong> 20/07/2019
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            @forelse($payment as $val)
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="invoice-info">
                                            <strong class="customer-text">Invoice From</strong>
                                            <p class="invoice-details invoice-details-two">
                                                Online Marketing Service <br>
                                                Dhanmondi 32,Dhaka, Bangladesh <br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="invoice-info invoice-info2">
                                            <strong class="customer-text">Invoice To</strong>
                                            <p class="invoice-details">
                                                {{$val->creator}}
                                                <br>
                                                {{$val->customer_mobile}}
                                                <br>
                                                {{$val->customer_email}}<br>
                                                {{$val->address}},{{$val->state}},
                                                {{$val->country}} <br>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            @empty
                                No data found
                            @endforelse
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="invoice-info">
                                        <strong class="customer-text">Payment Method</strong>

                                        <div>
                                            <p class="invoice-details invoice-details-two">
                                                <img src="assets/images/demos/demo-18/Bkash Logo.png"
                                                     alt="bkash logo"
                                                     width="100" height="100">
                                                <br>

                                                {{$val->customer_mobile}} <br>
                                                Bkash<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Invoice Item -->

                            <!-- Invoice Item -->
                            <div class="invoice-item invoice-table-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="invoice-table table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-center">Discount</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>{{$product->product_name}}</td>
                                                    <td><a href="#">
                                                            <img src="categorypic/{{$product['product_image1']}}"
                                                                 alt="Product image" height="80" width="80">
                                                        </a></td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">{{$product->discount}}</td>
                                                    <td class="text-center">{{$product->product_price}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 ml-auto">
                                        <div class="table-responsive">
                                            <table class="invoice-table-two table">
                                                <tbody>
                                                <tr>
                                                    <th>Subtotal:</th>
                                                    <td><span>{{$product->product_price}}</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Discount:</th>
                                                    <td><span>{{$product->discount}}</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Total Amount:</th>
                                                    <td>
                                                        <span>{{$product->product_price-(($product->product_price*$product->discount)/100)}}</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Invoice Item -->

                            <!-- Invoice Information -->
                            <div class="other-info">
                                <h4>Other information</h4>
                                <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vivamus
                                    sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus
                                    dignissim
                                    aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo
                                    vitae
                                    lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia
                                    lorem.
                                    Nullam finibus pellentesque libero.</p>
                            </div>
                            <!-- /Invoice Information -->

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->

        <!-- Footer -->
        <footer class="footer">

            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                            {{--                        <!-- Footer Widget -->--}}

                            {{--                        <!-- /Footer Widget -->--}}

                        </div>

                        <div class="col-lg-3 col-md-6">


                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->

                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">
                            <br>
                            <br>
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Contact Us</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                        <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                                    </div>
                                    <p>
                                        <i class="fas fa-phone-alt"></i>
                                        +1 315 369 5943
                                    </p>
                                    <p class="mb-0">
                                        <i class="fas fa-envelope"></i>
                                        doccure@example.com
                                    </p>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                    </div>
                </div>
            </div>
            <!-- /Footer Top -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container-fluid">

                    <!-- Copyright -->


                </div>
            </div>
            <!-- /Footer Bottom -->

        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/invoice/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/invoice/assets/js/popper.min.js"></script>
    <script src="assets/invoice/assets/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/invoice/assets/js/script.js"></script>

</body>

<!-- doccure/invoice-view.html  30 Nov 2019 04:12:20 GMT -->
</html>
