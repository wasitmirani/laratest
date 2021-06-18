@extends('layouts.frontend.master')

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
        <div class="row">
            <div class="col-4"></div>
            <div class="col-8">
                <div class="col-xl-4  col-lg-12 col-sm-12 float-center">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h2 class="card-title">{{$package->name}}</h2>
                        </div>
                        <div class="card-body pb-0">
                            <p>{{$package->description}}.</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Price</strong>
                                    <span class="mb-0"></span>
                                </li>
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Education</strong>
                                    <span class="mb-0">PHD</span>
                                </li>
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Designation</strong>
                                    <span class="mb-0">Se. Professor</span>
                                </li>
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Operation Done</strong>
                                    <span class="mb-0">120</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer pt-0 pb-0 text-center">
                            <div class="row">
                                <div class="col-4 pt-3 pb-3 border-right">
                                    <h3 class="mb-1 text-primary">150</h3>
                                    <span>Projects</span>
                                </div>
                                <div class="col-4 pt-3 pb-3 border-right">
                                    <h3 class="mb-1 text-primary">140</h3>
                                    <span>Uploads</span>
                                </div>
                                <div class="col-4 pt-3 pb-3">
                                    <h3 class="mb-1 text-primary">45</h3>
                                    <span>Tasks</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>





@endsection
