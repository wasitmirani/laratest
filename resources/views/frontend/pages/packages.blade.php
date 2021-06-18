@extends('layouts.frontend.master')

@section('content')

		<!-- Banner -->
		<section class="banner inner-banner" style="background: url(/frontend/assets/images/banner.jpg)no-repeat;" data-aos="flip-up" data-aos-duration="2000">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<h2 class="heading-one">Packages</h2>

					</div>
				</div>
			</div>
		</section>
		<!-- Banner -->

		@component('frontend.components.allPackages',['packages'=>$packages])

        @endcomponent
@endsection
