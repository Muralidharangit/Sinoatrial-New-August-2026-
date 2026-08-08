<style>
    .menu.menu-mobile li.active {
        background-color: #ffffff;

    }

    .menu.menu-mobile li.active a {
        color: rgb(232, 104, 0) !important;
        /* background-color: #010101; */

    }

    li.active a {
        /* background-color: #2457aa; */
        color: #2457aa !important;
        font-weight: 700 !important;
    }

    /* li.active a {
            color: white !important;
        } */

    .navbar-area .navbar .navbar-nav .nav-item .nav-link:focus,
    .navbar-area .navbar .navbar-nav .nav-item .nav-link:active,
    .navbar-area .navbar .navbar-nav .nav-item .nav-link.active:focus,
    .navbar-area .navbar .navbar-nav .nav-item .nav-link.active:active,
    a:focus,
    a:active {
        outline: none !important;
        box-shadow: none !important;
        border: none !important;
    }
</style>
<!-- Header Area Start Here -->
<!-- Start Navbar Area -->
<div class="navbar-area style-one" id="navbar">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <ul class="contact-info list-style">
                        <li><i class="flaticon-mail"></i><a href="mailto:info@example.com">sinoatrialservice@gmail.com</a>
                        </li>
                        <li><i class="flaticon-phone-call"></i> 965944
                            68 37 / 98416 98 988</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="contact-info text-lg-end list-style">
                        <li><i class="flaticon-clock"></i>Mon - Sat:
                            09.00 to 6.00, Sunday: Closed</li>
                            {{-- mn --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <!-- <img class="logo-light main-logo" src="{{ asset('user/assets/img/logo.webp') }}" alt="logo">
                <img class="logo-dark main-logo" src="{{ asset('user/assets/img/logo.webp') }}" alt="logo"> -->

                <img class="logo-light main-logo" src="{{ asset('user/assets/img/logo.webp') }}" alt="logo">
                <img class="logo-dark main-logo" src="{{ asset('user/assets/img/logo.webp') }}" alt="logo">
            </a>
            <div class="other-option d-flex align-items-center justify-content-end d-lg-none">
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas" aria-label="Toggle Navigation">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}"
                            class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}"
                            class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li class="nav-item"><a href="{{ route('service') }}"
                            class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a></li>

                    <li class="nav-item"><a href="{{ route('career') }}"
                            class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}">Careers</a></li>

                    <li class="nav-item"><a href="{{ route('product') }}"
                            class="nav-link {{ request()->routeIs('product') || request()->routeIs('category.products') || request()->routeIs('category.allproducts') || request()->routeIs('product') ? 'active' : '' }}">Products</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('gallery') }}"
                            class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}"
                            class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>

                <div class="others-option d-flex align-items-center">
                    <div class="option-item">
                        <!-- <button type="button" class="search-btn" data-bs-toggle="modal" data-bs-target="#searchModal">
              <i class="flaticon-search"></i>
            </button> -->
                    </div>
                  
                    <div class="option-item">
                        <a class="sidebar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                            aria-controls="navbarOffcanvas" aria-label="Open Sidebar Menu">
                            <i class="flaticon-list"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar Area -->





{{-- mobile header starts --}}
<div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="{{ route('home') }}" class="logo d-inline-block">
            <img class="logo-light" src="{{ asset('user/assets/img/logo.webp') }}" alt="logo" width="300" height="60">
            <img class="logo-dark" src="{{ asset('user/assets/img/logo.webp') }}" alt="logo" width="300" height="60">
        </a>
        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="navbarAccordion">

            <div class="accordion-item">
                <a class="accordion-button without-icon active" href="{{ route('home') }}">
                    Home
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('about') }}">
                    About
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon {{ request()->routeIs('service') ? 'active' : '' }}" href="{{ route('service') }}">
                    Services
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon {{ request()->routeIs('career') ? 'active' : '' }}" href="{{ route('career') }}">
                    Careers
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon {{ request()->routeIs('product') ? 'active' : '' }}" href="{{ route('product') }}">
                    Products
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('gallery') }}">
                    Gallery
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('contact') }}">
                    Contact
                </a>
            </div>

        </div>

        <!-- Contact Info Section -->
        <div class="offcanvas-contact-info">
            <h4>Contact Info</h4>
            <ul class="contact-info list-style">
                <li>
                    <i class="flaticon-pin"></i>
                    <p>Sinoatrial Medical Technologies ,
                        No.10A ,F2 First Floor,
                        VGN Nagar,
                        4th main road, Ayyapanthangal,
                        Chennai-600056.</p>
                </li>
                <li>
                    <i class="flaticon-mail"></i>
                    <a href="mailto:info@example.com">sinoatrialservice@gmail.com</a>
                </li>
                <li>
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:+919841698988">+ 98416 98 988</a>
                </li>
                <li>
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:+919659446837">+ 965944 68 37</a>
                </li>
            </ul>
            <ul class="social-profile list-style">
                <li><a href="#" aria-label="Facebook"><i class="ri-facebook-fill"></i></a></li>
                <li><a href="#" aria-label="Instagram"><i class="ri-instagram-line"></i></a></li>
                <li><a href="#" aria-label="LinkedIn"><i class="ri-linkedin-fill"></i></a></li>
                <li><a href="#" aria-label="Twitter"><i class="ri-twitter-fill"></i></a></li>
            </ul>
        </div>

        <!-- Optional for Mobile -->
        <div class="others-option d-lg-none">
            <div class="contact-item">
                <i class="flaticon-emergency-call"></i>
                <span>Phone Number</span>
                <a href="tel:04445428844">044-4542 8844</a>
            </div>
        </div>
    </div>

</div>
{{-- mobile header Ends --}}
<!-- Header Area End Here -->
