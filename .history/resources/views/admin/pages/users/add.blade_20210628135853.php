@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
    <ul class="nav nav-tabs page-header-tab">

    </ul>
    <div class="header-action mt-2">
    <a href="{{route('admin.users')}}" class="btn btn-primary">Users</a>
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
$("#addUserForm").on('submit',function(e){
    e.preventDefault()
        var data = [];
        // var name = $("#name").val();
        // var email = $("#email").val();
        // var password = $("#password").val();
        // var confirm_password = $("#confirm-password").val();

        var data = new FormData(this);

        $.ajax({
            type:"POST",
            url:"/admin/users",
            data: data,
            processData: false,
            contentType: false,
            success:function(msg){

               if(msg == true){
                swal( "User Added", "success");


               }else{

                swal( "Something Went Wrong", "error");
               }

            },
            error: function (err) {
                if (err.status == 422) { // when status code is 422, it's a validation issue
            swal(err.responseJSON);
            console.log(err.responseJSON)
                }
            }

        })
    })
    $("#editUserForm").on('submit',function(e){
        e.preventDefault()

        var data = [];
        //  var id = $(this).data('id');
          var id = $("#id").val();
        // var name = $("#name").val();
        // var email = $("#email").val();
        // var password = $("#password").val();
        // var confirm_password = $("#confirm-password").val();

       var data = new FormData(this);

        $.ajax({
            type:"POST",
            url:"/admin/users/update/"+id,
            data: data,
            processData: false,
            contentType: false,
            success:function(msg){
                console.log(msg)
               if(msg == true){
                swal( "User Updated", "success");
               }else{
                swal("Something Went Wrong", "error");
               }

            }

        })
    })

    })

</script>
@endsection
