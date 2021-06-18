@extends('layouts.member.master')


@section('content')
<div>
    <div class="form-head mb-4">
        <h2 class="text-black font-w600 mb-0">Upcoming Tours</h2>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tours</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                            @foreach($upcommings as $upcomming)
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


@endsection
