

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{config('app.name')}} - Error</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{asset('/member/css/style.css')}}" rel="stylesheet">

</head>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
             @yield('content')
        </div>
    </div>
</body>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->

<script src="{{asset('/member/vendor/global/global.min.js')}}"></script>
<script src="{{asset('/member/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('/member/js/custom.min.js')}}"></script>
<script src="{{asset('/member/js/deznav-init.js')}}"></script>

</html>
