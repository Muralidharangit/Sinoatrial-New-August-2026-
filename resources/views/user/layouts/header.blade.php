<!-- Header Area Start Here -->
<!-- Start Header Top Bar -->
<div class="header-top-bar d-none d-lg-block">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
            <!-- Left Info List -->
            <ul class="header-top-list">
                <li class="header-top-item">
                    <i class="ri-phone-line"></i>
                    <a href="tel:04445428844">044-4542 8844</a>
                    <span class="mx-1 text-black-50">|</span>
                    <a href="tel:+919659446837">+91 96594 46837</a> / <a href="tel:+919841698988">98416 98988</a>
                </li>
               
            </ul>

            <!-- Right Info List -->
            <ul class="header-top-list">
              <li class="header-top-item">
                    <i class="ri-mail-line"></i>
                    <a href="mailto:sinoatrialservice@gmail.com">sinoatrialservice@gmail.com</a>
                    <span class="mx-1 text-black-50">|</span>
                    <a href="mailto:sinoatrialmedical@gmail.com">sinoatrialmedical@gmail.com</a>
                </li>
               
            </ul>
        </div>
    </div>
</div>
<!-- End Header Top Bar -->

<!-- Start Main Navbar Area -->
<div class="main-navbar-wrap style-one" id="navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0 align-items-center justify-content-between">
            
            <!-- Brand Logo -->
            <a class="navbar-brand py-2" href="{{ route('home') }}">
                <img class="logo-light main-logo" src="{{ asset('user/assets/img/logo.webp') }}" alt="Sinoatrial Medical Technologies Logo">
            </a>

            <!-- Desktop Menu Nav Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link modern-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link modern-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('service') }}" class="nav-link modern-nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('product') }}" class="nav-link modern-nav-link {{ request()->routeIs('product') || request()->routeIs('category.products') || request()->routeIs('category.allproducts') ? 'active' : '' }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gallery') }}" class="nav-link modern-nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('career') }}" class="nav-link modern-nav-link {{ request()->routeIs('career') ? 'active' : '' }}">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link modern-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Right Actions: Get In Touch Button & Mobile Hamburger Toggle -->
            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('contact') }}" class="get-in-touch-btn d-none d-sm-inline-flex">
                    Get In Touch <i class="ri-arrow-right-line"></i>
                </a>

                <button class="header-mobile-toggle d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-label="Toggle Navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
            </div>
        </nav>
    </div>
</div>
<!-- End Main Navbar Area -->

<!-- Mobile Offcanvas Navbar Drawer -->
<div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="{{ route('home') }}" class="logo d-inline-block">
            <img src="{{ asset('user/assets/img/logo.webp') }}" alt="Sinoatrial Logo" height="42">
        </a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="mobile-nav-list">
            <li class="mobile-nav-item">
                <a class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="mobile-nav-item">
                <a class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            </li>
            <li class="mobile-nav-item">
                <a class="mobile-nav-link {{ request()->routeIs('service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
            </li>
            <li class="mobile-nav-item">
                <a class="mobile-nav-link {{ request()->routeIs('product') ? 'active' : '' }}" href="{{ route('product') }}">Products</a>
            </li>
            <li class="mobile-nav-item">
                <a class="mobile-nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
            </li>
            <li class="mobile-nav-item">
                <a class="mobile-nav-link {{ request()->routeIs('career') ? 'active' : '' }}" href="{{ route('career') }}">Careers</a>
            </li>
            <li class="mobile-nav-item">
                <a class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>

        <div class="pt-2 mb-4">
            <a href="{{ route('contact') }}" class="get-in-touch-btn w-100 justify-content-center">
                Get In Touch <i class="ri-arrow-right-line"></i>
            </a>
        </div>

        <!-- Contact Info Section -->
        <div class="offcanvas-contact-info pt-3 border-top">
            <h5 class="fw-bold mb-3" style="color: #03348e; font-size: 15px;">Contact Info</h5>
            <ul class="list-unstyled mb-0" style="font-size: 13px; color: #475569;">
                <li class="d-flex align-items-start gap-2 mb-2">
                    <i class="ri-map-pin-line mt-1" style="color: #03348e; flex-shrink: 0;"></i>
                    <span>No.10A, F2 First Floor, VGN Nagar, 4th Main Road, Ayyapanthangal, Chennai - 600056.</span>
                </li>
                <li class="d-flex align-items-start gap-2 mb-2">
                    <i class="ri-phone-line mt-1" style="color: #03348e; flex-shrink: 0;"></i>
                    <div class="d-flex flex-column">
                        <a href="tel:04445428844" style="color: inherit; text-decoration: none;">044-4542 8844</a>
                        <a href="tel:+919659446837" style="color: inherit; text-decoration: none;">+91 96594 46837 / 98416 98988</a>
                    </div>
                </li>
                <li class="d-flex align-items-start gap-2 mb-2">
                    <i class="ri-mail-line mt-1" style="color: #03348e; flex-shrink: 0;"></i>
                    <div class="d-flex flex-column" style="word-break: break-all;">
                        <a href="mailto:sinoatrialservice@gmail.com" style="color: inherit; text-decoration: none;">sinoatrialservice@gmail.com</a>
                        <a href="mailto:sinoatrialmedical@gmail.com" style="color: inherit; text-decoration: none;">sinoatrialmedical@gmail.com</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Header Area End Here -->
