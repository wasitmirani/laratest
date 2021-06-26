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

        $.ajax({
            type:"POST",
            url:"/admin/bookings/edit/"+id,
            data:{_token: "{{ csrf_token() }}",
            id:id,
            location:location,
            booking_date:booking_date,
            start_date:start_date,
            end_date:end_date,
            success:function(msg){
                if(msg == "1"){
                swal( "Booking Data Updated", "success");
                        location.reload();

               }else{
                swal( "Something Went Wrong", "error");
               }
            }
        }
        })


    })


//     swal({
//   title: "Are you sure?",
//   text: "Once deleted, you will not be able to recover this imaginary file!",
//   icon: "warning",
//   buttons: true,
//   dangerMode: true,
// })
// .then((willDelete) => {
//   if (willDelete) {

//     swal("Poof! Your imaginary file has been deleted!", {
//       icon: "success",
//     });
//   } else {
//     swal("Your imaginary file is safe!");
//   }
// });
</script>
@endsection
