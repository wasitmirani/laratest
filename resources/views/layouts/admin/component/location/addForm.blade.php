
<div class="tab-pane fade active show" id="user-add" role="tabpanel">
    <div class="card">
    <div class="card-body">
    <div class="row clearfix">
        <div id="errors"></div>
        <form>
            {{ csrf_field() }}
    <div class="col-lg-12 col-md-12 col-sm-12">


    <div class="form-group">
        <label>Location</label>
    <input type="text" name="title"  id="title"  class="form-control" placeholder="Enter A New Location *" >
    </div>
    </div>

    <div class="col-12">
    <hr class="mt-4">


    <button type="button"  class="btn btn-primary" id="addLocationBtn">Add</button>

    </div>
    </div>
</form>
    </div>
    </div>
    </div>
