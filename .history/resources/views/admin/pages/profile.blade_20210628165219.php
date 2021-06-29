@extends('layouts.admin.app')
@section('content')
<div class="row clearfix row-deck mt-4">
    <h3 >Admin Profile</h3>
    <div class="col-lg-3 col-md-6">

    <div class="card">
    <div class="card-header">
        <h3>Profile</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">


                <h5 class="mt-3 ml-4 mb-0"></h5>
            </div>
            <div class="col-3">

            </div>
        </div>


    </div>

    </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <ul class="list-group mb-3">
        <li class="list-group-item">
        <div class="media mb-0">
            @if (isset($user->image))
            <img class="rounded-circle img-thumbnail w100 align-center mt-4 ml-4" src="{{asset('assets/images/sm/avatar1.jpg')}}" alt="">
            @else
            <img class="rounded-circle img-thumbnail w100 align-center mt-4 ml-4" src="{{asset('admin/img/users/'.$user->image)}}" alt="">
            @endif
        <div class="media-body">
        <h5 class="m-0">{{$user->name}}</h5>
        <p class="text-muted mb-0">Admin</p>
        </div>
        </div>
        </li>
        <li class="list-group-item">
        <small class="text-muted">Title: </small>
        <p class="mb-0">FaceBook Inc.</p>
        </li>
        <li class="list-group-item">
        <small class="text-muted">Address: </small>
        <p class="mb-0">44 Shirley Ave. IL 60185</p>
        </li>
        <li class="list-group-item">
        <small class="text-muted">Date: </small>
        <p class="mb-0">07 Feb 2019</p>
        </li>
        <li class="list-group-item">
        <div>In Progress</div>
        <div class="progress progress-xs mt-2">
        <div class="progress-bar" data-transitiongoal="67" aria-valuenow="67" style="width: 67%;"></div>
        </div>
        </li>
        <li class="list-group-item">
        Notifications
        <div class="float-right">
        <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
        <span class="custom-control-label">&nbsp;</span>
        </label>
        </div>
        </li>
        <li class="list-group-item">
        Messages
        <div class="float-right">
        <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
        <span class="custom-control-label">&nbsp;</span>
        </label>
        </div>
        </li>
        <li class="list-group-item">
        Message email
        <div class="float-right">
        <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
        <span class="custom-control-label">&nbsp;</span>
         </label>
        </div>
        </li>
        <li class="list-group-item">
        Applicant email
        <div class="float-right">
        <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
        <span class="custom-control-label">&nbsp;</span>
        </label>
        </div>
        </li>
        </ul>
        </div>

    <div class="col-lg-8 col-md-12">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Personal Info</h3>
    </div>
    <div class="card-body">
        <label>Name</label>
    <div class="form-group">
    <div class="input-group">

    <input type="text" class="form-control"  value="{{$user->name}}" readonly>
    </div>
    </div>
    <label>Email</label>
    <div class="form-group">
    <div class="input-group">
    <input type="email" class="form-control" value="{{$user->email}}" readonly>
    </div>
    </div>
    <label>Role</label>
    <div class="form-group">
    <div class="input-group">
        @if(isset($user->role_id) == 2 )
    <input type="text" class="form-control" value="Admin" readonly>
    @endif
    </div>
    </div>

    <div class="form-group">

    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
