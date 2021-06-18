@extends('layouts.frontend.master')

@section('content')
<section class="banner inner-banner" style="background: url(/frontend/assets/images/banner.jpg)no-repeat;" data-aos="flip-up" data-aos-duration="2000">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<h2 class="heading-one">Tours</h2>

					</div>
				</div>
			</div>
		</section>
		<!-- Banner -->

        @component('frontend.components.allTours',['tours'=>$tours])


        @endcomponent
@endsection
