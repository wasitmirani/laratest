@extends('layouts.admin.app')
@section('content')



            <div class="section-body mt-3">
            <div class="container-fluid">
            <div class="row clearfix">
            <div class="col-lg-12">
            <div class="mb-4">
            <h4>Welcome {{Auth::user()->name}}!</h4>
            {{-- <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small> --}}
            </div>
            </div>
            </div>
            <div class="row clearfix">
            <div class="col-6 col-md-4 col-xl-2">
            <div class="card">
            <div class="card-body ribbon">
            <div class="ribbon-box green">5</div>
            <a href="{{route('admin.users')}}" class="my_sort_cut text-muted">
            <i class="icon-users"></i>
            <span>Users</span>
            </a>
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
            <div class="card">
            <div class="card-body">
            <a href="hr-holidays.html" class="my_sort_cut text-muted">
            <i class="icon-like"></i>
            <span>Holidays</span>
            </a>
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
            <div class="card">
            <div class="card-body ribbon">
            <div class="ribbon-box orange">8</div>
            <a href="hr-events.html" class="my_sort_cut text-muted">
            <i class="icon-calendar"></i>
            <span>Events</span>
            </a>
            </div>
            </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
            <div class="card">
            <div class="card-body">
            <a href="hr-payroll.html" class="my_sort_cut text-muted">
            <i class="icon-credit-card"></i>
            <span>Payroll</span>
            </a>
            </div>
            </div>
            </div>


            </div>
            </div>
            </div>
             <div class="section-body">
            <div class="container-fluid">

            <div class="row clearfix">
            <div class="col-12 col-sm-12">
            <div class="card">
             <div class="card-header">
            <h3 class="card-title">Project Summary</h3>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
            <thead>
            <tr>
            <th>#</th>
            <th>Client Name</th>
            <th>Team</th>
            <th>Project</th>
            <th>Project Cost</th>
            <th>Payment</th>
            <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>#AD1245</td>
            <td>Sean Black</td>
            <td>
            <ul class="list-unstyled team-info sm margin-0 w150">
            <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
            <li class="ml-2"><span>2+</span></li>
            </ul>
            </td>
            <td>Angular Admin</td>
            <td>$14,500</td>
            <td>Done</td>
            <td><span class="tag tag-success">Delivered</span></td>
            </tr>
            <tr>
            <td>#DF1937</td>
            <td>Sean Black</td>
            <td>
            <ul class="list-unstyled team-info sm margin-0 w150">
            <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
            <li class="ml-2"><span>2+</span></li>
            </ul>
            </td>
            <td>Angular Admin</td>
            <td>$14,500</td>
            <td>Pending</td>
            <td><span class="tag tag-success">Delivered</span></td>
            </tr>
            <tr>
            <td>#YU8585</td>
            <td>Merri Diamond</td>
             <td>
            <ul class="list-unstyled team-info sm margin-0 w150">
            <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
            </ul>
            </td>
            <td>One page html Admin</td>
            <td>$500</td>
            <td>Done</td>
            <td><span class="tag tag-orange">Submit</span></td>
            </tr>
            <tr>
            <td>#AD1245</td>
            <td>Sean Black</td>
            <td>
            <ul class="list-unstyled team-info sm margin-0 w150">
            <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
            </ul>
            </td>
            <td>Wordpress One page</td>
            <td>$1,500</td>
            <td>Done</td>
            <td><span class="tag tag-success">Delivered</span></td>
            </tr>
            <tr>
            <td>#GH8596</td>
            <td>Allen Collins</td>
            <td>
            <ul class="list-unstyled team-info sm margin-0 w150">
            <li><img src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
            <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
            <li><img src="{{('assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
            <li class="ml-2"><span>2+</span></li>
            </ul>
            </td>
            <td>VueJs Application</td>
            <td>$9,500</td>
            <td>Done</td>
            <td><span class="tag tag-success">Delivered</span></td>
            </tr>
            </tbody>
            </table>
            </div>
            </div>
            </div>
        </div>
    </div>
    </div>
@endsection
