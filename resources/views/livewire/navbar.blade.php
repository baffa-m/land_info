<div>
    {{-- Be like water. --}}

    <!-- Navbar Start -->
    <header id="topnav" class="defaultscroll sticky px-20">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="{{ url("/")}}">
                <span class="logo-light-mode">
                    <h1 class="text-white">Land Sales</h1>
                </span>
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-inline mb-0">

                @auth
                <li class="list-inline-item mb-0 ms-1">
                    <div class="dropdown dropdown-primary">
                        <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/avatar.png')}}" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                        <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                            <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="#">
                                <img src="{{ asset('assets/images/avatar.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                <div class="flex-1 ms-2">
                                    <span class="d-block">{{ auth()->user()->name }}</span>
                                    <small class="text-muted"></small>
                                </div>
                            </a>
                            <form action="{{ route('logout')}}" method="post">
                                @csrf
                                <button class="dropdown-item text-dark"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> Logout</button>
                            </form>
                        </div>
                    </div>
                </li>
                @else
                <li class="list-inline-item mb-0">
                    <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <div class="login-btn-primary"><span class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="log-in" class="fea icon-sm"></i></span></div>
                        <div class="login-btn-light"><span class="btn btn-icon btn-pills btn-light"><i data-feather="log-in" class="fea icon-sm"></i></span></div>
                    </a>
                </li>
                @endauth
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu {{ request()->routeIs(['index', 'buy.land', 'sell.land']) ? 'nav-light' : '' }} nav-right">
                    <li><a href="{{ route('index')}}" class="sub-menu-item">Home</a></li>
                    <li><a wire:click.prevent="checkAuth" href="{{ route('sell.land')}}" class="sub-menu-item">Sell</a></li>
                    <li><a href="{{ route('buy.land')}}" class="sub-menu-item">Buy</a></li>
                    <li><a href="{{ route('firms')}}" class="sub-menu-item">Consult Our Experts</a></li>
                    <li><a href="{{ route('about.us') }}" class="sub-menu-item">About Us</a></li>
                    <li><a href="{{ route('contact.us') }}" class="sub-menu-item">Contact us</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->

</div>
