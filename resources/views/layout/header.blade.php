<!-- Mobile Nav (max width 767px)-->
<div class="mobile-nav">
    <!-- Navbar Brand -->
    <div class="simpleshopo-navbar-brand">
        <a href="/"><img src="img/core-img/logo.png" alt=""></a>
    </div>
    <!-- Navbar Toggler -->
    <div class="simpleshopo-navbar-toggler">
        <span></span><span></span><span></span>
    </div>
</div>

<!-- Header Area Start -->
<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo">
        <a href="/"><img src="img/core-img/logo.png" alt=""></a>
    </div>
    <!-- SimpleShopo Nav -->
    <nav class="simpleshopo-nav">
        <ul>
            <x-shop-navigation />
        </ul>
    </nav>

    @include('layout/sidebar')
</header>
<!-- Header Area End -->
