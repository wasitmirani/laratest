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

        var id = $(this).data('id');


        $.ajax({
            type:"POST",
            url:"/admin/users/delete/"+id,
            data:{_token: "{{ csrf_token() }}",
            id:id,

            },
            success:function(msg){
               if(msg == 'true'){
                swal( "User Deleted", "success");
                        location.reload();

               }else{
                swal( "Something Went Wrong", "error");
               }

            }

        })
    })

</script>
@endsection
