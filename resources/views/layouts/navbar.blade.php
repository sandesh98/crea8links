<header class="header fixed-top">
    <!-- Header Style One Begin -->
    <div class="fixed-top header-main style--one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-4 col-8">
                    <!-- Logo Begin -->
                    <div class="logo">
                        <a href="{{ route('home.index') }}">
                            <img class="default-logo" src="{{ asset('img/logo.png') }}" data-rjs="2" alt="">
                            <img class="sticky-logo" src="{{ asset('img/sticky_logo.png') }}" data-rjs="2" alt="">
                        </a>
                    </div>
                    <!-- Logo End -->
                </div>

                <div class="col-lg-9 col-sm-8 col-4">
                    <!-- Main Menu Begin -->
                    <div class="main-menu d-flex align-items-center justify-content-end">
                        <ul class="nav align-items-center">
                            <li class="{{ Route::is('home.index') ? 'current-menu-parent' : '' }}">
                                <a href="{{ route('home.index') }}">Home</a>
                            </li>
{{--                            <li class="{{ Route::is('service.index') ? 'current-menu-parent' : '' }}">--}}
{{--                                <a href="{{ route('service.index') }}">Diensten</a>--}}
{{--                            </li>--}}
{{--                            <li class="{{ route::is('project.index') ? 'current-menu-parent' : '' }}">--}}
{{--                                <a href="{{ route('project.index') }}">Projecten</a>--}}
{{--                            </li>--}}
                            <li class="{{ Route::is('contact.index') ? 'current-menu-parent' : '' }}">
                                <a href="{{ route('contact.index') }}">Contact</a>
                            </li>
                            <li>
                                @if(Route::is('influencer.*'))
                                    <a href="{{ route('home.index') }}" class="banner-btn btn" style="line-height: 52px"><span>Bezoeker</span></a>
                                    @else
                                    <a href="{{ route('influencer.index') }}" class="banner-btn btn" style="line-height: 52px"><span>influencers</span></a>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <!-- Main Menu ENd -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Style One End -->
</header>
