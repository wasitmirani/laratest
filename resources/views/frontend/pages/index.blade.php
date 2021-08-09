@extends('layouts.frontend.master')

@section('content')
<!-- Banner -->
<section class="banner" style="background: url(frontend/assets/images/banner.jpg)no-repeat;" data-aos="flip-up" data-aos-duration="2000">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h2 class="heading-one">Explore Your Life Travel <br>
                Where You Want</h2>
                <p>Discover amzaing places at exclusive deals</p>
                <a href="#" class="btn btn-business">Discover <i class="fas fa-arrow-right ml-3"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Banner -->
<!-- search-form -->
<section class="search">
    <div class="container">
        <div class="form">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Find a place</h3>
                    <form action="{{route('search.place')}}" method="POST">
                        @csrf
                    <ul class="list-unstyled">
                        <li class="list-inline-item">
                            <div class="location"><select id="disabledSelect" name="location" class="form-select " placeholder="Your Destination">
                                <option>Disabled select</option>
                                @foreach($locations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select></div>
                        </li>
                        <li class="list-inline-item">
                            <div class="date"><input type="text" class="" name="start" data-type="date" id="start-input" / placeholder="Start Date"></div>
                            <div id="material-header-holder" style="display:none">
                                <div class="ui-datepicker-material-header">
                                    <div class="ui-datepicker-material-day">
                                    </div>
                                    <div class="ui-datepicker-material-date">
                                        <div class="ui-datepicker-material-month">
                                        </div>
                                        <div class="ui-datepicker-material-day-num">
                                        </div>
                                        <div class="ui-datepicker-material-year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="date"><input type="text" name="end" class="" data-type="date" id="return-input" / placeholder="Return Date"></div>
                            <div id="material-header-holder" style="display:none">
                                <div class="ui-datepicker-material-header">
                                    <div class="ui-datepicker-material-day">
                                    </div>
                                    <div class="ui-datepicker-material-date">
                                        <div class="ui-datepicker-material-month">
                                        </div>
                                        <div class="ui-datepicker-material-day-num">
                                        </div>
                                        <div class="ui-datepicker-material-year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                      <!--  <li class="list-inline-item">
                            <div class="time"><input type="text" class="" placeholder="Total Duration"></div>
                        </li>-->
                        <li class="list-inline-item">
                            <button type="submit" class="btn"><i class="fas fa-search"></i> Check Availability</button>
                        </li>
                    </ul>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search-form -->

{{-- About Us --}}
            @component('frontend.components.aboutComponent')

            @endcomponent



            {{-- Tour Section  --}}



            <!-- Packages -->

            @if(count($packages)>0)
            @component('frontend.components.packagesComponent',['packages'=>$packages])

            @endcomponent
            @endif
            <!-- Packages -->
            <!-- Testimonials -->
            <section class="testimonials" style="background-image: url(frontend/assets/images/testimonial-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 dis-flex flex-column">
                            <h2 class="heading-three">Our Testimonials</h2>
                            <h2 class="heading-two">What Our Client Say.</h2>
                        </div>
                        <div class="col-lg-8">
                            <div id="testimoon">
                                <div class="item">
                                    <div class="box" style="background-image: url(frontend/assets/images/testimonial-1.jpg)">
                                        <div class="img-box"><img src="{{asset('frontend/assets/images/testimonial-2.png')}}" class="img-fluid" alt=""></div>
                                        <h4>John Doe</h4>
                                        <h5>Lorem Ipsum, dummy</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="box" style="background-image: url(frontend/assets/images/testimonial-1.jpg)">
                                        <div class="img-box"><img src="{{asset('frontend/assets/images/testimonial-2.png')}}" class="img-fluid" alt=""></div>
                                        <h4>John Doe</h4>
                                        <h5>Lorem Ipsum, dummy</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="box" style="background-image: url(frontend/assets/images/testimonial-1.jpg)">
                                        <div class="img-box"><img src="{{asset('frontend/assets/images/testimonial-2.png')}}" class="img-fluid" alt=""></div>
                                        <h4>John Doe</h4>
                                        <h5>Lorem Ipsum, dummy</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials -->
            <!-- main-form -->
            {{-- Conact US  --}}
            @component('frontend.components.contactusComponent')

            @endcomponent
            <!-- main-form -->
<!-- Call -->
<section class="call">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 dis-flex">
                <h2 class="heading-three">Didn't find the service suite you! Need a custom service?</h2>
            </div>
            <div class="col-lg-4">
                <a href="{{route('contactus')}}" class="btn"><i class="fas fa-phone-alt"></i><span> Let`s Talk</span></a>
            </div>
        </div>
    </div>
</section>
<!-- Call -->
@endsection
