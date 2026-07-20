{{-- script Starts --}}

<!-- Link of JS files -->
<script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('user/assets/js/swiper.bundle.min.js') }}" defer></script>
<script src="{{ asset('user/assets/js/aos.js') }}" defer></script>
<script src="{{ asset('user/assets/js/main.js') }}" defer></script>

<script>
    // Only initialize Carousel if the element exists
    document.addEventListener('DOMContentLoaded', function() {
        var carouselEl = document.getElementById('carouselExampleAutoplaying') || document.getElementById('heroCarousel');
        if (carouselEl && typeof bootstrap !== 'undefined') {
            new bootstrap.Carousel(carouselEl, {
                interval: 4000,
                wrap: true
            });
        }
    });
</script>

{{-- script Ends --}}
