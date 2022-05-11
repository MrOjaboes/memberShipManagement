<nav class="main-header navbar navbar-expand" style="background-color:#fff;color:#000">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        @if (Auth::user()->user_type == 0 || Auth::user()->user_type == 1)
        <li class="nav-item">
            <b><a class="nav-link {{ request()->is('home/profile') ? 'active' : '' || request()->is('home/profile/update') ? 'active' : '' }}"
                    href="{{ route('home.profile') }}">Profile</a></b>
        </li>
        @endif
        @if (Auth::user()->user_type == 2)
            <li class="nav-item">
                <b><a class="nav-link {{ request()->is('admin/external-event') ? 'active' : '' }}"
                        href="{{ route('admin.event.external') }}">External Event</a></b>
            </li>
            <li class="nav-item">
                <b><a class="nav-link {{ request()->is('admin/leaders-event') ? 'active' : '' }}"
                        href="{{ route('admin.event.leaders') }}">Leaders Event</a></b>
            </li>
            <li class="nav-item">
                <b><a class="nav-link {{ request()->is('admin/members') ? 'active' : '' }}"
                        href="{{ route('admin.members') }}">Members</a></b>
            </li>
        @endif


    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
       @if (Auth::user()->user_type == 1 || Auth::user()->user_type == 0)
       <li class="nav-item">
        <a class="nav-link" href="{{ route('member.messages') }}">
            <i class="fas fa-bell fa-2x"></i>
            <span class="badge badge-dark br-5 navbar-badge">
                @php
                $messages = DB::table('messages')
                      ->where('reciever_id', '=',auth()->user()->id)
                      ->where(function ($query) {
                          $query->where('is_read', '=', 0);
                      })
                      ->count('message');
                      @endphp
                <b class="text-white">{{ $messages }}</b></span>
        </a>
        {{-- <div class="navbar-search-block">
            <form class="form-inline">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div> --}}
    </li>
       @endif

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <span><b>{{ Auth()->user()->name }} <i class="nav-icon fas fa-angle-down"></i></b></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                {{-- <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <p>Settings</p>
                    <!-- Message End -->
                </a> --}}
                <div class="dropdown-divider"></div>

                <div class="dropdown-divider"></div>
                <a id="logout" href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">

                    <p>
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        Logout

                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </a>


            </div>
        </li>
        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
