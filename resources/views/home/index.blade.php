@extends('layouts.master')

@section('content')
    <!-- Slider Begin -->
    <section class="banner section-pattern" data-bg-img="img/section-pattern/slider-pattern.png">
        <!-- Banner Slider Begin -->
        <div class="d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Banner Content Begin -->
                        <div class="banner-content">
                            <h1>In
                                <span>creativity</span> <br>
                                we trust</h1>
                            <p>Prospect humoured mistress to by proposal marianne attended. Simplicity the far
                                admiration preference everything. Up help home head spot an he room in.</p>
                            <a href="#" data-toggle="modal" data-target="#appointmentModalForm"
                               class="banner-btn btn"><span>Maak een afspraak</span></a>
                        </div>
                        <!-- Banner Content End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Banner Content Begin -->
                        <div class="banner-image mt-50 mt-lg-0 text-center text-lg-right">
                            <img src="img/banner/slider-1.png" data-rjs="2" alt="">
                        </div>
                        <!-- Banner Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Slider End -->
    </section>
    <!-- Slider End -->

    @include('partials.home.modal')

{{--    @include('partials.home.feature')--}}

    @include('partials.home.about')

    <!-- Work Process Begin -->
{{--    <section class="pt-120 pb-120 section-pattern ov-hidden" data-bg-img="img/section-pattern/about-pattern.png">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-7">--}}
{{--                    <!-- Section Title Begin -->--}}
{{--                    <div class="section-title">--}}
{{--                        <h3>About Agency</h3>--}}
{{--                        <h2>We’re Expertise & <br>--}}
{{--                            Strategic Agency To Take <br>--}}
{{--                            Care Of Your Business</h2>--}}
{{--                        <p>Met defective are allowance two perceived listening consulted contained. It chicken oh--}}
{{--                            colonel pressed excited suppose--}}
{{--                            to shortly.</p>--}}
{{--                    </div>--}}
{{--                    <!-- Section Title End -->--}}

{{--                    <!-- About Tabs Begin -->--}}
{{--                    <div class="about-nav-tab">--}}
{{--                        <!-- Nav Tabs Begin -->--}}
{{--                        <ul class="nav nav-tabs" role="tablist">--}}
{{--                            <li class="nav-items">--}}
{{--                                <a class="nav-link active" data-toggle="tab" href="#mission" role="tab"--}}
{{--                                   aria-selected="true">Our Mission</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-items">--}}
{{--                                <a class="nav-link" data-toggle="tab" href="#vission" role="tab"--}}
{{--                                   aria-selected="false">Our Vission</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <!-- Nav Tabs End -->--}}

{{--                        <!-- Tab Contents Begin -->--}}
{{--                        <div class="tab-content">--}}
{{--                            <!-- Mission Tab Begin -->--}}
{{--                            <div class="tab-pane fade show active" id="mission" role="tabpanel">--}}
{{--                                <p>Surprise not wandered speedily husbands although yet end. Are court tiled cease young--}}
{{--                                    built fat one man taken. We--}}
{{--                                    highest ye friends is exposed equally in. Ignorant had too strictly followed.</p>--}}

{{--                                <ul class="list-unstyled list-check">--}}
{{--                                    <li><i class="fa fa-check" aria-hidden="true"></i> Become successful & superior</li>--}}
{{--                                    <li><i class="fa fa-check" aria-hidden="true"></i> Provide quick & good solution for--}}
{{--                                        business</li>--}}
{{--                                </ul>--}}

{{--                                <a href="#" class="btn"><span>SEE MORE</span></a>--}}
{{--                            </div>--}}
{{--                            <!-- Mission Tab End -->--}}

{{--                            <!-- Vission Tab Begin -->--}}
{{--                            <div class="tab-pane fade" id="vission" role="tabpanel">--}}
{{--                                <p>It is a long established fact that a reader will be distracted by the readable--}}
{{--                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that--}}
{{--                                    it has a more-or-less normal distribution of letters.</p>--}}

{{--                                <ul class="list-unstyled list-check">--}}
{{--                                    <li><i class="fa fa-check" aria-hidden="true"></i> Become successful & superior</li>--}}
{{--                                    <li><i class="fa fa-check" aria-hidden="true"></i> Provide quick & good solution for--}}
{{--                                        business</li>--}}
{{--                                </ul>--}}

{{--                                <a href="#" class="btn"><span>SEE MORE</span></a>--}}
{{--                            </div>--}}
{{--                            <!-- Vission Tab End -->--}}
{{--                        </div>--}}
{{--                        <!-- Tab Contents End -->--}}
{{--                    </div>--}}
{{--                    <!-- About Tabs End -->--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 video-area mt-50 mt-lg-0">--}}
{{--                    <img src="img/section-bg/about-feature.png" data-rjs="2" alt="">--}}
{{--                    <a href="#" class="vdo-btn popup-video"><img src="img/icons/play.svg" class="svg" alt=""> Watch Video</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Work Process End -->

    <!-- Service Begin -->
    <section class="pt-120 pb-90 section-pattern" data-bg-img="img/section-pattern/service-pattern.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Begin -->
                    <div class="section-title">
                        <h3>Service</h3>
                        <h2>We Bieden <br>
                            De Beste Solutie <br>
                            Voor Uw Bedrijf</h2>
                        <p>We highest ye friends is exposed equally in. Ignorant had too strictly followed. Astonished
                            as travelling assistance or
                            unreserved oh pianoforte ye.</p>
                    </div>
                    <!-- Section Title End -->

                    {{--                <!-- Button Begin -->--}}
                    {{--                <a href="#" class="btn"><span>view All</span></a>--}}
                    {{--                <!-- Button End -->--}}
                </div>

                <div class="col-lg-6">
                    <div class="row mt-40 mt-lg-0">
                        <div class="col-sm-6 single-service-wrapper">
                            <!-- Single Service Begin -->
                            <div class="single-service text-center">
                                <!-- Icon Begin -->
                                <div class="icon">
                                    <img src="img/icons/service-1.png" data-rjs="2" alt="">
                                </div>
                                <!-- Icon End  -->

                                <!-- Content Begin -->
                                <div class="content">
                                    <h4>Financial Planning</h4>
                                    <p>Saved he do fruit woody of to. Met defective are allowance two.</p>
                                    <a href="#" class="btn-inline">Read More</a>
                                </div>
                                <!-- Content End -->
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-sm-6 single-service-wrapper">
                            <!-- Single Service Begin -->
                            <div class="single-service text-center">
                                <!-- Icon Begin -->
                                <div class="icon">
                                    <img src="img/icons/service-2.png" data-rjs="2" alt="">
                                </div>
                                <!-- Icon End  -->

                                <!-- Content Begin -->
                                <div class="content">
                                    <h4>Advanced Analytics</h4>
                                    <p> Simplicity the far admiration preference thing.Up home head.</p>
                                    <a href="#" class="btn-inline">Read More</a>
                                </div>
                                <!-- Content End -->
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-sm-6 single-service-wrapper">
                            <!-- Single Service Begin -->
                            <div class="single-service text-center">
                                <!-- Icon Begin -->
                                <div class="icon">
                                    <img src="img/icons/service-3.png" data-rjs="2" alt="">
                                </div>
                                <!-- Icon End  -->

                                <!-- Content Begin -->
                                <div class="content">
                                    <h4>Market Research</h4>
                                    <p>Front no party young abode state up. Saved he do fruit woody of to.</p>
                                    <a href="#" class="btn-inline">Read More</a>
                                </div>
                                <!-- Content End -->
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-sm-6 single-service-wrapper">
                            <!-- Single Service Begin -->
                            <div class="single-service text-center">
                                <!-- Icon Begin -->
                                <div class="icon">
                                    <img src="img/icons/service-4.png" data-rjs="2" alt="">
                                </div>
                                <!-- Icon End  -->

                                <!-- Content Begin -->
                                <div class="content">
                                    <h4>Business Campaign</h4>
                                    <p>He improve started no we manners however effects. Prospect humoured.</p>
                                    <a href="#" class="btn-inline">Read More</a>
                                </div>
                                <!-- Content End -->
                            </div>
                            <!-- Single Service End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Counter Begin -->
{{--    <section class="pt-120 pb-70 gradient-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <!-- Single Counter -->--}}
{{--                <div class="col-lg-3 col-sm-6">--}}
{{--                    <div class="single-counter text-center text-white">--}}
{{--                        <h2 class="count"><span>15</span></h2>--}}
{{--                        <p>Years of experience</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- End Single Counter -->--}}

{{--                <!-- Single Counter -->--}}
{{--                <div class="col-lg-3 col-sm-6">--}}
{{--                    <div class="single-counter text-center text-white">--}}
{{--                        <h2 class="count"><span>1250</span>+</h2>--}}
{{--                        <p>Happy Clients</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- End Single Counter -->--}}

{{--                <!-- Single Counter -->--}}
{{--                <div class="col-lg-3 col-sm-6">--}}
{{--                    <div class="single-counter text-center text-white">--}}
{{--                        <h2 class="count"><span>1</span>k+</h2>--}}
{{--                        <p>Project Done</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- End Single Counter -->--}}

{{--                <!-- Single Counter -->--}}
{{--                <div class="col-lg-3 col-sm-6">--}}
{{--                    <div class="single-counter text-center text-white">--}}
{{--                        <h2 class="count"><span>100</span>+</h2>--}}
{{--                        <p>Giving Consultancy</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- End Single Counter -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Counter End -->

{{--    @include('partials.home.pricing')--}}

{{--    @include('partials.home.projects')--}}

{{--    @include('partials.home.team')--}}

    @include('partials.home.brandslider')
@endsection
