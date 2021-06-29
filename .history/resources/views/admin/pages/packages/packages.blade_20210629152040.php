@extends('layouts.admin.app')
@section('content')
<div class="section-body">
    <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
    <ul class="nav nav-tabs page-header-tab">
        <h3>Packages</h3>
    </ul>
    <div class="header-action mt-2">
    <a href="{{route('admin.packages.create')}}" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add</a>
    </div>
    </div>
     </div>
</div>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="tab-content mt-3">
            @include('layouts.admin.component.package.table')


        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('.dltPackageBtn').on('click',function(){

            var id = $(this).data('id');

            $.ajax({
                type:"POST",
                url:"admin/package/delete/"+id,
                data:{
                    id:id,
                    _token: "{{ csrf_token() }}",

                },
                success:function(msg){
                    consle.log(msg)

                }
            })

        })

    })

</script>
@endsection
