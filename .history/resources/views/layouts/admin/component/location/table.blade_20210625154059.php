<div class="tab-pane fade active show" id="user-list" role="tabpanel">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Locations List</h3>
    <div class="card-options">
    <form>
    <div class="input-group">
    <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
    <span class="input-group-btn ml-2"><button class="btn btn-sm btn-default" type="submit"><span class="fe fe-search"></span></button></span>
    </div>
    </form>
    </div>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-striped table-hover table-vcenter text-nowrap mb-0">
    <thead>
    <tr>



    <th>#</th>
    <th>Location</th>
    <th class="w100">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($locations as $location)
    <tr>
    <td class="width45">{{$location->id}}</td>

    <td>{{$location->name}}</td>


    <td>
        <a href="" class="btn btn-icon" title="Edit"  ><i class="fa fa-edit"></i></a>
        <button type="button"  class="btn btn-icon dltBookingBtn js-sweetalert" data-id="{{$location->id}}""  title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></utton>
    </td>
    </tr>

    @endforeach





    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
