<section class="main-flips" style="background: url(assets/images/travel-bg.jpg)no-repeat;">
    <div class="content">
        <div class="container">
            <div class="row">
                @foreach($tours as $tour)
                <div class="col-lg-4">
                    <a class="card" href="{{ route('tour.detail') }}">
                        <div class="front" style="background-image: url(assets/images/travel-1.jpg)">
                            <h3>{{ $tour->tour->name }}</h3>
                        </div>
                        <div class="back">
                            <div>
                                <h2 class="heading-two">Travel
                                Best Holidays Trips
                                In The World</h2>
                                <p class="para-one">3 Bedroom, 2 Bath Ocean and Mountain View</p>

                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="col-lg-4">
                        <a class="card" href="{{ route('tour.detail') }}">
                            <div class="front" style="background-image: url(assets/images/travel-2.jpg)">
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
                            <a class="card" href="{{ route('tour.detail') }}">
                                <div class="front" style="background-image: url(assets/images/travel-1.jpg)">
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
                                <div class="front1 front" style="background-image: url(assets/images/banner.jpg)">
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
