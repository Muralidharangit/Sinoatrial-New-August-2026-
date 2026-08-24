<footer class="footer-wrap style-one">
    <div class="container">
        <div class="row g-4">
            
            <!-- Column 1: Company Logo & Info -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="footer-widget">
                    <div class="bg-white d-inline-block p-2 rounded-3 mb-3">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('user/assets/img/logo.webp') }}" alt="Sinoatrial Logo" height="46" loading="lazy">
                        </a>
                    </div>
                    <p class="comp-desc">
                        SINOATRIAL Medical Technologies has globally experienced management personnel dedicated to making SINOATRIAL the preferred choice for healthcare professionals across India.
                    </p>
                    <ul class="social-profile-footer">
                        <li><a href="#" target="_blank" aria-label="Facebook"><i class="ri-facebook-fill"></i></a></li>
                        <li><a href="#" target="_blank" aria-label="Twitter"><i class="ri-twitter-fill"></i></a></li>
                        <li><a href="#" target="_blank" aria-label="Instagram"><i class="ri-instagram-line"></i></a></li>
                        <li><a href="#" target="_blank" aria-label="LinkedIn"><i class="ri-linkedin-fill"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-2 col-md-6 col-12 ms-lg-auto">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Quick Links</h3>
                    <ul class="footer-menu d-flex flex-column gap-2">
                        <li><a href="{{ route('home') }}"><i class="ri-arrow-right-s-line"></i> Home</a></li>
                        <li><a href="{{ route('about') }}"><i class="ri-arrow-right-s-line"></i> About Us</a></li>
                        <li><a href="{{ route('service') }}"><i class="ri-arrow-right-s-line"></i> Services</a></li>
                       
                        <li><a href="{{ route('contact') }}"><i class="ri-arrow-right-s-line"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Column 3: Operating Hours -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Clinic Hours</h3>
                    <ul class="opening-time">
                        <li><span>Mon - Thu</span> <span>9:00 AM - 6:00 PM</span></li>
                        <li><span>Friday</span> <span>9:00 AM - 6:00 PM</span></li>
                        <li><span>Saturday</span> <span>9:00 AM - 6:00 PM</span></li>
                        <li><span>Sunday</span> <span class="text-danger fw-bold">Closed</span></li>
                    </ul>
                </div>
            </div>

            <!-- Column 4: Contact Info -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Contact Us</h3>
                    <ul class="footer-contact-list">
                        <li class="footer-contact-item">
                            <i class="ri-map-pin-line"></i>
                            <div>
                                No.10A, F2 First Floor, VGN Nagar, 4th Main Road, Ayyapanthangal, Chennai - 600056.
                            </div>
                        </li>
                        <li class="footer-contact-item">
                            <i class="ri-phone-line"></i>
                            <div>
                                <a href="tel:04445428844">044-4542 8844</a><br>
                                <a href="tel:+919659446837">+91 96594 46837</a> / <a href="tel:+919841698988">98416 98988</a>
                            </div>
                        </li>
                        <li class="footer-contact-item">
                            <i class="ri-mail-line"></i>
                            <div class="d-flex flex-column" style="word-break: break-all;">
                                <a href="mailto:sinoatrialservice@gmail.com">sinoatrialservice@gmail.com</a>
                                <a href="mailto:sinoatrialmedical@gmail.com">sinoatrialmedical@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer Copyright Bar -->
    <div class="footer-bottom-bar text-center">
        <div class="container">
            <p class="m-0">
                &copy; 2026 <strong>Sinoatrial Medical Technologies</strong>. All Rights Reserved. Developed by <a href="#" target="_blank">Syscorp</a>
            </p>
        </div>
    </div>
</footer>

<button type="button" id="backtotop" class="position-fixed text-center border-0 p-0" aria-label="Back to top">
    <i class="ri-arrow-up-line"></i>
</button>
