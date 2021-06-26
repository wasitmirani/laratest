<div class="tab-pane fade active show" id="user-add" role="tabpanel">
    <div class="card">
    <div class="card-body">
    <div class="row clearfix">
    <div class="col-lg-6  col-sm-12">
    <div class="form-group">
        <select class="form-control" name="location"  id="location">
            <option>Choose Location</option>
            @foreach($locations as $location)
            <option  @if(isset($booking->location->name) == $location->name) selected @endif value="{{$location->name}}">{{$location->name}}</option>
            @endforeach

        </select>

    </div>
    </div>
    <div class="col-lg-6  col-sm-12">
        <div class="form-group">
        <input type="date" name="booking_date"  id="booking_date"  class="form-control"  value={{$booking->booking_date}}>
        </div>
        </div>



    <div class="col-md-6 col-sm-12">
    <div class="form-group">
    <input type="date" name="start_date" id="start_date" class="form-control"  value={{$booking->start_booking_date}}>
    </div>
    </div>

    <div class="col-md-6 col-sm-12">
    <div class="form-group">
    <input type="date" name="end_date" id='end_date' class="form-control"  value="{{$booking->end_booking_date}}">
    </div>
    </div>
    {{-- <div class="col-md-6 col-sm-12">
    <div class="form-group">
    <input type="text" name="password" id="password" class="form-control" placeholder="Confirm Password">
    </div>
    </div> --}}
    <div class="col-12">
    <hr class="mt-4">


    <button type="button" data-id="{{$booking->id}}" class="btn btn-primary" id="editUserBtn">Update</button>

    </div>
    </div>
    </div>
    </div>
    </div>
