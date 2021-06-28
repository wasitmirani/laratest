@extends('layouts.admin.app')
@section('content')
<div class="row clearfix row-deck">
    <div class="col-lg-3 col-md-6">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Inline Date Picker</h3>
    </div>
    <div class="card-body">
    <div class="inline-datepicker"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6">
    <div class="card bg-indigo">
    <div class="card-header">
    <h3 class="card-title text-white">Inline Date Picker</h3>
    </div>
    <div class="card-body text-center">
    <div class="inline-datepicker fill_bg"></div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
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
