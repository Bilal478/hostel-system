<!doctype html>
<html lang="en">

<head>
<title>:: HexaBit :: Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/color_skins.css')}}">
</head>

<body class="theme-orange">
    <!-- WRAPPER -->
    <div id="wrapper" class="auth-main">
    @yield('content')
    </div>
    <!-- END WRAPPER -->
  
<script src="{{asset('bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>
