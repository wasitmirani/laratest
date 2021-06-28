@extends('layouts.admin.app')
@section('content')



            <div class="section-body mt-3">
            <div class="container-fluid">
            <div class="row clearfix">
            <div class="col-lg-12">
            <div class="mb-4">
            <h4>Welcome {{Auth::user()->name}}!</h4>
            {{-- <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small> --}}
            </div>
            </div>
            </div>
            <div class="row clearfix">
            <div class="col-6 col-md-4 col-xl-3">
            <div class="card">
            <div class="card-body ribbon">
            <div class="ribbon-box green">{{$data['totalUser']}}</div>
            <a href="{{route('admin.users')}}" class="my_sort_cut text-muted">
            <i class="icon-users"></i>
            <span>Users</span>
            </a>
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3">
            <div class="card">
            <div class="card-body ribbon">
                <div class="ribbon-box green">{{$totalBooking}}</div>
            <a href="hr-holidays.html" class="my_sort_cut text-muted">
            <i class="icon-like"></i>
            <span>Bookings</span>
            </a>
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3">
            <div class="card">
            <div class="card-body ribbon">
            <div class="ribbon-box orange">8</div>
            <a href="hr-events.html" class="my_sort_cut text-muted">
            <i class="icon-calendar"></i>
            <span>UpComing Tours</span></span>
            </a>
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3">
            <div class="card">
            <div class="card-body ribbon">
                <div class="ribbon-box green">{{$totalLocation}}</div>
            <a href="hr-payroll.html" class="my_sort_cut text-muted">
            <i class="icon-credit-card"></i>
            <span>Locations</span>
            </a>
            </div>
            </div>
            </div>


            </div>
            </div>
            </div>
             <div class="section-body">
            <div class="container-fluid">

            <div class="row clearfix">
            <div class="col-12 col-sm-12">
            <div class="card">
             <div class="card-header">
            <h3 class="card-title">Latest Booking</h3>
            </div>
                @include('layouts.admin.component.dashboard.table')
            </div>
        </div>
    </div>
    </div>
@endsection
