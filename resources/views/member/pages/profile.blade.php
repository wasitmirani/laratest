@extends('layouts.member.master')


@section('content')
<div class="page-titles">
    <h4>Profile</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
    </ol>
</div>
<!-- row -->
<div class="row">
</div class="col-xl-12 col-lg-12>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Profile Detail</h4>
        @if (Session::has('message'))
        <p class="alert alert-warning">{{Session::get('message')}}</p>

        @endif
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{route('member.update.profile')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control input-default " placeholder="input-default" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control input-default " placeholder="input-default" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control input-default " placeholder="input-default" value="{{$user->phone}}">
                </div>
                <div class="form-group">
                    <label>Upload Picture</label>
                    <input type="file" name="image" class="form-control input-default " placeholder="input-default" >

                </div>
                @if(Auth::user()->image != null)
                <div class="form-group">
                    <label>Existing Image</label>

                    <img src="{{asset('admin/img/users/')}}{{'/'}}{{Auth::user()->image}}" width="50px" alt="">


                </div>
                @endif
                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>
</div>


</div>


@endsection
