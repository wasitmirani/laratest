<div class="tab-pane fade active show" id="user-list" role="tabpanel">
<div class="card">
<div class="card-header">
<h3 class="card-title">User List</h3>
<div class="card-options">
<form>
<div class="input-group">
<input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
<span class="input-group-btn ml-2"><button class="btn btn-sm btn-default" type="submit"><span class="fe fe-search"></span></button></span>
</div>
</form>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-hover table-vcenter text-nowrap mb-0">
<thead>
<tr>
<th class="w60">Name</th>

<th></th>
<th>Created Date</th>
<th>Role</th>
<th class="w100">Action</th>
</tr>
</thead>
<tbody>
    @foreach($users as $user)
<tr>
<td class="width45">
    <img src="{{asset('admin/img/users/'.$user->image)}}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
</td>
<td>
<h6 class="mb-0">{{$user->name}}</h6>
<span>{{$user->email}}</span>

<td>24 Jun, 2015</td>
</td>
<td>@if ($user->role_id == 1)
    <span class="tag tag-primary">Member</span>
@else
<span class="tag tag-danger">Admin</span>
@endif</td>
<td>
    <button type="button" class="btn btn-icon" title="Edit"><i class="fa fa-edit"></i></button>
    <button type="button" class="btn btn-icon js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
    </td>
</tr>

@endforeach





</tbody>
</table>
</div>
</div>
</div>
</div>
