<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="/Logo/new-logo.JPG" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">H O G</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #DB261D;color: #fff;">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/Interface/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                    <a href="{{ route('admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.profile') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Profile
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.message') }}" class="nav-link">
                                <i class="far fa-comment"></i>
                                <p>
                                    Message
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                </li>


            </ul>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin.members.birthdate') }}" class="nav-link {{ request()->is('admin/members/birthdate') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-comment"></i>
                    <p>
                        BirthDates
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

            </li>
            <li class="nav-item">
                <a href="{{ route('admin.events') }}" class="nav-link {{ request()->is('admin/events') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-comment"></i>
                    <p>
                        Events
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

            </li>
            <li class="nav-item">
                <a href="{{ route('admin.attendance') }}" class="nav-link {{ request()->is('admin/attendance') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Attendance
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

            </li>
            <li class="nav-item">
                <a href="{{ route('admin.members') }}" class="nav-link {{ request()->is('admin/members') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Members
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

            </li>

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
