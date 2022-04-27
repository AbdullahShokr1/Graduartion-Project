<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{URL::asset('dashboardfile/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{URL::asset('dashboardfile/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info nav nav-pills nav-sidebar flex-column">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard.users.index')}}" class="nav-link">
                        <i class="fas fa-user-friends"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.admins.index')}}" class="nav-link">
                        <i class="fas fa-user-shield"></i>
                        <p>
                            Admins
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.products.index')}}" class="nav-link">
                        <i class="fas fa-glasses"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-truck"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-check"></i>
                        <p>
                            Payment
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-bill-alt"></i>
                        <p>
                            Sales
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        <p>
                            Shopping Cart
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.contact.index')}}" class="nav-link">
                        <i class="fas fa-headset"></i>
                        <p>
                            Messages
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fab fa-blogger"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard.post.index')}}" class="nav-link">
                                <i class="fas fa-file-powerpoint"></i>
                                <p>Posts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard.category.index')}}" class="nav-link">
                                <i class="fas fa-cubes"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cogs"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard.post.index')}}" class="nav-link">
                                <i class="fas fa-file-powerpoint"></i>
                                <p>Home Pgae</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard.category.index')}}" class="nav-link">
                                <i class="fas fa-cubes"></i>
                                <p>About Us Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <p style="cursor: pointer">
                        <form method="POST" action="{{ route('dashboard.logout') }}">
                            @csrf
                            <a :href="route('logout')"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();" class="nav-link" style="cursor: pointer">
                                <i class="fas fa-sign-out-alt"></i> Log Out
                            </a>
                        </form>
                    </p>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
