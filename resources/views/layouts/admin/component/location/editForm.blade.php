<div class="tab-pane fade active show" id="user-add" role="tabpanel">
    <div class="card">
    <div class="card-body">
    <div class="row clearfix">
        <form>
            {{ csrf_field() }}
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="form-group">
        <label>Location</label>
    <input type="text" name="name"  id="name"  class="form-control" placeholder="Name *" value={{$location->name}}>
    </div>
    </div>

    <div class="col-12">
    <hr class="mt-4">


    <button type="button" data-id="{{$location->id}}" class="btn btn-primary" id="editLocationBtn">Update</button>

    </div>
    </div>
</form>
    </div>
    </div>
    </div>
