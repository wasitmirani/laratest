@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.component.tabs')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
@if (isset($location))
@include('layouts.admin.component.location.editForm')
@else
@include('layouts.admin.component.location.addForm')

@endif


        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $('#editLocationBtn').on('click',function(){

        var id = $(this).data('id');
        var name = $("#name").val()
        $.ajax({
            type:"POST",
            url:"/admin/locations/update/"+id,
            data:{
            _token: "{{ csrf_token() }}",
            id:id,
            name:name},
            success:function(data)
            {
                if(data == true){
                    swal("LOCATION UPDATED SUCCESSFULLY");
                }else{
                    swal("FAILED TO UDATE LOCATION");
                }

            }


        })


    })
</script>
@endsection
