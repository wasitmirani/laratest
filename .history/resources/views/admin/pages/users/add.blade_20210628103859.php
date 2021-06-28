@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
    <ul class="nav nav-tabs page-header-tab">

    </ul>
    <div class="header-action">
    <a href="{{route('admin.users')}}" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Users</a>
    </div>
    </div>
     </div>
</div>

<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
            @if(isset($user))
            @include('layouts.admin.component.user.editform')
            @else
            @include('layouts.admin.component.user.form')
            @endif

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$("#addUserBtn").on('click',function(){
        var data = [];
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var confirm_password = $("#confirm-password").val();

        $.ajax({
            type:"POST",
            url:"/admin/users",
            data:{_token: "{{ csrf_token() }}",
            name:name,
            email:email,
            password:password
            },
            success:function(msg){
               if(msg == true){
                swal( "User Added", "success");


               }else{
                swal( "Something Went Wrong", "error");
               }

            }

        })
    })
    $("#editUserForm").on('click',function(){
        var data = [];
        // var id = $(this).data('id');
        // var name = $("#name").val();
        // var email = $("#email").val();
        // var password = $("#password").val();
        // var confirm_password = $("#confirm-password").val();

       var data = new FormData();

        $.ajax({
            type:"POST",
            url:"/admin/users/update/"+id,
            data: data,

            success:function(msg){
               if(msg == true){
                swal( "User Updated", "success");


               }else{
                swal( "Something Went Wrong", "error");
               }

            }

        })
    })

    })

</script>
@endsection
