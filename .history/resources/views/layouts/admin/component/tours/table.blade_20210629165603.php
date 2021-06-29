<div class="tab-pane fade active show" id="user-list" role="tabpanel">
    <div class="card">
    <div class="card-header">

    <div class="card-options">
    <form>
    <div class="input-group">
    {{-- <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
    <span class="input-group-btn ml-2"><button class="btn btn-sm btn-default" type="submit"><span class="fe fe-search"></span></button></span> --}}
    </div>
    </form>
    </div>
    </div>
    <div class="card-body">
    <div class="table-responsive">

        <table class="table table-hover js-basic-example dataTable table_custom border-style spacing5">
    <thead>
    <tr>
    <th class="w60">Client Name</th>

    <th>Package</th>
    <th>Booking Date</th>
    <th>Location</th>

    </tr>
    </thead>
    <tfoot>
        <tr>
            <th class="w60">Client Name</th>

            <th>Package</th>
            <th>Booking Date</th>
            <th>Location</th>

            </tr>

    </tfoot>

    <tbody>
        @if(isset($tours ))
        @foreach($tours as $tour)
    <tr>
    <td class="width45">
        <h6 class="mb-0">
            @if (isset($tour->user->name))
            {{$tour->user->name}}

           </h6>
        <span>{{$tour->user->email}}</span>
        @endif

    </td>
    <td>
        @if (isset($tour->package->name))
        {{$tour->package->name}}
        @endif

    </td>
    <td>
        @if (isset($tour->booking_date))
        {{$tour->booking_date}}
        @endif

       </td>
    <td>
        @if (isset($tour->locations->name))
        {{$tour->locations->name}}
        @endif

    </td>



    </tr>

    @endforeach

@elseif(isset($upcomingTours))
@foreach($upcomingTours as $upcomingTour)
<tr>
    <td class="width45">
        <h6 class="mb-0">
            @if (isset($upcomingTour->user->name))
            {{$upcomingTour->user->name}}

           </h6>
        <span>{{$upcomingTour->user->email}}</span>
        @endif

    </td>
    <td>
        @if (isset($upcomingTour->package->name))
        {{$upcomingTour->package->name}}
        @endif

    </td>
    <td>
        @if (isset($upcomingTour->booking_date))
        {{$upcomingTour->booking_date}}
        @endif

       </td>
    <td>
        @if (isset($upcomingTour->locations->name))
        {{$upcomingTour->locations->name}}
        @endif

    </td>



    </tr>
@endforeach
@endif



    </tbody>

    </table>
    </div>
    </div>
    </div>
    </div>

