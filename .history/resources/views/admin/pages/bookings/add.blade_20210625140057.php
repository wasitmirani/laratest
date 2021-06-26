@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.component.tabs')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
@if (isset($booking))
@include('layouts.admin.component.bookings.editform')
@endif

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $("#editBookingBtn").on('click',function(){
    var id= $(this).data('id');
        alert()
    })
</script>
@endsection
