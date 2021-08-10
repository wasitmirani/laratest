<div class="tab-pane fade active show" id="user-add" role="tabpanel">
    <div class="card">
    <div class="card-body">
        @if(isset($user))
        <h4 class="card-title">Edit User</h4>
        @else
        <h4 class="card-title">Add New User</h4>
        @endif
    <div class="row clearfix">
        <div id="errors">

        </div>
        <form @if(isset($user)) id="editUserForm" data-id="{{ $user->id }}"  @else id="addUserForm"  @endif  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                    <input type="text" name="name"  id="name"  class="form-control" placeholder="Name *" @if(isset($user)) value="{{ $user->name }}" @else value="" @endif>
                    </div>
                </div>


            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email ID *" @if(isset($user)) value="{{ $user->email }}" @else value="" @endif>
                </div>
            </div>

           </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                    <input type="password" name="password" id='password' class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                    <input type="password" name="password_confirmation" id="password" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>

            </div>


           <div class="col-md-6 col-sm-12">
              <div class="form-group">
               <label>Upload An Image</label>
              <input type="file" name="image" id="image" class="form-control">

              <input type="hidden" name="oldImage" @if(isset($user)) value="{{ $user->image }}" @else value="" @endif>
              @if(isset($user)) <img class="image-responsive thumbnail" src="{{ asset('/admin/img/users/'.$user->image) }}"> @endif
             </div>
           </div>
           <div class="col-12">
            <hr class="mt-4">


            <button type="submit"  class="btn btn-primary" id="addUserBtn" >@if(isset($user)) Update @else Add @endif</button>


        </form>








    </div>
    </div>
    </div>
