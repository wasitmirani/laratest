<div class="tab-pane fade active show" id="user-list" role="tabpanel">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Bookings List</h3>
    <div class="card-options">
    <form>
    <div class="input-group">

    </div>
    </form>
    </div>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-striped table-hover table-vcenter text-nowrap mb-0">
    <thead>
    <tr>
    <th class="w60">Member Name</th>


    <th>Booking Date</th>
    <th>Location</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Status</th>
    <th>Update Status</th>


    <th class="w100">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
    <tr>
    <td class="width45">{{$booking->user->name}}</td>
    <td>{{$booking->booking_date}}</td>
    @if (isset($booking->location->name))
    <td>{{$booking->location->name}}</td>
    @else
    <td>-</td>
    @endif

    <td>{{$booking->start_booking_date}}</td>
    <td>{{$booking->end_booking_date}}</td>
    <td>@if ($booking->booking_status == 1)

        <span class="tag tag-warning">Pending</span>
    @elseif ($booking->booking_status == 3)
    <span class="tag tag-danger">Approved</span>
    @elseif ($booking->booking_status == 2)
    <span class="tag tag-danger">Rejected</span>
    @endif</td>
    <td>


          <li>
            <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-cup"></i><span>Update</span></a>
            <ul>
            <li><a type="button" class="update_status" data-id="{{$booking->id}}" data-status="3">Approve</a></li>
            <li><a type="button" class="update_status"  data-id="{{$booking->id}}" data-status="1">Pending</a></li>
            <li><a type="button" class="update_status" data-id="{{$booking->id}}" data-status="2">Pending</a></li>

            </ul>
            </li>

    </td>
    <td>
        <a href="{{route('admin.bookings.edit',$booking->id)}}" class="btn btn-icon" title="Edit"  ><i class="fa fa-edit"></i></a>
        <button type="button"  class="btn btn-icon dltBookingBtn js-sweetalert" data-id="{{$booking->id}}""  title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></utton>
        </td>
    </tr>

    @endforeach





    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
