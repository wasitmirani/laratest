@extends('layouts.member.master')


@section('content')
<div>
    <div class="form-head mb-4">
        <h2 class="text-black font-w600 mb-0">Hi {{Auth::user()->name}}</h2>
    </div>
    <div class="container-fluid">
        <div class="d-sm-flex d-block justify-content-between align-items-center mb-4">
            <h2 class="text-black font-w600 mb-sm-0 mb-2">Dashboard</h2>



        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="cards owl-carousel mb-sm-5 mb-3 owl-loaded owl-drag">







         <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
                            <span class="mr-3 bgl-primary text-primary">
                             <i class="	fa fa-map-marker"></i> 

                            </span>
                            <div class="media-body">
                                <p class="mb-1">Total Tours</p>
                                <h4 class="mb-0">{{!empty($total_tours) ? $total_tours : 0}}</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
                            <span class="mr-3 bgl-warning text-warning">
                                <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </span>
                            <div class="media-body">
                                <p class="mb-1">Total Bookings</p>
                                <h4 class="mb-0">{{!empty($total_bookings) ? $total_bookings : 0}}</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body  p-4">
                        <div class="media ai-icon">
                            <span class="mr-3 bgl-info text-danger">
                                <i class="fa fa-history"></i>
                            </span>
                            <div class="media-body">
                                <p class="mb-1">Total Pending</p>
                                <h4 class="mb-0">{{ !empty($total_pending) ? $total_pending : 0}}</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
                            <span class="mr-3 bgl-success text-success">
                              <i class="fa fa-check-circle"></i>
                            </span>
                            <div class="media-body">
                                <p class="mb-1">Total Approved</p>
                                <h4 class="mb-0"> {{!empty($total_approved) ? $total_approved : 0 }}</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


                </div>






                    </div></div></div></div><div class="owl-nav"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots disabled"></div></div>
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header d-sm-flex d-block border-0 pb-0">
                                        <div>
                                            <h4 class="fs-20 text-black">Upcomimg Tours</h4>

                                        </div>

                                    </div>
                                    <div class="card-body pb-0">
                                        <table id="example" class="display min-w850">
                                            <thead>
                                                <tr>
                                                    <th><strong>Name</strong></th>
                                        <th><strong>Description</strong></th>
                                        <th><strong>DATE</strong></th>
                                        <th><strong>STATUS</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($up_commings as $upcomming)
                                    <tr>

                                        <td>{{$upcomming->tour->name}}</td>
                                        <td>{{$upcomming->tour->description}}</td>
                                        <td>{{$upcomming->booking_date}}</td>
                                        <td>
                                        @if ($upcomming->booking_status == 1)
                                        <span class="badge light badge-warning">Pending</span>
                                        @else
                                        <span class="badge light badge-success">Approved</span>
                                        @endif
                                        </td>

                                    </tr>
                                    @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th><strong>Name</strong></th>
                                                    <th><strong>Description</strong></th>
                                                    <th><strong>DATE</strong></th>
                                                    <th><strong>STATUS</strong></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

        </div>
    </div>
</div>


@endsection
