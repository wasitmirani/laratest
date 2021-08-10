@extends('layouts.frontend.master')
@section('style')
<style>

.title {

 margin-bottom: 50px;
 text-transform: uppercase;
}

.card-block {
 font-size: 1em;
 position: relative;
 margin: 0;
 padding: 1em;
 border: none;
 border-top: 1px solid rgba(34, 36, 38, .1);
 box-shadow: none;

}
.card {
 font-size: 1em;
 overflow: hidden;
 padding: 5;
 border: none;
 border-radius: .28571429rem;
 box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
 margin-top:20px;
}

.carousel-indicators li {
 border-radius: 12px;
 width: 12px;
 height: 12px;
 background-color: #404040;
}
.carousel-indicators li {
 border-radius: 12px;
 width: 12px;
 height: 12px;
 background-color: #404040;
}
.carousel-indicators .active {
 background-color: white;
 max-width: 12px;
 margin: 0 3px;
 height: 12px;
}
.carousel-control-prev-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
lex-direction: column;
}

.btn {
margin-top: auto;
}
</style>
@endsection

@section('content')

		<!-- Banner -->
		<section class="banner inner-banner" style="background: url(/frontend/assets/images/banner.jpg)no-repeat;" data-aos="flip-up" data-aos-duration="2000">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<h2 class="heading-one">Package Detail</h2>


					</div>
				</div>
			</div>
		</section>
		<!-- Banner -->
        <div class="container py-3">
            <div class="title h1 text-center">{{ $package->name }}</div>
            <!-- Card Start -->
            <div class="card">
              <div class="row ">

                <div class="col-md-7 px-3">
                  <div class="card-block px-6">
                    <h4 class="card-title"> {{  $package->name  }}</h4>
                    <p class="card-text">
                   {{ $package->description }}
                    </p>
                    <p class="card-text">Price : ${{ $package->price }}</p>
                    <br>
                    <a href="{{ route('book.now',$package->id) }}" class="mt-auto btn btn-primary  "> Book</a>
                  </div>
                </div>
                <!-- Carousel start -->
                <div class="col-md-5">
                  <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                      <li data-target="#CarouselTest" data-slide-to="1"></li>
                      <li data-target="#CarouselTest" data-slide-to="2"></li>

                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block" src="{{ asset('/admin/img/package/'.$package->thumbnail) }}" alt="" style="height:251px">
                      </div>

                      <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
                      <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
                    </div>
                  </div>
                </div>
                <!-- End of carousel -->
              </div>
            </div>
            <!-- End of card -->

          </div>



           <br>
          <br>






@endsection
