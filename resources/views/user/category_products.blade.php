<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Sinoatrial, Medical, Technologies, Products, Category">
    <meta name="description" content="Browse our wide selection of medical equipment and hospital supplies sorted by specialized medical categories." />
    <meta name="author" content="Syscorp" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Category Products - Sinoatrial Medical Technologies</title>
    @include('user.layouts.link')
    <style>
        li.active {
            /* background-color: #2457aa; */
            color: #2457aa
        }

        li.active a {
            /* background-color: #2457aa; */
            color: #2457aa !important;
            font-weight: 700 !important;
        }

        .discount_price.product-Price-amount {
            font-weight: 500;
            text-decoration: line-through;
            margin-left: 5px;
            color: #656c76;
        }

        /* Modern Category Widget */
        .widget-categories-modern {
            background: #ffffff;
            border: 1px solid #eef2f6;
            box-shadow: 0 10px 30px rgba(0, 10, 45, 0.04);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .widget-categories-modern:hover {
            box-shadow: 0 15px 35px rgba(0, 10, 45, 0.08);
        }

        .widget-categories-modern .widget-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--titleColor);
            position: relative;
            padding-bottom: 12px;
            margin-bottom: 24px;
            border-bottom: 2px solid #eef2f6;
        }

        .widget-categories-modern .widget-title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 40px;
            height: 2px;
            background: var(--primaryColor); /* Themed Red Accent Bar */
            border-radius: 2px;
        }

        .widget-categories-modern .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .widget-categories-modern .category-item {
            border-radius: 10px;
            border: 1px solid #f0f4f8;
            background: #fafbfc;
            transition: all 0.3s ease;
        }

        .widget-categories-modern .category-link {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 16px;
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .widget-categories-modern .category-icon {
            font-size: 10px;
            margin-right: 10px;
            color: #adb5bd;
            transition: all 0.3s ease;
        }

        .widget-categories-modern .category-count {
            background: #eef2f6;
            color: #6c757d;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        /* Hover States */
        .widget-categories-modern .category-item:hover {
            background: rgba(194, 28, 34, 0.03); /* Soft Red Tint */
            border-color: rgba(194, 28, 34, 0.2);
            transform: translateY(-2px);
        }

        .widget-categories-modern .category-item:hover .category-link {
            color: var(--primaryColor);
        }

        .widget-categories-modern .category-item:hover .category-icon {
            color: var(--primaryColor);
            transform: translateX(4px);
        }

        .widget-categories-modern .category-item:hover .category-count {
            background: var(--primaryColor);
            color: #ffffff;
        }

        /* Active State */
        .widget-categories-modern .category-item.active {
            background: var(--primaryColor);
            border-color: var(--primaryColor);
        }

        .widget-categories-modern .category-item.active .category-link {
            color: #ffffff !important;
        }

        .widget-categories-modern .category-item.active .category-icon {
            color: #ffffff;
            transform: translateX(4px);
        }

        .widget-categories-modern .category-item.active .category-count {
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
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
    @include('user.layouts.breadcrumb', [
        'title' => $category->name ?? 'Categories Details',
        'subtitle' => 'PRODUCT CATEGORIES',
        'subtitle_icon' => 'ri-grid-fill',
        'description' => 'High-quality specialized medical technologies tailored for professional healthcare environments.',
        'hero_icon' => '12.png',
        'items' => [
            ['label' => 'Home', 'url' => route('home'), 'icon' => 'ri-home-4-line'],
            ['label' => 'Products', 'url' => route('product'), 'icon' => 'ri-capsule-line'],
            ['label' => $category->name ?? 'Categories', 'active' => true, 'icon' => 'ri-layout-grid-line']
        ]
    ])

    <section class="shop-wrap-layout1 py-5 bg-light">
        <div class="container">
            <div class="row">

                <!-- Sidebar Column -->
                <div class="col-xl-3 col-lg-4">
                    <div class="widget widget-categories-modern">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="category-list">
                            @foreach ($categories as $category)
                                <li class="category-item {{ request()->segment(2) == $category->name ? 'active' : '' }} text-capitalize">
                                    <a href="{{ route('category.products', $category->name) }}" class="category-link">
                                        <span class="category-name-wrapper">
                                            <i class="fas fa-chevron-right category-icon"></i>
                                            {{ $category->name }}
                                        </span>
                                        <span class="category-count">{{ $category->products_count }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Products Column -->
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        {{-- starts --}}
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4">
                                    <a href="{{ route('product_details', $product->slug) }}">
                                        <div class="shop-box-layout1">
                                            <div class="item-img">
                                                <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="Product"
                                                    class="img-fluid">
                                            </div>
                                            <div class="item-content">
                                                <h4 class="item-title ellipsis-text"> {{ $product->name }}</h4>
                                                <div class="rate-items text-warning mb-2">
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
                                                {{-- <div class="item-price">
                                                    @if ($product->discount_price)
                                                        <del>
                                                            <span class="product-Price-amount me-3">
                                                                <span
                                                                    class="product-Price-currencySymbol text-no">Rs.</span>
                                                                {{ $product->price }}
                                                            </span>
                                                        </del>

                                                        <span class="product-Price-amount mx-3  fs-6 ">
                                                            <span class="product-Price-currencySymbol">Rs.</span>
                                                            {{ $product->discount_price }}
                                                        </span>
                                                    @else
                                                        <span class="product-Price-amount me-3  fs-6 fw-600 ">
                                                            <span class="product-Price-currencySymbol">Rs.</span>
                                                            {{ $product->price }}
                                                        </span>
                                                    @endif
                                                </div> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- product end -->
                            @endforeach
                        @else
                            <p class="text-left">No related products found.</p>
                        @endif
                        {{-- ends --}}

                    </div>

                    <!-- Pagination -->
                    {{-- <nav class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav> --}}
                </div>


            </div>
        </div>
    </section>


    {{-- main Layout ends here --}}

    </main>

    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->


    <!-- Javascript -->
    @include('user.layouts.script')
</body>

</html>
