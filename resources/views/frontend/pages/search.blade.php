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
<section class="py-5 p-list-two">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 view_slider recommended">
                <div class="list-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sorting-div d-flex align-items-center justify-content-between">
                                <p class="mb-2">463 Services available</p>
                                <div class="sorting d-flex align-items-center">
                                    <p>Sortby</p>
                                    <select class="custom-select custom-select-sm border-0 shadow-sm ml-2">
                                        <option>Best Selling</option>
                                        <option>Recommended</option>
                                        <option>Newest Arrivals</option>
                                    </select>
                                </div>
                            </div>
                            <h3>Available Tour Packages</h3>
                        </div>
                    </div>
                    <div class="row">
                        @forelse ($results as $result)
                        <div class="col-md-6">
                            <a href="#">
                                <img class="img-fluid" src="{{ asset('admin/img/package/'.$result->package->thumbnail) }}">
                            </a>
                            <div class="inner-slider">
                                <div class="inner-wrapper">
                                    <div class="d-flex align-items-center">
                                        {{-- <span class="seller-image">
                                            <img class="img-fluid" src="{{ asset('assets/listing/images/user/s2.png') }}" alt="">
                                        </span> --}}
                                        <span class="seller-name">
                                            <a href="#">{{$result->package->name}}</a>
                                            <span class="level hint--top level-one-seller">
                                                Level 1 Seller
                                            </span>
                                        </span>
                                    </div>
                                    <h3>
                                    Contrary to popular belief, Lorem Ipsum is not simply...
                                    </h3>
                                    <div class="content-info">
                                        <div class="rating-wrapper">
                                            <span class="gig-rating text-body-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                                    <path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                    </path>
                                                </svg>
                                                5.0
                                                <span>(7)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <div class="price">
                                            <a href="#">
                                                Starting At <span> $1,205</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>
                    <div class="footer-pagination text-center">
                        <nav class="mb-0 mt-0" aria-label="Page navigation example">

                            <ul class="pagination mb-0">

                                {{-- <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">

                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                    </a>
                                </li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55565170.29301636!2d-132.08532758867793!3d31.786060306224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1628881838950!5m2!1sen!2s" width="100%" height="100vh" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
