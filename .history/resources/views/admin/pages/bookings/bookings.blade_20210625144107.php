@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.component.tabs')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">


            @include('layouts.admin.component.bookings.table')
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(".update_status").on('click',function(){

        var id = $(this).data('id');
        var status = $(this).data('status');


        $.ajax({
                type:'POST',
                url:'/admin/update/bookings/status',
                data:{_token: "{{ csrf_token() }}",
                id:id,
                status:status
                },
                success: function( msg ) {
                    if(msg == "1"){
                        swal( "Status Updated", "success");
                        location.reload();

                    }else{
                        swal( "Failed To Update Status", "success");

                    }


                }
            });

    })
    $(".dltBookingBtn").on('click',function(){

    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
    })
</script>
@endsection
