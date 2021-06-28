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
                @if (isset($user->image))
                <img class="rounded-circle img-thumbnail w100 align-center mt-4 ml-4" src="{{asset('assets/images/sm/avatar1.jpg')}}" alt="">
                @else
                <img class="rounded-circle img-thumbnail w100 align-center mt-4 ml-4" src="{{asset('admin/img/users/'.$user->image)}}" alt="">
                @endif

                <h5 class="mt-3 ml-4 mb-0">{{$user->name}}</h5>
            </div>
            <div class="col-3">

            </div>
        </div>


    </div>

    </div>
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
