<div class="tab-pane fade active show" id="user-list" role="tabpanel">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Locations List</h3>
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
        <a href="{{route('admin.locations.edit',$location->id)}}" class="btn btn-icon" title="Edit"  ><i class="fa fa-edit"></i></a>
        <button type="button"  class="btn btn-icon dltLocationBtn js-sweetalert" data-id="{{$location->id}}""  title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></utton>
    </td>
    </tr>

    @endforeach





    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
