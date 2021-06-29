@extends('layouts.admin.app')
@section('content')
<div class="row clearfix row-deck mt-4">
    <h3 >Admin Profile</h3>

    <div class="col-lg-4 col-sm-12 col-md-4">
        <ul class="list-group mb-3">
        <li class="list-group-item">
        <div class="media mb-0">
            @if (isset($user->image))
            <img class="rounded-circle img-thumbnail w100 align-center mt-4 ml-4" src="{{asset('assets/images/sm/avatar1.jpg')}}" alt="">
            @else
            <img class="rounded-circle img-thumbnail w100 align-center mt-4 ml-4" src="{{asset('admin/img/users/'.$user->image)}}" alt="">
            @endif
        <div class="media-body">

        </div>
        </div>
        </li>
        <li class="list-group-item">
            <h5 class="m-0">  <h5 class="mt-3 ml-4 mb-0">{{$user->name}}</h5></h5>
            <p class="text-muted mb-0">Admin</p>
        </li>






        </ul>
        </div>

    <div class="col-lg-8 col-md-8">
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
