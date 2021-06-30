@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
    <ul class="nav nav-tabs page-header-tab">
        <h3>Locations</h3>
    </ul>
    <div class="header-action mt-2">
    <a href="{{route('admin.locations.create')}}" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add</a>
    </div>
    </div>
     </div>
</div>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
            @include('layouts.admin.component.location.table')


        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(".dltLocationBtn").on('click',function(){
        var id = $(this).data('id');
        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      $.ajax({
        type:"POST",
          url:"/admin/locations/delete/"+id,
          data:{_token: "{{ csrf_token() }}",
                id:id,

          },
          success:function(data)
          {
            if(data == '1'){
                swal(" Your record deleted successfully !", {
      icon: "success",
    });
}else{
    swal("OOPs Something Went Wromg!", {
      icon: "error",
    });
}
 }
})
} else {
    swal("Your data is safe!");
  }
});


    })







</script>
@endsection


