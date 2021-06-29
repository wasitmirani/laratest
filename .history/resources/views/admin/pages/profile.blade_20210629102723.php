@extends('layouts.admin.app')
@section('content')
<div class="container-fluid">
    <div class="row clearfix">
    <div class="col-lg-4 col-md-12">
    <ul class="list-group mb-3">
    <li class="list-group-item">
    <div class="media mb-0">
    <img class="rounded mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
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
    <div class="form-group">
    <input type="text" class="form-control" value="louispierce" disabled="" placeholder="Username">
    </div>
    </div>
    <div class="col-lg-4 col-md-12">
    <div class="form-group">
    <input type="email" class="form-control" value="louis.info@yourdomain.com" placeholder="Email">
    </div>
    </div>
    <div class="col-lg-4 col-md-12">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Phone Number">
    </div>
     </div>
    <div class="col-lg-12 col-md-12">
    <hr>
    <h6>Change Password</h6>
    <div class="form-group">
    <input type="password" class="form-control" placeholder="Current Password">
    </div>
    <div class="form-group">
    <input type="password" class="form-control" placeholder="New Password">
    </div>
    <div class="form-group">
    <input type="password" class="form-control" placeholder="Confirm New Password">
    </div>
    </div>
    </div>
    <button type="button" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
    <button type="button" class="btn btn-round btn-default">Cancel</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
