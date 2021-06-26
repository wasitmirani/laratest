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
    $('#addLocationBtn').on('click',function(){

var name = $("#name").val()
$.ajax({
    type:"POST",
    url:"/admin/locations",
    data:{
    _token: "{{ csrf_token() }}",
    name:name},
    success:function(data)
    {
        swal({
  title: "",
  text:  + testVar,

 });

    }


})


})
</script>
@endsection
