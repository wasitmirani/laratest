<div class="tab-pane fade active show" id="user-add" role="tabpanel">
    <div class="card">
    <div class="card-body">
    <div class="row clearfix">
    <div class="col-lg-6  col-sm-12">
    <div class="form-group">
        <label>Location</label>
        <select class="form-control" name="location"  id="location">
            <option>Choose Location</option>
            @foreach($locations as $location)
            <option  @if(isset($booking->location->name) == $location->name) selected @endif value="{{$location->id}}">{{$location->name}}</option>
            @endforeach

        </select>

    </div>
    </div>
    <div class="col-lg-6  col-sm-12">
        <div class="form-group">
            <label>Booking Date</label>
        <input type="date" name="booking_date"  id="booking_date"  class="form-control"  value={{$booking->booking_date}}>
        </div>
        </div>



    <div class="col-md-6 col-sm-12">
    <div class="form-group">
        <label>Start Date</label>
    <input type="date" name="start_date" id="start_date" class="form-control"  value={{$booking->start_booking_date}}>
    </div>
    </div>

    <div class="col-md-6 col-sm-12">
    <div class="form-group">
        <label>End Date</label>
    <input type="date" name="end_date" id='end_date' class="form-control"  value="{{$booking->end_booking_date}}">
    </div>
    </div>
     <div class="col-md-6 col-sm-12">
    <div class="form-group">
  <label>Status</label>
  <select class="form-control" name="status"  id="status">
      <option>Updte Status</option>

      <option @if ($booking->status == 1) selected @endif value="1">Pending</option>
      <option @if ($booking->status == 2) selected @endif  value="2">Approve</option>
      <option @if ($booking->status == 3) selected @endif  value="3">Reject</option>
  </select>
    </div>
    </div>
    <div class="col-12">
    <hr class="mt-4">


    <button type="button" data-id="{{$booking->id}}" class="btn btn-primary" id="editBookingBtn">Update</button>

    </div>
    </div>
    </div>
    </div>
    </div>
