<div class="tab-pane fade active show" id="user-add" role="tabpanel">
    <div class="card">
    <div class="card-body">
        <h4>Add New User</h4>
    <div class="row clearfix">
        <div id="errors">

        </div>
        <form id="addUserForm" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                    <input type="text" name="name"  id="name"  class="form-control" placeholder="Name *">
                    </div>
                </div>


            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email ID *">
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
             </div>
           </div>
           <div class="col-12">
            <hr class="mt-4">


            <button type="submit" class="btn btn-primary" id="addUserBtn">Add</button>


        </form>







    </div>
    </div>
    </div>
    </div>
    </div>
