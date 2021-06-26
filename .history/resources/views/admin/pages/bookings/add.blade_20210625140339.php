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
        var location = $("#location").val();
        var booking_date = $("#booking_date").val();
        var start_date = $("#start_date").val();
        var end_date = $("#end_date").val();
    })
</script>
@endsection
