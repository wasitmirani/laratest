{{-- <section class="main-flips" style="background: url(frontend/assets/images/travel-bg.jpg)no-repeat;">
    <div class="content">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-4">
                    <a class="card" href="#!">
                        <div class="front" style="background-image: url(frontend/assets/images/travel-1.jpg)">
                            <h3>New York Tou</h3>
                        </div>
                        <div class="back">
                            <div>
                                <h2 class="heading-two">Travel
                                Best Holidays Trips
                                In The World</h2>
                                <p class="para-one">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-4">
                        <a class="card" href="#!">
                            <div class="front" style="background-image: url(frontend/assets/images/travel-2.jpg)">
                                <h3>New York Tou</h3>
                            </div>
                            <div class="back">
                                <div>
                                    <h2 class="heading-two">Travel
                                    Best Holidays Trips
                                    In The World</h2>
                                    <p class="para-one">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-lg-4">
                            <a class="card" href="#!">
                                <div class="front" style="background-image: url(frontend/assets/images/travel-1.jpg)">
                                    <h3>New York Tou</h3>
                                </div>
                                <div class="back">
                                    <div>
                                        <h2 class="headifng-two">Travel
                                        Best Holidays Trips
                                        In The World</h2>
                                        <p class="para-one">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div></a>
                            </div>
                        </div>
                    </div>
                </div>-->
                @if(isset($tours))
                <div class="flip-in">
                    <div class="container">
                        <div class="row">
                        @foreach($tours as $tour)
                            <div class="col-lg-3"   style="padding-top: 10px;">
                                <div class="img-box">
                                    <img src="{{asset('frontend/assets/images/travel-3.jpg')}}" class="img-fluid" alt="">
                                    <h3>{{$tour->name}}</h3>
                                    <div class="overlay">
                                        <a href="{{route('book.now',$tour->id)}}" class="btn btn-business">Book now <i class="fas fa-arrow-right ml-3"></i></a>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                        @else
                        <h4>No Tours Found Right Now</h4>
                        <a href="{{route('all.tours')}}" class="btn btn-business">Discover MORE <NOW></NOW> <i class="fas fa-arrow-right ml-3"></i></a>
                        @endif

                    </div>

                </div>
                <div class="row text-center" style="width: 198px; padding-top: 28px;">


    </div>
</div>


                           <!--<div class="col-lg-3">
                                <div class="img-box">
                                    <img src="{{asset('frontend/assets/images/travel-4.jpg')}}" class="img-fluid" alt="">
                                    <h3>Norwich Tour</h3>
                                    <div class="overlay">
                                        <a href="#" class="btn btn-business">Book now <i class="fas fa-arrow-right ml-3"></i></a>
                                    </div>
                                </div>
                            </div>-->
                           <!-- <div class="col-lg-3">
                                <div class="img-box">
                                    <img src="{{asset('frontend/assets/images/travel-5.jpg')}}" class="img-fluid" alt="">
                                    <h3>Armania Tour</h3>
                                    <div class="overlay">
                                        <a href="#" class="btn btn-business">Book now <i class="fas fa-arrow-right ml-3"></i></a>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="col-lg-3">
                                <div class="img-box">
                                    <img src="{{asset('frontend/assets/images/travel-6.jpg')}}" class="img-fluid" alt="">
                                    <h3>Armania Tour</h3>
                                    <div class="overlay">
                                        <a href="#" class="btn btn-business">Book now <i class="fas fa-arrow-right ml-3"></i></a>
                                    </div>
                                </div>
                            </div>-->




            </section>

 --}}
 <section class="main-flips" style="background: url(frontend/assets/images/travel-bg.jpg)no-repeat;">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a class="card" href="#!">
                        <div class="front" style="background-image: url(frontend/assets/images/travel-1.jpg)">
                            <h3>Condo 1</h3>
                        </div>
                        <div class="back">
                            <div>
                                <h2 class="heading-two">Travel
                                Best Holidays Trips
                                In The World</h2>
                                <p class="para-one">3 Bedroom, 2 Bath Ocean and Mountain View
</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-4">
                        <a class="card" href="#!">
                            <div class="front" style="background-image: url(frontend/assets/images/travel-2.jpg)">
                                <h3>Condo 2</h3>
                            </div>
                            <div class="back">
                                <div>
                                    <h2 class="heading-two">Travel
                                    Best Holidays Trips
                                    In The World</h2>
                                    <p class="para-one">3 bedroom, 2 bath And Garden view</p>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-lg-4">
                            <a class="card" href="#!">
                                <div class="front" style="background-image: url(frontend/assets/images/travel-1.jpg)">
                                    <h3>Condo 3</h3>
                                </div>
                                <div class="back">
                                    <div>
                                        <h2 class="heading-two">Travel
                                        Best Holidays Trips
                                        In The World</h2>
                                        <p class="para-one">1 bedroom, 2 bath ,Oceanfront And Ocean View</p>
                                    </div>
                                </div></a>
                            </div>

                            <div class="col-lg-12">
                            <a class="card" href="#!">
                                <div class="front1 front" style="background-image: url(frontend/assets/images/banner.jpg)">
                                    <h3>House</h3>
                                </div>
                                <div class="back2 back">
                                    <div>
                                        <h2 class="heading-two">Travel
                                        Best Holidays Trips
                                        In The World</h2>
                                        <p class="para-one">5 bedrooms, 3 baths, 1,5 block from the water10mins walk to the beach</p>
                                    </div>
                                </div></a>
                            </div>

                        </div>
                    </div>
                </div>
                                        </section>
