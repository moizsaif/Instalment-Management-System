<!doctype html>
<html lang="en">

<head>
    <title> @yield('pageTitle') - IMS System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/metisMenu/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/parsleyjs/css/parsley.css') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" sizes="96x96" href="">
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">

    <!-- LEFT SIDEBAR -->
    @include('layouts.sideNav')
    <!-- END LEFT SIDEBAR -->

    <!-- NAVBAR -->
    @include('layouts.topBar')
    <!-- END NAVBAR -->

    <!-- MAIN CONTENT -->
    <div id="main-content">
        <div class="container-fluid">
            <h1 class="sr-only">Dashboard</h1>


            @yield('content')


        </div>
    </div>
    <!-- END MAIN CONTENT -->


    <footer>
        <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
    </footer>
</div>
<!-- END WRAPPER -->


<!-- Javascript -->
<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery-sparkline/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ URL::asset('vendor/metisMenu/metisMenu.js') }}"></script>
<script src="{{ URL::asset('vendor/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ URL::asset('vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js') }}"></script>
<script src="{{ URL::asset('vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js') }}"></script>
<script src="{{ URL::asset('vendor/toastr/toastr.js') }}"></script>
<script src="{{ URL::asset('js/common.js') }}"></script>
<script src="{{ URL::asset('js/grid.js') }}"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="{{ URL::asset('vendor/parsleyjs/js/parsley.min.js') }}"></script>
@yield('page-script')

</body>
</html>