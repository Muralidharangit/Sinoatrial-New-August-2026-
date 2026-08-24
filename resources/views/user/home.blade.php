<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="Sinoatrial Medical Technologies delivers state-of-the-art medical equipment across India. Explore our advanced ICU ventilators, 4D ultrasound imaging systems, and patient monitors." />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sinoatrial Medical Technologies</title>
    @include('user.layouts.link')
</head>

<body>
    <!-- preloader start-->
    @include('user.layouts.loader')
    <!-- preloader start end-->

    <!--header start-->
    @include('user.layouts.header', ['categories' => $categories])
    <!--header end-->

    <main>

    <!-- Start Search Modal -->
    <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <input type="text" class="form-control" placeholder="Search here....">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ri-close-fill"></i></button>
            </div>
        </div>
    </div>
    <!-- End Search Modal -->

    <!-- laptop Swiper Full Image Banner Carousel -->
    <div class="hero-swiper-wrapper full-banner-wrapper d-none d-md-block">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">

                <!-- Banner Slide 1 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/bn1.png') }}" alt="Sinoatrial Medical Technology Banner 1" class="hero-banner-img">
                </div>

                <!-- Banner Slide 2 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/bn2.png') }}" alt="Sinoatrial Medical Technology Banner 2" class="hero-banner-img">
                </div>

                <!-- Banner Slide 3 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/bn3.png') }}" alt="Sinoatrial Medical Technology Banner 3" class="hero-banner-img">
                </div>

                <!-- Banner Slide 4 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/bn4.png') }}" alt="Sinoatrial Medical Technology Banner 4" class="hero-banner-img">
                </div>

                <!-- Banner Slide 5 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/bn5.png') }}" alt="Sinoatrial Medical Technology Banner 5" class="hero-banner-img">
                </div>

            </div>

            <!-- Swiper Controls -->
            <div class="swiper-button-prev hero-swiper-prev"></div>
            <div class="swiper-button-next hero-swiper-next"></div>
            <div class="swiper-pagination hero-swiper-pagination"></div>
        </div>
    </div>

    <!-- mobile Swiper Full Image Banner Carousel -->
    <div class="hero-swiper-wrapper full-banner-wrapper d-block d-md-none">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">

                <!-- Mobile Banner Slide 1 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/mb1.png') }}" alt="Sinoatrial Medical Technology Mobile Banner 1" class="hero-banner-img">
                </div>

                <!-- Mobile Banner Slide 2 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/mb2.png') }}" alt="Sinoatrial Medical Technology Mobile Banner 2" class="hero-banner-img">
                </div>

                <!-- Mobile Banner Slide 3 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/mb3.png') }}" alt="Sinoatrial Medical Technology Mobile Banner 3" class="hero-banner-img">
                </div>

                <!-- Mobile Banner Slide 4 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/mb4.png') }}" alt="Sinoatrial Medical Technology Mobile Banner 4" class="hero-banner-img">
                </div>

                <!-- Mobile Banner Slide 5 -->
                <div class="swiper-slide hero-banner-slide">
                    <img src="{{ asset('user/assets/img/hero/mb5.png') }}" alt="Sinoatrial Medical Technology Mobile Banner 5" class="hero-banner-img">
                </div>

            </div>

            <!-- Swiper Controls -->
            <div class="swiper-button-prev hero-swiper-prev"></div>
            <div class="swiper-button-next hero-swiper-next"></div>
            <div class="swiper-pagination hero-swiper-pagination"></div>
        </div>
    </div>



       <!-- About Section Start -->
    <div class="about-section-wrap position-relative">
        <div class="container">
            <div class="row align-items-center gx-lg-5 gy-4 flex-column-reverse flex-lg-row">
                
                <!-- Left Column: Doctor Image + 3 Stat Cards -->
                <div class="col-lg-5 col-12" data-aos="fade-right" data-aos-delay="100">
                    <div class="about-doctor-card">
                        <img src="{{ asset('user/assets/img/about/about-doctor.png') }}" 
                             alt="15 Years of Trusted Service in Medical Technology" 
                             class="about-doctor-img" loading="lazy">
                        
                        <!-- 3 Stat Cards Row -->
                        <div class="about-stats-container">
                            <div class="row g-2">
                                <div class="col-4">
                                    <div class="about-stat-card">
                                        <div class="stat-icon-wrapper">
                                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="44" height="44" rx="12" fill="url(#stat_bg_1)"/>
                                                <path d="M22 10L25.1 16.3L32 17.3L27 22.2L28.2 29L22 25.7L15.8 29L17 22.2L12 17.3L18.9 16.3L22 10Z" fill="#03348e" fill-opacity="0.15" stroke="#03348e" stroke-width="2" stroke-linejoin="round"/>
                                                <path d="M17 28L15 34L22 31L29 34L27 28" stroke="#dc0307" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <circle cx="22" cy="20" r="4" fill="#dc0307"/>
                                                <defs>
                                                    <linearGradient id="stat_bg_1" x1="0" y1="0" x2="44" y2="44" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#03348e" stop-opacity="0.1"/>
                                                        <stop offset="1" stop-color="#dc0307" stop-opacity="0.08"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="stat-number-blue">15+</div>
                                        <p class="stat-text-muted">Years Experience</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="about-stat-card">
                                        <div class="stat-icon-wrapper">
                                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="44" height="44" rx="12" fill="url(#stat_bg_2)"/>
                                                <path d="M14 19C14 14.6 17.6 11 22 11C26.4 11 30 14.6 30 19C30 25.5 22 31 22 31C22 31 14 25.5 14 19Z" fill="#dc0307" fill-opacity="0.15" stroke="#dc0307" stroke-width="2" stroke-linejoin="round"/>
                                                <path d="M17 19H20L21.5 16L23.5 22L25 18L26.5 19H29" stroke="#03348e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <circle cx="22" cy="11" r="2.5" fill="#dc0307"/>
                                                <defs>
                                                    <linearGradient id="stat_bg_2" x1="0" y1="0" x2="44" y2="44" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#dc0307" stop-opacity="0.1"/>
                                                        <stop offset="1" stop-color="#03348e" stop-opacity="0.08"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="stat-number-blue">500+</div>
                                        <p class="stat-text-muted">Happy Customers</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="about-stat-card">
                                        <div class="stat-icon-wrapper">
                                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="44" height="44" rx="12" fill="url(#stat_bg_3)"/>
                                                <path d="M13 14H31V30H13V14Z" fill="#03348e" fill-opacity="0.12" stroke="#03348e" stroke-width="2" stroke-linejoin="round"/>
                                                <path d="M18 30V34M26 30V34M15 34H29" stroke="#03348e" stroke-width="2" stroke-linecap="round"/>
                                                <path d="M17 22L20 25L27 18" stroke="#dc0307" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <circle cx="29" cy="14" r="2.5" fill="#dc0307"/>
                                                <defs>
                                                    <linearGradient id="stat_bg_3" x1="0" y1="0" x2="44" y2="44" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#03348e" stop-opacity="0.1"/>
                                                        <stop offset="1" stop-color="#dc0307" stop-opacity="0.08"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="stat-number-blue">1200+</div>
                                        <p class="stat-text-muted">Installations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Content & Features Grid -->
                <div class="col-lg-7 col-12" data-aos="fade-left" data-aos-delay="200">
                    <div class="about-content-wrapper content-title style-one ps-lg-3 position-relative">
                        
                        <!-- Top Right Decorative Dots Pattern -->
                        <div class="position-absolute top-0 end-0 d-none d-md-block opacity-75" style="z-index: 1;">
                            <svg width="84" height="64" viewBox="0 0 84 64" fill="none">
                                <pattern id="aboutDotPattern" x="0" y="0" width="14" height="14" patternUnits="userSpaceOnUse">
                                    <circle cx="4" cy="4" r="2" fill="#03348e" opacity="0.35"/>
                                </pattern>
                                <rect width="84" height="64" fill="url(#aboutDotPattern)"/>
                            </svg>
                        </div>

                        <!-- Pill Badge -->
                        <div>
                            <span class="about-pill-badge">ABOUT US</span>
                        </div>

                        <!-- Heading with Red Accent & Pulse Wave Icon -->
                        <h2 class="about-main-title  ">
                            15 Years of Trusted Service<br>
                            in <span class="text-red">Medical Technology</span>
                            <svg class="pulse-wave-svg" width="46" height="20" viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10H12L16 2L22 18L28 6L32 12L36 10H48" stroke="#03348e" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </h2>

                        <!-- Description Paragraph -->
                        <p class="about-description-text">
                                Sinoatrial Medical Technologies is a trusted provider of medical equipment sales, installation, and service across Chennai and surrounding districts. With over 15 years of experience, we deliver reliable healthcare solutions to hospitals, clinics, diagnostic centers, and healthcare facilities..
                        </p>

                         <p class="about-description-text">
                            We offer a wide range of medical equipment, including Patient Monitors, Defibrillators, Ventilators, ECG Machines, Syringe Pumps, Infusion Pumps, Fetal Monitors, Suction Units, Pulse Oximeters, and other critical care devices, along with genuine accessories. Our focus on quality, prompt service, and dependable after-sales support ensures reliable performance and customer satisfaction
                         </p>

                    





                        <!-- 4 Features Row -->
                        <div class="about-features-row">
                            <div class="about-feature-col">
                                <div class="feature-icon-box-small">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="42" height="42" rx="10" fill="url(#feat_bg_1)"/>
                                        <path d="M21 9L12 13V21C12 27.2 15.8 32.5 21 34C26.2 32.5 30 27.2 30 21V13L21 9Z" fill="#03348e" fill-opacity="0.12" stroke="#03348e" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M17 21L20 24L25 18" stroke="#dc0307" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <defs>
                                            <linearGradient id="feat_bg_1" x1="0" y1="0" x2="42" y2="42" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#03348e" stop-opacity="0.1"/>
                                                <stop offset="1" stop-color="#dc0307" stop-opacity="0.08"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <h4 class="feature-item-title">Quality Products</h4>
                                <p class="feature-item-desc">BIS & ISO Certified</p>
                            </div>

                            <div class="about-feature-col">
                                <div class="feature-icon-box-small">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="42" height="42" rx="10" fill="url(#feat_bg_2)"/>
                                        <path d="M12 22V19C12 14 16 10 21 10C26 10 30 14 30 19V22" stroke="#03348e" stroke-width="2" stroke-linecap="round"/>
                                        <rect x="10" y="20" width="4" height="8" rx="2" fill="#03348e"/>
                                        <rect x="28" y="20" width="4" height="8" rx="2" fill="#03348e"/>
                                        <path d="M30 24H32C33.1 24 34 24.9 34 26V27C34 28.1 33.1 29 32 29H28" stroke="#03348e" stroke-width="1.8" stroke-linecap="round"/>
                                        <circle cx="26" cy="29" r="2" fill="#dc0307"/>
                                        <path d="M15 22H17L18.5 19.5L20.5 24.5L22 21L23.5 22H26" stroke="#dc0307" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <defs>
                                            <linearGradient id="feat_bg_2" x1="0" y1="0" x2="42" y2="42" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#03348e" stop-opacity="0.1"/>
                                                <stop offset="1" stop-color="#dc0307" stop-opacity="0.08"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <h4 class="feature-item-title">Reliable Support</h4>
                                <p class="feature-item-desc">Expert Service Team</p>
                            </div>

                            <div class="about-feature-col">
                                <div class="feature-icon-box-small">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="42" height="42" rx="10" fill="url(#feat_bg_3)"/>
                                        <path d="M8 16H13M6 21H11M7 26H12" stroke="#dc0307" stroke-width="1.8" stroke-linecap="round"/>
                                        <path d="M14 15H25V27H14V15Z" fill="#03348e" fill-opacity="0.12" stroke="#03348e" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M25 19H30L34 23V27H25V19Z" fill="#03348e" fill-opacity="0.2" stroke="#03348e" stroke-width="2" stroke-linejoin="round"/>
                                        <circle cx="18" cy="28" r="3" fill="#ffffff" stroke="#dc0307" stroke-width="2"/>
                                        <circle cx="30" cy="28" r="3" fill="#ffffff" stroke="#dc0307" stroke-width="2"/>
                                        <defs>
                                            <linearGradient id="feat_bg_3" x1="0" y1="0" x2="42" y2="42" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#03348e" stop-opacity="0.1"/>
                                                <stop offset="1" stop-color="#dc0307" stop-opacity="0.08"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <h4 class="feature-item-title">Pan India Delivery</h4>
                                <p class="feature-item-desc">Fast & Secure</p>
                            </div>

                            <div class="about-feature-col">
                                <div class="feature-icon-box-small">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="42" height="42" rx="10" fill="url(#feat_bg_4)"/>
                                        <path d="M27.5 13.5C25.8 11.8 23 11.8 21.3 13.5L13.5 21.3C11.8 23 11.8 25.8 13.5 27.5C15.2 29.2 18 29.2 19.7 27.5L27.5 19.7C29.2 18 29.2 15.2 27.5 13.5Z" fill="#03348e" fill-opacity="0.12" stroke="#03348e" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M23 18L26 21" stroke="#dc0307" stroke-width="2.5" stroke-linecap="round"/>
                                        <circle cx="27" cy="14" r="2" fill="#dc0307"/>
                                        <circle cx="14" cy="27" r="2" fill="#03348e"/>
                                        <defs>
                                            <linearGradient id="feat_bg_4" x1="0" y1="0" x2="42" y2="42" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#03348e" stop-opacity="0.1"/>
                                                <stop offset="1" stop-color="#dc0307" stop-opacity="0.08"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <h4 class="feature-item-title">After Sales Service</h4>
                                <p class="feature-item-desc">Always Here to Help</p>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <div>
                            <a href="{{ route('about') }}" class="btn-know-more-about">
                                Know More About Us <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Section End -->

   

    <!-- Feature Section Start -->
    <div class="modern-feature-section">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-8 col-md-7 col-12 content-title style-one" data-aos="fade-up" data-aos-delay="100">
                    <span class="modern-section-badge">WHY CHOOSE US</span>
                    <h2 class="modern-section-title mt-2">
                        Welcome to <span class="text-red">Sinoatrial</span> Medical Technologies
                        <svg class="pulse-wave-svg" width="46" height="20" viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10H12L16 2L22 18L28 6L32 12L36 10H48" stroke="#03348e" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </h2>
                </div>
                <div class="col-lg-4 col-md-5 col-12 text-md-end text-start mt-3 mt-md-0" data-aos="fade-left" data-aos-delay="200">
                    <a href="{{ route('product') }}" class="btn-feature-red">
                        View All Services <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="modern-feature-card-new">
                        <div class="feature-card-icon-box">
                            <svg width="68" height="68" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="64" height="64" rx="16" fill="url(#grad_bg_1)"/>
                                <path d="M32 16C33.1 16 34 16.9 34 18V20.1C36.3 20.6 38.4 21.6 40.2 23L41.7 21.5C42.5 20.7 43.8 20.7 44.6 21.5L46.5 23.4C47.3 24.2 47.3 25.5 46.5 26.3L45 27.8C46.4 29.6 47.4 31.7 47.9 34H50C51.1 34 52 34.9 52 36C52 37.1 51.1 38 50 38H47.9C47.4 40.3 46.4 42.4 45 44.2L46.5 45.7C47.3 46.5 47.3 47.8 46.5 48.6L44.6 50.5C43.8 51.3 42.5 51.3 41.7 50.5L40.2 49C38.4 50.4 36.3 51.4 34 51.9V54C34 55.1 33.1 56 32 56C30.9 56 30 55.1 30 54V51.9C27.7 51.4 25.6 50.4 23.8 49L22.3 50.5C21.5 51.3 20.2 51.3 19.4 50.5L17.5 48.6C16.7 47.8 16.7 46.5 17.5 45.7L19 44.2C17.6 42.4 16.6 40.3 16.1 38H14C12.9 38 12 37.1 12 36C12 34.9 12.9 34 14 34H16.1C16.6 31.7 17.6 29.6 19 27.8L17.5 26.3C16.7 25.5 16.7 24.2 17.5 23.4L19.4 21.5C20.2 20.7 21.5 20.7 22.3 21.5L23.8 23C25.6 21.6 27.7 20.6 30 20.1V18C30 16.9 30.9 16 32 16Z" fill="#03348e" fill-opacity="0.12"/>
                                <circle cx="32" cy="36" r="14" stroke="#03348e" stroke-width="3" stroke-linecap="round"/>
                                <path d="M24 36H27L29 31L32 41L35 33L37 36H40" stroke="#e31b23" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="32" cy="18" r="3" fill="#e31b23"/>
                                <circle cx="48" cy="36" r="3" fill="#03348e"/>
                                <defs>
                                    <linearGradient id="grad_bg_1" x1="0" y1="0" x2="64" y2="64" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#03348e" stop-opacity="0.1"/>
                                        <stop offset="1" stop-color="#e31b23" stop-opacity="0.08"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3>Expert Manufacturing</h3>
                        <p>State-of-the-art infrastructure and precision engineering ensure high quality, durable, and reliable medical devices.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="modern-feature-card-new">
                        <div class="feature-card-icon-box">
                            <svg width="68" height="68" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="64" height="64" rx="16" fill="url(#grad_bg_2)"/>
                                <path d="M12 24H20M8 32H16M14 40H22" stroke="#e31b23" stroke-width="2.5" stroke-linecap="round"/>
                                <path d="M22 22H38V40H22V22Z" fill="#03348e" fill-opacity="0.12" stroke="#03348e" stroke-width="3" stroke-linejoin="round"/>
                                <path d="M38 28H46L52 34V40H38V28Z" fill="#03348e" fill-opacity="0.2" stroke="#03348e" stroke-width="3" stroke-linejoin="round"/>
                                <path d="M30 25C28.3 25 27 26.3 27 28C27 30.5 30 33 30 33C30 33 33 30.5 33 28C33 26.3 31.7 25 30 25Z" fill="#e31b23"/>
                                <circle cx="28" cy="42" r="4" fill="#ffffff" stroke="#e31b23" stroke-width="3"/>
                                <circle cx="46" cy="42" r="4" fill="#ffffff" stroke="#e31b23" stroke-width="3"/>
                                <defs>
                                    <linearGradient id="grad_bg_2" x1="0" y1="0" x2="64" y2="64" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#03348e" stop-opacity="0.1"/>
                                        <stop offset="1" stop-color="#e31b23" stop-opacity="0.08"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3>Fast Nationwide Delivery</h3>
                        <p>Our strong logistics network ensures timely and secure delivery of medical equipment wherever it's needed.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="modern-feature-card-new">
                        <div class="feature-card-icon-box">
                            <svg width="68" height="68" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="64" height="64" rx="16" fill="url(#grad_bg_3)"/>
                                <path d="M32 14L18 20V32C18 41.5 24 49.5 32 52C40 49.5 46 41.5 46 32V20L32 14Z" fill="#03348e" fill-opacity="0.1" stroke="#03348e" stroke-width="3" stroke-linejoin="round"/>
                                <circle cx="32" cy="32" r="11" fill="#ffffff" stroke="#e31b23" stroke-width="2.5"/>
                                <path d="M26 32L30 36L38 27" stroke="#e31b23" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M32 18L33.2 20.4L35.8 20.8L33.9 22.7L34.4 25.3L32 24.1L29.6 25.3L30.1 22.7L28.2 20.8L30.8 20.4L32 18Z" fill="#e31b23"/>
                                <defs>
                                    <linearGradient id="grad_bg_3" x1="0" y1="0" x2="64" y2="64" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#03348e" stop-opacity="0.1"/>
                                        <stop offset="1" stop-color="#e31b23" stop-opacity="0.08"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3>Certified & Reliable Products</h3>
                        <p>All products are BIS & ISO certified, ensuring safety, performance, and long-term reliability.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="modern-feature-card-new">
                        <div class="feature-card-icon-box">
                            <svg width="68" height="68" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="64" height="64" rx="16" fill="url(#grad_bg_4)"/>
                                <path d="M18 34V30C18 22.3 24.3 16 32 16C39.7 16 46 22.3 46 30V34" stroke="#03348e" stroke-width="3" stroke-linecap="round"/>
                                <rect x="15" y="32" width="6" height="12" rx="3" fill="#03348e"/>
                                <rect x="43" y="32" width="6" height="12" rx="3" fill="#03348e"/>
                                <path d="M46 38H49C50.7 38 52 39.3 52 41V42C52 43.7 50.7 45 49 45H43" stroke="#03348e" stroke-width="2.5" stroke-linecap="round"/>
                                <circle cx="41" cy="45" r="2.5" fill="#e31b23"/>
                                <path d="M23 34H26L28 29L31 39L34 32L36 35H39" stroke="#e31b23" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                    <linearGradient id="grad_bg_4" x1="0" y1="0" x2="64" y2="64" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#03348e" stop-opacity="0.1"/>
                                        <stop offset="1" stop-color="#e31b23" stop-opacity="0.08"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3>Dedicated Support & Service</h3>
                        <p>Our expert support team is always ready to help with installation, training, and after-sales service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

 

    <!-- Featured Brands Section Start -->
    <div class="featured-brands-wrap bg-white">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 text-center">
                    <div class="content-title style-one text-center" data-aos="fade-down" data-aos-duration="1000">
                        <span class="about-pill-badge">DISCOVER OUR</span>
                        <h2>Featured Brands & <span>Technologies</span>
                            <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Shape" width="64" height="64" loading="lazy">
                        </h2>
                    </div>
                </div>
            </div>

            <!-- Double Marquee Running in Opposite Directions -->
            <div class="marquee-wrapper">
                <div class="marquee-container">
                    
                    <!-- Row 1: Left to Right -->
                    <div class="marquee-track marquee-ltr">
                        <div class="marquee-set">
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/1.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/2.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/3.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/4.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/5.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/6.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/7.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/14.svg') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/15.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                        </div>
                        <div class="marquee-set">
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/1.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/2.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/3.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/4.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/5.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/6.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/7.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/14.svg') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/15.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                        </div>
                    </div>

                    <!-- Row 2: Right to Left -->
                    <div class="marquee-track marquee-rtl">
                        <div class="marquee-set">
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/8.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/9.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/10.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/11.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/12.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/13.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                        </div>
                        <div class="marquee-set">
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/8.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/9.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/10.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/11.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/12.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                            <div class="brand-marquee-box"><img src="{{ asset('user/assets/img/MEquip_log/13.png') }}" alt="Brand Logo" class="brand-marquee-img" loading="lazy"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Featured Brands Section End -->


    <!-- NEW DESIGN TRUSTED SECTION -->
    <section class="medical-banner">
        <div class="banner-wrapper">

            <!-- LEFT CONTENT -->
            <div class="banner-content">
                <span class="about-pill-badge">OUR COMMITMENT</span>
                <h2>
                    Trusted by India's Leading
                    <span>
                        Hospitals & Clinics
                        <svg class="title-ecg-wave" width="70" height="22" viewBox="0 0 120 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 17 H35 L42 4 L49 30 L56 10 L62 22 L68 17 H120" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </h2>

                <div class="features">
                    <div class="feature">
                        <span class="feature-icon"><i class="ri-check-line"></i></span>
                        <span>Wide range of medical devices</span>
                    </div>
                    <div class="feature">
                        <span class="feature-icon"><i class="ri-check-line"></i></span>
                        <span>Trusted by 1200+ healthcare providers</span>
                    </div>
                    <div class="feature">
                        <span class="feature-icon"><i class="ri-check-line"></i></span>
                        <span>Reliable after-sales support</span>
                    </div>
                    <div class="feature">
                        <span class="feature-icon"><i class="ri-check-line"></i></span>
                        <span>Training and installation by experts</span>
                    </div>
                    <div class="feature">
                        <span class="feature-icon"><i class="ri-check-line"></i></span>
                        <span>Pan India presence</span>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="banner-btn">
                    Our Customers <span class="arrow">→</span>
                </a>
            </div>

            <!-- RIGHT IMAGE & STATS CONTAINER -->
            <div class="banner-image-container">
                <div class="banner-image">
                    <img src="{{ asset('user/assets/img/bn1.png') }}" alt="Trusted Hospitals & Clinics" style="filter: blur(0px) brightness(0.9);                    <img src="{{ asset('user/assets/img/bn1.png') }}" alt="Trusted Hospitals & Clinics" 
">
                </div>

                <!-- STATISTICS OVERLAY -->
                <div class="stats">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 8L12 3L3 8V16L12 21L21 16V8Z" stroke="#03348e" stroke-width="1.8" stroke-linejoin="round"/>
                                <path d="M12 3V11.5M21 8L12 11.5M3 8L12 11.5" stroke="#03348e" stroke-width="1.8" stroke-linejoin="round"/>
                                <path d="M12 14.5M10.5 14.5H13.5M12 13V16" stroke="#e31b23" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="stat-info">
                            <span class="stat-number">300+</span>
                            <span class="stat-text">Products Range</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 21V19C16 16.7909 14.2091 15 12 15C9.79086 15 8 16.7909 8 19V21" stroke="#03348e" stroke-width="1.8" stroke-linecap="round"/>
                                <circle cx="12" cy="7" r="4" stroke="#03348e" stroke-width="1.8"/>
                                <path d="M18.5 7.5C18.5 7.5 19.5 6 21 7.5C22.5 9 20.5 11 18.5 12.5C16.5 11 14.5 9 16 7.5C17.5 6 18.5 7.5 18.5 7.5Z" fill="#e31b23"/>
                            </svg>
                        </div>
                        <div class="stat-info">
                            <span class="stat-number">500+</span>
                            <span class="stat-text">Happy Customers</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21C16.4183 21 20 17.4183 20 13C20 8.58172 16.4183 5 12 5C7.58172 5 4 8.58172 4 13C4 17.4183 7.58172 21 12 21Z" stroke="#03348e" stroke-width="1.8"/>
                                <path d="M12 2V5M12 21V23M2 13H5M19 13H22" stroke="#03348e" stroke-width="1.5" stroke-linecap="round"/>
                                <circle cx="12" cy="13" r="3" fill="#e31b23"/>
                            </svg>
                        </div>
                        <div class="stat-info">
                            <span class="stat-number">20+</span>
                            <span class="stat-text">States Covered</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 21H21M5 21V7L12 3L19 7V21M9 10H15M9 14H15M9 18H15" stroke="#03348e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 8V12M10 10H14" stroke="#e31b23" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="stat-info">
                            <span class="stat-number">1200+</span>
                            <span class="stat-text">Trusted Clinics</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- NEW DESIGN TRUSTED SECTION END -->


    <!-- Why Choose Us Section Start -->
    <div class="wh-wrap style-one ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/about/wh-shape-3.png') }}" alt="Image" class="wh-shape-one" data-aos="fade-down" data-aos-delay="100" width="64" height="64" loading="lazy">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="wh-content" data-aos="fade-right" data-aos-delay="200">
                        <div class="content-title style-one">
                            <span class="about-pill-badge" data-aos="fade-up" data-aos-delay="300">
                                Why Choose Us
                            </span>
                            <h2 data-aos="fade-up" data-aos-delay="400">
                                Trusted by India’s Leading <span>Hospitals & Clinics</span>
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image" width="64" height="64" loading="lazy">
                            </h2>
                            <p data-aos="fade-up" data-aos-delay="500">
                                At Sinoatrial Medical Technologies, we prioritize safety, innovation, and performance. All our biomedical equipment undergoes rigorous quality control to ensure hospital-grade reliability.
                            </p>
                        </div>
                        <ul class="feature-list list-style">
                            <li data-aos="fade-left" data-aos-delay="600">ISO-compliant, quality-tested equipment</li>
                            <li data-aos="fade-left" data-aos-delay="700">In-house R&D for medical accessories</li>
                            <li data-aos="fade-left" data-aos-delay="800">Trusted by top hospitals and medical chains</li>
                            <li data-aos="fade-left" data-aos-delay="900">Dedicated post-sales and support service</li>
                        </ul>
                        <a href="tel:+919659446837" class="btn-two" data-aos="zoom-in" data-aos-delay="1000">
                            <i class="flaticon-phone-call"></i>+91 96594 46837
                        </a>
                    </div>
                </div>

                <!-- Image Right -->
                <div class="col-lg-6">
                    <div class="wh-img-wrap" data-aos="zoom-in-up" data-aos-delay="400">
                        <div class="wh-img">
                            <img src="{{ asset('user/assets/img/about/wh-img-1.png') }}" alt="Image" width="700" height="670" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-wrap-new position-relative">
        <div class="container">
            
            <!-- Section Header -->
            <div class="testimonial-header-wrapper">
                <div class="testimonial-header-left" data-aos="fade-up" data-aos-delay="100">
                    <div class="content-title style-one text-start m-0">
                        <span class="about-pill-badge">CLIENT TESTIMONIALS</span>
                        <h2 data-aos="fade-up" data-aos-delay="400">
                            Valuable Feedback From Our <span>Medical Equipment Clients</span>
                            <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image" width="64" height="64" loading="lazy">
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="500">
                            Trusted by leading hospitals, ICUs, and biomedical engineers across India.
                        </p>
                    </div>
                </div>

                <div class="testimonial-nav-group" data-aos="fade-left" data-aos-delay="200">
                    <button class="testimonial-btn-red" id="open-feedback-btn">
                        <i class="ri-chat-new-line"></i> Share Feedback
                    </button>
                    <button class="testimonial-arrow-btn testimonial-prev" aria-label="Previous Testimonial">
                        <i class="ri-arrow-left-s-line"></i>
                    </button>
                    <button class="testimonial-arrow-btn testimonial-next" aria-label="Next Testimonial">
                        <i class="ri-arrow-right-s-line"></i>
                    </button>
                </div>
            </div>

            <!-- Testimonial Cards Slider -->
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider-two swiper">
                    <div class="swiper-wrapper">
                        @if(isset($testimonials) && count($testimonials) > 0)
                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="modern-testimonial-card">
                                        <div>
                                            <div class="testimonial-top-row">
                                                <div class="client-profile-box">
                                                    @if(isset($testimonial->image) && $testimonial->image)
                                                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="client-avatar-img">
                                                    @else
                                                        <div class="client-avatar-placeholder">
                                                            {{ strtoupper(substr($testimonial->name, 0, 1)) }}
                                                        </div>
                                                    @endif
                                                    <div class="client-details">
                                                        <h5>{{ $testimonial->name }}</h5>
                                                        <span>{{ $testimonial->designation ?? 'Healthcare Professional' }}</span>
                                                    </div>
                                                </div>
                                                <div class="quote-icon-badge">
                                                    <i class="ri-double-quotes-r"></i>
                                                </div>
                                            </div>

                                            <div class="testimonial-stars">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $testimonial->rating)
                                                        <i class="ri-star-fill"></i>
                                                    @else
                                                        <i class="ri-star-line" style="color: #cbd5e1;"></i>
                                                    @endif
                                                @endfor
                                            </div>

                                            <div class="testimonial-quote-body">
                                                "{{ $testimonial->comment }}"
                                            </div>
                                        </div>

                                        <div class="testimonial-footer-trust">
                                            <span>Sinoatrial Client</span>
                                            <span class="verified-tag"><i class="ri-shield-check-fill"></i> Verified Partner</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <!-- Demo Testimonial 1 -->
                            <div class="swiper-slide">
                                <div class="modern-testimonial-card">
                                    <div>
                                        <div class="testimonial-top-row">
                                            <div class="client-profile-box">
                                                <img src="{{ asset('user/assets/img/clients/client-1.webp') }}" alt="Dr. Arun Kumar" class="client-avatar-img" onerror="this.outerHTML='<div class=\'client-avatar-placeholder\'>A</div>'">
                                                <div class="client-details">
                                                    <h5>Dr. Arun Kumar</h5>
                                                    <span>Biomedical Director, Apollo Hospitals</span>
                                                </div>
                                            </div>
                                            <div class="quote-icon-badge">
                                                <i class="ri-double-quotes-r"></i>
                                            </div>
                                        </div>

                                        <div class="testimonial-stars">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>

                                        <div class="testimonial-quote-body">
                                            "We've been using Sinoatrial's SpO₂ sensors and ECG cables for over 2 years now. The signal precision and build quality in critical care ICU settings are unmatched."
                                        </div>
                                    </div>

                                    <div class="testimonial-footer-trust">
                                        <span>ICU & Cardiac Care</span>
                                        <span class="verified-tag"><i class="ri-shield-check-fill"></i> Verified Partner</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Demo Testimonial 2 -->
                            <div class="swiper-slide">
                                <div class="modern-testimonial-card">
                                    <div>
                                        <div class="testimonial-top-row">
                                            <div class="client-profile-box">
                                                <img src="{{ asset('user/assets/img/clients/client-2.webp') }}" alt="Priya Sharma" class="client-avatar-img" onerror="this.outerHTML='<div class=\'client-avatar-placeholder\'>P</div>'">
                                                <div class="client-details">
                                                    <h5>Priya Sharma</h5>
                                                    <span>Purchase Head, Fortis Healthcare</span>
                                                </div>
                                            </div>
                                            <div class="quote-icon-badge">
                                                <i class="ri-double-quotes-r"></i>
                                            </div>
                                        </div>

                                        <div class="testimonial-stars">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>

                                        <div class="testimonial-quote-body">
                                            "The team at Sinoatrial Medical is exceptionally responsive. Their emergency equipment maintenance and fast dispatch of calibration cables keeps our operations running smoothly."
                                        </div>
                                    </div>

                                    <div class="testimonial-footer-trust">
                                        <span>Procurement Partner</span>
                                        <span class="verified-tag"><i class="ri-shield-check-fill"></i> Verified Partner</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Demo Testimonial 3 -->
                            <div class="swiper-slide">
                                <div class="modern-testimonial-card">
                                    <div>
                                        <div class="testimonial-top-row">
                                            <div class="client-profile-box">
                                                <img src="{{ asset('user/assets/img/clients/client-3.webp') }}" alt="Dr. Rajesh Varma" class="client-avatar-img" onerror="this.outerHTML='<div class=\'client-avatar-placeholder\'>R</div>'">
                                                <div class="client-details">
                                                    <h5>Dr. Rajesh Varma</h5>
                                                    <span>Senior Cardiologist, Kauvery Hospital</span>
                                                </div>
                                            </div>
                                            <div class="quote-icon-badge">
                                                <i class="ri-double-quotes-r"></i>
                                            </div>
                                        </div>

                                        <div class="testimonial-stars">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>

                                        <div class="testimonial-quote-body">
                                            "Outstanding technical support and pricing. Sinoatrial is our trusted vendor for patient monitoring probes, accessories, and diagnostic cable sets."
                                        </div>
                                    </div>

                                    <div class="testimonial-footer-trust">
                                        <span>Cardiology Dept</span>
                                        <span class="verified-tag"><i class="ri-shield-check-fill"></i> Verified Partner</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Add Testimonial Modal Popup -->
    <div class="feedback-modal-backdrop" id="feedbackModalBackdrop">
        <div class="feedback-modal-card">
            <div class="feedback-modal-header">
                <h3>Share Your Valuable Feedback</h3>
                <button class="feedback-modal-close" id="close-feedback-btn">&times;</button>
            </div>
            
            <form id="feedbackForm" class="feedback-modal-body">
                <div class="feedback-form-row">
                    <div class="feedback-form-col-left">
                        <div class="feedback-input-group">
                            <label for="modal-client-name">Full Name</label>
                            <input type="text" id="modal-client-name" placeholder="Dr. Jane Doe" required>
                        </div>
                        <div class="feedback-input-group">
                            <label for="modal-client-role">Designation / Role</label>
                            <input type="text" id="modal-client-role" placeholder="e.g. Chief Medical Officer" required>
                        </div>
                        <div class="feedback-input-group">
                            <label>Your Rating</label>
                            <div class="interactive-stars" id="modal-stars-rating">
                                <i class="ri-star-fill star-input" data-value="1"></i>
                                <i class="ri-star-fill star-input" data-value="2"></i>
                                <i class="ri-star-fill star-input" data-value="3"></i>
                                <i class="ri-star-fill star-input" data-value="4"></i>
                                <i class="ri-star-fill star-input" data-value="5"></i>
                            </div>
                            <input type="hidden" id="modal-rating-value" value="5">
                        </div>
                    </div>
                    
                    <div class="feedback-form-col-right">
                        <div class="feedback-input-group h-100 d-flex flex-column">
                            <label for="modal-client-comment">Your Feedback</label>
                            <textarea id="modal-client-comment" placeholder="We appreciate your review! Write your comments here..." style="flex-grow: 1;" required></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="feedback-form-footer text-end mt-4">
                    <button type="submit" class="btn-two submit-feedback-btn px-4 py-2" style="border-radius: 30px; font-size: 14px; border: none;">
                        Submit Review <i class="ri-send-plane-fill ms-2"></i>
                    </button>
                </div>
            </form>
            
            <div class="feedback-success-overlay" id="feedbackSuccessOverlay">
                <div class="success-message-box">
                    <div class="success-icon-wrap">
                        <i class="ri-checkbox-circle-fill"></i>
                    </div>
                    <h4>Thank You!</h4>
                    <p>Your feedback has been successfully submitted and added to our testimonials.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section Start -->
    <div class="cta-wrap style-one my-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" style="background: #0043a6; /* Fallback for older browsers */
background: -webkit-linear-gradient(left, #0043a6, #db0a24);
background: -moz-linear-gradient(left, #0043a6, #db0a24);
background: linear-gradient(to right, #0043a6, #db0a24);">
        <img src="{{ asset('user/assets/img/cta-shape.webp') }}" alt="Image" class="cta-shape" width="1920" height="397" loading="lazy">
        <div class="container text-center">
           
            <h2 class="text-white">Order Your Medical Equipment With Us</h2>
            <p class="text-white">Have Any Questions? Feel Free to Contact Our Team</p>
             <!-- <img src="{{ asset('user/assets/img/1.png') }}" alt="Image" width="64" height="64" class="position-absolute" data-aos="fade-in" data-aos-delay="800" data-aos-duration="1000" loading="lazy"> -->
            <a class="cta-contact position-relative" href="tel:04445428844" data-aos="flip-up" data-aos-delay="500" data-aos-duration="1200">
                +044-4542 8844
               
            </a>
           
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Our Clients Section Start -->
    <div class="clients-section-exact " data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            
            <!-- Section Title Header (Inline pill & title on same line) -->
            <!-- <div class="clients-header-inline" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
                <span class="about-pill-badge">OUR CLIENTS</span>
                <h2 class="clients-title">
                    Trusted by Our <span class="title-red">Valued Clients</span> <span class="title-arrows">⟶⟶</span>
                </h2>

                 
            </div> -->

                    <div class="content-title style-one text-center">
                            <span class="about-pill-badge">OUR CLIENTS</span>
                            <h2 data-aos="fade-up" data-aos-delay="400">
                               Trusted by Our  <span>Valued Clients</span>
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image" width="64" height="64" loading="lazy">
                            </h2>
                            <p data-aos="fade-up" data-aos-delay="500">
                                At Sinoatrial Medical Technologies, we prioritize safety, innovation, and performance. All our biomedical equipment undergoes rigorous quality control to ensure hospital-grade reliability.
                            </p>
                    </div>

            <!-- Slider Wrapper with Side Nav Buttons -->
            <div class="clients-slider-container" data-aos="fade-up" data-aos-delay="300">
                
                <!-- Side Navigation Buttons -->
                <button class="clients-nav-btn clients-nav-prev" aria-label="Previous Clients Slide">
                    <i class="ri-arrow-left-s-line"></i>
                </button>
                <button class="clients-nav-btn clients-nav-next" aria-label="Next Clients Slide">
                    <i class="ri-arrow-right-s-line"></i>
                </button>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @for($i = 1; $i <= 19; $i++)
                            <div class="swiper-slide">
                                <div class="client-logo-card">
                                    <img src="{{ asset('user/assets/img/Clients/' . $i . '.png') }}" alt="Client Logo {{ $i }}" loading="lazy">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Bottom Swiper Pagination Dots -->
                <div class="clients-pagination-dots swiper-pagination"></div>
            </div>

        </div>
    </div>
    <!-- Our Clients Section End -->

    <!-- Medical Equipment Installation Section Start -->
    <div class="installation-section-wrap py-5 bg-white position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 text-center">
                    <div class="content-title style-one text-center mb-4" data-aos="fade-up" data-aos-delay="100">
                        <span class="about-pill-badge mb-2">INSTALLATION & SUPPORT</span>
                        <h2 class="installation-title">
                            We Provide Best <span class="text-red">Installation</span>
                            <svg class="pulse-wave-svg ms-1" width="46" height="20" viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10H12L16 2L22 18L28 6L32 12L36 10H48" stroke="#03348e" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </h2>
                    </div>
                </div>
            </div>

            <!-- Slider Container with Navigation Buttons -->
            <div class="installation-slider-container position-relative px-md-5" data-aos="fade-up" data-aos-delay="200">
                
                <!-- Side Navigation Arrows -->
                <button class="installation-nav-btn installation-nav-prev" aria-label="Previous Installation Slide">
                    <i class="ri-arrow-left-s-line"></i>
                </button>
                <button class="installation-nav-btn installation-nav-next" aria-label="Next Installation Slide">
                    <i class="ri-arrow-right-s-line"></i>
                </button>

                <!-- Swiper Slider -->
                <div class="installation-slider swiper">
                    <div class="swiper-wrapper">
                        @for($i = 1; $i <= 5; $i++)
                            <div class="swiper-slide">
                                <div class="installation-card">
                                    <img src="{{ asset('user/assets/img/IND/' . $i . '.webp') }}" alt="Medical Equipment Installation {{ $i }}" loading="lazy">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Swiper Pagination Dots -->
                <div class="installation-pagination-dots swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- Medical Equipment Installation Section End -->

    </main>

    <!-- Footer Area Start -->
    @include('user.layouts.footer')
    <!-- Footer Area End -->

    @include('user.layouts.script')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Hero Swiper Banner (Laptop and Mobile)
            document.querySelectorAll('.hero-swiper').forEach(function(swiperEl) {
                new Swiper(swiperEl, {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    loop: true,
                    speed: 700,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: swiperEl.querySelector('.hero-swiper-pagination'),
                        clickable: true,
                    },
                    navigation: {
                        nextEl: swiperEl.querySelector('.hero-swiper-next'),
                        prevEl: swiperEl.querySelector('.hero-swiper-prev'),
                    }
                });
            });

            // Initialize Installation Swiper Slider
            if (document.querySelector('.installation-slider')) {
                var installationSwiper = new Swiper('.installation-slider', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.installation-nav-next',
                        prevEl: '.installation-nav-prev',
                    },
                    pagination: {
                        el: '.installation-pagination-dots',
                        clickable: true,
                    },
                    breakpoints: {
                        576: { slidesPerView: 2, spaceBetween: 20 },
                        768: { slidesPerView: 3, spaceBetween: 22 },
                        1200: { slidesPerView: 4, spaceBetween: 25 }
                    }
                });
            }

            // Initialize Clients Swiper Slider
            if (document.querySelector('.clients-slider')) {
                var clientsSwiper = new Swiper('.clients-slider', {
                    slidesPerView: 2,
                    spaceBetween: 16,
                    loop: true,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.clients-nav-next',
                        prevEl: '.clients-nav-prev',
                    },
                    pagination: {
                        el: '.clients-pagination-dots',
                        clickable: true,
                    },
                    breakpoints: {
                        576: { slidesPerView: 3, spaceBetween: 18 },
                        768: { slidesPerView: 4, spaceBetween: 20 },
                        992: { slidesPerView: 5, spaceBetween: 22 },
                        1200: { slidesPerView: 6, spaceBetween: 24 }
                    }
                });
            }

            // Feedback Modal Handlers
            const backdrop = document.getElementById('feedbackModalBackdrop');
            const openBtn = document.getElementById('open-feedback-btn');
            const closeBtn = document.getElementById('close-feedback-btn');
            const form = document.getElementById('feedbackForm');
            const starsContainer = document.getElementById('modal-stars-rating');
            const ratingInput = document.getElementById('modal-rating-value');
            const successOverlay = document.getElementById('feedbackSuccessOverlay');

            if (openBtn && backdrop) {
                openBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    backdrop.classList.add('show');
                    document.body.style.overflow = 'hidden';
                });

                function closeModal() {
                    backdrop.classList.remove('show');
                    document.body.style.overflow = '';
                    setTimeout(() => {
                        if (form) form.reset();
                        if (successOverlay) successOverlay.classList.remove('show');
                        if (ratingInput) ratingInput.value = '5';
                        highlightStars(5);
                    }, 400);
                }

                if (closeBtn) closeBtn.addEventListener('click', closeModal);

                backdrop.addEventListener('click', function(e) {
                    if (e.target === backdrop) {
                        closeModal();
                    }
                });

                const stars = starsContainer ? starsContainer.querySelectorAll('.star-input') : [];
                
                function highlightStars(val) {
                    stars.forEach(star => {
                        const starVal = parseInt(star.getAttribute('data-value'));
                        if (starVal <= val) {
                            star.classList.add('active');
                        } else {
                            star.classList.remove('active');
                        }
                    });
                }

                highlightStars(5);

                stars.forEach(star => {
                    star.addEventListener('mouseenter', function() {
                        const val = parseInt(this.getAttribute('data-value'));
                        highlightStars(val);
                    });

                    if (starsContainer) {
                        starsContainer.addEventListener('mouseleave', function() {
                            const currentVal = parseInt(ratingInput.value);
                            highlightStars(currentVal);
                        });
                    }

                    star.addEventListener('click', function() {
                        const val = parseInt(this.getAttribute('data-value'));
                        ratingInput.value = val;
                        highlightStars(val);
                    });
                });

                if (form) {
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        const name = document.getElementById('modal-client-name').value;
                        const role = document.getElementById('modal-client-role').value;
                        const rating = parseInt(ratingInput.value);
                        const comment = document.getElementById('modal-client-comment').value;
                        
                        const submitBtn = form.querySelector('button[type="submit"]');
                        if (submitBtn) {
                            submitBtn.disabled = true;
                            submitBtn.innerHTML = '<i class="ri-loader-4-line ri-spin"></i> Submitting...';
                        }

                        fetch('{{ route("testimonial.submit") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                name: name,
                                designation: role,
                                rating: rating,
                                comment: comment
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (submitBtn) {
                                submitBtn.disabled = false;
                                submitBtn.innerHTML = 'Submit Review <i class="ri-send-plane-fill ms-2"></i>';
                            }

                            if (data.success) {
                                if (successOverlay) successOverlay.classList.add('show');
                                setTimeout(closeModal, 2500);
                            } else {
                                alert(data.message || 'Something went wrong. Please try again.');
                            }
                        })
                        .catch(error => {
                            if (submitBtn) {
                                submitBtn.disabled = false;
                                submitBtn.innerHTML = 'Submit Review <i class="ri-send-plane-fill ms-2"></i>';
                            }
                            console.error('Error submitting feedback:', error);
                            alert('Something went wrong. Please try again.');
                        });
                    });
                }
            }
        });
    </script>
</body>

</html>
