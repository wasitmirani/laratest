@extends('layouts.admin.app')
@section('content')

<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
            <h3>Bookings</h3>

                <div class="container-fluid">



            @include('layouts.admin.component.bookings.table')
        </div>
    </div>
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
        var id = $(this).data('id');


        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      $.ajax({
          type:"POST",
          url:"/admin/bookings/delete/"+id,
          data:{_token: "{{ csrf_token() }}",
                id:id,

          },
          success:function(data){
              if(data == '1'){
                swal(" Your imaginary file has been deleted!", {
      icon: "success",
    });

              }else{
                swal("OOPs Somethinf Went Wromg!", {
      icon: "error",
    });
              }


          }
      })

    });
  } else {
    swal("Your imaginary file is safe!");
  }
});


    })
</script>
@endsection
