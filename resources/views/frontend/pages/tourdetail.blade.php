
@extends('layouts.frontend.master')
@section('content')
	<!-- Banner -->
    <section class="banner inner-banner" style="background: url(/frontend/assets/images/banner.jpg)no-repeat;" data-aos="flip-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <h2 class="heading-one">Tour Detail</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner -->

 <!-- Gallery -->
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="{{ asset('assets/images/toursdetail/378667-1.jpg') }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />

      <img
        src="{{ asset('assets/images/toursdetail/378667-2.jpg') }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ asset('assets/images/toursdetail/378667-3.jpg') }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />

      <img
        src="{{ asset('assets/images/toursdetail/378667-4.jpg') }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>

    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ asset('assets/images/toursdetail/378667-6.jpg') }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />

      <img
        src="{{ asset('assets/images/toursdetail/378667-7.jpg') }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt=""
      />
    </div>
  </div>
  <!-- Gallery -->


@endsection
