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
    <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>


    </ul>
    </td>
    @if(isset($latestbooking->location->name))
    <td>{{$latestbooking->location->name}}</td>
    @else
    <td>-</td>

    @endif
    <td>{{$latestbooking->booking_date}}</td>
    <td>{{$latestbooking->booking_start_date}}</td>
    <td>{{$latestbooking->booking_end_date}}</td>

    </tr>
    @endforeach
    <tr>
    <td>#DF1937</td>
    <td>Sean Black</td>
    <td>
    <ul class="list-unstyled team-info sm margin-0 w150">
    <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
    <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
    <li><img src="{{asset('assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
    <li class="ml-2"><span>2+</span></li>
    </ul>
    </td>
    <td>Angular Admin</td>
    <td>$14,500</td>
    <td>Pending</td>
    <td><span class="tag tag-success">Delivered</span></td>
    </tr>
    <tr>
    <td>#YU8585</td>
    <td>Merri Diamond</td>
     <td>
    <ul class="list-unstyled team-info sm margin-0 w150">
    <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
    </ul>
    </td>
    <td>One page html Admin</td>
    <td>$500</td>
    <td>Done</td>
    <td><span class="tag tag-orange">Submit</span></td>
    </tr>
    <tr>
    <td>#AD1245</td>
    <td>Sean Black</td>
    <td>
    <ul class="list-unstyled team-info sm margin-0 w150">
    <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
    <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
    <li><img src="{{asset('assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
    </ul>
    </td>
    <td>Wordpress One page</td>
    <td>$1,500</td>
    <td>Done</td>
    <td><span class="tag tag-success">Delivered</span></td>
    </tr>
    <tr>
    <td>#GH8596</td>
    <td>Allen Collins</td>
    <td>
    <ul class="list-unstyled team-info sm margin-0 w150">
    <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
    <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
    <li><img src="{{('assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
    <li class="ml-2"><span>2+</span></li>
    </ul>
    </td>
    <td>VueJs Application</td>
    <td>$9,500</td>
    <td>Done</td>
    <td><span class="tag tag-success">Delivered</span></td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
