<!-- Navigation Bar-->
<header id="topnav" class="defaultscroll scroll-active">
    <!-- Menu Start -->
    <div class="container">
        <!-- Logo container-->
        <div>
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" class="logo-light" height="18"/>
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="logo-dark" height="18"/>
            </a>
        </div>
        <div class="buy-button">
            <a href="{{ route('login') }}" class="btn btn-primary"><i class="mdi mdi-login-variant"></i> Admin Login</a>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('jobs.index') }}">Jobs</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
    <!--end end-->
</header><!--end header-->
<!-- Navbar End -->
