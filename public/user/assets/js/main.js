(function() {
    "use strict";

    // Preloader — hide after load or within 1s max
    function hidePreloader() {
        var body = document.querySelector('body');
        if (body && !body.classList.contains("loaded")) {
            body.classList.add("loaded");
            // Refresh AOS immediately and progressively as the loader wrapper transitions away
            if (typeof AOS !== 'undefined') {
                AOS.refresh();
                window.dispatchEvent(new Event('scroll'));
            }
            setTimeout(function() {
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                    window.dispatchEvent(new Event('scroll'));
                }
            }, 200);
            setTimeout(function() {
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                    window.dispatchEvent(new Event('scroll'));
                }
            }, 600);
            setTimeout(function() {
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                    window.dispatchEvent(new Event('scroll'));
                }
            }, 1100); // After transition completes
        }
    }
    window.addEventListener('load', hidePreloader);
    setTimeout(hidePreloader, 1000);

    // ---- Initialise everything after DOM is ready ----
    document.addEventListener('DOMContentLoaded', function() {

        // Header Sticky
        var navbar = document.getElementById("navbar");
        if (navbar) {
            window.addEventListener('scroll', function() {
                navbar.classList.toggle('sticky', window.scrollY >= 150);
            }, { passive: true });
        }

        // Back to Top
        var topbutton = document.getElementById("backtotop");
        if (topbutton) {
            topbutton.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
            window.addEventListener('scroll', function() {
                topbutton.style.opacity = (document.documentElement.scrollTop > 200) ? "1" : "0";
            }, { passive: true });
        }

        // ---- Swiper: initialise only if elements exist ----
        if (typeof Swiper !== 'undefined') {

            // Service Slider
            if (document.querySelector('.service-slider')) {
                new Swiper(".service-slider", {
                    spaceBetween: 25,
                    grabCursor: true,
                    loop: false,
                    speed: 800,
                    navigation: { nextEl: ".service-next", prevEl: ".service-prev" },
                    breakpoints: {
                        0:    { slidesPerView: 1 },
                        768:  { slidesPerView: 2 },
                        1200: { slidesPerView: 3 }
                    }
                });
            }

            // About Slider
            if (document.querySelector('.about-slider')) {
                new Swiper(".about-slider", {
                    spaceBetween: 20,
                    grabCursor: true,
                    loop: true,
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    speed: 800,
                    pagination: { el: ".about-slider-pagination", clickable: true },
                    slidesPerView: 1
                });
            }

            // Installation Slider
            if (document.querySelector('.installation-slider')) {
                new Swiper(".installation-slider", {
                    spaceBetween: 25,
                    grabCursor: true,
                    loop: false,
                    speed: 800,
                    navigation: { nextEl: ".installation-next", prevEl: ".installation-prev" },
                    breakpoints: {
                        0:    { slidesPerView: 1 },
                        768:  { slidesPerView: 2 },
                        1200: { slidesPerView: 3 }
                    }
                });
            }

            // Testimonial Slider Two
            if (document.querySelector('.testimonial-slider-two')) {
                new Swiper(".testimonial-slider-two", {
                    spaceBetween: 25,
                    grabCursor: true,
                    loop: false,
                    speed: 800,
                    navigation: { nextEl: ".testimonial-next", prevEl: ".testimonial-prev" },
                    breakpoints: {
                        0:    { slidesPerView: 1 },
                        768:  { slidesPerView: 2 },
                        1200: { slidesPerView: 3 }
                    }
                });
            }

            // Testimonial Slider Three (with pagination)
            if (document.querySelector('.testimonial-slider-three')) {
                new Swiper(".testimonial-slider-three", {
                    spaceBetween: 25,
                    grabCursor: true,
                    loop: false,
                    speed: 800,
                    pagination: { el: ".testimonial-pagination", dynamicBullets: true, clickable: true },
                    navigation: { nextEl: ".testimonial-next", prevEl: ".testimonial-prev" },
                    breakpoints: {
                        0:    { slidesPerView: 1 },
                        768:  { slidesPerView: 2 },
                        1200: { slidesPerView: 3 }
                    }
                });
            }

            // Team Slider
            if (document.querySelector('.team-slider')) {
                new Swiper(".team-slider", {
                    spaceBetween: 25,
                    grabCursor: true,
                    loop: false,
                    speed: 800,
                    navigation: { nextEl: ".team-next", prevEl: ".team-prev" },
                    breakpoints: {
                        0:    { slidesPerView: 1 },
                        768:  { slidesPerView: 2 },
                        1200: { slidesPerView: 3 }
                    }
                });
            }
        }

        // ---- AOS ----
        if (typeof AOS !== 'undefined') {
            AOS.init({
                once: true,
                duration: 800,
                offset: 60,
                easing: 'ease-out',
                disable: function() { return window.innerWidth < 480; }  // skip animations on small phones for speed
            });
        }

        // ---- Counter (IntersectionObserver) ----
        if ("IntersectionObserver" in window) {
            var counterObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var counter = entry.target;
                        var target = parseInt(counter.innerText) || 0;
                        var step = target / 150;
                        var current = 0;
                        var timer = setInterval(function() {
                            current += step;
                            counter.innerText = Math.floor(current);
                            if (Math.floor(current) >= target) {
                                counter.innerText = target;
                                clearInterval(timer);
                            }
                        }, 10);
                        observer.unobserve(counter);
                    }
                });
            }, { threshold: 0.3 });

            document.querySelectorAll(".counter").forEach(function(counter) {
                counterObserver.observe(counter);
            });
        }

    }); // end DOMContentLoaded

})();

// Before & After Image Slide
function beforeAfter() {
    var el = document.getElementById("before_after");
    var slider = document.getElementById("before_after_slider");
    if (el && slider) el.style.width = slider.value + "%";
}

// Light/Dark Mode
try {
    function setTheme(themeName) {
        localStorage.setItem('dolt_theme', themeName);
        document.documentElement.className = themeName;
    }
    function toggleTheme() {
        setTheme(localStorage.getItem('dolt_theme') === 'theme-dark' ? 'theme-light' : 'theme-dark');
    }
    (function() {
        var saved = localStorage.getItem('dolt_theme');
        var isDark = saved === 'theme-dark';
        setTheme(isDark ? 'theme-dark' : 'theme-light');
        var sliderEl = document.getElementById('slider');
        if (sliderEl) sliderEl.checked = !isDark;
    })();
} catch (err) {}