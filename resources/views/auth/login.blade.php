

@extends('layouts.frontend.authmaster')

@section('content')

  <!--Register Form-->
  <section class="main-register">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="img-box">
                    <img src="{{asset('/frontend/assets/images/form-sdie-img.jpg')}}" class="img-fluid" alt="">
                    <div class="overlay">
                        <h3>Welcome To</h3>
                        <h2>Maui Rental <strong>Locators</strong> </h2>
                        <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the dummy consectetur elit the Lorem Ipsum genera.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 dis-flex">
                <form action="{{route('login')}}" method="post">
                 {{ csrf_field() }}
                    <div class="row">

                        <div class="col-12">
                            <label for="first-name">
                            Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                            @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>


                        <div class="col-12">
                            <label for="first-name">
                            Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            @error('password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>

                        <div class="col-12 mt-5">
                            <button type="submit" class="btn btn-business w-100">Login</button>
                        </div>
                          <div class="col-12 text-center mt-3">
                            <a class="btn" href="{{route('register')}}">Register New Account </a>
                            <a class="btn" href="#">Or Continue With <img src="{{asset('/frontend/assets/images/google.png')}}" class="img-fluid ml-2"></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Register Form-->

@endsection
