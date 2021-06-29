<div class="tab-pane fade active show" id="user-list" role="tabpanel">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Packages List</h3>
    <div class="card-options">
    <form>
    <div class="input-group">

    </div>
    </form>
    </div>
    </div>
    <div class="card-body">
    <div class="table-responsive">

        <table class="table table-hover js-basic-example dataTable table_custom border-style spacing5">
            <thead>
    <tr>



    <th>#</th>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
    <th>Location</th>
    <th>Thmbnail</th>
    <th class="w100">Action</th>
    </tr>
    </thead>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Location</th>
            <th>Thmbnail</th>
            <th class="w100">Action</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach($packages as $package)
    <tr>
    <td class="width45">{{$package->id}}</td>
    <td>{{$package->name}}</td>
    <td>{{$package->description}}</td>
    <td>${{$package->price}}</td>
    @if(isset($package->locations->name))
    <td>{{$package->locations->name}}</td>
    @else
    <td>-</td>
    @endif
    <td><img src="{{asset('/admin/img/package/'.$package->thumbnail)}}"></td>
    <td>
        <a href="{{route('admin.packages.edit',$package->id)}}" class="btn btn-icon" title="Edit"  ><i class="fa fa-edit"></i></a>
        <button type="button"  class="btn btn-icon dltLocationBtn js-sweetalert" data-id="{{$package->id}}""  title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></utton>
    </td>
    </tr>

    @endforeach





    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
