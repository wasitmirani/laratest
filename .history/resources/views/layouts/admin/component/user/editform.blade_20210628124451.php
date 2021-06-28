<div class="tab-pane fade active show" id="user-add" data-id="{{$user->id}}" role="tabpanel">
    <div class="card">
    <div class="card-body">
    <div class="row clearfix">
        <form id="editUserForm" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <div class="form-group">
                    <input type="text" name="name"  id="name"  class="form-control" placeholder="Name *" value="{{$user->name}}" required>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email ID *" value="{{$user->email}}" required>
                        </div>
                    </div>
            </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                <input type="text" name="password" id='password' class="form-control" placeholder="Password" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                <input type="text" name="password" id="password" class="form-control" placeholder="Confirm Password" required>
                </div>
            </div>

          </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Upload An Image</label>
                <input type="file" name="image" id="image" class="form-control" >
                </div>
            </div>
            <div class="col-12">
                <div class="col-md-4 col-sm-12">
                    <img src="{{asset('admin/img/users/'.$user->image)}}" style="width:40px; height:40px">
                    <input type="hidden" name="old_image" value="{{$user->image}}">
                </div>
            </div>
            <hr class="mt-4">

        <input type="hidden" id="id" value="{{$user->id}}">
            <button type="submit" data-id="{{$user->id}}" class="btn btn-primary" id="editUserBtn">Update</button>
        </form>











    </div>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
