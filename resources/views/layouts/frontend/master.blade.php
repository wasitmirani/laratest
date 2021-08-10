
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
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
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css">
		<title>{{config('app.name')}}</title>
        @yield('style')
	</head>

	<body>
		<!-- Header -->
		<header data-aos="flip-down" data-aos-duration="2000">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="logo"><img src="{{asset('/frontend/assets/images/logo.png')}}" class="img-fluid" alt=""></div>
					</div>
					<div class="col-lg-9 dis-flex-end">
						<ul class="list-unstyled m-0" id="nav">
							<li class="list-inline-item {{ request()->route()->getName()=="index" ? "active" : ''}}"><a href="{{route('index')}}" >Home</a></li>
							<li class="list-inline-item {{ request()->route()->getName()=="about" ? "active" : ''}}"><a href="{{route('about')}}" >About Us</a></li>
							<li class="list-inline-item {{ request()->route()->getName()=="packages" ? "active" : ''}}"><a href="{{route('packages')}}"  >Packages</a></li>
							<li class="list-inline-item "><a href="#" >Blog</a></li>
							<li class="list-inline-item {{ request()->route()->getName()=="contactus" ? "active" : ''}}"><a href="{{route('contactus')}}" > Contact Us</a></li>

                                  <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="list-inline-item"><a href="{{route('login')}}" ><i class="fas fa-sign-in-alt mr-2"></i>Login</a></li>
                        @endif

                        @if (Route::has('register'))
							<li class="list-inline-item"><a href="{{route('register')}}" ><i class="fas fa-user mr-2"></i>Register</a></li>
                            @endif
                            @else
                            <li class="list-inline-item">
                                <a   href="{{ route('logout') }}" role="button" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>


                            </li>
                            @if(Auth::user()->role_id == 1)
                            <li class="list-inline-item">
                                <a   href="{{ route('member.dashboard') }}" role="button"  >{{Auth::user()->name}}</a>
                            </li>
                            @endif
                            @if (Auth::user()->role_id == 2)
                            <li class="list-inline-item">
                                <a   href="{{route('admin.dashboard')}}" role="button"  >Admin Dashboard</a>
                            </li>

                            @endif
                        @endguest
							<li class="list-inline-item"><a href="#" ><img src="{{asset('/frontend/assets/images/flag.png')}}" class="mr-2" alt="">EN</a></li>

						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- Header -->

		<!-- FLip Sections -->

                 @yield('content')
					<!-- Footer -->
                 @include('layouts.frontend.components.footer')
					<!-- Footer -->
					<div class="preloader"></div>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js" ></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.js" ></script>
					<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
					<script src="{{asset('frontend/assets/js/fancybox.js')}}"></script>
					<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
					<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
					<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
					<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
					<script src="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.js"></script>
                    <script src="{{asset('css/app.css')}}"></script>
					<script>
					AOS.init();
					</script>
                    <script>
                   </script>
				</body>
			</html>
