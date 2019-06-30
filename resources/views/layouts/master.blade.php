<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Crea8links</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli%7CRubik:400,400i,500,700">

    <!-- ======= Bootstrap CSS ======= -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- ======= Font Awesome CSS ======= -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ======= Owl Carousel CSS ======= -->
    <link rel="stylesheet" href="plugins/owlcarousel/owl.carousel.min.css">

    <!-- ======= Magnific Popup CSS ======= -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.min.css">

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="css/style.css">

    <!-- ======= Custom Stylesheet ======= -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>

@include('layouts.preloader')

@include('layouts.navbar')

<!-- Offcanvas Begin -->
<div class="offcanvas-overlay fixed-top w-100 h-100"></div>
<div class="offcanvas-wrapper bg-white fixed-top h-100">
    <!-- Offcanvas Close Button Begin -->
    <div class="offcanvas-close position-absolute">
        <img src="img/icons/close.svg" class="svg" alt="">
    </div>
    <!-- Offcanvas Close Button End -->

    <!-- Offcanvas Content Begin -->
    <div class="offcanvas-content">
        <!-- About Widget Begin -->
        <div class="widget widget_about">
            <div class="widget-logo">
                <img src="img/logo.png" data-rjs="2" alt="">
            </div>

            <div class="about-content">
                <p>Really regard excuse off ten pulled. Lady am room head so lady four or eyes an household
                    behaviour.</p>
            </div>
        </div>
        <!-- About Widget End -->

        <!-- Flicker Widget Begin -->
        <div class="widget widget_flicker">
            <!-- Widget Logo Begin -->
            <div class="widget-title">
                <h4>Latest Shots</h4>
            </div>
            <!-- Widget Logo End -->

            <ul class="d-flex flex-wrap">
                <li><a href="#"><img src="img/flicker/f1.png" data-rjs="2" alt=""></a></li>
                <li><a href="#"><img src="img/flicker/f2.png" data-rjs="2" alt=""></a></li>
                <li><a href="#"><img src="img/flicker/f3.png" data-rjs="2" alt=""></a></li>
                <li><a href="#"><img src="img/flicker/f4.png" data-rjs="2" alt=""></a></li>
                <li><a href="#"><img src="img/flicker/f5.png" data-rjs="2" alt=""></a></li>
                <li><a href="#"><img src="img/flicker/f6.png" data-rjs="2" alt=""></a></li>
            </ul>
        </div>
        <!-- Flicker Widget End -->

        <!-- Contact Widget Begin -->
        <div class="widget widget_contact_info">
            <!-- Widget Logo Begin -->
            <div class="widget-title">
                <h4>Get in touch</h4>
            </div>
            <!-- Widget Logo End -->

            <!-- Widget Content Begin -->
            <div class="info-content">
                <div class="single-info">
                    <span>Office Location</span>
                    <p>173 Collins Street West victoria, Melbourne, Australia</p>
                </div>
                <div class="single-info">
                    <span>Business Phone</span>
                    <p><a href="#">+0096665431</a><a href="#">+0096667331</a></p>
                </div>
                <div class="single-info">
                    <span>Support mail</span>
                    <p>
                        <a href="#">bizidea@info.com</a>
                        <a href="#">bizidea@gmail.com</a>
                    </p>
                </div>
            </div>
            <!-- Widget Content End -->
        </div>
        <!-- About Widget End -->

        <!-- Offcanvas Button Begin -->
        <div class="offcanvas-btn">
            <a href="#" class="btn"><span>Get Appointment</span></a>
        </div>
        <!-- Offcanvas Button End -->
    </div>
    <!-- Offcanvas Content End -->
</div>
<!-- Offcanvas End -->

<!-- Slider Begin -->
<section class="banner section-pattern" data-bg-img="img/section-pattern/slider-pattern.png">
    <!-- Banner Slider Begin -->
    <div class="banner-slider owl-carousel d-flex align-items-center justify-content-center"
         data-owl-animate-in="fadeIn" data-owl-animate-Out="fadeOut" data-owl-autoplay="false" data-owl-dots="true">
        <!-- Single Slide Begin -->
{{--        <div class="single-banner-slider">--}}
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
                               class="banner-btn btn"><span>Get Appointment</span></a>
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
        <!-- Single Slide End -->

        <!-- Single Slide Begin -->
{{--        <div class="single-banner-slider">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <!-- Banner Content Begin -->--}}
{{--                        <div class="banner-content">--}}
{{--                            <h1>Our <span>Business</span> <br>--}}
{{--                                Is Your Business</h1>--}}
{{--                            <p>Tolerably we as extremity exquisite do commanded. Doubtful offended do entrance of--}}
{{--                                landlord moreover is mistress in. Nay--}}
{{--                                was appear entire ladies.</p>--}}
{{--                            <a href="#" class="banner-btn btn"><span>Get Appointment</span></a>--}}
{{--                        </div>--}}
{{--                        <!-- Banner Content End -->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <!-- Banner Content Begin -->--}}
{{--                        <div class="banner-image mt-50 mt-lg-0 text-center text-lg-right">--}}
{{--                            <img src="img/banner/slider-2.png" data-rjs="2" alt="">--}}
{{--                        </div>--}}
{{--                        <!-- Banner Content End -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Single Slide End -->
    </div>
    <!-- Banner Slider End -->
</section>
<!-- Slider End -->

<!-- Modal Form Begin -->
<div class="appointment-modal modal fade" id="appointmentModalForm" tabindex="1" role="dialog"
     aria-labelledby="appointmentModalForm" aria-hidden="true">
    <div class="modal-dialog d-flex align-items-center" role="document">
        <div class="container">
            <div class=" row justify-content-center">
                <div class="col-lg-8 col-12">
                    <!-- Modal Content Begin -->
                    <div class="modal-content">
                        <!-- Modal Close Button Begin -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/icons/close.svg" alt="">
                        </button>
                        <!-- End Modal Close End -->

                        <!-- Appointment Form Begin -->
                        <form action="#" method="POST" class="appointment-form">
                            <h2 class="form-title">Request Appoinment</h2>
                            <input class="theme-input-style" type="text" placeholder="Full Name">
                            <input class="theme-input-style" type="email" placeholder="Email">
                            <input class="theme-input-style" type="tel" placeholder="Phone">

                            <select class="theme-input-style clearfix">
                                <option value="" disabled="" selected="">Select purpose</option>
                                <option value="01">Business</option>
                                <option value="01">Consultancy</option>
                            </select>

                            <textarea class="theme-input-style" placeholder="Message"></textarea>

                            <button class="btn" type="submit"><span>Send request</span></button>
                        </form>
                        <!-- End Appointment Form End -->
                    </div>
                    <!-- Modal Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Form End -->

<!-- Feature Begin -->
<section class="pt-120 pb-90 section-pattern" data-bg-img="img/section-pattern/feature-pattern.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Begin -->
                <div class="single-feature text-center">
                    <!-- Feature Image Begin -->
                    <div class="image">
                        <img src="img/feature/feature-1.png" data-rjs="2" alt="">
                    </div>
                    <!-- Feature Image End -->

                    <!-- Feature Content Begin -->
                    <div class="content">
                        <h3>Best Consulting</h3>
                        <p>Concerns greatest margaret him
                            absolute entrance nay.</p>
                    </div>
                    <!-- Feature Content End -->
                </div>
                <!-- Single Feature End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Begin -->
                <div class="single-feature text-center">
                    <!-- Feature Image Begin -->
                    <div class="image">
                        <img src="img/feature/feature-2.png" data-rjs="2" alt="">
                    </div>
                    <!-- Feature Image End -->

                    <!-- Feature Content Begin -->
                    <div class="content">
                        <h3>Market Research</h3>
                        <p>Concerns greatest margaret him
                            absolute entrance nay.</p>
                    </div>
                    <!-- Feature Content End -->
                </div>
                <!-- Single Feature End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Begin -->
                <div class="single-feature text-center">
                    <!-- Feature Image Begin -->
                    <div class="image">
                        <img src="img/feature/feature-3.png" data-rjs="2" alt="">
                    </div>
                    <!-- Feature Image End -->

                    <!-- Feature Content Begin -->
                    <div class="content">
                        <h3>Market Growth</h3>
                        <p>Concerns greatest margaret him
                            absolute entrance nay.</p>
                    </div>
                    <!-- Feature Content End -->
                </div>
                <!-- Single Feature End -->
            </div>
        </div>
    </div>
</section>
<!-- Feature End -->

<!-- About Begin -->
<section class="pt-120 pb-120 section-pattern ov-hidden" data-bg-img="img/section-pattern/about-pattern.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <!-- Section Title Begin -->
                <div class="section-title">
                    <h3>About Agency</h3>
                    <h2>We’re Expertise & <br>
                        Strategic Agency To Take <br>
                        Care Of Your Business</h2>
                    <p>Met defective are allowance two perceived listening consulted contained. It chicken oh
                        colonel pressed excited suppose
                        to shortly.</p>
                </div>
                <!-- Section Title End -->

                <!-- About Tabs Begin -->
                <div class="about-nav-tab">
                    <!-- Nav Tabs Begin -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-items">
                            <a class="nav-link active" data-toggle="tab" href="#mission" role="tab"
                               aria-selected="true">Our Mission</a>
                        </li>
                        <li class="nav-items">
                            <a class="nav-link" data-toggle="tab" href="#vission" role="tab"
                               aria-selected="false">Our Vission</a>
                        </li>
                    </ul>
                    <!-- Nav Tabs End -->

                    <!-- Tab Contents Begin -->
                    <div class="tab-content">
                        <!-- Mission Tab Begin -->
                        <div class="tab-pane fade show active" id="mission" role="tabpanel">
                            <p>Surprise not wandered speedily husbands although yet end. Are court tiled cease young
                                built fat one man taken. We
                                highest ye friends is exposed equally in. Ignorant had too strictly followed.</p>

                            <ul class="list-unstyled list-check">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Become successful & superior</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Provide quick & good solution for
                                    business</li>
                            </ul>

                            <a href="#" class="btn"><span>SEE MORE</span></a>
                        </div>
                        <!-- Mission Tab End -->

                        <!-- Vission Tab Begin -->
                        <div class="tab-pane fade" id="vission" role="tabpanel">
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                it has a more-or-less normal distribution of letters.</p>

                            <ul class="list-unstyled list-check">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Become successful & superior</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Provide quick & good solution for
                                    business</li>
                            </ul>

                            <a href="#" class="btn"><span>SEE MORE</span></a>
                        </div>
                        <!-- Vission Tab End -->
                    </div>
                    <!-- Tab Contents End -->
                </div>
                <!-- About Tabs End -->
            </div>
            <div class="col-lg-5 video-area mt-50 mt-lg-0">
                <img src="img/section-bg/about-feature.png" data-rjs="2" alt="">
                <a href="#" class="vdo-btn popup-video"><img src="img/icons/play.svg" class="svg" alt=""> Watch Video</a>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

<!-- Work Process Begin -->
<section class="pt-120 pb-70 section-pattern" data-bg-img="img/section-pattern/work-process-pattern.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Title Begin -->
                <div class="section-title text-center">
                    <h3>Steps</h3>
                    <h2>Work Process Our Experts Do</h2>
                    <p>Delivered dejection necessary objection do mr prevailed. Mr feeling do chiefly cordial in do.
                        Water timed folly right
                        aware if oh truth. Imprudence attachment him his for sympathize.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row process-bg" data-bg-img="img/process_shape.png">
            <div class="col-lg-3 col-sm-6 single-process-wrapper">
                <!-- Single Work Process Begin -->
                <div class="single-process text-center">
                    <!-- Image Begin -->
                    <div class="image">
                        <img src="img/process/process-1.png" data-rjs="2" alt="">
                    </div>
                    <!-- Image End -->

                    <!-- Content Begin -->
                    <div class="content">
                        <h3>Planning</h3>
                        <p>He improve started no we manners however effects.</p>
                    </div>
                    <!-- Content End -->
                </div>
                <!-- Single Work Process End -->
            </div>
            <div class="col-lg-3 col-sm-6 single-process-wrapper">
                <!-- Single Work Process Begin -->
                <div class="single-process text-center">
                    <!-- Image Begin -->
                    <div class="image">
                        <img src="img/process/process-2.png" data-rjs="2" alt="">
                    </div>
                    <!-- Image End -->

                    <!-- Content Begin -->
                    <div class="content">
                        <h3>Research</h3>
                        <p>Up help home head spot an he room in.</p>
                    </div>
                    <!-- Content End -->
                </div>
                <!-- Single Work Process End -->
            </div>
            <div class="col-lg-3 col-sm-6 single-process-wrapper">
                <!-- Single Work Process Begin -->
                <div class="single-process text-center">
                    <!-- Image Begin -->
                    <div class="image">
                        <img src="img/process/process-3.png" data-rjs="2" alt="">
                    </div>
                    <!-- Image End -->

                    <!-- Content Begin -->
                    <div class="content">
                        <h3>Dealing</h3>
                        <p>Imprudence attachment him his for sympathize.</p>
                    </div>
                    <!-- Content End -->
                </div>
                <!-- Single Work Process End -->
            </div>
            <div class="col-lg-3 col-sm-6 single-process-wrapper">
                <!-- Single Work Process Begin -->
                <div class="single-process text-center">
                    <!-- Image Begin -->
                    <div class="image">
                        <img src="img/process/process-4.png" data-rjs="2" alt="">
                    </div>
                    <!-- Image End -->

                    <!-- Content Begin -->
                    <div class="content">
                        <h3>Consultancy</h3>
                        <p>He improve started no we manners however effects.</p>
                    </div>
                    <!-- Content End -->
                </div>
                <!-- Single Work Process End -->
            </div>
        </div>
    </div>
</section>
<!-- Work Process End -->

<!-- Service Begin -->
<section class="pt-120 pb-90 section-pattern" data-bg-img="img/section-pattern/service-pattern.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Begin -->
                <div class="section-title">
                    <h3>Service</h3>
                    <h2>We’re Providing <br>
                        Best Solutions <br>
                        For Your Business</h2>
                    <p>We highest ye friends is exposed equally in. Ignorant had too strictly followed. Astonished
                        as travelling assistance or
                        unreserved oh pianoforte ye.</p>
                </div>
                <!-- Section Title End -->

                <!-- Button Begin -->
                <a href="#" class="btn"><span>view All</span></a>
                <!-- Button End -->
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
<section class="pt-120 pb-70 gradient-bg">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Counter -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter text-center text-white">
                    <h2 class="count"><span>15</span></h2>
                    <p>Years of experience</p>
                </div>
            </div>
            <!-- End Single Counter -->

            <!-- Single Counter -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter text-center text-white">
                    <h2 class="count"><span>1250</span>+</h2>
                    <p>Happy Clients</p>
                </div>
            </div>
            <!-- End Single Counter -->

            <!-- Single Counter -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter text-center text-white">
                    <h2 class="count"><span>1</span>k+</h2>
                    <p>Project Done</p>
                </div>
            </div>
            <!-- End Single Counter -->

            <!-- Single Counter -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter text-center text-white">
                    <h2 class="count"><span>100</span>+</h2>
                    <p>Giving Consultancy</p>
                </div>
            </div>
            <!-- End Single Counter -->
        </div>
    </div>
</section>
<!-- Counter End -->

<!-- Pricing Plan Begin -->
<section class="pt-120 pb-120 section-pattern" data-bg-img="img/section-pattern/price-pattern.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Title Begin -->
                <div class="section-title text-center">
                    <h3>Pricing</h3>
                    <h2>Choose Your Best Plan</h2>
                    <p>On recommend tolerably my belonging or am. Mutual has cannot beauty indeed now sussex merely
                        you. It possible no
                        husbands jennings ye offended packages pleasant he.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <!-- Pricing NavTab Begin -->
        <div class="pricing-navtab">
            <!-- Pricing Nav Begin -->
            <ul class="row nav nav-tabs" role="tablist">
                <!-- Single Nav Begin -->
                <li class="nav-item col-lg-3 col-sm-6">
                    <a href="#personal" class="nav-link text-center active" data-toggle="tab" role="tab">
                        <h4>Personal</h4>
                        <h2>$250</h2>
                    </a>
                </li>

                <!-- Single Nav End -->

                <!-- Single Nav Begin -->
                <li class="nav-item col-lg-3 col-sm-6">
                    <a href="#startup" class="nav-link text-center" data-toggle="tab" role="tab">
                        <h4>Startup</h4>
                        <h2>$500</h2>
                    </a>
                </li>
                <!-- Single Nav End -->

                <!-- Single Nav Begin -->
                <li class="nav-item col-lg-3 col-sm-6">
                    <a href="#business" class="nav-link text-center" data-toggle="tab" role="tab">
                        <h4>Business</h4>
                        <h2>$1050</h2>
                    </a>
                </li>
                <!-- Single Nav End -->

                <!-- Single Nav Begin -->
                <li class="nav-item col-lg-3 col-sm-6">
                    <a href="#entrepreneur" class="nav-link text-center" data-toggle="tab" role="tab">
                        <h4>Entrepreneur</h4>
                        <h2>$3000</h2>
                    </a>
                </li>
                <!-- Single Nav End -->

            </ul>
            <!-- Pricing Nav End -->

            <!-- Pricing Tab Content Begin -->
            <div class="tab-content">
                <!-- Single Content Begin -->
                <div class="tab-pane fadeInUp animated show active" id="personal" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Tab Pane Text Begin -->
                            <div class="tab-pane-text">
                                <h3>What’s included in this package</h3>
                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Market sizing and share
                                        analysis</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Product value proposition
                                        analysis</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Identify strategic
                                        partnership</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Implementation milestone
                                        review</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Innovation opportunities</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Distribution channel
                                        opportunities</li>
                                </ul>
                            </div>
                            <!-- Tab Pane Text End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Tab Pane Text Begin -->
                            <div class="tab-pane-text mt-50 mt-lg-0">
                                <h3>Business approach -</h3>
                                <p>Our experts follow the business strategy to grow up your business and engage more
                                    customers to your door.</p>
                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Getting to know your business
                                        vision and the key strategic drivers.</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Detailed research of the
                                        business environment, target market, and marketing as well as growth
                                        opportunities.</li>
                                </ul>
                                <a href="#" class="btn"><span>purchase</span></a>
                            </div>
                            <!-- Tab Pane Text End -->
                        </div>
                    </div>
                </div>
                <!-- Single Content End -->

                <!-- Single Content Begin -->
                <div class="tab-pane fadeInUp animated" id="startup" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Tab Pane Text Begin -->
                            <div class="tab-pane-text">
                                <h3>What’s included in this package</h3>
                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Market sizing and share
                                        analysis</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Product value proposition
                                        analysis</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Identify strategic
                                        partnership</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Implementation milestone
                                        review</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Innovation opportunities</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Distribution channel
                                        opportunities</li>
                                </ul>
                            </div>
                            <!-- Tab Pane Text End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Tab Pane Text Begin -->
                            <div class="tab-pane-text mt-50 mt-lg-0">
                                <h3>Business approach -</h3>
                                <p>Our experts follow the business strategy to grow up your business and engage more
                                    customers to your door.
                                </p>
                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Getting to know your business
                                        vision and the key
                                        strategic drivers.</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Detailed research of the
                                        business environment, target
                                        market, and marketing as well as growth opportunities.</li>
                                </ul>
                                <a href="#" class="btn"><span>purchase</span></a>
                            </div>
                            <!-- Tab Pane Text End -->
                        </div>
                    </div>
                </div>
                <!-- Single Content End -->

                <!-- Single Content Begin -->
                <div class="tab-pane fadeInUp animated" id="business" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Tab Pane Text Begin -->
                            <div class="tab-pane-text">
                                <h3>What’s included in this package</h3>
                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Market sizing and share
                                        analysis</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Product value proposition
                                        analysis</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Identify strategic
                                        partnership</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Implementation milestone
                                        review</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Innovation opportunities</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Distribution channel
                                        opportunities</li>
                                </ul>
                            </div>
                            <!-- Tab Pane Text End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Tab Pane Text Begin -->
                            <div class="tab-pane-text mt-50 mt-lg-0">
                                <h3>Business approach -</h3>
                                <p>Our experts follow the business strategy to grow up your business and engage more
                                    customers to your door.
                                </p>
                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Getting to know your business
                                        vision and the key
                                        strategic drivers.</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Detailed research of the
                                        business environment, target
                                        market, and marketing as well as growth opportunities.</li>
                                </ul>
                                <a href="#" class="btn"><span>purchase</span></a>
                            </div>
                            <!-- Tab Pane Text End -->
                        </div>
                    </div>
                </div>
                <!-- Single Content End -->

                <!-- Single Content Begin -->
                <div class="tab-pane fadeInUp animated" id="entrepreneur" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Tab Pane Text Begin -->
                            <div class="tab-pane-text">
                                <h3>What’s included in this package</h3>
                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Market sizing and share
                                        analysis</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Product value proposition
                                        analysis</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Identify strategic
                                        partnership</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Implementation milestone
                                        review</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Innovation opportunities</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Distribution channel
                                        opportunities</li>
                                </ul>
                            </div>
                            <!-- Tab Pane Text End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Tab Pane Text Begin -->
                            <div class="tab-pane-text mt-50 mt-lg-0">
                                <h3>Business approach -</h3>
                                <p>Our experts follow the business strategy to grow up your business and engage more
                                    customers to your door.
                                </p>
                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Getting to know your business
                                        vision and the key
                                        strategic drivers.</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Detailed research of the
                                        business environment, target
                                        market, and marketing as well as growth opportunities.</li>
                                </ul>
                                <a href="#" class="btn"><span>purchase</span></a>
                            </div>
                            <!-- Tab Pane Text End -->
                        </div>
                    </div>
                </div>
                <!-- Single Content End -->
            </div>
            <!-- Pricing Tab Content End -->
        </div>
        <!-- Pricing NavTab End -->
    </div>
</section>
<!-- Pricing Plan End -->

<!-- Project Begin -->
<section class="pt-120 pb-90 section-pattern" data-bg-img="img/section-pattern/case-study-pattern.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Title Begin -->
                <div class="section-title text-center">
                    <h3>Case Studies</h3>
                    <h2>Our Recent Project</h2>
                    <p>Mutual has cannot beauty indeed now sussex merely you. It possible no husbands jennings ye
                        offended packages pleasant
                        he. Remainder recommend who applauded departure joy.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Porject Nav Begin -->
                <div class="project-nav text-center mb-30">
                    <div class="nav justify-content-center align-items-center">
                        <ul class="project_filter list-inline">
                            <li class="active" data-filter="*">
                                <span class="filter-btn">All</span>
                            </li>
                            <li class="" data-filter=".financial">
                                <span class="filter-btn">Financial</span>
                            </li>
                            <li class="" data-filter=".business">
                                <span class="filter-btn">Business</span>
                            </li>
                            <li class="" data-filter=".funds">
                                <span class="filter-btn">Funds</span>
                            </li>
                            <li class="" data-filter=".investment">
                                <span class="filter-btn">Investment</span>
                            </li>
                            <li class="" data-filter=".sales">
                                <span class="filter-btn">Sales</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Project Nav End -->
            </div>
        </div>

        <div class="row project-items grid">
            <!-- Single Project Begin -->
            <div class="col-lg-6 grid-item sales business">
                <div class="single-project-item">
                    <!-- Project Image Begin -->
                    <div class="image">
                        <img src="img/project/project-1.png" data-rjs="2" alt="">
                    </div>
                    <!-- Project Image End -->

                    <!-- Project Body Begin -->
                    <div class="project-body">
                        <h3><a href="#">Business consultant finds more ways to bring business to light</a></h3>
                        <p class="project-meta">Client:<span>Alto Palermo S.A.</span></p>
                        <p>Imprudence attachment him his for sympathize. Large above be to means. Dashwood do
                            provided stronger is. But discretion
                            frequently.</p>
                        <a href="#" class="btn-inline">Read More</a>
                    </div>
                    <!-- Project Body End -->
                </div>
            </div>
            <!-- Single Project End -->

            <!-- Single Project Begin -->
            <div class="col-lg-6 grid-item sales financial">
                <div class="single-project-item">
                    <!-- Project Image Begin -->
                    <div class="image">
                        <img src="img/project/project-2.png" data-rjs="2" alt="">
                    </div>
                    <!-- Project Image End -->

                    <!-- Project Body Begin -->
                    <div class="project-body">
                        <h3><a href="#">Business consultant finds more ways to bring business to light</a></h3>
                        <p class="project-meta">Client:<span>Alto Palermo S.A.</span></p>
                        <p>Imprudence attachment him his for sympathize. Large above be to means. Dashwood do
                            provided stronger is. But discretion
                            frequently.</p>
                        <a href="#" class="btn-inline">Read More</a>
                    </div>
                    <!-- Project Body End -->
                </div>
            </div>
            <!-- Single Project End -->

            <!-- Single Project Begin -->
            <div class="col-lg-6 grid-item investment business">
                <div class="single-project-item">
                    <!-- Project Image Begin -->
                    <div class="image">
                        <img src="img/project/project-3.png" data-rjs="2" alt="">
                    </div>
                    <!-- Project Image End -->

                    <!-- Project Body Begin -->
                    <div class="project-body">
                        <h3><a href="#">Business consultant finds more ways to bring business to light</a></h3>
                        <p class="project-meta">Client:<span>Alto Palermo S.A.</span></p>
                        <p>Imprudence attachment him his for sympathize. Large above be to means. Dashwood do
                            provided stronger is. But discretion
                            frequently.</p>
                        <a href="#" class="btn-inline">Read More</a>
                    </div>
                    <!-- Project Body End -->
                </div>
            </div>
            <!-- Single Project End -->

            <!-- Single Project Begin -->
            <div class="col-lg-6 grid-item financial funds">
                <div class="single-project-item">
                    <!-- Project Image Begin -->
                    <div class="image">
                        <img src="img/project/project-4.png" data-rjs="2" alt="">
                    </div>
                    <!-- Project Image End -->

                    <!-- Project Body Begin -->
                    <div class="project-body">
                        <h3><a href="#">Business consultant finds more ways to bring business to light</a></h3>
                        <p class="project-meta">Client:<span>Alto Palermo S.A.</span></p>
                        <p>Imprudence attachment him his for sympathize. Large above be to means. Dashwood do
                            provided stronger is. But discretion
                            frequently.</p>
                        <a href="#" class="btn-inline">Read More</a>
                    </div>
                    <!-- Project Body End -->
                </div>
            </div>
            <!-- Single Project End -->
        </div>

    </div>
</section>
<!-- Project End -->

<!-- Team Begin -->
<section class="pt-120 pb-70 section-pattern" data-bg-img="img/section-pattern/testimonial-pattern.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Title Begin -->
                <div class="section-title text-center">
                    <h3>Team Members</h3>
                    <h2>Our Experts Team Members</h2>
                    <p>Ferrars all spirits his imagine effects amongst neither. It bachelor cheerful of mistaken. Tore
                        has sons put upon wife
                        use bred seen. Its dissimilar invitation ten has discretion unreserved.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <!-- Single Team Begin -->
                <div class="single-team-member">
                    <!-- Team Image Begin -->
                    <div class="image position-relative">
                        <img src="img/shapes/team.svg" class="svg" alt="">
                        <img src="img/team/team-1.jpg" data-rjs="2" alt="">
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Info Begin -->
                    <div class="team-info">
                        <div class="info-front text-center">
                            <h4>Emillie Cole</h4>
                            <p>CEO of Bizidea</p>
                        </div>

                        <div class="info-back">
                            <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Info End -->
                </div>
                <!-- Single Team End -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Single Team Begin -->
                <div class="single-team-member">
                    <!-- Team Image Begin -->
                    <div class="image position-relative">
                        <img src="img/shapes/team.svg" class="svg" alt="">
                        <img src="img/team/team-2.jpg" data-rjs="2" alt="">
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Info Begin -->
                    <div class="team-info">
                        <div class="info-front text-center">
                            <h4>Jack Reader</h4>
                            <p>CEO of Bizidea</p>
                        </div>

                        <div class="info-back">
                            <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Info End -->

                </div>
                <!-- Single Team End -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Single Team Begin -->
                <div class="single-team-member">
                    <!-- Team Image Begin -->
                    <div class="image position-relative">
                        <img src="img/shapes/team.svg" class="svg" alt="">
                        <img src="img/team/team-3.jpg" data-rjs="2" alt="">
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Info Begin -->
                    <div class="team-info">
                        <div class="info-front text-center">
                            <h4>Mickle Jection</h4>
                            <p>CEO of Bizidea</p>
                        </div>

                        <div class="info-back">
                            <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Info End -->

                </div>
                <!-- Single Team End -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Single Team Begin -->
                <div class="single-team-member">
                    <!-- Team Image Begin -->
                    <div class="image position-relative">
                        <img src="img/shapes/team.svg" class="svg" alt="">
                        <img src="img/team/team-4.jpg" data-rjs="2" alt="">
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Info Begin -->
                    <div class="team-info">
                        <div class="info-front text-center">
                            <h4>Jeson Roy</h4>
                            <p>CEO of Bizidea</p>
                        </div>

                        <div class="info-back">
                            <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Info End -->

                </div>
                <!-- Single Team End -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Single Team Begin -->
                <div class="single-team-member">
                    <!-- Team Image Begin -->
                    <div class="image position-relative">
                        <img src="img/shapes/team.svg" class="svg" alt="">
                        <img src="img/team/team-5.jpg" data-rjs="2" alt="">
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Info Begin -->
                    <div class="team-info">
                        <div class="info-front text-center">
                            <h4>Andy Mare</h4>
                            <p>CEO of Bizidea</p>
                        </div>

                        <div class="info-back">
                            <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Info End -->

                </div>
                <!-- Single Team End -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Single Team Begin -->
                <div class="single-team-member">
                    <!-- Team Image Begin -->
                    <div class="image position-relative">
                        <img src="img/shapes/team.svg" class="svg" alt="">
                        <img src="img/team/team-6.jpg" data-rjs="2" alt="">
                    </div>
                    <!-- Team Image End -->

                    <!-- Team Info Begin -->
                    <div class="team-info">
                        <div class="info-front text-center">
                            <h4>John Snow</h4>
                            <p>CEO of Bizidea</p>
                        </div>

                        <div class="info-back">
                            <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Info End -->

                </div>
                <!-- Single Team End -->
            </div>
        </div>
    </div>
</section>
<!-- Team End -->

@include('partials.home.brandslider')

@include('layouts.footer')

@include('layouts.backtotop')

<!-- ======= jQuery Library ======= -->
<script src="js/jquery.min.js"></script>

<!-- ======= Bootstrap Bundle JS ======= -->
<script src="js/bootstrap.bundle.min.js"></script>

<!-- =======  Mobile Menu JS ======= -->
<script src="js/menu.min.js"></script>

<!-- ======= Waypoints JS ======= -->
<script src="plugins/waypoints/jquery.waypoints.min.js"></script>

<!-- ======= Counter Up JS ======= -->
<script src="plugins/waypoints/jquery.counterup.min.js"></script>

<!-- ======= Owl Carousel JS ======= -->
<script src="plugins/owlcarousel/owl.carousel.min.js"></script>

<!-- ======= Isotope JS ====== -->
<script src="plugins/isotope/isotope.pkgd.min.js"></script>

<!-- ======= Magnific Popup JS ======= -->
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- ======= Countdown JS ======= -->
<script src="plugins/countdown/countdown.min.js"></script>

<!-- ======= Retina JS ======= -->
<script src="plugins/retinajs/retina.min.js"></script>

<!-- ======= Google API ======= -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>

<!-- ======= Main JS ======= -->
<script src="js/main.js"></script>

<!-- ======= Custom JS ======= -->
<script src="js/custom.js"></script>
</body>

</html>