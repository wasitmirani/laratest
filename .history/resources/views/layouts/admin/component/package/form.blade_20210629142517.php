<div class="tab-pane fade active show" id="user-add" role="tabpanel">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Add New Package</h4>
    <div class="row clearfix">
        <div id="errors">

        </div>
        <form id="addPackageForm" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Title</label>
                        @if (isset($package->name))
                        <input type="text" name="name" value="{{$package->name}}"  id="name"  class="form-control" placeholder="Package Title *">
                        @else
                        <input type="text" name="name"  id="name"  class="form-control" placeholder="Package Title *">
                        @endif


                    </div>
                </div>


            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Location</label>
                    @if (isset($package->locations->name))
                    @foreach($locations as $location)
                    <option @if ($packae->locations->name == $location->name)) selected @endif value="{{$location->id}}">{{$location->name}}</option>
                    @endforeach
                    @else
                  <select class="form-control" name="location">
                      <option>Select Location</option>
                      @foreach($locations as $location)
                      <option value="{{$location->id}}">{{$location->name}}</option>
                      @endforeach
                  </select>
                  @endif
                </div>
            </div>

           </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Price</label>
                        @if (isset($package->price))
                        <input type="text" class="form-control" name="price" plceholder="Price" value="{{$package->price}}">
                        @else
                        <input type="text" class="form-control" name="price" placeholder="Price">
                        @endif


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Upload An Image</label>

                        <input type="file" name="image" id="image" class="form-control">
                        @if (isset($package->thumbnail))
                        <input type="hidden" name="old-image" id="image" >
                        <img src="{{asset('/admin/img/package/'.$package->thumbnail)}}">

                        @endif

                    </div>
                </div>


            </div>


           <div class="col-md-6 col-sm-12">
              <div class="form-group">
                  <label>Description</label>
                <textarea class="form-control" name="description" placeholder="Enter Details........"></textarea>

             </div>
           </div>
           <div class="col-12">
            <hr class="mt-4">


            <button type="submit" class="btn btn-primary" id="addPackageBtn">Add</button>


        </form>







    </div>
    </div>
    </div>
    </div>
    </div>
