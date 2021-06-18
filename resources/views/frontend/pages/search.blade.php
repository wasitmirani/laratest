@extends('layouts.frontend.master')

@section('content')
<section class="banner inner-banner" style="background: url(/frontend/assets/images/banner.jpg)no-repeat;" data-aos="flip-up" data-aos-duration="2000">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<h2 class="heading-one">Search Result</h2>

					</div>
				</div>
			</div>
		</section>

		<!-- Banner -->
        <section class="main-flips" style="background: url(frontend/assets/images/travel-bg.jpg)no-repeat;">
            <div class="content">
                <div class="container">
                    <div class="row">

                        <div class="flip-in">
                            <div class="container">
                                <div class="row">
                                @forelse ($results as $result)
                                    <div class="col-lg-3"   style="padding-top: 10px;">
                                        <div class="img-box">
                                            <img src="{{asset('frontend/assets/images/travel-3.jpg')}}" class="img-fluid" alt="">
                                            <h3>{{$result->tour->name}}</h3>
                                            <div class="overlay">
                                                <a href="{{route('book.now',$result->tour->id)}}" class="btn btn-business">Book now <i class="fas fa-arrow-right ml-3"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                        <h4>Sorry we not found tours please try agin</h4>
                                        <div class="col-md-4">
                                            <a href="{{url('/')}}" class="btn btn-business btn-sm btn-success">Back Home <i class="fas fa-arrow-right ml-3"></i></a>
                                        </div>
                                    </div>
                                 @endforelse



                                </div>

                            </div>
                            <div class="row text-center" style="width: 198px; padding-top: 28px;">

                </div>
                        </div>

                    </section>




@endsection
