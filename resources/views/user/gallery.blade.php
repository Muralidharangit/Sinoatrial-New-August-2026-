<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=" ">
    <meta name="description" content="" />
    <meta name="author" content="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Gallery</title>
    @include('user.layouts.link')
    <style>
        button.btn.btn-outline-primary.btn-two.active {
            background-color: #db0007;
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

    <!-- scrollUp Start Here -->
    {{-- <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a> --}}
    <!-- scrollUp End Here -->


    {{-- main Layout starts here --}}
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <!-- <img src="assets/img/breadcrumb/br-shape-1.webp" alt="Image" class="br-shape-one bounce sm-none"> -->
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-2.webp') }}" alt="Image"
            class="br-shape-two moveHorizontal sm-none">
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-3.webp') }}" alt="Image" class="br-shape-three">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Gallery</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Service Section End -->
    <section class="wh-wrap style-one ptb-100">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="content-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="100">
                    <span>MEDICAL EQUIPMENT</span>
                    <h2>We Provide Advanced & Reliable
                        <span>Hospital Equipment
                            <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image">
                        </span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Filter Buttons -->
            <div class="filter-buttons py-3 d-flex gap-2 justify-content-center my-3">
                <button class="btn btn-outline-primary active btn-two" data-filter="all">All</button>
                @foreach ($gallery_categories as $category)
                    <button class="btn btn-outline-primary btn-two" data-filter="{{ Str::slug($category->name) }}">
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>

            <!-- Gallery Grid -->
            <div class="row">
                @if ($gallery_images->count())
                    @foreach ($gallery_images as $image)
                        <div class="col-lg-4 col-md-6 gallery-item {{ Str::slug($image->category->name ?? '') }}">
                            <div class="service-card style-three">
                                <span class="service-img">
                                    <img src="{{ asset($image->image) }}" alt="{{ $image->name }}" class="w-100"
                                        style="height: 300px; width: 100% !important; object-fit: cover;">
                                </span>
                            </div>
                        </div>
                    @endforeach

                    {{-- Shown only when a filter has no matching images --}}
                    <div class="col-12 d-none" id="noImagesFilterMessage">
                        <p class="text-center py-5 mb-0">No images found for this category.</p>
                    </div>
                @else
                    <div class="col-12">
                        <p class="text-center py-5 mb-0">No images found.</p>
                    </div>
                @endif
            </div>
        </div>


    </section>
    {{-- main Layout Ends here --}}
    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->

    <!-- page end -->
    <!-- Javascript -->
    @include('user.layouts.script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-buttons .btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.classList.contains(filterValue)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Optional: Trigger the default filter on page load
            const defaultButton = document.querySelector('.filter-buttons .btn.active');
            if (defaultButton) defaultButton.click();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.filter-buttons [data-filter]');
            const items = document.querySelectorAll('.gallery-item');
            const noMsg = document.getElementById('noImagesFilterMessage');

            buttons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');

                    // Active button UI
                    buttons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    let visibleCount = 0;

                    items.forEach(item => {
                        if (filter === 'all' || item.classList.contains(filter)) {
                            item.style.display = ''; // show
                            visibleCount++;
                        } else {
                            item.style.display = 'none'; // hide
                        }
                    });

                    // If no items are visible, show message
                    if (visibleCount === 0) {
                        noMsg.classList.remove('d-none');
                    } else {
                        noMsg.classList.add('d-none');
                    }
                });
            });
        });
    </script>
</body>

</html>
