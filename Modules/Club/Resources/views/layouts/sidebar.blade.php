<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                 <li class="nav-item has-treeview menu-open">
                    <a href="/club/" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{trans('admin_sidebar.dashboard')}}
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="{{route('roles.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Roles</p>

                    </a>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="{{route('users.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>  users </p>
                    </a>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="{{route('sportTypes.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-football-ball"></i>
                        <p>  sport types </p>
                    </a>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="{{route('teams.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>  Teams </p>
                    </a>
                </li>
                <li class="nav-item has-treeview ">
                    <a href="{{route('sportsProperty.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-table-tennis"></i>
                        <p>  Sport Properties </p>
                    </a>
                </li>
                <li class="nav-item has-treeview ">
                    <a href="{{route('sportsPropertiesValue.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-table-tennis"></i>
                        <p>  Sport Properties Values </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
