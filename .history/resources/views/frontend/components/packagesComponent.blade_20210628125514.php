<section class="packages">
    <div class="container">
        <div class="row text-center">
            <h2 class="heading-three">Pack N Go! </h2>
            <h2 class="heading-two">Awesome Tours Packages </h2>
        </div>
        <div class="row">
        @foreach($packages as $package)
            <div class="col-lg-4"  style="padding-top: 10px;">
                <div class="box">
                    <div class="img-box"><img src="{{asset('frontend/assets/images/tour-1.jpg')}}" class="img-fluid" alt=""><h3>{{$package->name}}</h3></div>
                    <ul class="list-unstyled">
                        <li class="list-inline-item"><i class="far fa-eye"></i> 12700</li>
                        <li class="list-inline-item"><i class="fas fa-heart"></i> 700</li>
                        <li class="list-inline-item"><i class="fas fa-comment-dots"></i>12700</li>
                    </ul>
                    <div class="content">
                        <p><strong>$ {{$package->price}}</strong>7 days 6 nights</p>
                        <p class="para-one">{{$package->description}}.</p>
                        <a href="{{route('book.now',$package->id)}}" class="btn btn-business">BOOK Now <NOW></NOW> <i class="fas fa-arrow-right ml-3"></i></a>
                        <a href="{{route('package.detail',$package->id)}}" class="btn btn-business">Detail <NOW></NOW> <i class="fas fa-arrow-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
           <!-- <div class="col-lg-4">
                <div class="box">
                    <div class="img-box"><img src="{{asset('frontend/assets/images/tour-1.jpg')}}" class="img-fluid" alt=""><h3>Lorem Ipsum</h3></div>
                    <ul class="list-unstyled">
                        <li class="list-inline-item"><i class="far fa-eye"></i> 12700</li>
                        <li class="list-inline-item"><i class="fas fa-heart"></i> 700</li>
                        <li class="list-inline-item"><i class="fas fa-comment-dots"></i>12700</li>
                    </ul>
                    <div class="content">
                        <p><strong>$600</strong>7 days 6 nights</p>
                        <p class="para-one">Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                        <a href="#" class="btn btn-business">BOOK Now <NOW></NOW> <i class="fas fa-arrow-right ml-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box">
                    <div class="img-box"><img src="{{asset('frontend/assets/images/tour-1.jpg')}}" class="img-fluid" alt=""><h3>Lorem Ipsum</h3></div>
                    <ul class="list-unstyled">
                        <li class="list-inline-item"><i class="far fa-eye"></i> 12700</li>
                        <li class="list-inline-item"><i class="fas fa-heart"></i> 700</li>
                        <li class="list-inline-item"><i class="fas fa-comment-dots"></i>12700</li>
                    </ul>
                    <div class="content">
                        <p><strong>$600</strong>7 days 6 nights</p>
                        <p class="para-one">Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                        <a href="#" class="btn btn-business">BOOK Now <NOW></NOW> <i class="fas fa-arrow-right ml-3"></i></a>
                    </div>
                </div>
            </div>
   -->
   </div>
        <div class="row text-center">
            <a href="{{route('all.packages')}}" class="btn btn-business">Discover MORE <NOW></NOW> <i class="fas fa-arrow-right ml-3"></i></a>
        </div>
    </div>
</section>
