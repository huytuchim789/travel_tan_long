<header class="color-1 hovered menu-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nav"> 
                    <a href="/" class="logo">
                        <h2><span style="font-weight: normal;">Hanoi</span><b>tourist</b></h2>
                    </a>
                    <div class="nav-menu-icon">
                        <a href="#"><i></i></a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li class="type-1">
                                <a href="/">Trang chủ</a>
                            </li>
                            <li class="type-1">
                                <a href="{{ route('blog') }}">Tin tức</a>
                            </li>
                            <li class="type-1">
                                <a href="{{ route('about') }}">Về Chúng Tôi</a>
                            </li>
                            <li class="type-1">
                                <a href="{{ route('privacy') }}">Điều Lệ</a>
                            </li>
                            <li class="type-1">
                                <a href="#">Liên Hệ</a>
                            </li>
                            <li class="type-1">
                                @if (Auth::guest())    
                                    <a href="{{ route('login') }}">Đăng Nhập</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>