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
    <h5 class="m-0">Deborah Cox</h5>
    <p class="text-muted mb-0">Webdeveloper</p>
    </div>
    </div>
    </li>
    <li class="list-group-item">
    <small class="text-muted">Title: </small>
    <p class="mb-0">FaceBook Inc.</p>
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


    <div class="form-group">
    <label>Name</label>
    <input type="text" value="{{$user->name}}" class="form-control" placeholder="New Password" readonly>
    </div>
    <div class="form-group">
        <label>Email ID </label>
    <input type="email" class="form-control" value="{{$user->email}}" placeholder="Confirm New Password" readonly>
    </div>
    <div class="form-group">
        <label>Role</label>
        <input type="password" class="form-control" value="Admin" placeholder="Confirm New Password" readonly>
        </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
