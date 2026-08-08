<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="glow-orb orb-1"></div>
    <div class="glow-orb orb-2"></div>
    <div class="medical-bg-icons">
        <i class="ri-heart-pulse-line med-icon med-icon-1"></i>
        <i class="ri-stethoscope-line med-icon med-icon-2"></i>
        <i class="ri-capsule-fill med-icon med-icon-3"></i>
        <i class="ri-pulse-line med-icon med-icon-4"></i>
    </div>
    <div class="container">
        <div class="breadcrumb-inner d-flex align-items-center justify-content-between">
            <div class="breadcrumb-content">
                <div class="breadcrumb-title-box">
                    <!-- @if(!empty($subtitle))
                        <span class="sub-title">
                            @if(!empty($subtitle_icon))
                                <i class="{{ $subtitle_icon }}"></i>
                            @endif
                            {{ $subtitle }}
                        </span>
                    @endif -->
                    <h2 class="breadcrumb-title">{{ $title ?? 'Sinoatrial' }}</h2>
                </div>
                <p class="breadcrumb-desc w-75 text-white">{{ $description ?? 'Providing state-of-the-art medical devices and cardiovascular diagnostic systems with trusted reliability.' }}</p>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb-menu list-style">
                        @if(!empty($items))
                            @foreach($items as $item)
                                @if(!empty($item['active']))
                                    <li class="active">
                                        @if(!empty($item['icon']))
                                            <!-- <i class="{{ $item['icon'] }} me-1"></i> -->
                                        @endif
                                        <span>{{ $item['label'] }}</span>
                                    </li>
                                @else

                               
                                    <li>
                                        <a href="{{ $item['url'] ?? '#' }}">
                                            @if(!empty($item['icon']))
                                                <i class="{{ $item['icon'] }}"></i>
                                            @endif
                                            <span>{{ $item['label'] }}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </nav>
            </div>
            @if(!empty($hero_icon))
                <div class="breadcrumb-image-box d-none d-md-block" data-aos="fade-left">
                    <div class="breadcrumb-img-wrapper">
                        <img src="{{ asset('user/assets/img/icons/' . $hero_icon) }}" alt="{{ $title ?? 'Icon' }}" class="breadcrumb-hero-img">
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
