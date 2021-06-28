@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
    <ul class="nav nav-tabs page-header-tab">
        <h3>Users</h3>
    </ul>
    <div class="header-action mt-2">
    <a href="{{route('admin.users.create')}}" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add</a>
    </div>
    </div>
     </div>
</div>

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
  text: "Once deleted, you will not be able to recover this user!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
var id = $(this).data('id');


$.ajax({
    type:"POST",
    url:"/admin/users/delete/"+id,
    data:{_token: "{{ csrf_token() }}",
    id:id,

    },
})

.then((willDelete) => {


if (willDelete) {

    swal("Poof! user has been deleted!", {
      icon: "success",
    });
  } else {
    swal("User is safe!");
  }
});


    })





</script>
@endsection
