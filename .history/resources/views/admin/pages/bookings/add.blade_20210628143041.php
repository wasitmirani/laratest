@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
    <ul class="nav nav-tabs page-header-tab">
    <li class="nav-item"><a class="nav-link" id="user-tab" data-toggle="tab" href="#user-list">List</a></li>
    <li class="nav-item"><a class="nav-link active" id="user-tab" data-toggle="tab" href="#user-add">Add New</a></li>
    </ul>
    <div class="header-action mt-2">
    <a href="{{route('admin.bookings')}}" class="btn btn-primary">Booking</a>
    </div>
    </div>
     </div>
</div>

<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">

@include('layouts.admin.component.bookings.editform')


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

        $.ajax({
            type:"POST",
            url:"/admin/bookings/update/"+id,
            data:{_token: "{{ csrf_token() }}",
            id:id,
            location:location,
            booking_date:booking_date,
            start_date:start_date,
            end_date:end_date,
            success:function(msg){


                swal("Booking Data Updated", "success");



            }
        }
        })


    })
    $("#editBookingBtn").on('click',function(){
        var id= $(this).data('id');
        var location = $("#location").val();
        var booking_date = $("#booking_date").val();
        var start_date = $("#start_date").val();
        var end_date = $("#end_date").val();

        $.ajax({
            type:"POST",
            url:"/admin/bookings/update/"+id,
            data:{_token: "{{ csrf_token() }}",
            id:id,
            location:location,
            booking_date:booking_date,
            start_date:start_date,
            end_date:end_date,
            success:function(msg){


                swal("Booking Data Updated", "success");



            }
        }
        })


    })

</script>
@endsection
