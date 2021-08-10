@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="card-title">Packages</h3>
    <ul class="nav nav-tabs page-header-tab">

    </ul>
    <div class="header-action mt-2">
    <a href="{{route('admin.packages')}}" class="btn btn-primary">Packages</a>
    </div>
    </div>
     </div>
</div>

<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">


            @include('layouts.admin.component.package.form')


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
$("#addPackageForm").on('submit',function(e){
    e.preventDefault()

    var data = new FormData(this);

$.ajax({
    type:"POST",
    url:"/admin/packages",
    data: data,
    processData: false,
    contentType: false,
    success:function(msg){

       if(msg == true){
        swal( "Package Added", "success");


       }else{

        swal( "Something Went Wrong", "error");
       }

    },
    error: function (err) {
        if (err.status == 422) { // when status code is 422, it's a validation issue


        var errors = err.responseJSON.errors
console.log(JSON.stringify(errors))
$('#errors').empty()
    jQuery.each(errors, (index, item) => {

        $('#errors').fadeIn().append("<p class='alert alert-warning alert-dismissible fade show'>"+item+"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button><p>");

});


    console.log(err.responseJSON.errors)
    JQuery.each(err.responseJSON.message, (index, item) => {

        $('#errors').fadeIn().append("<p class='alert alert-danger'>"+item+"<p>");

    })


        }
    }

})

    })

    $("#editPackageForm").on('submit',function(e){
    e.preventDefault()
    var id = $("#id").val();

    var data = new FormData(this);

$.ajax({
    type:"POST",
    url:"/admin/packages/update/"+id,
    data: data,
    processData: false,
    contentType: false,
    success:function(msg){

       if(msg == true){
        swal( "Package Updated", "success");


       }else{

        swal( "Something Went Wrong", "error");
       }

    },
    error: function (err) {
        if (err.status == 422) { // when status code is 422, it's a validation issue

    console.log(err.responseJSON.errors)
    JQuery.each(err.responseJSON.errors,function(item, value){
        $('#errors').fadeIn().append("<p class='alert alert-danger'>"+value+"<p>");

    })

        }
    }

})

    })



    })

</script>

@endsection
