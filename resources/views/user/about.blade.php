<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Sinoatrial, Medical, Technologies, About">
    <meta name="description" content="Learn more about Sinoatrial Medical Technologies, a leading provider of reliable, quality-tested hospital equipment and medical accessories in India." />
    <meta name="author" content="Syscorp" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us - Sinoatrial Medical Technologies</title>
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



    {{-- main Layout starts here --}}

    @include('user.layouts.breadcrumb', [
        'title' => 'About Us',
        'subtitle' => 'ABOUT OUR COMPANY',
        'subtitle_icon' => 'ri-shield-check-line',
        'description' => 'Leading the way in advanced cardiac and medical technologies with a commitment to quality and innovation.',
        'hero_icon' => '12.png',
        'items' => [
            ['label' => 'Home', 'url' => route('home'), 'icon' => 'ri-home-4-line'],
            ['label' => 'About Us', 'active' => true, 'icon' => 'ri-information-line']
        ]
    ])

    <!-- Service Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="wh-wrap style-one ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/about/wh-shape-3.png') }}" alt="Image" class="wh-shape-one"
                data-aos="fade-down" data-aos-delay="100">
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
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image">
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
                        <a href="tel:+919123456789" class="btn-two" data-aos="zoom-in" data-aos-delay="1000">
                            <i class="flaticon-phone-call"></i>+91 91234
                            56789
                        </a>
                    </div>
                </div>

                <!-- Image Right -->
                <div class="col-lg-6">
                    <div class="wh-img-wrap" data-aos="zoom-in-up" data-aos-delay="400">
                        <div class="wh-img">
                            <img src="{{ asset('user/assets/img/about/wh-img-1.webp') }}" alt="Image">
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
        <img src="{{ asset('user/assets/img/counter-shape.webp') }}" alt="Image" class="counter-shape">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="100">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/h.png') }}" alt>
                    </span>
                    <div class="counter-text">
                        <span class="counter">300</span>
                        <p>Hospitals Served</p>
                    </div>
                </div>
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="200">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/p.png') }}" alt>
                    </span>
                    <div class="counter-text">
                        <span class="counter">500</span>
                        <p>Products Delivered</p>
                    </div>
                </div>
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="300">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/m.png') }}" alt>
                    </span>
                    <div class="counter-text">
                        <span class="counter">20</span>
                        <p>Years of Expertise</p>
                    </div>
                </div>
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="400">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/c.png') }}" alt>
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
    <div class="cta-wrap style-one my-1 positi" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" style="background: #0043a6; /* Fallback for older browsers */
background: -webkit-linear-gradient(left, #0043a6, #db0a24);
background: -moz-linear-gradient(left, #0043a6, #db0a24);
background: linear-gradient(to right, #0043a6, #db0a24);">
        <!-- <img src="{{ asset('user/assets/img/cta-shape.webp') }}" alt="Image" class="cta-shape" width="1920" height="207" loading="lazy"> -->
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
    </main>

    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->

    <!-- page end -->


    <!-- Javascript -->
    @include('user.layouts.script')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
    {{-- main Layout Ends here --}}

</body>

</html>
