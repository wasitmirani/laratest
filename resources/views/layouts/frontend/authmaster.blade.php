<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/fancybox.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/slick.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/slick-theme.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css">
        <title>MAUI Rental Locator</title>
    </head>
    <body class="bg-blue">



        <div class="preloader"></div>
        <div>
            @yield('content')


        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
        <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
        <script src="{{asset('frontend/assets/js/fancybox.js')}}"></script>
        <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>

    </body>
</html>
