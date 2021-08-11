@extends('layouts.member.master')


@section('content')
<div>
    <div class="form-head mb-4">
        <h2 class="text-black font-w600 mb-0">Tours</h2>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tours  List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>

                                <th><strong>Package</strong></th>

                                <th><strong>Location</strong></th>
                                <th><strong>Start Date</strong></th>
                                <th><strong>End Date</strong></th>
                                <th><strong>PRICE</strong></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($tours as $tour)

                            <tr>

                                <td>{{$tour->package->name}}</td>

                                <td>{{$tour->location->name}}</td>
                                <td>{{$tour->booking_start_date}}</td>
                                <td>{{$tour->booking_end_date}}</td>
                                <td>{{$tour->package->price}}</td>
                            </tr>

                            @endforeach




</tbody>
<tfoot>
    <tr>

        <th><strong>Package</strong></th>
        <th><strong>Description</strong></th>
        <th><strong>Location</strong></th>
        <th><strong>Start Date</strong></th>
        <th><strong>End Date</strong></th>
        <th><strong>PRICE</strong></th>
    </tr>
</tfoot>
</table>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection
