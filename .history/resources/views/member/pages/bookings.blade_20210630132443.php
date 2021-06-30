@extends('layouts.member.master')


@section('content')
<div>




    <div class="form-head mb-4">
        <h2 class="text-black font-w600 mb-0">Bookings</h2>

    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Your Bookings</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>


                                        <th><strong>Package</strong></th>
                                        <th><strong>Location</strong></th>
                                        <th><strong>Price</strong></th>
                                        <th><strong>Booking DATE</strong></th>
                                        <th><strong>STATUS</strong></th>
                                    </tr>
                                </thead>
                                <tbody>

@foreach ($bookings as $booking)
<tr>

    <td>{{$booking->package->name}}</td>
    <td>{{$booking->location->name}}</td>
    <td>{{$booking->package->price}}</td>
    <td>{{$booking->booking_date}}</td>
    <td>
        @if ($booking->booking_status === 1)
        <span class="badge light badge-warning">Pending</span>
        @elseif($booking->booking_status === 2)
        <span class="badge light badge-success">Approved</span>
        @else
        <span class="badge light badge-success">Rejected</span>
        @endif

    </td>


</tr>

@endforeach


</tbody>
<tfoot>
        <tr>

            <th><strong>Package</strong></th>
            <th><strong>Location</strong></th>
            <th><strong>Price</strong></th>
            <th><strong>Booking DATE</strong></th>
            <th><strong>STATUS</strong></th>
        </tr>
</tfoot>
</table>
                </div>


            </div>
        </div>
    </div>



</div>
@endsection
