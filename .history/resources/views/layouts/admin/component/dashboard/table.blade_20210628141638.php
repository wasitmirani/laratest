<div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
    <thead>
    <tr>
    <th>#</th>
    <th>Client Name</th>
    <th>Client Image</th>
    <th>Location</th>
    <th>Booking Date</th>
    <th>Start Booking</th>
    <th>End Booking</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data['latestBookings'] as $latestbooking)
    <tr>
    <td>{{$latestbooking->id}}</td>
    @if(isset($latestbooking->location->name))
    <td>{{$latestbooking->user->name}}</td>
    @else
    <td>-</td>
    @endif
    <td>
    <ul class="list-unstyled team-info sm margin-0 w150">
    <li>
        @if (isset($latestbooking->user->image))
        <img src="{{asset('admin/img/users/'.$latestbooking->user->image)}}" alt="Avatar" style="width: 36px;
        height: 29px;">
        @else
        <img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar">

        @endif

    </li>


    </ul>
    </td>
    @if(isset($latestbooking->location->name))
    <td>{{$latestbooking->location->name}}</td>
    @else
    <td>-</td>

    @endif
    <td>{{$latestbooking->booking_date}}</td>
    <td>{{$latestbooking->start_booking_date}}</td>
    <td>{{$latestbooking->end_booking_date}}</td>

    </tr>
    @endforeach

    </tbody>
    </table>
    </div>
    </div>
