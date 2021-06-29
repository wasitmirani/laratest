@extends('layouts.admin.app')
@section('content')
<div class="container-fluid">
    <div class="row clearfix mt-3">
    <div class="col-lg-4 col-md-12 ">
    <ul class="list-group mb-3">
    <li class="list-group-item">
    <div class="media mb-0">
    @if(isset($user->image))
    <img class="rounded mr-3" src="{{asset('assets/images/xs/profile.jpg')}}" alt="">
    @else
    <img class="rounded mr-3" src="{{asset('admin/img/users/'.$user->image)}} " alt="">
    @endif
    <div class="media-body">
    <h5 class="m-0">{{$user->name}}</h5>
    <p class="text-muted mb-0">Admin</p>
    </div>
    </div>
    </li>
    <li class="list-group-item">
    <small class="text-muted">Title: </small>
    <p class="mb-0">Administration</p>
    </li>

    </ul>
    </div>
    <div class="col-lg-8 col-md-12">

    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Account Data</h3>
    <div class="card-options">
    <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
    <div class="item-action dropdown ml-2">
    <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
    <div class="dropdown-divider"></div>
    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
    </div>
    </div>
    </div>
    </div>
    <div class="card-body">
    <div class="row clearfix">
    <div class="col-lg-4 col-md-12">

    </div>
    <div class="col-lg-4 col-md-12">

    </div>
    <div class="col-lg-4 col-md-12">

     </div>
    <div class="col-lg-12 col-md-12">

<form id="updateProfile" enctype="multipart/form-data">
    <div class="form-group">
        <label>Name</label>
        <input type="text" value="{{$user->name}}" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Email ID</label>
        <input type="email" class="form-control" value="{{$user->email}}" name="email" >
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password"  class="form-control" value="" placeholder="Confirm New Password" >
            </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password-confirmation" class="form-control"  placeholder="Confirm New Password" >
            </div>

        <div class="form-group">
            <label>Update Image</label>
            <input type="file" class="form-control" name="image" value="Admin" placeholder="Confirm New Password" >
            <input type="hidden" name="oldImage" value="{{$user->image}}">
            </div>

        <div class="form-group">

           <button type="submit" class="btn btn-primary">Update</button></button>
        </div>
</form>

    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
    @section('scripts')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
    headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
 });
            $("#updateProfile").on('submit',function(e){
            e.preventDefault()
            var data = new FormData();
            $.ajax({
            type:"POST",
            url:"/admin/update/profile/",
            data: data,
            processData: false,
            contentType: false,
            success:function(msg){
                console.log(msg)
               if(msg == true){
                swal( "User Updated", "success");
               }else{
                swal("Something Went Wrong", "error");
               }

            }

            })
        })

        })

    </script>
    @endsection
