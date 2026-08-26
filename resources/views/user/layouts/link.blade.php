 <!-- Preload LCP Images (Hero background + first slide product image) -->
 <link rel="preload" href="{{ asset('user/assets/img/hero/hero-bg.webp') }}" as="image" fetchpriority="high">
 <link rel="preload" href="{{ asset('user/assets/img/hero/voluson.webp') }}" as="image" fetchpriority="high">

 <!-- Preload Critical Fonts -->
 <link rel="preload" href="{{ asset('user/assets/fonts/remixicon117c.woff2?t=1708865856766') }}" as="font" type="font/woff2" crossorigin>
 <link rel="preload" href="{{ asset('user/assets/fonts/flaticon_dolte46e.woff2?a3361097b78c4c9c7916f0ff217e2607') }}" as="font" type="font/woff2" crossorigin>

 <!-- Preload Critical CSS -->
 <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
 <link rel="preload" href="{{ asset('user/assets/css/header.css') }}?v={{ filemtime(public_path('user/assets/css/header.css')) }}" as="style">
 <link rel="preload" href="{{ asset('user/assets/css/style.css') }}?v={{ filemtime(public_path('user/assets/css/style.css')) }}" as="style">
 <link rel="preload" href="{{ asset('user/assets/css/responsive.css') }}?v={{ filemtime(public_path('user/assets/css/responsive.css')) }}" as="style">

 <!-- CDN Preconnects -->
 <link rel="preconnect" href="https://cdn.jsdelivr.net">
 <link rel="dns-prefetch" href="//cdn.jsdelivr.net">

 <!-- Google Fonts Preconnect and Merged Request (Asynchronous) -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@200;300;400;500;600;700;800;900&family=Manrope:wght@300;400;500;600;700;800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
 <noscript><link href="https://fonts.googleapis.com/css2?family=Archivo:wght@200;300;400;500;600;700;800;900&family=Manrope:wght@300;400;500;600;700;800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"></noscript>

 <!-- Favicon -->
 <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/favicon.png') }}">

 <!-- Critical CSS -->
 <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
  <!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<noscript>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</noscript> -->
 <link rel="stylesheet" href="{{ asset('user/assets/css/header.css') }}?v={{ filemtime(public_path('user/assets/css/header.css')) }}">
 <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}?v={{ filemtime(public_path('user/assets/css/style.css')) }}">
 <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}?v={{ filemtime(public_path('user/assets/css/responsive.css')) }}">
 @if (request()->routeIs('home', 'about'))
 <link rel="stylesheet" href="{{ asset('user/assets/css/home-custom.css') }}?v={{ filemtime(public_path('user/assets/css/home-custom.css')) }}">
 @endif

 <!-- Non-Critical Stylesheets (Asynchronous) -->
 <link rel="stylesheet" href="{{ asset('user/assets/css/aos.css') }}" media="print" onload="this.media='all'">
 <noscript><link rel="stylesheet" href="{{ asset('user/assets/css/aos.css') }}"></noscript>

 <link rel="stylesheet" href="{{ asset('user/assets/css/dark-theme.css') }}" media="print" onload="this.media='all'">
 <noscript><link rel="stylesheet" href="{{ asset('user/assets/css/dark-theme.css') }}"></noscript>


 <!-- Non-Critical CSS (Loaded Asynchronously) -->
 @if (request()->routeIs('product') || request()->routeIs('product_details') || request()->routeIs('category.products'))
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"></noscript>
 @endif

 <link rel="stylesheet" href="{{ asset('user/assets/css/remixicon.css') }}" media="print" onload="this.media='all'">
 <noscript><link rel="stylesheet" href="{{ asset('user/assets/css/remixicon.css') }}"></noscript>

 <link rel="stylesheet" href="{{ asset('user/assets/css/flaticon_dolt.css') }}" media="print" onload="this.media='all'">
 <noscript><link rel="stylesheet" href="{{ asset('user/assets/css/flaticon_dolt.css') }}"></noscript>

 <link rel="stylesheet" href="{{ asset('user/assets/css/swiper.bundle.min.css') }}" media="print" onload="this.media='all'">
 <noscript><link rel="stylesheet" href="{{ asset('user/assets/css/swiper.bundle.min.css') }}"></noscript>

 <link rel="stylesheet" href="{{ asset('user/assets/css/footer.css') }}" media="print" onload="this.media='all'">
 <noscript><link rel="stylesheet" href="{{ asset('user/assets/css/footer.css') }}"></noscript>

 <style>
     .text-blue {
         color: #2457aa;
     }
     /* Reserve height for carousel to prevent Cumulative Layout Shift (CLS) */
     .carousel-inner,
     .carousel-item,
     .hero-wrap.style-three {
         min-height: 820px;
     }
     @media (min-width: 576px) {
         .carousel-inner,
         .carousel-item,
         .hero-wrap.style-three {
             min-height: 850px;
         }
     }
     @media (min-width: 992px) {
         .carousel-inner,
         .carousel-item,
         .hero-wrap.style-three {
             min-height: 620px;
         }
     }
     /* Prevent layout shift on patient recovered badge */
     .patient-recovered {
         min-width: 230px;
         min-height: 48px;
         display: inline-flex;
         align-items: center;
     }



.carousel-control-next, .carousel-control-prev {
 
    width: 4% !important;}
 </style>
