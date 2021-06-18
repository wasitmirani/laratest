<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        <div class="input-group search-area d-lg-inline-flex d-none">

                        </div>
                    </div>
                </div>
                <ul class="navbar-nav header-right">



                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <div class="header-info">
                                <span class="text-black">Hello,<strong>@if(Auth::check()) {{  Auth::user()->name }} @endif</strong></span>
                                @if (Auth::user()->role_id == 1)
                                <p class="fs-12 mb-0">Member</p>
                                @else
                                <p class="fs-12 mb-0">Super Admin</p>
                                @endif
                            </div>

                            @if(Auth::user()->image == null)

                            <img src="images/profile/17.jpg" width="20" alt="">
                            @else
                            <img src="{{asset('admin/img/users/')}}{{'/'}}{{Auth::user()->image}}" width="20" alt="">
                            @endif


                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route('member.profile')}}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>

                            <a href="{{ route('logout') }}" class="dropdown-item ai-icon"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
