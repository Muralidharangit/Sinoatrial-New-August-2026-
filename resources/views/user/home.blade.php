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
    <style>
        .hero-badge {
            display: inline-flex;
    align-items: center;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #ffffff !important;
    padding: 0px 16px;
    font-size: 12px !important;
    font-weight: 600;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    margin-bottom: 10px !important;
    
        }
         p.hero-badge{
            padding-right:16px !important;
         }
        .hero-badge i {
            font-size: 16px;
            color: #ff4d4d;
            margin-right: 8px;
            transition: transform 0.3s ease;
        }
        .hero-badge:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
            color: #ffffff !important;
        }
        .hero-badge:hover i {
            transform: scale(1.2);
        }
        
        .carousel-item.text-dark .hero-badge,
        .carousel-item:not(.text-white) .hero-badge {
            background: rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(0, 0, 0, 0.15);
            
        }
        .carousel-item.text-dark .hero-badge i,
        .carousel-item:not(.text-white) .hero-badge i {
            color: #ff3b30;
        }
        .carousel-item.text-dark .hero-badge:hover,
        .carousel-item:not(.text-white) .hero-badge:hover {
            background: rgba(0, 0, 0, 0.15);
            border-color: rgba(0, 0, 0, 0.25);
            color: #1e1e1e !important;
        }

        @media (max-width: 575px) {
            .hero-badge {
                padding: 6px 12px;
                font-size: 12px !important;
                margin-bottom: 15px !important;
            }
            .hero-badge i {
                font-size: 14px;
                margin-right: 6px;
            }
        }
    </style>
</head>

<body>
    <!-- preloader start-->
    @include('user.layouts.loader')
    <!-- preloader start end-->

    <!--header start-->
    @include('user.layouts.header', ['categories' => $categories])
    <!--header end-->

    <main>

    <!-- scrollUp Start Here -->
    {{-- <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a> --}}
    <!-- scrollUp End Here -->


    {{-- main Layout starts here --}}
    <!-- Start Responsive Navbar Area -->

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

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000"
        data-bs-wrap="true">

        <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel"
                    data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel"
                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel"
                    data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->

        <div class="carousel-inner">
            


             <div class="carousel-item active bg-primary text-white">
                <!-- Hero Section Start -->
                <div class="hero-wrap style-three mt-0 pt-0">
                    <div class="hero-bg bg-f"></div>
                    <img src="{{ asset('user/assets/img/hero/hero-shape-7.webp') }}" alt="Image"
                        class="hero-shape-one bounce" width="62" height="28">
                    <div class="container h-100">
                        <div class="row gx-5 align-items-center h-100">
                            <div class="col-lg-6">
                               <div class="hero-content">
    <p class="hero-badge"><i class="ri-heart-pulse-line"></i> Your Trusted Biomedical Partner</p>
    <h1>Complete Biomedical <span style="">Equipment Service</span> & Maintenance Solutions</h1>

    <p>Engineered for precision and continuous healthcare operations, Sinoatrial Medical Technologies provides expert installation, repair, AMC/CMC, and calibration across all hospital and laboratory equipment. From ICUs and operation theatres to emergency rooms, we ensure maximum uptime, safety, and reliability for patient monitors, ventilators, defibrillators, anesthesia machines, infant incubators, pumps, and diagnostic devices with 24/7 support.</p>

    <!-- badges -->
   
    <a href="{{ route('contact') }}" class="btn-two">Get In Touch<i class="flaticon-right-arrow"></i></a>
</div>
                            </div>

                            <!-- Right Image with Effects -->
                            <!-- Right Image with Effects -->

                            <!-- Right Image & Animation -->
                            <div class="col-lg-6 position-relative">
                                <!-- Background Circle -->
                                <div class="circle-wrapper position-absolute top-50 start-50 translate-middle">
                                    <div class="circle circle-1"></div>
                                    <div class="circle circle-2"></div>
                                    <div class="circle circle-3"></div>
                                </div>

                                <div class="w-100 d-flex justify-content-center">
                                    <!-- Doctor Image -->
                                    <img src="{{ asset('user/assets/img/hero/5.webp') }}" 
                                        srcset="{{ asset('user/assets/img/hero/5s.webp') }} 300w, {{ asset('user/assets/img/hero/5.webp') }} 498w"
                                        sizes="(max-width: 575px) 300px, 498px"
                                        alt="Doctor"
                                        class="img-fluid position-relative z-1 floating" data-aos="zoom-in" width="498" height="800">

                                </div>


                                <!-- Diagnosis Stat -->

                                <!-- Heart Icon -->
                                <div class="heart-icon position-absolute" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="{{ asset('user/assets/img/hero/heart.webp') }}"
                                        alt="Heart" width="42" height="67">
                                </div>

                                <!-- Patient Recovered -->
                                <div
                                    class="patient-recovered position-absolute bg-white rounded-pill shadow-sm d-flex align-items-center p-2 px-3">
                                    <div class="avatars d-flex me-2">
                                        <img src="{{ asset('user/assets/img/team/team-1.webp') }}" class="rounded-circle"
                                            width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-2.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-3.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                    </div>
                                    <small class="text-black"><strong class="text-black">150k</strong>
                                        Patient recovers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Section End -->
            </div>


             

            <div class="carousel-item  bg-primary text-white">
                <!-- Hero Section Start -->
                <div class="hero-wrap style-three mt-0 ">
                    <div class="hero-bg bg-f"></div>
                    <img src="{{ asset('user/assets/img/hero/hero-shape-7.webp') }}" alt="Image"
                        class="hero-shape-one bounce" width="62" height="28">
                    <div class="container h-100">
                        <div class="row gx-5 align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <p class="hero-badge"><i class="ri-heart-pulse-line"></i> Precision Imaging for Women's Health</p>
                                    <h1>Advanced Patient <span style> Monitoring
                                        </span>Biorun Multipara Patient </h1>

                                         



                                    <p>Engineered for precision and continuous patient care, the Biorun Multipara Patient Monitor delivers real-time monitoring of ECG, SpO₂, NIBP, respiration, temperature, and pulse rate. Designed for ICUs, operation theatres, emergency departments, and critical care units, it ensures accurate monitoring with intelligent alarms and dependable performance.                         

                                        .</p>

                                        <!-- badges  -->
                                       
                                    <a href="{{ route('contact') }}" class="btn-two">Make
                                        An Appointment<i class="flaticon-right-arrow"></i></a>

                                </div>
                            </div>

                            <!-- Right Image with Effects -->
                            <!-- Right Image with Effects -->

                            <!-- Right Image & Animation -->
                            <div class="col-lg-6 position-relative">
                                <!-- Background Circle -->
                                <div class="circle-wrapper position-absolute top-50 start-50 translate-middle">
                                    <div class="circle circle-1"></div>
                                    <div class="circle circle-2"></div>
                                    <div class="circle circle-3"></div>
                                </div>

                                <div class="w-100 d-flex justify-content-center">
                                    <!-- Doctor Image -->
                                    <img src="{{ asset('user/assets/img/hero/2.webp') }}" 
                                        srcset="{{ asset('user/assets/img/hero/2s.webp') }} 300w, {{ asset('user/assets/img/hero/2.webp') }} 498w"
                                        sizes="(max-width: 575px) 300px, 498px"
                                        alt="Doctor"
                                        class="img-fluid position-relative z-1 floating" data-aos="zoom-in" width="498" height="800">

                                </div>


                                <!-- Diagnosis Stat -->

                                <!-- Heart Icon -->
                                <div class="heart-icon position-absolute" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="{{ asset('user/assets/img/hero/heart.webp') }}"
                                        alt="Heart" width="42" height="67">
                                </div>

                                <!-- Patient Recovered -->
                                <div
                                    class="patient-recovered position-absolute bg-white rounded-pill shadow-sm d-flex align-items-center p-2 px-3">
                                    <div class="avatars d-flex me-2">
                                        <img src="{{ asset('user/assets/img/team/team-1.webp') }}" class="rounded-circle"
                                            width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-2.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-3.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                    </div>
                                    <small><strong class="text-black">150k</strong>
                                        Patient recovers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Section End -->
            </div>

            <div class="carousel-item bg-success text-white">
                <!-- Hero Section Start -->
                <div class="hero-wrap style-three mt-0 ">
                    <div class="hero-bg bg-f"></div>
                    <img src="{{ asset('user/assets/img/hero/hero-shape-7.webp') }}" alt="Image"
                        class="hero-shape-one bounce" width="62" height="28">
                    <div class="container h-100">
                        <div class="row gx-5 align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <p class="hero-badge"><i class="ri-flashlight-line"></i> Emergency Cardiac Care</p>
                                    <h1>Biorun Biphasic <span style>Defibrillator</span></h1>
                                    <p>Built for rapid life-saving intervention, the Biorun Biphasic Defibrillator delivers advanced biphasic shock therapy with high precision and reliability. Featuring intuitive controls, ECG monitoring, and comprehensive safety functions, it enables fast and effective cardiac resuscitation in hospitals, ambulances, and emergency care settings.</p>
                                    
                                    <!-- badges  -->
                                   
                                    <a href="{{ route('contact') }}" class="btn-two">Make
                                        An Appointment<i class="flaticon-right-arrow"></i></a>

                                </div>
                            </div>

                            <!-- Right Image with Effects -->
                            <!-- Right Image with Effects -->

                            <!-- Right Image & Animation -->
                            <div class="col-lg-6 position-relative">
                                <!-- Background Circle -->
                                <div class="circle-wrapper position-absolute top-50 start-50 translate-middle">
                                    <div class="circle circle-1"></div>
                                    <div class="circle circle-2"></div>
                                    <div class="circle circle-3"></div>
                                </div>
                                <div class="w-100 d-flex justify-content-center">
                                    <img src="{{ asset('user/assets/img/hero/4.webp') }}" 
                                        srcset="{{ asset('user/assets/img/hero/4s.webp') }} 300w, {{ asset('user/assets/img/hero/4.webp') }} 498w"
                                        sizes="(max-width: 575px) 300px, 498px"
                                        alt="Doctor"
                                        class="img-fluid position-relative z-1 floating" data-aos="zoom-in" width="498" height="800" loading="lazy">

                                </div>
                                <!-- Doctor Image -->

                                <!-- Diagnosis Stat -->

                                <!-- Heart Icon -->
                                <div class="heart-icon position-absolute" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="{{ asset('user/assets/img/hero/heart.webp') }}"
                                        alt="Heart" width="42" height="67" loading="lazy">
                                </div>

                                <!-- Patient Recovered -->
                                <div
                                    class="patient-recovered position-absolute bg-white rounded-pill shadow-sm d-flex align-items-center p-2 px-3">
                                    <div class="avatars d-flex me-2">
                                        <img src="{{ asset('user/assets/img/team/team-1.webp') }}"
                                            class="rounded-circle" width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-2.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-3.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                    </div>
                                    <small><strong class="text-primary">150k</strong>
                                        Patient recovers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Section End -->
            </div>

            <div class="carousel-item bg-warning text-dark">
                <!-- Hero Section Start -->
                <div class="hero-wrap style-three mt-0 ">
                    <div class="hero-bg bg-f"></div>
                    <img src="{{ asset('user/assets/img/hero/hero-shape-7.webp') }}" alt="Image"
                        class="hero-shape-one bounce" width="62" height="28">
                    <div class="container h-100">
                        <div class="row gx-5 align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <p class="hero-badge"><i class="ri-pulse-line"></i> Maternal & Fetal Monitoring</p>
                                    <h1>Bistos CTG <span style>Monitoring System</span></h1>

                                    <p>Designed for dependable prenatal care, the Bistos CTG Monitoring System provides continuous monitoring of fetal heart rate and uterine contractions with exceptional accuracy. Its user-friendly interface, real-time data visualization, and reliable performance make it an ideal solution for maternity hospitals, labor rooms, and obstetric clinics.</p>
                                    
                                    <!-- badges  -->
                                  
                                    <a href="{{ route('contact') }}" class="btn-two">Make
                                        An Appointment<i class="flaticon-right-arrow"></i></a>

                                </div>
                            </div>

                            <!-- Right Image with Effects -->
                            <!-- Right Image with Effects -->

                            <!-- Right Image & Animation -->
                            <div class="col-lg-6 position-relative">
                                <!-- Background Circle -->
                                <div class="circle-wrapper position-absolute top-50 start-50 translate-middle">
                                    <div class="circle circle-1"></div>
                                    <div class="circle circle-2"></div>
                                    <div class="circle circle-3"></div>
                                </div>
                                <div class="w-100 d-flex justify-content-center">
                                    <img src="{{ asset('user/assets/img/hero/3.webp') }}" 
                                        srcset="{{ asset('user/assets/img/hero/3s.webp') }} 300w, {{ asset('user/assets/img/hero/3.webp') }} 498w"
                                        sizes="(max-width: 575px) 300px, 498px"
                                        alt="Doctor"
                                        class="img-fluid position-relative z-1 floating" data-aos="zoom-in" width="498" height="800" loading="lazy">
                                </div>
                                <!-- Doctor Image -->


                                <!-- Diagnosis Stat -->

                                <!-- Heart Icon -->
                                <div class="heart-icon position-absolute" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="{{ asset('user/assets/img/hero/heart.webp') }}"
                                        alt="Heart" width="42" height="67" loading="lazy">
                                </div>

                                <!-- Patient Recovered -->
                                <div
                                    class="patient-recovered position-absolute bg-white rounded-pill shadow-sm d-flex align-items-center p-2 px-3">
                                    <div class="avatars d-flex me-2">
                                        <img src="{{ asset('user/assets/img/team/team-1.webp') }}"
                                            class="rounded-circle" width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-2.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-3.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                    </div>
                                    <small><strong class="text-primary">150k</strong>
                                        Patient recovers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Section End -->
            </div>

            <div class="carousel-item bg-warning text-dark">
                <!-- Hero Section Start -->
                <div class="hero-wrap style-three mt-0 ">
                    <div class="hero-bg bg-f"></div>
                    <img src="{{ asset('user/assets/img/hero/hero-shape-7.webp') }}" alt="Image"
                        class="hero-shape-one bounce" width="62" height="28">
                    <div class="container h-100">
                        <div class="row gx-5 align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <p class="hero-badge"><i class="ri-hand-heart-line"></i> Advanced Neonatal Care</p>
                                    <h1>Biorun Radiant <span style>Baby Warmer</span></h1>

                                    <p>Designed to provide a safe and controlled thermal environment, the Biorun Radiant Baby Warmer helps maintain optimal body temperature for newborns and premature infants. Equipped with intelligent temperature control, advanced safety alarms, and an ergonomic design, it supports superior neonatal care in NICUs, delivery rooms, and pediatric departments.</p>
                                    
                                 
                                    <a href="{{ route('contact') }}" class="btn-two">Make
                                        An Appointment<i class="flaticon-right-arrow"></i></a>

                                </div>
                            </div>

                            <!-- Right Image with Effects -->
                            <!-- Right Image with Effects -->

                            <!-- Right Image & Animation -->
                            <div class="col-lg-6 position-relative">
                                <!-- Background Circle -->
                                <div class="circle-wrapper position-absolute top-50 start-50 translate-middle">
                                    <div class="circle circle-1"></div>
                                    <div class="circle circle-2"></div>
                                    <div class="circle circle-3"></div>
                                </div>

                                <div class="w-100 d-flex justify-content-center">
                                    <img src="{{ asset('user/assets/img/hero/1.webp') }}" 
                                        srcset="{{ asset('user/assets/img/hero/1s.webp') }} 300w, {{ asset('user/assets/img/hero/1.webp') }} 498w"
                                        sizes="(max-width: 575px) 300px, 498px"
                                        alt="Doctor"
                                        class="img-fluid position-relative z-1 floating" data-aos="zoom-in" width="498" height="800" loading="lazy">
                                </div>

                                <!-- Doctor Image -->


                                <!-- Diagnosis Stat -->

                                <!-- Heart Icon -->
                                <div class="heart-icon position-absolute" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="{{ asset('user/assets/img/hero/heart.webp') }}"
                                        alt="Heart" width="42" height="67" loading="lazy">
                                </div>

                                <!-- Patient Recovered -->
                                <div
                                    class="patient-recovered position-absolute bg-white rounded-pill shadow-sm d-flex align-items-center p-2 px-3">
                                    <div class="avatars d-flex me-2">
                                        <img src="{{ asset('user/assets/img/team/team-1.webp') }}"
                                            class="rounded-circle" width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-2.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                        <img src="{{ asset('user/assets/img/team/team-3.webp') }}"
                                            class="rounded-circle ms-n2" width="24" height="24" alt="Patient Avatar">
                                    </div>
                                    <small><strong class="text-primary">150k</strong>
                                        Patient recovers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Section End -->
            </div>

        </div>

        <!-- <button class="carousel-control-prev" type="button"
                data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button"
                data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Feature Section Start -->
    <!-- Feature Section Start -->
    <!-- Feature Section Start -->
    <div class="bg_optional">
        <div class="container pt-100 pb-70">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title style-one text-center mb-40" data-aos="fade-down"
                        data-aos-duration="1000">
                        <span class="badge-tag">Our Work</span>
                        <h2>
                            Welcome To Sinoatrial Medical
                            <span>Technologies <img src="{{ asset('user/assets/img/section-shape-2.png') }}"
                                    alt="Image" width="64" height="64" loading="lazy"></span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center feature-card-wrap">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" data-aos="flip-left" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="feature-card">
                        <span><img src="{{ asset('user/assets/img/icons/1.png') }}" alt="Expert Manufacturing" width="58" height="58" loading="lazy"></span>
                        <h3>Expert Manufacturing</h3>
                        <p>Our skilled professionals ensure every product is
                            crafted with care, precision, and compliance to
                            international medical standards.</p>
                        <!-- <a href="{{ route('about') }}">Read More</a> -->
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" data-aos="flip-right" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="feature-card">
                        <span><img src="{{ asset('user/assets/img/icons/2.png') }}" alt="Fast Nationwide Delivery" width="58" height="58" loading="lazy"></span>
                        <h3>Fast Nationwide Delivery</h3>
                        <p>With efficient logistics and a reliable supply
                            chain, we ensure prompt delivery of medical
                            equipment across India’s healthcare network.</p>
                        <!-- <a href="{{ route('about') }}">Read More</a> -->
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-delay="300"
                    data-aos-duration="1000">
                    <div class="feature-card">
                        <span><img src="{{ asset('user/assets/img/icons/3.png') }}" alt="Certified & Reliable Products" width="58" height="58" loading="lazy"></span>
                        <h3>Certified & Reliable Products</h3>
                        <p>Our equipment undergoes rigorous testing to meet
                            safety regulations and is trusted by corporate
                            hospitals throughout the country.</p>
                        <!-- <a href="{{ route('about') }}">Read More</a> -->
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-delay="400"
                    data-aos-duration="1000">
                    <div class="feature-card">
                        <span><img src="{{ asset('user/assets/img/icons/4.png') }}" alt="Dedicated Support & Service" width="58" height="58" loading="lazy"></span>
                        <h3>Dedicated Support & Service</h3>
                        <p>We offer 24/7 technical support and service
                            assistance to ensure minimal downtime and
                            maximum performance in healthcare
                            facilities.</p>
                        <!-- <a href="{{ route('about') }}">Read More</a> -->
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="500"
                data-aos-duration="1200">
                <a href="{{ route('contact') }}" class="btn-two">Book
                    Appointment</a>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Feature Section End -->

    <!-- Feature Section End -->

    <!-- About Section Start -->
    <div class="about-wrap style-two ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/about/about-shape-3.png') }}" alt="Image"
                class="about-shape-one moveHorizontal" data-aos="zoom-in" data-aos-delay="100" width="64" height="64" loading="lazy">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="about-img-wrap">
                        <img src="{{ asset('user/assets/img/about/about-shape-4.webp') }}" alt="Image"
                            class="about-img-shape" data-aos="fade-up" data-aos-delay="300" width="74" height="61" loading="lazy">
                        <img src="{{ asset('user/assets/img/about/about-img-2.webp') }}" alt="Image"
                            class="about-img-one" data-aos="zoom-in" data-aos-delay="400" width="600" height="470" loading="lazy">
                        <img src="{{ asset('user/assets/img/about/about-img-3.webp') }}" alt="Image"
                            class="about-img-two" data-aos="zoom-in" data-aos-delay="500" width="424" height="300" loading="lazy">
                        <div class="promo-box" data-aos="fade-up" data-aos-delay="600">
                            <p class="h5">95%</p>
                            <span >Positive Feedback</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-xxl-0" data-aos="fade-left" data-aos-delay="300">
                    <div class="about-content">
                        <div class="content-title style-one" data-aos="fade-up" data-aos-delay="400">
                            <span class="badge-tag">WHO WE ARE</span>
                            <h2>15 Years of Trusted Service in
                                <span>Medical Technology
                                    <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image" width="64" height="64" loading="lazy">
                                </span>
                            </h2>
                            <p> Sinoatrial Medical Technologies is a trusted provider of medical equipment sales, installation, and service across Chennai and surrounding districts. With over 15 years of experience, we deliver reliable healthcare solutions to hospitals, clinics, diagnostic centers, and healthcare facilities..</p>
                            <p>
We offer a wide range of medical equipment, including Patient Monitors, Defibrillators, Ventilators, ECG Machines, Syringe Pumps, Infusion Pumps, Fetal Monitors, Suction Units, Pulse Oximeters, and other critical care devices, along with genuine accessories. Our focus on quality, prompt service, and dependable after-sales support ensures reliable performance and customer satisfaction
                            </p>

                               

                        </div>

                       
                        <!-- swiper content we  -->
                        <a href="{{ route('contact') }}" class="btn-two" data-aos="zoom-in" data-aos-delay="700">Get
                            in
                            Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Service Section Start -->

     <!-- Service Section Start -->
    <div class="service-wrap style-two bg_optional ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/services/service-shape-3.png') }}" alt="Image"
                class="service-shape moveHorizontal" width="64" height="64" loading="lazy">
            

            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="content-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="100">
                        <span class="badge-tag">MEDICAL EQUIPMENT</span>
                        <h2>We Provide Advanced & Reliable
                            <span>Hospital Equipment
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image" width="64" height="64" loading="lazy" class="d-sm-none">
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="service-slider-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="service-slider swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="service-card style-two">
                                <span class="service-icon">
                                    <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt="Service Icon" width="64" height="64" loading="lazy">
                                </span>
                                <span class="service-count">01</span>
                                <h3><a href="#">SpO₂ Sensors</a></h3>
                                <p>Providing genuine medical accessories such as ECG cables, SpO₂ sensors, NIBP cuffs, temperature probes, IBP cables and other compatible spare parts.</p>
                                <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>

                        <!-- Slide 2 - Bottom Center -->
                        <div class="swiper-slide">
                            <div class="service-card style-two">
                                <span class="service-icon">
                                    <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt="Service Icon" width="64" height="64" loading="lazy">
                                </span>
                                <span class="service-count">02</span>
                                <h3><a href="#">Critical Care Equipment</a></h3>
                                <p>roviding advanced ICU and emergency care equipment, including ventilators, defibrillators, infusion pumps, and syringe pumps.</p>
                                <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>

                        <!-- Slide 3 - Top -->
                        <div class="swiper-slide">
                            <div class="service-card style-two">
                                <span class="service-icon">
                                    <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt="Service Icon" width="64" height="64" loading="lazy">
                                </span>
                                <span class="service-count">03</span>
                                <h3><a href="#">Diagnostic Equipment</a></h3>
                                <p>Offering reliable diagnostic solutions, including ECG machines, Holter monitors, ABPM systems, and spirometers.</p>
                                <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>

                        <!-- Slide 4 - Right to Left (like car movement) -->
                        <div class="swiper-slide" data-aos="fade-left" data-aos-delay="500">
                            <div class="service-card style-two">
                                <span class="service-icon">
                                    <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt="Service Icon" width="64" height="64" loading="lazy">
                                </span>
                                <span class="service-count">04</span>
                                <h3><a href="#">Home Healthcare Equipment</a></h3>
                                <p>Providing reliable home healthcare solutions for safe and comfortable patient care, like Bipap, Cpap, BP Apparatus, Glucometer and monitoring devices.</p>
                                <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slider Navigation -->
                <div class="service-slider-btn slider-btn">
                    <div class="service-prev prev-btn"><img src="{{ asset('user/assets/img/left-arrow.svg') }}"
                            alt="Image" width="24" height="24" loading="lazy"></div>
                    <div class="service-next next-btn"><img src="{{ asset('user/assets/img/right-arrow.svg') }}"
                            alt="Image" width="24" height="24" loading="lazy"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- Service Section End -->
    

    <!-- Service Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="wh-wrap style-one ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/about/wh-shape-3.png') }}" alt="Image" class="wh-shape-one"
                data-aos="fade-down" data-aos-delay="100" width="64" height="64" loading="lazy">
            <div class="row gx-5 align-items-center">
                <!-- Content Left -->
                <div class="col-lg-6">
                    <div class="wh-content" data-aos="fade-right" data-aos-delay="200">
                        <div class="content-title style-one">
                            <span class="badge-tag" data-aos="fade-up" data-aos-delay="300">
                                Why Choose Us
                            </span>
                            <h2 data-aos="fade-up" data-aos-delay="400">
                                Trusted by India’s Leading <span>Hospitals &
                                    Clinics</span>
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image" width="64" height="64" loading="lazy">
                            </h2>
                            <p data-aos="fade-up" data-aos-delay="500">
                                At Sinoatrial Medical Technologies, we
                                prioritize safety, innovation, and
                                performance.
                                Our products are developed with deep
                                technical expertise and a strong focus on
                                hospital-grade reliability.
                            </p>
                        </div>
                        <ul class="feature-list list-style">
                            <li data-aos="fade-left" data-aos-delay="600">ISO-compliant,
                                quality-tested equipment</li>
                            <li data-aos="fade-left" data-aos-delay="700">In-house R&D for
                                innovative solutions</li>
                            <li data-aos="fade-left" data-aos-delay="800">Trusted by top
                                hospitals and medical chains</li>
                            <li data-aos="fade-left" data-aos-delay="900">Dedicated post-sales
                                and support service</li>
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
                            <img src="{{ asset('user/assets/img/about/wh-img-1.webp') }}" alt="Image" width="700" height="670" loading="lazy">
                        </div>
                        <div class="circle-wrap" data-aos="flip-up" data-aos-delay="600">
                            <i class="flaticon-heartbeat"></i>
                            <div class="circle-text">
                                <svg class="rotate" viewBox="0 0 300 300">
                                    <defs>
                                        <path id="circlePath_one"
                                            d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <g>
                                        <use xlink:href="#circlePath_one" fill="none" />
                                        <text fill="#000A2D">
                                            <textpath xlink:href="#circlePath_one">
                                                MEDICAL INNOVATION TRUST
                                            </textpath>
                                        </text>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Counter Section Start -->
    <div class="counter-wrap style-one pt-100 pb-75 bg_optional">
        <img src="{{ asset('user/assets/img/counter-shape.webp') }}" alt="Image" class="counter-shape" width="1920" height="615" loading="lazy">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="100">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/h.png') }}" alt="Hospital" width="64" height="64" loading="lazy">
                    </span>
                    <div class="counter-text">
                        <span class="counter">300</span>
                        <p>Hospitals Served</p>
                    </div>
                </div>
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="200">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/p.png') }}" alt="Products" width="64" height="64" loading="lazy">
                    </span>
                    <div class="counter-text">
                        <span class="counter">500</span>
                        <p>Products Delivered</p>
                    </div>
                </div>
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="300">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/m.png') }}" alt="Expertise" width="64" height="64" loading="lazy">
                    </span>
                    <div class="counter-text">
                        <span class="counter">20</span>
                        <p>Years of Expertise</p>
                    </div>
                </div>
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="400">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/c.png') }}" alt="Clients" width="64" height="64" loading="lazy">
                    </span>
                    <div class="counter-text">
                        <span class="counter">1200</span>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-wrap style-two pt-100 pb-75">
        <div class="container">
            <img src="{{ asset('user/assets/img/services/service-shape-3.png') }}" alt="Shape"
                class="testimonial-shape-one bounce sm-none" data-aos="zoom-in" data-aos-delay="100" width="64" height="64" loading="lazy">

            <div class="row mb-40 align-items-center">
                <div class="col-xxl-6 col-xl-8 col-lg-7 col-md-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="section-title style-one">
                        <span class="badge-tag">Client Testimonials</span>
                        <h2>Valuable Feedback From Our <span>Medical
                                Equipment Clients</span></h2>
                    </div>
                </div>
                <div class="testimonial-slider-btn slider-btn" data-aos="fade-left" data-aos-delay="200">
                    <div class="testimonial-prev prev-btn">
                        <img src="{{ asset('user/assets/img/left-arrow.svg') }}" alt="Left Arrow" width="24" height="24" loading="lazy">
                    </div>
                    <div class="testimonial-next next-btn">
                        <img src="{{ asset('user/assets/img/right-arrow.svg') }}" alt="Right Arrow" width="24" height="24" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="testimonial-slider-wrap style-two" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-slider-two swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="100">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="{{ asset('user/assets/img/team/team-4.webp') }}"
                                            alt="Dr. Arun" width="64" height="64" loading="lazy">
                                    </div>
                                    <div class="client-info">
                                        <p class="h5">Dr. Arun Kumar</p>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>We’ve been using Sinoatrial’s SpO₂
                                        sensors and ECG cables for over 2
                                        years now, and the quality is
                                        unmatched.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="150">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="{{ asset('user/assets/img/team/team-5.webp') }}"
                                            alt="Dr. Leena" width="64" height="64" loading="lazy">
                                    </div>
                                    <div class="client-info">
                                        <p class="h5">Dr. Leena George</p>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>The team at Sinoatrial Medical is
                                        incredibly professional. Their
                                        response time and service support
                                        are exceptional.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="200">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="{{ asset('user/assets/img/team/team-6.webp') }}"
                                            alt="Prakash" width="64" height="64" loading="lazy">
                                    </div>
                                    <div class="client-info">
                                        <p class="h5">Mr. Prakash Nair</p>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>Their range of accessories and
                                        sensors meet all our needs with
                                        top-notch safety and
                                        reliability.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="250">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="{{ asset('user/assets/img/team/team-7.webp') }}"
                                            alt="Ravi" width="64" height="64" loading="lazy">
                                    </div>
                                    <div class="client-info">
                                        <p class="h5">Dr. Ravi</p>
                                        <span>Healthcare Consultant</span>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>I appreciate their focus on quality
                                        and innovation. Their products are
                                        durable and reliable.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="300">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="{{ asset('user/assets/img/team/team-8.webp') }}"
                                            alt="Naveen" width="64" height="64" loading="lazy">
                                    </div>
                                    <div class="client-info">
                                        <p class="h5">Mr. Naveen Raj</p>
                                        <span>Medical Distributor</span>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>One of the best suppliers we've
                                        worked with. Their prompt delivery
                                        and service are remarkable.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="350">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="{{ asset('user/assets/img/team/team-10.webp') }}"
                                            alt="Ramesh" width="64" height="64" loading="lazy">
                                    </div>
                                    <div class="client-info">
                                        <p class="h5">Dr. Ramesh Kannan</p>
                                        <span>Chief Surgeon</span>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>Sinoatrial's commitment to precision
                                        gives us confidence in their
                                        critical care equipment.</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- swiper-wrapper -->
                </div> <!-- testimonial-slider-two -->
            </div> <!-- testimonial-slider-wrap -->
        </div> <!-- container -->
    </div>
    <!-- Testimonial Section End -->

    <!-- CTA Section Start -->
    <div class="cta-wrap style-one bg_optional" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <img src="{{ asset('user/assets/img/cta-shape.webp') }}" alt="Image" class="cta-shape" width="1920" height="397"
            data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="1000" loading="lazy">
        <div class="container text-center">
            <p class="h4" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                Have Any Questions? Feel Free to Contact Our Team
            </p>
            <a class="cta-contact position-relative" href="tel:04445428844" data-aos="flip-up"
                data-aos-delay="500" data-aos-duration="1200">
                044-4542 8844
                <img src="{{ asset('user/assets/img/1.png') }}" alt="Image" width="64" height="64"
                    class="position-absolute" data-aos="fade-in" data-aos-delay="800" data-aos-duration="1000" loading="lazy">
            </a>
            <a href="{{ route('contact') }}" class="btn-two order_btn" data-aos="zoom-in-up" data-aos-delay="600"
                data-aos-duration="1200">
                Order an Appointment
            </a>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Blog Section Start -->
    <div class="blog-wrap style-one pt-100 pb-75 bg_optional" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <!-- <img src="assets/img/blog/blog-shape-1.webp" alt="Image"
                    class="blog-shape sm-none bounce"
                    data-aos="zoom-in" data-aos-delay="200"
                    data-aos-duration="1000"> -->

            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title style-one text-center mb-40" data-aos="fade-down" data-aos-delay="300">
                        <span>Our Latest Articles</span>
                        <h2>
                            Stay Updated With Our Latest News & Blog
                            <span>Articles.</span>
                            <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image" width="64" height="64" loading="lazy">
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-delay="400"
                    data-aos-duration="1000">
                    <div class="blog-card style-one">
                        <div class="blog-card-img">
                            <img src="https://sinoatrial.in/images/new/blog_1.png" alt="spo2 sensor" width="400" height="250" loading="lazy">
                        </div>
                        <div class="blog-card-info">
                            <a href="#" class="blog-date"><i class="flaticon-calendar"></i>Dec 22,
                                2022</a>
                            <ul class="blog-metainfo list-style">
                                <li><a href="#">Medical Devices</a></li>
                                <li>No Comment</li>
                            </ul>
                            <h3><a href="#">SPO2 Sensor</a></h3>
                            <p>SINOATRIAL provides reliable SPO2 sensors
                                manufactured in an ISO 13485:2016 certified
                                facility, ensuring global quality standards
                                and dependable service.</p>
                            <a href="#" class="link-one">Read More...</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="1000">
                    <div class="blog-card style-one">
                        <div class="blog-card-img">
                            <img src="https://sinoatrial.in/images/new/blog_2.png" alt="Blood Pressure Accessories" width="400" height="250" loading="lazy">
                        </div>
                        <div class="blog-card-info">
                            <a href="#" class="blog-date"><i class="flaticon-calendar"></i>Dec 22,
                                2022</a>
                            <ul class="blog-metainfo list-style">
                                <li><a href="#">Healthcare
                                        Accessories</a></li>
                                <li>No Comment</li>
                            </ul>
                            <h3><a href="#">Blood Pressure NIBP / IBP &
                                    Ventilator Accessories</a></h3>
                            <p>Explore our wide range of NIBP/IBP and
                                ventilator accessories, engineered to meet
                                the highest quality assurance practices and
                                certifications.</p>
                            <a href="#" class="link-one">Read More...</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-left" data-aos-delay="600"
                    data-aos-duration="1000">
                    <div class="blog-card style-one">
                        <div class="blog-card-img">
                            <img src="https://sinoatrial.in/images/new/blog_3.png"
                                alt="ECG Cables & Surgical Accessories" width="400" height="250" loading="lazy">
                        </div>
                        <div class="blog-card-info">
                            <a href="#" class="blog-date"><i class="flaticon-calendar"></i>Dec 22,
                                2022</a>
                            <ul class="blog-metainfo list-style">
                                <li><a href="#">Surgical Equipment</a></li>
                                <li>No Comment</li>
                            </ul>
                            <h3><a href="#">ECG, EKG Cables and Surgical
                                    Accessories</a></h3>
                            <p>High-quality ECG/EKG cables and surgical
                                accessories from SINOATRIAL, trusted
                                globally for their performance and
                                compliance with medical standards.</p>
                            <a href="#" class="link-one">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Service Section Start -->
    <div class="service-wrap style-two bg_optional ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/services/service-shape-3.png') }}" alt="Image"
                class="service-shape moveHorizontal" width="64" height="64" loading="lazy">
            <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt="Image"
                class="service-shape-two bounce" width="64" height="64" loading="lazy">

            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="content-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="100">
                        <span>MEDICAL EQUIPMENT </span>
                        <h2>We Provide Best
                            <span>Installation
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image" width="64" height="64" loading="lazy">
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="service-slider-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="installation-slider swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img class="rounded" src="{{ asset('user/assets/img/IND/1.webp') }}" alt="Installation 1" width="350" height="350" loading="lazy">


                            </div>
                        </div>

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img class="rounded" src="{{ asset('user/assets/img/IND/2.webp') }}" alt="Installation 2" width="350" height="350" loading="lazy">


                            </div>
                        </div>

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img class="rounded" src="{{ asset('user/assets/img/IND/3.webp') }}" alt="Installation 3" width="350" height="350" loading="lazy">


                            </div>
                        </div>

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img class="rounded" src="{{ asset('user/assets/img/IND/4.webp') }}" alt="Installation 4" width="350" height="350" loading="lazy">


                            </div>
                        </div>

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img class="rounded" src="{{ asset('user/assets/img/IND/5.webp') }}" alt="Installation 5" width="350" height="350" loading="lazy">


                            </div>
                        </div>



                    </div>
                </div>

                <!-- Slider Navigation -->
                <div class="service-slider-btn slider-btn">
                    <div class="installation-prev prev-btn"><img src="{{ asset('user/assets/img/left-arrow.svg') }}"
                            alt="Image" width="24" height="24" loading="lazy"></div>
                    <div class="installation-next next-btn"><img src="{{ asset('user/assets/img/right-arrow.svg') }}"
                            alt="Image" width="24" height="24" loading="lazy"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- Service Section End -->


    </main>

    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->

    {{-- main Layout Ends here --}}




    <!-- Shop Area Start Here -->
    {{-- <section class="shop-wrap-layout1 bg-light-primary100 bg-light-secondary100">
        <div class="container">
            <div class="section-heading heading-dark text-center heading-layout1">
                <h2>Our Online Store</h2>
                <p>Shop Online Any Where</p>
            </div>
            <div class="rc-carousel dot-control-layout3" data-loop="true" data-items="4" data-margin="30"
                data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="true"
                data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
                data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false"
                data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true"
                data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="4"
                data-r-large-nav="false" data-r-large-dots="true" data-r-extra-large="4"
                data-r-extra-large-nav="false" data-r-extra-large-dots="true">

                @if ($products->count() > 0)
                    @foreach ($products as $product)
                        <div class="shop-box-layout1">
                            <a href="{{ route('product_details', $product->slug) }}">
                                <div class="item-img">
                                    <img src="/storage/{{ $product->thumbnail }}" alt="{{ $product->name }}"
                                        class="img-fluid">

                                </div>
                                <div class="item-content">
                                    <h3 class="item-title">
                                        {{ $product->name }}
                                    </h3>
                                    <div class="rate-items">
                                        @if ($product->rating > 0)
                                            @php
                                                $averageRating = round($product->rating); // Round the rating to the nearest integer
                                            @endphp
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i
                                                    class="fas fa-star {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                            @endfor
                                        @endif

                                    </div>

                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p class="text-left">No related products found.</p>
                @endif
            </div>
        </div>
    </section> --}}
    <!-- Shop Area End Here -->
    <!-- Javascript -->
    @include('user.layouts.script')
</body>

</html>
