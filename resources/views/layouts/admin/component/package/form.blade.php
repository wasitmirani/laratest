<div class="tab-pane fade active show" id="user-add" role="tabpanel">
    <div class="card">
    <div class="card-body">
        @if(isset($package))
        <h4 class="card-title">Edit Package</h4>
        @else
        <h4 class="card-title">Add New Package</h4>
        @endif

    <div class="row clearfix">
        <div id="errors">

        </div>

        <form @if(isset($package)) id="editPackageForm" @else id="addPackageForm" @endif  enctype="multipart/form-data">


            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Title</label>
                        @if (isset($package->name))
                        <input type="hidden" name="id" id="id" value="{{$package->id}}">
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
                    <select class="form-control" name="location">
                        @foreach($locations as $location)
                        <option @if ($package->locations->name == $location->name)) selected @endif value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>

                    @else
                  <select class="form-control" name="location">
                      <option value="0">Select Location</option>
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
                        <input type="hidden" name="oldimage" value="{{$package->thumbnail}}" id="image" >
                        <div class="img-thumbnail">
                            <img style="width:60px; height:60px" src="{{asset('/admin/img/package/'.$package->thumbnail)}}">
                        </div>


                        @endif

                    </div>
                </div>


            </div>


           <div class="col-md-6 col-sm-12">
              <div class="form-group">
                  <label>Description</label>
                  @if (isset($package))
                <textarea class="form-control" name="description" placeholder="Enter Details........">{!! $package->description !!}</textarea>
                @else
                <textarea class="form-control" name="description" placeholder="Enter Details........"></textarea>
                @endif


             </div>
           </div>
           <div class="col-12">
            <hr class="mt-4">



                @if (isset($package))
                <button type="submit" class="btn btn-primary" id="updatePackageBtn">Update</button>
                @else
                <button type="submit" class="btn btn-primary" id="addPackageBtn">Add</button>
                @endif

            </button>


        </form>







    </div>
    </div>
    </div>
    </div>
    </div>
