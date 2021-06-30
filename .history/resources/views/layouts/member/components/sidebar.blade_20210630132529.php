<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a  href="{{route('member.dashboard')}}">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">My Bookings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('member.bookings')}}">My Bookings</a></li>
                    <li><a href="{{route('member.tours')}}">My Tours</a></li>

                    <li><a href="{{route('member.upcoming.tours')}}">Upcomming Tours</a></li>

                 <!--   <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="ecom-product-list.html">Product List</a></li>
                            <li><a href="ecom-product-detail.html">Product Details</a></li>
                            <li><a href="ecom-product-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-invoice.html">Invoice</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>-->
                </ul>
            </li>



            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-settings-2"></i>
                <span class="nav-text">Setting</span>
            </a>
            <ul aria-expanded="false">

                <li><a href="{{route('member.profile')}}">Account Setting</a></li>

                <!--<li><a class="has-arrow" href="javascript:void()" aria-expanded="false"></a>
                    <ul aria-expanded="false">
                        <li><a href="ecom-product-grid.html">Product Grid</a></li>
                        <li><a href="ecom-product-list.html">Product List</a></li>
                        <li><a href="ecom-product-detail.html">Product Details</a></li>
                        <li><a href="ecom-product-order.html">Order</a></li>
                        <li><a href="ecom-checkout.html">Checkout</a></li>
                        <li><a href="ecom-invoice.html">Invoice</a></li>
                        <li><a href="ecom-customers.html">Customers</a></li>
                    </ul>
                </li>-->
            </ul>
        </li>


        <li>  <a href="{{ route('logout') }}" class=" ai-icon" style="padding: 15px 25px;
            font-size: 16px;"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" name="image" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            <span class="ml-2">Logout </span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </li>
        </ul>

        <div class="copyright">
            <p><strong>{{config('app.name')}} Member Dashboard</strong> © {{date('Y')}} All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by {{config('app.name')}}</p>
        </div>
    </div>
</div>
