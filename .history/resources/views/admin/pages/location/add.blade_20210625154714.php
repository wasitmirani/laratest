@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.component.tabs')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
@if (isset($location))
@include('layouts.admin.component.location.editForm')
@else
@include('layouts.admin.component.location.addForm')

@endif


        </div>
    </div>
</div>
@endsection
