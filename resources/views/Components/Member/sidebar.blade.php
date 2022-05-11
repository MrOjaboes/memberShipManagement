<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/Logo/new-logo.JPG" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">H O G</span>
    </a>
      {{-- dc3545 --}}
    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #DB261D;color:#fff;">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/Interface/dist/img/AdminLTELogo.PNG" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <b> <a href="#" class="d-block">{{ Auth::user()->name }}</a></b>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('home/profile') ? 'active' : '' || request()->is('home/profile/update') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">


                        <li class="nav-item">
                            <a href="{{ route('home.profile') }}" class="nav-link {{ request()->is('home/profile') ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>


                </li>


            </ul>
            </li>

            {{-- @if (Auth::user()->user_type == 1)
            <li class="nav-item">
                <a href="{{ route('home.profile') }}" class="nav-link {{ request()->is('home/profile') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Leaders Event</p>
                </a>
            </li>
            @endif --}}


            <li class="nav-item">
                <a id="logout" href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </a>
            </li>


            </ul>
            </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
