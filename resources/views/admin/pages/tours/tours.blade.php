@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
    <ul class="nav nav-tabs page-header-tab">
        @if (isset($tours))
        <h3>Tours</h3>
        @elseif(isset($upcomingTours))
        <h3>Upcoming Tours</h3>
        @endif

    </ul>
    <div class="header-action mt-2">

    </div>
    </div>
     </div>
</div>

<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
            @include('layouts.admin.component.tours.table')


        </div>
    </div>
</div>

@endsection
