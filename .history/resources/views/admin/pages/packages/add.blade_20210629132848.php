@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="card-title">Packages</h3>
    <ul class="nav nav-tabs page-header-tab">

    </ul>
    <div class="header-action mt-2">
    <a href="{{route('admin.packages')}}" class="btn btn-primary">Packages</a>
    </div>
    </div>
     </div>
</div>

<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">


            @include('layouts.admin.component.package.form')


        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
