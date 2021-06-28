@extends('layouts.admin.app')
@section('content')
<div class="row clearfix row-deck">
    <div class="col-lg-4 col-md-6">
    <div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <img class="rounded-circle img-thumbnail w100 align-center" src="{{asset('assets/images/sm/avatar1.jpg')}}" alt="">

    </div>

    </div>
    </div>

    <div class="col-lg-8 col-md-12">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Date Picker</h3>
    </div>
    <div class="card-body">
    <label>Default</label>
    <div class="form-group">
    <div class="input-group">
    <input data-provide="datepicker" data-date-autoclose="true" class="form-control">
    </div>
    </div>
    <label>Custom Format (dd/mm/yyyy)</label>
    <div class="form-group">
    <div class="input-group">
    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
    </div>
    </div>
    <label>Range</label>
    <div class="form-group">
    <div class="input-daterange input-group" data-provide="datepicker">
    <input type="text" class="input-sm form-control" name="start">
    <span class="input-group-addon range-to">to</span>
    <input type="text" class="input-sm form-control" name="end">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
