@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.component.tabs')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">

            @include('layouts.admin.component.user.form')

        </div>
    </div>
</div>
@endsection
