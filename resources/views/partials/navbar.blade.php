<!-- ========== HEADER ========== -->
<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <!-- BRAND -->
        <div class="brand">
            <div class="logo">
                <a href="{{ route("home") }}">
                    <img src={{ asset('images/logo.svg') }} alt="Hotel Himara">
                </a>
            </div>
        </div>
        <!-- MOBILE MENU BUTTON -->
        <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <!-- MAIN MENU -->
        <nav id="main-menu" class="main-menu">
            <ul class="menu">
                <li class="menu-item dropdown active">
                    <a href={{ route('home') }}>HOME</a>
                </li>
                <li class="menu-item dropdown">
                    <a href={{ route('roomslist') }}>ROOMS</a>
                </li>
                <li class="menu-item dropdown">
                    <a href={{ route('staff') }}>TEAM</a>
                </li>
                <li class="menu-item dropdown">
                    <a href={{ route('blog') }}>BLOG</a>
                </li>
                <li class="menu-item dropdown">
                    <a href={{ route('gallery') }}>GALLERY</a>
                </li>
                <li class="menu-item">
                    <a href={{ route('contact') }}>CONTACT US</a>
                </li>
                <li class="menu-item menu-btn">
                    @if (Route::has('login'))
                        @auth
                        @else
                            <a href="{{ route('register') }}" class="btn">
                                <i class="fa fa-user"></i>
                                REGISTER</a>
                        @endauth
                    @endif
                </li>
                <li class="menu-item menu-btn">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/admin/dashboard') }}" class="btn">
                                <i class="fa fa-user"></i>
                                DASHBOARD</a>
                        @else
                            <a href="{{ route('login') }}" class="btn">
                                <i class="fa fa-user"></i>
                                LOG IN</a>
                        @endauth
                    @endif
                </li>
            </ul>
        </nav>
    </div>
</header>
