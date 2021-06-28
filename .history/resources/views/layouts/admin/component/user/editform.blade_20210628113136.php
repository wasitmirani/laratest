<div class="tab-pane fade active show" id="user-add" role="tabpanel">
    <div class="card">
    <div class="card-body">
    <div class="row clearfix">
        <form id="userEditForm">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <div class="form-group">
                    <input type="text" name="name"  id="name"  class="form-control" placeholder="Name *" value={{$user->name}}>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email ID *" value={{$user->email}}>
                        </div>
                    </div>
            </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                <input type="text" name="password" id='password' class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                <input type="text" name="password" id="password" class="form-control" placeholder="Confirm Password">
                </div>
            </div>

          </div>

            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Upload An Image</label>
                <input type="file" name="image" id="image" class="form-control" >
                </div>
            </div>
            <div class="col-12">
                <div class="col-md-4 col-sm-12">
                    <img src="{{$user->image}}">
                    <input type="hidden" name="old_image">
                </div>
            </div>
            <hr class="mt-4">


            <button type="submit" data-id="{{$user->id}}" class="btn btn-primary" id="editUserBtn">Update</button>
        </form>











    </div>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
