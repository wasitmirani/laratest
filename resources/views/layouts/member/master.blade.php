
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{asset('/member/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/member/vendor/chartist/css/chartist.min.css')}}">
	<!-- Vectormap -->
    <link href="{{asset('/member/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/member/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('/member/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('/member/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('/member/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">


</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <div id="app">

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('index')}}" class="brand-logo">
                <img class="logo-abbr" src="{{asset('/member/images/mauilogo.png')}}" alt="">
                <img class="logo-compact" src="{{asset('/member/images/mauilogo1.png')}}" alt="">
                <img class="brand-title" src="{{asset('/member/images/mauilogo1.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->

		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
            @include('layouts.member.components.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
            @include('layouts.member.components.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                  @yield('content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


    </div>

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <!--<p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignZone</a> 2021</p>-->
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('/member/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('/member/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('/member/vendor/chart.js')}}/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('/member/js/custom.min.js')}}"></script>
	<script src="{{asset('/member/js/deznav-init.js')}}"></script>
	<script src="{{asset('/member/vendor/owl-carousel/owl.carousel.js')}}"></script>

   <!-- Scripts -->

	<!-- Chart piety plugin files -->
    <script src="{{asset('/member/vendor/peity/jquery.peity.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{asset('/member/vendor/apexchart/apexchart.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{asset('/member/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{asset('/member/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/member/js/plugins-init/datatables.init.js')}}"></script>



	<script>
           @auth
            window.user = {!! json_encode(Auth::user(), true) !!};

        @else
            window.user = [];
            window.Permissions = [];
        @endauth
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				margin:10,
				nav:false,
				center:true,
				dots: false,
				navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
				responsive:{
					0:{
						items:2
					},
					400:{
						items:3
					},
					700:{
						items:5
					},
					991:{
						items:6
					},

					1200:{
						items:4
					},
					1600:{
						items:5
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000);
		});
	</script>
</body>
</html>
