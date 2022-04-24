<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Trang chủ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Liên Hệ</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <div class="media-body">
                            <h3 class="dropdown-item-title text-center">
                                @if (Auth::user()->name)
                                    {{ ucfirst(Auth::user()->name) }}
                                @endif
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">Đăng xuất</a>
                <form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
                    @csrf
                </form>
            </div>
        </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('admin.home') }}" class="brand-link">
            <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <span class="brand-text font-weight-light">HaNoi<b>Tourist</b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="info">
                    <a href="#" class="d-block">{{ ucfirst(Auth::user()->name) }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
            {{-- <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Starter Pages
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Active Page</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inactive Page</p>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('tour.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                        Tour trong nước
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tour-special.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                        Tour Nước Ngoài
                    </p>
                </a>
            </li>
            @can('tour_guide', Auth::user())    
                <li class="nav-item">
                    <a href="{{ route('tour-guide.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Hướng Dẫn Viên
                        </p>
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route('blog.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                        Tin tức
                    </p>
                </a>
            </li>
            @can('blog_category', Auth::user())    
            <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                        Danh mục tin tức
                    </p>
                </a>
            </li>
            @endcan
            @can('blog_tag', Auth::user())
                <li class="nav-item">
                    <a href="{{ route('tag.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Tag tin tức
                        </p>
                    </a>
                </li>
            @endcan

            <!-- @can('role', Auth::user())           
                <li class="nav-item">
                    <a href="{{ route('role.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Vai trò
                        </p>
                    </a>
                </li>
            @endcan -->

            <!-- @can('permission', Auth::user())
                <li class="nav-item">
                    <a href="{{ route('permission.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Quyền
                        </p>
                    </a>
                </li>
            @endcan -->
            
            @can('user', Auth::user())
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Người dùng
                        </p>
                    </a>
                </li>
            @endcan            
            
            @can('message', Auth::user())
                <li class="nav-item">
                    <a href="{{ route('message.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Danh sách đặt hàng
                        </p>
                    </a>
                </li>
            @endcan            
        </ul>
    </nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>