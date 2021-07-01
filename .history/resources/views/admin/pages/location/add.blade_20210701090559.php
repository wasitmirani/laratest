@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
    <ul class="nav nav-tabs page-header-tab">
        <h3>Locations</h3>
    </ul>
    <div class="header-action mt-2">
    <a href="{{route('admin.locations')}}" class="btn btn-primary">Locations</a>
    </div>
    </div>
     </div>
</div>

<div class="section-body mt-3">
    <div class="container-fluid">
        <p class="errors"></p>
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
                    swal("FAILED TO UPDATE LOCATION");
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
  text:  data,

 });

    },
    error:function(data){

if (data.status == 422) { // when status code is 422, it's a validation issue

     var errors = err.responseJSON.errors
    console.log(JSON.stringify(errors))
$('#errors').empty()
jQuery.each(errors, (index, item) => {

$('#errors').fadeIn().append("<p class='alert alert-danger'>"+item+"<p>");

});

}



}


})


})
</script>
@endsection
