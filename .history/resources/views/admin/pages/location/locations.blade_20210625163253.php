@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
    <ul class="nav nav-tabs page-header-tab">
    <li class="nav-item"><a class="nav-link" id="user-tab" data-toggle="tab" href="#user-list">List</a></li>
    <li class="nav-item"><a class="nav-link active" id="user-tab" data-toggle="tab" href="#user-add">Add New</a></li>
    </ul>
    <div class="header-action">
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
    $("#dltLocationBtn").on('click',function(){
        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this data",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
    var id = $(this).data('id');
        $.ajax({
            type:"POST",
            url:"/admin/locations/delete/"+id;
            data:{_token:"{{csrf_token()}}",
            id:id
        },
    })
  if (willDelete) {
    swal("Location has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Location is safe!");
  }
});


    })




</script>
@endsection
