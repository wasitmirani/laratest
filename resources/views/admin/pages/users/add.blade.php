@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.component.tabs')
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
                        location.reload();

               }else{
                swal( "Something Went Wrong", "error");
               }

            }

        })
    })
    $("#editUserBtn").on('click',function(){
        var data = [];
        var id = $(this).data('id');
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var confirm_password = $("#confirm-password").val();

        $.ajax({
            type:"POST",
            url:"/admin/users/update/"+id,
            data:{_token: "{{ csrf_token() }}",
            id:id,
            name:name,
            email:email,
            password:password
            },
            success:function(msg){
               if(msg == true){
                swal( "User Updated", "success");
                        location.reload();

               }else{
                swal( "Something Went Wrong", "error");
               }

            }

        })
    })
</script>
@endsection
