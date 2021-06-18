@extends('layouts.frontend.master')

@section('content')
<section class="main-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2 class="heading-three">Book Now</h2>
                        @if (Session::has('message'))
                        <p class="alert alert-success">{{Session::get('message')}}</p>

                        @endif

                    </div>
                </div>
                @if(count($errors->all()) > 0)
<div class="alert alert-danger" role="alert">
    <p><b>Required Fields Missing!</b></p>
    <ul>

    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
                <form action="{{route('book')}}" method="post">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                          <select class="form-control" name="package">
                              <option>Select Package</option>
                              @foreach ($packages as $package)
                              <option value="{{$package->id}}">{{$package->name}}</option>
                              @endforeach


                          </select>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" name="tour">
                                <option>Select Tour</option>

                                <option value="{{$tour->id}}" @if ($tour->id == $tour->id) {{'selected'}}

                                @endif>{{$tour->name}}</option>



                            </select>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" name="location_id">
                                <option>Select Location</option>
                                @foreach ($locations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach





                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Start Date</label>
                            <input class="form-control" name="start_date" type="date" placeholder="/">

                        </div>
                        <div class="col-lg-6">
                            <label>End Date</label>
                            <input class="form-control" name="end_date" type="date" placeholder="/">

                        </div>
                        <div class="col-lg-12">
                            <label>Booking Date</label>
                            <input class="form-control" name="booking_date" type="date" placeholder="Booking Date">

                        </div>

                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-business">Submit Now <i class="fas fa-arrow-right ml-3"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
