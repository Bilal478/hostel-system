<!doctype html>
<html lang="en">
<head>
<title>:: HexaBit :: Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css') }}">

<link rel="stylesheet" href="{{asset('vendor/charts-c3/plugin.css') }}"/>
<link rel="stylesheet" href="{{asset('vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css') }}">


<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('css/main.css') }}">
<link rel="stylesheet" href="{{asset('css/color_skins.css') }}">

@yield('css')
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('images/icon-light.svg') }}" width="48" height="48" alt="HexaBit"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    
@include('layouts.owner.navbar')
@include('layouts.owner.right-sidebar')
@include('layouts.owner.left-sidebar')
    

@yield('content')    

   
    
</div>

<!-- Javascript -->
<script src="{{asset('bundles/libscripts.bundle.js') }}"></script>    
<script src="{{asset('bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{asset('bundles/c3.bundle.js') }}"></script>
<script src="{{asset('bundles/chartist.bundle.js') }}"></script>
<script src="{{asset('vendor/toastr/toastr.js') }}"></script>

<script src="{{asset('bundles/mainscripts.bundle.js') }}"></script>
<script src="{{asset('js/index.js') }}"></script>

@yield('jscontent')

</body>
</html>
