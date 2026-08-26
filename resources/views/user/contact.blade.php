<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Sinoatrial, Medical, Technologies, Contact, Support, Chennai, Medical Equipment">
    <meta name="description" content="Get in touch with Sinoatrial Medical Technologies for inquiries, technical support, department helplines, or to request a quote." />
    <meta name="author" content="Syscorp" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - Sinoatrial Medical Technologies</title>
    @include('user.layouts.link')

 
</head>

<body>

    <!-- Preloader -->
    @include('user.layouts.loader')

    <!-- Header Navigation -->
    @include('user.layouts.header', ['categories' => $categories])

    <main>

    @include('user.layouts.breadcrumb', [
        'title' => 'Contact Us',
        'subtitle' => '24/7 DEDICATED SUPPORT',
        'subtitle_icon' => 'ri-customer-service-2-line',
        'description' => "Have a question about our medical devices, need technical service, or looking for a customized quote? We're here to assist you.",
        'hero_icon' => '12.png',
        'items' => [
            ['label' => 'Home', 'url' => route('home'), 'icon' => 'ri-home-4-line'],
            ['label' => 'Contact Us', 'active' => true, 'icon' => 'ri-phone-line']
        ]
    ])
        <!-- 3. Department Direct Helplines Section -->
        <section class="helpline-bg-section">
            <div class="container">
                <div class="custom-section-title text-center">
                    <span class="badge-tag">Direct Helplines</span>
                    <h2>Department <span>Contact Numbers</span></h2>
                    <p>Connect directly with the specialized team member responsible for your specific inquiry.</p>
                </div>

                <div class="row g-4">
                    <!-- Complaints & New Enquiries -->
                    <div class="col-lg-4 col-md-6">
                        <div class="helpline-card-item">
                            <div class="helpline-header">
                                <div class="helpline-icon-box">
                                    <i class="ri-customer-service-2-line"></i>
                                </div>
                                <h3 class="helpline-title">Complaints & New Enquiries</h3>
                            </div>
                            <p class="helpline-text">
                                Direct helpline for general feedback, customer complaints, and new sales inquiries.
                            </p>
                            <div class="helpline-action-list">
                                <a href="tel:+919841698988" class="helpline-phone-btn">
                                    <span><i class="ri-phone-fill me-2"></i> +91 98416 98988</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Sales & Services Coordinator -->
                    <div class="col-lg-4 col-md-6">
                        <div class="helpline-card-item">
                            <div class="helpline-header">
                                <div class="helpline-icon-box">
                                    <i class="ri-user-voice-line"></i>
                                </div>
                                <h3 class="helpline-title">Sales & Services Coordinator</h3>
                            </div>
                            <p class="helpline-text">
                                Dedicated coordinators for sales quotes, equipment orders, and service schedule bookings.
                            </p>
                            <div class="helpline-action-list">
                                <a href="tel:+919841600013" class="helpline-phone-btn">
                                    <span><i class="ri-phone-fill me-2"></i> +91 98416 00013</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                                <a href="tel:+919884857114" class="helpline-phone-btn">
                                    <span><i class="ri-phone-fill me-2"></i> +91 98848 57114</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Services -->
                    <div class="col-lg-4 col-md-6">
                        <div class="helpline-card-item">
                            <div class="helpline-header">
                                <div class="helpline-icon-box">
                                    <i class="ri-tools-line"></i>
                                </div>
                                <h3 class="helpline-title">Services Technical Information</h3>
                            </div>
                            <p class="helpline-text">
                                Direct technical assistance for repairs, machine calibration, and equipment service support.
                            </p>
                            <div class="helpline-action-list">
                                <a href="tel:+919176067400" class="helpline-phone-btn">
                                    <span><i class="ri-phone-fill me-2"></i> +91 91760 67400</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                                <a href="tel:+919094202070" class="helpline-phone-btn">
                                    <span><i class="ri-phone-fill me-2"></i> +91 90942 02070</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Interactive Contact Form & Assistance Section -->
        <section class="interactive-contact-section">
            <div class="container">
                <div class="row g-4 align-items-stretch">
                    <!-- Left Column: Friendly Assistance Panel -->
                    <div class="col-lg-5">
                        <div class="friendly-side-box">
                            <div>
                                <h2 class="friendly-box-title">We're Here To Help You</h2>
                                <p class="friendly-box-desc">
                                    Whether you need assistance selecting medical technology or require emergency equipment repair, our friendly technical specialists are ready to help.
                                </p>

                                <!-- Working Hours Card -->
                                <div class="hours-badge-card">
                                    <h4><i class="ri-time-fill"></i> Office Working Hours</h4>
                                    <div class="hours-row">
                                        <span>Monday – Saturday:</span>
                                        <strong>9:00 AM – 6:00 PM</strong>
                                    </div>
                                    <div class="hours-row">
                                        <span>Emergency Tech Support:</span>
                                        <strong style="color: #38ef7d;">24 / 7 Available</strong>
                                    </div>
                                </div>

                                <!-- Feature Highlights -->
                                <ul class="feature-bullets">
                                    <li>
                                        <i class="ri-check-line"></i>
                                        <span>Prompt response within 24 business hours</span>
                                    </li>
                                    <li>
                                        <i class="ri-check-line"></i>
                                        <span>Certified biomedical engineering assistance</span>
                                    </li>
                                    <li>
                                        <i class="ri-check-line"></i>
                                        <span>Direct quotations for hospitals & clinics</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Emergency Hotline Box -->
                            <div class="emergency-call-badge">
                                <div class="emergency-icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <div class="emergency-details">
                                    <small>Need Immediate Help?</small>
                                    <a href="tel:+919841698988">+91 98416 98988</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Interactive Form -->
                    <div class="col-lg-7">
                        <div class="form-card-container">
                            <div class="form-card-header">
                                <h3>Share Your Message <span>With Us</span></h3>
                                <p>Fill out the form below and our dedicated support team will get back to you shortly.</p>
                            </div>

                            <form id="contactForm">
                                @csrf
                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <div class="input-icon-wrapper">
                                                <input type="text" name="name" id="name" class="custom-form-input" placeholder="Full Name*" required data-error="Please enter your name">
                                                <i class="ri-user-3-line"></i>
                                            </div>
                                            <small id="nameError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <div class="input-icon-wrapper">
                                                <input type="email" name="email" id="email" class="custom-form-input" placeholder="Email Address*" required data-error="Please enter your email">
                                                <i class="ri-mail-line"></i>
                                            </div>
                                            <small id="emailError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Mobile Number -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <div class="input-icon-wrapper">
                                                <input type="number" name="mobile_no" id="mobile_no" class="custom-form-input" placeholder="Phone Number*" required data-error="Please enter your phone number">
                                                <i class="ri-phone-line"></i>
                                            </div>
                                            <small id="mobileNoError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Subject -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <div class="input-icon-wrapper">
                                                <input type="text" name="subject" id="subject" class="custom-form-input" placeholder="Subject*" required data-error="Please enter your subject">
                                                <i class="ri-bookmark-3-line"></i>
                                            </div>
                                            <small id="subjectError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="col-12">
                                        <div class="form-group-custom">
                                            <div class="input-icon-wrapper textarea-icon">
                                                <textarea name="enquiry" id="enquiry" class="custom-form-input" placeholder="Write your message or inquiry here..." rows="5" required data-error="Please enter your message"></textarea>
                                                <i class="ri-chat-3-line"></i>
                                            </div>
                                            <small id="enquiryError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn-submit-custom" id="submitBtn">
                                            <i class="ri-send-plane-fill"></i>
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        
        <!-- 2. Main Contact & Office Info Section -->
        <section class="py-5">
            <div class="container py-4">
                <div class="custom-section-title text-center">
                    <span class="badge-tag">Get In Touch</span>
                    <h2>Our Primary <span>Office & Desk Details</span></h2>
                    <p>Reach out to our main headquarters in Chennai or contact our general support desk directly.</p>
                </div>

                <div class="row g-4">
                    <!-- Office Location Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="info-card-wrap">
                            <div class="info-icon-badge icon-badge-blue">
                                <i class="ri-map-pin-2-fill"></i>
                            </div>
                            <h3 class="info-card-title">Headquarters & Office</h3>
                            <p class="info-card-desc">
                                Sinoatrial Medical Technologies, No.10A, F2 First Floor, VGN Nagar, 4th main road, Ayyapanthangal, Chennai-600056.
                            </p>
                            <div>
                                <a href="https://maps.google.com/?q=SINOATRIAL+MEDICAL+TECHNOLOGIES+Ayyapanthangal+Chennai" target="_blank" class="contact-link-item">
                                    <i class="ri-direction-fill"></i>
                                    <span>Get Directions on Google Maps</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="info-card-wrap">
                            <div class="info-icon-badge icon-badge-teal">
                                <i class="ri-mail-open-fill"></i>
                            </div>
                            <h3 class="info-card-title">Official Email Support</h3>
                            <p class="info-card-desc">
                                Send us an email for general inquiries, formal quotation requests, and official support correspondence.
                            </p>
                            <div class="d-flex flex-column gap-2">
                                <a href="mailto:sinoatrialservice@gmail.com" class="contact-link-item">
                                    <i class="ri-mail-send-fill"></i>
                                    <span>sinoatrialservice@gmail.com</span>
                                </a>
                                <a href="mailto:sinoatrialmedical@gmail.com" class="contact-link-item">
                                    <i class="ri-mail-send-fill"></i>
                                    <span>sinoatrialmedical@gmail.com</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- General Office Line Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="info-card-wrap">
                            <div class="info-icon-badge icon-badge-orange">
                                <i class="ri-phone-find-fill"></i>
                            </div>
                            <h3 class="info-card-title">General Office Desk</h3>
                            <p class="info-card-desc">
                                Administrative landline and primary mobile support lines for general administrative inquiries.
                            </p>
                            <div class="d-flex flex-column gap-2">
                                <a href="tel:04445428844" class="contact-link-item">
                                    <i class="ri-phone-fill"></i>
                                    <span>044 - 4542 8844 (Landline)</span>
                                </a>
                                <a href="tel:+919659446837" class="contact-link-item">
                                    <i class="ri-cellphone-fill"></i>
                                    <span>+91 96594 46837 (Mobile)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       

        <!-- 5. Interactive Map Section -->
        <section class="map-section-wrap">
            <div class="container">
                <div class="map-card-wrapper">
                    <div class="map-card-header">
                        <h4>
                            <i class="ri-map-pin-2-fill"></i>
                            <span>Visit Our Main Office Location in Chennai</span>
                        </h4>
                        <span class="map-badge"><i class="ri-building-line me-1"></i> Sinoatrial Medical Technologies</span>
                    </div>
                    <div class="ratio ratio-21x9" style="min-height: 420px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.910096947636!2d80.13860337980202!3d13.041394289606902!3d13.041394289606902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52610e55ef23b7%3A0x2a5034f49f43e426!2sSINOATRIAL%20MEDICAL%20TECHNOLOGIES!5e0!3m2!1sen!2sin!4v1753079804784!5m2!1sen!2sin"
                            style="border:0; width:100%; height:100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    @include('user.layouts.footer')

    <!-- Scripts -->
    @include('user.layouts.script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Auto-fill form based on query parameters
            const urlParams = new URLSearchParams(window.location.search);
            const serviceParam = urlParams.get('service');
            const productParam = urlParams.get('product');
            const subjectParam = urlParams.get('subject');

            if (serviceParam) {
                $("#subject").val("Service Inquiry: " + decodeURIComponent(serviceParam));
                $("#enquiry").val("Hello, I would like to enquire about your service: " + decodeURIComponent(serviceParam) + ". Please provide more details.");
            } else if (productParam) {
                $("#subject").val("Product Inquiry: " + decodeURIComponent(productParam));
                $("#enquiry").val("Hello, I would like to enquire about the product: " + decodeURIComponent(productParam) + ". Please provide pricing and technical details.");
            } else if (subjectParam) {
                $("#subject").val(decodeURIComponent(subjectParam));
            }

            $("#contactForm").submit(function(event) {
                event.preventDefault();

                let submitButton = $("#submitBtn");
                let originalText = submitButton.html();
                
                submitButton.prop("disabled", true).html('<i class="ri-loader-4-line ri-spin"></i> Submitting...');

                let formData = {
                    name: $("#name").val(),
                    mobile_no: $("#mobile_no").val(),
                    email: $("#email").val(),
                    subject: $("#subject").val(),
                    enquiry: $("#enquiry").val(),
                    _token: "{{ csrf_token() }}"
                };

                // Clear previous error messages
                $(".error-msg").text("");

                $.ajax({
                    type: "POST",
                    url: "{{ route('contact.store') }}",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Message Sent Successfully!",
                                text: "Thank you for contacting Sinoatrial Medical Technologies. Our team will reach out to you soon.",
                                icon: "success",
                                confirmButtonColor: "#0247a5"
                            }).then(() => {
                                $("#contactForm")[0].reset();
                            });
                        }
                        submitButton.prop("disabled", false).html(originalText);
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON ? xhr.responseJSON.errors : null;
                        if (errors) {
                            if (errors.name) $("#nameError").text(errors.name[0]);
                            if (errors.mobile_no) $("#mobileNoError").text(errors.mobile_no[0]);
                            if (errors.email) $("#emailError").text(errors.email[0]);
                            if (errors.subject) $("#subjectError").text(errors.subject[0]);
                            if (errors.enquiry) $("#enquiryError").text(errors.enquiry[0]);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "Something went wrong while submitting. Please try again.",
                                icon: "error",
                                confirmButtonColor: "#0247a5"
                            });
                        }
                        submitButton.prop("disabled", false).html(originalText);
                    }
                });
            });
        });
    </script>
</body>

</html>
