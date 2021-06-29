<div id="left-sidebar" class="sidebar ">
    <h5 class="brand-name">MAUI Admin<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
    <nav id="left-sidebar-nav" class="sidebar-nav">
    <ul class="metismenu">

    <li class="active">
          <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-grid"></i><span>Dashboard</span></a>
           <ul>
            <li class="active"><a href="{{route('admin.dashboard')}}"><span>Dashboard</span></a></li>
         </ul>
    </li>
    <li>
        <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-user"></i><span>Users</span></a>
         <ul>
            <li><a href="{{route('admin.users')}}"><span>Users</span></a></li>
            <li><a href="{{route('admin.users.create')}}"><span>Add User</span></a></li>
       </ul>
  </li>
  <li>
    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-calendar"></i><span>Bookings</span></a>
     <ul>
        <li><a href="{{route('admin.bookings')}}"><span>Bookings</span></a></li>

        <li><a href="{{route('admin.bookings.create')}}"><span>Add Booking</span></a></li>
   </ul>
</li>
<li>
    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-calendar"></i><span>Package</span></a>
     <ul>
        <li><a href="{{route('admin.bookings')}}"><span>Packages</span></a></li>

        <li><a href="{{route('admin.bookings.create')}}"><span>Add Package</span></a></li>
   </ul>
</li>
<li>
    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-calendar"></i><span>Tours</span></a>
     <ul>
        <li><a href="{{route('admin.bookings')}}"><span>Tours</span></a></li>

        <li><a href="{{route('admin.bookings.create')}}"><span>Upcomming Tours</span></a></li>
   </ul>
</li>
<li>
    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-map"></i><span>Locations</span></a>
     <ul>
        <li><a href="{{route('admin.locations')}}"><span>Locations</span></a></li>
        <li><a href="{{route('admin.locations.create')}}"><span>Add Locations</span></a></li>
   </ul>
</li>










    </ul>
    </nav>
    </div>
