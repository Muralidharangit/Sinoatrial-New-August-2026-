<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Sinoatrial, Medical, Technologies, Services, Support">
    <meta name="description" content="Explore the professional services provided by Sinoatrial Medical Technologies, from installation and calibration to expert medical equipment maintenance." />
    <meta name="author" content="Syscorp" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Services - Sinoatrial Medical Technologies</title>
    <style>
        .service-card.style-two{
    position: relative !important;
}
    </style>
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

    <!-- scrollUp Start Here -->
    {{-- <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a> --}}
    <!-- scrollUp End Here -->

    {{-- main Layout Starts here --}}

    @include('user.layouts.breadcrumb', [
        'title' => 'Services',
        'subtitle' => 'PROFESSIONAL SERVICES',
        'subtitle_icon' => 'ri-stethoscope-line',
        'description' => 'Explore our comprehensive range of specialized medical device services, repairs, and technical support.',
        'hero_icon' => '13.png',
        'items' => [
            ['label' => 'Home', 'url' => route('home'), 'icon' => 'ri-home-4-line'],
            ['label' => 'Services', 'active' => true, 'icon' => 'ri-service-line']
        ]
    ])

    <!-- Service Section Start -->
    <div class="service-wrap style-two bg_optional ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/services/service-shape-3.png') }}" alt="Image"
                class="service-shape moveHorizontal">
            <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt="Image"
                class="service-shape-two bounce">

            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="content-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="100">
                        <span class="badge-tag">MEDICAL EQUIPMENT</span>
                        <h2>We Provide Advanced & Reliable
                            <span>Hospital Equipment
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image">
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            

            <div class="service-slider-wrap" data-aos="fade-up" data-aos-delay="200">
               
                    
            <div class="row g-4 justify-content-center service-list">

                <!-- Service 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-card-modern h-100">
                        <span class="service-count">01</span>
                        <div class="service-icon-badge icon-badge-blue">
                            <i class="ri-heart-pulse-line"></i>
                        </div>
                        <h3 class="service-title">
                            <a href="{{ route('contact') }}?service=Patient+Monitor+Accessories">Patient Monitor Accessories</a>
                        </h3>
                        <ul class="service-points-list text-start">
                            <li><i class="ri-checkbox-circle-line"></i><span>SpO₂ Sensors</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>ECG Cables & Lead Wires</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>NIBP Cuffs & Hoses</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Temperature Probes</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>IBP Cables</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>EtCO₂ Sensors & Modules</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Batteries & Chargers</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Power Adapters & Trolleys</span></li>
                        </ul>
                        <div class="service-card-footer mt-auto pt-3">
                            <a href="{{ route('contact') }}?service=Patient+Monitor+Accessories" class="btn-service-action">
                                <span>Enquire Service</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-card-modern h-100">
                        <span class="service-count">02</span>
                        <div class="service-icon-badge icon-badge-teal">
                            <i class="ri-tools-line"></i>
                        </div>
                        <h3 class="service-title">
                            <a href="{{ route('contact') }}?service=AMC+and+Technical+Support">AMC & Technical Support</a>
                        </h3>
                        <ul class="service-points-list text-start">
                            <li><i class="ri-checkbox-circle-line"></i><span>Annual Maintenance Contract (AMC)</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Preventive & Breakdown Maintenance</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Equipment Installation & Calibration</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Software & Firmware Updates</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>On-site & Remote Assistance</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Spare Parts Replacement</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>User & Staff Technical Training</span></li>
                        </ul>
                        <div class="service-card-footer mt-auto pt-3">
                            <a href="{{ route('contact') }}?service=AMC+and+Technical+Support" class="btn-service-action">
                                <span>Enquire Service</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-card-modern h-100">
                        <span class="service-count">03</span>
                        <div class="service-icon-badge icon-badge-orange">
                            <i class="ri-shield-cross-line"></i>
                        </div>
                        <h3 class="service-title">
                            <a href="{{ route('contact') }}?service=Critical+Care+Equipment+Services">Critical Care Services</a>
                        </h3>
                        <ul class="service-points-list text-start">
                            <li><i class="ri-checkbox-circle-line"></i><span>Patient Monitors & Defibrillators</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Ventilators & ICU Systems</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Infusion & Syringe Pumps</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Fetal Monitors (CTG)</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Suction Units & Oximeters</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>CPAP & BiPAP Devices</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>ICU Equipment Calibration</span></li>
                        </ul>
                        <div class="service-card-footer mt-auto pt-3">
                            <a href="{{ route('contact') }}?service=Critical+Care+Equipment+Services" class="btn-service-action">
                                <span>Enquire Service</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-card-modern h-100">
                        <span class="service-count">04</span>
                        <div class="service-icon-badge icon-badge-purple">
                            <i class="ri-microscope-line"></i>
                        </div>
                        <h3 class="service-title">
                            <a href="{{ route('contact') }}?service=Diagnostic+Equipment+Services">Diagnostic Equipment Services</a>
                        </h3>
                        <ul class="service-points-list text-start">
                            <li><i class="ri-checkbox-circle-line"></i><span>ECG Machines (3, 6 & 12 Channel)</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>TMT (Stress Test) Systems</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Holter & ABPM Monitors</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Spirometers & EEG/EMG Machines</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Diagnostic Ultrasound Systems</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Vital Signs & Patient Monitors</span></li>
                        </ul>
                        <div class="service-card-footer mt-auto pt-3">
                            <a href="{{ route('contact') }}?service=Diagnostic+Equipment+Services" class="btn-service-action">
                                <span>Enquire Service</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-card-modern h-100">
                        <span class="service-count">05</span>
                        <div class="service-icon-badge icon-badge-pink">
                            <i class="ri-radar-line"></i>
                        </div>
                        <h3 class="service-title">
                            <a href="{{ route('contact') }}?service=Radiology+Equipment+Services">Radiology Equipment Services</a>
                        </h3>
                        <ul class="service-points-list text-start">
                            <li><i class="ri-checkbox-circle-line"></i><span>Digital & Mobile X-ray Systems</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>C-Arm & Ultrasound Systems</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>CR/DR System Support</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Image Printers & Workstations</span></li>
                            <li><i class="ri-checkbox-circle-line"></i><span>Radiology System Calibration</span></li>
                        </ul>
                        <div class="service-card-footer mt-auto pt-3">
                            <a href="{{ route('contact') }}?service=Radiology+Equipment+Services" class="btn-service-action">
                                <span>Enquire Service</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

                <!-- Slider Navigation -->

            </div>

        </div>
    </div>
    <!-- Service Section End -->
    </main>

    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->
    {{-- main Layout Ends here --}}
    <!-- Javascript -->
    @include('user.layouts.script')


</body>

</html>
