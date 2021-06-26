@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.component.tabs')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
            @include('layouts.admin.component.user.table')


        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
     $(".dltUserBtn").on('click',function(){
        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
    var id = $(this).data('id');


$.ajax({
    type:"POST",
    url:"/admin/users/delete/"+id,
    data:{_token: "{{ csrf_token() }}",
    id:id,

    },
})


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
